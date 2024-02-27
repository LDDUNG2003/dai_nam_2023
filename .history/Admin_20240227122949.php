<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap CSS Link -->

</head>

<body>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html" id="logo"><span>L</span>G</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span><i class="fa-solid fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active" href="Admin.html">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="QuanLyNhanVien.html">QUAN LÝ NHÂN VIÊN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="QuanLyBangLuong.html">QUẢN LÝ BẰNG LƯƠNG</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">THỐNG KÊ </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Nhân viên đi muộn</a></li>
                            <li><a href="#">Phòng ban</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
            <?php
            echo ' <div class="navbar-nav ms-auto "><button id="btn-signup"><a class="nav-link" href="login">ĐĂNG NHẬP</a></button></div>';
            ?>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- Bootstrap JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-6s5/3zV+BfVZFPCrZFlsgn5ekXYB2wzrZL3/cmfLa2R000lR5Kzp5uzy4b+bE1Q" crossorigin="anonymous"></script>
    <!-- Bootstrap JS Link -->
</body>

</html>