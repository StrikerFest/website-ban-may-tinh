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
INSERT INTO the_loai(`tenTL`) VALUE ('Ổ cứng');
INSERT INTO the_loai(`tenTL`) VALUE ('Bộ vi xử lý');
INSERT INTO the_loai(`tenTL`) VALUE ('Bo mạch chủ');
INSERT INTO the_loai(`tenTL`) VALUE ('RAM');
INSERT INTO the_loai(`tenTL`) VALUE ('Nguồn');
INSERT INTO the_loai(`tenTL`) VALUE ('Vỏ case');
INSERT INTO the_loai(`tenTL`) VALUE ('Quạt làm mát');
INSERT INTO the_loai(`tenTL`) VALUE ('Tản nhiệt khí');
INSERT INTO the_loai(`tenTL`) VALUE ('Tản nhiệt nước');
INSERT INTO the_loai(`tenTL`) VALUE ('VGA');
INSERT INTO the_loai(`tenTL`) VALUE ('Chuột');
INSERT INTO the_loai(`tenTL`) VALUE ('Bàn phím');

-- INSERT INTO the_loai(`tenTL`) VALUE ('Ổ cứng');
-- INSERT INTO the_loai(`tenTL`) VALUE ('Card đồ họa');

-- =============================== ===========================================================================
-- Bảng Thể loại con
INSERT INTO the_loai_con(`maTL`,`tenTLC`) VALUE (1,'Máy PC văn phòng'),(1,'Máy PC trạm'),(1,'Máy PC gaming'),
                                                (2,'Laptop văn phòng'),(2,'Laptop trạm'),(2,'Laptop gaming'),
                                                (3,'Màn hình LED'),(3,'Màn hình OLED'),(3,'Màn hình IPS'),
                                                (7,'Ổ cứng HDD'),(7,'Ổ cứng SSD'),(7,'Ổ cứng NVME'),
                                                (16,'Card game'),(16,'Card thiết kế đồ họa'),(16,'Card đào coin'),
                                                (8,'CPU i3'),(8,'CPU i5'),(8,'CPU i9'),
                                                (9,'Bo mạch budget'),(9,'Bo mạch highend'),
                                                (10,'RAM PC'),(10,'RAM Laptop'),
                                                (11,'Nguồn 80plus bronze'),(11,'Nguồn 80plus Titanium'),
                                                (12,'Vỏ case phổ thông'),(12,'Vỏ case custom'),
                                                (13,'Quạt làm mát phổ thông'),
                                                (14,'Tản nhiệt khí phổ thông'),
                                                (15,'Tản nhiệt nước factory'),(15,'Tản nhiệt nước custom'),
                                                (5,'Chuột có dây'),(5,'Chuột không dây'),
                                                (5,'Bàn phím mềm'),(5,'Bàn phím giả cơ'),(5,'Bàn phím cơ'),(6, 'Tặng phẩm');
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
-- Bảng Bảo hành
INSERT INTO `bao_hanh` (`maBH`, `tenBH`, `giaTri`) VALUES (NULL, 'Không bảo hành', '0'),
                                                            (NULL, '3 tháng', '3'),
                                                            (NULL, '6 tháng', '6'),
                                                            (NULL, '1 năm', '12'),
                                                            (NULL, '3 năm', '36');

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
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Acer Gaming Predator Triton 500SE (PT516-51s-71RW) (NH.QAKSV.001) (i7 11800H/64GB RAM/1TB SSD/RTX 3080 8G/16.0 inch WQXGA 165Hz 100%sRGB/Win10/Xám) (2021)',82990000,'Máy tính lập trình',10,5,7,6,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Acer Gaming Predator Helios 500 PH517-52-797L (NH.QD3SV.001) (i711800H/64GB Ram/2TB SSD/RTX3080 8G/17.3 inch FHD 360Hz/Win 10/Đen)',98000000,'Máy tính lập trình',10,5,7,6,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Acer Gaming Predator Helios 300 PH315-54-74RU (NH.QC1SV.002) (i7 11800H/16GB Ram/512GB SSD/RTX3070 8G/15.6 inch QHD 165Hz/Win 10/Đen) (2021)',45000000,'Máy tính lập trình',10,5,7,6,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Acer Gaming Aspire 7 A715-42G-R4XX (NH.QAYSV.008) (R5 5500U/8GB RAM/256GB SSD/15.6 inch FHD/GTX1650 4G/Win11/Đen) (2021)',18000000,'Máy tính lập trình',10,5,7,6,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Acer Gaming Nitro 5 Eagle AN515-57-54MV (NH.QENSV.003) (i5 11400H/8GB Ram/512GB SSD/RTX3050 4G/15.6 inch FHD 144Hz/Win 11 mới nhất/Đen) (2021)',23000000,'Máy tính lập trình',10,5,7,6,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Gigabyte Gaming AORUS 15P (XD-73S1224GH) (i7 11800H /16GB Ram/1TB SSD/RTX3070 8G/15.6 inch FHD 240Hz/Win 10/Đen/Balo Aorus) (2021)',50000000,'Máy tính lập trình',10,10,8,6,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus Gaming TUF FX706HCB-HX105W (i5 11400H/8GB RAM/512GB SSD/17.3 FHD 144hz/RTX 3050 4GB/Win11/Đen)',23000000,'Máy tính lập trình',10,10,4,6,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus Gaming TUF FX706HCB-HX105W (i9 11400H/8GB RAM/512GB SSD/17.3 FHD 144hz/RTX 3050 4GB/Win11/Đen)',73000000,'Máy tính lập trình',10,10,4,6,2,3);
-- PC Gaming
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('PC GAMING HACOM LIAN-LI O11DX LIMITED (I7 12700KF/Z690/32GB RAM/1TB SSD/RTX 3070TI/1050W)',70000000,'Máy tính lập trình',10,10,1,3,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('PC GAMING HACOM PRO 020 (I5 11400F/B560/16GB RAM/500GB SSD/RTX 2060/650W)',30000000,'Máy tính lập trình',10,10,1,3,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('PC GAMING HACOM 031 (I3 10105F/H510/8GB RAM/500GB SSD/GTX 1650/700W)',13000000,'Máy tính lập trình',10,10,1,3,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('PC GAMING HACOM PRO 021 (R5 5600G/B550/16GB RAM/250GB SSD/RADEON RX VEGA/650W)',16900000,'Máy tính lập trình',10,5,1,3,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('PC GAMING VANGUARD O11DX LIMITED (I7 12700KF/Z690/32GB RAM/1TB SSD/RTX 3070TI/1050W)',123000000,'Máy tính lập trình',10,5,1,3,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('PC GAMING SOULREAVER 020 (I5 11400F/B560/16GB RAM/500GB SSD/RTX 2060/650W)',49000000,'Máy tính lập trình',10,5,1,3,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('PC GAMING SPEEDO (I3 10105F/H510/8GB RAM/500GB SSD/GTX 1650/700W)',21000000,'Máy tính lập trình',10,5,1,3,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('PC GAMING LIGHTBEARER 21 (R5 5600G/B550/16GB RAM/250GB SSD/RADEON RX VEGA/650W)',22900000,'Máy tính lập trình',10,5,1,3,3,3);
-- PC trạm
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Workstation Dell Precision 3650 (i7-11700/8GB RAM/1TB HDD/T600/DVDRW/K+M)',28900000,'Máy tính lập trình',10,5,1,2,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Workstation Dell Precision 4443 (i7-11700/12GB RAM/2TB HDD/T800/DVDRW/K+M)',38900000,'Máy tính lập trình',10,5,1,2,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Workstation Dell Precision 5604 (i7-11700/16GB RAM/2TB HDD/T900/DVDRW/K+M)',48900000,'Máy tính lập trình',10,5,1,2,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Workstation Dell Precision 6799 (i9-11700/8GB RAM/2TB HDD/T900/DVDRW/K+M)',58900000,'Máy tính lập trình',10,15,1,2,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Workstation Dell Precision 7022 (i9-11700/16GB RAM/5TB HDD/T1100/DVDRW/K+M)',78900000,'Máy tính lập trình',10,15,1,2,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Workstation Dell Precision 8055 (i9-11700/32GB RAM/10TB HDD/T1100/DVDRW/K+M)',99000000,'Máy tính lập trình',10,15,1,2,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Workstation Dell Precision 10565 (i9-11700/64GB RAM/10TB HDD/T1200/DVDRW/K+M)',110000000,'Máy tính lập trình',10,15,1,2,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Workstation Dell Precision 14050 (i9-11700/128GB RAM/20TB HDD/T1600/DVDRW/K+M)',228900000,'Máy tính lập trình',10,15,1,2,3,3);

-- Laptop Văn phòng
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus VivoBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',18900000,'Máy tính lập trình',10,15,1,4,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus Leafbook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',28900000,'Máy tính lập trình',10,15,1,4,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus WinnieBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',38900000,'Máy tính lập trình',10,5,1,4,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus CoolBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',48900000,'Máy tính lập trình',10,5,1,4,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus HotBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',58900000,'Máy tính lập trình',10,5,1,4,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus WarmBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',68900000,'Máy tính lập trình',10,5,1,4,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus MarkBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',78900000,'Máy tính lập trình',10,5,1,4,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus DakBook M3401QA (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',88900000,'Máy tính lập trình',10,5,1,4,4,3);

-- Card đồ họa
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA T600 (4GB GDDR6, 128-bit, 4x mini DisplayPort)',4900000,'Card đồ họa',28,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA T800 (8GB GDDR6, 128-bit, 4x mini DisplayPort)',5900000,'Card đồ họa',28,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA T1200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',6900000,'Card đồ họa',28,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA T11200 (16GB GDDR6, 128-bit, 4x mini DisplayPort)',7900000,'Card đồ họa',28,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA T320 (32GB GDDR6, 128-bit, 4x mini DisplayPort)',14900000,'Card đồ họa',28,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA T6600 (64GB GDDR6, 128-bit, 4x mini DisplayPort)',24900000,'Card đồ họa',28,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA T11600 (128GB GDDR6, 128-bit, 4x mini DisplayPort)',22900000,'Card đồ họa',28,15,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA T8500 (64GB GDDR6, 256-bit, 4x mini DisplayPort)',17900000,'Card đồ họa',28,15,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA T163600 (128GB GDDR6, 256-bit, 8x mini DisplayPort)',114900000,'Card đồ họa',28,15,1,15,4,3);

-- Dac biet
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus Zenbook S (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',88900000,'Máy tính lập trình',28,5,1,4,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop HP Omen 17 (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',88900000,'Máy tính lập trình',28,5,1,3,4,3);

-- Bộ vi xử lý
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i3-11500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1200',5500000,'Vi xử lý',28,10,1,16,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i3-12500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1200',6500000,'Vi xử lý',28,10,1,16,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i5-9500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1700',7500000,'Vi xử lý',28,10,1,17,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i5-12500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1700',8500000,'Vi xử lý',28,10,1,17,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i9-9500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1700',9500000,'Vi xử lý',28,10,1,18,4,3);

-- Bo mạch chủ
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B660-I GAMING mini-iTX LG 1200',5500000,'Bo mạch chủ xử lý',28,10,1,19,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B760-I GAMING mini-iTX LG 1300',6500000,'Bo mạch chủ xử lý',28,10,1,19,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B860-I GAMING iTX LG 1700',7500000,'Bo mạch chủ xử lý',28,10,1,19,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B960-I GAMING ATX LG 1700',8500000,'Bo mạch chủ xử lý',28,10,1,20,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B1660-I GAMING ATX LG 1700',15500000,'Bo mạch chủ xử lý',28,10,1,20,4,3);

-- RAM
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Desktop CORSAIR Vengeance LPX (CMK8GX4M1A2666C16 ) 8GB (1x8GB) DDR4 2666MHz',799000,'Bộ nhớ trong',28,10,1,21,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Desktop CORSAIR Vengeance LPX (CMK8GX4M1A2666C16 ) 8GB (1x8GB) DDR5 2666MHz',899000,'Bộ nhớ trong',28,10,1,21,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Desktop CORSAIR Vengeance LPX (CMK8GX4M1A2666C16 ) 16GB (1x8GB) DDR5 2666MHz',999000,'Bộ nhớ trong',28,10,1,21,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Laptop CORSAIR Vengeance LPX (CMK8GX4M1A2666C16 ) 8GB (1x8GB) DDR4 2666MHz',899000,'Bộ nhớ trong',28,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Laptop CORSAIR Vengeance LPX (CMK8GX4M1A2666C16 ) 16GB (1x8GB) DDR4 2666MHz',990000,'Bộ nhớ trong',28,10,1,22,4,3);

-- Nguồn
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 550W Bronze ( Màu Đen/80 Plus Bronze )',9990000,'Nguồn máy tính',28,10,1,23,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 650W Bronze ( Màu Đen/80 Plus Bronze )',10990000,'Nguồn máy tính',28,10,1,23,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 750W Bronze ( Màu Đen/80 Plus Bronze )',11990000,'Nguồn máy tính',28,10,1,23,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 850W Titanium ( Màu Đen/80 Plus Titanium )',12990000,'Nguồn máy tính',28,10,1,24,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 950W Titanium  ( Màu Đen/80 Plus Titanium )',13990000,'Nguồn máy tính',28,10,1,24,4,3);

-- Vỏ case
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R12 BLACK (Mini Tower/Màu Đen)',709000,'Vỏ case',28,10,1,25,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R22 BLACK (Mini Tower/Màu Đen)',809000,'Vỏ case',28,10,1,25,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R32 BLACK (Mid Tower/Màu Đen)',889000,'Vỏ case',28,10,1,25,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R42 BLACK (Full Tower/Màu Đen)',909000,'Vỏ case',28,10,1,26,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R82 BLACK (Full Tower/Màu Đen)',1009000,'Vỏ case',28,10,1,26,4,3);

-- Quạt làm mát
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Fan Case LIAN-LI  ST120 Triple White ARGB 3 in1',990000,'Quạt làm mát',28,10,1,27,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Fan Case LIAN-LI  ST220 Triple White ARGB 3 in1',1090000,'Quạt làm mát',28,10,1,27,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Fan Case LIAN-LI  ST320 Triple White ARGB 3 in1',1100000,'Quạt làm mát',28,10,1,27,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Fan Case LIAN-LI  ST420 Triple White ARGB 3 in1',1200000,'Quạt làm mát',28,10,1,27,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Fan Case LIAN-LI  ST520 Triple White ARGB 3 in1',1300000,'Quạt làm mát',28,10,1,27,4,3);
-- Tản nhiệt khí
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Tản nhiệt khí Thermalright Frost Commander 140 Black',1800000,'Tản nhiệt khí làm mát',28,10,1,28,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Tản nhiệt khí Thermalright Frost Commander 200 Black',1900000,'Tản nhiệt khí làm mát',28,10,1,28,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Tản nhiệt khí Thermalright Frost Commander 240 Black',2100000,'Tản nhiệt khí làm mát',28,10,1,28,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Tản nhiệt khí Thermalright Frost Commander 300 Black',2200000,'Tản nhiệt khí làm mát',28,10,1,28,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Tản nhiệt khí Thermalright Frost Commander 340 Black',2690000,'Tản nhiệt khí làm mát',28,10,1,28,4,3);

-- Tản nhiệt nước
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Tản nhiệt nước AIO Jonsbo TW6 360 ARGB ( Kèm sẵn Backplate 1700 Jonsbo )',2000000,'Tản nhiệt nước làm mát',28,10,1,29,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Tản nhiệt nước AIO Jonsbo TW7 360 ARGB ( Kèm sẵn Backplate 1700 Jonsbo )',2400000,'Tản nhiệt nước làm mát',28,10,1,29,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Tản nhiệt nước AIO Jonsbo TW8 360 ARGB ( Kèm sẵn Backplate 1700 Jonsbo )',3100000,'Tản nhiệt nước làm mát',28,10,1,29,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Tản nhiệt nước AIO Jonsbo TW9 360 ARGB ( Kèm sẵn Backplate 1700 Jonsbo )',3300000,'Tản nhiệt nước làm mát',28,10,1,30,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Tản nhiệt nước AIO Jonsbo TW12 360 ARGB ( Kèm sẵn Backplate 1700 Jonsbo )',4000000,'Tản nhiệt nước làm mát',28,10,1,30,4,3);

-- Chuột
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Chuột game dây Asus TUF M4 (USB)',1100000,'Chuột gaming',28,10,1,31,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Chuột game dây Asus TUF M5 (USB)',2100000,'Chuột gaming',28,10,1,31,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Chuột game dây Asus TUF M6 (USB)',3100000,'Chuột gaming',28,10,1,31,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Chuột game không dây Asus TUF M6 Wireless (USB)',4100000,'Chuột gaming',28,10,1,32,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Chuột game không dây Asus TUF M8 Wireless (USB)',5100000,'Chuột gaming',28,10,1,32,4,3);
-- Bàn phím
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Bàn phím Logitech G813 Lightsync RGB (USB)',1990000,'Bàn phím gaming',28,10,1,33,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Bàn phím giả cơ Logitech G813 Lightsync RGB (USB)',2100000,'Bàn phím gaming',28,10,1,34,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Bàn phím giả cơ Logitech G913 Lightsync RGB GL Clicky (USB)',2200000,'Bàn phím gaming',28,10,1,34,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Bàn phím cơ Logitech G813 Lightsync RGB GL Clicky (USB)',2900000,'Bàn phím gaming',28,10,1,35,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Bàn phím cơ Logitech G913 Lightsync RGB GL Clicky (USB)',3100000,'Bàn phím gaming',28,10,1,35,4,3);
-- Màn hình
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Màn hình Viewsonic VA903-H',1200000,'Màn hình',28,10,1,7,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Màn hình Viewsonic VA1203-H',2200000,'Màn hình',28,10,1,8,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Màn hình Viewsonic VA1703-H',3200000,'Màn hình',28,10,1,9,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Màn hình Viewsonic VA1903-H',4200000,'Màn hình',28,10,1,9,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Màn hình Viewsonic VA2903-H',8200000,'Màn hình',28,10,1,9,4,3);
-- HDD
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 500GB WD 2.5 inch',870000,'Màn hình',28,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 1TB WD 3.5 inch',900000,'Màn hình',28,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 2TB WD 3.5 inch',1020000,'Màn hình',28,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 3TB WD 3.5 inch',1400000,'Màn hình',28,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 6TB WD 3.5 inch',1600000,'Màn hình',28,10,1,10,4,3);
-- SSD
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng SSD 500GB WD',1200000,'Màn hình',28,10,1,11,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng SSD 1TB WD',2200000,'Màn hình',28,10,1,11,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng SSD 2TB WD',3200000,'Màn hình',28,10,1,11,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng SSD 3TB WD',4200000,'Màn hình',28,10,1,11,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`moTa`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng SSD 6TB WD',8200000,'Màn hình',28,10,1,11,4,3);
-- Tặng phẩm
INSERT INTO `san_pham` (`maSP`, `tenSP`, `giaSP`, `moTa`, `soLuong`, `giamGia`, `maNSX`, `maTLC`, `maBH`, `maTTSP`) VALUES (NULL, 'Chuột không dây Logitech B175', '150000', 'Quà tặng không bán', '10', '0', '3', '21', '1', '1'),
                                                                                                                    (NULL, 'Bàn phím cơ không dây Dareu EK807G TKL', '500000', 'Quà tặng không bán', '10', '0', '5', '21', '1', '1'),
                                                                                                                    (NULL, 'Chuột chơi game có dây Logitech G203 Lightsync', '300000', 'Quà tặng không bán', '10', '0', '1', '21', '1', '1');



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
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (19,'PC_STATION_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (20,'STOCK_PC_STATION.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (21,'PC_STATION_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (22,'PC_STATION_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (23,'STOCK_PC_STATION.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (24,'STOCK_PC_STATION.png');
-- Laptop Văn phòng
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (25,'LAP_OFFICE_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (26,'LAP_OFFICE_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (27,'LAP_OFFICE_3.jpeg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (28,'LAP_OFFICE_4.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (29,'LAP_OFFICE_5.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (30,'LAP_OFFICE_6.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (31,'LAP_OFFICE_7.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (32,'LAP_OFFICE_1.jpg');
-- Card đồ họa
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (33,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (34,'VGA_ASUS_2.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (35,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (36,'VGA_ASUS_4.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (37,'VGA_MSI_5.png');
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
-- INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (42,'zenbook.png');
-- INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (43,'omen17.png');
-- INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (44,'chuot-khong-day-logitech-b175.jpg');
-- INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (45,'ban-phim-co-khong-day-dareu-ek807g-2.jpg');
-- INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (46,'34_1_41.jpg');

-- Bộ vi xử lý
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (44,'CPU_i3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (45,'CPU_i3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (46,'CPU_i5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (47,'CPU_i5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (48,'CPU_i9.png');

-- Bo mạch chủ
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (49,'BOARD_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (50,'BOARD_ASUS_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (51,'BOARD_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (52,'BOARD_ASUS_4.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (53,'BOARD_ASUS_5.jpg');

-- RAM
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (54,'RAM_CORSAIR_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (55,'RAM_KINGSTON_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (56,'RAM_KINGSTON_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (57,'RAM_KINGSTON_4.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (58,'RAM_KINGSTON_5.jpg');


-- Nguồn
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (59,'PS_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (60,'PS_ASUS_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (61,'PS_ASUS_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (62,'PS_ASUS_4.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (63,'PS_ASUS_5.jpg');
-- Vỏ case
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (64,'CASE_CUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (65,'CASE_CUS_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (66,'CASE_CUS_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (67,'CASE_CUS_4.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (68,'CASE_CUS_5.jpg');
-- Quạt tản nhiệt
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (69,'FAN_COM_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (70,'FAN_COM_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (71,'FAN_COM_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (72,'FAN_COM_4.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (73,'FAN_COM_5.jpg');
-- Tản nhiệt khí
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (74,'COOLAIR_COM_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (75,'COOLAIR_COM_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (76,'COOLAIR_COM_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (77,'COOLAIR_COM_4.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (78,'COOLAIR_COM_5.jpg');
-- Tản nhiệt nước
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (79,'COOLWATER_COM_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (80,'COOLWATER_COM_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (81,'COOLWATER_COM_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (82,'COOLWATER_COM_4.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (83,'COOLWATER_COM_5.jpg');
-- Chuột
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (84,'MOUSE_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (85,'MOUSE_LOGI_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (86,'MOUSE_RAZER_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (87,'MOUSE_LOGI_4.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (88,'MOUSE_LOGI_5.jpg');
-- Bàn phím
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (89,'KEYBOARD_LOGI_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (90,'KEYBOARD_LOGI_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (91,'KEYBOARD_LOGI_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (92,'KEYBOARD_LOGI_4.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (93,'KEYBOARD_LOGI_5.jpg');
-- Màn hình
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (94,'MONITOR_VIEWSONIC_1.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (95,'MONITOR_ACER_2.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (96,'MONITOR_ACER_3.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (97,'MONITOR_ACER_4.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (98,'MONITOR_ACER_5.png');

-- HDD
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (99,'HDD_BARA_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (100,'HDD_WD_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (101,'HDD_SEAGATE_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (102,'HDD_SEAGATE_4.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (103,'HDD_SEAGATE_5.jpg');
-- SSD
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (104,'SSD_WD_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (105,'SSD_WD_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (106,'SSD_MSI_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (107,'SSD_WD_4.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (108,'SSD_WD_5.jpg');
-- Tặng phẩm

-- Bảng tình trạng bài viết
INSERT INTO `tinh_trang_bai_viet` (`maTTBV`, `tenTTBV`) VALUES (NULL, 'Chưa công khai'), (NULL, 'Công khai');

-- Bảng tình trạng hoá đơn
INSERT INTO `tinh_trang_hoa_don` (`maTTHD`, `tenTTHD`) VALUES (NULL, 'Đã duyệt'), (NULL, 'Chưa duyệt'), (NULL, 'Đã huỷ');

-- Bảng phương thức thanh toán
INSERT INTO `phuong_thuc_thanh_toan` (`maPTTT`, `tenPTTT`) VALUES (NULL, 'COD'), (NULL, 'Chuyển khoản');

-- Bảng thông số
INSERT INTO `thong_so` (`maTS`, `tenTS`) VALUES (NULL, 'Loại chip'),
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

                                                (NULL, 'Socket'),
                                                (NULL, 'Xung nhịp tối đa'),
                                                (NULL, 'Số nhân'),
                                                (NULL, 'Số luồng'),

                                                (NULL, 'Chipset'),
                                                -- (NULL, 'Socket'),
                                                (NULL, 'Khe RAM'),
                                                (NULL, 'Kích thước bộ'),
                                                (NULL, 'Bluetooth'),

                                                (NULL, 'Loại'),
                                                (NULL, 'Máy tính'),
                                                (NULL, 'Dung lượng'),
                                                (NULL, 'Bus'),
                                                (NULL, 'Package'),

                                                -- (NULL, 'Kích thước'),
                                                -- (NULL, 'Dung lượng'),
                                                (NULL, 'Tốc độ'),
                                                (NULL, 'Cache'),

                                                -- (NULL, 'Dung lượng'),
                                                (NULL, 'Chuẩn kết nối'),
                                                (NULL, 'Tốc độ đọc ghi'),

                                                (NULL, 'Dung lượng bộ nhớ'),
                                                (NULL, 'Nhân đồ họa'),
                                                (NULL, 'Xung'),

                                                (NULL, 'Công suất'),
                                                (NULL, 'Chứng nhận'),

                                                (NULL, 'Thiết kế'),
                                                (NULL, 'Quạt kèm'),
                                                (NULL, 'Hỗ trợ tản nhiệt'),

                                                (NULL, 'Tỉ lệ'),
                                                -- (NULL, 'Kích thước'),
                                                (NULL, 'Độ phân giải'),
                                                (NULL, 'Tấm nền'),
                                                (NULL, 'Tốc độ làm mới'),
                                                (NULL, 'Thời gian đáp ứng'),
                                                (NULL, 'Cổng kết nối'),

                                                (NULL, 'Chuẩn kết nối'),
                                                (NULL, 'Mắt cảm biến'),
                                                (NULL, 'Số nút'),
                                                -- (NULL, 'Trọng lượng'),

                                                (NULL, 'Switch'),
                                                (NULL, 'RGB'),
                                                -- (NULL, 'Thiết kế'),

                                                -- (NULL, 'Kích thước'),
                                                (NULL, 'Áp xuất'),
                                                (NULL, 'Hiệu ứng'),

                                                -- (NULL, 'Thiết kế'),
                                                -- (NULL, 'Kích thước'),
                                                (NULL, 'Số quạt')




                                                -- (NULL, 'Socket'),
                                                -- (NULL, 'Kích thước'),
                                                -- (NULL, 'Thiết kế')
                                                ;


-- Bảng sản phẩm thông số
-- Máy tính 1 2 3 4 5 6 7 8 11 12 13 15 16 17 19 20
INSERT INTO `the_loai_thong_so` (`maTLTS`, `maTL`,`maTS`) VALUES    (NULL, 1,1),(NULL, 1,2),(NULL, 1,3),(NULL, 1,4),(NULL, 1,5),
                                                                    (NULL, 1,6),(NULL, 1,7),(NULL, 1,8),
                                                                    (NULL, 1,11),(NULL, 1,12),(NULL, 1,13),(NULL, 1,15),
                                                                    (NULL, 1,16),(NULL, 1,17),(NULL, 1,19),(NULL, 1,20);
-- Laptop
INSERT INTO `the_loai_thong_so` (`maTLTS`, `maTL`,`maTS`) VALUES    (NULL, 2,1),(NULL, 2,2),(NULL, 2,3),(NULL, 2,4),(NULL, 2,5),
                                                                    (NULL, 2,6),(NULL, 2,7),(NULL, 2,8),
                                                                    (NULL, 2,11),(NULL, 2,12),(NULL, 2,13),(NULL, 2,15),
                                                                    (NULL, 2,16),(NULL, 2,17),(NULL, 2,18),(NULL, 2,20),(NULL,2,21);

-- Bộ vi xử lý
INSERT INTO `the_loai_thong_so` (`maTLTS`, `maTL`,`maTS`) VALUES    (NULL, 8,28),(NULL, 8,29),(NULL, 8,30),(NULL, 8,31);

-- Bo mạch chủ
INSERT INTO `the_loai_thong_so` (`maTLTS`, `maTL`,`maTS`) VALUES    (NULL, 9,32),(NULL, 9,28),(NULL, 9,33),(NULL, 9,34),(NULL, 9,35),(NULL, 9,39);

-- RAM
INSERT INTO `the_loai_thong_so` (`maTLTS`, `maTL`,`maTS`) VALUES    (NULL, 10,36),(NULL, 10,37),(NULL, 10, 38),(NULL, 10,39),(NULL,10,40);

-- HDD
INSERT INTO `the_loai_thong_so` (`maTLTS`, `maTL`,`maTS`) VALUES    (NULL, 7,15),(NULL, 7,38),(NULL, 7,41),(NULL, 7,42);

-- SSD
-- INSERT INTO `the_loai_thong_so` (`maTLTS`, `maTL`,`maTS`) VALUES    (NULL, 7,38),(NULL, 7,43),(NULL, 7,44);

-- VGA
INSERT INTO `the_loai_thong_so` (`maTLTS`, `maTL`,`maTS`) VALUES    (NULL, 16,45),(NULL, 16,46),(NULL, 16,47);

-- Nguồn
INSERT INTO `the_loai_thong_so` (`maTLTS`, `maTL`,`maTS`) VALUES    (NULL, 11,48),(NULL, 11,49);

-- Vỏ case
INSERT INTO `the_loai_thong_so` (`maTLTS`, `maTL`,`maTS`) VALUES    (NULL, 12,50),(NULL, 12,51),(NULL, 12,52),(NULL,12,15);

-- Quạt tản nhiệt
INSERT INTO `the_loai_thong_so` (`maTLTS`, `maTL`,`maTS`) VALUES    (NULL, 13,15),(NULL, 13,64),(NULL, 13,65);

-- Tản nhiệt khí
INSERT INTO `the_loai_thong_so` (`maTLTS`, `maTL`,`maTS`) VALUES    (NULL, 14,50),(NULL, 14,15),(NULL, 14,66);

-- Tản nhiệt nước
INSERT INTO `the_loai_thong_so` (`maTLTS`, `maTL`,`maTS`) VALUES    (NULL, 15,28),(NULL, 15,15),(NULL, 15,50);

-- Chuột
INSERT INTO `the_loai_thong_so` (`maTLTS`, `maTL`,`maTS`) VALUES    (NULL, 17,59),(NULL, 17,60),(NULL, 17,61),(NULL,17,27);

-- Bàn phím
INSERT INTO `the_loai_thong_so` (`maTLTS`, `maTL`,`maTS`) VALUES    (NULL, 18,62),(NULL, 18,63),(NULL, 18,50);

-- Màn hình
INSERT INTO `the_loai_thong_so` (`maTLTS`, `maTL`,`maTS`) VALUES    (NULL, 3,53),(NULL, 3,15),(NULL, 17,54),(NULL, 3,55),(NULL, 3,56),(NULL,3,57),(NULL, 3,58);

-- Bảng sản phẩm thông số

-- Laptop
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 1,1,"Intel core i3"),
                                                                            (NULL, 1,2,"PT516-51s-71RW"),
                                                                            (NULL, 1,3,"i3 11800H"),
                                                                            (NULL, 1,4,"64GB RAM"),
                                                                            (NULL, 1,5,"4 khe"),
                                                                            (NULL, 1,6,"256GB"),
                                                                            (NULL, 1,7,"RTX 3080 8G"),
                                                                            (NULL, 1,8,"1TB SSD"),
                                                                            (NULL, 1,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 1,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 1,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 1,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 1,16,"2.2 kg"),
                                                                            (NULL, 1,17,"Win 11 Home"),
                                                                            (NULL, 1,19,"Gigabit"),
                                                                            (NULL, 1,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 1,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 2,1,"Intel core i3"),
                                                                            (NULL, 2,2,"PT516-51s-71RW"),
                                                                            (NULL, 2,3,"i3 11800H"),
                                                                            (NULL, 2,4,"64GB RAM"),
                                                                            (NULL, 2,5,"4 khe"),
                                                                            (NULL, 2,6,"256GB"),
                                                                            (NULL, 2,7,"RTX 3080 8G"),
                                                                            (NULL, 2,8,"1TB SSD"),
                                                                            (NULL, 2,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 2,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 2,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 2,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 2,16,"2.2 kg"),
                                                                            (NULL, 2,17,"Win 11 Home"),
                                                                            (NULL, 2,19,"Gigabit"),
                                                                            (NULL, 2,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 2,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 3,1,"Intel core i3"),
                                                                            (NULL, 3,2,"PT516-51s-71RW"),
                                                                            (NULL, 3,3,"i3 11800H"),
                                                                            (NULL, 3,4,"64GB RAM"),
                                                                            (NULL, 3,5,"4 khe"),
                                                                            (NULL, 3,6,"256GB"),
                                                                            (NULL, 3,7,"RTX 3080 8G"),
                                                                            (NULL, 3,8,"1TB SSD"),
                                                                            (NULL, 3,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 3,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 3,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 3,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 3,16,"2.2 kg"),
                                                                            (NULL, 3,17,"Win 11 Home"),
                                                                            (NULL, 3,19,"Gigabit"),
                                                                            (NULL, 3,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 3,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 4,1,"Intel core i3"),
                                                                            (NULL, 4,2,"PT516-51s-71RW"),
                                                                            (NULL, 4,3,"i3 11800H"),
                                                                            (NULL, 4,4,"64GB RAM"),
                                                                            (NULL, 4,5,"4 khe"),
                                                                            (NULL, 4,6,"256GB"),
                                                                            (NULL, 4,7,"RTX 3080 8G"),
                                                                            (NULL, 4,8,"1TB SSD"),
                                                                            (NULL, 4,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 4,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 4,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 4,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 4,16,"2.2 kg"),
                                                                            (NULL, 4,17,"Win 11 Home"),
                                                                            (NULL, 4,19,"Gigabit"),
                                                                            (NULL, 4,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 4,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 5,1,"Intel core i5"),
                                                                            (NULL, 5,2,"PT516-51s-71RW"),
                                                                            (NULL, 5,3,"i5 11800H"),
                                                                            (NULL, 5,4,"64GB RAM"),
                                                                            (NULL, 5,5,"4 khe"),
                                                                            (NULL, 5,6,"256GB"),
                                                                            (NULL, 5,7,"RTX 3080 8G"),
                                                                            (NULL, 5,8,"1TB SSD"),
                                                                            (NULL, 5,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 5,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 5,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 5,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 5,16,"2.2 kg"),
                                                                            (NULL, 5,17,"Win 11 Home"),
                                                                            (NULL, 5,19,"Gigabit"),
                                                                            (NULL, 5,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 5,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 6,1,"Intel core i5"),
                                                                            (NULL, 6,2,"PT516-51s-71RW"),
                                                                            (NULL, 6,3,"i5 11800H"),
                                                                            (NULL, 6,4,"64GB RAM"),
                                                                            (NULL, 6,5,"4 khe"),
                                                                            (NULL, 6,6,"256GB"),
                                                                            (NULL, 6,7,"RTX 3080 8G"),
                                                                            (NULL, 6,8,"1TB SSD"),
                                                                            (NULL, 6,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 6,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 6,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 6,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 6,16,"2.2 kg"),
                                                                            (NULL, 6,17,"Win 11 Home"),
                                                                            (NULL, 6,19,"Gigabit"),
                                                                            (NULL, 6,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 6,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 7,1,"Intel core i5"),
                                                                            (NULL, 7,2,"PT516-51s-71RW"),
                                                                            (NULL, 7,3,"i5 11800H"),
                                                                            (NULL, 7,4,"64GB RAM"),
                                                                            (NULL, 7,5,"4 khe"),
                                                                            (NULL, 7,6,"256GB"),
                                                                            (NULL, 7,7,"RTX 3080 8G"),
                                                                            (NULL, 7,8,"1TB SSD"),
                                                                            (NULL, 7,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 7,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 7,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 7,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 7,16,"2.2 kg"),
                                                                            (NULL, 7,17,"Win 11 Home"),
                                                                            (NULL, 7,19,"Gigabit"),
                                                                            (NULL, 7,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 7,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 8,1,"Intel core i5"),
                                                                            (NULL, 8,2,"PT516-51s-71RW"),
                                                                            (NULL, 8,3,"i5 11800H"),
                                                                            (NULL, 8,4,"64GB RAM"),
                                                                            (NULL, 8,5,"4 khe"),
                                                                            (NULL, 8,6,"256GB"),
                                                                            (NULL, 8,7,"RTX 3080 8G"),
                                                                            (NULL, 8,8,"1TB SSD"),
                                                                            (NULL, 8,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 8,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 8,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 8,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 8,16,"2.2 kg"),
                                                                            (NULL, 8,17,"Win 11 Home"),
                                                                            (NULL, 8,19,"Gigabit"),
                                                                            (NULL, 8,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 8,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 42,1,"Intel core i5"),
                                                                            (NULL, 42,2,"PT516-51s-71RW"),
                                                                            (NULL, 42,3,"i5 11800H"),
                                                                            (NULL, 42,4,"64GB RAM"),
                                                                            (NULL, 42,5,"4 khe"),
                                                                            (NULL, 42,6,"256GB"),
                                                                            (NULL, 42,7,"RTX 3080 8G"),
                                                                            (NULL, 42,8,"1TB SSD"),
                                                                            (NULL, 42,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 42,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 42,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 42,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 42,16,"2.2 kg"),
                                                                            (NULL, 42,17,"Win 11 Home"),
                                                                            (NULL, 42,19,"Gigabit"),
                                                                            (NULL, 42,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 42,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 43,1,"Intel core i7"),
                                                                            (NULL, 43,2,"PT516-51s-71RW"),
                                                                            (NULL, 43,3,"i7 11800H"),
                                                                            (NULL, 43,4,"64GB RAM"),
                                                                            (NULL, 43,5,"4 khe"),
                                                                            (NULL, 43,6,"256GB"),
                                                                            (NULL, 43,7,"RTX 3080 8G"),
                                                                            (NULL, 43,8,"1TB SSD"),
                                                                            (NULL, 43,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 43,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 43,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 43,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 43,16,"2.2 kg"),
                                                                            (NULL, 43,17,"Win 11 Home"),
                                                                            (NULL, 43,19,"Gigabit"),
                                                                            (NULL, 43,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 43,21,"57 Wh");
-- PC

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 9,1,"Intel core i7"),
                                                                            (NULL, 9,2,"PT516-51s-71RW"),
                                                                            (NULL, 9,3,"i7 11800H"),
                                                                            (NULL, 9,4,"64GB RAM"),
                                                                            (NULL, 9,5,"4 khe"),
                                                                            (NULL, 9,6,"256GB"),
                                                                            (NULL, 9,7,"RTX 3080 8G"),
                                                                            (NULL, 9,8,"1TB SSD"),
                                                                            (NULL, 9,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 9,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 9,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 9,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 9,16,"2.2 kg"),
                                                                            (NULL, 9,17,"Win 11 Home"),
                                                                            (NULL, 9,19,"Gigabit"),
                                                                            (NULL, 9,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 10,1,"Intel core i7"),
                                                                            (NULL, 10,2,"PT516-51s-71RW"),
                                                                            (NULL, 10,3,"i7 11800H"),
                                                                            (NULL, 10,4,"64GB RAM"),
                                                                            (NULL, 10,5,"4 khe"),
                                                                            (NULL, 10,6,"256GB"),
                                                                            (NULL, 10,7,"RTX 3080 8G"),
                                                                            (NULL, 10,8,"1TB SSD"),
                                                                            (NULL, 10,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 10,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 10,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 10,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 10,16,"2.2 kg"),
                                                                            (NULL, 10,17,"Win 11 Home"),
                                                                            (NULL, 10,19,"Gigabit"),
                                                                            (NULL, 10,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 11,1,"Intel core i5"),
                                                                            (NULL, 11,2,"PT516-51s-71RW"),
                                                                            (NULL, 11,3,"i5 11800H"),
                                                                            (NULL, 11,4,"64GB RAM"),
                                                                            (NULL, 11,5,"4 khe"),
                                                                            (NULL, 11,6,"256GB"),
                                                                            (NULL, 11,7,"RTX 3080 8G"),
                                                                            (NULL, 11,8,"1TB SSD"),
                                                                            (NULL, 11,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 11,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 11,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 11,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 11,16,"2.2 kg"),
                                                                            (NULL, 11,17,"Win 11 Home"),
                                                                            (NULL, 11,19,"Gigabit"),
                                                                            (NULL, 11,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 12,1,"Intel core i5"),
                                                                            (NULL, 12,2,"PT516-51s-71RW"),
                                                                            (NULL, 12,3,"i5 11800H"),
                                                                            (NULL, 12,4,"64GB RAM"),
                                                                            (NULL, 12,5,"4 khe"),
                                                                            (NULL, 12,6,"256GB"),
                                                                            (NULL, 12,7,"RTX 3080 8G"),
                                                                            (NULL, 12,8,"1TB SSD"),
                                                                            (NULL, 12,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 12,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 12,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 12,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 12,16,"2.2 kg"),
                                                                            (NULL, 12,17,"Win 11 Home"),
                                                                            (NULL, 12,19,"Gigabit"),
                                                                            (NULL, 12,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 13,1,"Intel core i5"),
                                                                            (NULL, 13,2,"PT516-51s-71RW"),
                                                                            (NULL, 13,3,"i5 11800H"),
                                                                            (NULL, 13,4,"64GB RAM"),
                                                                            (NULL, 13,5,"4 khe"),
                                                                            (NULL, 13,6,"256GB"),
                                                                            (NULL, 13,7,"RTX 3080 8G"),
                                                                            (NULL, 13,8,"1TB SSD"),
                                                                            (NULL, 13,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 13,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 13,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 13,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 13,16,"2.2 kg"),
                                                                            (NULL, 13,17,"Win 11 Home"),
                                                                            (NULL, 13,19,"Gigabit"),
                                                                            (NULL, 13,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 14,1,"Intel core i5"),
                                                                            (NULL, 14,2,"PT516-51s-71RW"),
                                                                            (NULL, 14,3,"i5 11800H"),
                                                                            (NULL, 14,4,"64GB RAM"),
                                                                            (NULL, 14,5,"4 khe"),
                                                                            (NULL, 14,6,"256GB"),
                                                                            (NULL, 14,7,"RTX 3080 8G"),
                                                                            (NULL, 14,8,"1TB SSD"),
                                                                            (NULL, 14,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 14,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 14,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 14,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 14,16,"2.2 kg"),
                                                                            (NULL, 14,17,"Win 11 Home"),
                                                                            (NULL, 14,19,"Gigabit"),
                                                                            (NULL, 14,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 15,1,"Intel core i5"),
                                                                            (NULL, 15,2,"PT516-51s-71RW"),
                                                                            (NULL, 15,3,"i5 11800H"),
                                                                            (NULL, 15,4,"64GB RAM"),
                                                                            (NULL, 15,5,"4 khe"),
                                                                            (NULL, 15,6,"256GB"),
                                                                            (NULL, 15,7,"RTX 3080 8G"),
                                                                            (NULL, 15,8,"1TB SSD"),
                                                                            (NULL, 15,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 15,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 15,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 15,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 15,16,"2.2 kg"),
                                                                            (NULL, 15,17,"Win 11 Home"),
                                                                            (NULL, 15,19,"Gigabit"),
                                                                            (NULL, 15,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 16,1,"Intel core i3"),
                                                                            (NULL, 16,2,"PT516-51s-71RW"),
                                                                            (NULL, 16,3,"i3 11800H"),
                                                                            (NULL, 16,4,"64GB RAM"),
                                                                            (NULL, 16,5,"4 khe"),
                                                                            (NULL, 16,6,"256GB"),
                                                                            (NULL, 16,7,"RTX 3080 8G"),
                                                                            (NULL, 16,8,"1TB SSD"),
                                                                            (NULL, 16,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 16,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 16,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 16,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 16,16,"2.2 kg"),
                                                                            (NULL, 16,17,"Win 11 Home"),
                                                                            (NULL, 16,19,"Gigabit"),
                                                                            (NULL, 16,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 17,1,"Intel core i3"),
                                                                            (NULL, 17,2,"PT516-51s-71RW"),
                                                                            (NULL, 17,3,"i3 11800H"),
                                                                            (NULL, 17,4,"64GB RAM"),
                                                                            (NULL, 17,5,"4 khe"),
                                                                            (NULL, 17,6,"256GB"),
                                                                            (NULL, 17,7,"RTX 3080 8G"),
                                                                            (NULL, 17,8,"1TB SSD"),
                                                                            (NULL, 17,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 17,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 17,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 17,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 17,16,"2.2 kg"),
                                                                            (NULL, 17,17,"Win 11 Home"),
                                                                            (NULL, 17,19,"Gigabit"),
                                                                            (NULL, 17,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 18,1,"Intel core i3"),
                                                                            (NULL, 18,2,"PT516-51s-71RW"),
                                                                            (NULL, 18,3,"i3 11800H"),
                                                                            (NULL, 18,4,"64GB RAM"),
                                                                            (NULL, 18,5,"4 khe"),
                                                                            (NULL, 18,6,"256GB"),
                                                                            (NULL, 18,7,"RTX 3080 8G"),
                                                                            (NULL, 18,8,"1TB SSD"),
                                                                            (NULL, 18,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 18,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 18,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 18,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 18,16,"2.2 kg"),
                                                                            (NULL, 18,17,"Win 11 Home"),
                                                                            (NULL, 18,19,"Gigabit"),
                                                                            (NULL, 18,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 19,1,"Intel core i3"),
                                                                            (NULL, 19,2,"PT516-51s-71RW"),
                                                                            (NULL, 19,3,"i3 11800H"),
                                                                            (NULL, 19,4,"64GB RAM"),
                                                                            (NULL, 19,5,"4 khe"),
                                                                            (NULL, 19,6,"256GB"),
                                                                            (NULL, 19,7,"RTX 3080 8G"),
                                                                            (NULL, 19,8,"1TB SSD"),
                                                                            (NULL, 19,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 19,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 19,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 19,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 19,16,"2.2 kg"),
                                                                            (NULL, 19,17,"Win 11 Home"),
                                                                            (NULL, 19,19,"Gigabit"),
                                                                            (NULL, 19,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 20,1,"Intel core i3"),
                                                                            (NULL, 20,2,"PT516-51s-71RW"),
                                                                            (NULL, 20,3,"i3 11800H"),
                                                                            (NULL, 20,4,"64GB RAM"),
                                                                            (NULL, 20,5,"4 khe"),
                                                                            (NULL, 20,6,"256GB"),
                                                                            (NULL, 20,7,"RTX 3080 8G"),
                                                                            (NULL, 20,8,"1TB SSD"),
                                                                            (NULL, 20,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 20,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 20,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 20,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 20,16,"2.2 kg"),
                                                                            (NULL, 20,17,"Win 11 Home"),
                                                                            (NULL, 20,19,"Gigabit"),
                                                                            (NULL, 20,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 21,1,"Intel core i9"),
                                                                            (NULL, 21,2,"PT516-51s-71RW"),
                                                                            (NULL, 21,3,"i9 11800H"),
                                                                            (NULL, 21,4,"64GB RAM"),
                                                                            (NULL, 21,5,"4 khe"),
                                                                            (NULL, 21,6,"256GB"),
                                                                            (NULL, 21,7,"RTX 3080 8G"),
                                                                            (NULL, 21,8,"1TB SSD"),
                                                                            (NULL, 21,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 21,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 21,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 21,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 21,16,"2.2 kg"),
                                                                            (NULL, 21,17,"Win 11 Home"),
                                                                            (NULL, 21,19,"Gigabit"),
                                                                            (NULL, 21,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 22,1,"Intel core i9"),
                                                                            (NULL, 22,2,"PT516-51s-71RW"),
                                                                            (NULL, 22,3,"i9 11800H"),
                                                                            (NULL, 22,4,"64GB RAM"),
                                                                            (NULL, 22,5,"4 khe"),
                                                                            (NULL, 22,6,"256GB"),
                                                                            (NULL, 22,7,"RTX 3080 8G"),
                                                                            (NULL, 22,8,"1TB SSD"),
                                                                            (NULL, 22,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 22,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 22,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 22,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 22,16,"2.2 kg"),
                                                                            (NULL, 22,17,"Win 11 Home"),
                                                                            (NULL, 22,19,"Gigabit"),
                                                                            (NULL, 22,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 23,1,"Intel core i9"),
                                                                            (NULL, 23,2,"PT516-51s-71RW"),
                                                                            (NULL, 23,3,"i9 11800H"),
                                                                            (NULL, 23,4,"64GB RAM"),
                                                                            (NULL, 23,5,"4 khe"),
                                                                            (NULL, 23,6,"256GB"),
                                                                            (NULL, 23,7,"RTX 3080 8G"),
                                                                            (NULL, 23,8,"1TB SSD"),
                                                                            (NULL, 23,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 23,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 23,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 23,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 23,16,"2.2 kg"),
                                                                            (NULL, 23,17,"Win 11 Home"),
                                                                            (NULL, 23,19,"Gigabit"),
                                                                            (NULL, 23,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 24,1,"Intel core i9"),
                                                                            (NULL, 24,2,"PT516-51s-71RW"),
                                                                            (NULL, 24,3,"i9 11800H"),
                                                                            (NULL, 24,4,"64GB RAM"),
                                                                            (NULL, 24,5,"4 khe"),
                                                                            (NULL, 24,6,"256GB"),
                                                                            (NULL, 24,7,"RTX 3080 8G"),
                                                                            (NULL, 24,8,"1TB SSD"),
                                                                            (NULL, 24,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 24,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 24,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 24,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 24,16,"2.2 kg"),
                                                                            (NULL, 24,17,"Win 11 Home"),
                                                                            (NULL, 24,19,"Gigabit"),
                                                                            (NULL, 24,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 25,1,"Intel core i9"),
                                                                            (NULL, 25,2,"PT516-51s-71RW"),
                                                                            (NULL, 25,3,"i9 11800H"),
                                                                            (NULL, 25,4,"64GB RAM"),
                                                                            (NULL, 25,5,"4 khe"),
                                                                            (NULL, 25,6,"256GB"),
                                                                            (NULL, 25,7,"RTX 3080 8G"),
                                                                            (NULL, 25,8,"1TB SSD"),
                                                                            (NULL, 25,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 25,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 25,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 25,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 25,16,"2.2 kg"),
                                                                            (NULL, 25,17,"Win 11 Home"),
                                                                            (NULL, 25,19,"Gigabit"),
                                                                            (NULL, 25,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 25,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 26,1,"Intel core i3"),
                                                                            (NULL, 26,2,"PT516-51s-71RW"),
                                                                            (NULL, 26,3,"i3 11800H"),
                                                                            (NULL, 26,4,"64GB RAM"),
                                                                            (NULL, 26,5,"4 khe"),
                                                                            (NULL, 26,6,"256GB"),
                                                                            (NULL, 26,7,"RTX 3080 8G"),
                                                                            (NULL, 26,8,"1TB SSD"),
                                                                            (NULL, 26,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 26,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 26,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 26,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 26,16,"2.2 kg"),
                                                                            (NULL, 26,17,"Win 11 Home"),
                                                                            (NULL, 26,19,"Gigabit"),
                                                                            (NULL, 26,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 26,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 27,1,"Intel core i3"),
                                                                            (NULL, 27,2,"PT516-51s-71RW"),
                                                                            (NULL, 27,3,"i3 11800H"),
                                                                            (NULL, 27,4,"64GB RAM"),
                                                                            (NULL, 27,5,"4 khe"),
                                                                            (NULL, 27,6,"256GB"),
                                                                            (NULL, 27,7,"RTX 3080 8G"),
                                                                            (NULL, 27,8,"1TB SSD"),
                                                                            (NULL, 27,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 27,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 27,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 27,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 27,16,"2.2 kg"),
                                                                            (NULL, 27,17,"Win 11 Home"),
                                                                            (NULL, 27,19,"Gigabit"),
                                                                            (NULL, 27,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 27,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 28,1,"Intel core i3"),
                                                                            (NULL, 28,2,"PT516-51s-71RW"),
                                                                            (NULL, 28,3,"i3 11800H"),
                                                                            (NULL, 28,4,"64GB RAM"),
                                                                            (NULL, 28,5,"4 khe"),
                                                                            (NULL, 28,6,"256GB"),
                                                                            (NULL, 28,7,"RTX 3080 8G"),
                                                                            (NULL, 28,8,"1TB SSD"),
                                                                            (NULL, 28,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 28,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 28,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 28,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 28,16,"2.2 kg"),
                                                                            (NULL, 28,17,"Win 11 Home"),
                                                                            (NULL, 28,19,"Gigabit"),
                                                                            (NULL, 28,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 28,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 29,1,"Intel core i3"),
                                                                            (NULL, 29,2,"PT516-51s-71RW"),
                                                                            (NULL, 29,3,"i3 11800H"),
                                                                            (NULL, 29,4,"64GB RAM"),
                                                                            (NULL, 29,5,"4 khe"),
                                                                            (NULL, 29,6,"256GB"),
                                                                            (NULL, 29,7,"RTX 3080 8G"),
                                                                            (NULL, 29,8,"1TB SSD"),
                                                                            (NULL, 29,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 29,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 29,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 29,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 29,16,"2.2 kg"),
                                                                            (NULL, 29,17,"Win 11 Home"),
                                                                            (NULL, 29,19,"Gigabit"),
                                                                            (NULL, 29,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 29,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 30,1,"Intel core i3"),
                                                                            (NULL, 30,2,"PT516-51s-71RW"),
                                                                            (NULL, 30,3,"i3 11800H"),
                                                                            (NULL, 30,4,"64GB RAM"),
                                                                            (NULL, 30,5,"4 khe"),
                                                                            (NULL, 30,6,"256GB"),
                                                                            (NULL, 30,7,"RTX 3080 8G"),
                                                                            (NULL, 30,8,"1TB SSD"),
                                                                            (NULL, 30,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 30,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 30,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 30,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 30,16,"2.2 kg"),
                                                                            (NULL, 30,17,"Win 11 Home"),
                                                                            (NULL, 30,19,"Gigabit"),
                                                                            (NULL, 30,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 30,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 31,1,"Intel core i3"),
                                                                            (NULL, 31,2,"PT516-51s-71RW"),
                                                                            (NULL, 31,3,"i3 11800H"),
                                                                            (NULL, 31,4,"64GB RAM"),
                                                                            (NULL, 31,5,"4 khe"),
                                                                            (NULL, 31,6,"256GB"),
                                                                            (NULL, 31,7,"RTX 3080 8G"),
                                                                            (NULL, 31,8,"1TB SSD"),
                                                                            (NULL, 31,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 31,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 31,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 31,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 31,16,"2.2 kg"),
                                                                            (NULL, 31,17,"Win 11 Home"),
                                                                            (NULL, 31,19,"Gigabit"),
                                                                            (NULL, 31,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 31,21,"57 Wh");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 32,1,"Intel core i7"),
                                                                            (NULL, 32,2,"PT516-51s-71RW"),
                                                                            (NULL, 32,3,"i7 11800H"),
                                                                            (NULL, 32,4,"64GB RAM"),
                                                                            (NULL, 32,5,"4 khe"),
                                                                            (NULL, 32,6,"256GB"),
                                                                            (NULL, 32,7,"RTX 3080 8G"),
                                                                            (NULL, 32,8,"1TB SSD"),
                                                                            (NULL, 32,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 32,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 32,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 32,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 32,16,"2.2 kg"),
                                                                            (NULL, 32,17,"Win 11 Home"),
                                                                            (NULL, 32,19,"Gigabit"),
                                                                            (NULL, 32,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 32,21,"57 Wh");

-- VGA

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 33,38,"4GB"),
                                                                            (NULL, 33,43,"GTX 1660"),
                                                                            (NULL, 33,44,"1770 MHz");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 34,38,"4GB"),
                                                                            (NULL, 34,43,"GTX 1660"),
                                                                            (NULL, 34,44,"1770 MHz");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 35,38,"4GB"),
                                                                            (NULL, 35,43,"GTX 1660"),
                                                                            (NULL, 35,44,"1770 MHz");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 36,38,"4GB"),
                                                                            (NULL, 36,43,"GTX 1660"),
                                                                            (NULL, 36,44,"1770 MHz");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 37,38,"4GB"),
                                                                            (NULL, 37,43,"GTX 1660"),
                                                                            (NULL, 37,44,"1770 MHz");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 38,38,"4GB"),
                                                                            (NULL, 38,43,"GTX 2660"),
                                                                            (NULL, 38,44,"2770 MHz");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 39,38,"4GB"),
                                                                            (NULL, 39,43,"GTX 2660"),
                                                                            (NULL, 39,44,"2770 MHz");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 40,38,"4GB"),
                                                                            (NULL, 40,43,"GTX 2660"),
                                                                            (NULL, 40,44,"2770 MHz");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 41,38,"4GB"),
                                                                            (NULL, 41,43,"GTX 2660"),
                                                                            (NULL, 41,44,"2770 MHz");

-- Bộ vi xử lý
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 44,28,"LGA 1200"),
                                                                            (NULL, 44,29,"4.4 GHz"),
                                                                            (NULL, 44,30,"4"),
                                                                            (NULL, 44,31,"8");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 45,28,"LGA 1200"),
                                                                            (NULL, 45,29,"4.6 GHz"),
                                                                            (NULL, 45,30,"6"),
                                                                            (NULL, 45,31,"12");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 46,28,"LGA 1700"),
                                                                            (NULL, 46,29,"4.8 GHz"),
                                                                            (NULL, 46,30,"8"),
                                                                            (NULL, 46,31,"16");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 47,28,"LGA 1700"),
                                                                            (NULL, 47,29,"5.6 GHz"),
                                                                            (NULL, 47,30,"10"),
                                                                            (NULL, 47,31,"20");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 48,28,"LGA 1700"),
                                                                            (NULL, 48,29,"6.6 GHz"),
                                                                            (NULL, 48,30,"12"),
                                                                            (NULL, 48,31,"24");

-- Bo mạch chủ
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 49,32,"Intel B460"),
                                                                            (NULL, 49,28,"LGA 1200"),
                                                                            (NULL, 49,33,"2"),
                                                                            (NULL, 49,34,"mini-iTX"),
                                                                            (NULL, 49,35,"Không"),
                                                                            (NULL, 49,39,"2667 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 50,32,"Intel B460"),
                                                                            (NULL, 50,28,"LGA 1200"),
                                                                            (NULL, 50,33,"2"),
                                                                            (NULL, 50,34,"mini-iTX"),
                                                                            (NULL, 50,35,"Không"),
                                                                            (NULL, 50,39,"2667 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 51,32,"Intel B660"),
                                                                            (NULL, 51,28,"LGA 1700"),
                                                                            (NULL, 51,33,"iTX"),
                                                                            (NULL, 51,34,"4"),
                                                                            (NULL, 51,35,"Bluetooth"),
                                                                            (NULL, 51,39,"3200 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 52,32,"Intel B660"),
                                                                            (NULL, 52,28,"LGA 1700"),
                                                                            (NULL, 52,33,"4"),
                                                                            (NULL, 52,34,"ATX"),
                                                                            (NULL, 52,35,"Bluetooth"),
                                                                            (NULL, 52,39,"3200 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 53,32,"Intel B660"),
                                                                            (NULL, 53,28,"LGA 1700"),
                                                                            (NULL, 53,33,"4"),
                                                                            (NULL, 53,34,"ATX"),
                                                                            (NULL, 53,35,"Bluetooth"),
                                                                            (NULL, 53,39,"4800 max");

-- RAM
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 54,36,"DDR4"),
                                                                            (NULL, 54,37,"Desktop"),
                                                                            (NULL, 54,38,"4 GB"),
                                                                            (NULL, 54,39,"2667"),
                                                                            (NULL, 54,40,"2 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 55,36,"DDR4"),
                                                                            (NULL, 55,37,"Desktop"),
                                                                            (NULL, 55,38,"8 GB"),
                                                                            (NULL, 55,39,"2667"),
                                                                            (NULL, 55,40,"1 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 56,36,"DDR5"),
                                                                            (NULL, 56,37,"Desktop"),
                                                                            (NULL, 56,38,"16 GB"),
                                                                            (NULL, 56,39,"3200"),
                                                                            (NULL, 56,40,"1 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 57,36,"DDR4"),
                                                                            (NULL, 57,37,"Laptop"),
                                                                            (NULL, 57,38,"4 GB"),
                                                                            (NULL, 57,39,"2667"),
                                                                            (NULL, 57,40,"1 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 58,36,"DDR5"),
                                                                            (NULL, 58,37,"Laptop"),
                                                                            (NULL, 58,38,"8 GB"),
                                                                            (NULL, 58,39,"3200"),
                                                                            (NULL, 58,40,"1 chiếc");

-- HDD
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 99,15,"2.5 inch"),
                                                                            (NULL, 99,38,"500 GB"),
                                                                            (NULL, 99,41,"5600 rpm"),
                                                                            (NULL, 99,42,"256 MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 100,15,"3.5 inch"),
                                                                            (NULL, 100,38,"1 TB"),
                                                                            (NULL, 100,41,"5600 rpm"),
                                                                            (NULL, 100,42,"256 MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 101,15,"3.5 inch"),
                                                                            (NULL, 101,38,"2 TB"),
                                                                            (NULL, 101,41,"5600 rpm"),
                                                                            (NULL, 101,42,"256 MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 102,15,"3.5 inch"),
                                                                            (NULL, 102,38,"3 TB"),
                                                                            (NULL, 102,41,"5600 rpm"),
                                                                            (NULL, 102,42,"256 MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 103,15,"3.5 inch"),
                                                                            (NULL, 103,38,"6 TB"),
                                                                            (NULL, 103,41,"7200 rpm"),
                                                                            (NULL, 103,42,"512 MB");
-- SSD
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 104,15,"2.5 inch"),
                                                                            (NULL, 104,38,"500 GB"),
                                                                            (NULL, 104,41,"1,000 MB / 1,200 MB"),
                                                                            (NULL, 104,42,"512MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 105,15,"2.5 inch"),
                                                                            (NULL, 105,38,"1 TB"),
                                                                            (NULL, 105,41,"1,000 MB / 1,200 MB"),
                                                                            (NULL, 105,42,"512MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 106,15,"3.5 inch"),
                                                                            (NULL, 106,38,"2 TB"),
                                                                            (NULL, 106,41,"1,000 MB / 1,200 MB"),
                                                                            (NULL, 106,42,"512MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 107,15,"3.5 inch"),
                                                                            (NULL, 107,38,"3 TB"),
                                                                            (NULL, 107,41,"1,000 MB / 1,200 MB"),
                                                                            (NULL, 107,42,"512MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 108,15,"3.5 inch"),
                                                                            (NULL, 108,38,"6 TB"),
                                                                            (NULL, 108,41,"1,000 MB / 1,200 MB"),
                                                                            (NULL, 108,42,"512MB");
-- Nguồn
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 59,48,"550W"),
                                                                            (NULL, 59,49,"80 Plus Bronze");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 60,48,"650W"),
                                                                            (NULL, 60,49,"80 Plus Silver");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 61,48,"750W"),
                                                                            (NULL, 61,49,"80 Plus Gold");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 62,48,"850W"),
                                                                            (NULL, 62,49,"80 Plus Gold");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 63,48,"1200W"),
                                                                            (NULL, 63,49,"80 Plus Platinum");
-- Vỏ case
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 64,50,"Cao cấp + RGB"),
                                                                            (NULL, 64,51,"3 quạt tản nhiệt"),
                                                                            (NULL, 64,52,"Khí cao 160mm"),
                                                                            (NULL, 64,15,"Mini");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 65,50,"Cao cấp + RGB"),
                                                                            (NULL, 65,51,"3 quạt tản nhiệt"),
                                                                            (NULL, 65,52,"Khí cao 160mm"),
                                                                            (NULL, 65,15,"Mini");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 66,50,"Cao cấp + RGB"),
                                                                            (NULL, 66,51,"3 quạt tản nhiệt"),
                                                                            (NULL, 66,52,"Khí cao 180mm"),
                                                                            (NULL, 66,15,"Mid");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 67,50,"Cao cấp + RGB"),
                                                                            (NULL, 67,51,"3 quạt tản nhiệt"),
                                                                            (NULL, 67,52,"Khí cao 180mm"),
                                                                            (NULL, 67,15,"Full");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 68,50,"Cao cấp + RGB"),
                                                                            (NULL, 68,51,"4 quạt tản nhiệt"),
                                                                            (NULL, 68,52,"Khí cao 220mm"),
                                                                            (NULL, 68,15,"Full");
-- Quạt tản nhiệt
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 69,15,"120mm"),
                                                                            (NULL, 69,64,"Cao"),
                                                                            (NULL, 69,65,"ARGB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 70,15,"120mm"),
                                                                            (NULL, 70,64,"Cao"),
                                                                            (NULL, 70,65,"ARGB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 71,15,"120mm"),
                                                                            (NULL, 71,64,"Cao"),
                                                                            (NULL, 71,65,"ARGB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 72,15,"160mm"),
                                                                            (NULL, 72,64,"Cao"),
                                                                            (NULL, 72,65,"ARGB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 73,15,"180mm"),
                                                                            (NULL, 73,64,"Cao"),
                                                                            (NULL, 73,65,"ARGB");
-- Tản nhiệt khí
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 74,50,"Dual Tower"),
                                                                            (NULL, 74,15,"158mm"),
                                                                            (NULL, 74,66,"2");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 75,50,"Dual Tower"),
                                                                            (NULL, 75,15,"158mm"),
                                                                            (NULL, 75,66,"2");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 76,50,"Dual Tower"),
                                                                            (NULL, 76,15,"158mm"),
                                                                            (NULL, 76,66,"2");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 77,50,"Dual Tower"),
                                                                            (NULL, 77,15,"158mm"),
                                                                            (NULL, 77,66,"2");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 78,50,"Dual Tower"),
                                                                            (NULL, 78,15,"158mm"),
                                                                            (NULL, 78,66,"2");
-- Tản nhiệt nước
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 79,28,"LGA 1200 - Không cần Kit"),
                                                                            (NULL, 79,15,"360mm"),
                                                                            (NULL, 79,50,"Led ARGB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 80,28,"LGA 1700 - Không cần Kit"),
                                                                            (NULL, 80,15,"360mm"),
                                                                            (NULL, 80,50,"Led ARGB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 81,28,"LGA 1700 - Không cần Kit"),
                                                                            (NULL, 81,15,"360mm"),
                                                                            (NULL, 81,50,"Led ARGB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 82,28,"LGA 1700 - Không cần Kit"),
                                                                            (NULL, 82,15,"360mm"),
                                                                            (NULL, 82,50,"Led ARGB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 83,28,"LGA 1700 - Không cần Kit"),
                                                                            (NULL, 83,15,"360mm"),
                                                                            (NULL, 83,50,"Led ARGB");
-- Chuột
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 84,59,"USB"),
                                                                            (NULL, 84,60,"12k DPI"),
                                                                            (NULL, 84,61,"6 nút"),
                                                                            (NULL, 84,27,"65g");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 85,59,"USB"),
                                                                            (NULL, 85,60,"12k DPI"),
                                                                            (NULL, 85,61,"6 nút"),
                                                                            (NULL, 85,27,"65g");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 86,59,"USB"),
                                                                            (NULL, 86,60,"12k DPI"),
                                                                            (NULL, 86,61,"6 nút"),
                                                                            (NULL, 86,27,"65g");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 87,59,"USB/BlueTooth"),
                                                                            (NULL, 87,60,"12k DPI"),
                                                                            (NULL, 87,61,"6 nút"),
                                                                            (NULL, 87,27,"65g");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 88,59,"USB/BlueTooth"),
                                                                            (NULL, 88,60,"12k DPI"),
                                                                            (NULL, 88,61,"6 nút"),
                                                                            (NULL, 88,27,"65g");
-- Bàn phím
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 89,62,"Membrane"),
                                                                            (NULL, 89,63,"Static Full RGB"),
                                                                            (NULL, 89,50,"Cao Cấp");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 90,62,"Membrane"),
                                                                            (NULL, 90,63,"Static Full RGB"),
                                                                            (NULL, 90,50,"Cao Cấp");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 91,62,"Membrane"),
                                                                            (NULL, 91,63,"Static Full RGB"),
                                                                            (NULL, 91,50,"Cao Cấp");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 92,62,"Membrane"),
                                                                            (NULL, 92,63,"Static Full RGB"),
                                                                            (NULL, 92,50,"Cao Cấp");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 93,62,"Membrane"),
                                                                            (NULL, 93,63,"Static Full RGB"),
                                                                            (NULL, 93,50,"Cao Cấp");
-- Màn hình
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 94,53,"16:9"),
                                                                            (NULL, 94,15,"18 inch"),
                                                                            (NULL, 94,54,"HD 1366 x 768"),
                                                                            (NULL, 94,55,"TN"),
                                                                            (NULL, 94,56,"60 Hz"),
                                                                            (NULL, 94,57,"5 ms"),
                                                                            (NULL, 94,58,"VGA + HDMI");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 95,53,"16:9"),
                                                                            (NULL, 95,15,"18 inch"),
                                                                            (NULL, 95,54,"HD 1366 x 768"),
                                                                            (NULL, 95,55,"TN"),
                                                                            (NULL, 95,56,"60 Hz"),
                                                                            (NULL, 95,57,"5 ms"),
                                                                            (NULL, 95,58,"VGA + HDMI");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 96,53,"16:9"),
                                                                            (NULL, 96,15,"18 inch"),
                                                                            (NULL, 96,54,"HD 1366 x 768"),
                                                                            (NULL, 96,55,"TN"),
                                                                            (NULL, 96,56,"60 Hz"),
                                                                            (NULL, 96,57,"5 ms"),
                                                                            (NULL, 96,58,"VGA + HDMI");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 97,53,"16:9"),
                                                                            (NULL, 97,15,"18 inch"),
                                                                            (NULL, 97,54,"HD 1366 x 768"),
                                                                            (NULL, 97,55,"TN"),
                                                                            (NULL, 97,56,"60 Hz"),
                                                                            (NULL, 97,57,"5 ms"),
                                                                            (NULL, 97,58,"VGA + HDMI");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 98,53,"16:9"),
                                                                            (NULL, 98,15,"18 inch"),
                                                                            (NULL, 98,54,"HD 1366 x 768"),
                                                                            (NULL, 98,55,"TN"),
                                                                            (NULL, 98,56,"60 Hz"),
                                                                            (NULL, 98,57,"5 ms"),
                                                                            (NULL, 98,58,"VGA + HDMI");

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
