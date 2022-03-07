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

-- ==========================================================================================================
-- Bảng Nhà sản xuất
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('Dell');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('Apple');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('HP');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('ASUS');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('Microsoft');

-- =============================== ===========================================================================
-- Bảng Thể loại
INSERT INTO the_loai(`tenTL`) VALUE ('PC văn phòng');
INSERT INTO the_loai(`tenTL`) VALUE ('PC gaming');
INSERT INTO the_loai(`tenTL`) VALUE ('PC trạm');
INSERT INTO the_loai(`tenTL`) VALUE ('Màn hình');
INSERT INTO the_loai(`tenTL`) VALUE ('Ổ cứng');

-- ==========================================================================================================
-- Bảng Trạng thái sản phẩm
INSERT INTO tinh_trang_san_pham(`tenTTSP`) VALUE ('Còn hàng');
INSERT INTO tinh_trang_san_pham(`tenTTSP`) VALUE ('Hết hàng');
INSERT INTO tinh_trang_san_pham(`tenTTSP`) VALUE ('Không còn giao bán');
INSERT INTO tinh_trang_san_pham(`tenTTSP`) VALUE ('Liên hệ');

-- ==========================================================================================================
-- Bảng Sản phẩm
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('PC HP All in One 200 Pro G4 (i5-10210U/8GB RAM/256GB SSD/DVDRW/21.5 inch FHD/ WL+BT/K+M/Win 10) (2J861PA)',16900000,'Máy tính lập trình',28,2000000,1,1,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('PC Dell OptiPlex All in One 7490 (i5-11500/8GB RAM/512GB SSD/GTX1650/23.8 inch FHD/WL+BT/K+M/Ubuntu)',29000000,'Máy tính chơi game',28,2000000,3,2,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('PC Dell OptiPlex All in One 7490 (i7-11700/8GB RAM/512GB SSD/GTX1650/23.8 inch FHD/Touch/WL+BT/K+M/Ubuntu)',35000000,'Máy tính trạm',28,2000000,1,3,4);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('PC HP All in One 200 Pro G4 (i3-10110U/4GB RAM/256GB SSD/DVDRW/21.5 inch FHD/ WL+BT/K+M/Win 10) (2J860PA)',13000000,'Máy tính trạm',28,12000000,1,3,4);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('PC Asus All in One M3400WU (R3 5300U/8GB RAM/512GB SSD/23.8 inch Full HD/Touch/WL+BT/K+M/Win 10) (M3400WUAT-BA027T)',14000000,'Máy tính trạm',28,20000000,1,3,4);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('PC GAMING HACOM LIAN-LI O11DX LIMITED ',77000000,'Máy tính trạm',28,20000000,1,3,4);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('PC GAMING HACOM PRO 020 (I5 11400F/B560/16GB RAM/500GB SSD/RTX 2060/650W)',24000000,'Máy tính trạm',28,20000000,1,3,4);
