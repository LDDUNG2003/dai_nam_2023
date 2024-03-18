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
        <?php include './header.php' ?>
    </nav>
    <!-- Navbar end -->
    <div class="container-fluid al">
        <div id="clock"></div>
        <Br>
        <p class="timkiemnhanvien"><b>TÌM KIẾM NHÂN VIÊN:</b></p>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Nhập tên nhân viên cần tìm..."
            data-toggle="tooltip" data-placement="bottom" title="Tìm Kiếm Nhân Viên">
        <i class="fa fa-search" aria-hidden="true"></i>

        <form action="">

        </form><br>
        <b>CHỨC NĂNG CHÍNH:</b><Br>
        <button class="nv btn add-new" type="button" data-toggle="tooltip" data-placement="top"
            title="Thêm Nhân Viên"><i class="fas fa-user-plus"></i></button>
        <button class="nv" type="button" onclick="sortTable()" data-toggle="tooltip" data-placement="top"
            title="Lọc Dữ Liệu"><i class="fa fa-filter" aria-hidden="true"></i></button>
        <button class="nv xuat" data-toggle="tooltip" data-placement="top" title="Xuất File"><i
                class="fas fa-file-import"></i></button>
        <button class="nv cog" data-toggle="tooltip" data-placement="bottom" title=""><i
                class="fas fa-cogs"></i></button>
        <div class="table-title">
            <div class="row">

            </div>

        </div>
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr class="ex">
                    <th width="auto">Mã Nhân Viên</th>
                    <th width="auto">Tên Nhân Viên</th>
                    <th>Lương Cơ Bản</th>
                    <th>Ngày Công</th>
                    <th>Tổng Lương</th>
                    <th width="5px; !important">Tính Năng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../database/database.php';
                $sql = "SELECT * FROM payroll";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>'. $row['ma_nv']. '</td>';
                    $sql1 = 'SELECT * FROM nhanvien';
                    $result1 = mysqli_query($conn, $sql1);
                    while ($row1 = mysqli_fetch_assoc($result1)) {
                        if ($row1['ma_nv'] == $row['manv']) {
                            echo '<td>'. $row1['tennhanvien']. '</td>';
                        }
                    }
                    echo '<td>'. $row['Luong']. '</td>';
                    echo '<td>'. $row['']. '</td>';
                    echo '<td><button class="btn btn-primary btn-sm" onclick="editData('. $row['ma_nv']. ')"><i class="fa fa-edit"></i></button> <button class="btn btn-danger btn-sm" onclick="deleteData('. $row['ma_nv']. ')"><i class="fa fa-trash"></i></button></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
                <div id="pageNavPosition" class="text-right"></div>
                <script type="text/javascript">
                    var pager = new Pager('myTable', 5);
                    pager.init();
                    pager.showPageNav('pager', 'pageNavPosition');
                    pager.showPage(1);
                </script>
            </div>
    <!-- Bootstrap JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-6s5/3zV+BfVZFPCrZFlsgn5ekXYB2wzrZL3/cmfLa2R000lR5Kzp5uzy4b+bE1Q" crossorigin="anonymous"></script>
    <!-- Bootstrap JS Link -->
</body>
</html>
