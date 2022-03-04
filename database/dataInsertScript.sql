-- ==================================================================
-- Bảng Chức vụ
INSERT INTO chuc_vu(`tenCV`) VALUE ('Super Admin');
INSERT INTO chuc_vu(`tenCV`) VALUE ('Admin');
INSERT INTO chuc_vu(`tenCV`) VALUE ('Nhân viên kiểm hàng');
INSERT INTO chuc_vu(`tenCV`) VALUE ('Nhân viên chăm sóc khách hàng');
INSERT INTO chuc_vu(`tenCV`) VALUE ('Nhân viên kiểm bài');
INSERT INTO chuc_vu(`tenCV`) VALUE ('Khách hàng');

-- ==========================================================
-- Bảng Quyền hạn
INSERT INTO quyen_han(`tenQH`) VALUE ('Là Admin');
INSERT INTO quyen_han(`tenQH`) VALUE ('Quản lý Admin');
INSERT INTO quyen_han(`tenQH`) VALUE ('Quản lý sản phẩm');
INSERT INTO quyen_han(`tenQH`) VALUE ('Quản lý khách hàng ');
INSERT INTO quyen_han(`tenQH`) VALUE ('Quản lý bài viết');
INSERT INTO quyen_han(`tenQH`) VALUE ('Là khách hàng');
INSERT INTO quyen_han(`tenQH`) VALUE ('Là nhân viên');

-- =====================================================
-- Bảng trung gian chức vụ - quyền hạn

-- Admin
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (1,1);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (1,2);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (1,3);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (1,4);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (1,5);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (2,1);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (2,2);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (2,3);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (2,4);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (2,5);
-- Nhân viên
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (3,7);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (3,3);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (4,7);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (4,4);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (5,7);
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (5,5);
-- Khách hàng
INSERT INTO chuc_vu_quyen_han(`maCV`,`maQH`) VALUE (6,6);

-- ==========================================================================================================
-- Bảng Người dùng
INSERT INTO nguoi_dung(`tenND`,`emailND`,`matKhauND`,`maCV`) VALUE ('SuperAdmin','super@mail.com','12345',1);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`matKhauND`,`maCV`) VALUE ('Admin','admin@mail.com','12345',2);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`matKhauND`,`maCV`) VALUE ('Nhân viên 1','NV1@mail.com','12345',3);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`matKhauND`,`maCV`) VALUE ('Nhân viên 2','NV2@mail.com','12345',4);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`matKhauND`,`maCV`) VALUE ('Nhân viên 3','NV3@mail.com','12345',5);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`matKhauND`,`maCV`) VALUE ('Nguyễn Văn A','ANV@mail.com','12345',6);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`matKhauND`,`maCV`) VALUE ('Trần Văn B','BTV@mail.com','12345',6);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`matKhauND`,`maCV`) VALUE ('Lê Văn C','CLV@mail.com','12345',6);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`matKhauND`,`maCV`) VALUE ('Hoàng Văn D','DHV@mail.com','12345',6);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`matKhauND`,`maCV`) VALUE ('Dương Văn E','EDV@mail.com','12345',6);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`matKhauND`,`maCV`) VALUE ('Trịnh Văn F','FTV@mail.com','12345',6);

-- Bảng Sản phẩm
