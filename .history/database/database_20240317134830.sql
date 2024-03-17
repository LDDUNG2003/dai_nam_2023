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
    dayCheckIn DATE NOT NULL,
    TimeIN TIME NOT NULL,
    TimeOut TIME NOT NULL
);

CREATE TABLE Accounts (
    ma_nv INT NOT NULL,
    NameLogin VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    PhanQuyen INT NOT NULL
);

CREATE TABLE payroll(
    ma_nv INT NOT NULL,
    Luong INT NOT NULL,
    tong_ngay_cong INT NOT NULL,
    tong_luong INT NOT NULL
);

INSERT INTO `accounts` (`ma_nv`, `NameLogin`, `Password`, `Email`, `PhanQuyen`) VALUES ('0', 'admin1', 'admin111', 'dunglcnt@gmail.com', '02'),('1','admin', 'admin123', 'dunglcntt58@gmail.com', '02'),('2','admin2', 'admin111', 'dunglcnt@gmail.com', '02');
-- data tesing login logout time line
INSERT INTO `quanlynhanvien` (`ma_nv`, `dayCheckIn`, `TimeIN`, `TimeOut`) VALUES ('00', '2024-03-01', '08:00:59', '18:29:51'),('001', '2024-03-01', '08:00:59', '20:59:00'), ('1', '2024-02-29', '13:59:30', '22:00:00');
INSERT INTO `nhanvien` (`ma_nv`, `tennhanvien`, `ma_phong_ban`, `ChucVu`, `email`) VALUES ('02', 'Đỗ Trường Anh', 'Hành Chính Nhân Sự', 'Trưởng Phòng', 'dotruonganh@gmail.com'), ('1', 'Lê Văn Phong', 'Giám Đốc', 'Tổng Giám Đốc', 'levanphong.dnu@gmail.com');
INSERT INTO `nhanvien` (`ma_nv`, `tennhanvien`, `ma_phong_ban`, `ChucVu`, `email`) VALUES ('4', 'Nguyễn Thị Kim Hoa', '1', 'Nhân viên', 'nguyenkimhoa@gmail.com');
INSERT INTO `nhanvien` (`ma_nv`, `tennhanvien`, `ma_phong_ban`, `ChucVu`, `email`) VALUES ('5', 'Đàm Thị Loan', '2', 'Nhân viên', 'damthiloan@gmail.com');
INSERT INTO `nhanvien` (`ma_nv`, `tennhanvien`, `ma_phong_ban`, `ChucVu`, `email`) VALUES ('6', 'Đỗ Thanh Thảo', '3', 'Nhân viên', 'dothanhthao@gmail.com');
INSERT INTO `nhanvien` (`ma_nv`, `tennhanvien`, `ma_phong_ban`, `ChucVu`, `email`) VALUES ('7', 'Lưu Trung Nghĩa', '4', 'Trưởng Phòng', 'luutrungnghia@gmail.com');
INSERT INTO `nhanvien` (`ma_nv`, `tennhanvien`, `ma_phong_ban`, `ChucVu`, `email`) VALUES ('8', 'Nguyễn Tiến Đạt', '4', 'Nhân viên', 'nguyentiendat@gmail.com');
INSERT INTO `nhanvien` (`ma_nv`, `tennhanvien`, `ma_phong_ban`, `ChucVu`, `email`) VALUES ('9', 'Đoàn Tuấn Nam', '1', 'Trưởng Phòng', 'damtuannam@gmail.com');
INSERT INTO `nhanvien` (`ma_nv`, `tennhanvien`, `ma_phong_ban`, `ChucVu`, `email`) VALUES ('10', 'Cao Thị Thương', '1', 'Nhân viên', 'caothithuong@gmail.com');
INSERT INTO `nhanvien` (`ma_nv`, `tennhanvien`, `ma_phong_ban`, `ChucVu`, `email`) VALUES ('11', 'Bùi Ngọc Long', '2', 'Trưởng Phòng', 'buingoclong@gmail.com');
INSERT INTO `nhanvien` (`ma_nv`, `tennhanvien`, `ma_phong_ban`, `ChucVu`, `email`) VALUES ('12', 'Lê Khắc Hoàn', '2', 'Nhân viên', 'lekhachoan@gmail.com');
INSERT INTO `nhanvien` (`ma_nv`, `tennhanvien`, `ma_phong_ban`, `ChucVu`, `email`) VALUES ('13', 'Lê Đình Dũng', '2', 'Nhân viên', 'ledinhdung@gmail.com');