<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/MyCss.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
 
    <title>Đổi mật khẩu</title>
        
</head>
<body>
    <div id="wrapper">
        <form action="" id="form-login">
            <h1 class="form-heading">Đổi Mật Khẩu</h1>
            <label for="MaNhanVien">Mã nhân viên</label>
            <div class="form-group">
                <input type="text" id="MaNhanVien" class="form-input">
            </div>
            <label for="TenTaiKhoan">Tên tài khoản</label>
            <div class="form-group">
                <input type="text" id="TenTaiKhoan" class="form-input">
            </div>
            <label for="MatKhau">Mật khẩu cũ</label>
            <div class="form-group">
                <input type="password" id="MatKhau" class="form-input">
            </div>
            <label for="MatKhauMoi">Mật khẩu mới</label>
            <div class="form-group">
                <input type="password" id="MatKhauMoi" class="form-input">
            </div>
            <label for="XacNhanMatKhau">Mật lại mật khẩu mới</label>
            <div class="form-group">
                <input type="password" id="XacNhanMatKhau" class="form-input">
            </div>
            <input type="submit" value="Lưu" class="form-submit">
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    $(document).ready(function(){
        $('#eye').click(function(){
            $(this).toggleClass('open');
            var type = $(this).prev().attr('type');
            if(type === 'password') {
                $(this).prev().attr('type', 'text');
            } else {
                $(this).prev().attr('type', 'password');
            }
        });
    });
</script>
</html>
