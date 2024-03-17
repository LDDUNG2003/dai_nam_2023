import socket
import dbco
# Thiết lập kết nối với máy chấm công
def connect_to_timeclock(address, port):
    client_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    client_socket.connect((address, port))
    return client_socket

# Lấy dữ liệu từ máy chấm công
def get_timeclock_data(client_socket):
    data = client_socket.recv(1024) # Nhận dữ liệu từ máy chấm công
    return data.decode() # Giải mã dữ liệu nhận được

# # Xuất dữ liệu vào cơ sở dữ liệu
# def insert_data_to_database(data):
#     # Viết code để chèn dữ liệu vào cơ sở dữ liệu ở đây
#     pass

if __name__ == "__main__":
    timeclock_address = "192.168.1.198"  # Địa chỉ IP của máy chấm công
    timeclock_port = 4370  # Cổng của máy chấm công

    try:
        timeclock_socket = connect_to_timeclock(timeclock_address, timeclock_port)
        timeclock_data = get_timeclock_data(timeclock_socket)
        # insert_data_to_database(timeclock_data)
    except Exception as e:
        print(f"Error: {e}")