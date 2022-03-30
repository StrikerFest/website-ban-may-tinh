-- false - Ảnh quảng cáo -----------
-- true  - Ảnh sản phẩm
-- false - Bài viết -----------
-- false - Bình luận bài viết -----------
-- false - Bình luận sản phẩm -----------
-- true  - Chức vụ
-- true  - Chức vụ quyền hạn
-- none  - Hóa đơn
-- none  - Hóa đơn chi tiết
-- true - Khuyến mãi
-- true  - Người dùng
-- true  - Nhà sản xuất
-- false - Phản hồi bài viết -----------
-- false - Phản hồi sản phẩm -----------
-- true  - Phương thức thanh toán
-- true  - Quyền hạn
-- true  - Sản phẩm
-- true  - Sản phẩm thông số
-- true  - Thể loại
-- true  - Thể loại con
-- true  - Thể loại thông số
-- true  - Thông số
-- false - Tình trạng bài viết -----------
-- false - Tình trạng hóa đơn -----------
-- false - Tình trạng sản phẩm -----------


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
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('SuperAdmin','super@mail.com','0123456789','Địa chỉ 1','12345',1);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('Admin','admin@mail.com','0123456789','Địa chỉ 2','12345',2);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('Nhân viên 1','NV1@mail.com','0123456789','Địa chỉ 3','12345',3);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('Nhân viên 2','NV2@mail.com','0123456789','Địa chỉ 4','12345',4);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('Nhân viên 3','NV3@mail.com','0123456789','Địa chỉ 5','12345',5);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('Nguyễn Văn A','ANV@mail.com','0123456789','Địa chỉ 6','12345',6);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('Trần Văn B','BTV@mail.com','0123456789','Địa chỉ 7','12345',6);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('Lê Văn C','CLV@mail.com','0123456789','Địa chỉ 8','12345',6);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('Hoàng Văn D','DHV@mail.com','0123456789','Địa chỉ 9','12345',6);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('Dương Văn E','EDV@mail.com','0123456789','Địa chỉ 10','12345',6);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('Trịnh Văn F','FTV@mail.com','0123456789','Địa chỉ 11','12345',6);

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
INSERT INTO the_loai(`tenTL`) VALUE ('Máy tính bàn');
INSERT INTO the_loai(`tenTL`) VALUE ('Laptop');
INSERT INTO the_loai(`tenTL`) VALUE ('Màn hình');
INSERT INTO the_loai(`tenTL`) VALUE ('Chuột');
INSERT INTO the_loai(`tenTL`) VALUE ('Bàn phím');
INSERT INTO the_loai(`tenTL`) VALUE ('Ổ cứng');
INSERT INTO the_loai(`tenTL`) VALUE ('Card đồ họa');

-- =============================== ===========================================================================
-- Bảng Thể loại con
INSERT INTO the_loai_con(`maTL`,`tenTLC`) VALUE (1,'Máy PC văn phòng'),(1,'Máy PC trạm'),(1,'Máy PC gaming'),
                                                (2,'Laptop văn phòng'),(2,'Laptop trạm'),(2,'Laptop gaming'),
                                                (3,'Màn hình LED'),(3,'Màn hình OLED'),(3,'Màn hình IPS'),
                                                (4,'Chuột có dây'),(4,'Chuột không dây'),
                                                (5,'Bàn phím mềm'),(5,'Bàn phím giả cơ'),(5,'Bàn phím cơ'),
                                                (6,'Ổ cứng HDD'),(6,'Ổ cứng SSD'),(6,'Ổ cứng NVME'),
                                                (7,'Card game'),(7,'Card thiết kế đồ họa'),(7,'Card đào coin');
-- ==========================================================================================================
-- Bảng Trạng thái sản phẩm
INSERT INTO tinh_trang_san_pham(`tenTTSP`) VALUE ('Còn hàng');
INSERT INTO tinh_trang_san_pham(`tenTTSP`) VALUE ('Hết hàng');
INSERT INTO tinh_trang_san_pham(`tenTTSP`) VALUE ('Không còn giao bán');
INSERT INTO tinh_trang_san_pham(`tenTTSP`) VALUE ('Liên hệ');

-- ==========================================================================================================
-- Bảng Sản phẩm

-- Laptop gaming
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Acer Gaming Predator Triton 500SE (PT516-51s-71RW) (NH.QAKSV.001) (i7 11800H/64GB RAM/1TB SSD/RTX 3080 8G/16.0 inch WQXGA 165Hz 100%sRGB/Win10/Xám) (2021)',82990000,'Máy tính lập trình',28,5,7,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Acer Gaming Predator Helios 500 PH517-52-797L (NH.QD3SV.001) (i711800H/64GB Ram/2TB SSD/RTX3080 8G/17.3 inch FHD 360Hz/Win 10/Đen)',98000000,'Máy tính lập trình',28,5,7,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Acer Gaming Predator Helios 300 PH315-54-74RU (NH.QC1SV.002) (i7 11800H/16GB Ram/512GB SSD/RTX3070 8G/15.6 inch QHD 165Hz/Win 10/Đen) (2021)',45,'Máy tính lập trình',28,5,7,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Acer Gaming Aspire 7 A715-42G-R4XX (NH.QAYSV.008) (R5 5500U/8GB RAM/256GB SSD/15.6 inch FHD/GTX1650 4G/Win11/Đen) (2021)',18000000,'Máy tính lập trình',28,5,7,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Acer Gaming Nitro 5 Eagle AN515-57-54MV (NH.QENSV.003) (i5 11400H/8GB Ram/512GB SSD/RTX3050 4G/15.6 inch FHD 144Hz/Win 11 mới nhất/Đen) (2021)',23000000,'Máy tính lập trình',28,5,7,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Gigabyte Gaming AORUS 15P (XD-73S1224GH) (i7 11800H /16GB Ram/1TB SSD/RTX3070 8G/15.6 inch FHD 240Hz/Win 10/Đen/Balo Aorus) (2021)',50000000,'Máy tính lập trình',28,10,8,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus Gaming TUF FX706HCB-HX105W (i5 11400H/8GB RAM/512GB SSD/17.3 FHD 144hz/RTX 3050 4GB/Win11/Đen)',23000000,'Máy tính lập trình',28,10,4,6,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus Gaming TUF FX706HCB-HX105W (i9 11400H/8GB RAM/512GB SSD/17.3 FHD 144hz/RTX 3050 4GB/Win11/Đen)',73000000,'Máy tính lập trình',28,10,4,6,1);
-- PC Gaming
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('PC GAMING HACOM LIAN-LI O11DX LIMITED (I7 12700KF/Z690/32GB RAM/1TB SSD/RTX 3070TI/1050W)',70000000,'Máy tính lập trình',28,10,1,3,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('PC GAMING HACOM PRO 020 (I5 11400F/B560/16GB RAM/500GB SSD/RTX 2060/650W)',30000000,'Máy tính lập trình',28,10,1,3,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('PC GAMING HACOM 031 (I3 10105F/H510/8GB RAM/500GB SSD/GTX 1650/700W)',13000000,'Máy tính lập trình',28,10,1,3,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('PC GAMING HACOM PRO 021 (R5 5600G/B550/16GB RAM/250GB SSD/RADEON RX VEGA/650W)',16900000,'Máy tính lập trình',28,5,1,3,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('PC GAMING VANGUARD O11DX LIMITED (I7 12700KF/Z690/32GB RAM/1TB SSD/RTX 3070TI/1050W)',123000000,'Máy tính lập trình',28,5,1,3,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('PC GAMING SOULREAVER 020 (I5 11400F/B560/16GB RAM/500GB SSD/RTX 2060/650W)',49000000,'Máy tính lập trình',28,5,1,3,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('PC GAMING SPEEDO (I3 10105F/H510/8GB RAM/500GB SSD/GTX 1650/700W)',21000000,'Máy tính lập trình',28,5,1,3,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('PC GAMING LIGHTBEARER 21 (R5 5600G/B550/16GB RAM/250GB SSD/RADEON RX VEGA/650W)',22900000,'Máy tính lập trình',28,5,1,3,1);
-- PC trạm
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Workstation Dell Precision 3650 (i7-11700/8GB RAM/1TB HDD/T600/DVDRW/K+M)',28900000,'Máy tính lập trình',28,5,1,2,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Workstation Dell Precision 4443 (i7-11700/12GB RAM/2TB HDD/T800/DVDRW/K+M)',38900000,'Máy tính lập trình',28,5,1,2,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Workstation Dell Precision 5604 (i7-11700/16GB RAM/2TB HDD/T900/DVDRW/K+M)',48900000,'Máy tính lập trình',28,5,1,2,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Workstation Dell Precision 6799 (i9-11700/8GB RAM/2TB HDD/T900/DVDRW/K+M)',58900000,'Máy tính lập trình',28,15,1,2,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Workstation Dell Precision 7022 (i9-11700/16GB RAM/5TB HDD/T1100/DVDRW/K+M)',78900000,'Máy tính lập trình',28,15,1,2,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Workstation Dell Precision 8055 (i9-11700/32GB RAM/10TB HDD/T1100/DVDRW/K+M)',99000000,'Máy tính lập trình',28,15,1,2,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Workstation Dell Precision 10565 (i9-11700/64GB RAM/10TB HDD/T1200/DVDRW/K+M)',110000000,'Máy tính lập trình',28,15,1,2,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Workstation Dell Precision 14050 (i9-11700/128GB RAM/20TB HDD/T1600/DVDRW/K+M)',228900000,'Máy tính lập trình',28,15,1,2,1);

-- Laptop Văn phòng
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus VivoBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',18900000,'Máy tính lập trình',28,15,1,4,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus Leafbook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',28900000,'Máy tính lập trình',28,15,1,4,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus WinnieBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',38900000,'Máy tính lập trình',28,5,1,4,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus CoolBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',48900000,'Máy tính lập trình',28,5,1,4,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus HotBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',58900000,'Máy tính lập trình',28,5,1,4,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus WarmBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',68900000,'Máy tính lập trình',28,5,1,4,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus MarkBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',78900000,'Máy tính lập trình',28,5,1,4,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus DakBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',88900000,'Máy tính lập trình',28,5,1,4,1);

-- Card đồ họa
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Card màn hình NVIDIA T600 (4GB GDDR6, 128-bit, 4x mini DisplayPort)',4900000,'Card đồ họa',28,10,1,19,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Card màn hình NVIDIA T800 (8GB GDDR6, 128-bit, 4x mini DisplayPort)',5900000,'Card đồ họa',28,10,1,19,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Card màn hình NVIDIA T1200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',6900000,'Card đồ họa',28,10,1,19,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Card màn hình NVIDIA T11200 (16GB GDDR6, 128-bit, 4x mini DisplayPort)',7900000,'Card đồ họa',28,10,1,19,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Card màn hình NVIDIA T320 (32GB GDDR6, 128-bit, 4x mini DisplayPort)',14900000,'Card đồ họa',28,10,1,19,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Card màn hình NVIDIA T6600 (64GB GDDR6, 128-bit, 4x mini DisplayPort)',24900000,'Card đồ họa',28,10,1,19,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Card màn hình NVIDIA T11600 (128GB GDDR6, 128-bit, 4x mini DisplayPort)',22900000,'Card đồ họa',28,15,1,19,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Card màn hình NVIDIA T8500 (64GB GDDR6, 256-bit, 4x mini DisplayPort)',17900000,'Card đồ họa',28,15,1,19,1);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Card màn hình NVIDIA T163600 (128GB GDDR6, 256-bit, 8x mini DisplayPort)',114900000,'Card đồ họa',28,15,1,19,1);


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
                                                (NULL, 'Giao tiếp không dây'),
                                                (NULL, 'Pin'),


                                                (NULL, 'Chuẩn cắm hỗ trợ'),
                                                (NULL, 'Microphone'),
                                                (NULL, 'Trở kháng'),
                                                (NULL, 'Tần số'),
                                                (NULL, 'Kích cỡ màng loa'),
                                                (NULL, 'Trọng lượng'),
                                                (NULL, 'Tính năng đặc biệt');

-- Bảng sản phẩm thông số
-- Máy tính
INSERT INTO `the_loai_thong_so` (`maTLTS`, `maTL`,`maTS`) VALUES    (NULL, 1,1),(NULL, 1,2),(NULL, 1,3),(NULL, 1,4),(NULL, 1,5),
                                                                    (NULL, 1,6),(NULL, 1,7),(NULL, 1,8),(NULL, 1,9),(NULL, 1,10),
                                                                    (NULL, 1,11),(NULL, 1,12),(NULL, 1,13),(NULL, 1,14),(NULL, 1,15),
                                                                    (NULL, 1,16),(NULL, 1,17),(NULL, 1,18),(NULL, 1,19),(NULL, 1,20);
-- Laptop
INSERT INTO `the_loai_thong_so` (`maTLTS`, `maTL`,`maTS`) VALUES    (NULL, 2,1),(NULL, 2,2),(NULL, 2,3),(NULL, 2,4),(NULL, 2,5),
                                                                    (NULL, 2,6),(NULL, 2,7),(NULL, 2,8),(NULL, 2,9),(NULL, 2,10),
                                                                    (NULL, 2,11),(NULL, 2,12),(NULL, 2,13),(NULL, 2,14),(NULL, 2,15),
                                                                    (NULL, 2,16),(NULL, 2,17),(NULL, 2,18),(NULL, 2,19),(NULL, 2,20),(NULL,2,21);

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

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 2,1,"Acer"),
                                                                            (NULL, 2,2,"PT516-51s-71RW"),
                                                                            (NULL, 2,3,"i7 11800H"),
                                                                            (NULL, 2,4,"64GB RAM"),
                                                                            (NULL, 2,5,"4 khe"),
                                                                            (NULL, 2,6,"256GB"),
                                                                            (NULL, 2,7,"RTX 3080 8G"),
                                                                            (NULL, 2,8,"1TB SSD"),
                                                                            (NULL, 2,9,"None"),
                                                                            (NULL, 2,10,"Bàn phím RGB"),
                                                                            (NULL, 2,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 2,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 2,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 2,14,"1 x USB 3.2 Gen 2 port featuring power-off USB charging; 2 x USB 3.2 Gen 1 ports; 1 x HDMI® 2.0 port with HDCP support; 1 x Ethernet (RJ-45) port; 1 x USB Type-C port: USB 3.2 Gen 2 (up to 10 Gbps); 1 x 3.5 mm headphone/speaker jack, supporting headsets with built-in microphone; 1 x DC-in jack for AC adapter"),
                                                                            (NULL, 2,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 2,16,"2.2 kg"),
                                                                            (NULL, 2,17,"Win 11 Home"),
                                                                            (NULL, 2,18,"Cable + Sạc"),
                                                                            (NULL, 2,19,"Gigabit"),
                                                                            (NULL, 2,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 2,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 3,1,"Acer"),
                                                                            (NULL, 3,2,"PT516-51s-71RW"),
                                                                            (NULL, 3,3,"i7 11800H"),
                                                                            (NULL, 3,4,"64GB RAM"),
                                                                            (NULL, 3,5,"4 khe"),
                                                                            (NULL, 3,6,"256GB"),
                                                                            (NULL, 3,7,"RTX 3080 8G"),
                                                                            (NULL, 3,8,"1TB SSD"),
                                                                            (NULL, 3,9,"None"),
                                                                            (NULL, 3,10,"Bàn phím RGB"),
                                                                            (NULL, 3,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 3,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 3,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 3,14,"1 x USB 3.2 Gen 2 port featuring power-off USB charging; 2 x USB 3.2 Gen 1 ports; 1 x HDMI® 2.0 port with HDCP support; 1 x Ethernet (RJ-45) port; 1 x USB Type-C port: USB 3.2 Gen 2 (up to 10 Gbps); 1 x 3.5 mm headphone/speaker jack, supporting headsets with built-in microphone; 1 x DC-in jack for AC adapter"),
                                                                            (NULL, 3,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 3,16,"2.2 kg"),
                                                                            (NULL, 3,17,"Win 11 Home"),
                                                                            (NULL, 3,18,"Cable + Sạc"),
                                                                            (NULL, 3,19,"Gigabit"),
                                                                            (NULL, 3,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 3,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 4,1,"Acer"),
                                                                            (NULL, 4,2,"PT516-51s-71RW"),
                                                                            (NULL, 4,3,"i7 11800H"),
                                                                            (NULL, 4,4,"64GB RAM"),
                                                                            (NULL, 4,5,"4 khe"),
                                                                            (NULL, 4,6,"256GB"),
                                                                            (NULL, 4,7,"RTX 3080 8G"),
                                                                            (NULL, 4,8,"1TB SSD"),
                                                                            (NULL, 4,9,"None"),
                                                                            (NULL, 4,10,"Bàn phím RGB"),
                                                                            (NULL, 4,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 4,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 4,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 4,14,"1 x USB 3.2 Gen 2 port featuring power-off USB charging; 2 x USB 3.2 Gen 1 ports; 1 x HDMI® 2.0 port with HDCP support; 1 x Ethernet (RJ-45) port; 1 x USB Type-C port: USB 3.2 Gen 2 (up to 10 Gbps); 1 x 3.5 mm headphone/speaker jack, supporting headsets with built-in microphone; 1 x DC-in jack for AC adapter"),
                                                                            (NULL, 4,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 4,16,"2.2 kg"),
                                                                            (NULL, 4,17,"Win 11 Home"),
                                                                            (NULL, 4,18,"Cable + Sạc"),
                                                                            (NULL, 4,19,"Gigabit"),
                                                                            (NULL, 4,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 4,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 5,1,"Acer"),
                                                                            (NULL, 5,2,"PT516-51s-71RW"),
                                                                            (NULL, 5,3,"i7 11800H"),
                                                                            (NULL, 5,4,"64GB RAM"),
                                                                            (NULL, 5,5,"4 khe"),
                                                                            (NULL, 5,6,"256GB"),
                                                                            (NULL, 5,7,"RTX 3080 8G"),
                                                                            (NULL, 5,8,"1TB SSD"),
                                                                            (NULL, 5,9,"None"),
                                                                            (NULL, 5,10,"Bàn phím RGB"),
                                                                            (NULL, 5,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 5,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 5,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 5,14,"1 x USB 3.2 Gen 2 port featuring power-off USB charging; 2 x USB 3.2 Gen 1 ports; 1 x HDMI® 2.0 port with HDCP support; 1 x Ethernet (RJ-45) port; 1 x USB Type-C port: USB 3.2 Gen 2 (up to 10 Gbps); 1 x 3.5 mm headphone/speaker jack, supporting headsets with built-in microphone; 1 x DC-in jack for AC adapter"),
                                                                            (NULL, 5,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 5,16,"2.2 kg"),
                                                                            (NULL, 5,17,"Win 11 Home"),
                                                                            (NULL, 5,18,"Cable + Sạc"),
                                                                            (NULL, 5,19,"Gigabit"),
                                                                            (NULL, 5,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 5,21,"57 Wh");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 6,1,"Gigabyte"),
                                                                            (NULL, 6,2,"PT516-51s-71RW"),
                                                                            (NULL, 6,3,"i7 11800H"),
                                                                            (NULL, 6,4,"64GB RAM"),
                                                                            (NULL, 6,5,"4 khe"),
                                                                            (NULL, 6,6,"256GB"),
                                                                            (NULL, 6,7,"RTX 3080 8G"),
                                                                            (NULL, 6,8,"1TB SSD"),
                                                                            (NULL, 6,9,"None"),
                                                                            (NULL, 6,10,"Bàn phím RGB"),
                                                                            (NULL, 6,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 6,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 6,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 6,14,"1 x USB 3.2 Gen 2 port featuring power-off USB charging; 2 x USB 3.2 Gen 1 ports; 1 x HDMI® 2.0 port with HDCP support; 1 x Ethernet (RJ-45) port; 1 x USB Type-C port: USB 3.2 Gen 2 (up to 10 Gbps); 1 x 3.5 mm headphone/speaker jack, supporting headsets with built-in microphone; 1 x DC-in jack for AC adapter"),
                                                                            (NULL, 6,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 6,16,"2.2 kg"),
                                                                            (NULL, 6,17,"Win 11 Home"),
                                                                            (NULL, 6,18,"Cable + Sạc"),
                                                                            (NULL, 6,19,"Gigabit"),
                                                                            (NULL, 6,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 6,21,"57 Wh");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 7,1,"ASUS"),
                                                                            (NULL, 7,2,"PT516-51s-71RW"),
                                                                            (NULL, 7,3,"i7 11800H"),
                                                                            (NULL, 7,4,"64GB RAM"),
                                                                            (NULL, 7,5,"4 khe"),
                                                                            (NULL, 7,6,"256GB"),
                                                                            (NULL, 7,7,"RTX 3080 8G"),
                                                                            (NULL, 7,8,"1TB SSD"),
                                                                            (NULL, 7,9,"None"),
                                                                            (NULL, 7,10,"Bàn phím RGB"),
                                                                            (NULL, 7,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 7,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 7,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 7,14,"1 x USB 3.2 Gen 2 port featuring power-off USB charging; 2 x USB 3.2 Gen 1 ports; 1 x HDMI® 2.0 port with HDCP support; 1 x Ethernet (RJ-45) port; 1 x USB Type-C port: USB 3.2 Gen 2 (up to 10 Gbps); 1 x 3.5 mm headphone/speaker jack, supporting headsets with built-in microphone; 1 x DC-in jack for AC adapter"),
                                                                            (NULL, 7,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 7,16,"2.2 kg"),
                                                                            (NULL, 7,17,"Win 11 Home"),
                                                                            (NULL, 7,18,"Cable + Sạc"),
                                                                            (NULL, 7,19,"Gigabit"),
                                                                            (NULL, 7,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 7,21,"57 Wh");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 8,1,"ASUS"),
                                                                            (NULL, 8,2,"PT516-51s-71RW"),
                                                                            (NULL, 8,3,"i7 11800H"),
                                                                            (NULL, 8,4,"64GB RAM"),
                                                                            (NULL, 8,5,"4 khe"),
                                                                            (NULL, 8,6,"256GB"),
                                                                            (NULL, 8,7,"RTX 3080 8G"),
                                                                            (NULL, 8,8,"1TB SSD"),
                                                                            (NULL, 8,9,"None"),
                                                                            (NULL, 8,10,"Bàn phím RGB"),
                                                                            (NULL, 8,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 8,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 8,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 8,14,"1 x USB 3.2 Gen 2 port featuring power-off USB charging; 2 x USB 3.2 Gen 1 ports; 1 x HDMI® 2.0 port with HDCP support; 1 x Ethernet (RJ-45) port; 1 x USB Type-C port: USB 3.2 Gen 2 (up to 10 Gbps); 1 x 3.5 mm headphone/speaker jack, supporting headsets with built-in microphone; 1 x DC-in jack for AC adapter"),
                                                                            (NULL, 8,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 8,16,"2.2 kg"),
                                                                            (NULL, 8,17,"Win 11 Home"),
                                                                            (NULL, 8,18,"Cable + Sạc"),
                                                                            (NULL, 8,19,"Gigabit"),
                                                                            (NULL, 8,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 8,21,"57 Wh");

-- Bảng khuyến mại
INSERT INTO `khuyen_mai` (`maKM`, `maSP`,`khuyenMai`) VALUES    (NULL, 1,"Free ship và giao hàng 1"),(NULL, 2,"Free ship và giao hàng"),
                                                                (NULL, 3,"Free ship và giao hàng 2"),(NULL, 4,"Free ship và giao hàng"),
                                                                (NULL, 5,"Free ship và giao hàng 3"),(NULL, 6,"Free ship và giao hàng"),
                                                                (NULL, 7,"Free ship và giao hàng 4"),(NULL, 8,"Free ship và giao hàng"),
                                                                (NULL, 9,"Free ship và giao hàng 5"),(NULL, 10,"Free ship và giao hàng"),
                                                                (NULL, 11,"Free ship và giao hàng 6"),(NULL, 12,"Free ship và giao hàng"),
                                                                (NULL, 13,"Free ship và giao hàng 7"),(NULL, 14,"Free ship và giao hàng"),
                                                                (NULL, 15,"Free ship và giao hàng 8"),(NULL, 16,"Free ship và giao hàng"),
                                                                (NULL, 17,"Free ship và giao hàng 9"),(NULL, 18,"Free ship và giao hàng"),
                                                                (NULL, 19,"Free ship và giao hàng 10"),(NULL, 20,"Free ship và giao hàng"),
                                                                (NULL, 21,"Free ship và giao hàng 11"),(NULL, 22,"Free ship và giao hàng"),
                                                                (NULL, 23,"Free ship và giao hàng 12"),(NULL, 24,"Free ship và giao hàng"),
                                                                (NULL, 25,"Free ship và giao hàng 13"),(NULL, 26,"Free ship và giao hàng"),
                                                                (NULL, 27,"Free ship và giao hàng 14"),(NULL, 28,"Free ship và giao hàng"),
                                                                (NULL, 29,"Free ship và giao hàng 15"),(NULL, 30,"Free ship và giao hàng"),
                                                                (NULL, 31,"Free ship và giao hàng 16"),(NULL, 32,"Free ship và giao hàng"),
                                                                (NULL, 33,"Free ship và giao hàng 17"),(NULL, 34,"Free ship và giao hàng"),
                                                                (NULL, 35,"Free ship và giao hàng 18"),(NULL, 36,"Free ship và giao hàng"),
                                                                (NULL, 37,"Free ship và giao hàng 19"),(NULL, 38,"Free ship và giao hàng"),
                                                                (NULL, 39,"Free ship và giao hàng 20"),(NULL, 40,"Free ship và giao hàng");



