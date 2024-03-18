<?php
// Kiểm tra xem người dùng đã gửi dữ liệu chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ biểu mẫu
    $current_password = $_POST["current_password"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    if ($new_password != $confirm_password) {
        echo "New password and confirm password do not match.";
    } else {
        // Thực hiện xác thực người dùng và thay đổi mật khẩu
        // Trong ví dụ này, chúng ta sẽ sử dụng prepared statement để ngăn chặn tấn công SQL injection
        $sql = "SELECT * FROM accound WHERE username = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $current_password);
        
        $username = "test_user"; // Thay đổi thành tên người dùng
        $current_password = $_POST["current_password"];
        
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows == 1) {
            // Xác thực thành công, thực hiện thay đổi mật khẩu
            $sql_update = "UPDATE users SET password = ? WHERE username = ?";
            $stmt_update = $conn->prepare($sql_update);
            $stmt_update->bind_param("ss", $new_password, $username);
            $stmt_update->execute();
            
            echo "Password changed successfully.";
        } else {
            echo "Failed to change password. Please check your current password.";
        }
        
        $stmt->close();
    }
}

$conn->close();
?>
