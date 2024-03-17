<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/MyCss.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <title>Form login</title>
</head>

<body>
    <div id="wrapper">
        <form action="./RegisterControl.php" method="POST" id="form-login">
            <h1 class="form-heading">Tạo tài khoản</h1>
            <label for="MaNhanVien">Mã nhân viên</label>
            <div class="form-group">
                <input name="manhanvien" type="text" id="MaNhanVien" class="form-input">
            </div>
            <label for="TenNhanVien">Tên nhân viên</label>
            <div class="form-group">
                <input type="text" name="TenNhanVien" id="TenNhanVien" class="form-input">
            </div>
            <label for="TenTaiKhoan">Tên tài khoản</label>
            <div class="form-group">
                <input type="text" id="TenTaiKhoan" name="account" class="form-input">
            </div>
            <label for="MatKhau">Mật khẩu</label>
            <div class="form-group">
                <input type="password" id="MatKhau" name="password" class="form-input">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" name="passcheck" class="form-input" placeholder="Mật khẩu">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <input type="submit" value="Lưu" class="form-submit">
        </form>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

</html>