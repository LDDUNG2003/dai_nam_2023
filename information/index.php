<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap CSS Link -->
    <!-- Bootstrap JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-6s5/3zV+BfVZFPCrZFlsgn5ekXYB2wzrZL3/cmfLa2R000lR5Kzp5uzy4b+bE1Q" crossorigin="anonymous"></script>
    <!-- Bootstrap JS Link -->
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
                        <a class="nav-link active" href="NhanVien.html">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ThongTinNhanVien.html">THÔNG TIN NHÂN VIÊN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="BangChamCong">BẢNG CHẤM CÔNG </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="BangLuong.html">BẢNG LƯƠNG </a>
                    </li>
                </ul>
            </div>
            <div class="navbar-nav ms-auto ">
                <button id="btn-login"><a class="nav-link" href="#">ĐĂNG KÝ</a></button>
                <button id="btn-signup"><a class="nav-link" href="#">ĐĂNG NHẬP</a></button>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->
    <div class="row">
        <div class="col-md-4">
            
        </div>
        <hr>
        <div class="col-12 col-xl-8">
            <div class="row introduce csstransforms3d">
                <div class=" col-md-5 text-center">
                    <div>
                        <div>
                            <img src="https://png.pngtree.com/png-vector/20190411/ourlarge/pngtree-business-male-icon-vector-png-image_916468.jpg" class="img-thumbnail w-100" style="margin:15px ;padding:10px"><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-12 col-md-6">
                    <h2 class="text-xs-center">Thông tin nhân viên</h2><hr>
                    <p>Mã nhân viên:</p> <p><?php
                    $name = $this->session->userdata('name');
                    echo ""
                    ?></p>
                    <p>Tên nhân viên:</p>
                    <p>Chức vụ:</p>
                </div>     
    </div>
    
</body>
</html>
