import socket
import mysql.connector

def get_attendance_data(ip_address, port):
    # Code để lấy dữ liệu từ máy chấm công
    pass

def process_attendance_data(attendance_data):
    # Code để xử lý dữ liệu nhận được từ máy chấm công
    pass

def save_to_mysql(data):
    try:
        # Kết nối tới cơ sở dữ liệu MySQL
        conn = mysql.connector.connect(
            host="127.0.0.1",
            user="your_mysql_username",
            password="your_mysql_password",
            database="your_mysql_database"
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

# Lấy dữ liệu từ máy chấm công
ip_address = '192.168.1.198'
port = 4370
attendance_data = get_attendance_data(ip_address, port)

# Xử lý dữ liệu nhận được
processed_data = process_attendance_data(attendance_data)

# Lưu dữ liệu vào MySQL
if processed_data:
    save_to_mysql(processed_data)
    print ("lưu thành công vào MySQL")
    