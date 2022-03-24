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
INSERT INTO nguoi_dung(`tenND`,`emailND`, `diaChiND`,`matKhauND`,`maCV`) VALUE ('SuperAdmin','super@mail.com', 'Địa chỉ 1','12345',1);
INSERT INTO nguoi_dung(`tenND`,`emailND`, `diaChiND`,`matKhauND`,`maCV`) VALUE ('Admin','admin@mail.com', 'Địa chỉ 2','12345',2);
INSERT INTO nguoi_dung(`tenND`,`emailND`, `diaChiND`,`matKhauND`,`maCV`) VALUE ('Nhân viên 1','NV1@mail.com', 'Địa chỉ 3','12345',3);
INSERT INTO nguoi_dung(`tenND`,`emailND`, `diaChiND`,`matKhauND`,`maCV`) VALUE ('Nhân viên 2','NV2@mail.com', 'Địa chỉ 4','12345',4);
INSERT INTO nguoi_dung(`tenND`,`emailND`, `diaChiND`,`matKhauND`,`maCV`) VALUE ('Nhân viên 3','NV3@mail.com', 'Địa chỉ 5','12345',5);
INSERT INTO nguoi_dung(`tenND`,`emailND`, `diaChiND`,`matKhauND`,`maCV`) VALUE ('Nguyễn Văn A','ANV@mail.com', 'Địa chỉ 6','12345',6);
INSERT INTO nguoi_dung(`tenND`,`emailND`, `diaChiND`,`matKhauND`,`maCV`) VALUE ('Trần Văn B','BTV@mail.com', 'Địa chỉ 7','12345',6);
INSERT INTO nguoi_dung(`tenND`,`emailND`, `diaChiND`,`matKhauND`,`maCV`) VALUE ('Lê Văn C','CLV@mail.com', 'Địa chỉ 8','12345',6);
INSERT INTO nguoi_dung(`tenND`,`emailND`, `diaChiND`,`matKhauND`,`maCV`) VALUE ('Hoàng Văn D','DHV@mail.com', 'Địa chỉ 9','12345',6);
INSERT INTO nguoi_dung(`tenND`,`emailND`, `diaChiND`,`matKhauND`,`maCV`) VALUE ('Dương Văn E','EDV@mail.com', 'Địa chỉ 10','12345',6);
INSERT INTO nguoi_dung(`tenND`,`emailND`, `diaChiND`,`matKhauND`,`maCV`) VALUE ('Trịnh Văn F','FTV@mail.com', 'Địa chỉ 11','12345',6);

-- ==========================================================================================================
-- Bảng Nhà sản xuất
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('Dell');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('Apple');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('HP');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('ASUS');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('Microsoft');

-- =============================== ===========================================================================
-- Bảng Thể loại
INSERT INTO the_loai(`tenTL`) VALUE ('PC');
INSERT INTO the_loai(`tenTL`) VALUE ('Màn hình');
INSERT INTO the_loai(`tenTL`) VALUE ('Ổ cứng');
INSERT INTO the_loai(`tenTL`) VALUE ('Laptop');

-- =============================== ===========================================================================
-- Bảng Thể loại con
INSERT INTO the_loai_con(`maTL`, `tenTLC`) VALUE (1, 'PC văn phòng');
INSERT INTO the_loai_con(`maTL`, `tenTLC`) VALUE (1, 'PC gaming');
INSERT INTO the_loai_con(`maTL`, `tenTLC`) VALUE (1, 'PC trạm');
INSERT INTO the_loai_con(`maTL`, `tenTLC`) VALUE (2, 'Màn hình A');
INSERT INTO the_loai_con(`maTL`, `tenTLC`) VALUE (3, 'Ổ cứng A');
INSERT INTO the_loai_con(`maTL`, `tenTLC`) VALUE (4, 'Laptop gaming');
INSERT INTO the_loai_con(`maTL`, `tenTLC`) VALUE (4, 'Laptop văn phòng');

-- ==========================================================================================================
-- Bảng Trạng thái sản phẩm
INSERT INTO tinh_trang_san_pham(`tenTTSP`) VALUE ('Còn hàng');
INSERT INTO tinh_trang_san_pham(`tenTTSP`) VALUE ('Hết hàng');
INSERT INTO tinh_trang_san_pham(`tenTTSP`) VALUE ('Không còn giao bán');
INSERT INTO tinh_trang_san_pham(`tenTTSP`) VALUE ('Liên hệ');

-- ==========================================================================================================
-- Bảng Sản phẩm
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Acer Gaming Predator Triton 500SE (PT516-51s-71RW) (NH.QAKSV.001) (i7 11800H/64GB RAM/1TB SSD/RTX 3080 8G/16.0 inch WQXGA 165Hz 100%sRGB/Win10/Xám) (2021)',82990000,'Máy tính lập trình',28,2000000,1,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Acer Gaming Predator Helios 500 PH517-52-797L (NH.QD3SV.001) (i711800H/64GB Ram/2TB SSD/RTX3080 8G/17.3 inch FHD 360Hz/Win 10/Đen)',98000000,'Máy tính lập trình',28,2000000,1,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Acer Gaming Predator Helios 300 PH315-54-74RU (NH.QC1SV.002) (i7 11800H/16GB Ram/512GB SSD/RTX3070 8G/15.6 inch QHD 165Hz/Win 10/Đen) (2021)',42000000,'Máy tính lập trình',28,2000000,1,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Acer Gaming Aspire 7 A715-42G-R4XX (NH.QAYSV.008) (R5 5500U/8GB RAM/256GB SSD/15.6 inch FHD/GTX1650 4G/Win11/Đen) (2021)',18000000,'Máy tính lập trình',28,2000000,1,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Acer Gaming Nitro 5 Eagle AN515-57-54MV (NH.QENSV.003) (i5 11400H/8GB Ram/512GB SSD/RTX3050 4G/15.6 inch FHD 144Hz/Win 11 mới nhất/Đen) (2021)',23000000,'Máy tính lập trình',28,2000000,1,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Gigabyte Gaming AORUS 15P (XD-73S1224GH) (i7 11800H /16GB Ram/1TB SSD/RTX3070 8G/15.6 inch FHD 240Hz/Win 10/Đen/Balo Aorus) (2021)',50000000,'Máy tính lập trình',28,2000000,1,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus Gaming TUF FX706HCB-HX105W (i5 11400H/8GB RAM/512GB SSD/17.3 FHD 144hz/RTX 3050 4GB/Win11/Đen)',23000000,'Máy tính lập trình',28,2000000,1,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('PC GAMING HACOM LIAN-LI O11DX LIMITED (I7 12700KF/Z690/32GB RAM/1TB SSD/RTX 3070TI/1050W)',70000000,'Máy tính lập trình',28,2000000,1,2,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('PC GAMING HACOM PRO 020 (I5 11400F/B560/16GB RAM/500GB SSD/RTX 2060/650W)',30000000,'Máy tính lập trình',28,2000000,1,2,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('C GAMING HACOM 031 (I3 10105F/H510/8GB RAM/500GB SSD/GTX 1650/700W)',13000000,'Máy tính lập trình',28,2000000,1,2,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('PC GAMING HACOM PRO 021 (R5 5600G/B550/16GB RAM/250GB SSD/RADEON RX VEGA/650W)',16900000,'Máy tính lập trình',28,2000000,1,2,1);

-- ==========================================================================================================
-- Bảng Khuyến mãi
INSERT INTO khuyen_mai(`maSP`, `khuyenMai`) VALUE (1, 'Sản phẩm chưa có khuyến mãi');
INSERT INTO khuyen_mai(`maSP`, `khuyenMai`) VALUE (2, 'Sản phẩm chưa có khuyến mãi');
INSERT INTO khuyen_mai(`maSP`, `khuyenMai`) VALUE (3, 'Sản phẩm chưa có khuyến mãi');
INSERT INTO khuyen_mai(`maSP`, `khuyenMai`) VALUE (4, 'Sản phẩm chưa có khuyến mãi');
INSERT INTO khuyen_mai(`maSP`, `khuyenMai`) VALUE (5, 'Sản phẩm chưa có khuyến mãi');
INSERT INTO khuyen_mai(`maSP`, `khuyenMai`) VALUE (6, 'Sản phẩm chưa có khuyến mãi');
INSERT INTO khuyen_mai(`maSP`, `khuyenMai`) VALUE (7, 'Sản phẩm chưa có khuyến mãi');
INSERT INTO khuyen_mai(`maSP`, `khuyenMai`) VALUE (8, 'Sản phẩm chưa có khuyến mãi');
INSERT INTO khuyen_mai(`maSP`, `khuyenMai`) VALUE (9, 'Sản phẩm chưa có khuyến mãi');
INSERT INTO khuyen_mai(`maSP`, `khuyenMai`) VALUE (10, 'Sản phẩm chưa có khuyến mãi');
INSERT INTO khuyen_mai(`maSP`, `khuyenMai`) VALUE (11, 'Sản phẩm chưa có khuyến mãi');

-- Bang Anh san pham
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (1,'60634_laptop_acer_gaming_predator_triton_500se_10.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (2,'62709_laptop_acer_gaming_predator_helios_500_12.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (3,'61228_laptop_acer_gaming_predator_helios_300_ph315_54_74ru_nhqc1sv002_den_2021_4.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (4,'61621_laptop_acer_gaming_aspire_7_a715_42g_18.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (5,'60790_laptop_acer_gaming_nitro_5_eagle_17.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (6,'59691_laptop_gigabyte_gaming_aorus_15_10.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (7,'63527_laptop_asus_gaming_tuf_fx706hcb_9.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (8,'63473_pc_gaming_lianli_o11dx_limited_2022.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (9,'63500_pc_gaming_hacom_pro_020_2022.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (10,'63502_pc_gaming_hacom_pro_021_2022.jpg');

-- Bảng tình trạng bài viết
INSERT INTO `tinh_trang_bai_viet` (`maTTBV`, `tenTTBV`) VALUES (NULL, 'Chưa công khai'), (NULL, 'Công khai');

-- Bảng tình trạng hoá đơn
INSERT INTO `tinh_trang_hoa_don` (`maTTHD`, `tenTTHD`) VALUES (NULL, 'Đã duyệt'), (NULL, 'Chưa duyệt'), (NULL, 'Đã huỷ');