-- Chức vụ
INSERT INTO chuc_vu(`tenCV`) VALUE ('Super Admin');
INSERT INTO chuc_vu(`tenCV`) VALUE ('Admin');
INSERT INTO chuc_vu(`tenCV`) VALUE ('Nhân viên');
INSERT INTO chuc_vu(`tenCV`) VALUE ('Khách hàng');

-- Quyền hạn
INSERT INTO quyen_han(`tenQH`) VALUE ('Đăng nhập Admin');
INSERT INTO quyen_han(`tenQH`) VALUE ('Quản lý Admin');
INSERT INTO quyen_han(`tenQH`) VALUE ('Quản lý sản phẩm');
INSERT INTO quyen_han(`tenQH`) VALUE ('Quản lý khách hàng ');
INSERT INTO quyen_han(`tenQH`) VALUE ('Quản lý bài viết');
INSERT INTO quyen_han(`tenQH`) VALUE ('Đăng nhập khách hàng');

-- Bảng trung gian chức vụ - quyền hạn
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (1,1);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (1,2);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (1,3);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (1,4);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (1,5);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (2,2);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (2,3);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (2,4);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (2,5);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (4,6);

-- Người dùng
INSERT INTO nguoi_dung(`tenND`,`emailND`,`matKhauND`,`maCV`) VALUE ('SuperAdmin','super@mail.com','12345',1);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`matKhauND`,`maCV`) VALUE ('Admin','admin@mail.com','12345',2);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`matKhauND`,`maCV`) VALUE ('Nguyễn Văn A','ANV@mail.com','12345',4);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`matKhauND`,`maCV`) VALUE ('Trần Văn B','BTV@mail.com','12345',4);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`matKhauND`,`maCV`) VALUE ('Lê Văn C','CLV@mail.com','12345',4);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`matKhauND`,`maCV`) VALUE ('Hoàng Văn D','DHV@mail.com','12345',4);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`matKhauND`,`maCV`) VALUE ('Dương Văn E','EDV@mail.com','12345',4);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`matKhauND`,`maCV`) VALUE ('Trịnh Văn F','FTV@mail.com','12345',4);

-- Sản phẩm
