import socket
import mysql.connector
db_config = {
    'host': '127.0.0.1',
    'user': 'root',
    'password': '',
    'database': 'maychamcong'
}

# Thiết lập kết nối với máy chấm công
def connect_to_timeclock(address, port):
    client_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    client_socket.connect((address, port))
    return client_socket

# Lấy dữ liệu từ máy chấm công
def get_timeclock_data(client_socket):
    def process_attendance_data(attendance_data):
        try:
            header = attendance_data[0]
            records = attendance_data[1:]

            # In header
            print("Header:")
            print(header)

            # In thông tin chấm công
            print("Dữ liệu chấm công:")
            for record in records:
                employee_id = record[0]
                timestamp = record[1]
                print(f"Nhân viên {employee_id} chấm công lúc {timestamp}")

            # Bạn có thể thực hiện các xử lý khác ở đây tùy thuộc vào nhu cầu của bạn

        except Exception as e:
            print(f"Error: {e}")
 # Giải mã dữ liệu nhận được

# Xuất dữ liệu vào cơ sở dữ liệu
def insert_data_to_database(data):
    try:
        connection = mysql.connector.connect(**db_config)
        cursor = connection.cursor()
        datacheck = str(data)
        print(datacheck)
        # Viết truy vấn SQL để chèn dữ liệu vào cơ sở dữ liệu
        query = "INSERT INTO quanlynhanvien (ma_nv, dayCheckIn, TimeIN, TimeOut ) VALUES ()"
        # Thực thi truy vấn với dữ liệu cụ thể
        cursor.execute(query, data)
        
        # Lưu thay đổi vào cơ sở dữ liệu
        connection.commit()
        print("Dữ liệu đã được chèn thành công!")

    except mysql.connector.Error as error:
        print(f"Lỗi khi chèn dữ liệu: {error}")
    pass

if __name__ == "__main__":
    timeclock_address = "192.168.1.198"  # Địa chỉ IP của máy chấm công
    timeclock_port = 4370  # Cổng của máy chấm công

    try:
        timeclock_socket = connect_to_timeclock(timeclock_address, timeclock_port)
        timeclock_data = get_timeclock_data(timeclock_socket)
        insert_data_to_database(timeclock_data)
    except Exception as e:
        print(f"Error: {e}")