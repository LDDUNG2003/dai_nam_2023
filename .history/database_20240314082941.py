import mysql.connector
db_config = {
    'host': '127.0.0.1',
    'user': 'root',
    'password': '',
    'database': 'maychamcong'
}

# Hàm chèn dữ liệu vào cơ sở dữ liệu
def insert_data_to_database(data):
    try:
        connection = mysql.connector.connect(**db_config)
        cursor = connection.cursor()

        # Viết truy vấn SQL để chèn dữ liệu vào cơ sở dữ liệu
        query = "INSERT INTO YourTableName (column1, column2, ...) VALUES (%s, %s, ...)"
        
        # Thực thi truy vấn với dữ liệu cụ thể
        cursor.execute(query, data)
        
        # Lưu thay đổi vào cơ sở dữ liệu
        connection.commit()
        print("Dữ liệu đã được chèn thành công!")

    except mysql.connector.Error as error:
        print(f"Lỗi khi chèn dữ liệu: {error}")

    finally:
        if connection.is_connected():
            cursor.close()
            connection.close()

if __name__ == "__main__":
    # Dữ liệu bạn muốn chèn vào cơ sở dữ liệu
    data_to_insert = ("value1", "value2", ...)  # Thay thế giá trị này bằng dữ liệu thực tế của bạn

    # Gọi hàm chèn dữ liệu vào cơ sở dữ liệu
    insert_data_to_database(data_to_insert)