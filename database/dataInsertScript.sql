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
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('Admin','admin@mail.com','0123456789','Địa chỉ 2','$2a$12$ZEaOgkX2ZAGcD9BVJ99fQOjJogJe3GYPuo8bQfXzd.zSQdvEYe8Q6',2);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('Nhân viên 1','NV1@mail.com','0123456789','Địa chỉ 3','$2a$12$ZEaOgkX2ZAGcD9BVJ99fQOjJogJe3GYPuo8bQfXzd.zSQdvEYe8Q6',3);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('Nhân viên 2','NV2@mail.com','0123456789','Địa chỉ 4','$2a$12$ZEaOgkX2ZAGcD9BVJ99fQOjJogJe3GYPuo8bQfXzd.zSQdvEYe8Q6',4);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('Nhân viên 3','NV3@mail.com','0123456789','Địa chỉ 5','$2a$12$ZEaOgkX2ZAGcD9BVJ99fQOjJogJe3GYPuo8bQfXzd.zSQdvEYe8Q6',5);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('Nguyễn Văn A','ANV@mail.com','0123456789','Địa chỉ 6','$2a$12$ZEaOgkX2ZAGcD9BVJ99fQOjJogJe3GYPuo8bQfXzd.zSQdvEYe8Q6',6);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('Trần Văn B','BTV@mail.com','0123456789','Địa chỉ 7','$2a$12$ZEaOgkX2ZAGcD9BVJ99fQOjJogJe3GYPuo8bQfXzd.zSQdvEYe8Q6',6);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('Lê Văn C','CLV@mail.com','0123456789','Địa chỉ 8','$2a$12$ZEaOgkX2ZAGcD9BVJ99fQOjJogJe3GYPuo8bQfXzd.zSQdvEYe8Q6',6);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('Hoàng Văn D','DHV@mail.com','0123456789','Địa chỉ 9','$2a$12$ZEaOgkX2ZAGcD9BVJ99fQOjJogJe3GYPuo8bQfXzd.zSQdvEYe8Q6',6);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('Dương Văn E','EDV@mail.com','0123456789','Địa chỉ 10','$2a$12$ZEaOgkX2ZAGcD9BVJ99fQOjJogJe3GYPuo8bQfXzd.zSQdvEYe8Q6',6);
INSERT INTO nguoi_dung(`tenND`,`emailND`,`soDienThoai`,`diaChiND`,`matKhauND`,`maCV`) VALUE ('Trịnh Văn F','FTV@mail.com','0123456789','Địa chỉ 11','$2a$12$ZEaOgkX2ZAGcD9BVJ99fQOjJogJe3GYPuo8bQfXzd.zSQdvEYe8Q6',6);

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
INSERT INTO the_loai(`tenTL`) VALUE ('Linh kiện');
INSERT INTO the_loai(`tenTL`) VALUE ('Phụ kiện');
INSERT INTO the_loai(`tenTL`) VALUE ('Tặng phẩm');
-- INSERT INTO the_loai(`tenTL`) VALUE ('Ổ cứng');
-- INSERT INTO the_loai(`tenTL`) VALUE ('Card đồ họa');

-- =============================== ===========================================================================
-- Bảng Thể loại con
INSERT INTO the_loai_con(`maTL`,`tenTLC`) VALUE (1,'Máy PC văn phòng'),(1,'Máy PC trạm'),(1,'Máy PC gaming'),
                                                (2,'Laptop văn phòng'),(2,'Laptop trạm'),(2,'Laptop gaming'),
                                                (3,'Màn hình LED'),(3,'Màn hình OLED'),(3,'Màn hình IPS'),
                                                (5,'Chuột có dây'),(5,'Chuột không dây'),
                                                (5,'Bàn phím mềm'),(5,'Bàn phím giả cơ'),(5,'Bàn phím cơ'),
                                                (4,'Ổ cứng HDD'),(4,'Ổ cứng SSD'),(4,'Ổ cứng NVME'),
                                                (4,'Card game'),(4,'Card thiết kế đồ họa'),(4,'Card đào coin'),(6, 'Tặng phẩm');
-- ==========================================================================================================
-- Bảng Trạng thái sản phẩm
INSERT INTO tinh_trang_san_pham(`tenTTSP`) VALUE ('Không còn giao bán');
INSERT INTO tinh_trang_san_pham(`tenTTSP`) VALUE ('Liên hệ');
INSERT INTO tinh_trang_san_pham(`tenTTSP`) VALUE ('Đang bán');

-- ==========================================================================================================
-- Bảng Nhà phân phối
INSERT INTO `nha_phan_phoi` (`maNPP`, `tenNPP`, `diaChiNPP`, `soDienThoai`) VALUES
(NULL, 'Công ty A', 'Địa chỉ công ty A', '0123456789'),
(NULL, 'Công ty B', 'Địa chỉ công ty B', '0123456789'),
(NULL, 'Công ty C', 'Địa chỉ công ty C', '0123456789');

-- ==========================================================================================================
-- Bảng ảnh quảng cáo
-- INSERT INTO `anh_quang_cao` (`maAQC`, `anh`, `duongDan`) VALUES
-- (NULL, 'Omen17QC.png', '43');
INSERT INTO `anh_quang_cao` (`maAQC`, `anh`, `duongDan`) VALUES
(NULL, 'asuszenbookQC.jpg', '42');
INSERT INTO `anh_quang_cao` (`maAQC`, `anh`, `duongDan`) VALUES
(NULL, 'asuszenbookQC.jpg', '42');
INSERT INTO `anh_quang_cao` (`maAQC`, `anh`, `duongDan`) VALUES
(NULL, 'asuszenbookQC.jpg', '42');
-- ==========================================================================================================
-- Bảng Sản phẩm


-- Laptop gaming
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Acer Gaming Predator Triton 500SE (PT516-51s-71RW) (NH.QAKSV.001) (i7 11800H/64GB RAM/1TB SSD/RTX 3080 8G/16.0 inch WQXGA 165Hz 100%sRGB/Win10/Xám) (2021)',82990000,'Máy tính lập trình',10,5,7,6,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Acer Gaming Predator Helios 500 PH517-52-797L (NH.QD3SV.001) (i711800H/64GB Ram/2TB SSD/RTX3080 8G/17.3 inch FHD 360Hz/Win 10/Đen)',98000000,'Máy tính lập trình',10,5,7,6,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Acer Gaming Predator Helios 300 PH315-54-74RU (NH.QC1SV.002) (i7 11800H/16GB Ram/512GB SSD/RTX3070 8G/15.6 inch QHD 165Hz/Win 10/Đen) (2021)',4500000,'Máy tính lập trình',10,5,7,6,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Acer Gaming Aspire 7 A715-42G-R4XX (NH.QAYSV.008) (R5 5500U/8GB RAM/256GB SSD/15.6 inch FHD/GTX1650 4G/Win11/Đen) (2021)',18000000,'Máy tính lập trình',10,5,7,6,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Acer Gaming Nitro 5 Eagle AN515-57-54MV (NH.QENSV.003) (i5 11400H/8GB Ram/512GB SSD/RTX3050 4G/15.6 inch FHD 144Hz/Win 11 mới nhất/Đen) (2021)',23000000,'Máy tính lập trình',10,5,7,6,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Gigabyte Gaming AORUS 15P (XD-73S1224GH) (i7 11800H /16GB Ram/1TB SSD/RTX3070 8G/15.6 inch FHD 240Hz/Win 10/Đen/Balo Aorus) (2021)',50000000,'Máy tính lập trình',10,10,8,6,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus Gaming TUF FX706HCB-HX105W (i5 11400H/8GB RAM/512GB SSD/17.3 FHD 144hz/RTX 3050 4GB/Win11/Đen)',23000000,'Máy tính lập trình',10,10,4,6,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus Gaming TUF FX706HCB-HX105W (i9 11400H/8GB RAM/512GB SSD/17.3 FHD 144hz/RTX 3050 4GB/Win11/Đen)',73000000,'Máy tính lập trình',10,10,4,6,3);
-- PC Gaming
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('PC GAMING HACOM LIAN-LI O11DX LIMITED (I7 12700KF/Z690/32GB RAM/1TB SSD/RTX 3070TI/1050W)',70000000,'Máy tính lập trình',10,10,1,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('PC GAMING HACOM PRO 020 (I5 11400F/B560/16GB RAM/500GB SSD/RTX 2060/650W)',30000000,'Máy tính lập trình',10,10,1,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('PC GAMING HACOM 031 (I3 10105F/H510/8GB RAM/500GB SSD/GTX 1650/700W)',13000000,'Máy tính lập trình',10,10,1,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('PC GAMING HACOM PRO 021 (R5 5600G/B550/16GB RAM/250GB SSD/RADEON RX VEGA/650W)',16900000,'Máy tính lập trình',10,5,1,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('PC GAMING VANGUARD O11DX LIMITED (I7 12700KF/Z690/32GB RAM/1TB SSD/RTX 3070TI/1050W)',123000000,'Máy tính lập trình',10,5,1,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('PC GAMING SOULREAVER 020 (I5 11400F/B560/16GB RAM/500GB SSD/RTX 2060/650W)',49000000,'Máy tính lập trình',10,5,1,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('PC GAMING SPEEDO (I3 10105F/H510/8GB RAM/500GB SSD/GTX 1650/700W)',21000000,'Máy tính lập trình',10,5,1,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('PC GAMING LIGHTBEARER 21 (R5 5600G/B550/16GB RAM/250GB SSD/RADEON RX VEGA/650W)',22900000,'Máy tính lập trình',10,5,1,3,3);
-- PC trạm
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Workstation Dell Precision 3650 (i7-11700/8GB RAM/1TB HDD/T600/DVDRW/K+M)',28900000,'Máy tính lập trình',10,5,1,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Workstation Dell Precision 4443 (i7-11700/12GB RAM/2TB HDD/T800/DVDRW/K+M)',38900000,'Máy tính lập trình',10,5,1,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Workstation Dell Precision 5604 (i7-11700/16GB RAM/2TB HDD/T900/DVDRW/K+M)',48900000,'Máy tính lập trình',10,5,1,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Workstation Dell Precision 6799 (i9-11700/8GB RAM/2TB HDD/T900/DVDRW/K+M)',58900000,'Máy tính lập trình',10,15,1,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Workstation Dell Precision 7022 (i9-11700/16GB RAM/5TB HDD/T1100/DVDRW/K+M)',78900000,'Máy tính lập trình',10,15,1,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Workstation Dell Precision 8055 (i9-11700/32GB RAM/10TB HDD/T1100/DVDRW/K+M)',99000000,'Máy tính lập trình',10,15,1,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Workstation Dell Precision 10565 (i9-11700/64GB RAM/10TB HDD/T1200/DVDRW/K+M)',110000000,'Máy tính lập trình',10,15,1,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Workstation Dell Precision 14050 (i9-11700/128GB RAM/20TB HDD/T1600/DVDRW/K+M)',228900000,'Máy tính lập trình',10,15,1,2,3);

-- Laptop Văn phòng
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus VivoBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',18900000,'Máy tính lập trình',10,15,1,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus Leafbook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',28900000,'Máy tính lập trình',10,15,1,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus WinnieBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',38900000,'Máy tính lập trình',10,5,1,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus CoolBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',48900000,'Máy tính lập trình',10,5,1,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus HotBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',58900000,'Máy tính lập trình',10,5,1,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus WarmBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',68900000,'Máy tính lập trình',10,5,1,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus MarkBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',78900000,'Máy tính lập trình',10,5,1,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus DakBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',88900000,'Máy tính lập trình',10,5,1,4,3);

-- Card đồ họa
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Card màn hình NVIDIA T600 (4GB GDDR6, 128-bit, 4x mini DisplayPort)',4900000,'Card đồ họa',10,10,1,19,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Card màn hình NVIDIA T800 (8GB GDDR6, 128-bit, 4x mini DisplayPort)',5900000,'Card đồ họa',10,10,1,19,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Card màn hình NVIDIA T1200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',6900000,'Card đồ họa',10,10,1,19,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Card màn hình NVIDIA T11200 (16GB GDDR6, 128-bit, 4x mini DisplayPort)',7900000,'Card đồ họa',10,10,1,19,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Card màn hình NVIDIA T320 (32GB GDDR6, 128-bit, 4x mini DisplayPort)',14900000,'Card đồ họa',10,10,1,19,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Card màn hình NVIDIA T6600 (64GB GDDR6, 128-bit, 4x mini DisplayPort)',24900000,'Card đồ họa',10,10,1,19,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Card màn hình NVIDIA T11600 (128GB GDDR6, 128-bit, 4x mini DisplayPort)',22900000,'Card đồ họa',10,15,1,19,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Card màn hình NVIDIA T8500 (64GB GDDR6, 256-bit, 4x mini DisplayPort)',17900000,'Card đồ họa',10,15,1,19,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Card màn hình NVIDIA T163600 (128GB GDDR6, 256-bit, 8x mini DisplayPort)',114900000,'Card đồ họa',10,15,1,19,3);
-- Dac biet
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop Asus Zenbook S (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',88900000,'Máy tính lập trình',10,5,1,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maTTSP`)
VALUE('Laptop HP Omen 17 (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',88900000,'Máy tính lập trình',10,5,1,3,3);
-- Tặng phẩm
INSERT INTO `san_pham` (`maSP`, `tenSP`, `giaSP`, `moTa`, `soLuong`, `giamGia`, `maNSX`, `maTLC`, `maTTSP`) VALUES (NULL, 'Chuột không dây Logitech B175', '150000', 'Quà tặng không bán', '10', '0', '3', '21', '1'),
                                                                                                                    (NULL, 'Bàn phím cơ không dây Dareu EK807G TKL', '500000', 'Quà tặng không bán', '10', '0', '5', '21', '1'),
                                                                                                                    (NULL, 'Chuột chơi game có dây Logitech G203 Lightsync', '300000', 'Quà tặng không bán', '10', '0', '1', '21', '1'),
                                                                                                                    


-- Bảng sản phẩm nhà phân phối
INSERT INTO `san_pham_nha_phan_phoi` (`maSPNPP`, `maSP`, `maNPP`) VALUES (NULL, '1', '1'),
                                                                        (NULL, '2', '1'),
                                                                        (NULL, '3', '1'),
                                                                        (NULL, '4', '1'),
                                                                        (NULL, '5', '1'),
                                                                        (NULL, '6', '1'),
                                                                        (NULL, '7', '1'),
                                                                        (NULL, '8', '1'),
                                                                        (NULL, '9', '2'),
                                                                        (NULL, '10', '2'),
                                                                        (NULL, '11', '2'),
                                                                        (NULL, '12', '2'),
                                                                        (NULL, '13', '2'),
                                                                        (NULL, '14', '2'),
                                                                        (NULL, '15', '2'),
                                                                        (NULL, '16', '2'),
                                                                        (NULL, '17', '3'),
                                                                        (NULL, '18', '3'),
                                                                        (NULL, '19', '3'),
                                                                        (NULL, '20', '3'),
                                                                        (NULL, '21', '3'),
                                                                        (NULL, '22', '3'),
                                                                        (NULL, '23', '3'),
                                                                        (NULL, '24', '3'),
                                                                        (NULL, '25', '2'),
                                                                        (NULL, '26', '2'),
                                                                        (NULL, '27', '2'),
                                                                        (NULL, '28', '2'),
                                                                        (NULL, '29', '2'),
                                                                        (NULL, '30', '2'),
                                                                        (NULL, '31', '2'),
                                                                        (NULL, '32', '2'),
                                                                        (NULL, '33', '1'),
                                                                        (NULL, '34', '1'),
                                                                        (NULL, '35', '1'),
                                                                        (NULL, '36', '1'),
                                                                        (NULL, '37', '1'),
                                                                        (NULL, '38', '1'),
                                                                        (NULL, '39', '1'),
                                                                        (NULL, '40', '1'),
                                                                        (NULL, '41', '1'),
                                                                        (NULL, '42', '1'),
                                                                        (NULL, '43', '1'),
                                                                        (NULL, '44', '2'),
                                                                        (NULL, '45', '3'),
                                                                        (NULL, '46', '1');

-- Bang Anh san pham
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (1,'60634_laptop_acer_gaming_predator_triton_500se_10.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (1,'62709_laptop_acer_gaming_predator_helios_500_12.jpg');
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
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (41,'STOCK_GRAPHIC_CARD.jpg');
--
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (42,'zenbook.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (43,'omen17.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (44,'chuot-khong-day-logitech-b175.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (45,'ban-phim-co-khong-day-dareu-ek807g-2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (46,'34_1_41.jpg');

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

-- Bảng thể loại voucher
INSERT INTO `the_loai_voucher` (`maTLV`, `tenTLV`) VALUES (NULL, 'Giảm giá tiền mặt'), (NULL, 'Giảm giá phần trăm'), (NULL, 'Tặng phẩm');

-- Bảng voucher
INSERT INTO `voucher` (`maVoucher`, `tenVoucher`, `maTLV`, `giaTri`, `soLuong`, `maSP`) VALUES (NULL, 'Giảm 100.000 VNĐ', '1', '100000', '30', NULL),
                                                                                                (NULL, 'Giảm 200.000 VNĐ', '1', '200000', '30', NULL),
                                                                                                (NULL, 'Giảm 500.000 VNĐ', '1', '500000', '10', NULL),
                                                                                                (NULL, 'Giảm 5%', '2', '5', '20', NULL),
                                                                                                (NULL, 'Giảm 10%', '2', '10', '20', NULL),
                                                                                                (NULL, 'Giảm 15%', '2', '15', '20', NULL),
                                                                                                (NULL, 'Tặng Chuột không dây Logitech B175', '3', '150000', '10', '44'),
                                                                                                (NULL, 'Tặng Bàn phím cơ không dây Dareu EK807G TKL', '3', '500000', '10', '45'),
                                                                                                (NULL, 'Tặng Chuột chơi game có dây Logitech G203 Lightsync', '3', '300000', '10', '46');

-- Bảng nhập kho
INSERT INTO `nhap_kho` (`maNK`, `maNPP`, `ngayNhap`, `maNV`) VALUES (NULL, '1', '2022-08-03 09:59:39.000000', '1'),
                                                                    (NULL, '2', '2022-08-03 09:59:39.000000', '1'),
                                                                    (NULL, '3', '2022-08-03 09:59:39.000000', '1');

-- Bảng nhập kho chi tiết
INSERT INTO `nhap_kho_chi_tiet` (`maNKCT`, `maNK`, `maSP`, `soLuong`, `giaNhap`) VALUES (NULL, '1', '1', '10', '1000000'),
                                                                                        (NULL, '1', '2', '10', '1000000'),
                                                                                        (NULL, '1', '3', '10', '1000000'),
                                                                                        (NULL, '1', '4', '10', '1000000'),
                                                                                        (NULL, '1', '5', '10', '1000000'),
                                                                                        (NULL, '1', '6', '10', '1000000'),
                                                                                        (NULL, '1', '7', '10', '1000000'),
                                                                                        (NULL, '1', '8', '10', '1000000'),
                                                                                        (NULL, '1', '33', '10', '1000000'),
                                                                                        (NULL, '1', '34', '10', '1000000'),
                                                                                        (NULL, '1', '35', '10', '1000000'),
                                                                                        (NULL, '1', '36', '10', '1000000'),
                                                                                        (NULL, '1', '37', '10', '1000000'),
                                                                                        (NULL, '1', '38', '10', '1000000'),
                                                                                        (NULL, '1', '39', '10', '1000000'),
                                                                                        (NULL, '1', '40', '10', '1000000'),
                                                                                        (NULL, '1', '41', '10', '1000000'),
                                                                                        (NULL, '1', '42', '10', '1000000'),
                                                                                        (NULL, '1', '43', '10', '1000000'),
                                                                                        (NULL, '1', '46', '10', '1000000'),
                                                                                        (NULL, '2', '9', '10', '1500000'),
                                                                                        (NULL, '2', '10', '10', '1500000'),
                                                                                        (NULL, '2', '11', '10', '1500000'),
                                                                                        (NULL, '2', '12', '10', '1500000'),
                                                                                        (NULL, '2', '13', '10', '1500000'),
                                                                                        (NULL, '2', '14', '10', '1500000'),
                                                                                        (NULL, '2', '15', '10', '1500000'),
                                                                                        (NULL, '2', '16', '10', '1500000'),
                                                                                        (NULL, '2', '25', '10', '1500000'),
                                                                                        (NULL, '2', '26', '10', '1500000'),
                                                                                        (NULL, '2', '27', '10', '1500000'),
                                                                                        (NULL, '2', '28', '10', '1500000'),
                                                                                        (NULL, '2', '29', '10', '1500000'),
                                                                                        (NULL, '2', '30', '10', '1500000'),
                                                                                        (NULL, '2', '31', '10', '1500000'),
                                                                                        (NULL, '2', '32', '10', '1500000'),
                                                                                        (NULL, '2', '44', '10', '1500000'),
                                                                                        (NULL, '3', '17', '10', '2000000'),
                                                                                        (NULL, '3', '18', '10', '2000000'),
                                                                                        (NULL, '3', '19', '10', '2000000'),
                                                                                        (NULL, '3', '20', '10', '2000000'),
                                                                                        (NULL, '3', '21', '10', '2000000'),
                                                                                        (NULL, '3', '22', '10', '2000000'),
                                                                                        (NULL, '3', '23', '10', '2000000'),
                                                                                        (NULL, '3', '24', '10', '2000000'),
                                                                                        (NULL, '3', '45', '10', '2000000');


-- Bảng serial
INSERT INTO `serial` (`maSerial`, `maSP`, `serial`, `maNK`, `maHDCT`) VALUES (NULL, '1', '500SE1', '1', NULL),
                                                                            (NULL, '1', '500SE2', '1', NULL),
                                                                            (NULL, '1', '500SE3', '1', NULL),
                                                                            (NULL, '1', '500SE4', '1', NULL),
                                                                            (NULL, '1', '500SE5', '1', NULL),
                                                                            (NULL, '1', '500SE6', '1', NULL),
                                                                            (NULL, '1', '500SE7', '1', NULL),
                                                                            (NULL, '1', '500SE8', '1', NULL),
                                                                            (NULL, '1', '500SE9', '1', NULL),
                                                                            (NULL, '1', '500SE10', '1', NULL),
                                                                            (NULL, '2', 'Helios5001', '1', NULL),
                                                                            (NULL, '2', 'Helios5002', '1', NULL),
                                                                            (NULL, '2', 'Helios5003', '1', NULL),
                                                                            (NULL, '2', 'Helios5004', '1', NULL),
                                                                            (NULL, '2', 'Helios5005', '1', NULL),
                                                                            (NULL, '2', 'Helios5006', '1', NULL),
                                                                            (NULL, '2', 'Helios5007', '1', NULL),
                                                                            (NULL, '2', 'Helios5008', '1', NULL),
                                                                            (NULL, '2', 'Helios5009', '1', NULL),
                                                                            (NULL, '2', 'Helios50010', '1', NULL),
                                                                            (NULL, '3', 'Helios3001', '1', NULL),
                                                                            (NULL, '3', 'Helios3002', '1', NULL),
                                                                            (NULL, '3', 'Helios3003', '1', NULL),
                                                                            (NULL, '3', 'Helios3004', '1', NULL),
                                                                            (NULL, '3', 'Helios3005', '1', NULL),
                                                                            (NULL, '3', 'Helios3006', '1', NULL),
                                                                            (NULL, '3', 'Helios3007', '1', NULL),
                                                                            (NULL, '3', 'Helios3008', '1', NULL),
                                                                            (NULL, '3', 'Helios3009', '1', NULL),
                                                                            (NULL, '3', 'Helios30010', '1', NULL),
                                                                            (NULL, '4', 'Aspire1', '1', NULL),
                                                                            (NULL, '4', 'Aspire2', '1', NULL),
                                                                            (NULL, '4', 'Aspire3', '1', NULL),
                                                                            (NULL, '4', 'Aspire4', '1', NULL),
                                                                            (NULL, '4', 'Aspire5', '1', NULL),
                                                                            (NULL, '4', 'Aspire6', '1', NULL),
                                                                            (NULL, '4', 'Aspire7', '1', NULL),
                                                                            (NULL, '4', 'Aspire8', '1', NULL),
                                                                            (NULL, '4', 'Aspire9', '1', NULL),
                                                                            (NULL, '4', 'Aspire10', '1', NULL),
                                                                            (NULL, '5', 'Eagle1', '1', NULL),
                                                                            (NULL, '5', 'Eagle2', '1', NULL),
                                                                            (NULL, '5', 'Eagle3', '1', NULL),
                                                                            (NULL, '5', 'Eagle4', '1', NULL),
                                                                            (NULL, '5', 'Eagle5', '1', NULL),
                                                                            (NULL, '5', 'Eagle6', '1', NULL),
                                                                            (NULL, '5', 'Eagle7', '1', NULL),
                                                                            (NULL, '5', 'Eagle8', '1', NULL),
                                                                            (NULL, '5', 'Eagle9', '1', NULL),
                                                                            (NULL, '5', 'Eagle10', '1', NULL),
                                                                            (NULL, '6', 'Aorus1', '1', NULL),
                                                                            (NULL, '6', 'Aorus2', '1', NULL),
                                                                            (NULL, '6', 'Aorus3', '1', NULL),
                                                                            (NULL, '6', 'Aorus4', '1', NULL),
                                                                            (NULL, '6', 'Aorus5', '1', NULL),
                                                                            (NULL, '6', 'Aorus6', '1', NULL),
                                                                            (NULL, '6', 'Aorus7', '1', NULL),
                                                                            (NULL, '6', 'Aorus8', '1', NULL),
                                                                            (NULL, '6', 'Aorus9', '1', NULL),
                                                                            (NULL, '6', 'Aorus10', '1', NULL),
                                                                            (NULL, '7', 'TUFi51', '1', NULL),
                                                                            (NULL, '7', 'TUFi52', '1', NULL),
                                                                            (NULL, '7', 'TUFi53', '1', NULL),
                                                                            (NULL, '7', 'TUFi54', '1', NULL),
                                                                            (NULL, '7', 'TUFi55', '1', NULL),
                                                                            (NULL, '7', 'TUFi56', '1', NULL),
                                                                            (NULL, '7', 'TUFi57', '1', NULL),
                                                                            (NULL, '7', 'TUFi58', '1', NULL),
                                                                            (NULL, '7', 'TUFi59', '1', NULL),
                                                                            (NULL, '7', 'TUFi510', '1', NULL),
                                                                            (NULL, '8', 'TUFi91', '1', NULL),
                                                                            (NULL, '8', 'TUFi92', '1', NULL),
                                                                            (NULL, '8', 'TUFi93', '1', NULL),
                                                                            (NULL, '8', 'TUFi94', '1', NULL),
                                                                            (NULL, '8', 'TUFi95', '1', NULL),
                                                                            (NULL, '8', 'TUFi96', '1', NULL),
                                                                            (NULL, '8', 'TUFi97', '1', NULL),
                                                                            (NULL, '8', 'TUFi98', '1', NULL),
                                                                            (NULL, '8', 'TUFi99', '1', NULL),
                                                                            (NULL, '8', 'TUFi910', '1', NULL),
                                                                            (NULL, '9', 'LianLi1', '2', NULL),
                                                                            (NULL, '9', 'LianLi2', '2', NULL),
                                                                            (NULL, '9', 'LianLi3', '2', NULL),
                                                                            (NULL, '9', 'LianLi4', '2', NULL),
                                                                            (NULL, '9', 'LianLi5', '2', NULL),
                                                                            (NULL, '9', 'LianLi6', '2', NULL),
                                                                            (NULL, '9', 'LianLi7', '2', NULL),
                                                                            (NULL, '9', 'LianLi8', '2', NULL),
                                                                            (NULL, '9', 'LianLi9', '2', NULL),
                                                                            (NULL, '9', 'LianLi10', '2', NULL),
                                                                            (NULL, '10', 'Ha0201', '2', NULL),
                                                                            (NULL, '10', 'Ha0202', '2', NULL),
                                                                            (NULL, '10', 'Ha0203', '2', NULL),
                                                                            (NULL, '10', 'Ha0204', '2', NULL),
                                                                            (NULL, '10', 'Ha0205', '2', NULL),
                                                                            (NULL, '10', 'Ha0206', '2', NULL),
                                                                            (NULL, '10', 'Ha0207', '2', NULL),
                                                                            (NULL, '10', 'Ha0208', '2', NULL),
                                                                            (NULL, '10', 'Ha0209', '2', NULL),
                                                                            (NULL, '10', 'Ha02010', '2', NULL),
                                                                            (NULL, '11', 'Ha0311', '2', NULL),
                                                                            (NULL, '11', 'Ha0312', '2', NULL),
                                                                            (NULL, '11', 'Ha0313', '2', NULL),
                                                                            (NULL, '11', 'Ha0314', '2', NULL),
                                                                            (NULL, '11', 'Ha0315', '2', NULL),
                                                                            (NULL, '11', 'Ha0316', '2', NULL),
                                                                            (NULL, '11', 'Ha0317', '2', NULL),
                                                                            (NULL, '11', 'Ha0318', '2', NULL),
                                                                            (NULL, '11', 'Ha0319', '2', NULL),
                                                                            (NULL, '11', 'Ha03110', '2', NULL),
                                                                            (NULL, '12', 'Ha0211', '2', NULL),
                                                                            (NULL, '12', 'Ha0212', '2', NULL),
                                                                            (NULL, '12', 'Ha0213', '2', NULL),
                                                                            (NULL, '12', 'Ha0214', '2', NULL),
                                                                            (NULL, '12', 'Ha0215', '2', NULL),
                                                                            (NULL, '12', 'Ha0216', '2', NULL),
                                                                            (NULL, '12', 'Ha0217', '2', NULL),
                                                                            (NULL, '12', 'Ha0218', '2', NULL),
                                                                            (NULL, '12', 'Ha0219', '2', NULL),
                                                                            (NULL, '12', 'Ha02110', '2', NULL),
                                                                            (NULL, '13', 'Vanguard1', '2', NULL),
                                                                            (NULL, '13', 'Vanguard2', '2', NULL),
                                                                            (NULL, '13', 'Vanguard3', '2', NULL),
                                                                            (NULL, '13', 'Vanguard4', '2', NULL),
                                                                            (NULL, '13', 'Vanguard5', '2', NULL),
                                                                            (NULL, '13', 'Vanguard6', '2', NULL),
                                                                            (NULL, '13', 'Vanguard7', '2', NULL),
                                                                            (NULL, '13', 'Vanguard8', '2', NULL),
                                                                            (NULL, '13', 'Vanguard9', '2', NULL),
                                                                            (NULL, '13', 'Vanguard10', '2', NULL),
                                                                            (NULL, '14', 'SoulReaver1', '2', NULL),
                                                                            (NULL, '14', 'SoulReaver2', '2', NULL),
                                                                            (NULL, '14', 'SoulReaver3', '2', NULL),
                                                                            (NULL, '14', 'SoulReaver4', '2', NULL),
                                                                            (NULL, '14', 'SoulReaver5', '2', NULL),
                                                                            (NULL, '14', 'SoulReaver6', '2', NULL),
                                                                            (NULL, '14', 'SoulReaver7', '2', NULL),
                                                                            (NULL, '14', 'SoulReaver8', '2', NULL),
                                                                            (NULL, '14', 'SoulReaver9', '2', NULL),
                                                                            (NULL, '14', 'SoulReaver10', '2', NULL),
                                                                            (NULL, '15', 'Speedo1', '2', NULL),
                                                                            (NULL, '15', 'Speedo2', '2', NULL),
                                                                            (NULL, '15', 'Speedo3', '2', NULL),
                                                                            (NULL, '15', 'Speedo4', '2', NULL),
                                                                            (NULL, '15', 'Speedo5', '2', NULL),
                                                                            (NULL, '15', 'Speedo6', '2', NULL),
                                                                            (NULL, '15', 'Speedo7', '2', NULL),
                                                                            (NULL, '15', 'Speedo8', '2', NULL),
                                                                            (NULL, '15', 'Speedo9', '2', NULL),
                                                                            (NULL, '15', 'Speedo10', '2', NULL),
                                                                            (NULL, '16', 'LightBearer1', '2', NULL),
                                                                            (NULL, '16', 'LightBearer2', '2', NULL),
                                                                            (NULL, '16', 'LightBearer3', '2', NULL),
                                                                            (NULL, '16', 'LightBearer4', '2', NULL),
                                                                            (NULL, '16', 'LightBearer5', '2', NULL),
                                                                            (NULL, '16', 'LightBearer6', '2', NULL),
                                                                            (NULL, '16', 'LightBearer7', '2', NULL),
                                                                            (NULL, '16', 'LightBearer8', '2', NULL),
                                                                            (NULL, '16', 'LightBearer9', '2', NULL),
                                                                            (NULL, '16', 'LightBearer10', '2', NULL),
                                                                            (NULL, '17', 'Pre36501', '3', NULL),
                                                                            (NULL, '17', 'Pre36502', '3', NULL),
                                                                            (NULL, '17', 'Pre36503', '3', NULL),
                                                                            (NULL, '17', 'Pre36504', '3', NULL),
                                                                            (NULL, '17', 'Pre36505', '3', NULL),
                                                                            (NULL, '17', 'Pre36506', '3', NULL),
                                                                            (NULL, '17', 'Pre36507', '3', NULL),
                                                                            (NULL, '17', 'Pre36508', '3', NULL),
                                                                            (NULL, '17', 'Pre36509', '3', NULL),
                                                                            (NULL, '17', 'Pre365010', '3', NULL),
                                                                            (NULL, '18', 'Pre44431', '3', NULL),
                                                                            (NULL, '18', 'Pre44432', '3', NULL),
                                                                            (NULL, '18', 'Pre44433', '3', NULL),
                                                                            (NULL, '18', 'Pre44434', '3', NULL),
                                                                            (NULL, '18', 'Pre44435', '3', NULL),
                                                                            (NULL, '18', 'Pre44436', '3', NULL),
                                                                            (NULL, '18', 'Pre44437', '3', NULL),
                                                                            (NULL, '18', 'Pre44438', '3', NULL),
                                                                            (NULL, '18', 'Pre44439', '3', NULL),
                                                                            (NULL, '18', 'Pre444310', '3', NULL),
                                                                            (NULL, '19', 'Pre56041', '3', NULL),
                                                                            (NULL, '19', 'Pre56042', '3', NULL),
                                                                            (NULL, '19', 'Pre56043', '3', NULL),
                                                                            (NULL, '19', 'Pre56044', '3', NULL),
                                                                            (NULL, '19', 'Pre56045', '3', NULL),
                                                                            (NULL, '19', 'Pre56046', '3', NULL),
                                                                            (NULL, '19', 'Pre56047', '3', NULL),
                                                                            (NULL, '19', 'Pre56048', '3', NULL),
                                                                            (NULL, '19', 'Pre56049', '3', NULL),
                                                                            (NULL, '19', 'Pre560410', '3', NULL),
                                                                            (NULL, '20', 'Pre67991', '3', NULL),
                                                                            (NULL, '20', 'Pre67992', '3', NULL),
                                                                            (NULL, '20', 'Pre67993', '3', NULL),
                                                                            (NULL, '20', 'Pre67994', '3', NULL),
                                                                            (NULL, '20', 'Pre67995', '3', NULL),
                                                                            (NULL, '20', 'Pre67996', '3', NULL),
                                                                            (NULL, '20', 'Pre67997', '3', NULL),
                                                                            (NULL, '20', 'Pre67998', '3', NULL),
                                                                            (NULL, '20', 'Pre67999', '3', NULL),
                                                                            (NULL, '20', 'Pre679910', '3', NULL),
                                                                            (NULL, '21', 'Pre70221', '3', NULL),
                                                                            (NULL, '21', 'Pre70222', '3', NULL),
                                                                            (NULL, '21', 'Pre70223', '3', NULL),
                                                                            (NULL, '21', 'Pre70224', '3', NULL),
                                                                            (NULL, '21', 'Pre70225', '3', NULL),
                                                                            (NULL, '21', 'Pre70226', '3', NULL),
                                                                            (NULL, '21', 'Pre70227', '3', NULL),
                                                                            (NULL, '21', 'Pre70228', '3', NULL),
                                                                            (NULL, '21', 'Pre70229', '3', NULL),
                                                                            (NULL, '21', 'Pre702210', '3', NULL),
                                                                            (NULL, '22', 'Pre80551', '3', NULL),
                                                                            (NULL, '22', 'Pre80552', '3', NULL),
                                                                            (NULL, '22', 'Pre80553', '3', NULL),
                                                                            (NULL, '22', 'Pre80554', '3', NULL),
                                                                            (NULL, '22', 'Pre80555', '3', NULL),
                                                                            (NULL, '22', 'Pre80556', '3', NULL),
                                                                            (NULL, '22', 'Pre80557', '3', NULL),
                                                                            (NULL, '22', 'Pre80558', '3', NULL),
                                                                            (NULL, '22', 'Pre80559', '3', NULL),
                                                                            (NULL, '22', 'Pre805510', '3', NULL),
                                                                            (NULL, '23', 'Pre105651', '3', NULL),
                                                                            (NULL, '23', 'Pre105652', '3', NULL),
                                                                            (NULL, '23', 'Pre105653', '3', NULL),
                                                                            (NULL, '23', 'Pre105654', '3', NULL),
                                                                            (NULL, '23', 'Pre105655', '3', NULL),
                                                                            (NULL, '23', 'Pre105656', '3', NULL),
                                                                            (NULL, '23', 'Pre105657', '3', NULL),
                                                                            (NULL, '23', 'Pre105658', '3', NULL),
                                                                            (NULL, '23', 'Pre105659', '3', NULL),
                                                                            (NULL, '23', 'Pre1056510', '3', NULL),
                                                                            (NULL, '24', 'Pre140501', '3', NULL),
                                                                            (NULL, '24', 'Pre140502', '3', NULL),
                                                                            (NULL, '24', 'Pre140503', '3', NULL),
                                                                            (NULL, '24', 'Pre140504', '3', NULL),
                                                                            (NULL, '24', 'Pre140505', '3', NULL),
                                                                            (NULL, '24', 'Pre140506', '3', NULL),
                                                                            (NULL, '24', 'Pre140507', '3', NULL),
                                                                            (NULL, '24', 'Pre140508', '3', NULL),
                                                                            (NULL, '24', 'Pre140509', '3', NULL),
                                                                            (NULL, '24', 'Pre1405010', '3', NULL),
                                                                            (NULL, '25', 'Vivo1', '2', NULL),
                                                                            (NULL, '25', 'Vivo2', '2', NULL),
                                                                            (NULL, '25', 'Vivo3', '2', NULL),
                                                                            (NULL, '25', 'Vivo4', '2', NULL),
                                                                            (NULL, '25', 'Vivo5', '2', NULL),
                                                                            (NULL, '25', 'Vivo6', '2', NULL),
                                                                            (NULL, '25', 'Vivo7', '2', NULL),
                                                                            (NULL, '25', 'Vivo8', '2', NULL),
                                                                            (NULL, '25', 'Vivo9', '2', NULL),
                                                                            (NULL, '25', 'Vivo10', '2', NULL),
                                                                            (NULL, '26', 'Leaf1', '2', NULL),
                                                                            (NULL, '26', 'Leaf2', '2', NULL),
                                                                            (NULL, '26', 'Leaf3', '2', NULL),
                                                                            (NULL, '26', 'Leaf4', '2', NULL),
                                                                            (NULL, '26', 'Leaf5', '2', NULL),
                                                                            (NULL, '26', 'Leaf6', '2', NULL),
                                                                            (NULL, '26', 'Leaf7', '2', NULL),
                                                                            (NULL, '26', 'Leaf8', '2', NULL),
                                                                            (NULL, '26', 'Leaf9', '2', NULL),
                                                                            (NULL, '26', 'Leaf10', '2', NULL),
                                                                            (NULL, '27', 'Winnie1', '2', NULL),
                                                                            (NULL, '27', 'Winnie2', '2', NULL),
                                                                            (NULL, '27', 'Winnie3', '2', NULL),
                                                                            (NULL, '27', 'Winnie4', '2', NULL),
                                                                            (NULL, '27', 'Winnie5', '2', NULL),
                                                                            (NULL, '27', 'Winnie6', '2', NULL),
                                                                            (NULL, '27', 'Winnie7', '2', NULL),
                                                                            (NULL, '27', 'Winnie8', '2', NULL),
                                                                            (NULL, '27', 'Winnie9', '2', NULL),
                                                                            (NULL, '27', 'Winnie10', '2', NULL),
                                                                            (NULL, '28', 'Cool1', '2', NULL),
                                                                            (NULL, '28', 'Cool2', '2', NULL),
                                                                            (NULL, '28', 'Cool3', '2', NULL),
                                                                            (NULL, '28', 'Cool4', '2', NULL),
                                                                            (NULL, '28', 'Cool5', '2', NULL),
                                                                            (NULL, '28', 'Cool6', '2', NULL),
                                                                            (NULL, '28', 'Cool7', '2', NULL),
                                                                            (NULL, '28', 'Cool8', '2', NULL),
                                                                            (NULL, '28', 'Cool9', '2', NULL),
                                                                            (NULL, '28', 'Cool10', '2', NULL),
                                                                            (NULL, '29', 'Hot1', '2', NULL),
                                                                            (NULL, '29', 'Hot2', '2', NULL),
                                                                            (NULL, '29', 'Hot3', '2', NULL),
                                                                            (NULL, '29', 'Hot4', '2', NULL),
                                                                            (NULL, '29', 'Hot5', '2', NULL),
                                                                            (NULL, '29', 'Hot6', '2', NULL),
                                                                            (NULL, '29', 'Hot7', '2', NULL),
                                                                            (NULL, '29', 'Hot8', '2', NULL),
                                                                            (NULL, '29', 'Hot9', '2', NULL),
                                                                            (NULL, '29', 'Hot10', '2', NULL),
                                                                            (NULL, '30', 'Warm1', '2', NULL),
                                                                            (NULL, '30', 'Warm2', '2', NULL),
                                                                            (NULL, '30', 'Warm3', '2', NULL),
                                                                            (NULL, '30', 'Warm4', '2', NULL),
                                                                            (NULL, '30', 'Warm5', '2', NULL),
                                                                            (NULL, '30', 'Warm6', '2', NULL),
                                                                            (NULL, '30', 'Warm7', '2', NULL),
                                                                            (NULL, '30', 'Warm8', '2', NULL),
                                                                            (NULL, '30', 'Warm9', '2', NULL),
                                                                            (NULL, '30', 'Warm10', '2', NULL),
                                                                            (NULL, '31', 'Mark1', '2', NULL),
                                                                            (NULL, '31', 'Mark2', '2', NULL),
                                                                            (NULL, '31', 'Mark3', '2', NULL),
                                                                            (NULL, '31', 'Mark4', '2', NULL),
                                                                            (NULL, '31', 'Mark5', '2', NULL),
                                                                            (NULL, '31', 'Mark6', '2', NULL),
                                                                            (NULL, '31', 'Mark7', '2', NULL),
                                                                            (NULL, '31', 'Mark8', '2', NULL),
                                                                            (NULL, '31', 'Mark9', '2', NULL),
                                                                            (NULL, '31', 'Mark10', '2', NULL),
                                                                            (NULL, '32', 'Dak1', '2', NULL),
                                                                            (NULL, '32', 'Dak2', '2', NULL),
                                                                            (NULL, '32', 'Dak3', '2', NULL),
                                                                            (NULL, '32', 'Dak4', '2', NULL),
                                                                            (NULL, '32', 'Dak5', '2', NULL),
                                                                            (NULL, '32', 'Dak6', '2', NULL),
                                                                            (NULL, '32', 'Dak7', '2', NULL),
                                                                            (NULL, '32', 'Dak8', '2', NULL),
                                                                            (NULL, '32', 'Dak9', '2', NULL),
                                                                            (NULL, '32', 'Dak10', '2', NULL),
                                                                            (NULL, '33', 'T6001', '1', NULL),
                                                                            (NULL, '33', 'T6002', '1', NULL),
                                                                            (NULL, '33', 'T6003', '1', NULL),
                                                                            (NULL, '33', 'T6004', '1', NULL),
                                                                            (NULL, '33', 'T6005', '1', NULL),
                                                                            (NULL, '33', 'T6006', '1', NULL),
                                                                            (NULL, '33', 'T6007', '1', NULL),
                                                                            (NULL, '33', 'T6008', '1', NULL),
                                                                            (NULL, '33', 'T6009', '1', NULL),
                                                                            (NULL, '33', 'T60010', '1', NULL),
                                                                            (NULL, '34', 'T8001', '1', NULL),
                                                                            (NULL, '34', 'T8002', '1', NULL),
                                                                            (NULL, '34', 'T8003', '1', NULL),
                                                                            (NULL, '34', 'T8004', '1', NULL),
                                                                            (NULL, '34', 'T8005', '1', NULL),
                                                                            (NULL, '34', 'T8006', '1', NULL),
                                                                            (NULL, '34', 'T8007', '1', NULL),
                                                                            (NULL, '34', 'T8008', '1', NULL),
                                                                            (NULL, '34', 'T8009', '1', NULL),
                                                                            (NULL, '34', 'T80010', '1', NULL),
                                                                            (NULL, '35', 'T12001', '1', NULL),
                                                                            (NULL, '35', 'T12002', '1', NULL),
                                                                            (NULL, '35', 'T12003', '1', NULL),
                                                                            (NULL, '35', 'T12004', '1', NULL),
                                                                            (NULL, '35', 'T12005', '1', NULL),
                                                                            (NULL, '35', 'T12006', '1', NULL),
                                                                            (NULL, '35', 'T12007', '1', NULL),
                                                                            (NULL, '35', 'T12008', '1', NULL),
                                                                            (NULL, '35', 'T12009', '1', NULL),
                                                                            (NULL, '35', 'T120010', '1', NULL),
                                                                            (NULL, '36', 'T112001', '1', NULL),
                                                                            (NULL, '36', 'T112002', '1', NULL),
                                                                            (NULL, '36', 'T112003', '1', NULL),
                                                                            (NULL, '36', 'T112004', '1', NULL),
                                                                            (NULL, '36', 'T112005', '1', NULL),
                                                                            (NULL, '36', 'T112006', '1', NULL),
                                                                            (NULL, '36', 'T112007', '1', NULL),
                                                                            (NULL, '36', 'T112008', '1', NULL),
                                                                            (NULL, '36', 'T112009', '1', NULL),
                                                                            (NULL, '36', 'T1120010', '1', NULL),
                                                                            (NULL, '37', 'T3201', '1', NULL),
                                                                            (NULL, '37', 'T3202', '1', NULL),
                                                                            (NULL, '37', 'T3203', '1', NULL),
                                                                            (NULL, '37', 'T3204', '1', NULL),
                                                                            (NULL, '37', 'T3205', '1', NULL),
                                                                            (NULL, '37', 'T3206', '1', NULL),
                                                                            (NULL, '37', 'T3207', '1', NULL),
                                                                            (NULL, '37', 'T3208', '1', NULL),
                                                                            (NULL, '37', 'T3209', '1', NULL),
                                                                            (NULL, '37', 'T32010', '1', NULL),
                                                                            (NULL, '38', 'T66001', '1', NULL),
                                                                            (NULL, '38', 'T66002', '1', NULL),
                                                                            (NULL, '38', 'T66003', '1', NULL),
                                                                            (NULL, '38', 'T66004', '1', NULL),
                                                                            (NULL, '38', 'T66005', '1', NULL),
                                                                            (NULL, '38', 'T66006', '1', NULL),
                                                                            (NULL, '38', 'T66007', '1', NULL),
                                                                            (NULL, '38', 'T66008', '1', NULL),
                                                                            (NULL, '38', 'T66009', '1', NULL),
                                                                            (NULL, '38', 'T660010', '1', NULL),
                                                                            (NULL, '39', 'T116001', '1', NULL),
                                                                            (NULL, '39', 'T116002', '1', NULL),
                                                                            (NULL, '39', 'T116003', '1', NULL),
                                                                            (NULL, '39', 'T116004', '1', NULL),
                                                                            (NULL, '39', 'T116005', '1', NULL),
                                                                            (NULL, '39', 'T116006', '1', NULL),
                                                                            (NULL, '39', 'T116007', '1', NULL),
                                                                            (NULL, '39', 'T116008', '1', NULL),
                                                                            (NULL, '39', 'T116009', '1', NULL),
                                                                            (NULL, '39', 'T1160010', '1', NULL),
                                                                            (NULL, '40', 'T85001', '1', NULL),
                                                                            (NULL, '40', 'T85002', '1', NULL),
                                                                            (NULL, '40', 'T85003', '1', NULL),
                                                                            (NULL, '40', 'T85004', '1', NULL),
                                                                            (NULL, '40', 'T85005', '1', NULL),
                                                                            (NULL, '40', 'T85006', '1', NULL),
                                                                            (NULL, '40', 'T85007', '1', NULL),
                                                                            (NULL, '40', 'T85008', '1', NULL),
                                                                            (NULL, '40', 'T85009', '1', NULL),
                                                                            (NULL, '40', 'T850010', '1', NULL),
                                                                            (NULL, '41', 'T163601', '1', NULL),
                                                                            (NULL, '41', 'T163602', '1', NULL),
                                                                            (NULL, '41', 'T163603', '1', NULL),
                                                                            (NULL, '41', 'T163604', '1', NULL),
                                                                            (NULL, '41', 'T163605', '1', NULL),
                                                                            (NULL, '41', 'T163606', '1', NULL),
                                                                            (NULL, '41', 'T163607', '1', NULL),
                                                                            (NULL, '41', 'T163608', '1', NULL),
                                                                            (NULL, '41', 'T163609', '1', NULL),
                                                                            (NULL, '41', 'T1636010', '1', NULL),
                                                                            (NULL, '42', 'Zen1', '1', NULL),
                                                                            (NULL, '42', 'Zen2', '1', NULL),
                                                                            (NULL, '42', 'Zen3', '1', NULL),
                                                                            (NULL, '42', 'Zen4', '1', NULL),
                                                                            (NULL, '42', 'Zen5', '1', NULL),
                                                                            (NULL, '42', 'Zen6', '1', NULL),
                                                                            (NULL, '42', 'Zen7', '1', NULL),
                                                                            (NULL, '42', 'Zen8', '1', NULL),
                                                                            (NULL, '42', 'Zen9', '1', NULL),
                                                                            (NULL, '42', 'Zen10', '1', NULL),
                                                                            (NULL, '43', 'Omen1', '1', NULL),
                                                                            (NULL, '43', 'Omen2', '1', NULL),
                                                                            (NULL, '43', 'Omen3', '1', NULL),
                                                                            (NULL, '43', 'Omen4', '1', NULL),
                                                                            (NULL, '43', 'Omen5', '1', NULL),
                                                                            (NULL, '43', 'Omen6', '1', NULL),
                                                                            (NULL, '43', 'Omen7', '1', NULL),
                                                                            (NULL, '43', 'Omen8', '1', NULL),
                                                                            (NULL, '43', 'Omen9', '1', NULL),
                                                                            (NULL, '43', 'Omen10', '1', NULL),
                                                                            (NULL, '44', 'QT101', '2', NULL),
                                                                            (NULL, '44', 'QT102', '2', NULL),
                                                                            (NULL, '44', 'QT103', '2', NULL),
                                                                            (NULL, '44', 'QT104', '2', NULL),
                                                                            (NULL, '44', 'QT105', '2', NULL),
                                                                            (NULL, '44', 'QT106', '2', NULL),
                                                                            (NULL, '44', 'QT107', '2', NULL),
                                                                            (NULL, '44', 'QT108', '2', NULL),
                                                                            (NULL, '44', 'QT109', '2', NULL),
                                                                            (NULL, '44', 'QT1010', '2', NULL),
                                                                            (NULL, '45', 'QT201', '3', NULL),
                                                                            (NULL, '45', 'QT202', '3', NULL),
                                                                            (NULL, '45', 'QT203', '3', NULL),
                                                                            (NULL, '45', 'QT204', '3', NULL),
                                                                            (NULL, '45', 'QT205', '3', NULL),
                                                                            (NULL, '45', 'QT206', '3', NULL),
                                                                            (NULL, '45', 'QT207', '3', NULL),
                                                                            (NULL, '45', 'QT208', '3', NULL),
                                                                            (NULL, '45', 'QT209', '3', NULL),
                                                                            (NULL, '45', 'QT2010', '3', NULL),
                                                                            (NULL, '46', 'QT301', '1', NULL),
                                                                            (NULL, '46', 'QT302', '1', NULL),
                                                                            (NULL, '46', 'QT303', '1', NULL),
                                                                            (NULL, '46', 'QT304', '1', NULL),
                                                                            (NULL, '46', 'QT305', '1', NULL),
                                                                            (NULL, '46', 'QT306', '1', NULL),
                                                                            (NULL, '46', 'QT307', '1', NULL),
                                                                            (NULL, '46', 'QT308', '1', NULL),
                                                                            (NULL, '46', 'QT309', '1', NULL),
                                                                            (NULL, '46', 'QT3010', '1', NULL);