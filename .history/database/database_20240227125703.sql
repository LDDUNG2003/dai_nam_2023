CREATE TABLE nhanVien (
    ma_nv INT AUTO_INCREMENT PRIMARY KEY,
    tennhanvien VARCHAR(50) NOT NULL,
    ma_phong_ban VARCHAR(50) NOT NULL,
    ChucVu VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE phongBan(
    ma_phong_ban INT AUTO_INCREMENT PRIMARY KEY,
    TenPhongBan VARCHAR(50) NOT NULL,
    SoNhanVien INT NOT NULL
);

CREATE TABLE QuanLyNhanVien (
    ma_nv INT NOT NULL,
    TimeIN TIME NOT NULL,
    TimeOut TIME NOT NULL
);

CREATE TABLE Accounts (
    ma_nv INT NOT NULL,
    NameLogin VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL
);