<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Lương</title>
    <!-- Link CSS Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="Style.css">
    <link rel="DangNhap" href="Đăng Ký, Đăng Nhập, Đổi MK" />
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap CSS Link -->
    <!-- Bootstrap JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-6s5/3zV+BfVZFPCrZFlsgn5ekXYB2wzrZL3/cmfLa2R000lR5Kzp5uzy4b+bE1Q" crossorigin="anonymous"></script>
    <!-- Bootstrap JS Link -->
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
            margin-top: 20px;
        }
        
        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            border-right: 1px solid #ddd;
        }
        
        th:first-child,
        td:first-child {
            border-left: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        tbody tr:hover {
            background-color: #ddd;
        }
        
        tbody tr:last-child td {
            border-bottom: none;
        }
        
        td {
            text-align: center;
        }
        /* Định dạng các ô dữ liệu có thể chỉnh sửa */
        
        td[contenteditable="true"] {
            background-color: #f9f9f9;
            cursor: pointer;
        }
        /* Định dạng nút thêm và nút xóa */
        
        .btn-icon {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 50%;
            padding: 8px;
            cursor: pointer;
        }
        
        .btn-icon:hover {
            background-color: #0056b3;
        }
    </style>
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
                        <a class="nav-link" href="BangChamCong.html">BẢNG CHẤM CÔNG </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">BẢNG LƯƠNG </a>
                    </li>
                </ul>
            </div>
            <div class="navbar-nav ms-auto ">
                <button id="btn-login"><a class="nav-link" href="DangKy.html">ĐĂNG KÝ</a></button>
                <button id="btn-signup"><a class="nav-link" href="DangNhap.html">ĐĂNG NHẬP</a></button>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->
    <div class="container mt-5">
        <h2>Bảng Chấm Công</h2>
        <!-- Ô chọn tháng và năm -->
        <div class="row mt-3">
            <div class="col-md-3">
                <label for="month">Tháng:</label>
                <select class="form-select" id="month">
                    <option value="1">Tháng 1</option>
                    <option value="2">Tháng 2</option>
                    <option value="3">Tháng 3</option>
                    <option value="4">Tháng 4</option>
                    <option value="5">Tháng 5</option>
                    <option value="6">Tháng 6</option>
                    <option value="7">Tháng 7</option>
                    <option value="8">Tháng 8</option>
                    <option value="9">Tháng 9</option>
                    <option value="10">Tháng 10</option>
                    <option value="11">Tháng 11</option>
                    <option value="12">Tháng 12</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="year">Năm:</label>
                <select class="form-select" id="year">
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <!-- Thêm các năm khác nếu cần -->
                </select>
            </div>
            <div class="col-md-6"></div>
        </div>
        <!-- Bảng chấm công sẽ được thêm vào sau -->
    </div>

    <table>
        <thead>
            <tr>
                <th>NGÀY</th>
                <th>THỨ</th>
                <th>TG VÀO</th>
                <th>TG RA</th>
                <th>CA LV</th>
                <th>TRỄ</th>
                <th>SỚM</th>
                <th>GIỜ LV</th>
                <th>CÔNG</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <!-- Thêm các hàng dữ liệu trống tại đây để người dùng có thể nhập thông tin -->
            <tr>
                <td contenteditable="true"></td>
                <td contenteditable="true"></td>
                <td contenteditable="true"></td>
                <td contenteditable="true"></td>
                <td contenteditable="true"></td>
                <td contenteditable="true"></td>
                <td contenteditable="true"></td>
                <td contenteditable="true"></td>
                <td contenteditable="true"></td>
                <td>
                    <button class="btn-icon" onclick="addRow()"><i class="fas fa-plus"></i></button>
                    <button class="btn-icon" onclick="deleteRow(this)"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- Script để thêm và xóa dòng -->
    <script>
        // Thêm dòng mới vào bảng
        function addRow() {
            var table = document.querySelector('table');
            var newRow = table.insertRow(-1); // Thêm dòng vào cuối bảng
            var cols = 9; // Số lượng cột

            for (var i = 0; i < cols; i++) {
                var newCell = newRow.insertCell(i);
                newCell.contentEditable = true; // Có thể chỉnh sửa ô dữ liệu
            }

            var actionCell = newRow.insertCell(cols);
            actionCell.innerHTML = '<button class="btn-icon" onclick="addRow()"><i class="fas fa-plus"></i></button><button class="btn-icon" onclick="deleteRow(this)"><i class="fas fa-trash"></i></button>';
        }

        // Xóa dòng khỏi bảng
        function deleteRow(btn) {
            var row = btn.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>
</body>

</html>