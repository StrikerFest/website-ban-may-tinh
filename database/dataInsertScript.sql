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
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('MSI');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('Acer');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('Gigabyte');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('Lenovo');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('Razer');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('Sony');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('LG');

-- =============================== ===========================================================================
-- Bảng Thể loại
INSERT INTO the_loai(`tenTL`) VALUE ('PC văn phòng');
INSERT INTO the_loai(`tenTL`) VALUE ('PC gaming');
INSERT INTO the_loai(`tenTL`) VALUE ('PC trạm');
INSERT INTO the_loai(`tenTL`) VALUE ('Màn hình');
INSERT INTO the_loai(`tenTL`) VALUE ('Ổ cứng');
INSERT INTO the_loai(`tenTL`) VALUE ('Laptop gaming');
INSERT INTO the_loai(`tenTL`) VALUE ('Laptop văn phòng');
INSERT INTO the_loai(`tenTL`) VALUE ('Card đồ họa');

-- ==========================================================================================================
-- Bảng Trạng thái sản phẩm
INSERT INTO tinh_trang_san_pham(`tenTTSP`) VALUE ('Còn hàng');
INSERT INTO tinh_trang_san_pham(`tenTTSP`) VALUE ('Hết hàng');
INSERT INTO tinh_trang_san_pham(`tenTTSP`) VALUE ('Không còn giao bán');
INSERT INTO tinh_trang_san_pham(`tenTTSP`) VALUE ('Liên hệ');

-- ==========================================================================================================
-- Bảng Sản phẩm

-- Laptop gaming
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Laptop Acer Gaming Predator Triton 500SE (PT516-51s-71RW) (NH.QAKSV.001) (i7 11800H/64GB RAM/1TB SSD/RTX 3080 8G/16.0 inch WQXGA 165Hz 100%sRGB/Win10/Xám) (2021)',82990000,'Máy tính lập trình',28,2000000,7,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Laptop Acer Gaming Predator Helios 500 PH517-52-797L (NH.QD3SV.001) (i711800H/64GB Ram/2TB SSD/RTX3080 8G/17.3 inch FHD 360Hz/Win 10/Đen)',98000000,'Máy tính lập trình',28,2000000,7,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Laptop Acer Gaming Predator Helios 300 PH315-54-74RU (NH.QC1SV.002) (i7 11800H/16GB Ram/512GB SSD/RTX3070 8G/15.6 inch QHD 165Hz/Win 10/Đen) (2021)',42000000,'Máy tính lập trình',28,2000000,7,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Laptop Acer Gaming Aspire 7 A715-42G-R4XX (NH.QAYSV.008) (R5 5500U/8GB RAM/256GB SSD/15.6 inch FHD/GTX1650 4G/Win11/Đen) (2021)',18000000,'Máy tính lập trình',28,2000000,7,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Laptop Acer Gaming Nitro 5 Eagle AN515-57-54MV (NH.QENSV.003) (i5 11400H/8GB Ram/512GB SSD/RTX3050 4G/15.6 inch FHD 144Hz/Win 11 mới nhất/Đen) (2021)',23000000,'Máy tính lập trình',28,2000000,7,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Laptop Gigabyte Gaming AORUS 15P (XD-73S1224GH) (i7 11800H /16GB Ram/1TB SSD/RTX3070 8G/15.6 inch FHD 240Hz/Win 10/Đen/Balo Aorus) (2021)',50000000,'Máy tính lập trình',28,2000000,8,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Laptop Asus Gaming TUF FX706HCB-HX105W (i5 11400H/8GB RAM/512GB SSD/17.3 FHD 144hz/RTX 3050 4GB/Win11/Đen)',23000000,'Máy tính lập trình',28,2000000,4,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Laptop Asus Gaming TUF FX706HCB-HX105W (i9 11400H/8GB RAM/512GB SSD/17.3 FHD 144hz/RTX 3050 4GB/Win11/Đen)',73000000,'Máy tính lập trình',28,2000000,4,6,1);
-- PC Gaming
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('PC GAMING HACOM LIAN-LI O11DX LIMITED (I7 12700KF/Z690/32GB RAM/1TB SSD/RTX 3070TI/1050W)',70000000,'Máy tính lập trình',28,2000000,1,2,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('PC GAMING HACOM PRO 020 (I5 11400F/B560/16GB RAM/500GB SSD/RTX 2060/650W)',30000000,'Máy tính lập trình',28,2000000,1,2,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('PC GAMING HACOM 031 (I3 10105F/H510/8GB RAM/500GB SSD/GTX 1650/700W)',13000000,'Máy tính lập trình',28,2000000,1,2,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('PC GAMING HACOM PRO 021 (R5 5600G/B550/16GB RAM/250GB SSD/RADEON RX VEGA/650W)',16900000,'Máy tính lập trình',28,2000000,1,2,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('PC GAMING VANGUARD O11DX LIMITED (I7 12700KF/Z690/32GB RAM/1TB SSD/RTX 3070TI/1050W)',123000000,'Máy tính lập trình',28,2000000,1,2,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('PC GAMING SOULREAVER 020 (I5 11400F/B560/16GB RAM/500GB SSD/RTX 2060/650W)',49000000,'Máy tính lập trình',28,2000000,1,2,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('PC GAMING SPEEDO (I3 10105F/H510/8GB RAM/500GB SSD/GTX 1650/700W)',21000000,'Máy tính lập trình',28,2000000,1,2,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('PC GAMING LIGHTBEARER 21 (R5 5600G/B550/16GB RAM/250GB SSD/RADEON RX VEGA/650W)',22900000,'Máy tính lập trình',28,2000000,1,2,1);
-- PC trạm
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Workstation Dell Precision 3650 (i7-11700/8GB RAM/1TB HDD/T600/DVDRW/K+M)',28900000,'Máy tính lập trình',28,2000000,1,3,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Workstation Dell Precision 4443 (i7-11700/12GB RAM/2TB HDD/T800/DVDRW/K+M)',38900000,'Máy tính lập trình',28,2000000,1,3,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Workstation Dell Precision 5604 (i7-11700/16GB RAM/2TB HDD/T900/DVDRW/K+M)',48900000,'Máy tính lập trình',28,2000000,1,3,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Workstation Dell Precision 6799 (i9-11700/8GB RAM/2TB HDD/T900/DVDRW/K+M)',58900000,'Máy tính lập trình',28,2000000,1,3,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Workstation Dell Precision 7022 (i9-11700/16GB RAM/5TB HDD/T1100/DVDRW/K+M)',78900000,'Máy tính lập trình',28,2000000,1,3,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Workstation Dell Precision 8055 (i9-11700/32GB RAM/10TB HDD/T1100/DVDRW/K+M)',99000000,'Máy tính lập trình',28,2000000,1,3,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Workstation Dell Precision 10565 (i9-11700/64GB RAM/10TB HDD/T1200/DVDRW/K+M)',110000000,'Máy tính lập trình',28,2000000,1,3,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Workstation Dell Precision 14050 (i9-11700/128GB RAM/20TB HDD/T1600/DVDRW/K+M)',228900000,'Máy tính lập trình',28,2000000,1,3,1);

-- Laptop Văn phòng
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Laptop Asus VivoBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',18900000,'Máy tính lập trình',28,2000000,1,7,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Laptop Asus Leafbook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',28900000,'Máy tính lập trình',28,2000000,1,7,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Laptop Asus WinnieBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',38900000,'Máy tính lập trình',28,2000000,1,7,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Laptop Asus CoolBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',48900000,'Máy tính lập trình',28,2000000,1,7,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Laptop Asus HotBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',58900000,'Máy tính lập trình',28,2000000,1,7,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Laptop Asus WarmBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',68900000,'Máy tính lập trình',28,2000000,1,7,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Laptop Asus MarkBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',78900000,'Máy tính lập trình',28,2000000,1,7,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Laptop Asus DakBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',88900000,'Máy tính lập trình',28,2000000,1,7,1);

-- Card đồ họa
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Card màn hình NVIDIA T600 (4GB GDDR6, 128-bit, 4x mini DisplayPort)',4900000,'Card đồ họa',28,2000000,1,8,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Card màn hình NVIDIA T800 (8GB GDDR6, 128-bit, 4x mini DisplayPort)',5900000,'Card đồ họa',28,2000000,1,8,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Card màn hình NVIDIA T1200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',6900000,'Card đồ họa',28,2000000,1,8,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Card màn hình NVIDIA T11200 (16GB GDDR6, 128-bit, 4x mini DisplayPort)',7900000,'Card đồ họa',28,2000000,1,8,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Card màn hình NVIDIA T320 (32GB GDDR6, 128-bit, 4x mini DisplayPort)',14900000,'Card đồ họa',28,2000000,1,8,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Card màn hình NVIDIA T6600 (64GB GDDR6, 128-bit, 4x mini DisplayPort)',24900000,'Card đồ họa',28,2000000,1,8,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Card màn hình NVIDIA T11600 (128GB GDDR6, 128-bit, 4x mini DisplayPort)',22900000,'Card đồ họa',28,2000000,1,8,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Card màn hình NVIDIA T8500 (64GB GDDR6, 256-bit, 4x mini DisplayPort)',17900000,'Card đồ họa',28,2000000,1,8,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTL`,`maTTSP`)
VALUE('Card màn hình NVIDIA T163600 (128GB GDDR6, 256-bit, 8x mini DisplayPort)',114900000,'Card đồ họa',28,2000000,1,8,1);

-- Bang Anh san pham
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (1,'60634_laptop_acer_gaming_predator_triton_500se_10.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (2,'62709_laptop_acer_gaming_predator_helios_500_12.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (3,'61228_laptop_acer_gaming_predator_helios_300_ph315_54_74ru_nhqc1sv002_den_2021_4.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (4,'61621_laptop_acer_gaming_aspire_7_a715_42g_18.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (5,'60790_laptop_acer_gaming_nitro_5_eagle_17.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (6,'59691_laptop_gigabyte_gaming_aorus_15_10.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (7,'63527_laptop_asus_gaming_tuf_fx706hcb_9.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (8,'63527_laptop_asus_gaming_tuf_fx706hcb_9.jpg');
-- Ảnh PC gaming
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (9,'63473_pc_gaming_lianli_o11dx_limited_2022.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (10,'63500_pc_gaming_hacom_pro_020_2022.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (11,'63502_pc_gaming_hacom_pro_021_2022.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (12,'63502_pc_gaming_hacom_pro_021_2022.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (13,'63502_pc_gaming_hacom_pro_021_2022.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (14,'63502_pc_gaming_hacom_pro_021_2022.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (15,'63502_pc_gaming_hacom_pro_021_2022.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (16,'63502_pc_gaming_hacom_pro_021_2022.jpg');

-- PC Trạm
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (17,'STOCK_PC_STATION.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (18,'STOCK_PC_STATION.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (19,'STOCK_PC_STATION.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (20,'STOCK_PC_STATION.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (21,'STOCK_PC_STATION.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (22,'STOCK_PC_STATION.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (23,'STOCK_PC_STATION.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (24,'STOCK_PC_STATION.png');
-- Laptop Văn phòng
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (25,'STOCK_LAPTOP_OFFICE.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (26,'STOCK_LAPTOP_OFFICE.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (27,'STOCK_LAPTOP_OFFICE.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (28,'STOCK_LAPTOP_OFFICE.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (29,'STOCK_LAPTOP_OFFICE.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (30,'STOCK_LAPTOP_OFFICE.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (31,'STOCK_LAPTOP_OFFICE.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (32,'STOCK_LAPTOP_OFFICE.jpg');
-- Card đồ họa
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (33,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (34,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (35,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (36,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (37,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (38,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (39,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (40,'STOCK_GRAPHIC_CARD.jpg');

-- Bảng tình trạng bài viết
INSERT INTO `tinh_trang_bai_viet` (`maTTBV`, `tenTTBV`) VALUES (NULL, 'Chưa công khai'), (NULL, 'Công khai');

-- Bảng tình trạng hoá đơn
INSERT INTO `tinh_trang_hoa_don` (`maTTHD`, `tenTTHD`) VALUES (NULL, 'Đã duyệt'), (NULL, 'Chưa duyệt'), (NULL, 'Đã huỷ');

-- Bảng phương thức thanh toán
INSERT INTO `phuong_thuc_thanh_toan` (`maPTTT`, `tenPTTT`) VALUES (NULL, 'COD'), (NULL, 'Chuyển khoản');

-- Bảng thông số
INSERT INTO `thong_so` (`maTS`, `tenTS`) VALUES (NULL, 'Hãng sản xuất'),
                                                (NULL, 'Chủng loại'),
                                                (NULL, 'Bộ vi xử lý'),
                                                (NULL, 'Bộ nhớ trong'),
                                                (NULL, 'Khe cắm'),
                                                (NULL, 'Dung lượng tối đa'),
                                                (NULL, 'VGA'),
                                                (NULL, 'Ổ cứng'),
                                                (NULL, 'Ổ quang'),
                                                (NULL, 'Bảo mật, công nghệ'),
                                                (NULL, 'Audio'),
                                                (NULL, 'Webcam'),
                                                (NULL, 'Màn hình'),
                                                (NULL, 'Cổng giao tiếp'),
                                                (NULL, 'Kích thước'),
                                                (NULL, 'Cân nặng'),
                                                (NULL, 'Hệ điều hành'),
                                                (NULL, 'Phụ kiện đi kèm'),
                                                (NULL, 'Giao tiếp mạng'),
                                                (NULL, 'Giao tiếp không dây')
                                                (NULL, 'Pin')


                                                (NULL, 'Chuẩn cắm hỗ trợ')
                                                (NULL, 'Microphone')
                                                (NULL, 'Trở kháng')
                                                (NULL, 'Tần số')
                                                (NULL, 'Kích cỡ màng loa')
                                                (NULL, 'Trọng lượng')
                                                (NULL, 'Tính năng đặc biệt');

-- Bảng sản phẩm thông số
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 1,1,"Acer"),
                                                                            (NULL, 1,2,"PT516-51s-71RW"),
                                                                            (NULL, 1,3,"i7 11800H"),
                                                                            (NULL, 1,4,"64GB RAM"),
                                                                            (NULL, 1,5,"4 khe"),
                                                                            (NULL, 1,6,"256GB"),
                                                                            (NULL, 1,7,"RTX 3080 8G"),
                                                                            (NULL, 1,8,"1TB SSD"),
                                                                            (NULL, 1,9,"None"),
                                                                            (NULL, 1,10,"Bàn phím RGB"),
                                                                            (NULL, 1,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 1,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 1,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 1,14,"1 x USB 3.2 Gen 2 port featuring power-off USB charging; 2 x USB 3.2 Gen 1 ports; 1 x HDMI® 2.0 port with HDCP support; 1 x Ethernet (RJ-45) port; 1 x USB Type-C port: USB 3.2 Gen 2 (up to 10 Gbps); 1 x 3.5 mm headphone/speaker jack, supporting headsets with built-in microphone; 1 x DC-in jack for AC adapter"),
                                                                            (NULL, 1,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 1,16,"2.2 kg"),
                                                                            (NULL, 1,17,"Win 11 Home"),
                                                                            (NULL, 1,18,"Cable + Sạc"),
                                                                            (NULL, 1,19,"Gigabit"),
                                                                            (NULL, 1,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 1,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 1,1,"Acer"),
                                                                            (NULL, 1,2,"PT516-51s-71RW"),
                                                                            (NULL, 1,3,"i7 11800H"),
                                                                            (NULL, 1,4,"64GB RAM"),
                                                                            (NULL, 1,5,"4 khe"),
                                                                            (NULL, 1,6,"256GB"),
                                                                            (NULL, 1,7,"RTX 3080 8G"),
                                                                            (NULL, 1,8,"1TB SSD"),
                                                                            (NULL, 1,9,"None"),
                                                                            (NULL, 1,10,"Bàn phím RGB"),
                                                                            (NULL, 1,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 1,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 1,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 1,14,"1 x USB 3.2 Gen 2 port featuring power-off USB charging; 2 x USB 3.2 Gen 1 ports; 1 x HDMI® 2.0 port with HDCP support; 1 x Ethernet (RJ-45) port; 1 x USB Type-C port: USB 3.2 Gen 2 (up to 10 Gbps); 1 x 3.5 mm headphone/speaker jack, supporting headsets with built-in microphone; 1 x DC-in jack for AC adapter"),
                                                                            (NULL, 1,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 1,16,"2.2 kg"),
                                                                            (NULL, 1,17,"Win 11 Home"),
                                                                            (NULL, 1,18,"Cable + Sạc"),
                                                                            (NULL, 1,19,"Gigabit"),
                                                                            (NULL, 1,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 1,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 1,1,"Acer"),
                                                                            (NULL, 1,2,"PT516-51s-71RW"),
                                                                            (NULL, 1,3,"i7 11800H"),
                                                                            (NULL, 1,4,"64GB RAM"),
                                                                            (NULL, 1,5,"4 khe"),
                                                                            (NULL, 1,6,"256GB"),
                                                                            (NULL, 1,7,"RTX 3080 8G"),
                                                                            (NULL, 1,8,"1TB SSD"),
                                                                            (NULL, 1,9,"None"),
                                                                            (NULL, 1,10,"Bàn phím RGB"),
                                                                            (NULL, 1,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 1,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 1,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 1,14,"1 x USB 3.2 Gen 2 port featuring power-off USB charging; 2 x USB 3.2 Gen 1 ports; 1 x HDMI® 2.0 port with HDCP support; 1 x Ethernet (RJ-45) port; 1 x USB Type-C port: USB 3.2 Gen 2 (up to 10 Gbps); 1 x 3.5 mm headphone/speaker jack, supporting headsets with built-in microphone; 1 x DC-in jack for AC adapter"),
                                                                            (NULL, 1,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 1,16,"2.2 kg"),
                                                                            (NULL, 1,17,"Win 11 Home"),
                                                                            (NULL, 1,18,"Cable + Sạc"),
                                                                            (NULL, 1,19,"Gigabit"),
                                                                            (NULL, 1,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 1,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 1,1,"Acer"),
                                                                            (NULL, 1,2,"PT516-51s-71RW"),
                                                                            (NULL, 1,3,"i7 11800H"),
                                                                            (NULL, 1,4,"64GB RAM"),
                                                                            (NULL, 1,5,"4 khe"),
                                                                            (NULL, 1,6,"256GB"),
                                                                            (NULL, 1,7,"RTX 3080 8G"),
                                                                            (NULL, 1,8,"1TB SSD"),
                                                                            (NULL, 1,9,"None"),
                                                                            (NULL, 1,10,"Bàn phím RGB"),
                                                                            (NULL, 1,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 1,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 1,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 1,14,"1 x USB 3.2 Gen 2 port featuring power-off USB charging; 2 x USB 3.2 Gen 1 ports; 1 x HDMI® 2.0 port with HDCP support; 1 x Ethernet (RJ-45) port; 1 x USB Type-C port: USB 3.2 Gen 2 (up to 10 Gbps); 1 x 3.5 mm headphone/speaker jack, supporting headsets with built-in microphone; 1 x DC-in jack for AC adapter"),
                                                                            (NULL, 1,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 1,16,"2.2 kg"),
                                                                            (NULL, 1,17,"Win 11 Home"),
                                                                            (NULL, 1,18,"Cable + Sạc"),
                                                                            (NULL, 1,19,"Gigabit"),
                                                                            (NULL, 1,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 1,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 1,1,"Acer"),
                                                                            (NULL, 1,2,"PT516-51s-71RW"),
                                                                            (NULL, 1,3,"i7 11800H"),
                                                                            (NULL, 1,4,"64GB RAM"),
                                                                            (NULL, 1,5,"4 khe"),
                                                                            (NULL, 1,6,"256GB"),
                                                                            (NULL, 1,7,"RTX 3080 8G"),
                                                                            (NULL, 1,8,"1TB SSD"),
                                                                            (NULL, 1,9,"None"),
                                                                            (NULL, 1,10,"Bàn phím RGB"),
                                                                            (NULL, 1,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 1,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 1,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 1,14,"1 x USB 3.2 Gen 2 port featuring power-off USB charging; 2 x USB 3.2 Gen 1 ports; 1 x HDMI® 2.0 port with HDCP support; 1 x Ethernet (RJ-45) port; 1 x USB Type-C port: USB 3.2 Gen 2 (up to 10 Gbps); 1 x 3.5 mm headphone/speaker jack, supporting headsets with built-in microphone; 1 x DC-in jack for AC adapter"),
                                                                            (NULL, 1,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 1,16,"2.2 kg"),
                                                                            (NULL, 1,17,"Win 11 Home"),
                                                                            (NULL, 1,18,"Cable + Sạc"),
                                                                            (NULL, 1,19,"Gigabit"),
                                                                            (NULL, 1,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 1,21,"57 Wh");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 1,1,"Gigabyte"),
                                                                            (NULL, 1,2,"PT516-51s-71RW"),
                                                                            (NULL, 1,3,"i7 11800H"),
                                                                            (NULL, 1,4,"64GB RAM"),
                                                                            (NULL, 1,5,"4 khe"),
                                                                            (NULL, 1,6,"256GB"),
                                                                            (NULL, 1,7,"RTX 3080 8G"),
                                                                            (NULL, 1,8,"1TB SSD"),
                                                                            (NULL, 1,9,"None"),
                                                                            (NULL, 1,10,"Bàn phím RGB"),
                                                                            (NULL, 1,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 1,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 1,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 1,14,"1 x USB 3.2 Gen 2 port featuring power-off USB charging; 2 x USB 3.2 Gen 1 ports; 1 x HDMI® 2.0 port with HDCP support; 1 x Ethernet (RJ-45) port; 1 x USB Type-C port: USB 3.2 Gen 2 (up to 10 Gbps); 1 x 3.5 mm headphone/speaker jack, supporting headsets with built-in microphone; 1 x DC-in jack for AC adapter"),
                                                                            (NULL, 1,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 1,16,"2.2 kg"),
                                                                            (NULL, 1,17,"Win 11 Home"),
                                                                            (NULL, 1,18,"Cable + Sạc"),
                                                                            (NULL, 1,19,"Gigabit"),
                                                                            (NULL, 1,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 1,21,"57 Wh");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 1,1,"ASUS"),
                                                                            (NULL, 1,2,"PT516-51s-71RW"),
                                                                            (NULL, 1,3,"i7 11800H"),
                                                                            (NULL, 1,4,"64GB RAM"),
                                                                            (NULL, 1,5,"4 khe"),
                                                                            (NULL, 1,6,"256GB"),
                                                                            (NULL, 1,7,"RTX 3080 8G"),
                                                                            (NULL, 1,8,"1TB SSD"),
                                                                            (NULL, 1,9,"None"),
                                                                            (NULL, 1,10,"Bàn phím RGB"),
                                                                            (NULL, 1,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 1,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 1,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 1,14,"1 x USB 3.2 Gen 2 port featuring power-off USB charging; 2 x USB 3.2 Gen 1 ports; 1 x HDMI® 2.0 port with HDCP support; 1 x Ethernet (RJ-45) port; 1 x USB Type-C port: USB 3.2 Gen 2 (up to 10 Gbps); 1 x 3.5 mm headphone/speaker jack, supporting headsets with built-in microphone; 1 x DC-in jack for AC adapter"),
                                                                            (NULL, 1,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 1,16,"2.2 kg"),
                                                                            (NULL, 1,17,"Win 11 Home"),
                                                                            (NULL, 1,18,"Cable + Sạc"),
                                                                            (NULL, 1,19,"Gigabit"),
                                                                            (NULL, 1,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 1,21,"57 Wh");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 1,1,"ASUS"),
                                                                            (NULL, 1,2,"PT516-51s-71RW"),
                                                                            (NULL, 1,3,"i7 11800H"),
                                                                            (NULL, 1,4,"64GB RAM"),
                                                                            (NULL, 1,5,"4 khe"),
                                                                            (NULL, 1,6,"256GB"),
                                                                            (NULL, 1,7,"RTX 3080 8G"),
                                                                            (NULL, 1,8,"1TB SSD"),
                                                                            (NULL, 1,9,"None"),
                                                                            (NULL, 1,10,"Bàn phím RGB"),
                                                                            (NULL, 1,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 1,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 1,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 1,14,"1 x USB 3.2 Gen 2 port featuring power-off USB charging; 2 x USB 3.2 Gen 1 ports; 1 x HDMI® 2.0 port with HDCP support; 1 x Ethernet (RJ-45) port; 1 x USB Type-C port: USB 3.2 Gen 2 (up to 10 Gbps); 1 x 3.5 mm headphone/speaker jack, supporting headsets with built-in microphone; 1 x DC-in jack for AC adapter"),
                                                                            (NULL, 1,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 1,16,"2.2 kg"),
                                                                            (NULL, 1,17,"Win 11 Home"),
                                                                            (NULL, 1,18,"Cable + Sạc"),
                                                                            (NULL, 1,19,"Gigabit"),
                                                                            (NULL, 1,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 1,21,"57 Wh");
