import socket
import csv
import mysql.connector

def get_attendance_data(ip_address, port):
    try:
        # Tạo socket và kết nối đến máy chấm công Ronajack Pro
        client_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        client_socket.connect((ip_address, port))

        # Gửi yêu cầu để nhận dữ liệu chấm công
        client_socket.send(b'GET_ATTENDANCE_DATA')

        # Nhận dữ liệu từ máy chấm công
        data = client_socket.recv(1024)

        # Đóng kết nối
        client_socket.close()

        return data.decode('utf-8')  # Giả sử dữ liệu được trả về là UTF-8 encoded
    except Exception as e:
        print(f"Lỗi khi kết nối đến máy chấm công: {e}")
        return None

def process_attendance_data(data):
    try:
        # Xử lý dữ liệu từ máy chấm công Ronajack Pro
        # Ở đây, giả sử dữ liệu được trả về dưới dạng CSV
        processed_data = []
        rows = data.split('\n')
        csv_reader = csv.reader(rows)
        next(csv_reader)  # Bỏ qua header nếu có
        for row in csv_reader:
            # Xử lý từng dòng dữ liệu và thêm vào processed_data
            processed_data.append((row[0], row[1]))  # Giả sử cột 1 là EmployeeID, cột 2 là Timestamp
        return processed_data
    except Exception as e:
        print(f"Lỗi khi xử lý dữ liệu từ máy chấm công: {e}")
        return None

def save_to_mysql(data):
    try:
        # Kết nối đến cơ sở dữ liệu MySQL
        conn = mysql.connector.connect(
            host="127.0.0.1",
            user="root",
            password="",
            database="maychamcong"
        )

        # Tạo con trỏ
        cursor = conn.cursor()

        # Tạo bảng nếu chưa tồn tại
        create_table_query = """
        CREATE TABLE IF NOT EXISTS attendance (
            id INT AUTO_INCREMENT PRIMARY KEY,
            employee_id VARCHAR(255),
            timestamp DATETIME
        )
        """
        cursor.execute(create_table_query)

        # Lưu dữ liệu vào bảng MySQL
        insert_query = "INSERT INTO attendance (employee_id, timestamp) VALUES (%s, %s)"
        cursor.executemany(insert_query, data)
        
        # Commit thay đổi
        conn.commit()

        # Đóng kết nối
        cursor.close()
        conn.close()
        
        print("Dữ liệu đã được lưu vào MySQL thành công.")
    except Exception as e:
        print(f"Lỗi khi lưu dữ liệu vào MySQL: {e}")

# Thực hiện các bước
ip_address = '192.168.1.198'  # Địa chỉ IP của máy chấm công 
port = 4370  # Cổng mà máy chấm công lắng nghe 
attendance_data = get_attendance_data(ip_address, port)
if attendance_data:
    processed_data = process_attendance_data(attendance_data)
    if processed_data:
        save_to_mysql(processed_data)
    else:
        print("Không thể xử lý dữ liệu từ máy chấm công.")
else:
    print("Không thể kết nối đến máy chấm công.")