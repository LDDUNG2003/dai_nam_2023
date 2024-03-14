<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="../css/boostrap.css">
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
                        <a class="nav-link active" href="./index.php">TRANG CHỦ</a>
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
                echo isset($_SESSION['user_name']);
                // include '../login/loginControl.php';
                // // the below code fragment can be found in:
                // if(isset($_SESSION['user_name'])!=null)
                // {
                //     echo '<a class="btn btn-primary" href="logout.php">Đăng xuất</a>';
                // }
                // else
                // {
                //     echo '<a class="btn btn-primary" href="../login">Đăng nhập</a>';
                // }
            ?>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- Bootstrap JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-6s5/3zV+BfVZFPCrZFlsgn5ekXYB2wzrZL3/cmfLa2R000lR5Kzp5uzy4b+bE1Q" crossorigin="anonymous"></script>
    <!-- Bootstrap JS Link -->
</body>

</html>