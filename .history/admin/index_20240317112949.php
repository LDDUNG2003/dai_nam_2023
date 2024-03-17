<?php
    session_start();
?>

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
    <!-- <nav class="navbar navbar-expand-lg">
        <div>
            <?php include 'header.php'?>
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
    </nav> -->
    <!-- Navbar end -->

    <!-- Bootstrap JS Link -->
    <script src="../css/boostrap.js" integrity="sha384-6s5/3zV+BfVZFPCrZFlsgn5ekXYB2wzrZL3/cmfLa2R000lR5Kzp5uzy4b+bE1Q" crossorigin="anonymous"></script>
    <!-- Bootstrap JS Link -->
</body>

</html>