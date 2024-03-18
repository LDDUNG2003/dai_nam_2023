<?php
    echo '<div class="container">
    <a class="navbar-brand" href="index.html" id="logo"><span>L</span>G</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span><i class="fa-solid fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link active" href="./index.php">TRANG CHỦ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./QuanLyNhanVien.php">QUAN LÝ NHÂN VIÊN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="QuanLyBangLuong.php">QUẢN LÝ BẰNG LƯƠNG</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">THỐNG KÊ </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Nhân viên đi muộn</a></li>
                    <li><a href="#">Phòng ban</a></li>
                    <li><a href="/login/Register.php">Tạo tài khoản mới</a></li>

                </ul>
            </li>
        </ul>
    </div>'
?>
<nav class="navbar navbar-expand-lg">
        <div>
            <?php
                // include '../login/loginControl.php';
                // the below code fragment can be found in:
                if(isset($_COOKIE['checkLogin']))
                {
                    echo '<a class="btn btn-primary" href="../login/logout.php">Đăng xuất</a>';
                }
                else
                {
                    echo '<a class="btn btn-primary" href="../login">Đăng nhập</a>';
                }
            ?>
        </div>
    </nav>