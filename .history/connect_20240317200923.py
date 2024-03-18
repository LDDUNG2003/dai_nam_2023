import socket

def get_attendance_data(ip_address, port):
    try:
        # Tạo socket
        client_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        
        # Kết nối tới máy chấm công
        client_socket.connect((ip_address, port))
        
        # Gửi yêu cầu lấy dữ liệu
        client_socket.send(b'GET_ATTENDANCE_DATA')
        
        # Nhận dữ liệu từ máy chấm công
        data = client_socket.recv(1024)
        
        # Xử lý dữ liệu nhận được
        # Ở đây bạn có thể thực hiện các xử lý phù hợp với định dạng dữ liệu của máy chấm công
        
        # Đóng kết nối
        client_socket.close()
        
        return data.decode('utf-8')  # Giả sử dữ liệu được trả về là UTF-8 encoded
    except Exception as e:
        print(f"Error: {e}")
        return None

# Sử dụng hàm để lấy dữ liệu
ip_address = '192.168.1.198'  # Địa chỉ IP của máy chấm công
port = 4370  # Cổng mà máy chấm công lắng nghe
attendance_data = get_attendance_data(ip_address, port)
if attendance_data:
    print("Dữ liệu chấm công:")
    print(attendance_data)
else:
    print("Không thể lấy dữ liệu chấm công.")