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
-- INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('Apple');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('HP');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('ASUS');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('BKCOM');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('MSI');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('Acer');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('Gigabyte');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('Intel');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('Logitech');
INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('WD/Seagate');
-- INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('Lenovo');
-- INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('Razer');
-- INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('Sony');
-- INSERT INTO nha_san_xuat(`tenNSX`) VALUE ('LG');

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
                                                (17,'Chuột có dây'),(17,'Chuột không dây'),
                                                (18,'Bàn phím mềm'),(18,'Bàn phím giả cơ'),(18,'Bàn phím cơ'),(6, 'Tặng phẩm');
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
(NULL, 'sn-anhQuangCao1.png', 'product/1');
INSERT INTO `anh_quang_cao` (`maAQC`, `anh`, `duongDan`) VALUES
(NULL, 'sn-anhQuangCao2.png', 'categoryCustomer/14?theLoaiCha=16&loai=TLC');
INSERT INTO `anh_quang_cao` (`maAQC`, `anh`, `duongDan`) VALUES
(NULL, 'sn-anhQuangCao3.png', 'categoryCustomer/9?theLoaiCha=3&theLoaiCon=9');
INSERT INTO `anh_quang_cao` (`maAQC`, `anh`, `duongDan`) VALUES
(NULL, 'st-anhQuangCao4.png', 'categoryCustomer/9?theLoaiCha=3&theLoaiCon=9');
INSERT INTO `anh_quang_cao` (`maAQC`, `anh`, `duongDan`) VALUES
(NULL, 'st-anhQuangCao5.png', 'categoryCustomer/3?theLoaiCha=1&loai=TLC');
INSERT INTO `anh_quang_cao` (`maAQC`, `anh`, `duongDan`) VALUES
(NULL, 'sl-asuszenbookQC.jpg', 'product/42');
INSERT INTO `anh_quang_cao` (`maAQC`, `anh`, `duongDan`) VALUES
(NULL, 'sl-asuszenbookQC.jpg', 'product/42');
INSERT INTO `anh_quang_cao` (`maAQC`, `anh`, `duongDan`) VALUES
(NULL, 'sl-asuszenbookQC.jpg', 'product/42');
-- ==========================================================================================================
-- Bảng bài viết
-- PC
INSERT INTO `bai_viet` (`maBV`, `tenBV`, `maNV`,`ngayTao`,`theLoai`)
VALUES (NULL, 'PC chất lượng 1',3,'2022-08-25',1);
-- Laptop
INSERT INTO `bai_viet` (`maBV`, `tenBV`, `maNV`,`ngayTao`,`theLoai`)
VALUES (NULL, 'Laptop chất lượng 2',3,'2022-08-25',1);
-- Linh kiện
INSERT INTO `bai_viet` (`maBV`, `tenBV`, `maNV`,`ngayTao`,`theLoai`)
VALUES (NULL, 'Linh kiện chất lượng 3',3,'2022-08-25',1);
-- Phụ kiện
INSERT INTO `bai_viet` (`maBV`, `tenBV`, `maNV`,`ngayTao`,`theLoai`)
VALUES (NULL, 'Phụ kiện chất lượng 4',3,'2022-08-25',1);
-- Màn hình
INSERT INTO `bai_viet` (`maBV`, `tenBV`, `maNV`,`ngayTao`,`theLoai`)
VALUES (NULL, 'Màn hình chất lượng 5',3,'2022-08-25',1);
-- Blog review
INSERT INTO `bai_viet` (`maBV`, `tenBV`, `maNV`,`ngayTao`,`theLoai`)
VALUES (NULL, 'Blog chất lượng 6',3,'2022-08-25',0);
INSERT INTO `bai_viet` (`maBV`, `tenBV`, `maNV`,`ngayTao`,`theLoai`)
VALUES (NULL, 'Blog chất lượng 7',3,'2022-08-25',0);
INSERT INTO `bai_viet` (`maBV`, `tenBV`, `maNV`,`ngayTao`,`theLoai`)
VALUES (NULL, 'Blog chất lượng 8',3,'2022-08-25',0);
INSERT INTO `bai_viet` (`maBV`, `tenBV`, `maNV`,`ngayTao`,`theLoai`)
VALUES (NULL, 'Blog chất lượng 9',3,'2022-08-25',0);
INSERT INTO `bai_viet` (`maBV`, `tenBV`, `maNV`,`ngayTao`,`theLoai`)
VALUES (NULL, 'Blog chất lượng 10',3,'2022-08-25',0);
-- ==========================================================================================================
-- Bảng nội dung bài viết
-- PC
INSERT INTO `noi_dung_bai_viet` (`maNDBV`, `maBV`, `tieuDe`,`anh`,`noiDung`)
VALUES (NULL,1,'Thiết kế linh hoạt, chất lượng chuẩn quốc tế','STOCK.jpg',
'PC có thể chơi được hầu hết các game có mặt trên thị trường ở mức thiết lập cao nhất mà vẫn đem lại tốc độ khung hình ổn đỉnh. Ngoài ra cỗ máy này cũng có thể đảm nhiệm tốt các tác vụ liên quan đến lập trình, thiết kế 2D/3D, hay làm phim đều ổn. Đúc kết từ kinh nghiệm thực tiễn, HACOM giúp quý khách hàng tiết kiệm tối đa thời gian tìm hiểu phần cứng. Cam kết các phần cứng đều tương thích 100%. Cùng với đó là giá thành cực kì tối ưu, vừa đảm bảo hiệu năng và tính thẩm mỹ.');
INSERT INTO `noi_dung_bai_viet` (`maNDBV`, `maBV`, `tieuDe`,`anh`,`noiDung`)
VALUES (NULL,1,'Năng suất kinh ngạc, chất lượng bền bỉ',null,
'PC hiệu suất cao, với CPU thuộc các dòng đời mới nhất, tối ưu hóa để xử lý các tác vụ nhẹ như lướt web và tin học văn phòng đến các tác vụ yêu cầu cao như gaming và xử lý đồ họa');

-- Laptop
INSERT INTO `noi_dung_bai_viet` (`maNDBV`, `maBV`, `tieuDe`,`anh`,`noiDung`)
VALUES (NULL,2,'Thiết kế linh hoạt, chất lượng chuẩn quốc tế','STOCK.jpg',
'Laptop có thể chơi được hầu hết các game có mặt trên thị trường ở mức thiết lập cao nhất mà vẫn đem lại tốc độ khung hình ổn đỉnh. Ngoài ra cỗ máy này cũng có thể đảm nhiệm tốt các tác vụ liên quan đến lập trình, thiết kế 2D/3D, hay làm phim đều ổn. Đúc kết từ kinh nghiệm thực tiễn, HACOM giúp quý khách hàng tiết kiệm tối đa thời gian tìm hiểu phần cứng. Cam kết các phần cứng đều tương thích 100%. Cùng với đó là giá thành cực kì tối ưu, vừa đảm bảo hiệu năng và tính thẩm mỹ.');
INSERT INTO `noi_dung_bai_viet` (`maNDBV`, `maBV`, `tieuDe`,`anh`,`noiDung`)
VALUES (NULL,2,'Năng suất kinh ngạc, chất lượng bền bỉ',null,
'Laptop hiệu suất cao, với CPU thuộc các dòng đời mới nhất, tối ưu hóa để xử lý các tác vụ nhẹ như lướt web và tin học văn phòng đến các tác vụ yêu cầu cao như gaming và xử lý đồ họa');
INSERT INTO `noi_dung_bai_viet` (`maNDBV`, `maBV`, `tieuDe`,`anh`,`noiDung`)
VALUES (NULL,2,'Video',null,
'https://www.youtube.com/embed/lwSEmrNkQjw');

-- Linh kiện
INSERT INTO `noi_dung_bai_viet` (`maNDBV`, `maBV`, `tieuDe`,`anh`,`noiDung`)
VALUES (NULL,3,'Thiết kế linh hoạt, chất lượng chuẩn quốc tế','STOCK.jpg',
'Linh kiện cao cấp, thiết kế vừa vặn, hỗ trợ các chuẩn kết nối cũng như backward compatibility');
INSERT INTO `noi_dung_bai_viet` (`maNDBV`, `maBV`, `tieuDe`,`anh`,`noiDung`)
VALUES (NULL,3,'Năng suất kinh ngạc, chất lượng bền bỉ',null,
'Sản xuất với năng suất là điểm đến, sản phẩm sẽ mang đến công suất bền bỉ và chất lượng');
-- Phụ kiện
INSERT INTO `noi_dung_bai_viet` (`maNDBV`, `maBV`, `tieuDe`,`anh`,`noiDung`)
VALUES (NULL,4,'Thiết kế linh hoạt, chất lượng chuẩn quốc tế','STOCK.jpg',
'Phụ kiện cao cấp, thiết kế vừa vặn, hỗ trợ các chuẩn kết nối cũng như backward compatibility');
INSERT INTO `noi_dung_bai_viet` (`maNDBV`, `maBV`, `tieuDe`,`anh`,`noiDung`)
VALUES (NULL,4,'Năng suất kinh ngạc, chất lượng bền bỉ',null,
'Sản xuất với năng suất là điểm đến, sản phẩm sẽ mang đến công suất bền bỉ và chất lượng');
-- Màn hình
INSERT INTO `noi_dung_bai_viet` (`maNDBV`, `maBV`, `tieuDe`,`anh`,`noiDung`)
VALUES (NULL,5,'Thiết kế linh hoạt, chất lượng chuẩn quốc tế','STOCK.jpg',
'Màn hình cao cấp, thiết kế vừa vặn, hỗ trợ các chuẩn kết nối cũng như backward compatibility');
INSERT INTO `noi_dung_bai_viet` (`maNDBV`, `maBV`, `tieuDe`,`anh`,`noiDung`)
VALUES (NULL,5,'Năng suất kinh ngạc, chất lượng bền bỉ',null,
'Sản xuất với năng suất là điểm đến, sản phẩm sẽ mang đến công suất bền bỉ và chất lượng');
-- Blog
INSERT INTO `noi_dung_bai_viet` (`maNDBV`, `maBV`, `tieuDe`,`anh`,`noiDung`)
VALUES (NULL,6,'Chất lượng và chính hãng','STOCK.jpg',
'. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum');
INSERT INTO `noi_dung_bai_viet` (`maNDBV`, `maBV`, `tieuDe`,`anh`,`noiDung`)
VALUES (NULL,6,'Giá cả hợp lý - Khuyến mãi không ngừng',null,
'BKCOM hướng đến sinh viên và giới trẻ, giá cả luôn hợp lý, giao hàng miễn phí và luôn luôn có khuyến mãi cho mỗi món hàng, đặc biệt là cho sinh viên. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum');

-- ==========================================================================================================
-- Bảng Sản phẩm

-- Laptop gaming
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Acer Gaming Predator Triton 500SE (PT516-51s-71RW) (NH.QAKSV.001) (i3 11800H/64GB RAM/1TB SSD/GTX 1650 8G/16.0 inch WQXGA 165Hz 100%sRGB/Win10/Xám) (2021)',82990000,10,5,2,6,6,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Acer Gaming Predator Helios 500 PH517-52-797L (NH.QD3SV.001) (i3 11800H/64GB Ram/2TB SSD/RTX 2060 8G/17.3 inch FHD 360Hz/Win 10/Đen)',98000000,10,5,2,6,6,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Acer Gaming Predator Helios 300 PH315-54-74RU (NH.QC1SV.002) (i5 11800H/16GB Ram/512GB SSD/GTX 1650 8G/15.6 inch QHD 165Hz/Win 10/Đen) (2021)',45000000,10,5,2,6,6,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Acer Gaming Aspire 7 A715-42G-R4XX (NH.QAYSV.008) (i5 5500U/8GB RAM/256GB SSD/15.6 inch FHD/RTX 2060 4G/Win11/Đen) (2021)',18000000,10,5,2,6,6,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Acer Gaming Nitro 5 Eagle AN515-57-54MV (NH.QENSV.003) (i7 11400H/8GB Ram/512GB SSD/GTX 1650 4G/15.6 inch FHD 144Hz/Win 11 mới nhất/Đen) (2021)',23000000,10,5,2,6,6,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Gigabyte Gaming AORUS 15P (XD-73S1224GH) (i7 11800H /16GB Ram/1TB SSD/RTX 2060 8G/15.6 inch FHD 240Hz/Win 10/Đen/Balo Aorus) (2021)',50000000,10,10,2,7,6,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus Gaming TUF FX706HCB-HX105W (i9 11400H/8GB RAM/512GB SSD/17.3 FHD 144hz/GTX 1650 4GB/Win11/Đen)',23000000,10,10,2,3,6,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus Gaming TUF FX706HCB-HX105W (i9 11400H/8GB RAM/512GB SSD/17.3 FHD 144hz/RTX 2060 4GB/Win11/Đen)',73000000,10,10,2,3,6,2,3);
-- PC Gaming
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('PC GAMING HACOM LIAN-LI O11DX LIMITED (i3 12700KF/Z690/32GB RAM/1TB SSD/GTX 1650/1050W)',70000000,10,10,1,4,3,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('PC GAMING HACOM PRO 020 (i3 11400F/B560/16GB RAM/500GB SSD/RTX 2060/650W)',30000000,10,10,1,4,3,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('PC GAMING HACOM 031 (i5 10105F/H510/8GB RAM/500GB SSD/GTX 1650/700W)',13000000,10,10,1,4,3,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('PC GAMING HACOM PRO 021 (i5 11000F/B550/16GB RAM/250GB SSD/RTX 2060/650W)',16900000,10,5,1,4,3,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('PC GAMING VANGUARD O11DX LIMITED (i7 12700KF/Z690/32GB RAM/1TB SSD/GTX 1650/1050W)',123000000,10,5,1,4,3,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('PC GAMING SOULREAVER 020 (i7 11400F/B560/16GB RAM/500GB SSD/RTX 2060/650W)',49000000,10,5,1,4,3,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('PC GAMING SPEEDO (i9 10105F/H510/8GB RAM/500GB SSD/GTX 1650/700W)',21000000,10,5,1,4,3,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('PC GAMING LIGHTBEARER 21 (i9 11030U/B550/16GB RAM/250GB SSD/RTX 2060/650W)',22900000,10,5,1,4,3,3,3);
-- PC trạm
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Workstation Dell Precision 3650 (i3-11700/8GB RAM/1TB HDD/GTX 1650/DVDRW/K+M)',28900000,10,5,1,1,2,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Workstation Dell Precision 4443 (i3-11700/12GB RAM/2TB HDD/RTX 2060/DVDRW/K+M)',38900000,10,5,1,1,2,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Workstation Dell Precision 5604 (i5-11700/16GB RAM/2TB HDD/GTX 1650/DVDRW/K+M)',48900000,10,5,1,1,2,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Workstation Dell Precision 6799 (i5-11700/8GB RAM/2TB HDD/RTX 2060/DVDRW/K+M)',58900000,10,15,1,1,2,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Workstation Dell Precision 7022 (i7-11700/16GB RAM/5TB HDD/GTX 1650/DVDRW/K+M)',78900000,10,15,1,1,2,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Workstation Dell Precision 8055 (i7-11700/32GB RAM/10TB HDD/RTX 2060/DVDRW/K+M)',99000000,10,15,1,1,2,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Workstation Dell Precision 10565 (i9-11700/64GB RAM/10TB HDD/GTX 1650/DVDRW/K+M)',110000000,10,15,1,1,2,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Workstation Dell Precision 14050 (i9-11700/128GB RAM/20TB HDD/RTX 2060/DVDRW/K+M)',228900000,10,15,1,1,2,3,3);

-- Laptop Văn phòng
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus VivoBook M3401QA (i3-11700/8GB RAM/512GB SSD/GTX 1650/14 Oled 2.8K/Win11/Xanh)',18900000,10,15,2,3,4,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus Leafbook M3401QA (i3-11700/8GB RAM/512GB SSD/RTX 2060/14 Oled 2.8K/Win11/Xanh)',28900000,10,15,2,3,4,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus WinnieBook M3401QA (i5-11700/8GB RAM/512GB SSD/GTX 1650/14 Oled 2.8K/Win11/Xanh)',38900000,10,5,2,3,4,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus CoolBook M3401QA (i5-11700/8GB RAM/512GB SSD/RTX 2060/14 Oled 2.8K/Win11/Xanh)',48900000,10,5,2,3,4,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus HotBook M3401QA (i7-11700/8GB RAM/512GB SSD/GTX 1650/14 Oled 2.8K/Win11/Xanh)',58900000,10,5,2,3,4,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus WarmBook M3401QA (i7-11700/8GB RAM/512GB SSD/RTX 2060/14 Oled 2.8K/Win11/Xanh)',68900000,10,5,2,3,4,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus MarkBook M3401QA (i9-11700/8GB RAM/512GB SSD/GTX 1650/14 Oled 2.8K/Win11/Xanh)',78900000,10,5,2,3,4,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus DakBook M3401QA (i9-11700/8GB RAM/512GB SSD/RTX 2060/14 Oled 2.8K/Win11/Xanh)',88900000,10,5,2,3,4,4,3);

-- Card đồ họa
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb GTX 1660 T600 (4GB GDDR6, 128-bit, 4x mini DisplayPort)',4900000,10,10,3,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb RTX 2660 T800 (8GB GDDR6, 128-bit, 4x mini DisplayPort)',5900000,10,10,3,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb RTX 3080 T1200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',6900000,10,10,3,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb GTX 1660 T11200 (16GB GDDR6, 128-bit, 4x mini DisplayPort)',7900000,10,10,3,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb RTX 2660 T320 (32GB GDDR6, 128-bit, 4x mini DisplayPort)',14900000,10,10,3,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb RTX 3080 T6600 (64GB GDDR6, 128-bit, 4x mini DisplayPort)',24900000,10,10,5,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb GTX 1660 T11600 (128GB GDDR6, 128-bit, 4x mini DisplayPort)',22900000,10,15,3,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb RTX 2660 T8500 (64GB GDDR6, 256-bit, 4x mini DisplayPort)',17900000,10,15,3,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb RTX 3080 T163600 (128GB GDDR6, 256-bit, 8x mini DisplayPort)',114900000,10,15,3,15,4,3);

-- Dac biet
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus Zenbook S (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',88900000,10,5,2,3,4,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop HP Omen 17 (R7 5800H/8GB RAM/512GB SSD/14 Oled 2.8K/Win11/Xanh)',88900000,10,5,2,2,6,4,3);

-- Bộ vi xử lý
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i3-11500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1200',5500000,10,10,8,16,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i3-12500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1200',6500000,10,10,8,16,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i5-9500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1700',7500000,10,10,8,17,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i5-12500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1700',8500000,10,10,8,17,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i9-9500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1700',9500000,10,10,8,18,4,3);

-- Bo mạch chủ
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B660-I GAMING mini-iTX LG 1200',5500000,10,10,3,19,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B760-I GAMING mini-iTX LG 1300',6500000,10,10,3,19,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B860-I GAMING iTX LG 1700',7500000,10,10,3,19,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B960-I GAMING ATX LG 1700',8500000,10,10,3,20,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B1660-I GAMING ATX LG 1700',15500000,10,10,3,20,4,3);

-- RAM
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Desktop MSI Vengeance LPX (CMK8GX4M1A2666C16 ) 8GB (1x8GB) DDR4 2666MHz',799000,10,10,5,21,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Desktop MSI Vengeance LPX (CMK8GX4M1A2666C16 ) 8GB (1x8GB) DDR5 2666MHz',899000,10,10,5,21,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Desktop MSI Vengeance LPX (CMK8GX4M1A2666C16 ) 16GB (1x8GB) DDR5 2666MHz',999000,10,10,5,21,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Laptop MSI Vengeance LPX (CMK8GX4M1A2666C16 ) 8GB (1x8GB) DDR4 2666MHz',899000,10,10,5,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Laptop MSI Vengeance LPX (CMK8GX4M1A2666C16 ) 16GB (1x8GB) DDR4 2666MHz',990000,10,10,5,22,4,3);

-- Nguồn
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 550W Bronze ( Màu Đen/80 Plus Bronze )',9990000,10,10,3,23,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 650W Silver ( Màu Đen/80 Plus Silver )',10990000,10,10,3,23,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 750W Gold ( Màu Đen/80 Plus Gold )',11990000,10,10,3,23,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 850W Gold ( Màu Đen/80 Plus Gold )',12990000,10,10,3,24,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 1200W Platinum  ( Màu Đen/80 Plus Platinum )',13990000,10,10,3,24,4,3);

-- Vỏ case
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R12 BLACK (Mini Tower/Màu Đen)',709000,10,10,4,25,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R22 BLACK (Mini Tower/Màu Đen)',809000,10,10,4,25,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R32 BLACK (Mid Tower/Màu Đen)',889000,10,10,4,25,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R42 BLACK (Full Tower/Màu Đen)',909000,10,10,4,26,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R82 BLACK (Full Tower/Màu Đen)',1009000,10,10,4,26,4,3);

-- Quạt làm mát
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Fan Case LIAN-LI  ST120 Triple White ARGB 3 in1',990000,10,10,4,27,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Fan Case LIAN-LI  ST220 Triple White ARGB 3 in1',1090000,10,10,4,27,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Fan Case LIAN-LI  ST320 Triple White ARGB 3 in1',1100000,10,10,4,27,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Fan Case LIAN-LI  ST420 Triple White ARGB 3 in1',1200000,10,10,4,27,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Fan Case LIAN-LI  ST520 Triple White ARGB 3 in1',1300000,10,10,4,27,4,3);
-- Tản nhiệt khí
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Tản nhiệt khí MSI Frost Commander 140 Black',1800000,10,10,5,28,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Tản nhiệt khí MSI Frost Commander 200 Black',1900000,10,10,5,28,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Tản nhiệt khí MSI Frost Commander 240 Black',2100000,10,10,5,28,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Tản nhiệt khí MSI Frost Commander 300 Black',2200000,10,10,5,28,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Tản nhiệt khí MSI Frost Commander 340 Black',2690000,10,10,5,28,4,3);

-- Tản nhiệt nước
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Tản nhiệt nước AIO Jonsbo TW6 360 ARGB ( Kèm sẵn Backplate 1700 Jonsbo )',2000000,10,10,4,29,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Tản nhiệt nước AIO Jonsbo TW7 360 ARGB ( Kèm sẵn Backplate 1700 Jonsbo )',2400000,10,10,4,29,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Tản nhiệt nước AIO Jonsbo TW8 360 ARGB ( Kèm sẵn Backplate 1700 Jonsbo )',3100000,10,10,4,29,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Tản nhiệt nước AIO Jonsbo TW9 360 ARGB ( Kèm sẵn Backplate 1700 Jonsbo )',3300000,10,10,4,30,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Tản nhiệt nước AIO Jonsbo TW12 360 ARGB ( Kèm sẵn Backplate 1700 Jonsbo )',4000000,10,10,4,30,4,3);

-- Chuột
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Chuột game dây Asus TUF M4 (USB)',1100000,10,10,3,31,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Chuột game dây Asus TUF M5 (USB)',2100000,10,10,3,31,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Chuột game dây Asus TUF M6 (USB)',3100000,10,10,3,31,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Chuột game không dây Asus TUF M6 Wireless (USB)',4100000,10,10,3,32,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Chuột game không dây Asus TUF M8 Wireless (USB)',5100000,10,10,3,32,4,3);
-- Bàn phím
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Bàn phím giả cơ Logitech G613 Lightsync RGB (USB)',1990000,10,10,9,33,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Bàn phím giả cơ Logitech G813 Lightsync RGB (USB)',2100000,10,10,9,34,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Bàn phím giả cơ Logitech G913 Lightsync RGB (USB)',2200000,10,10,9,34,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Bàn phím cơ Logitech G813 Lightsync RGB GL Clicky (USB)',2900000,10,10,9,35,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Bàn phím cơ Logitech G913 Lightsync RGB GL Clicky (USB)',3100000,10,10,9,35,4,3);
-- Màn hình
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Màn hình Acer VA903-H',1200000,10,10,6,7,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Màn hình Acer VA1203-H',2200000,10,10,6,8,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Màn hình Acer VA1703-H',3200000,10,10,6,9,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Màn hình Acer VA1903-H',4200000,10,10,6,9,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Màn hình Acer VA2903-H',8200000,10,10,6,9,4,3);
-- HDD
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 500GB WD 2.5 inch',870000,10,10,10,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 1TB WD 3.5 inch',900000,10,10,10,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 2TB WD 3.5 inch',1020000,10,10,10,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 3TB WD 3.5 inch',1400000,10,10,10,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 6TB WD 3.5 inch',1600000,10,10,10,10,4,3);
-- SSD
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng SSD 500GB WD',1200000,10,10,10,11,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng SSD 1TB WD',2200000,10,10,10,11,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng SSD 2TB WD',3200000,10,10,10,11,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng SSD 3TB WD',4200000,10,10,10,11,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng SSD 6TB WD',8200000,10,10,10,11,4,3);
-- Tặng phẩm
INSERT INTO `san_pham` (`maSP`, `tenSP`, `giaSP`, `soLuong`, `giamGia`, `maNSX`, `maTLC`, `maBH`, `maTTSP`) VALUES (NULL, 'Chuột không dây Logitech B175', '150000', '10', '0', '3', '36', '1', '1'),
                                                                                                                    (NULL, 'Bàn phím cơ không dây Dareu EK807G TKL', '500000', '10', '0', '5', '36', '1', '1'),
                                                                                                                    (NULL, 'Chuột chơi game có dây Logitech G203 Lightsync', '300000', '10', '0', '1', '36', '1', '1');



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
                                                                        (NULL, '44', '1'),
                                                                        (NULL, '45', '1'),
                                                                        (NULL, '46', '1'),
                                                                        (NULL, '47', '1'),
                                                                        (NULL, '48', '1'),
                                                                        (NULL, '49', '1'),
                                                                        (NULL, '50', '2'),
                                                                        (NULL, '51', '2'),
                                                                        (NULL, '52', '2'),
                                                                        (NULL, '53', '2'),
                                                                        (NULL, '54', '2'),
                                                                        (NULL, '55', '2'),
                                                                        (NULL, '56', '2'),
                                                                        (NULL, '57', '2'),
                                                                        (NULL, '58', '2'),
                                                                        (NULL, '59', '2'),
                                                                        (NULL, '60', '2'),
                                                                        (NULL, '61', '2'),
                                                                        (NULL, '62', '2'),
                                                                        (NULL, '63', '2'),
                                                                        (NULL, '64', '2'),
                                                                        (NULL, '65', '2'),
                                                                        (NULL, '66', '2'),
                                                                        (NULL, '67', '2'),
                                                                        (NULL, '68', '2'),
                                                                        (NULL, '69', '2'),
                                                                        (NULL, '70', '3'),
                                                                        (NULL, '71', '3'),
                                                                        (NULL, '72', '3'),
                                                                        (NULL, '73', '3'),
                                                                        (NULL, '74', '3'),
                                                                        (NULL, '75', '3'),
                                                                        (NULL, '76', '3'),
                                                                        (NULL, '77', '3'),
                                                                        (NULL, '78', '3'),
                                                                        (NULL, '79', '3'),
                                                                        (NULL, '80', '3'),
                                                                        (NULL, '81', '3'),
                                                                        (NULL, '82', '3'),
                                                                        (NULL, '83', '3'),
                                                                        (NULL, '84', '3'),
                                                                        (NULL, '85', '3'),
                                                                        (NULL, '86', '3'),
                                                                        (NULL, '87', '3'),
                                                                        (NULL, '88', '3'),
                                                                        (NULL, '89', '3'),
                                                                        (NULL, '90', '1'),
                                                                        (NULL, '91', '1'),
                                                                        (NULL, '92', '1'),
                                                                        (NULL, '93', '1'),
                                                                        (NULL, '94', '1'),
                                                                        (NULL, '95', '1'),
                                                                        (NULL, '96', '1'),
                                                                        (NULL, '97', '1'),
                                                                        (NULL, '98', '1'),
                                                                        (NULL, '99', '1'),
                                                                        (NULL, '100', '1'),
                                                                        (NULL, '101', '1'),
                                                                        (NULL, '102', '1'),
                                                                        (NULL, '103', '1'),
                                                                        (NULL, '104', '1'),
                                                                        (NULL, '105', '1'),
                                                                        (NULL, '106', '1'),
                                                                        (NULL, '107', '1'),
                                                                        (NULL, '108', '1'),
                                                                        (NULL, '109', '2'),
                                                                        (NULL, '110', '3'),
                                                                        (NULL, '111', '1');

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
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (42,'zenbook.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (43,'omen17.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (109,'chuot-khong-day-logitech-b175.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (110,'ban-phim-co-khong-day-dareu-ek807g-2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (111,'34_1_41.jpg');

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
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (54,'RAM_MSI_1.jpg');
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
INSERT INTO `tinh_trang_hoa_don` (`maTTHD`, `tenTTHD`) VALUES (NULL, 'Chưa duyệt'),
                                                            (NULL, 'Đã huỷ'),
                                                            (NULL, 'Đang lấy hàng'),
                                                            (NULL, 'Đang giao hàng'),
                                                            (NULL, 'Đã nhận hàng');

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
                                                                            (NULL, 1,7,"GTX 1650 8G"),
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
                                                                            (NULL, 2,7,"RTX 2060 8G"),
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

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 3,1,"Intel core i5"),
                                                                            (NULL, 3,2,"PT516-51s-71RW"),
                                                                            (NULL, 3,3,"i5 11800H"),
                                                                            (NULL, 3,4,"64GB RAM"),
                                                                            (NULL, 3,5,"4 khe"),
                                                                            (NULL, 3,6,"256GB"),
                                                                            (NULL, 3,7,"GTX 1650 8G"),
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

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 4,1,"Intel core i5"),
                                                                            (NULL, 4,2,"PT516-51s-71RW"),
                                                                            (NULL, 4,3,"i5 11800H"),
                                                                            (NULL, 4,4,"64GB RAM"),
                                                                            (NULL, 4,5,"4 khe"),
                                                                            (NULL, 4,6,"256GB"),
                                                                            (NULL, 4,7,"RTX 2060 8G"),
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

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 5,1,"Intel core i7"),
                                                                            (NULL, 5,2,"PT516-51s-71RW"),
                                                                            (NULL, 5,3,"i7 11800H"),
                                                                            (NULL, 5,4,"64GB RAM"),
                                                                            (NULL, 5,5,"4 khe"),
                                                                            (NULL, 5,6,"256GB"),
                                                                            (NULL, 5,7,"GTX 1650 8G"),
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

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 6,1,"Intel core i7"),
                                                                            (NULL, 6,2,"PT516-51s-71RW"),
                                                                            (NULL, 6,3,"i7 11800H"),
                                                                            (NULL, 6,4,"64GB RAM"),
                                                                            (NULL, 6,5,"4 khe"),
                                                                            (NULL, 6,6,"256GB"),
                                                                            (NULL, 6,7,"RTX 2060 8G"),
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

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 7,1,"Intel core i9"),
                                                                            (NULL, 7,2,"PT516-51s-71RW"),
                                                                            (NULL, 7,3,"i9 11800H"),
                                                                            (NULL, 7,4,"64GB RAM"),
                                                                            (NULL, 7,5,"4 khe"),
                                                                            (NULL, 7,6,"256GB"),
                                                                            (NULL, 7,7,"GTX 1650 8G"),
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

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 8,1,"Intel core i9"),
                                                                            (NULL, 8,2,"PT516-51s-71RW"),
                                                                            (NULL, 8,3,"i9 11800H"),
                                                                            (NULL, 8,4,"64GB RAM"),
                                                                            (NULL, 8,5,"4 khe"),
                                                                            (NULL, 8,6,"256GB"),
                                                                            (NULL, 8,7,"RTX 2060 8G"),
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

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 42,1,"Intel core i9"),
                                                                            (NULL, 42,2,"PT516-51s-71RW"),
                                                                            (NULL, 42,3,"i9 11800H"),
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

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 43,1,"Intel core i9"),
                                                                            (NULL, 43,2,"PT516-51s-71RW"),
                                                                            (NULL, 43,3,"i9 11800H"),
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

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 9,1,"Intel core i3"),
                                                                            (NULL, 9,2,"PT516-51s-71RW"),
                                                                            (NULL, 9,3,"i3 11800H"),
                                                                            (NULL, 9,4,"64GB RAM"),
                                                                            (NULL, 9,5,"4 khe"),
                                                                            (NULL, 9,6,"256GB"),
                                                                            (NULL, 9,7,"GTX 1650 8G"),
                                                                            (NULL, 9,8,"1TB SSD"),
                                                                            (NULL, 9,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 9,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 9,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 9,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 9,16,"2.2 kg"),
                                                                            (NULL, 9,17,"Win 11 Home"),
                                                                            (NULL, 9,19,"Gigabit"),
                                                                            (NULL, 9,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 10,1,"Intel core i3"),
                                                                            (NULL, 10,2,"PT516-51s-71RW"),
                                                                            (NULL, 10,3,"i3 11800H"),
                                                                            (NULL, 10,4,"64GB RAM"),
                                                                            (NULL, 10,5,"4 khe"),
                                                                            (NULL, 10,6,"256GB"),
                                                                            (NULL, 10,7,"RTX 2060 8G"),
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
                                                                            (NULL, 11,7,"GTX 1650 8G"),
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
                                                                            (NULL, 12,7,"RTX 2060 8G"),
                                                                            (NULL, 12,8,"1TB SSD"),
                                                                            (NULL, 12,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 12,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 12,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 12,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 12,16,"2.2 kg"),
                                                                            (NULL, 12,17,"Win 11 Home"),
                                                                            (NULL, 12,19,"Gigabit"),
                                                                            (NULL, 12,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 13,1,"Intel core i7"),
                                                                            (NULL, 13,2,"PT516-51s-71RW"),
                                                                            (NULL, 13,3,"i7 11800H"),
                                                                            (NULL, 13,4,"64GB RAM"),
                                                                            (NULL, 13,5,"4 khe"),
                                                                            (NULL, 13,6,"256GB"),
                                                                            (NULL, 13,7,"GTX 1650 8G"),
                                                                            (NULL, 13,8,"1TB SSD"),
                                                                            (NULL, 13,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 13,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 13,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 13,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 13,16,"2.2 kg"),
                                                                            (NULL, 13,17,"Win 11 Home"),
                                                                            (NULL, 13,19,"Gigabit"),
                                                                            (NULL, 13,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 14,1,"Intel core i7"),
                                                                            (NULL, 14,2,"PT516-51s-71RW"),
                                                                            (NULL, 14,3,"i7 11800H"),
                                                                            (NULL, 14,4,"64GB RAM"),
                                                                            (NULL, 14,5,"4 khe"),
                                                                            (NULL, 14,6,"256GB"),
                                                                            (NULL, 14,7,"RTX 2060 8G"),
                                                                            (NULL, 14,8,"1TB SSD"),
                                                                            (NULL, 14,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 14,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 14,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 14,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 14,16,"2.2 kg"),
                                                                            (NULL, 14,17,"Win 11 Home"),
                                                                            (NULL, 14,19,"Gigabit"),
                                                                            (NULL, 14,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 15,1,"Intel core i9"),
                                                                            (NULL, 15,2,"PT516-51s-71RW"),
                                                                            (NULL, 15,3,"i9 11800H"),
                                                                            (NULL, 15,4,"64GB RAM"),
                                                                            (NULL, 15,5,"4 khe"),
                                                                            (NULL, 15,6,"256GB"),
                                                                            (NULL, 15,7,"GTX 1650 8G"),
                                                                            (NULL, 15,8,"1TB SSD"),
                                                                            (NULL, 15,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 15,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 15,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 15,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 15,16,"2.2 kg"),
                                                                            (NULL, 15,17,"Win 11 Home"),
                                                                            (NULL, 15,19,"Gigabit"),
                                                                            (NULL, 15,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 16,1,"Intel core i9"),
                                                                            (NULL, 16,2,"PT516-51s-71RW"),
                                                                            (NULL, 16,3,"i9 11800H"),
                                                                            (NULL, 16,4,"64GB RAM"),
                                                                            (NULL, 16,5,"4 khe"),
                                                                            (NULL, 16,6,"256GB"),
                                                                            (NULL, 16,7,"RTX 2060 8G"),
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
                                                                            (NULL, 17,7,"GTX 1650 8G"),
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
                                                                            (NULL, 18,7,"RTX 2060 8G"),
                                                                            (NULL, 18,8,"1TB SSD"),
                                                                            (NULL, 18,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 18,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 18,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 18,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 18,16,"2.2 kg"),
                                                                            (NULL, 18,17,"Win 11 Home"),
                                                                            (NULL, 18,19,"Gigabit"),
                                                                            (NULL, 18,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 19,1,"Intel core i5"),
                                                                            (NULL, 19,2,"PT516-51s-71RW"),
                                                                            (NULL, 19,3,"i5 11800H"),
                                                                            (NULL, 19,4,"64GB RAM"),
                                                                            (NULL, 19,5,"4 khe"),
                                                                            (NULL, 19,6,"256GB"),
                                                                            (NULL, 19,7,"GTX 1650 8G"),
                                                                            (NULL, 19,8,"1TB SSD"),
                                                                            (NULL, 19,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 19,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 19,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 19,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 19,16,"2.2 kg"),
                                                                            (NULL, 19,17,"Win 11 Home"),
                                                                            (NULL, 19,19,"Gigabit"),
                                                                            (NULL, 19,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 20,1,"Intel core i5"),
                                                                            (NULL, 20,2,"PT516-51s-71RW"),
                                                                            (NULL, 20,3,"i5 11800H"),
                                                                            (NULL, 20,4,"64GB RAM"),
                                                                            (NULL, 20,5,"4 khe"),
                                                                            (NULL, 20,6,"256GB"),
                                                                            (NULL, 20,7,"RTX 2060 8G"),
                                                                            (NULL, 20,8,"1TB SSD"),
                                                                            (NULL, 20,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 20,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 20,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 20,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 20,16,"2.2 kg"),
                                                                            (NULL, 20,17,"Win 11 Home"),
                                                                            (NULL, 20,19,"Gigabit"),
                                                                            (NULL, 20,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 21,1,"Intel core i7"),
                                                                            (NULL, 21,2,"PT516-51s-71RW"),
                                                                            (NULL, 21,3,"i7 11800H"),
                                                                            (NULL, 21,4,"64GB RAM"),
                                                                            (NULL, 21,5,"4 khe"),
                                                                            (NULL, 21,6,"256GB"),
                                                                            (NULL, 21,7,"GTX 1650 8G"),
                                                                            (NULL, 21,8,"1TB SSD"),
                                                                            (NULL, 21,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 21,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 21,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 21,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 21,16,"2.2 kg"),
                                                                            (NULL, 21,17,"Win 11 Home"),
                                                                            (NULL, 21,19,"Gigabit"),
                                                                            (NULL, 21,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 22,1,"Intel core i7"),
                                                                            (NULL, 22,2,"PT516-51s-71RW"),
                                                                            (NULL, 22,3,"i7 11800H"),
                                                                            (NULL, 22,4,"64GB RAM"),
                                                                            (NULL, 22,5,"4 khe"),
                                                                            (NULL, 22,6,"256GB"),
                                                                            (NULL, 22,7,"RTX 2060 8G"),
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
                                                                            (NULL, 23,7,"GTX 1650 8G"),
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
                                                                            (NULL, 24,7,"RTX 2060 8G"),
                                                                            (NULL, 24,8,"1TB SSD"),
                                                                            (NULL, 24,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 24,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 24,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 24,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 24,16,"2.2 kg"),
                                                                            (NULL, 24,17,"Win 11 Home"),
                                                                            (NULL, 24,19,"Gigabit"),
                                                                            (NULL, 24,20,"802.11 SX +Bluetooth 5.0");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 25,1,"Intel core i3"),
                                                                            (NULL, 25,2,"PT516-51s-71RW"),
                                                                            (NULL, 25,3,"i3 11800H"),
                                                                            (NULL, 25,4,"64GB RAM"),
                                                                            (NULL, 25,5,"4 khe"),
                                                                            (NULL, 25,6,"256GB"),
                                                                            (NULL, 25,7,"GTX 1650 8G"),
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
                                                                            (NULL, 26,7,"RTX 2060 8G"),
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

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 27,1,"Intel core i5"),
                                                                            (NULL, 27,2,"PT516-51s-71RW"),
                                                                            (NULL, 27,3,"i5 11800H"),
                                                                            (NULL, 27,4,"64GB RAM"),
                                                                            (NULL, 27,5,"4 khe"),
                                                                            (NULL, 27,6,"256GB"),
                                                                            (NULL, 27,7,"GTX 1650 8G"),
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

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 28,1,"Intel core i5"),
                                                                            (NULL, 28,2,"PT516-51s-71RW"),
                                                                            (NULL, 28,3,"i5 11800H"),
                                                                            (NULL, 28,4,"64GB RAM"),
                                                                            (NULL, 28,5,"4 khe"),
                                                                            (NULL, 28,6,"256GB"),
                                                                            (NULL, 28,7,"RTX 2060 8G"),
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

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 29,1,"Intel core i7"),
                                                                            (NULL, 29,2,"PT516-51s-71RW"),
                                                                            (NULL, 29,3,"i7 11800H"),
                                                                            (NULL, 29,4,"64GB RAM"),
                                                                            (NULL, 29,5,"4 khe"),
                                                                            (NULL, 29,6,"256GB"),
                                                                            (NULL, 29,7,"GTX 1650 8G"),
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

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 30,1,"Intel core i7"),
                                                                            (NULL, 30,2,"PT516-51s-71RW"),
                                                                            (NULL, 30,3,"i7 11800H"),
                                                                            (NULL, 30,4,"64GB RAM"),
                                                                            (NULL, 30,5,"4 khe"),
                                                                            (NULL, 30,6,"256GB"),
                                                                            (NULL, 30,7,"RTX 2060 8G"),
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

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 31,1,"Intel core i9"),
                                                                            (NULL, 31,2,"PT516-51s-71RW"),
                                                                            (NULL, 31,3,"i9 11800H"),
                                                                            (NULL, 31,4,"64GB RAM"),
                                                                            (NULL, 31,5,"4 khe"),
                                                                            (NULL, 31,6,"256GB"),
                                                                            (NULL, 31,7,"GTX 1650 8G"),
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

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 32,1,"Intel core i9"),
                                                                            (NULL, 32,2,"PT516-51s-71RW"),
                                                                            (NULL, 32,3,"i9 11800H"),
                                                                            (NULL, 32,4,"64GB RAM"),
                                                                            (NULL, 32,5,"4 khe"),
                                                                            (NULL, 32,6,"256GB"),
                                                                            (NULL, 32,7,"RTX 2060 8G"),
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

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 33,45,"4GB"),
                                                                            (NULL, 33,46,"GTX 1660"),
                                                                            (NULL, 33,47,"1770 MHz");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 34,45,"6Gb"),
                                                                            (NULL, 34,46,"RTX 2060"),
                                                                            (NULL, 34,47,"2170 MHz");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 35,45,"8GB"),
                                                                            (NULL, 35,46,"RTX 3080"),
                                                                            (NULL, 35,47,"2667 MHz");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 36,45,"4GB"),
                                                                            (NULL, 36,46,"GTX 1660"),
                                                                            (NULL, 36,47,"1770 MHz");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 37,45,"6Gb"),
                                                                            (NULL, 37,46,"RTX 2060"),
                                                                            (NULL, 37,47,"2170 MHz");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 38,45,"8GB"),
                                                                            (NULL, 38,46,"RTX 3080"),
                                                                            (NULL, 38,47,"2667 MHz");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 39,45,"4GB"),
                                                                            (NULL, 39,46,"GTX 1660"),
                                                                            (NULL, 39,47,"1770 MHz");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 40,45,"6GB"),
                                                                            (NULL, 40,46,"RTX 2060"),
                                                                            (NULL, 40,47,"2170 MHz");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 41,45,"8GB"),
                                                                            (NULL, 41,46,"RTX 3080"),
                                                                            (NULL, 41,47,"2667 MHz");

-- Bộ vi xử lý
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 44,28,"LGA 1200"),
                                                                            (NULL, 44,29,"4.4 GHz"),
                                                                            (NULL, 44,30,"4"),
                                                                            (NULL, 44,31,"8");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 45,28,"LGA 1200"),
                                                                            (NULL, 45,29,"4.4 GHz"),
                                                                            (NULL, 45,30,"4"),
                                                                            (NULL, 45,31,"8");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 46,28,"LGA 1700"),
                                                                            (NULL, 46,29,"4.8 GHz"),
                                                                            (NULL, 46,30,"8"),
                                                                            (NULL, 46,31,"16");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 47,28,"LGA 1700"),
                                                                            (NULL, 47,29,"4.8 GHz"),
                                                                            (NULL, 47,30,"8"),
                                                                            (NULL, 47,31,"16");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 48,28,"LGA 1700"),
                                                                            (NULL, 48,29,"5.4 GHz"),
                                                                            (NULL, 48,30,"12"),
                                                                            (NULL, 48,31,"24");

-- Bo mạch chủ
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 49,32,"Intel B660"),
                                                                            (NULL, 49,28,"LGA 1200"),
                                                                            (NULL, 49,33,"2"),
                                                                            (NULL, 49,34,"mini-iTX"),
                                                                            (NULL, 49,35,"Bluetooth"),
                                                                            (NULL, 49,39,"2667 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 50,32,"Intel B660"),
                                                                            (NULL, 50,28,"LGA 1200"),
                                                                            (NULL, 50,33,"2"),
                                                                            (NULL, 50,34,"mini-iTX"),
                                                                            (NULL, 50,35,"Bluetooth"),
                                                                            (NULL, 50,39,"3200 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 51,32,"Intel B660"),
                                                                            (NULL, 51,28,"LGA 1700"),
                                                                            (NULL, 51,33,"iTX"),
                                                                            (NULL, 51,34,"4"),
                                                                            (NULL, 51,35,"Bluetooth"),
                                                                            (NULL, 51,39,"2667 max");
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
                                                                            (NULL, 53,39,"3200 max");

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
                                                                            (NULL, 56,38,"8 GB"),
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
                                                                            (NULL, 101,38,"1 TB"),
                                                                            (NULL, 101,41,"7200 rpm"),
                                                                            (NULL, 101,42,"256 MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 102,15,"3.5 inch"),
                                                                            (NULL, 102,38,"2 TB"),
                                                                            (NULL, 102,41,"5600 rpm"),
                                                                            (NULL, 102,42,"256 MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 103,15,"3.5 inch"),
                                                                            (NULL, 103,38,"2 TB"),
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
                                                                            (NULL, 106,38,"１ TB"),
                                                                            (NULL, 106,41,"1,200 MB / 1,600 MB"),
                                                                            (NULL, 106,42,"512MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 107,15,"3.5 inch"),
                                                                            (NULL, 107,38,"2 TB"),
                                                                            (NULL, 107,41,"1,000 MB / 1,200 MB"),
                                                                            (NULL, 107,42,"512MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 108,15,"3.5 inch"),
                                                                            (NULL, 108,38,"2 TB"),
                                                                            (NULL, 108,41,"1,200 MB / 1,600 MB"),
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
                                                                            (NULL, 74,15,"138mm"),
                                                                            (NULL, 74,66,"2");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 75,50,"Dual Tower"),
                                                                            (NULL, 75,15,"138mm"),
                                                                            (NULL, 75,66,"2");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 76,50,"Dual Tower"),
                                                                            (NULL, 76,15,"158mm"),
                                                                            (NULL, 76,66,"2");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 77,50,"Dual Tower"),
                                                                            (NULL, 77,15,"158mm"),
                                                                            (NULL, 77,66,"2");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 78,50,"Dual Tower"),
                                                                            (NULL, 78,15,"198mm"),
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
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 92,62,"Clicky Red Switch"),
                                                                            (NULL, 92,63,"Static Full RGB"),
                                                                            (NULL, 92,50,"Cao Cấp");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 93,62,"Clicky Red Switch"),
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


-- Bảng thể loại voucher
INSERT INTO `the_loai_voucher` (`maTLV`, `tenTLV`) VALUES (NULL, 'Giảm giá tiền mặt'), (NULL, 'Giảm giá phần trăm'), (NULL, 'Tặng phẩm');

-- Bảng voucher
INSERT INTO `voucher` (`maVoucher`, `tenVoucher`, `maTLV`, `giaTri`, `soLuong`, `maSP`) VALUES (NULL, 'Giảm 100.000 VNĐ', '1', '100000', '30', NULL),
                                                                                                (NULL, 'Giảm 200.000 VNĐ', '1', '200000', '30', NULL),
                                                                                                (NULL, 'Giảm 500.000 VNĐ', '1', '500000', '10', NULL),
                                                                                                (NULL, 'Giảm 5%', '2', '5', '20', NULL),
                                                                                                (NULL, 'Giảm 10%', '2', '10', '20', NULL),
                                                                                                (NULL, 'Giảm 15%', '2', '15', '20', NULL),
                                                                                                (NULL, 'Tặng Chuột không dây Logitech B175', '3', '150000', '10', '109'),
                                                                                                (NULL, 'Tặng Bàn phím cơ không dây Dareu EK807G TKL', '3', '500000', '10', '110'),
                                                                                                (NULL, 'Tặng Chuột chơi game có dây Logitech G203 Lightsync', '3', '300000', '10', '111');

-- Bảng sản phẩm voucher
INSERT INTO `san_pham_voucher` (`maSPV`, `maSP`, `maVoucher`, `kichHoat`)
VALUES
(NULL,2,1,1),
(NULL,2,2,1),
(NULL,2,3,0),
(NULL,2,4,1),
(NULL,3,1,1),
(NULL,4,1,1),
(NULL,5,1,1),
(NULL,6,1,1),
(NULL,7,1,1),
(NULL,8,1,1),
(NULL,9,1,1),
(NULL,10,1,1),
(NULL,11,1,1),
(NULL,12,1,1),
(NULL,13,1,1),
(NULL,14,1,1),
(NULL,15,1,1),
(NULL,16,1,1),
(NULL,17,1,1),
(NULL,18,1,1),
(NULL,19,1,1),
(NULL,20,1,1),
(NULL,21,1,1),
(NULL,22,1,1),
(NULL,23,1,1),
(NULL,24,1,1),
(NULL,25,1,1),
(NULL,26,1,1),
(NULL,27,1,1),
(NULL,28,1,1),
(NULL,29,1,1),
(NULL,30,1,1),
(NULL,31,1,1),
(NULL,32,1,1),
(NULL,33,1,1),
(NULL,34,1,1),
(NULL,35,1,1),
(NULL,36,1,1),
(NULL,37,1,1),
(NULL,38,1,1),
(NULL,39,1,1),
(NULL,40,1,1),
(NULL,41,1,1),
(NULL,42,1,1),
(NULL,43,1,1),
(NULL,44,1,1),
(NULL,45,1,1),
(NULL,46,1,1),
(NULL,47,1,1),
(NULL,48,1,1),
(NULL,49,1,1),
(NULL,50,1,1),
(NULL,51,1,1),
(NULL,52,1,1),
(NULL,53,1,1),
(NULL,54,1,1),
(NULL,55,1,1),
(NULL,56,1,1),
(NULL,57,1,1),
(NULL,58,1,1),
(NULL,59,1,1),
(NULL,60,1,1),
(NULL,61,1,1),
(NULL,62,1,1),
(NULL,63,1,1),
(NULL,64,1,1),
(NULL,65,1,1),
(NULL,66,1,1),
(NULL,67,1,1),
(NULL,68,1,1),
(NULL,69,1,1),
(NULL,70,1,1),
(NULL,71,1,1),
(NULL,72,1,1),
(NULL,73,1,1),
(NULL,74,1,1),
(NULL,75,1,1),
(NULL,76,1,1),
(NULL,77,1,1),
(NULL,78,1,1),
(NULL,79,1,1),
(NULL,80,1,1),
(NULL,81,1,1),
(NULL,82,1,1),
(NULL,83,1,1),
(NULL,84,1,1),
(NULL,85,1,1),
(NULL,86,1,1),
(NULL,87,1,1),
(NULL,88,1,1),
(NULL,89,1,1),
(NULL,90,1,1),
(NULL,91,1,1),
(NULL,92,1,1),
(NULL,93,1,1),
(NULL,94,1,1),
(NULL,95,1,1),
(NULL,96,1,1),
(NULL,97,1,1),
(NULL,98,1,1),
(NULL,99,1,1),
(NULL,100,1,1),
(NULL,101,1,1),
(NULL,102,1,1),
(NULL,103,1,1),
(NULL,104,1,1),
(NULL,105,1,1),
(NULL,106,1,1),
(NULL,107,1,1),
(NULL,108,1,1);
-- Bảng nhập kho
INSERT INTO `nhap_kho` (`maNK`, `maNPP`, `ngayNhap`, `maNV`) VALUES (NULL, '1', '2022-08-03 09:59:39.000000', '1'),
                                                                    (NULL, '2', '2022-08-03 09:59:39.000000', '1'),
                                                                    (NULL, '3', '2022-08-03 09:59:39.000000', '1'),
                                                                    (NULL, '1', '2022-08-04 09:59:39.000000', '1'),
                                                                    (NULL, '2', '2022-08-04 09:59:39.000000', '1'),
                                                                    (NULL, '3', '2022-08-04 09:59:39.000000', '1');

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
                                                                                        (NULL, '1', '44', '10', '1000000'),
                                                                                        (NULL, '1', '45', '10', '1000000'),
                                                                                        (NULL, '1', '46', '10', '1000000'),
                                                                                        (NULL, '1', '47', '10', '1000000'),
                                                                                        (NULL, '1', '48', '10', '1000000'),
                                                                                        (NULL, '1', '49', '10', '1000000'),
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
                                                                                        (NULL, '3', '17', '10', '2000000'),
                                                                                        (NULL, '3', '18', '10', '2000000'),
                                                                                        (NULL, '3', '19', '10', '2000000'),
                                                                                        (NULL, '3', '20', '10', '2000000'),
                                                                                        (NULL, '3', '21', '10', '2000000'),
                                                                                        (NULL, '3', '22', '10', '2000000'),
                                                                                        (NULL, '3', '23', '10', '2000000'),
                                                                                        (NULL, '3', '24', '10', '2000000'),
                                                                                        (NULL, '4', '90', '10', '500000'),
                                                                                        (NULL, '4', '91', '10', '500000'),
                                                                                        (NULL, '4', '92', '10', '500000'),
                                                                                        (NULL, '4', '93', '10', '500000'),
                                                                                        (NULL, '4', '94', '10', '500000'),
                                                                                        (NULL, '4', '95', '10', '500000'),
                                                                                        (NULL, '4', '96', '10', '500000'),
                                                                                        (NULL, '4', '97', '10', '500000'),
                                                                                        (NULL, '4', '98', '10', '500000'),
                                                                                        (NULL, '4', '99', '10', '500000'),
                                                                                        (NULL, '4', '100', '10', '500000'),
                                                                                        (NULL, '4', '101', '10', '500000'),
                                                                                        (NULL, '4', '102', '10', '500000'),
                                                                                        (NULL, '4', '103', '10', '500000'),
                                                                                        (NULL, '4', '104', '10', '500000'),
                                                                                        (NULL, '4', '105', '10', '500000'),
                                                                                        (NULL, '4', '106', '10', '500000'),
                                                                                        (NULL, '4', '107', '10', '500000'),
                                                                                        (NULL, '4', '108', '10', '500000'),
                                                                                        (NULL, '1', '109', '10', '500000'),
                                                                                        (NULL, '2', '110', '10', '500000'),
                                                                                        (NULL, '3', '111', '10', '500000'),
                                                                                        (NULL, '5', '50', '10', '600000'),
                                                                                        (NULL, '5', '51', '10', '600000'),
                                                                                        (NULL, '5', '52', '10', '600000'),
                                                                                        (NULL, '5', '53', '10', '600000'),
                                                                                        (NULL, '5', '54', '10', '600000'),
                                                                                        (NULL, '5', '55', '10', '600000'),
                                                                                        (NULL, '5', '56', '10', '600000'),
                                                                                        (NULL, '5', '57', '10', '600000'),
                                                                                        (NULL, '5', '58', '10', '600000'),
                                                                                        (NULL, '5', '59', '10', '600000'),
                                                                                        (NULL, '5', '60', '10', '600000'),
                                                                                        (NULL, '5', '61', '10', '600000'),
                                                                                        (NULL, '5', '62', '10', '600000'),
                                                                                        (NULL, '5', '63', '10', '600000'),
                                                                                        (NULL, '5', '64', '10', '600000'),
                                                                                        (NULL, '5', '65', '10', '600000'),
                                                                                        (NULL, '5', '66', '10', '600000'),
                                                                                        (NULL, '5', '67', '10', '600000'),
                                                                                        (NULL, '5', '68', '10', '600000'),
                                                                                        (NULL, '5', '69', '10', '600000'),
                                                                                        (NULL, '6', '70', '10', '800000'),
                                                                                        (NULL, '6', '71', '10', '800000'),
                                                                                        (NULL, '6', '72', '10', '800000'),
                                                                                        (NULL, '6', '73', '10', '800000'),
                                                                                        (NULL, '6', '74', '10', '800000'),
                                                                                        (NULL, '6', '75', '10', '800000'),
                                                                                        (NULL, '6', '76', '10', '800000'),
                                                                                        (NULL, '6', '77', '10', '800000'),
                                                                                        (NULL, '6', '78', '10', '800000'),
                                                                                        (NULL, '6', '79', '10', '800000'),
                                                                                        (NULL, '6', '80', '10', '800000'),
                                                                                        (NULL, '6', '81', '10', '800000'),
                                                                                        (NULL, '6', '82', '10', '800000'),
                                                                                        (NULL, '6', '83', '10', '800000'),
                                                                                        (NULL, '6', '84', '10', '800000'),
                                                                                        (NULL, '6', '85', '10', '800000'),
                                                                                        (NULL, '6', '86', '10', '800000'),
                                                                                        (NULL, '6', '87', '10', '800000'),
                                                                                        (NULL, '6', '88', '10', '800000'),
                                                                                        (NULL, '6', '89', '10', '800000');


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
                                                                            (NULL, '44', 'i3111', '1', NULL),
                                                                            (NULL, '44', 'i3112', '1', NULL),
                                                                            (NULL, '44', 'i3113', '1', NULL),
                                                                            (NULL, '44', 'i3114', '1', NULL),
                                                                            (NULL, '44', 'i3115', '1', NULL),
                                                                            (NULL, '44', 'i3116', '1', NULL),
                                                                            (NULL, '44', 'i3117', '1', NULL),
                                                                            (NULL, '44', 'i3118', '1', NULL),
                                                                            (NULL, '44', 'i3119', '1', NULL),
                                                                            (NULL, '44', 'i31110', '1', NULL),
                                                                            (NULL, '45', 'i3121', '1', NULL),
                                                                            (NULL, '45', 'i3122', '1', NULL),
                                                                            (NULL, '45', 'i3123', '1', NULL),
                                                                            (NULL, '45', 'i3124', '1', NULL),
                                                                            (NULL, '45', 'i3125', '1', NULL),
                                                                            (NULL, '45', 'i3126', '1', NULL),
                                                                            (NULL, '45', 'i3127', '1', NULL),
                                                                            (NULL, '45', 'i3128', '1', NULL),
                                                                            (NULL, '45', 'i3129', '1', NULL),
                                                                            (NULL, '45', 'i31210', '1', NULL),
                                                                            (NULL, '46', 'i591', '1', NULL),
                                                                            (NULL, '46', 'i592', '1', NULL),
                                                                            (NULL, '46', 'i593', '1', NULL),
                                                                            (NULL, '46', 'i594', '1', NULL),
                                                                            (NULL, '46', 'i595', '1', NULL),
                                                                            (NULL, '46', 'i596', '1', NULL),
                                                                            (NULL, '46', 'i597', '1', NULL),
                                                                            (NULL, '46', 'i598', '1', NULL),
                                                                            (NULL, '46', 'i599', '1', NULL),
                                                                            (NULL, '46', 'i5910', '1', NULL),
                                                                            (NULL, '47', 'i5121', '1', NULL),
                                                                            (NULL, '47', 'i5122', '1', NULL),
                                                                            (NULL, '47', 'i5123', '1', NULL),
                                                                            (NULL, '47', 'i5124', '1', NULL),
                                                                            (NULL, '47', 'i5125', '1', NULL),
                                                                            (NULL, '47', 'i5126', '1', NULL),
                                                                            (NULL, '47', 'i5127', '1', NULL),
                                                                            (NULL, '47', 'i5128', '1', NULL),
                                                                            (NULL, '47', 'i5129', '1', NULL),
                                                                            (NULL, '47', 'i51210', '1', NULL),
                                                                            (NULL, '48', 'i991', '1', NULL),
                                                                            (NULL, '48', 'i992', '1', NULL),
                                                                            (NULL, '48', 'i993', '1', NULL),
                                                                            (NULL, '48', 'i994', '1', NULL),
                                                                            (NULL, '48', 'i995', '1', NULL),
                                                                            (NULL, '48', 'i996', '1', NULL),
                                                                            (NULL, '48', 'i997', '1', NULL),
                                                                            (NULL, '48', 'i998', '1', NULL),
                                                                            (NULL, '48', 'i999', '1', NULL),
                                                                            (NULL, '48', 'i9910', '1', NULL),
                                                                            (NULL, '49', 'B6601', '1', NULL),
                                                                            (NULL, '49', 'B6602', '1', NULL),
                                                                            (NULL, '49', 'B6603', '1', NULL),
                                                                            (NULL, '49', 'B6604', '1', NULL),
                                                                            (NULL, '49', 'B6605', '1', NULL),
                                                                            (NULL, '49', 'B6606', '1', NULL),
                                                                            (NULL, '49', 'B6607', '1', NULL),
                                                                            (NULL, '49', 'B6608', '1', NULL),
                                                                            (NULL, '49', 'B6609', '1', NULL),
                                                                            (NULL, '49', 'B66010', '1', NULL),
                                                                            (NULL, '50', 'B7601', '5', NULL),
                                                                            (NULL, '50', 'B7602', '5', NULL),
                                                                            (NULL, '50', 'B7603', '5', NULL),
                                                                            (NULL, '50', 'B7604', '5', NULL),
                                                                            (NULL, '50', 'B7605', '5', NULL),
                                                                            (NULL, '50', 'B7606', '5', NULL),
                                                                            (NULL, '50', 'B7607', '5', NULL),
                                                                            (NULL, '50', 'B7608', '5', NULL),
                                                                            (NULL, '50', 'B7609', '5', NULL),
                                                                            (NULL, '50', 'B76010', '5', NULL),
                                                                            (NULL, '51', 'B8601', '5', NULL),
                                                                            (NULL, '51', 'B8602', '5', NULL),
                                                                            (NULL, '51', 'B8603', '5', NULL),
                                                                            (NULL, '51', 'B8604', '5', NULL),
                                                                            (NULL, '51', 'B8605', '5', NULL),
                                                                            (NULL, '51', 'B8606', '5', NULL),
                                                                            (NULL, '51', 'B8607', '5', NULL),
                                                                            (NULL, '51', 'B8608', '5', NULL),
                                                                            (NULL, '51', 'B8609', '5', NULL),
                                                                            (NULL, '51', 'B86010', '5', NULL),
                                                                            (NULL, '52', 'B9601', '5', NULL),
                                                                            (NULL, '52', 'B9602', '5', NULL),
                                                                            (NULL, '52', 'B9603', '5', NULL),
                                                                            (NULL, '52', 'B9604', '5', NULL),
                                                                            (NULL, '52', 'B9605', '5', NULL),
                                                                            (NULL, '52', 'B9606', '5', NULL),
                                                                            (NULL, '52', 'B9607', '5', NULL),
                                                                            (NULL, '52', 'B9608', '5', NULL),
                                                                            (NULL, '52', 'B9609', '5', NULL),
                                                                            (NULL, '52', 'B96010', '5', NULL),
                                                                            (NULL, '53', 'B16601', '5', NULL),
                                                                            (NULL, '53', 'B16602', '5', NULL),
                                                                            (NULL, '53', 'B16603', '5', NULL),
                                                                            (NULL, '53', 'B16604', '5', NULL),
                                                                            (NULL, '53', 'B16605', '5', NULL),
                                                                            (NULL, '53', 'B16606', '5', NULL),
                                                                            (NULL, '53', 'B16607', '5', NULL),
                                                                            (NULL, '53', 'B16608', '5', NULL),
                                                                            (NULL, '53', 'B16609', '5', NULL),
                                                                            (NULL, '53', 'B166010', '5', NULL),
                                                                            (NULL, '54', 'D481', '5', NULL),
                                                                            (NULL, '54', 'D482', '5', NULL),
                                                                            (NULL, '54', 'D483', '5', NULL),
                                                                            (NULL, '54', 'D484', '5', NULL),
                                                                            (NULL, '54', 'D485', '5', NULL),
                                                                            (NULL, '54', 'D486', '5', NULL),
                                                                            (NULL, '54', 'D487', '5', NULL),
                                                                            (NULL, '54', 'D488', '5', NULL),
                                                                            (NULL, '54', 'D489', '5', NULL),
                                                                            (NULL, '54', 'D4810', '5', NULL),
                                                                            (NULL, '55', 'D581', '5', NULL),
                                                                            (NULL, '55', 'D582', '5', NULL),
                                                                            (NULL, '55', 'D583', '5', NULL),
                                                                            (NULL, '55', 'D584', '5', NULL),
                                                                            (NULL, '55', 'D585', '5', NULL),
                                                                            (NULL, '55', 'D586', '5', NULL),
                                                                            (NULL, '55', 'D587', '5', NULL),
                                                                            (NULL, '55', 'D588', '5', NULL),
                                                                            (NULL, '55', 'D589', '5', NULL),
                                                                            (NULL, '55', 'D5810', '5', NULL),
                                                                            (NULL, '56', 'D5161', '5', NULL),
                                                                            (NULL, '56', 'D5162', '5', NULL),
                                                                            (NULL, '56', 'D5163', '5', NULL),
                                                                            (NULL, '56', 'D5164', '5', NULL),
                                                                            (NULL, '56', 'D5165', '5', NULL),
                                                                            (NULL, '56', 'D5166', '5', NULL),
                                                                            (NULL, '56', 'D5167', '5', NULL),
                                                                            (NULL, '56', 'D5168', '5', NULL),
                                                                            (NULL, '56', 'D5169', '5', NULL),
                                                                            (NULL, '56', 'D51610', '5', NULL),
                                                                            (NULL, '57', 'L481', '5', NULL),
                                                                            (NULL, '57', 'L482', '5', NULL),
                                                                            (NULL, '57', 'L483', '5', NULL),
                                                                            (NULL, '57', 'L484', '5', NULL),
                                                                            (NULL, '57', 'L485', '5', NULL),
                                                                            (NULL, '57', 'L486', '5', NULL),
                                                                            (NULL, '57', 'L487', '5', NULL),
                                                                            (NULL, '57', 'L488', '5', NULL),
                                                                            (NULL, '57', 'L489', '5', NULL),
                                                                            (NULL, '57', 'L4810', '5', NULL),
                                                                            (NULL, '58', 'L4161', '5', NULL),
                                                                            (NULL, '58', 'L4162', '5', NULL),
                                                                            (NULL, '58', 'L4163', '5', NULL),
                                                                            (NULL, '58', 'L4164', '5', NULL),
                                                                            (NULL, '58', 'L4165', '5', NULL),
                                                                            (NULL, '58', 'L4166', '5', NULL),
                                                                            (NULL, '58', 'L4167', '5', NULL),
                                                                            (NULL, '58', 'L4168', '5', NULL),
                                                                            (NULL, '58', 'L4169', '5', NULL),
                                                                            (NULL, '58', 'L41610', '5', NULL),
                                                                            (NULL, '59', '550W1', '5', NULL),
                                                                            (NULL, '59', '550W2', '5', NULL),
                                                                            (NULL, '59', '550W3', '5', NULL),
                                                                            (NULL, '59', '550W4', '5', NULL),
                                                                            (NULL, '59', '550W5', '5', NULL),
                                                                            (NULL, '59', '550W6', '5', NULL),
                                                                            (NULL, '59', '550W7', '5', NULL),
                                                                            (NULL, '59', '550W8', '5', NULL),
                                                                            (NULL, '59', '550W9', '5', NULL),
                                                                            (NULL, '59', '550W10', '5', NULL),
                                                                            (NULL, '60', '650W1', '5', NULL),
                                                                            (NULL, '60', '650W2', '5', NULL),
                                                                            (NULL, '60', '650W3', '5', NULL),
                                                                            (NULL, '60', '650W4', '5', NULL),
                                                                            (NULL, '60', '650W5', '5', NULL),
                                                                            (NULL, '60', '650W6', '5', NULL),
                                                                            (NULL, '60', '650W7', '5', NULL),
                                                                            (NULL, '60', '650W8', '5', NULL),
                                                                            (NULL, '60', '650W9', '5', NULL),
                                                                            (NULL, '60', '650W10', '5', NULL),
                                                                            (NULL, '61', '750W1', '5', NULL),
                                                                            (NULL, '61', '750W2', '5', NULL),
                                                                            (NULL, '61', '750W3', '5', NULL),
                                                                            (NULL, '61', '750W4', '5', NULL),
                                                                            (NULL, '61', '750W5', '5', NULL),
                                                                            (NULL, '61', '750W6', '5', NULL),
                                                                            (NULL, '61', '750W7', '5', NULL),
                                                                            (NULL, '61', '750W8', '5', NULL),
                                                                            (NULL, '61', '750W9', '5', NULL),
                                                                            (NULL, '61', '750W10', '5', NULL),
                                                                            (NULL, '62', '850W1', '5', NULL),
                                                                            (NULL, '62', '850W2', '5', NULL),
                                                                            (NULL, '62', '850W3', '5', NULL),
                                                                            (NULL, '62', '850W4', '5', NULL),
                                                                            (NULL, '62', '850W5', '5', NULL),
                                                                            (NULL, '62', '850W6', '5', NULL),
                                                                            (NULL, '62', '850W7', '5', NULL),
                                                                            (NULL, '62', '850W8', '5', NULL),
                                                                            (NULL, '62', '850W9', '5', NULL),
                                                                            (NULL, '62', '850W10', '5', NULL),
                                                                            (NULL, '63', '950W1', '5', NULL),
                                                                            (NULL, '63', '950W2', '5', NULL),
                                                                            (NULL, '63', '950W3', '5', NULL),
                                                                            (NULL, '63', '950W4', '5', NULL),
                                                                            (NULL, '63', '950W5', '5', NULL),
                                                                            (NULL, '63', '950W6', '5', NULL),
                                                                            (NULL, '63', '950W7', '5', NULL),
                                                                            (NULL, '63', '950W8', '5', NULL),
                                                                            (NULL, '63', '950W9', '5', NULL),
                                                                            (NULL, '63', '950W10', '5', NULL),
                                                                            (NULL, '64', 'PoR121', '5', NULL),
                                                                            (NULL, '64', 'PoR122', '5', NULL),
                                                                            (NULL, '64', 'PoR123', '5', NULL),
                                                                            (NULL, '64', 'PoR124', '5', NULL),
                                                                            (NULL, '64', 'PoR125', '5', NULL),
                                                                            (NULL, '64', 'PoR126', '5', NULL),
                                                                            (NULL, '64', 'PoR127', '5', NULL),
                                                                            (NULL, '64', 'PoR128', '5', NULL),
                                                                            (NULL, '64', 'PoR129', '5', NULL),
                                                                            (NULL, '64', 'PoR1210', '5', NULL),
                                                                            (NULL, '65', 'PoR221', '5', NULL),
                                                                            (NULL, '65', 'PoR222', '5', NULL),
                                                                            (NULL, '65', 'PoR223', '5', NULL),
                                                                            (NULL, '65', 'PoR224', '5', NULL),
                                                                            (NULL, '65', 'PoR225', '5', NULL),
                                                                            (NULL, '65', 'PoR226', '5', NULL),
                                                                            (NULL, '65', 'PoR227', '5', NULL),
                                                                            (NULL, '65', 'PoR228', '5', NULL),
                                                                            (NULL, '65', 'PoR229', '5', NULL),
                                                                            (NULL, '65', 'PoR2210', '5', NULL),
                                                                            (NULL, '66', 'PoR321', '5', NULL),
                                                                            (NULL, '66', 'PoR322', '5', NULL),
                                                                            (NULL, '66', 'PoR323', '5', NULL),
                                                                            (NULL, '66', 'PoR324', '5', NULL),
                                                                            (NULL, '66', 'PoR325', '5', NULL),
                                                                            (NULL, '66', 'PoR326', '5', NULL),
                                                                            (NULL, '66', 'PoR327', '5', NULL),
                                                                            (NULL, '66', 'PoR328', '5', NULL),
                                                                            (NULL, '66', 'PoR329', '5', NULL),
                                                                            (NULL, '66', 'PoR3210', '5', NULL),
                                                                            (NULL, '67', 'PoR421', '5', NULL),
                                                                            (NULL, '67', 'PoR422', '5', NULL),
                                                                            (NULL, '67', 'PoR423', '5', NULL),
                                                                            (NULL, '67', 'PoR424', '5', NULL),
                                                                            (NULL, '67', 'PoR425', '5', NULL),
                                                                            (NULL, '67', 'PoR426', '5', NULL),
                                                                            (NULL, '67', 'PoR427', '5', NULL),
                                                                            (NULL, '67', 'PoR428', '5', NULL),
                                                                            (NULL, '67', 'PoR429', '5', NULL),
                                                                            (NULL, '67', 'PoR4210', '5', NULL),
                                                                            (NULL, '68', 'PoR821', '5', NULL),
                                                                            (NULL, '68', 'PoR822', '5', NULL),
                                                                            (NULL, '68', 'PoR823', '5', NULL),
                                                                            (NULL, '68', 'PoR824', '5', NULL),
                                                                            (NULL, '68', 'PoR825', '5', NULL),
                                                                            (NULL, '68', 'PoR826', '5', NULL),
                                                                            (NULL, '68', 'PoR827', '5', NULL),
                                                                            (NULL, '68', 'PoR828', '5', NULL),
                                                                            (NULL, '68', 'PoR829', '5', NULL),
                                                                            (NULL, '68', 'PoR8210', '5', NULL),
                                                                            (NULL, '69', 'ST1201', '5', NULL),
                                                                            (NULL, '69', 'ST1202', '5', NULL),
                                                                            (NULL, '69', 'ST1203', '5', NULL),
                                                                            (NULL, '69', 'ST1204', '5', NULL),
                                                                            (NULL, '69', 'ST1205', '5', NULL),
                                                                            (NULL, '69', 'ST1206', '5', NULL),
                                                                            (NULL, '69', 'ST1207', '5', NULL),
                                                                            (NULL, '69', 'ST1208', '5', NULL),
                                                                            (NULL, '69', 'ST1209', '5', NULL),
                                                                            (NULL, '69', 'ST12010', '5', NULL),
                                                                            (NULL, '70', 'ST2201', '6', NULL),
                                                                            (NULL, '70', 'ST2202', '6', NULL),
                                                                            (NULL, '70', 'ST2203', '6', NULL),
                                                                            (NULL, '70', 'ST2204', '6', NULL),
                                                                            (NULL, '70', 'ST2205', '6', NULL),
                                                                            (NULL, '70', 'ST2206', '6', NULL),
                                                                            (NULL, '70', 'ST2207', '6', NULL),
                                                                            (NULL, '70', 'ST2208', '6', NULL),
                                                                            (NULL, '70', 'ST2209', '6', NULL),
                                                                            (NULL, '70', 'ST22010', '6', NULL),
                                                                            (NULL, '71', 'ST3201', '6', NULL),
                                                                            (NULL, '71', 'ST3202', '6', NULL),
                                                                            (NULL, '71', 'ST3203', '6', NULL),
                                                                            (NULL, '71', 'ST3204', '6', NULL),
                                                                            (NULL, '71', 'ST3205', '6', NULL),
                                                                            (NULL, '71', 'ST3206', '6', NULL),
                                                                            (NULL, '71', 'ST3207', '6', NULL),
                                                                            (NULL, '71', 'ST3208', '6', NULL),
                                                                            (NULL, '71', 'ST3209', '6', NULL),
                                                                            (NULL, '71', 'ST32010', '6', NULL),
                                                                            (NULL, '72', 'ST4201', '6', NULL),
                                                                            (NULL, '72', 'ST4202', '6', NULL),
                                                                            (NULL, '72', 'ST4203', '6', NULL),
                                                                            (NULL, '72', 'ST4204', '6', NULL),
                                                                            (NULL, '72', 'ST4205', '6', NULL),
                                                                            (NULL, '72', 'ST4206', '6', NULL),
                                                                            (NULL, '72', 'ST4207', '6', NULL),
                                                                            (NULL, '72', 'ST4208', '6', NULL),
                                                                            (NULL, '72', 'ST4209', '6', NULL),
                                                                            (NULL, '72', 'ST42010', '6', NULL),
                                                                            (NULL, '73', 'ST5201', '6', NULL),
                                                                            (NULL, '73', 'ST5202', '6', NULL),
                                                                            (NULL, '73', 'ST5203', '6', NULL),
                                                                            (NULL, '73', 'ST5204', '6', NULL),
                                                                            (NULL, '73', 'ST5205', '6', NULL),
                                                                            (NULL, '73', 'ST5206', '6', NULL),
                                                                            (NULL, '73', 'ST5207', '6', NULL),
                                                                            (NULL, '73', 'ST5208', '6', NULL),
                                                                            (NULL, '73', 'ST5209', '6', NULL),
                                                                            (NULL, '73', 'ST52010', '6', NULL),
                                                                            (NULL, '74', 'Com1401', '6', NULL),
                                                                            (NULL, '74', 'Com1402', '6', NULL),
                                                                            (NULL, '74', 'Com1403', '6', NULL),
                                                                            (NULL, '74', 'Com1404', '6', NULL),
                                                                            (NULL, '74', 'Com1405', '6', NULL),
                                                                            (NULL, '74', 'Com1406', '6', NULL),
                                                                            (NULL, '74', 'Com1407', '6', NULL),
                                                                            (NULL, '74', 'Com1408', '6', NULL),
                                                                            (NULL, '74', 'Com1409', '6', NULL),
                                                                            (NULL, '74', 'Com14010', '6', NULL),
                                                                            (NULL, '75', 'Com2001', '6', NULL),
                                                                            (NULL, '75', 'Com2002', '6', NULL),
                                                                            (NULL, '75', 'Com2003', '6', NULL),
                                                                            (NULL, '75', 'Com2004', '6', NULL),
                                                                            (NULL, '75', 'Com2005', '6', NULL),
                                                                            (NULL, '75', 'Com2006', '6', NULL),
                                                                            (NULL, '75', 'Com2007', '6', NULL),
                                                                            (NULL, '75', 'Com2008', '6', NULL),
                                                                            (NULL, '75', 'Com2009', '6', NULL),
                                                                            (NULL, '75', 'Com20010', '6', NULL),
                                                                            (NULL, '76', 'Com2401', '6', NULL),
                                                                            (NULL, '76', 'Com2402', '6', NULL),
                                                                            (NULL, '76', 'Com2403', '6', NULL),
                                                                            (NULL, '76', 'Com2404', '6', NULL),
                                                                            (NULL, '76', 'Com2405', '6', NULL),
                                                                            (NULL, '76', 'Com2406', '6', NULL),
                                                                            (NULL, '76', 'Com2407', '6', NULL),
                                                                            (NULL, '76', 'Com2408', '6', NULL),
                                                                            (NULL, '76', 'Com2409', '6', NULL),
                                                                            (NULL, '76', 'Com24010', '6', NULL),
                                                                            (NULL, '77', 'Com3001', '6', NULL),
                                                                            (NULL, '77', 'Com3002', '6', NULL),
                                                                            (NULL, '77', 'Com3003', '6', NULL),
                                                                            (NULL, '77', 'Com3004', '6', NULL),
                                                                            (NULL, '77', 'Com3005', '6', NULL),
                                                                            (NULL, '77', 'Com3006', '6', NULL),
                                                                            (NULL, '77', 'Com3007', '6', NULL),
                                                                            (NULL, '77', 'Com3008', '6', NULL),
                                                                            (NULL, '77', 'Com3009', '6', NULL),
                                                                            (NULL, '77', 'Com30010', '6', NULL),
                                                                            (NULL, '78', 'Com3401', '6', NULL),
                                                                            (NULL, '78', 'Com3402', '6', NULL),
                                                                            (NULL, '78', 'Com3403', '6', NULL),
                                                                            (NULL, '78', 'Com3404', '6', NULL),
                                                                            (NULL, '78', 'Com3405', '6', NULL),
                                                                            (NULL, '78', 'Com3406', '6', NULL),
                                                                            (NULL, '78', 'Com3407', '6', NULL),
                                                                            (NULL, '78', 'Com3408', '6', NULL),
                                                                            (NULL, '78', 'Com3409', '6', NULL),
                                                                            (NULL, '78', 'Com34010', '6', NULL),
                                                                            (NULL, '79', 'TW61', '6', NULL),
                                                                            (NULL, '79', 'TW62', '6', NULL),
                                                                            (NULL, '79', 'TW63', '6', NULL),
                                                                            (NULL, '79', 'TW64', '6', NULL),
                                                                            (NULL, '79', 'TW65', '6', NULL),
                                                                            (NULL, '79', 'TW66', '6', NULL),
                                                                            (NULL, '79', 'TW67', '6', NULL),
                                                                            (NULL, '79', 'TW68', '6', NULL),
                                                                            (NULL, '79', 'TW69', '6', NULL),
                                                                            (NULL, '79', 'TW610', '6', NULL),
                                                                            (NULL, '80', 'TW71', '6', NULL),
                                                                            (NULL, '80', 'TW72', '6', NULL),
                                                                            (NULL, '80', 'TW73', '6', NULL),
                                                                            (NULL, '80', 'TW74', '6', NULL),
                                                                            (NULL, '80', 'TW75', '6', NULL),
                                                                            (NULL, '80', 'TW76', '6', NULL),
                                                                            (NULL, '80', 'TW77', '6', NULL),
                                                                            (NULL, '80', 'TW78', '6', NULL),
                                                                            (NULL, '80', 'TW79', '6', NULL),
                                                                            (NULL, '80', 'TW710', '6', NULL),
                                                                            (NULL, '81', 'TW81', '6', NULL),
                                                                            (NULL, '81', 'TW82', '6', NULL),
                                                                            (NULL, '81', 'TW83', '6', NULL),
                                                                            (NULL, '81', 'TW84', '6', NULL),
                                                                            (NULL, '81', 'TW85', '6', NULL),
                                                                            (NULL, '81', 'TW86', '6', NULL),
                                                                            (NULL, '81', 'TW87', '6', NULL),
                                                                            (NULL, '81', 'TW88', '6', NULL),
                                                                            (NULL, '81', 'TW89', '6', NULL),
                                                                            (NULL, '81', 'TW810', '6', NULL),
                                                                            (NULL, '82', 'TW91', '6', NULL),
                                                                            (NULL, '82', 'TW92', '6', NULL),
                                                                            (NULL, '82', 'TW93', '6', NULL),
                                                                            (NULL, '82', 'TW94', '6', NULL),
                                                                            (NULL, '82', 'TW95', '6', NULL),
                                                                            (NULL, '82', 'TW96', '6', NULL),
                                                                            (NULL, '82', 'TW97', '6', NULL),
                                                                            (NULL, '82', 'TW98', '6', NULL),
                                                                            (NULL, '82', 'TW99', '6', NULL),
                                                                            (NULL, '82', 'TW910', '6', NULL),
                                                                            (NULL, '83', 'TW121', '6', NULL),
                                                                            (NULL, '83', 'TW122', '6', NULL),
                                                                            (NULL, '83', 'TW123', '6', NULL),
                                                                            (NULL, '83', 'TW124', '6', NULL),
                                                                            (NULL, '83', 'TW125', '6', NULL),
                                                                            (NULL, '83', 'TW126', '6', NULL),
                                                                            (NULL, '83', 'TW127', '6', NULL),
                                                                            (NULL, '83', 'TW128', '6', NULL),
                                                                            (NULL, '83', 'TW129', '6', NULL),
                                                                            (NULL, '83', 'TW1210', '6', NULL),
                                                                            (NULL, '84', 'TUFm41', '6', NULL),
                                                                            (NULL, '84', 'TUFm42', '6', NULL),
                                                                            (NULL, '84', 'TUFm43', '6', NULL),
                                                                            (NULL, '84', 'TUFm44', '6', NULL),
                                                                            (NULL, '84', 'TUFm45', '6', NULL),
                                                                            (NULL, '84', 'TUFm46', '6', NULL),
                                                                            (NULL, '84', 'TUFm47', '6', NULL),
                                                                            (NULL, '84', 'TUFm48', '6', NULL),
                                                                            (NULL, '84', 'TUFm49', '6', NULL),
                                                                            (NULL, '84', 'TUFm410', '6', NULL),
                                                                            (NULL, '85', 'TUFm51', '6', NULL),
                                                                            (NULL, '85', 'TUFm52', '6', NULL),
                                                                            (NULL, '85', 'TUFm53', '6', NULL),
                                                                            (NULL, '85', 'TUFm54', '6', NULL),
                                                                            (NULL, '85', 'TUFm55', '6', NULL),
                                                                            (NULL, '85', 'TUFm56', '6', NULL),
                                                                            (NULL, '85', 'TUFm57', '6', NULL),
                                                                            (NULL, '85', 'TUFm58', '6', NULL),
                                                                            (NULL, '85', 'TUFm59', '6', NULL),
                                                                            (NULL, '85', 'TUFm510', '6', NULL),
                                                                            (NULL, '86', 'TUFm61', '6', NULL),
                                                                            (NULL, '86', 'TUFm62', '6', NULL),
                                                                            (NULL, '86', 'TUFm63', '6', NULL),
                                                                            (NULL, '86', 'TUFm64', '6', NULL),
                                                                            (NULL, '86', 'TUFm65', '6', NULL),
                                                                            (NULL, '86', 'TUFm66', '6', NULL),
                                                                            (NULL, '86', 'TUFm67', '6', NULL),
                                                                            (NULL, '86', 'TUFm68', '6', NULL),
                                                                            (NULL, '86', 'TUFm69', '6', NULL),
                                                                            (NULL, '86', 'TUFm610', '6', NULL),
                                                                            (NULL, '87', 'WLTUFm61', '6', NULL),
                                                                            (NULL, '87', 'WLTUFm62', '6', NULL),
                                                                            (NULL, '87', 'WLTUFm63', '6', NULL),
                                                                            (NULL, '87', 'WLTUFm64', '6', NULL),
                                                                            (NULL, '87', 'WLTUFm65', '6', NULL),
                                                                            (NULL, '87', 'WLTUFm66', '6', NULL),
                                                                            (NULL, '87', 'WLTUFm67', '6', NULL),
                                                                            (NULL, '87', 'WLTUFm68', '6', NULL),
                                                                            (NULL, '87', 'WLTUFm69', '6', NULL),
                                                                            (NULL, '87', 'WLTUFm610', '6', NULL),
                                                                            (NULL, '88', 'WLTUFm81', '6', NULL),
                                                                            (NULL, '88', 'WLTUFm82', '6', NULL),
                                                                            (NULL, '88', 'WLTUFm83', '6', NULL),
                                                                            (NULL, '88', 'WLTUFm84', '6', NULL),
                                                                            (NULL, '88', 'WLTUFm85', '6', NULL),
                                                                            (NULL, '88', 'WLTUFm86', '6', NULL),
                                                                            (NULL, '88', 'WLTUFm87', '6', NULL),
                                                                            (NULL, '88', 'WLTUFm88', '6', NULL),
                                                                            (NULL, '88', 'WLTUFm89', '6', NULL),
                                                                            (NULL, '88', 'WLTUFm810', '6', NULL),
                                                                            (NULL, '89', 'LogG8131', '6', NULL),
                                                                            (NULL, '89', 'LogG8132', '6', NULL),
                                                                            (NULL, '89', 'LogG8133', '6', NULL),
                                                                            (NULL, '89', 'LogG8134', '6', NULL),
                                                                            (NULL, '89', 'LogG8135', '6', NULL),
                                                                            (NULL, '89', 'LogG8136', '6', NULL),
                                                                            (NULL, '89', 'LogG8137', '6', NULL),
                                                                            (NULL, '89', 'LogG8138', '6', NULL),
                                                                            (NULL, '89', 'LogG8139', '6', NULL),
                                                                            (NULL, '89', 'LogG81310', '6', NULL),
                                                                            (NULL, '90', 'FLogG8131', '4', NULL),
                                                                            (NULL, '90', 'FLogG8132', '4', NULL),
                                                                            (NULL, '90', 'FLogG8133', '4', NULL),
                                                                            (NULL, '90', 'FLogG8134', '4', NULL),
                                                                            (NULL, '90', 'FLogG8135', '4', NULL),
                                                                            (NULL, '90', 'FLogG8136', '4', NULL),
                                                                            (NULL, '90', 'FLogG8137', '4', NULL),
                                                                            (NULL, '90', 'FLogG8138', '4', NULL),
                                                                            (NULL, '90', 'FLogG8139', '4', NULL),
                                                                            (NULL, '90', 'FLogG81310', '4', NULL),
                                                                            (NULL, '91', 'FLogG9131', '4', NULL),
                                                                            (NULL, '91', 'FLogG9132', '4', NULL),
                                                                            (NULL, '91', 'FLogG9133', '4', NULL),
                                                                            (NULL, '91', 'FLogG9134', '4', NULL),
                                                                            (NULL, '91', 'FLogG9135', '4', NULL),
                                                                            (NULL, '91', 'FLogG9136', '4', NULL),
                                                                            (NULL, '91', 'FLogG9137', '4', NULL),
                                                                            (NULL, '91', 'FLogG9138', '4', NULL),
                                                                            (NULL, '91', 'FLogG9139', '4', NULL),
                                                                            (NULL, '91', 'FLogG91310', '4', NULL),
                                                                            (NULL, '92', 'LogG813C1', '4', NULL),
                                                                            (NULL, '92', 'LogG813C2', '4', NULL),
                                                                            (NULL, '92', 'LogG813C3', '4', NULL),
                                                                            (NULL, '92', 'LogG813C4', '4', NULL),
                                                                            (NULL, '92', 'LogG813C5', '4', NULL),
                                                                            (NULL, '92', 'LogG813C6', '4', NULL),
                                                                            (NULL, '92', 'LogG813C7', '4', NULL),
                                                                            (NULL, '92', 'LogG813C8', '4', NULL),
                                                                            (NULL, '92', 'LogG813C9', '4', NULL),
                                                                            (NULL, '92', 'LogG813C10', '4', NULL),
                                                                            (NULL, '93', 'LogG913C1', '4', NULL),
                                                                            (NULL, '93', 'LogG913C2', '4', NULL),
                                                                            (NULL, '93', 'LogG913C3', '4', NULL),
                                                                            (NULL, '93', 'LogG913C4', '4', NULL),
                                                                            (NULL, '93', 'LogG913C5', '4', NULL),
                                                                            (NULL, '93', 'LogG913C6', '4', NULL),
                                                                            (NULL, '93', 'LogG913C7', '4', NULL),
                                                                            (NULL, '93', 'LogG913C8', '4', NULL),
                                                                            (NULL, '93', 'LogG913C9', '4', NULL),
                                                                            (NULL, '93', 'LogG913C10', '4', NULL),
                                                                            (NULL, '94', 'VA9031', '4', NULL),
                                                                            (NULL, '94', 'VA9032', '4', NULL),
                                                                            (NULL, '94', 'VA9033', '4', NULL),
                                                                            (NULL, '94', 'VA9034', '4', NULL),
                                                                            (NULL, '94', 'VA9035', '4', NULL),
                                                                            (NULL, '94', 'VA9036', '4', NULL),
                                                                            (NULL, '94', 'VA9037', '4', NULL),
                                                                            (NULL, '94', 'VA9038', '4', NULL),
                                                                            (NULL, '94', 'VA9039', '4', NULL),
                                                                            (NULL, '94', 'VA90310', '4', NULL),
                                                                            (NULL, '95', 'VA12031', '4', NULL),
                                                                            (NULL, '95', 'VA12032', '4', NULL),
                                                                            (NULL, '95', 'VA12033', '4', NULL),
                                                                            (NULL, '95', 'VA12034', '4', NULL),
                                                                            (NULL, '95', 'VA12035', '4', NULL),
                                                                            (NULL, '95', 'VA12036', '4', NULL),
                                                                            (NULL, '95', 'VA12037', '4', NULL),
                                                                            (NULL, '95', 'VA12038', '4', NULL),
                                                                            (NULL, '95', 'VA12039', '4', NULL),
                                                                            (NULL, '95', 'VA120310', '4', NULL),
                                                                            (NULL, '96', 'VA17031', '4', NULL),
                                                                            (NULL, '96', 'VA17032', '4', NULL),
                                                                            (NULL, '96', 'VA17033', '4', NULL),
                                                                            (NULL, '96', 'VA17034', '4', NULL),
                                                                            (NULL, '96', 'VA17035', '4', NULL),
                                                                            (NULL, '96', 'VA17036', '4', NULL),
                                                                            (NULL, '96', 'VA17037', '4', NULL),
                                                                            (NULL, '96', 'VA17038', '4', NULL),
                                                                            (NULL, '96', 'VA17039', '4', NULL),
                                                                            (NULL, '96', 'VA170310', '4', NULL),
                                                                            (NULL, '97', 'VA19031', '4', NULL),
                                                                            (NULL, '97', 'VA19032', '4', NULL),
                                                                            (NULL, '97', 'VA19033', '4', NULL),
                                                                            (NULL, '97', 'VA19034', '4', NULL),
                                                                            (NULL, '97', 'VA19035', '4', NULL),
                                                                            (NULL, '97', 'VA19036', '4', NULL),
                                                                            (NULL, '97', 'VA19037', '4', NULL),
                                                                            (NULL, '97', 'VA19038', '4', NULL),
                                                                            (NULL, '97', 'VA19039', '4', NULL),
                                                                            (NULL, '97', 'VA190310', '4', NULL),
                                                                            (NULL, '98', 'VA29031', '4', NULL),
                                                                            (NULL, '98', 'VA29032', '4', NULL),
                                                                            (NULL, '98', 'VA29033', '4', NULL),
                                                                            (NULL, '98', 'VA29034', '4', NULL),
                                                                            (NULL, '98', 'VA29035', '4', NULL),
                                                                            (NULL, '98', 'VA29036', '4', NULL),
                                                                            (NULL, '98', 'VA29037', '4', NULL),
                                                                            (NULL, '98', 'VA29038', '4', NULL),
                                                                            (NULL, '98', 'VA29039', '4', NULL),
                                                                            (NULL, '98', 'VA290310', '4', NULL),
                                                                            (NULL, '99', 'H5001', '4', NULL),
                                                                            (NULL, '99', 'H5002', '4', NULL),
                                                                            (NULL, '99', 'H5003', '4', NULL),
                                                                            (NULL, '99', 'H5004', '4', NULL),
                                                                            (NULL, '99', 'H5005', '4', NULL),
                                                                            (NULL, '99', 'H5006', '4', NULL),
                                                                            (NULL, '99', 'H5007', '4', NULL),
                                                                            (NULL, '99', 'H5008', '4', NULL),
                                                                            (NULL, '99', 'H5009', '4', NULL),
                                                                            (NULL, '99', 'H50010', '4', NULL),
                                                                            (NULL, '100', 'H10001', '4', NULL),
                                                                            (NULL, '100', 'H10002', '4', NULL),
                                                                            (NULL, '100', 'H10003', '4', NULL),
                                                                            (NULL, '100', 'H10004', '4', NULL),
                                                                            (NULL, '100', 'H10005', '4', NULL),
                                                                            (NULL, '100', 'H10006', '4', NULL),
                                                                            (NULL, '100', 'H10007', '4', NULL),
                                                                            (NULL, '100', 'H10008', '4', NULL),
                                                                            (NULL, '100', 'H10009', '4', NULL),
                                                                            (NULL, '100', 'H100010', '4', NULL),
                                                                            (NULL, '101', 'H20001', '4', NULL),
                                                                            (NULL, '101', 'H20002', '4', NULL),
                                                                            (NULL, '101', 'H20003', '4', NULL),
                                                                            (NULL, '101', 'H20004', '4', NULL),
                                                                            (NULL, '101', 'H20005', '4', NULL),
                                                                            (NULL, '101', 'H20006', '4', NULL),
                                                                            (NULL, '101', 'H20007', '4', NULL),
                                                                            (NULL, '101', 'H20008', '4', NULL),
                                                                            (NULL, '101', 'H20009', '4', NULL),
                                                                            (NULL, '101', 'H200010', '4', NULL),
                                                                            (NULL, '102', 'H30001', '4', NULL),
                                                                            (NULL, '102', 'H30002', '4', NULL),
                                                                            (NULL, '102', 'H30003', '4', NULL),
                                                                            (NULL, '102', 'H30004', '4', NULL),
                                                                            (NULL, '102', 'H30005', '4', NULL),
                                                                            (NULL, '102', 'H30006', '4', NULL),
                                                                            (NULL, '102', 'H30007', '4', NULL),
                                                                            (NULL, '102', 'H30008', '4', NULL),
                                                                            (NULL, '102', 'H30009', '4', NULL),
                                                                            (NULL, '102', 'H300010', '4', NULL),
                                                                            (NULL, '103', 'H60001', '4', NULL),
                                                                            (NULL, '103', 'H60002', '4', NULL),
                                                                            (NULL, '103', 'H60003', '4', NULL),
                                                                            (NULL, '103', 'H60004', '4', NULL),
                                                                            (NULL, '103', 'H60005', '4', NULL),
                                                                            (NULL, '103', 'H60006', '4', NULL),
                                                                            (NULL, '103', 'H60007', '4', NULL),
                                                                            (NULL, '103', 'H60008', '4', NULL),
                                                                            (NULL, '103', 'H60009', '4', NULL),
                                                                            (NULL, '103', 'H600010', '4', NULL),
                                                                            (NULL, '104', 'S5001', '4', NULL),
                                                                            (NULL, '104', 'S5002', '4', NULL),
                                                                            (NULL, '104', 'S5003', '4', NULL),
                                                                            (NULL, '104', 'S5004', '4', NULL),
                                                                            (NULL, '104', 'S5005', '4', NULL),
                                                                            (NULL, '104', 'S5006', '4', NULL),
                                                                            (NULL, '104', 'S5007', '4', NULL),
                                                                            (NULL, '104', 'S5008', '4', NULL),
                                                                            (NULL, '104', 'S5009', '4', NULL),
                                                                            (NULL, '104', 'S50010', '4', NULL),
                                                                            (NULL, '105', 'S10001', '4', NULL),
                                                                            (NULL, '105', 'S10002', '4', NULL),
                                                                            (NULL, '105', 'S10003', '4', NULL),
                                                                            (NULL, '105', 'S10004', '4', NULL),
                                                                            (NULL, '105', 'S10005', '4', NULL),
                                                                            (NULL, '105', 'S10006', '4', NULL),
                                                                            (NULL, '105', 'S10007', '4', NULL),
                                                                            (NULL, '105', 'S10008', '4', NULL),
                                                                            (NULL, '105', 'S10009', '4', NULL),
                                                                            (NULL, '105', 'S100010', '4', NULL),
                                                                            (NULL, '106', 'S20001', '4', NULL),
                                                                            (NULL, '106', 'S20002', '4', NULL),
                                                                            (NULL, '106', 'S20003', '4', NULL),
                                                                            (NULL, '106', 'S20004', '4', NULL),
                                                                            (NULL, '106', 'S20005', '4', NULL),
                                                                            (NULL, '106', 'S20006', '4', NULL),
                                                                            (NULL, '106', 'S20007', '4', NULL),
                                                                            (NULL, '106', 'S20008', '4', NULL),
                                                                            (NULL, '106', 'S20009', '4', NULL),
                                                                            (NULL, '106', 'S200010', '4', NULL),
                                                                            (NULL, '107', 'S30001', '4', NULL),
                                                                            (NULL, '107', 'S30002', '4', NULL),
                                                                            (NULL, '107', 'S30003', '4', NULL),
                                                                            (NULL, '107', 'S30004', '4', NULL),
                                                                            (NULL, '107', 'S30005', '4', NULL),
                                                                            (NULL, '107', 'S30006', '4', NULL),
                                                                            (NULL, '107', 'S30007', '4', NULL),
                                                                            (NULL, '107', 'S30008', '4', NULL),
                                                                            (NULL, '107', 'S30009', '4', NULL),
                                                                            (NULL, '107', 'S300010', '4', NULL),
                                                                            (NULL, '108', 'S60001', '4', NULL),
                                                                            (NULL, '108', 'S60002', '4', NULL),
                                                                            (NULL, '108', 'S60003', '4', NULL),
                                                                            (NULL, '108', 'S60004', '4', NULL),
                                                                            (NULL, '108', 'S60005', '4', NULL),
                                                                            (NULL, '108', 'S60006', '4', NULL),
                                                                            (NULL, '108', 'S60007', '4', NULL),
                                                                            (NULL, '108', 'S60008', '4', NULL),
                                                                            (NULL, '108', 'S60009', '4', NULL),
                                                                            (NULL, '108', 'S600010', '4', NULL),
                                                                            (NULL, '109', 'QT101', '2', NULL),
                                                                            (NULL, '109', 'QT102', '2', NULL),
                                                                            (NULL, '109', 'QT103', '2', NULL),
                                                                            (NULL, '109', 'QT104', '2', NULL),
                                                                            (NULL, '109', 'QT105', '2', NULL),
                                                                            (NULL, '109', 'QT106', '2', NULL),
                                                                            (NULL, '109', 'QT107', '2', NULL),
                                                                            (NULL, '109', 'QT108', '2', NULL),
                                                                            (NULL, '109', 'QT109', '2', NULL),
                                                                            (NULL, '109', 'QT1010', '2', NULL),
                                                                            (NULL, '110', 'QT201', '3', NULL),
                                                                            (NULL, '110', 'QT202', '3', NULL),
                                                                            (NULL, '110', 'QT203', '3', NULL),
                                                                            (NULL, '110', 'QT204', '3', NULL),
                                                                            (NULL, '110', 'QT205', '3', NULL),
                                                                            (NULL, '110', 'QT206', '3', NULL),
                                                                            (NULL, '110', 'QT207', '3', NULL),
                                                                            (NULL, '110', 'QT208', '3', NULL),
                                                                            (NULL, '110', 'QT209', '3', NULL),
                                                                            (NULL, '110', 'QT2010', '3', NULL),
                                                                            (NULL, '111', 'QT301', '1', NULL),
                                                                            (NULL, '111', 'QT302', '1', NULL),
                                                                            (NULL, '111', 'QT303', '1', NULL),
                                                                            (NULL, '111', 'QT304', '1', NULL),
                                                                            (NULL, '111', 'QT305', '1', NULL),
                                                                            (NULL, '111', 'QT306', '1', NULL),
                                                                            (NULL, '111', 'QT307', '1', NULL),
                                                                            (NULL, '111', 'QT308', '1', NULL),
                                                                            (NULL, '111', 'QT309', '1', NULL),
                                                                            (NULL, '111', 'QT3010', '1', NULL);

-- -- Hoá đơn
INSERT INTO `hoa_don` (`maHD`, `maKH`, `maNV`, `ngayTao`, `tenKH`, `soDienThoai`, `diaChi`, `maPTTT`, `maTTHD`) VALUES (NULL, '6', NULL, '2022-08-17 11:29:41.000000', 'Nguyễn Văn A', '0123456789', 'Hà Nội', '1', '1'),
                                                                                                                            (NULL, '6', NULL, '2022-08-17 11:29:42.000000', 'Nguyễn Văn A', '0123456789', 'Hà Nội', '2', '1');

-- -- Hoá đơn chi tiết
INSERT INTO `hoa_don_chi_tiet` (`maHDCT`, `maHD`, `maSP`, `soLuong`, `giaSP`, `giamGia`) VALUES (NULL, '1', '7', '1', '23000000', '10'),
                                                                                                            (NULL, '1', '86', '2', '3100000', '10'),
                                                                                                            (NULL, '2', '91', '2', '2200000', '10'),
                                                                                                            (NULL, '2', '107', '3', '4200000', '10');

-- -- Voucher hoá đơn chi tiết
INSERT INTO `voucher_hoa_don_chi_tiet` (`maVHDCT`, `maVoucher`, `maHDCT`) VALUES (NULL, '2', '1'), (NULL, '8', '1'), (NULL, '5', '3'), (NULL, '3', '4');

-- Thêm mới sản phẩm

-- Laptop Gaming
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus Gaming TUF FX806HCB-HX105W (i3 11400H/8GB RAM/512GB SSD/17.3 FHD 144hz/RTX 3080 4GB/Win11/Đen)',74000000,10,10,2,4,6,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus Gaming TUF FX906HCB-HX105W (i5 11400H/8GB RAM/512GB SSD/17.3 FHD 144hz/RTX 3080 4GB/Win11/Đen)',75000000,10,10,2,4,6,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus Gaming TUF FX1106HCB-HX105W (i7 11400H/8GB RAM/512GB SSD/17.3 FHD 144hz/RTX 3080 4GB/Win11/Đen)',76000000,10,10,2,4,6,2,3);
-- PC Gaming
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('PC GAMING HACOM LIAN-LI O31DX LIMITED (i3 12700KF/Z690/32GB RAM/1TB SSD/RTX 3080/1050W)',71000000,10,10,1,1,3,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('PC GAMING HACOM LIAN-LI O61DX LIMITED (i5 12700KF/Z690/32GB RAM/1TB SSD/RTX 3080/1050W)',72000000,10,10,1,1,3,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('PC GAMING HACOM LIAN-LI O71DX LIMITED (i7 12700KF/Z690/32GB RAM/1TB SSD/RTX 3080/1050W)',73000000,10,10,1,1,3,2,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('PC GAMING HACOM LIAN-LI O111DX LIMITED (i9 12700KF/Z690/32GB RAM/1TB SSD/RTX 3080/1050W)',74000000,10,10,1,1,3,2,3);
-- PC trạm
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Workstation Dell Precision 17050 (i3-11700/128GB RAM/20TB HDD/RTX 3080/DVDRW/K+M)',229000000,10,15,1,1,2,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Workstation Dell Precision 21050 (i5-11700/128GB RAM/20TB HDD/RTX 3080/DVDRW/K+M)',229100000,10,15,1,1,2,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Workstation Dell Precision 24050 (i7-11700/128GB RAM/20TB HDD/RTX 3080/DVDRW/K+M)',229200000,10,15,1,1,2,3,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Workstation Dell Precision 26050 (i9-11700/128GB RAM/20TB HDD/RTX 3080/DVDRW/K+M)',229300000,10,15,1,1,2,3,3);
-- Laptop Văn phòng
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus DakBook M4401QA (i3-11700/8GB RAM/512GB SSD/RTX 3080/14 Oled 2.8K/Win11/Xanh)',89000000,10,5,2,1,4,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus DakBook M5401QA (i5-11700/8GB RAM/512GB SSD/RTX 3080/14 Oled 2.8K/Win11/Xanh)',89100000,10,5,2,1,4,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maBV`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Laptop Asus DakBook M6401QA (i7-11700/8GB RAM/512GB SSD/RTX 3080/14 Oled 2.8K/Win11/Xanh)',89200000,10,5,2,1,4,4,3);
-- Card game
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb GTX 1660 TX1200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',7000000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb GTX 1660 TX21200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',7100000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb RTX 2060 TX31200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',7200000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb RTX 2060 TX41200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',7300000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb RTX 2060 TX51200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',7400000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb RTX 3080 TX61200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',7500000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb RTX 3080 TX71200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',7600000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb RTX 3080 TX81200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',7700000,10,10,1,13,4,3);

INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb GTX 1660 TX91200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',7800000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb GTX 1660 TX101200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',7900000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb GTX 1660 TX111200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',8000000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb RTX 2060 TX121200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',8100000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb RTX 2060 TX131200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',8200000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb RTX 3080 TX141200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',8300000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb RTX 3080 TX151200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',8400000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb RTX 3080 TX161200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',8500000,10,10,1,13,4,3);

INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb GTX 1660 TX171200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',8600000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb GTX 1660 TX181200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',8700000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb GTX 1660 TX191200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',8800000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb RTX 2060 TX201200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',8900000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb RTX 2060 TX211200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',9000000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb RTX 2060 TX221200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',9100000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb RTX 3080 TX231200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',9200000,10,10,1,13,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb RTX 3080 TX241200 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',9300000,10,10,1,13,4,3);

-- Card thiet ke
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb GTX 1660 TG26600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',9400000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb GTX 1660 TG36600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',9500000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb RTX 2060 TG46600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',9600000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb RTX 2060 TG56600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',9700000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb RTX 2060 TG66600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',9800000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb RTX 3080 TG76600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',9900000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb RTX 3080 TG86600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',10000000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb RTX 3080 TG96600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',10100000,10,10,1,14,4,3);

INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb GTX 1660 TG106600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',10200000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb GTX 1660 TG116600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',10300000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb GTX 1660 TG126600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',10400000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb RTX 2060 TG146600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',10500000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb RTX 2060 TG146600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',10600000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb RTX 3080 TG156600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',10700000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb RTX 3080 TG166600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',10800000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb RTX 3080 TG176600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',10900000,10,10,1,14,4,3);

INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb GTX 1660 TG186600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',11000000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb GTX 1660 TG196600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',11100000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb GTX 1660 TG206600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',11200000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb RTX 2060 TG216600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',11300000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb RTX 2060 TG226600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',11400000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb RTX 2060 TG236600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',11500000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb RTX 3080 TG246600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',11600000,10,10,1,14,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb RTX 3080 TG256600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',11700000,10,10,1,14,4,3);
-- Card coin

INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb GTX 1660 T263600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',11800000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb GTX 1660 T363600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',11900000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb RTX 2060 T463600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',12000000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb RTX 2060 T563600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',12100000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb RTX 2060 T663600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',12200000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb RTX 3080 T763600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',12300000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb RTX 3080 T863600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',12400000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 4Gb RTX 3080 T963600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',12500000,10,10,1,15,4,3);

INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb GTX 1660 T1063600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',12600000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb GTX 1660 T1163600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',12700000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb GTX 1660 T1263600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',12800000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb RTX 2060 T1563600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',12900000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb RTX 2060 T1463600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',13000000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb RTX 3080 T1563600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',13100000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb RTX 3080 T1663600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',13200000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 6Gb RTX 3080 T1763600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',13300000,10,10,1,15,4,3);

INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb GTX 1660 T1863600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',13400000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb GTX 1660 T1963600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',13500000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb GTX 1660 T2063600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',13600000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb RTX 2060 T2163600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',13700000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb RTX 2060 T2263600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',13800000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb RTX 2060 T2363600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',13900000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb RTX 3080 T2463600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',14000000,10,10,1,15,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Card màn hình NVIDIA 8Gb RTX 3080 T2563600 (12GB GDDR6, 128-bit, 4x mini DisplayPort)',14100000,10,10,1,15,4,3);

-- Bộ vi xử lý
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i3-9500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1200',9600000,10,10,1,18,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i5-9500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1200',9700000,10,10,1,18,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i7-9500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1200',9800000,10,10,1,18,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i9-9500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1200',9900000,10,10,1,18,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i3-11500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1200',10000000,10,10,1,18,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i5-11500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1200',10100000,10,10,1,18,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i7-11500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1200',10200000,10,10,1,18,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i9-119500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1200',10300000,10,10,1,18,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i3-13500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1700',10400000,10,10,1,18,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i5-13500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1700',10500000,10,10,1,18,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i7-13500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1700',10600000,10,10,1,18,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i9-13500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1700',10700000,10,10,1,18,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i3-X7500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1700',10800000,10,10,1,18,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i5-X8500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1700',10900000,10,10,1,18,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('CPU Intel Core i7-X9500 (Upto 4.46Ghz, 6 nhân 12 luồng, 18MB Cache, 65W) - Socket Intel LGA 1700',11000000,10,10,1,18,4,3);

-- Bộ vi xử lý
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B2660-I GAMING ATX LG 1200',15600000,10,10,1,20,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B3660-I GAMING ATX LG 1200',15700000,10,10,1,20,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B4660-I GAMING ATX LG 1200',15800000,10,10,1,20,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B5660-I GAMING ATX LG 1200',15900000,10,10,1,20,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B6660-I GAMING ATX LG 1200',16000000,10,10,1,20,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B7660-I GAMING ATX LG 1200',16100000,10,10,1,20,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B8660-I GAMING ATX LG 1200',16200000,10,10,1,20,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B9660-I GAMING ATX LG 1200',16300000,10,10,1,20,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B10660-I GAMING ATX LG 1200',16400000,10,10,1,20,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B11660-I GAMING ATX LG 1200',16500000,10,10,1,20,4,3);

INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B12660-I GAMING ATX LG 1700',16600000,10,10,1,20,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B13660-I GAMING ATX LG 1700',16700000,10,10,1,20,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B14660-I GAMING ATX LG 1700',16800000,10,10,1,20,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B15660-I GAMING ATX LG 1700',16900000,10,10,1,20,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B16660-I GAMING ATX LG 1700',17000000,10,10,1,20,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B17660-I GAMING ATX LG 1700',17100000,10,10,1,20,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B18660-I GAMING ATX LG 1700',17200000,10,10,1,20,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B19660-I GAMING ATX LG 1700',17300000,10,10,1,20,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B20660-I GAMING ATX LG 1700',17400000,10,10,1,20,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Mainboard Asus ROG STRIX B21660-I GAMING ATX LG 1700',17500000,10,10,1,20,4,3);

-- RAM
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Desktop MSI Vengeance LPX (CMK9GX4M1A2666C16 ) 4GB (1x4GB) DDR4 ',1000000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Desktop MSI Vengeance LPX (CMK10GX4M1A2666C16 ) 4GB (1x4GB) DDR4 ',1010000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Desktop MSI Vengeance LPX (CMK11GX4M1A2666C16 ) 4GB (2x4GB) DDR4 ',1020000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Desktop MSI Vengeance LPX (CMK12GX4M1A2666C16 ) 8GB (2x8GB) DDR4 ',1030000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Desktop MSI Vengeance LPX (CMK13GX4M1A2666C16 ) 8GB (1x8GB) DDR4 ',1040000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Desktop MSI Vengeance LPX (CMK14GX4M1A2666C16 ) 8GB (1x8GB) DDR4 ',1050000,10,10,1,22,4,3);

INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Laptop MSI Vengeance LPX (CMK15GX4M1A2666C16 ) 4GB (2x4GB) DDR4 ',1060000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Laptop MSI Vengeance LPX (CMK16GX4M1A2666C16 ) 4GB (1x4GB) DDR4 ',1070000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Laptop MSI Vengeance LPX (CMK17GX4M1A2666C16 ) 4GB (2x4GB) DDR4 ',1080000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Laptop MSI Vengeance LPX (CMK18GX4M1A2666C16 ) 8GB (1x8GB) DDR4 ',1090000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Laptop MSI Vengeance LPX (CMK19GX4M1A2666C16 ) 8GB (2x8GB) DDR4 ',1100000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Laptop MSI Vengeance LPX (CMK20GX4M1A2666C16 ) 8GB (2x8GB) DDR4 ',1110000,10,10,1,22,4,3);

INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Desktop MSI Vengeance LPX (CMK21GX4M1A2666C16 ) 4GB (1x4GB) DDR5 ',1120000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Desktop MSI Vengeance LPX (CMK22GX4M1A2666C16 ) 4GB (2x4GB) DDR5 ',1130000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Desktop MSI Vengeance LPX (CMK23GX4M1A2666C16 ) 4GB (1x4GB) DDR5 ',1140000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Desktop MSI Vengeance LPX (CMK24GX4M1A2666C16 ) 4GB (2x4GB) DDR5 ',1150000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Desktop MSI Vengeance LPX (CMK25GX4M1A2666C16 ) 8GB (1x8GB) DDR5 ',1160000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Desktop MSI Vengeance LPX (CMK26GX4M1A2666C16 ) 8GB (2x8GB) DDR5 ',1170000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Desktop MSI Vengeance LPX (CMK27GX4M1A2666C16 ) 8GB (2x8GB) DDR5 ',1180000,10,10,1,22,4,3);

INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Laptop MSI Vengeance LPX (CMK28GX4M1A2666C16 ) 4GB (1x4GB) DDR5 ',1190000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Laptop MSI Vengeance LPX (CMK29GX4M1A2666C16 ) 4GB (2x4GB) DDR5 ',1200000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Laptop MSI Vengeance LPX (CMK30GX4M1A2666C16 ) 4GB (1x4GB) DDR5 ',1210000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Laptop MSI Vengeance LPX (CMK31GX4M1A2666C16 ) 4GB (2x4GB) DDR5 ',1220000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Laptop MSI Vengeance LPX (CMK32GX4M1A2666C16 ) 8GB (1x8GB) DDR5 ',1230000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Laptop MSI Vengeance LPX (CMK33GX4M1A2666C16 ) 8GB (2x8GB) DDR5 ',1240000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Laptop MSI Vengeance LPX (CMK34GX4M1A2666C16 ) 8GB (1x8GB) DDR5 ',1250000,10,10,1,22,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('RAM Laptop MSI Vengeance LPX (CMK35GX4M1A2666C16 ) 8GB (2x8GB) DDR5 ',1260000,10,10,1,22,4,3);

-- Nguồn
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 550W Silver  ( Màu Đen/80 Plus Silver )',14090000,10,10,1,24,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 550W Gold  ( Màu Đen/80 Plus Gold )',14190000,10,10,1,24,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 550W Platinum  ( Màu Đen/80 Plus Platinum )',14290000,10,10,1,24,4,3);

INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 650 Bronze  ( Màu Đen/80 Plus Bronze )',14390000,10,10,1,24,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 650 Gold  ( Màu Đen/80 Plus Gold )',14490000,10,10,1,24,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 650 Platinum  ( Màu Đen/80 Plus Platinum )',14590000,10,10,1,24,4,3);

INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 750W Bronze  ( Màu Đen/80 Plus Bronze )',14690000,10,10,1,24,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 750W Silver  ( Màu Đen/80 Plus Silver )',14790000,10,10,1,24,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 750W Platinum  ( Màu Đen/80 Plus Platinum )',14890000,10,10,1,24,4,3);

INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 850W Bronze  ( Màu Đen/80 Plus Bronze )',14990000,10,10,1,24,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 850W Silver  ( Màu Đen/80 Plus Silver )',15090000,10,10,1,24,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 850W Platinum  ( Màu Đen/80 Plus Platinum )',15190000,10,10,1,24,4,3);

INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 1200W Bronze  ( Màu Đen/80 Plus Bronze )',15290000,10,10,1,24,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 1200W Silver  ( Màu Đen/80 Plus Silver )',15390000,10,10,1,24,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Nguồn ASUS TUF GAMING 1200W Gold  ( Màu Đen/80 Plus Gold )',15490000,10,10,1,24,4,3);

-- Vỏ case
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R92 BLACK (Mid Tower/Màu Đen)',1019000,10,10,1,26,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R102 BLACK (Full Tower/Màu Đen)',1029000,10,10,1,26,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R112 BLACK (Mini Tower/Màu Đen)',1039000,10,10,1,26,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R122 BLACK (Mini Tower/Màu Đen)',1049000,10,10,1,26,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R132 BLACK (Mid Tower/Màu Đen)',1059000,10,10,1,26,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R142 BLACK (Full Tower/Màu Đen)',1069000,10,10,1,26,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R152 BLACK (Mini Tower/Màu Đen)',1079000,10,10,1,26,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R162 BLACK (Mid Tower/Màu Đen)',1089000,10,10,1,26,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R172 BLACK (Full Tower/Màu Đen)',1099000,10,10,1,26,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R182 BLACK (Mini Tower/Màu Đen)',1109000,10,10,1,26,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R192 BLACK (Mid Tower/Màu Đen)',1119000,10,10,1,26,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R202 BLACK (Full Tower/Màu Đen)',1129000,10,10,1,26,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R212 BLACK (Mini Tower/Màu Đen)',1139000,10,10,1,26,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Vỏ Case Vitra POSEIDON R222 BLACK (Mid Tower/Màu Đen)',1149000,10,10,1,26,4,3);
-- HDD
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 500GB WDx1 2.5 inch',1700000,10,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 500GB WDx2 2.5 inch',1800000,10,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 500GB WDx3 2.5 inch',1900000,10,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 1TB WDx4 2.5 inch',2000000,10,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 1TB WDx5 2.5 inch',2100000,10,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 1TB WDx6 2.5 inch',2200000,10,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 1TB WDx7 2.5 inch',2300000,10,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 2TB WDx8 2.5 inch',2400000,10,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 2TB WDx9 2.5 inch',2500000,10,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 2TB WDx10 2.5 inch',2600000,10,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 2TB WDx11 2.5 inch',2700000,10,10,1,10,4,3);

INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 500GB WDx12 3.5 inch',2800000,10,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 500GB WDx13 3.5 inch',2900000,10,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 500GB WDx14 3.5 inch',3000000,10,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 500GB WDx15 3.5 inch',3100000,10,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 1TB WDx32 3.5 inch',3300000,10,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 1TB WDx17 3.5 inch',3400000,10,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 2TB WDx18 3.5 inch',3500000,10,10,1,10,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng HDD 2TB WDx19 3.5 inch',3600000,10,10,1,10,4,3);

-- SSD
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng SSD 500GB WD SDX1 2.5inch',8300000,10,10,1,11,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng SSD 1TB WD SDX2 2.5inch',8400000,10,10,1,11,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng SSD 2TB WD SDX3 2.5inch',8500000,10,10,1,11,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng SSD 2TB WD SDX4 2.5inch',8600000,10,10,1,11,4,3);

INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng SSD 500GB WD SDX5 3.5inch',8700000,10,10,1,11,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng SSD 500GB WD SDX6 3.5inch',8800000,10,10,1,11,4,3);
INSERT INTO san_pham(`tenSP`,`giaSP`,`soLuong`,`giamGia`,`maNSX`,`maTLC`,`maBH`,`maTTSP`)
VALUE('Ổ cứng SSD 1TB WD SDX7 3.5inch',8900000,10,10,1,11,4,3);

-- Anh san pham moi
-- Laptop gaming
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (112,'63527_laptop_asus_gaming_tuf_fx706hcb_9.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (113,'63527_laptop_asus_gaming_tuf_fx706hcb_9.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (114,'63527_laptop_asus_gaming_tuf_fx706hcb_9.jpg');
-- PC gaming
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (115,'63502_pc_gaming_hacom_pro_021_2022.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (116,'63502_pc_gaming_hacom_pro_021_2022.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (117,'63502_pc_gaming_hacom_pro_021_2022.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (118,'63502_pc_gaming_hacom_pro_021_2022.jpg');

-- PC tram
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (119,'STOCK_PC_STATION.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (120,'STOCK_PC_STATION.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (121,'STOCK_PC_STATION.png');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (122,'STOCK_PC_STATION.png');

-- Laptop van phong
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (123,'LAP_OFFICE_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (124,'LAP_OFFICE_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (125,'LAP_OFFICE_1.jpg');

-- Card game
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (126,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (127,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (128,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (129,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (130,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (131,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (132,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (133,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (134,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (135,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (136,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (137,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (138,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (139,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (140,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (141,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (142,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (143,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (144,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (145,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (146,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (147,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (148,'VGA_ASUS_1.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (149,'VGA_ASUS_1.jpg');

-- Card do hoa
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (150,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (151,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (152,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (153,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (154,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (155,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (156,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (157,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (158,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (159,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (160,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (161,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (162,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (163,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (164,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (165,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (166,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (167,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (168,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (169,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (170,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (171,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (172,'VGA_GIGA_3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (173,'VGA_GIGA_3.jpg');

-- Card coin
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (174,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (175,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (176,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (177,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (178,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (179,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (180,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (181,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (182,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (183,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (184,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (185,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (186,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (187,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (188,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (189,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (190,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (191,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (192,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (193,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (194,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (195,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (196,'STOCK_GRAPHIC_CARD.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (197,'STOCK_GRAPHIC_CARD.jpg');

-- CPU
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (198,'CPU_i3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (199,'CPU_i3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (200,'CPU_i3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (201,'CPU_i3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (202,'CPU_i3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (203,'CPU_i3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (204,'CPU_i3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (205,'CPU_i3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (206,'CPU_i3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (207,'CPU_i3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (208,'CPU_i3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (209,'CPU_i3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (210,'CPU_i3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (211,'CPU_i3.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (212,'CPU_i3.jpg');

-- BMC
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (213,'BOARD_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (214,'BOARD_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (215,'BOARD_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (216,'BOARD_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (217,'BOARD_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (218,'BOARD_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (219,'BOARD_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (220,'BOARD_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (221,'BOARD_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (222,'BOARD_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (223,'BOARD_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (224,'BOARD_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (225,'BOARD_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (226,'BOARD_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (227,'BOARD_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (228,'BOARD_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (229,'BOARD_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (230,'BOARD_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (231,'BOARD_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (232,'BOARD_ASUS_5.jpg');

-- RAM
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (233,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (234,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (235,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (236,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (237,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (238,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (239,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (240,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (241,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (242,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (243,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (244,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (245,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (246,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (247,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (248,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (249,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (250,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (251,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (252,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (253,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (254,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (255,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (256,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (257,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (258,'RAM_KINGSTON_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (259,'RAM_KINGSTON_5.jpg');

-- Nguon
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (260,'PS_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (261,'PS_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (262,'PS_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (263,'PS_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (264,'PS_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (265,'PS_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (266,'PS_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (267,'PS_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (268,'PS_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (269,'PS_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (270,'PS_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (271,'PS_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (272,'PS_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (273,'PS_ASUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (274,'PS_ASUS_5.jpg');

-- Vo case
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (275,'CASE_CUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (276,'CASE_CUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (277,'CASE_CUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (278,'CASE_CUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (279,'CASE_CUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (280,'CASE_CUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (281,'CASE_CUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (282,'CASE_CUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (283,'CASE_CUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (284,'CASE_CUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (285,'CASE_CUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (286,'CASE_CUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (287,'CASE_CUS_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (288,'CASE_CUS_5.jpg');

-- HDD
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (289,'HDD_WD_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (290,'HDD_WD_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (291,'HDD_WD_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (292,'HDD_WD_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (293,'HDD_WD_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (294,'HDD_WD_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (295,'HDD_WD_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (296,'HDD_WD_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (297,'HDD_WD_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (298,'HDD_WD_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (299,'HDD_WD_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (300,'HDD_WD_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (301,'HDD_WD_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (302,'HDD_WD_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (303,'HDD_WD_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (304,'HDD_WD_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (305,'HDD_WD_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (306,'HDD_WD_2.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (307,'HDD_WD_2.jpg');

-- SSD
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (308,'SSD_WD_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (309,'SSD_WD_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (310,'SSD_WD_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (311,'SSD_WD_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (312,'SSD_WD_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (313,'SSD_WD_5.jpg');
INSERT INTO anh_san_pham(`maSP`,`anh`) VALUE (314,'SSD_WD_5.jpg');

-- San pham thong so moi
-- Laptop gaming
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 112,1,"Intel core i3"),
                                                                            (NULL, 112,2,"PT516-51s-71RW"),
                                                                            (NULL, 112,3,"i3 11800H"),
                                                                            (NULL, 112,4,"64GB RAM"),
                                                                            (NULL, 112,5,"4 khe"),
                                                                            (NULL, 112,6,"256GB"),
                                                                            (NULL, 112,7,"RTX 3080 8G"),
                                                                            (NULL, 112,8,"1TB SSD"),
                                                                            (NULL, 112,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 112,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 112,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 112,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 112,16,"2.2 kg"),
                                                                            (NULL, 112,17,"Win 11 Home"),
                                                                            (NULL, 112,19,"Gigabit"),
                                                                            (NULL, 112,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 112,21,"57 Wh");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 113,1,"Intel core i5"),
                                                                            (NULL, 113,2,"PT516-51s-71RW"),
                                                                            (NULL, 113,3,"i5 11800H"),
                                                                            (NULL, 113,4,"64GB RAM"),
                                                                            (NULL, 113,5,"4 khe"),
                                                                            (NULL, 113,6,"256GB"),
                                                                            (NULL, 113,7,"RTX 3080 8G"),
                                                                            (NULL, 113,8,"1TB SSD"),
                                                                            (NULL, 113,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 113,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 113,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 113,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 113,16,"2.2 kg"),
                                                                            (NULL, 113,17,"Win 11 Home"),
                                                                            (NULL, 113,19,"Gigabit"),
                                                                            (NULL, 113,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 113,21,"57 Wh");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 114,1,"Intel core i7"),
                                                                            (NULL, 114,2,"PT516-51s-71RW"),
                                                                            (NULL, 114,3,"i7 11800H"),
                                                                            (NULL, 114,4,"64GB RAM"),
                                                                            (NULL, 114,5,"4 khe"),
                                                                            (NULL, 114,6,"256GB"),
                                                                            (NULL, 114,7,"RTX 3080 8G"),
                                                                            (NULL, 114,8,"1TB SSD"),
                                                                            (NULL, 114,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 114,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 114,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 114,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 114,16,"2.2 kg"),
                                                                            (NULL, 114,17,"Win 11 Home"),
                                                                            (NULL, 114,19,"Gigabit"),
                                                                            (NULL, 114,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 114,21,"57 Wh");

-- PC gaming
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 115,1,"Intel core i3"),
                                                                            (NULL, 115,2,"PT516-51s-71RW"),
                                                                            (NULL, 115,3,"i3 11800H"),
                                                                            (NULL, 115,4,"64GB RAM"),
                                                                            (NULL, 115,5,"4 khe"),
                                                                            (NULL, 115,6,"256GB"),
                                                                            (NULL, 115,7,"RTX 3080 8G"),
                                                                            (NULL, 115,8,"1TB SSD"),
                                                                            (NULL, 115,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 115,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 115,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 115,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 115,16,"2.2 kg"),
                                                                            (NULL, 115,17,"Win 11 Home"),
                                                                            (NULL, 115,19,"Gigabit"),
                                                                            (NULL, 115,20,"802.11 SX +Bluetooth 5.0");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 116,1,"Intel core i5"),
                                                                            (NULL, 116,2,"PT516-51s-71RW"),
                                                                            (NULL, 116,3,"i5 11800H"),
                                                                            (NULL, 116,4,"64GB RAM"),
                                                                            (NULL, 116,5,"4 khe"),
                                                                            (NULL, 116,6,"256GB"),
                                                                            (NULL, 116,7,"RTX 3080 8G"),
                                                                            (NULL, 116,8,"1TB SSD"),
                                                                            (NULL, 116,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 116,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 116,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 116,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 116,16,"2.2 kg"),
                                                                            (NULL, 116,17,"Win 11 Home"),
                                                                            (NULL, 116,19,"Gigabit"),
                                                                            (NULL, 116,20,"802.11 SX +Bluetooth 5.0");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 117,1,"Intel core i7"),
                                                                            (NULL, 117,2,"PT516-51s-71RW"),
                                                                            (NULL, 117,3,"i7 11800H"),
                                                                            (NULL, 117,4,"64GB RAM"),
                                                                            (NULL, 117,5,"4 khe"),
                                                                            (NULL, 117,6,"256GB"),
                                                                            (NULL, 117,7,"RTX 3080 8G"),
                                                                            (NULL, 117,8,"1TB SSD"),
                                                                            (NULL, 117,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 117,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 117,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 117,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 117,16,"2.2 kg"),
                                                                            (NULL, 117,17,"Win 11 Home"),
                                                                            (NULL, 117,19,"Gigabit"),
                                                                            (NULL, 117,20,"802.11 SX +Bluetooth 5.0");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 118,1,"Intel core i9"),
                                                                            (NULL, 118,2,"PT516-51s-71RW"),
                                                                            (NULL, 118,3,"i9 11800H"),
                                                                            (NULL, 118,4,"64GB RAM"),
                                                                            (NULL, 118,5,"4 khe"),
                                                                            (NULL, 118,6,"256GB"),
                                                                            (NULL, 118,7,"RTX 3080 8G"),
                                                                            (NULL, 118,8,"1TB SSD"),
                                                                            (NULL, 118,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 118,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 118,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 118,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 118,16,"2.2 kg"),
                                                                            (NULL, 118,17,"Win 11 Home"),
                                                                            (NULL, 118,19,"Gigabit"),
                                                                            (NULL, 118,20,"802.11 SX +Bluetooth 5.0");

-- PC tram
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 119,1,"Intel core i3"),
                                                                            (NULL, 119,2,"PT516-51s-71RW"),
                                                                            (NULL, 119,3,"i3 11800H"),
                                                                            (NULL, 119,4,"64GB RAM"),
                                                                            (NULL, 119,5,"4 khe"),
                                                                            (NULL, 119,6,"256GB"),
                                                                            (NULL, 119,7,"RTX 3080 8G"),
                                                                            (NULL, 119,8,"1TB SSD"),
                                                                            (NULL, 119,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 119,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 119,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 119,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 119,16,"2.2 kg"),
                                                                            (NULL, 119,17,"Win 11 Home"),
                                                                            (NULL, 119,19,"Gigabit"),
                                                                            (NULL, 119,20,"802.11 SX +Bluetooth 5.0");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 120,1,"Intel core i5"),
                                                                            (NULL, 120,2,"PT516-51s-71RW"),
                                                                            (NULL, 120,3,"i5 11800H"),
                                                                            (NULL, 120,4,"64GB RAM"),
                                                                            (NULL, 120,5,"4 khe"),
                                                                            (NULL, 120,6,"256GB"),
                                                                            (NULL, 120,7,"RTX 3080 8G"),
                                                                            (NULL, 120,8,"1TB SSD"),
                                                                            (NULL, 120,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 120,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 120,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 120,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 120,16,"2.2 kg"),
                                                                            (NULL, 120,17,"Win 11 Home"),
                                                                            (NULL, 120,19,"Gigabit"),
                                                                            (NULL, 120,20,"802.11 SX +Bluetooth 5.0");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 121,1,"Intel core i7"),
                                                                            (NULL, 121,2,"PT516-51s-71RW"),
                                                                            (NULL, 121,3,"i7 11800H"),
                                                                            (NULL, 121,4,"64GB RAM"),
                                                                            (NULL, 121,5,"4 khe"),
                                                                            (NULL, 121,6,"256GB"),
                                                                            (NULL, 121,7,"RTX 3080 8G"),
                                                                            (NULL, 121,8,"1TB SSD"),
                                                                            (NULL, 121,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 121,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 121,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 121,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 121,16,"2.2 kg"),
                                                                            (NULL, 121,17,"Win 11 Home"),
                                                                            (NULL, 121,19,"Gigabit"),
                                                                            (NULL, 121,20,"802.11 SX +Bluetooth 5.0");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 122,1,"Intel core i9"),
                                                                            (NULL, 122,2,"PT516-51s-71RW"),
                                                                            (NULL, 122,3,"i9 11800H"),
                                                                            (NULL, 122,4,"64GB RAM"),
                                                                            (NULL, 122,5,"4 khe"),
                                                                            (NULL, 122,6,"256GB"),
                                                                            (NULL, 122,7,"RTX 3080 8G"),
                                                                            (NULL, 122,8,"1TB SSD"),
                                                                            (NULL, 122,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 122,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 122,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 122,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 122,16,"2.2 kg"),
                                                                            (NULL, 122,17,"Win 11 Home"),
                                                                            (NULL, 122,19,"Gigabit"),
                                                                            (NULL, 122,20,"802.11 SX +Bluetooth 5.0");


-- Laptop van phong
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 123,1,"Intel core i3"),
                                                                            (NULL, 123,2,"PT516-51s-71RW"),
                                                                            (NULL, 123,3,"i3 11800H"),
                                                                            (NULL, 123,4,"64GB RAM"),
                                                                            (NULL, 123,5,"4 khe"),
                                                                            (NULL, 123,6,"256GB"),
                                                                            (NULL, 123,7,"RTX 3080 8G"),
                                                                            (NULL, 123,8,"1TB SSD"),
                                                                            (NULL, 123,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 123,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 123,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 123,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 123,16,"2.2 kg"),
                                                                            (NULL, 123,17,"Win 11 Home"),
                                                                            (NULL, 123,19,"Gigabit"),
                                                                            (NULL, 123,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 123,21,"57 Wh");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 124,1,"Intel core i5"),
                                                                            (NULL, 124,2,"PT516-51s-71RW"),
                                                                            (NULL, 124,3,"i5 11800H"),
                                                                            (NULL, 124,4,"64GB RAM"),
                                                                            (NULL, 124,5,"4 khe"),
                                                                            (NULL, 124,6,"256GB"),
                                                                            (NULL, 124,7,"RTX 3080 8G"),
                                                                            (NULL, 124,8,"1TB SSD"),
                                                                            (NULL, 124,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 124,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 124,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 124,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 124,16,"2.2 kg"),
                                                                            (NULL, 124,17,"Win 11 Home"),
                                                                            (NULL, 124,19,"Gigabit"),
                                                                            (NULL, 124,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 124,21,"57 Wh");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 125,1,"Intel core i7"),
                                                                            (NULL, 125,2,"PT516-51s-71RW"),
                                                                            (NULL, 125,3,"i7 11800H"),
                                                                            (NULL, 125,4,"64GB RAM"),
                                                                            (NULL, 125,5,"4 khe"),
                                                                            (NULL, 125,6,"256GB"),
                                                                            (NULL, 125,7,"RTX 3080 8G"),
                                                                            (NULL, 125,8,"1TB SSD"),
                                                                            (NULL, 125,11,"Acer TrueHarmony technology; Acer Purified"),
                                                                            (NULL, 125,12,"1270px - 720px - 60hz"),
                                                                            (NULL, 125,13,"2k - 144hz - 1ms"),
                                                                            (NULL, 125,15,"363.4 (W) x 255 (D) x 23.9 (H) mm"),
                                                                            (NULL, 125,16,"2.2 kg"),
                                                                            (NULL, 125,17,"Win 11 Home"),
                                                                            (NULL, 125,19,"Gigabit"),
                                                                            (NULL, 125,20,"802.11 SX +Bluetooth 5.0"),
                                                                            (NULL, 125,21,"57 Wh");

-- Card game
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 126,45,"4GB"),
                                                                            (NULL, 126,46,"GTX 1660"),
                                                                            (NULL, 126,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 127,45,"4GB"),
                                                                            (NULL, 127,46,"GTX 1660"),
                                                                            (NULL, 127,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 128,45,"4GB"),
                                                                            (NULL, 128,46,"RTX 2060"),
                                                                            (NULL, 128,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 129,45,"4GB"),
                                                                            (NULL, 129,46,"RTX 2060"),
                                                                            (NULL, 129,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 130,45,"4GB"),
                                                                            (NULL, 130,46,"RTX 2060"),
                                                                            (NULL, 130,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 131,45,"4GB"),
                                                                            (NULL, 131,46,"RTX 3080"),
                                                                            (NULL, 131,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 132,45,"4GB"),
                                                                            (NULL, 132,46,"RTX 3080"),
                                                                            (NULL, 132,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 133,45,"4GB"),
                                                                            (NULL, 133,46,"RTX 3080"),
                                                                            (NULL, 133,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 134,45,"6GB"),
                                                                            (NULL, 134,46,"GTX 1660"),
                                                                            (NULL, 134,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 135,45,"6GB"),
                                                                            (NULL, 135,46,"GTX 1660"),
                                                                            (NULL, 135,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 136,45,"6GB"),
                                                                            (NULL, 136,46,"GTX 1660"),
                                                                            (NULL, 136,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 137,45,"6GB"),
                                                                            (NULL, 137,46,"RTX 2060"),
                                                                            (NULL, 137,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 138,45,"6GB"),
                                                                            (NULL, 138,46,"RTX 2060"),
                                                                            (NULL, 138,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 139,45,"6GB"),
                                                                            (NULL, 139,46,"RTX 3080"),
                                                                            (NULL, 139,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 140,45,"6GB"),
                                                                            (NULL, 140,46,"RTX 3080"),
                                                                            (NULL, 140,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 141,45,"6GB"),
                                                                            (NULL, 141,46,"RTX 3080"),
                                                                            (NULL, 141,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 142,45,"8GB"),
                                                                            (NULL, 142,46,"RTX 1660"),
                                                                            (NULL, 142,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 143,45,"8GB"),
                                                                            (NULL, 143,46,"RTX 1660"),
                                                                            (NULL, 143,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 144,45,"8GB"),
                                                                            (NULL, 144,46,"RTX 1660"),
                                                                            (NULL, 144,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 145,45,"8GB"),
                                                                            (NULL, 145,46,"RTX 2060"),
                                                                            (NULL, 145,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 146,45,"8GB"),
                                                                            (NULL, 146,46,"RTX 2060"),
                                                                            (NULL, 146,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 147,45,"8GB"),
                                                                            (NULL, 147,46,"RTX 2060"),
                                                                            (NULL, 147,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 148,45,"8GB"),
                                                                            (NULL, 148,46,"RTX 3080"),
                                                                            (NULL, 148,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 149,45,"8GB"),
                                                                            (NULL, 149,46,"RTX 3080"),
                                                                            (NULL, 149,47,"2170 MHz");

-- Card thiet ke
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 150,45,"4GB"),
                                                                            (NULL, 150,46,"GTX 1660"),
                                                                            (NULL, 150,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 151,45,"4GB"),
                                                                            (NULL, 151,46,"GTX 1660"),
                                                                            (NULL, 151,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 152,45,"4GB"),
                                                                            (NULL, 152,46,"RTX 2060"),
                                                                            (NULL, 152,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 153,45,"4GB"),
                                                                            (NULL, 153,46,"RTX 2060"),
                                                                            (NULL, 153,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 154,45,"4GB"),
                                                                            (NULL, 154,46,"RTX 2060"),
                                                                            (NULL, 154,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 155,45,"4GB"),
                                                                            (NULL, 155,46,"RTX 3080"),
                                                                            (NULL, 155,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 156,45,"4GB"),
                                                                            (NULL, 156,46,"RTX 3080"),
                                                                            (NULL, 156,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 157,45,"4GB"),
                                                                            (NULL, 157,46,"RTX 3080"),
                                                                            (NULL, 157,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 158,45,"6GB"),
                                                                            (NULL, 158,46,"GTX 1660"),
                                                                            (NULL, 158,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 159,45,"6GB"),
                                                                            (NULL, 159,46,"GTX 1660"),
                                                                            (NULL, 159,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 160,45,"6GB"),
                                                                            (NULL, 160,46,"GTX 1660"),
                                                                            (NULL, 160,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 161,45,"6GB"),
                                                                            (NULL, 161,46,"RTX 2060"),
                                                                            (NULL, 161,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 162,45,"6GB"),
                                                                            (NULL, 162,46,"RTX 2060"),
                                                                            (NULL, 162,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 163,45,"6GB"),
                                                                            (NULL, 163,46,"RTX 3080"),
                                                                            (NULL, 163,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 164,45,"6GB"),
                                                                            (NULL, 164,46,"RTX 3080"),
                                                                            (NULL, 164,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 165,45,"6GB"),
                                                                            (NULL, 165,46,"RTX 3080"),
                                                                            (NULL, 165,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 166,45,"8GB"),
                                                                            (NULL, 166,46,"RTX 1660"),
                                                                            (NULL, 166,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 167,45,"8GB"),
                                                                            (NULL, 167,46,"RTX 1660"),
                                                                            (NULL, 167,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 168,45,"8GB"),
                                                                            (NULL, 168,46,"RTX 1660"),
                                                                            (NULL, 168,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 169,45,"8GB"),
                                                                            (NULL, 169,46,"RTX 2060"),
                                                                            (NULL, 169,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 170,45,"8GB"),
                                                                            (NULL, 170,46,"RTX 2060"),
                                                                            (NULL, 170,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 171,45,"8GB"),
                                                                            (NULL, 171,46,"RTX 2060"),
                                                                            (NULL, 171,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 172,45,"8GB"),
                                                                            (NULL, 172,46,"RTX 3080"),
                                                                            (NULL, 172,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 173,45,"8GB"),
                                                                            (NULL, 173,46,"RTX 3080"),
                                                                            (NULL, 173,47,"2170 MHz");

-- Card coin
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 174,45,"4GB"),
                                                                            (NULL, 174,46,"GTX 1660"),
                                                                            (NULL, 174,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 175,45,"4GB"),
                                                                            (NULL, 175,46,"GTX 1660"),
                                                                            (NULL, 175,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 176,45,"4GB"),
                                                                            (NULL, 176,46,"RTX 2060"),
                                                                            (NULL, 176,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 177,45,"4GB"),
                                                                            (NULL, 177,46,"RTX 2060"),
                                                                            (NULL, 177,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 178,45,"4GB"),
                                                                            (NULL, 178,46,"RTX 2060"),
                                                                            (NULL, 178,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 179,45,"4GB"),
                                                                            (NULL, 179,46,"RTX 3080"),
                                                                            (NULL, 179,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 180,45,"4GB"),
                                                                            (NULL, 180,46,"RTX 3080"),
                                                                            (NULL, 180,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 181,45,"4GB"),
                                                                            (NULL, 181,46,"RTX 3080"),
                                                                            (NULL, 181,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 182,45,"6GB"),
                                                                            (NULL, 182,46,"GTX 1660"),
                                                                            (NULL, 182,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 183,45,"6GB"),
                                                                            (NULL, 183,46,"GTX 1660"),
                                                                            (NULL, 183,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 184,45,"6GB"),
                                                                            (NULL, 184,46,"GTX 1660"),
                                                                            (NULL, 184,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 185,45,"6GB"),
                                                                            (NULL, 185,46,"RTX 2060"),
                                                                            (NULL, 185,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 186,45,"6GB"),
                                                                            (NULL, 186,46,"RTX 2060"),
                                                                            (NULL, 186,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 187,45,"6GB"),
                                                                            (NULL, 187,46,"RTX 3080"),
                                                                            (NULL, 187,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 188,45,"6GB"),
                                                                            (NULL, 188,46,"RTX 3080"),
                                                                            (NULL, 188,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 189,45,"6GB"),
                                                                            (NULL, 189,46,"RTX 3080"),
                                                                            (NULL, 189,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 190,45,"8GB"),
                                                                            (NULL, 190,46,"RTX 1660"),
                                                                            (NULL, 190,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 191,45,"8GB"),
                                                                            (NULL, 191,46,"RTX 1660"),
                                                                            (NULL, 191,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 192,45,"8GB"),
                                                                            (NULL, 192,46,"RTX 1660"),
                                                                            (NULL, 192,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 193,45,"8GB"),
                                                                            (NULL, 193,46,"RTX 2060"),
                                                                            (NULL, 193,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 194,45,"8GB"),
                                                                            (NULL, 194,46,"RTX 2060"),
                                                                            (NULL, 194,47,"2170 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 195,45,"8GB"),
                                                                            (NULL, 195,46,"RTX 2060"),
                                                                            (NULL, 195,47,"2667 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 196,45,"8GB"),
                                                                            (NULL, 196,46,"RTX 3080"),
                                                                            (NULL, 196,47,"1770 MHz");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 197,45,"8GB"),
                                                                            (NULL, 197,46,"RTX 3080"),
                                                                            (NULL, 197,47,"2170 MHz");

-- CPU
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 198,28,"LGA 1200"),
                                                                            (NULL, 198,29,"4.4 GHz"),
                                                                            (NULL, 198,30,"8"),
                                                                            (NULL, 198,31,"16");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 199,28,"LGA 1200"),
                                                                            (NULL, 199,29,"4.4 GHz"),
                                                                            (NULL, 199,30,"12"),
                                                                            (NULL, 199,31,"24");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 200,28,"LGA 1200"),
                                                                            (NULL, 200,29,"4.8 GHz"),
                                                                            (NULL, 200,30,"4"),
                                                                            (NULL, 200,31,"8");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 201,28,"LGA 1200"),
                                                                            (NULL, 201,29,"4.8 GHz"),
                                                                            (NULL, 201,30,"8"),
                                                                            (NULL, 201,31,"16");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 202,28,"LGA 1200"),
                                                                            (NULL, 202,29,"4.8 GHz"),
                                                                            (NULL, 202,30,"12"),
                                                                            (NULL, 202,31,"24");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 203,28,"LGA 1200"),
                                                                            (NULL, 203,29,"5.4 GHz"),
                                                                            (NULL, 203,30,"4"),
                                                                            (NULL, 203,31,"8");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 204,28,"LGA 1200"),
                                                                            (NULL, 204,29,"5.4 GHz"),
                                                                            (NULL, 204,30,"8"),
                                                                            (NULL, 204,31,"16");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 205,28,"LGA 1200"),
                                                                            (NULL, 205,29,"5.4 GHz"),
                                                                            (NULL, 205,30,"12"),
                                                                            (NULL, 205,31,"24");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 206,28,"LGA 1700"),
                                                                            (NULL, 206,29,"4.4 GHz"),
                                                                            (NULL, 206,30,"4"),
                                                                            (NULL, 206,31,"8");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 207,28,"LGA 1700"),
                                                                            (NULL, 207,29,"4.4 GHz"),
                                                                            (NULL, 207,30,"8"),
                                                                            (NULL, 207,31,"16");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 208,28,"LGA 1700"),
                                                                            (NULL, 208,29,"4.4 GHz"),
                                                                            (NULL, 208,30,"12"),
                                                                            (NULL, 208,31,"24");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 209,28,"LGA 1700"),
                                                                            (NULL, 209,29,"4.8 GHz"),
                                                                            (NULL, 209,30,"4"),
                                                                            (NULL, 209,31,"8");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 210,28,"LGA 1700"),
                                                                            (NULL, 210,29,"4.8 GHz"),
                                                                            (NULL, 210,30,"12"),
                                                                            (NULL, 210,31,"24");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 211,28,"LGA 1700"),
                                                                            (NULL, 211,29,"5.4 GHz"),
                                                                            (NULL, 211,30,"4"),
                                                                            (NULL, 211,31,"8");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 212,28,"LGA 1700"),
                                                                            (NULL, 212,29,"5.4 GHz"),
                                                                            (NULL, 212,30,"8"),
                                                                            (NULL, 212,31,"16");


-- BMC
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 213,32,"Intel B660"),
                                                                            (NULL, 213,28,"LGA 1200"),
                                                                            (NULL, 213,33,"2"),
                                                                            (NULL, 213,34,"iTX"),
                                                                            (NULL, 213,35,"Bluetooth"),
                                                                            (NULL, 213,39,"2667 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 214,32,"Intel B660"),
                                                                            (NULL, 214,28,"LGA 1200"),
                                                                            (NULL, 214,33,"2"),
                                                                            (NULL, 214,34,"iTX"),
                                                                            (NULL, 214,35,"Bluetooth"),
                                                                            (NULL, 214,39,"3200 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 215,32,"Intel B660"),
                                                                            (NULL, 215,28,"LGA 1200"),
                                                                            (NULL, 215,33,"2"),
                                                                            (NULL, 215,34,"ATX"),
                                                                            (NULL, 215,35,"Bluetooth"),
                                                                            (NULL, 215,39,"2667 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 216,32,"Intel B660"),
                                                                            (NULL, 216,28,"LGA 1200"),
                                                                            (NULL, 216,33,"2"),
                                                                            (NULL, 216,34,"ATX"),
                                                                            (NULL, 216,35,"Bluetooth"),
                                                                            (NULL, 216,39,"3200 max");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 217,32,"Intel B660"),
                                                                            (NULL, 217,28,"LGA 1200"),
                                                                            (NULL, 217,33,"4"),
                                                                            (NULL, 217,34,"mini-iTX"),
                                                                            (NULL, 217,35,"Bluetooth"),
                                                                            (NULL, 217,39,"2667 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 218,32,"Intel B660"),
                                                                            (NULL, 218,28,"LGA 1200"),
                                                                            (NULL, 218,33,"4"),
                                                                            (NULL, 218,34,"mini-iTX"),
                                                                            (NULL, 218,35,"Bluetooth"),
                                                                            (NULL, 218,39,"3200 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 219,32,"Intel B660"),
                                                                            (NULL, 219,28,"LGA 1200"),
                                                                            (NULL, 219,33,"4"),
                                                                            (NULL, 219,34,"iTX"),
                                                                            (NULL, 219,35,"Bluetooth"),
                                                                            (NULL, 219,39,"2667 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 220,32,"Intel B660"),
                                                                            (NULL, 220,28,"LGA 1200"),
                                                                            (NULL, 220,33,"4"),
                                                                            (NULL, 220,34,"iTX"),
                                                                            (NULL, 220,35,"Bluetooth"),
                                                                            (NULL, 220,39,"3200 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 221,32,"Intel B660"),
                                                                            (NULL, 221,28,"LGA 1200"),
                                                                            (NULL, 221,33,"4"),
                                                                            (NULL, 221,34,"ATX"),
                                                                            (NULL, 221,35,"Bluetooth"),
                                                                            (NULL, 221,39,"2667 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 222,32,"Intel B660"),
                                                                            (NULL, 222,28,"LGA 1200"),
                                                                            (NULL, 222,33,"4"),
                                                                            (NULL, 222,34,"ATX"),
                                                                            (NULL, 222,35,"Bluetooth"),
                                                                            (NULL, 222,39,"3200 max");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 223,32,"Intel B660"),
                                                                            (NULL, 223,28,"LGA 1700"),
                                                                            (NULL, 223,33,"2"),
                                                                            (NULL, 223,34,"mini-iTX"),
                                                                            (NULL, 223,35,"Bluetooth"),
                                                                            (NULL, 223,39,"2667 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 224,32,"Intel B660"),
                                                                            (NULL, 224,28,"LGA 1700"),
                                                                            (NULL, 224,33,"2"),
                                                                            (NULL, 224,34,"mini-iTX"),
                                                                            (NULL, 224,35,"Bluetooth"),
                                                                            (NULL, 224,39,"3200 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 225,32,"Intel B660"),
                                                                            (NULL, 225,28,"LGA 1700"),
                                                                            (NULL, 225,33,"2"),
                                                                            (NULL, 225,34,"iTX"),
                                                                            (NULL, 225,35,"Bluetooth"),
                                                                            (NULL, 225,39,"2667 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 226,32,"Intel B660"),
                                                                            (NULL, 226,28,"LGA 1700"),
                                                                            (NULL, 226,33,"2"),
                                                                            (NULL, 226,34,"iTX"),
                                                                            (NULL, 226,35,"Bluetooth"),
                                                                            (NULL, 226,39,"3200 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 227,32,"Intel B660"),
                                                                            (NULL, 227,28,"LGA 1700"),
                                                                            (NULL, 227,33,"2"),
                                                                            (NULL, 227,34,"ATX"),
                                                                            (NULL, 227,35,"Bluetooth"),
                                                                            (NULL, 227,39,"2667 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 228,32,"Intel B660"),
                                                                            (NULL, 228,28,"LGA 1700"),
                                                                            (NULL, 228,33,"2"),
                                                                            (NULL, 228,34,"ATX"),
                                                                            (NULL, 228,35,"Bluetooth"),
                                                                            (NULL, 228,39,"3200 max");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 229,32,"Intel B660"),
                                                                            (NULL, 229,28,"LGA 1700"),
                                                                            (NULL, 229,33,"4"),
                                                                            (NULL, 229,34,"mini-iTX"),
                                                                            (NULL, 229,35,"Bluetooth"),
                                                                            (NULL, 229,39,"2667 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 230,32,"Intel B660"),
                                                                            (NULL, 230,28,"LGA 1700"),
                                                                            (NULL, 230,33,"4"),
                                                                            (NULL, 230,34,"mini-iTX"),
                                                                            (NULL, 230,35,"Bluetooth"),
                                                                            (NULL, 230,39,"3200 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 231,32,"Intel B660"),
                                                                            (NULL, 231,28,"LGA 1700"),
                                                                            (NULL, 231,33,"4"),
                                                                            (NULL, 231,34,"iTX"),
                                                                            (NULL, 231,35,"Bluetooth"),
                                                                            (NULL, 231,39,"3200 max");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 232,32,"Intel B660"),
                                                                            (NULL, 232,28,"LGA 1700"),
                                                                            (NULL, 232,33,"4"),
                                                                            (NULL, 232,34,"ATX"),
                                                                            (NULL, 232,35,"Bluetooth"),
                                                                            (NULL, 232,39,"2667 max");


-- RAM
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 233,36,"DDR4"),
                                                                            (NULL, 233,37,"Desktop"),
                                                                            (NULL, 233,38,"4 GB"),
                                                                            (NULL, 233,39,"2667"),
                                                                            (NULL, 233,40,"1 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 234,36,"DDR4"),
                                                                            (NULL, 234,37,"Desktop"),
                                                                            (NULL, 234,38,"4 GB"),
                                                                            (NULL, 234,39,"3200"),
                                                                            (NULL, 234,40,"1 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 235,36,"DDR4"),
                                                                            (NULL, 235,37,"Desktop"),
                                                                            (NULL, 235,38,"4 GB"),
                                                                            (NULL, 235,39,"3200"),
                                                                            (NULL, 235,40,"2 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 236,36,"DDR4"),
                                                                            (NULL, 236,37,"Desktop"),
                                                                            (NULL, 236,38,"8 GB"),
                                                                            (NULL, 236,39,"2667"),
                                                                            (NULL, 236,40,"2 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 237,36,"DDR4"),
                                                                            (NULL, 237,37,"Desktop"),
                                                                            (NULL, 237,38,"8 GB"),
                                                                            (NULL, 237,39,"3200"),
                                                                            (NULL, 237,40,"1 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 238,36,"DDR4"),
                                                                            (NULL, 238,37,"Desktop"),
                                                                            (NULL, 238,38,"8 GB"),
                                                                            (NULL, 238,39,"3200"),
                                                                            (NULL, 238,40,"2 chiếc");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 239,36,"DDR4"),
                                                                            (NULL, 239,37,"Laptop"),
                                                                            (NULL, 239,38,"4 GB"),
                                                                            (NULL, 239,39,"2667"),
                                                                            (NULL, 239,40,"2 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 240,36,"DDR4"),
                                                                            (NULL, 240,37,"Laptop"),
                                                                            (NULL, 240,38,"4 GB"),
                                                                            (NULL, 240,39,"3200"),
                                                                            (NULL, 240,40,"1 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 241,36,"DDR4"),
                                                                            (NULL, 241,37,"Laptop"),
                                                                            (NULL, 241,38,"4 GB"),
                                                                            (NULL, 241,39,"3200"),
                                                                            (NULL, 241,40,"2 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 242,36,"DDR4"),
                                                                            (NULL, 242,37,"Laptop"),
                                                                            (NULL, 242,38,"8 GB"),
                                                                            (NULL, 242,39,"2667"),
                                                                            (NULL, 242,40,"1 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 243,36,"DDR4"),
                                                                            (NULL, 243,37,"Laptop"),
                                                                            (NULL, 243,38,"8 GB"),
                                                                            (NULL, 243,39,"2667"),
                                                                            (NULL, 243,40,"2 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 244,36,"DDR4"),
                                                                            (NULL, 244,37,"Laptop"),
                                                                            (NULL, 244,38,"8 GB"),
                                                                            (NULL, 244,39,"3200"),
                                                                            (NULL, 244,40,"2 chiếc");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 245,36,"DDR5"),
                                                                            (NULL, 245,37,"Desktop"),
                                                                            (NULL, 245,38,"4 GB"),
                                                                            (NULL, 245,39,"2667"),
                                                                            (NULL, 245,40,"1 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 246,36,"DDR5"),
                                                                            (NULL, 246,37,"Desktop"),
                                                                            (NULL, 246,38,"4 GB"),
                                                                            (NULL, 246,39,"2667"),
                                                                            (NULL, 246,40,"2 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 247,36,"DDR5"),
                                                                            (NULL, 247,37,"Desktop"),
                                                                            (NULL, 247,38,"4 GB"),
                                                                            (NULL, 247,39,"3200"),
                                                                            (NULL, 247,40,"1 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 248,36,"DDR5"),
                                                                            (NULL, 248,37,"Desktop"),
                                                                            (NULL, 248,38,"4 GB"),
                                                                            (NULL, 248,39,"3200"),
                                                                            (NULL, 248,40,"2 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 249,36,"DDR5"),
                                                                            (NULL, 249,37,"Desktop"),
                                                                            (NULL, 249,38,"8 GB"),
                                                                            (NULL, 249,39,"2667"),
                                                                            (NULL, 249,40,"1 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 250,36,"DDR5"),
                                                                            (NULL, 250,37,"Desktop"),
                                                                            (NULL, 250,38,"8 GB"),
                                                                            (NULL, 250,39,"2667"),
                                                                            (NULL, 250,40,"2 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 251,36,"DDR5"),
                                                                            (NULL, 251,37,"Desktop"),
                                                                            (NULL, 251,38,"8 GB"),
                                                                            (NULL, 251,39,"3200"),
                                                                            (NULL, 251,40,"2 chiếc");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 252,36,"DDR5"),
                                                                            (NULL, 252,37,"Laptop"),
                                                                            (NULL, 252,38,"4 GB"),
                                                                            (NULL, 252,39,"2667"),
                                                                            (NULL, 252,40,"1 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 253,36,"DDR5"),
                                                                            (NULL, 253,37,"Laptop"),
                                                                            (NULL, 253,38,"4 GB"),
                                                                            (NULL, 253,39,"2667"),
                                                                            (NULL, 253,40,"2 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 254,36,"DDR5"),
                                                                            (NULL, 254,37,"Laptop"),
                                                                            (NULL, 254,38,"4 GB"),
                                                                            (NULL, 254,39,"3200"),
                                                                            (NULL, 254,40,"1 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 255,36,"DDR5"),
                                                                            (NULL, 255,37,"Laptop"),
                                                                            (NULL, 255,38,"4 GB"),
                                                                            (NULL, 255,39,"3200"),
                                                                            (NULL, 255,40,"2 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 256,36,"DDR5"),
                                                                            (NULL, 256,37,"Laptop"),
                                                                            (NULL, 256,38,"8 GB"),
                                                                            (NULL, 256,39,"2667"),
                                                                            (NULL, 256,40,"1 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 257,36,"DDR5"),
                                                                            (NULL, 257,37,"Laptop"),
                                                                            (NULL, 257,38,"8 GB"),
                                                                            (NULL, 257,39,"2667"),
                                                                            (NULL, 257,40,"2 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 258,36,"DDR5"),
                                                                            (NULL, 258,37,"Laptop"),
                                                                            (NULL, 258,38,"8 GB"),
                                                                            (NULL, 258,39,"3200"),
                                                                            (NULL, 258,40,"1 chiếc");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 259,36,"DDR5"),
                                                                            (NULL, 259,37,"Laptop"),
                                                                            (NULL, 259,38,"8 GB"),
                                                                            (NULL, 259,39,"3200"),
                                                                            (NULL, 259,40,"2 chiếc");

-- Nguon
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 260,48,"550W"),
                                                                            (NULL, 260,49,"80 Plus Silver");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 261,48,"550W"),
                                                                            (NULL, 261,49,"80 Plus Gold");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 262,48,"550W"),
                                                                            (NULL, 262,49,"80 Plus Platinum");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 263,48,"650W"),
                                                                            (NULL, 263,49,"80 Plus Bronze");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 264,48,"650W"),
                                                                            (NULL, 264,49,"80 Plus Gold");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 265,48,"650W"),
                                                                            (NULL, 265,49,"80 Plus Platinum");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 266,48,"750W"),
                                                                            (NULL, 266,49,"80 Plus Bronze");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 267,48,"750W"),
                                                                            (NULL, 267,49,"80 Plus Silver");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 268,48,"750W"),
                                                                            (NULL, 268,49,"80 Plus Platinum");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 269,48,"850W"),
                                                                            (NULL, 269,49,"80 Plus Bronze");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 270,48,"850W"),
                                                                            (NULL, 270,49,"80 Plus Silver");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 271,48,"850W"),
                                                                            (NULL, 271,49,"80 Plus Platinum");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 272,48,"1200W"),
                                                                            (NULL, 272,49,"80 Plus Bronze");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 273,48,"1200W"),
                                                                            (NULL, 273,49,"80 Plus Silver");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 274,48,"1200W"),
                                                                            (NULL, 274,49,"80 Plus Gold");

-- Vo case
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 275,50,"Cao cấp + RGB"),
                                                                            (NULL, 275,51,"3 quạt tản nhiệt"),
                                                                            (NULL, 275,52,"Khí cao 160mm"),
                                                                            (NULL, 275,15,"Mid");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 276,50,"Cao cấp + RGB"),
                                                                            (NULL, 276,51,"3 quạt tản nhiệt"),
                                                                            (NULL, 276,52,"Khí cao 160mm"),
                                                                            (NULL, 276,15,"Full");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 277,50,"Cao cấp + RGB"),
                                                                            (NULL, 277,51,"3 quạt tản nhiệt"),
                                                                            (NULL, 277,52,"Khí cao 180mm"),
                                                                            (NULL, 277,15,"Mini");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 278,50,"Cao cấp + RGB"),
                                                                            (NULL, 278,51,"3 quạt tản nhiệt"),
                                                                            (NULL, 278,52,"Khí cao 220mm"),
                                                                            (NULL, 278,15,"Mini");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 279,50,"Cao cấp + RGB"),
                                                                            (NULL, 279,51,"3 quạt tản nhiệt"),
                                                                            (NULL, 279,52,"Khí cao 220mm"),
                                                                            (NULL, 279,15,"Mid");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 280,50,"Cao cấp + RGB"),
                                                                            (NULL, 280,51,"3 quạt tản nhiệt"),
                                                                            (NULL, 280,52,"Khí cao 220mm"),
                                                                            (NULL, 280,15,"Full");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 281,50,"Cao cấp + RGB"),
                                                                            (NULL, 281,51,"4 quạt tản nhiệt"),
                                                                            (NULL, 281,52,"Khí cao 160mm"),
                                                                            (NULL, 281,15,"Mini");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 282,50,"Cao cấp + RGB"),
                                                                            (NULL, 282,51,"4 quạt tản nhiệt"),
                                                                            (NULL, 282,52,"Khí cao 160mm"),
                                                                            (NULL, 282,15,"Mid");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 283,50,"Cao cấp + RGB"),
                                                                            (NULL, 283,51,"4 quạt tản nhiệt"),
                                                                            (NULL, 283,52,"Khí cao 160mm"),
                                                                            (NULL, 283,15,"Full");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 284,50,"Cao cấp + RGB"),
                                                                            (NULL, 284,51,"4 quạt tản nhiệt"),
                                                                            (NULL, 284,52,"Khí cao 180mm"),
                                                                            (NULL, 284,15,"Mini");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 285,50,"Cao cấp + RGB"),
                                                                            (NULL, 285,51,"4 quạt tản nhiệt"),
                                                                            (NULL, 285,52,"Khí cao 180mm"),
                                                                            (NULL, 285,15,"Mid");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 286,50,"Cao cấp + RGB"),
                                                                            (NULL, 286,51,"4 quạt tản nhiệt"),
                                                                            (NULL, 286,52,"Khí cao 180mm"),
                                                                            (NULL, 286,15,"Full");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 287,50,"Cao cấp + RGB"),
                                                                            (NULL, 287,51,"4 quạt tản nhiệt"),
                                                                            (NULL, 287,52,"Khí cao 220mm"),
                                                                            (NULL, 287,15,"Mini");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 288,50,"Cao cấp + RGB"),
                                                                            (NULL, 288,51,"4 quạt tản nhiệt"),
                                                                            (NULL, 288,52,"Khí cao 220mm"),
                                                                            (NULL, 288,15,"Mid");

-- HDD
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 289,15,"2.5 inch"),
                                                                            (NULL, 289,38,"500 GB"),
                                                                            (NULL, 289,41,"7200 rpm"),
                                                                            (NULL, 289,42,"256 MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 290,15,"2.5 inch"),
                                                                            (NULL, 290,38,"500 GB"),
                                                                            (NULL, 290,41,"5600 rpm"),
                                                                            (NULL, 290,42,"512 MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 291,15,"2.5 inch"),
                                                                            (NULL, 291,38,"500 GB"),
                                                                            (NULL, 291,41,"7200 rpm"),
                                                                            (NULL, 291,42,"512 MB");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 292,15,"2.5 inch"),
                                                                            (NULL, 292,38,"1 TB"),
                                                                            (NULL, 292,41,"5600 rpm"),
                                                                            (NULL, 292,42,"256 MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 293,15,"2.5 inch"),
                                                                            (NULL, 293,38,"1 TB"),
                                                                            (NULL, 293,41,"5600 rpm"),
                                                                            (NULL, 293,42,"512 MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 294,15,"2.5 inch"),
                                                                            (NULL, 294,38,"1 TB"),
                                                                            (NULL, 294,41,"7200 rpm"),
                                                                            (NULL, 294,42,"256 MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 295,15,"2.5 inch"),
                                                                            (NULL, 295,38,"1 TB"),
                                                                            (NULL, 295,41,"7200 rpm"),
                                                                            (NULL, 295,42,"512 MB");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 296,15,"2.5 inch"),
                                                                            (NULL, 296,38,"2 TB"),
                                                                            (NULL, 296,41,"5600 rpm"),
                                                                            (NULL, 296,42,"256 MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 297,15,"2.5 inch"),
                                                                            (NULL, 297,38,"2 TB"),
                                                                            (NULL, 297,41,"5600 rpm"),
                                                                            (NULL, 297,42,"512 MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 298,15,"2.5 inch"),
                                                                            (NULL, 298,38,"2 TB"),
                                                                            (NULL, 298,41,"7200 rpm"),
                                                                            (NULL, 298,42,"256 MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 299,15,"2.5 inch"),
                                                                            (NULL, 299,38,"2 TB"),
                                                                            (NULL, 299,41,"7200 rpm"),
                                                                            (NULL, 299,42,"512 MB");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 300,15,"3.5 inch"),
                                                                            (NULL, 300,38,"500 GB"),
                                                                            (NULL, 300,41,"5600 rpm"),
                                                                            (NULL, 300,42,"256 MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 301,15,"3.5 inch"),
                                                                            (NULL, 301,38,"500 GB"),
                                                                            (NULL, 301,41,"5600 rpm"),
                                                                            (NULL, 301,42,"512 MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 302,15,"3.5 inch"),
                                                                            (NULL, 302,38,"500 GB"),
                                                                            (NULL, 302,41,"7200 rpm"),
                                                                            (NULL, 302,42,"256 MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 303,15,"3.5 inch"),
                                                                            (NULL, 303,38,"500 GB"),
                                                                            (NULL, 303,41,"7200 rpm"),
                                                                            (NULL, 303,42,"512 MB");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 304,15,"3.5 inch"),
                                                                            (NULL, 304,38,"1 TB"),
                                                                            (NULL, 304,41,"5600 rpm"),
                                                                            (NULL, 304,42,"512 MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 305,15,"3.5 inch"),
                                                                            (NULL, 305,38,"1 TB"),
                                                                            (NULL, 305,41,"7200 rpm"),
                                                                            (NULL, 305,42,"512 MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 306,15,"3.5 inch"),
                                                                            (NULL, 306,38,"2 TB"),
                                                                            (NULL, 306,41,"5600 rpm"),
                                                                            (NULL, 306,42,"512 MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 307,15,"3.5 inch"),
                                                                            (NULL, 307,38,"2 TB"),
                                                                            (NULL, 307,41,"7200 rpm"),
                                                                            (NULL, 307,42,"256 MB");

-- SSD
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 308,15,"2.5 inch"),
                                                                            (NULL, 308,38,"500 GB"),
                                                                            (NULL, 308,41,"1,200 MB / 1,600 MB"),
                                                                            (NULL, 308,42,"512MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 309,15,"2.5 inch"),
                                                                            (NULL, 309,38,"1 TB"),
                                                                            (NULL, 309,41,"1,200 MB / 1,600 MB"),
                                                                            (NULL, 309,42,"512MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 310,15,"2.5 inch"),
                                                                            (NULL, 310,38,"2 TB"),
                                                                            (NULL, 310,41,"1,000 MB / 1,200 MB"),
                                                                            (NULL, 310,42,"512MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 311,15,"2.5 inch"),
                                                                            (NULL, 311,38,"2 TB"),
                                                                            (NULL, 311,41,"1,200 MB / 1,600 MB"),
                                                                            (NULL, 311,42,"512MB");

INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 312,15,"3.5 inch"),
                                                                            (NULL, 312,38,"500 GB"),
                                                                            (NULL, 312,41,"1,000 MB / 1,200 MB"),
                                                                            (NULL, 312,42,"512MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 313,15,"3.5 inch"),
                                                                            (NULL, 313,38,"500 GB"),
                                                                            (NULL, 313,41,"1,200 MB / 1,600 MB"),
                                                                            (NULL, 313,42,"512MB");
INSERT INTO `san_pham_thong_so` (`maSPTS`, `maSP`,`maTS`,`giaTri`) VALUES   (NULL, 314,15,"3.5 inch"),
                                                                            (NULL, 314,38,"1 TB"),
                                                                            (NULL, 314,41,"1,000 MB / 1,200 MB"),
                                                                            (NULL, 314,42,"512MB");

-- San pham voucher moi
INSERT INTO `san_pham_voucher` (`maSPV`, `maSP`, `maVoucher`, `kichHoat`)
VALUES
(NULL,112,1,1),
(NULL,113,1,1),
(NULL,114,1,1),
(NULL,115,1,1),
(NULL,116,1,1),
(NULL,117,1,1),
(NULL,118,1,1),
(NULL,119,1,1),
(NULL,120,1,1),
(NULL,121,1,1),
(NULL,122,1,1),
(NULL,123,1,1),
(NULL,124,1,1),
(NULL,125,1,1),
(NULL,126,1,1),
(NULL,127,1,1),
(NULL,128,1,1),
(NULL,129,1,1),
(NULL,130,1,1),
(NULL,131,1,1),
(NULL,132,1,1),
(NULL,133,1,1),
(NULL,134,1,1),
(NULL,135,1,1),
(NULL,136,1,1),
(NULL,137,1,1),
(NULL,138,1,1),
(NULL,139,1,1),
(NULL,140,1,1),
(NULL,141,1,1),
(NULL,142,1,1),
(NULL,143,1,1),
(NULL,144,1,1),
(NULL,145,1,1),
(NULL,146,1,1),
(NULL,147,1,1),
(NULL,148,1,1),
(NULL,149,1,1),
(NULL,150,1,1),
(NULL,151,1,1),
(NULL,152,1,1),
(NULL,153,1,1),
(NULL,154,1,1),
(NULL,155,1,1),
(NULL,156,1,1),
(NULL,157,1,1),
(NULL,158,1,1),
(NULL,159,1,1),
(NULL,160,1,1),
(NULL,161,1,1),
(NULL,162,1,1),
(NULL,163,1,1),
(NULL,164,1,1),
(NULL,165,1,1),
(NULL,166,1,1),
(NULL,167,1,1),
(NULL,168,1,1),
(NULL,169,1,1),
(NULL,170,1,1),
(NULL,171,1,1),
(NULL,172,1,1),
(NULL,173,1,1),
(NULL,174,1,1),
(NULL,175,1,1),
(NULL,176,1,1),
(NULL,177,1,1),
(NULL,178,1,1),
(NULL,179,1,1),
(NULL,180,1,1),
(NULL,181,1,1),
(NULL,182,1,1),
(NULL,183,1,1),
(NULL,184,1,1),
(NULL,185,1,1),
(NULL,186,1,1),
(NULL,187,1,1),
(NULL,188,1,1),
(NULL,189,1,1),
(NULL,190,1,1),
(NULL,191,1,1),
(NULL,192,1,1),
(NULL,193,1,1),
(NULL,194,1,1),
(NULL,195,1,1),
(NULL,196,1,1),
(NULL,197,1,1),
(NULL,198,1,1),
(NULL,199,1,1),
(NULL,200,1,1),
(NULL,201,1,1),
(NULL,202,1,1),
(NULL,203,1,1),
(NULL,204,1,1),
(NULL,205,1,1),
(NULL,206,1,1),
(NULL,207,1,1),
(NULL,208,1,1),
(NULL,209,1,1),
(NULL,210,1,1),
(NULL,211,1,1),
(NULL,212,1,1),
(NULL,213,1,1),
(NULL,214,1,1),
(NULL,215,1,1),
(NULL,216,1,1),
(NULL,217,1,1),
(NULL,218,1,1),
(NULL,219,1,1),
(NULL,220,1,1),
(NULL,221,1,1),
(NULL,222,1,1),
(NULL,223,1,1),
(NULL,224,1,1),
(NULL,225,1,1),
(NULL,226,1,1),
(NULL,227,1,1),
(NULL,228,1,1),
(NULL,229,1,1),
(NULL,230,1,1),
(NULL,231,1,1),
(NULL,232,1,1),
(NULL,233,1,1),
(NULL,234,1,1),
(NULL,235,1,1),
(NULL,236,1,1),
(NULL,237,1,1),
(NULL,238,1,1),
(NULL,239,1,1),
(NULL,240,1,1),
(NULL,241,1,1),
(NULL,242,1,1),
(NULL,243,1,1),
(NULL,244,1,1),
(NULL,245,1,1),
(NULL,246,1,1),
(NULL,247,1,1),
(NULL,248,1,1),
(NULL,249,1,1),
(NULL,250,1,1),
(NULL,251,1,1),
(NULL,252,1,1),
(NULL,253,1,1),
(NULL,254,1,1),
(NULL,255,1,1),
(NULL,256,1,1),
(NULL,257,1,1),
(NULL,258,1,1),
(NULL,259,1,1),
(NULL,260,1,1),
(NULL,261,1,1),
(NULL,262,1,1),
(NULL,263,1,1),
(NULL,264,1,1),
(NULL,265,1,1),
(NULL,266,1,1),
(NULL,267,1,1),
(NULL,268,1,1),
(NULL,269,1,1),
(NULL,270,1,1),
(NULL,271,1,1),
(NULL,272,1,1),
(NULL,273,1,1),
(NULL,274,1,1),
(NULL,275,1,1),
(NULL,276,1,1),
(NULL,277,1,1),
(NULL,278,1,1),
(NULL,279,1,1),
(NULL,280,1,1),
(NULL,281,1,1),
(NULL,282,1,1),
(NULL,283,1,1),
(NULL,284,1,1),
(NULL,285,1,1),
(NULL,286,1,1),
(NULL,287,1,1),
(NULL,288,1,1),
(NULL,289,1,1),
(NULL,290,1,1),
(NULL,291,1,1),
(NULL,292,1,1),
(NULL,293,1,1),
(NULL,294,1,1),
(NULL,295,1,1),
(NULL,296,1,1),
(NULL,297,1,1),
(NULL,298,1,1),
(NULL,299,1,1),
(NULL,300,1,1),
(NULL,301,1,1),
(NULL,302,1,1),
(NULL,303,1,1),
(NULL,304,1,1),
(NULL,305,1,1),
(NULL,306,1,1),
(NULL,307,1,1),
(NULL,308,1,1),
(NULL,309,1,1),
(NULL,310,1,1),
(NULL,311,1,1),
(NULL,312,1,1),
(NULL,313,1,1),
(NULL,314,1,1);

-- Bang nhap kho chi tiet moi
INSERT INTO `nhap_kho_chi_tiet` (`maNKCT`, `maNK`, `maSP`, `soLuong`, `giaNhap`)
VALUES
(NULL, '6', '112', '10', '800000'),
(NULL, '6', '113', '10', '800000'),
(NULL, '6', '114', '10', '800000'),
(NULL, '6', '115', '10', '800000'),
(NULL, '6', '116', '10', '800000'),
(NULL, '6', '117', '10', '800000'),
(NULL, '6', '118', '10', '800000'),
(NULL, '6', '119', '10', '800000'),
(NULL, '6', '120', '10', '800000'),
(NULL, '6', '121', '10', '800000'),
(NULL, '6', '122', '10', '800000'),
(NULL, '6', '123', '10', '800000'),
(NULL, '6', '124', '10', '800000'),
(NULL, '6', '125', '10', '800000'),
(NULL, '6', '126', '10', '800000'),
(NULL, '6', '127', '10', '800000'),
(NULL, '6', '128', '10', '800000'),
(NULL, '6', '129', '10', '800000'),
(NULL, '6', '130', '10', '800000'),
(NULL, '6', '131', '10', '800000'),
(NULL, '6', '132', '10', '800000'),
(NULL, '6', '133', '10', '800000'),
(NULL, '6', '134', '10', '800000'),
(NULL, '6', '135', '10', '800000'),
(NULL, '6', '136', '10', '800000'),
(NULL, '6', '137', '10', '800000'),
(NULL, '6', '138', '10', '800000'),
(NULL, '6', '139', '10', '800000'),
(NULL, '6', '140', '10', '800000'),
(NULL, '6', '141', '10', '800000'),
(NULL, '6', '142', '10', '800000'),
(NULL, '6', '143', '10', '800000'),
(NULL, '6', '144', '10', '800000'),
(NULL, '6', '145', '10', '800000'),
(NULL, '6', '146', '10', '800000'),
(NULL, '6', '147', '10', '800000'),
(NULL, '6', '148', '10', '800000'),
(NULL, '6', '149', '10', '800000'),
(NULL, '6', '150', '10', '800000'),
(NULL, '6', '151', '10', '800000'),
(NULL, '6', '152', '10', '800000'),
(NULL, '6', '153', '10', '800000'),
(NULL, '6', '154', '10', '800000'),
(NULL, '6', '155', '10', '800000'),
(NULL, '6', '156', '10', '800000'),
(NULL, '6', '157', '10', '800000'),
(NULL, '6', '158', '10', '800000'),
(NULL, '6', '159', '10', '800000'),
(NULL, '6', '160', '10', '800000'),
(NULL, '6', '161', '10', '800000'),
(NULL, '6', '162', '10', '800000'),
(NULL, '6', '163', '10', '800000'),
(NULL, '6', '164', '10', '800000'),
(NULL, '6', '165', '10', '800000'),
(NULL, '6', '166', '10', '800000'),
(NULL, '6', '167', '10', '800000'),
(NULL, '6', '168', '10', '800000'),
(NULL, '6', '169', '10', '800000'),
(NULL, '6', '170', '10', '800000'),
(NULL, '6', '171', '10', '800000'),
(NULL, '6', '172', '10', '800000'),
(NULL, '6', '173', '10', '800000'),
(NULL, '6', '174', '10', '800000'),
(NULL, '6', '175', '10', '800000'),
(NULL, '6', '176', '10', '800000'),
(NULL, '6', '177', '10', '800000'),
(NULL, '6', '178', '10', '800000'),
(NULL, '6', '179', '10', '800000'),
(NULL, '6', '180', '10', '800000'),
(NULL, '6', '181', '10', '800000'),
(NULL, '6', '182', '10', '800000'),
(NULL, '6', '183', '10', '800000'),
(NULL, '6', '184', '10', '800000'),
(NULL, '6', '185', '10', '800000'),
(NULL, '6', '186', '10', '800000'),
(NULL, '6', '187', '10', '800000'),
(NULL, '6', '188', '10', '800000'),
(NULL, '6', '189', '10', '800000'),
(NULL, '6', '190', '10', '800000'),
(NULL, '6', '191', '10', '800000'),
(NULL, '6', '192', '10', '800000'),
(NULL, '6', '193', '10', '800000'),
(NULL, '6', '194', '10', '800000'),
(NULL, '6', '195', '10', '800000'),
(NULL, '6', '196', '10', '800000'),
(NULL, '6', '197', '10', '800000'),
(NULL, '6', '198', '10', '800000'),
(NULL, '6', '199', '10', '800000'),
(NULL, '6', '200', '10', '800000'),
(NULL, '6', '201', '10', '800000'),
(NULL, '6', '202', '10', '800000'),
(NULL, '6', '203', '10', '800000'),
(NULL, '6', '204', '10', '800000'),
(NULL, '6', '205', '10', '800000'),
(NULL, '6', '206', '10', '800000'),
(NULL, '6', '207', '10', '800000'),
(NULL, '6', '208', '10', '800000'),
(NULL, '6', '209', '10', '800000'),
(NULL, '6', '210', '10', '800000'),
(NULL, '6', '211', '10', '800000'),
(NULL, '6', '212', '10', '800000'),
(NULL, '6', '213', '10', '800000'),
(NULL, '6', '214', '10', '800000'),
(NULL, '6', '215', '10', '800000'),
(NULL, '6', '216', '10', '800000'),
(NULL, '6', '217', '10', '800000'),
(NULL, '6', '218', '10', '800000'),
(NULL, '6', '219', '10', '800000'),
(NULL, '6', '220', '10', '800000'),
(NULL, '6', '221', '10', '800000'),
(NULL, '6', '222', '10', '800000'),
(NULL, '6', '223', '10', '800000'),
(NULL, '6', '224', '10', '800000'),
(NULL, '6', '225', '10', '800000'),
(NULL, '6', '226', '10', '800000'),
(NULL, '6', '227', '10', '800000'),
(NULL, '6', '228', '10', '800000'),
(NULL, '6', '229', '10', '800000'),
(NULL, '6', '230', '10', '800000'),
(NULL, '6', '231', '10', '800000'),
(NULL, '6', '232', '10', '800000'),
(NULL, '6', '233', '10', '800000'),
(NULL, '6', '234', '10', '800000'),
(NULL, '6', '235', '10', '800000'),
(NULL, '6', '236', '10', '800000'),
(NULL, '6', '237', '10', '800000'),
(NULL, '6', '238', '10', '800000'),
(NULL, '6', '239', '10', '800000'),
(NULL, '6', '240', '10', '800000'),
(NULL, '6', '241', '10', '800000'),
(NULL, '6', '242', '10', '800000'),
(NULL, '6', '243', '10', '800000'),
(NULL, '6', '244', '10', '800000'),
(NULL, '6', '245', '10', '800000'),
(NULL, '6', '246', '10', '800000'),
(NULL, '6', '247', '10', '800000'),
(NULL, '6', '248', '10', '800000'),
(NULL, '6', '249', '10', '800000'),
(NULL, '6', '250', '10', '800000'),
(NULL, '6', '251', '10', '800000'),
(NULL, '6', '252', '10', '800000'),
(NULL, '6', '253', '10', '800000'),
(NULL, '6', '254', '10', '800000'),
(NULL, '6', '255', '10', '800000'),
(NULL, '6', '256', '10', '800000'),
(NULL, '6', '257', '10', '800000'),
(NULL, '6', '258', '10', '800000'),
(NULL, '6', '259', '10', '800000'),
(NULL, '6', '260', '10', '800000'),
(NULL, '6', '261', '10', '800000'),
(NULL, '6', '262', '10', '800000'),
(NULL, '6', '263', '10', '800000'),
(NULL, '6', '264', '10', '800000'),
(NULL, '6', '265', '10', '800000'),
(NULL, '6', '266', '10', '800000'),
(NULL, '6', '267', '10', '800000'),
(NULL, '6', '268', '10', '800000'),
(NULL, '6', '269', '10', '800000'),
(NULL, '6', '270', '10', '800000'),
(NULL, '6', '271', '10', '800000'),
(NULL, '6', '272', '10', '800000'),
(NULL, '6', '273', '10', '800000'),
(NULL, '6', '274', '10', '800000'),
(NULL, '6', '275', '10', '800000'),
(NULL, '6', '276', '10', '800000'),
(NULL, '6', '277', '10', '800000'),
(NULL, '6', '278', '10', '800000'),
(NULL, '6', '279', '10', '800000'),
(NULL, '6', '280', '10', '800000'),
(NULL, '6', '281', '10', '800000'),
(NULL, '6', '282', '10', '800000'),
(NULL, '6', '283', '10', '800000'),
(NULL, '6', '284', '10', '800000'),
(NULL, '6', '285', '10', '800000'),
(NULL, '6', '286', '10', '800000'),
(NULL, '6', '287', '10', '800000'),
(NULL, '6', '288', '10', '800000'),
(NULL, '6', '289', '10', '800000'),
(NULL, '6', '290', '10', '800000'),
(NULL, '6', '291', '10', '800000'),
(NULL, '6', '292', '10', '800000'),
(NULL, '6', '293', '10', '800000'),
(NULL, '6', '294', '10', '800000'),
(NULL, '6', '295', '10', '800000'),
(NULL, '6', '296', '10', '800000'),
(NULL, '6', '297', '10', '800000'),
(NULL, '6', '298', '10', '800000'),
(NULL, '6', '299', '10', '800000'),
(NULL, '6', '300', '10', '800000'),
(NULL, '6', '301', '10', '800000'),
(NULL, '6', '302', '10', '800000'),
(NULL, '6', '303', '10', '800000'),
(NULL, '6', '304', '10', '800000'),
(NULL, '6', '305', '10', '800000'),
(NULL, '6', '306', '10', '800000'),
(NULL, '6', '307', '10', '800000'),
(NULL, '6', '308', '10', '800000'),
(NULL, '6', '309', '10', '800000'),
(NULL, '6', '310', '10', '800000'),
(NULL, '6', '311', '10', '800000'),
(NULL, '6', '312', '10', '800000'),
(NULL, '6', '313', '10', '800000'),
(NULL, '6', '314', '10', '800000');


-- Serial moi
INSERT INTO `serial` (`maSerial`, `maSP`, `serial`, `maNK`, `maHDCT`)
VALUES
(NULL, '112', 'FOR2022US2', '6', NULL),
(NULL, '112', 'FOR2022US3', '6', NULL),
(NULL, '112', 'FOR2022US4', '6', NULL),
(NULL, '112', 'FOR2022US5', '6', NULL),
(NULL, '112', 'FOR2022US6', '6', NULL),
(NULL, '112', 'FOR2022US7', '6', NULL),
(NULL, '112', 'FOR2022US8', '6', NULL),
(NULL, '112', 'FOR2022US9', '6', NULL),
(NULL, '112', 'FOR2022US10', '6', NULL),
(NULL, '112', 'FOR2022US11', '6', NULL),

(NULL, '113', 'FOR2022US12', '6', NULL),
(NULL, '113', 'FOR2022US13', '6', NULL),
(NULL, '113', 'FOR2022US14', '6', NULL),
(NULL, '113', 'FOR2022US15', '6', NULL),
(NULL, '113', 'FOR2022US16', '6', NULL),
(NULL, '113', 'FOR2022US17', '6', NULL),
(NULL, '113', 'FOR2022US18', '6', NULL),
(NULL, '113', 'FOR2022US19', '6', NULL),
(NULL, '113', 'FOR2022US20', '6', NULL),
(NULL, '113', 'FOR2022US21', '6', NULL),

(NULL, '114', 'FOR2022US22', '6', NULL),
(NULL, '114', 'FOR2022US23', '6', NULL),
(NULL, '114', 'FOR2022US24', '6', NULL),
(NULL, '114', 'FOR2022US25', '6', NULL),
(NULL, '114', 'FOR2022US26', '6', NULL),
(NULL, '114', 'FOR2022US27', '6', NULL),
(NULL, '114', 'FOR2022US28', '6', NULL),
(NULL, '114', 'FOR2022US29', '6', NULL),
(NULL, '114', 'FOR2022US30', '6', NULL),
(NULL, '114', 'FOR2022US31', '6', NULL),

(NULL, '115', 'FOR2022US32', '6', NULL),
(NULL, '115', 'FOR2022US33', '6', NULL),
(NULL, '115', 'FOR2022US34', '6', NULL),
(NULL, '115', 'FOR2022US35', '6', NULL),
(NULL, '115', 'FOR2022US36', '6', NULL),
(NULL, '115', 'FOR2022US37', '6', NULL),
(NULL, '115', 'FOR2022US38', '6', NULL),
(NULL, '115', 'FOR2022US39', '6', NULL),
(NULL, '115', 'FOR2022US40', '6', NULL),
(NULL, '115', 'FOR2022US41', '6', NULL),

(NULL, '116', 'FOR2022US42', '6', NULL),
(NULL, '116', 'FOR2022US43', '6', NULL),
(NULL, '116', 'FOR2022US44', '6', NULL),
(NULL, '116', 'FOR2022US45', '6', NULL),
(NULL, '116', 'FOR2022US46', '6', NULL),
(NULL, '116', 'FOR2022US47', '6', NULL),
(NULL, '116', 'FOR2022US48', '6', NULL),
(NULL, '116', 'FOR2022US49', '6', NULL),
(NULL, '116', 'FOR2022US50', '6', NULL),
(NULL, '116', 'FOR2022US51', '6', NULL),

(NULL, '117', 'FOR2022US52', '6', NULL),
(NULL, '117', 'FOR2022US53', '6', NULL),
(NULL, '117', 'FOR2022US54', '6', NULL),
(NULL, '117', 'FOR2022US55', '6', NULL),
(NULL, '117', 'FOR2022US56', '6', NULL),
(NULL, '117', 'FOR2022US57', '6', NULL),
(NULL, '117', 'FOR2022US58', '6', NULL),
(NULL, '117', 'FOR2022US59', '6', NULL),
(NULL, '117', 'FOR2022US60', '6', NULL),
(NULL, '117', 'FOR2022US61', '6', NULL),

(NULL, '118', 'FOR2022US62', '6', NULL),
(NULL, '118', 'FOR2022US63', '6', NULL),
(NULL, '118', 'FOR2022US64', '6', NULL),
(NULL, '118', 'FOR2022US65', '6', NULL),
(NULL, '118', 'FOR2022US66', '6', NULL),
(NULL, '118', 'FOR2022US67', '6', NULL),
(NULL, '118', 'FOR2022US68', '6', NULL),
(NULL, '118', 'FOR2022US69', '6', NULL),
(NULL, '118', 'FOR2022US70', '6', NULL),
(NULL, '118', 'FOR2022US71', '6', NULL),

(NULL, '119', 'FOR2022US72', '6', NULL),
(NULL, '119', 'FOR2022US73', '6', NULL),
(NULL, '119', 'FOR2022US74', '6', NULL),
(NULL, '119', 'FOR2022US75', '6', NULL),
(NULL, '119', 'FOR2022US76', '6', NULL),
(NULL, '119', 'FOR2022US77', '6', NULL),
(NULL, '119', 'FOR2022US78', '6', NULL),
(NULL, '119', 'FOR2022US79', '6', NULL),
(NULL, '119', 'FOR2022US80', '6', NULL),
(NULL, '119', 'FOR2022US81', '6', NULL),

(NULL, '120', 'FOR2022US82', '6', NULL),
(NULL, '120', 'FOR2022US83', '6', NULL),
(NULL, '120', 'FOR2022US84', '6', NULL),
(NULL, '120', 'FOR2022US85', '6', NULL),
(NULL, '120', 'FOR2022US86', '6', NULL),
(NULL, '120', 'FOR2022US87', '6', NULL),
(NULL, '120', 'FOR2022US88', '6', NULL),
(NULL, '120', 'FOR2022US89', '6', NULL),
(NULL, '120', 'FOR2022US90', '6', NULL),
(NULL, '120', 'FOR2022US91', '6', NULL),

(NULL, '121', 'FOR2022US92', '6', NULL),
(NULL, '121', 'FOR2022US93', '6', NULL),
(NULL, '121', 'FOR2022US94', '6', NULL),
(NULL, '121', 'FOR2022US95', '6', NULL),
(NULL, '121', 'FOR2022US96', '6', NULL),
(NULL, '121', 'FOR2022US97', '6', NULL),
(NULL, '121', 'FOR2022US98', '6', NULL),
(NULL, '121', 'FOR2022US99', '6', NULL),
(NULL, '121', 'FOR2022US100', '6', NULL),
(NULL, '121', 'FOR2022US101', '6', NULL),

(NULL, '122', 'FOR2022US102', '6', NULL),
(NULL, '122', 'FOR2022US103', '6', NULL),
(NULL, '122', 'FOR2022US104', '6', NULL),
(NULL, '122', 'FOR2022US105', '6', NULL),
(NULL, '122', 'FOR2022US106', '6', NULL),
(NULL, '122', 'FOR2022US107', '6', NULL),
(NULL, '122', 'FOR2022US108', '6', NULL),
(NULL, '122', 'FOR2022US109', '6', NULL),
(NULL, '122', 'FOR2022US110', '6', NULL),
(NULL, '122', 'FOR2022US111', '6', NULL),

(NULL, '123', 'FOR2022US112', '6', NULL),
(NULL, '123', 'FOR2022US113', '6', NULL),
(NULL, '123', 'FOR2022US114', '6', NULL),
(NULL, '123', 'FOR2022US115', '6', NULL),
(NULL, '123', 'FOR2022US116', '6', NULL),
(NULL, '123', 'FOR2022US117', '6', NULL),
(NULL, '123', 'FOR2022US118', '6', NULL),
(NULL, '123', 'FOR2022US119', '6', NULL),
(NULL, '123', 'FOR2022US120', '6', NULL),
(NULL, '123', 'FOR2022US121', '6', NULL),

(NULL, '124', 'FOR2022US122', '6', NULL),
(NULL, '124', 'FOR2022US123', '6', NULL),
(NULL, '124', 'FOR2022US124', '6', NULL),
(NULL, '124', 'FOR2022US125', '6', NULL),
(NULL, '124', 'FOR2022US126', '6', NULL),
(NULL, '124', 'FOR2022US127', '6', NULL),
(NULL, '124', 'FOR2022US128', '6', NULL),
(NULL, '124', 'FOR2022US129', '6', NULL),
(NULL, '124', 'FOR2022US130', '6', NULL),
(NULL, '124', 'FOR2022US131', '6', NULL),

(NULL, '125', 'FOR2022US132', '6', NULL),
(NULL, '125', 'FOR2022US133', '6', NULL),
(NULL, '125', 'FOR2022US134', '6', NULL),
(NULL, '125', 'FOR2022US135', '6', NULL),
(NULL, '125', 'FOR2022US136', '6', NULL),
(NULL, '125', 'FOR2022US137', '6', NULL),
(NULL, '125', 'FOR2022US138', '6', NULL),
(NULL, '125', 'FOR2022US139', '6', NULL),
(NULL, '125', 'FOR2022US140', '6', NULL),
(NULL, '125', 'FOR2022US141', '6', NULL),

(NULL, '126', 'FOR2022US142', '6', NULL),
(NULL, '126', 'FOR2022US143', '6', NULL),
(NULL, '126', 'FOR2022US144', '6', NULL),
(NULL, '126', 'FOR2022US145', '6', NULL),
(NULL, '126', 'FOR2022US146', '6', NULL),
(NULL, '126', 'FOR2022US147', '6', NULL),
(NULL, '126', 'FOR2022US148', '6', NULL),
(NULL, '126', 'FOR2022US149', '6', NULL),
(NULL, '126', 'FOR2022US150', '6', NULL),
(NULL, '126', 'FOR2022US151', '6', NULL),

(NULL, '127', 'FOR2022US152', '6', NULL),
(NULL, '127', 'FOR2022US153', '6', NULL),
(NULL, '127', 'FOR2022US154', '6', NULL),
(NULL, '127', 'FOR2022US155', '6', NULL),
(NULL, '127', 'FOR2022US156', '6', NULL),
(NULL, '127', 'FOR2022US157', '6', NULL),
(NULL, '127', 'FOR2022US158', '6', NULL),
(NULL, '127', 'FOR2022US159', '6', NULL),
(NULL, '127', 'FOR2022US160', '6', NULL),
(NULL, '127', 'FOR2022US161', '6', NULL),

(NULL, '128', 'FOR2022US162', '6', NULL),
(NULL, '128', 'FOR2022US163', '6', NULL),
(NULL, '128', 'FOR2022US164', '6', NULL),
(NULL, '128', 'FOR2022US165', '6', NULL),
(NULL, '128', 'FOR2022US166', '6', NULL),
(NULL, '128', 'FOR2022US167', '6', NULL),
(NULL, '128', 'FOR2022US168', '6', NULL),
(NULL, '128', 'FOR2022US169', '6', NULL),
(NULL, '128', 'FOR2022US170', '6', NULL),
(NULL, '128', 'FOR2022US171', '6', NULL),

(NULL, '129', 'FOR2022US172', '6', NULL),
(NULL, '129', 'FOR2022US173', '6', NULL),
(NULL, '129', 'FOR2022US174', '6', NULL),
(NULL, '129', 'FOR2022US175', '6', NULL),
(NULL, '129', 'FOR2022US176', '6', NULL),
(NULL, '129', 'FOR2022US177', '6', NULL),
(NULL, '129', 'FOR2022US178', '6', NULL),
(NULL, '129', 'FOR2022US179', '6', NULL),
(NULL, '129', 'FOR2022US180', '6', NULL),
(NULL, '129', 'FOR2022US181', '6', NULL),

(NULL, '130', 'FOR2022US182', '6', NULL),
(NULL, '130', 'FOR2022US183', '6', NULL),
(NULL, '130', 'FOR2022US184', '6', NULL),
(NULL, '130', 'FOR2022US185', '6', NULL),
(NULL, '130', 'FOR2022US186', '6', NULL),
(NULL, '130', 'FOR2022US187', '6', NULL),
(NULL, '130', 'FOR2022US188', '6', NULL),
(NULL, '130', 'FOR2022US189', '6', NULL),
(NULL, '130', 'FOR2022US190', '6', NULL),
(NULL, '130', 'FOR2022US191', '6', NULL),

(NULL, '131', 'FOR2022US192', '6', NULL),
(NULL, '131', 'FOR2022US193', '6', NULL),
(NULL, '131', 'FOR2022US194', '6', NULL),
(NULL, '131', 'FOR2022US195', '6', NULL),
(NULL, '131', 'FOR2022US196', '6', NULL),
(NULL, '131', 'FOR2022US197', '6', NULL),
(NULL, '131', 'FOR2022US198', '6', NULL),
(NULL, '131', 'FOR2022US199', '6', NULL),
(NULL, '131', 'FOR2022US200', '6', NULL),
(NULL, '131', 'FOR2022US201', '6', NULL),

(NULL, '132', 'FOR2022US202', '6', NULL),
(NULL, '132', 'FOR2022US203', '6', NULL),
(NULL, '132', 'FOR2022US204', '6', NULL),
(NULL, '132', 'FOR2022US205', '6', NULL),
(NULL, '132', 'FOR2022US206', '6', NULL),
(NULL, '132', 'FOR2022US207', '6', NULL),
(NULL, '132', 'FOR2022US208', '6', NULL),
(NULL, '132', 'FOR2022US209', '6', NULL),
(NULL, '132', 'FOR2022US210', '6', NULL),
(NULL, '132', 'FOR2022US211', '6', NULL),

(NULL, '133', 'FOR2022US212', '6', NULL),
(NULL, '133', 'FOR2022US213', '6', NULL),
(NULL, '133', 'FOR2022US214', '6', NULL),
(NULL, '133', 'FOR2022US215', '6', NULL),
(NULL, '133', 'FOR2022US216', '6', NULL),
(NULL, '133', 'FOR2022US217', '6', NULL),
(NULL, '133', 'FOR2022US218', '6', NULL),
(NULL, '133', 'FOR2022US219', '6', NULL),
(NULL, '133', 'FOR2022US220', '6', NULL),
(NULL, '133', 'FOR2022US221', '6', NULL),

(NULL, '134', 'FOR2022US222', '6', NULL),
(NULL, '134', 'FOR2022US223', '6', NULL),
(NULL, '134', 'FOR2022US224', '6', NULL),
(NULL, '134', 'FOR2022US225', '6', NULL),
(NULL, '134', 'FOR2022US226', '6', NULL),
(NULL, '134', 'FOR2022US227', '6', NULL),
(NULL, '134', 'FOR2022US228', '6', NULL),
(NULL, '134', 'FOR2022US229', '6', NULL),
(NULL, '134', 'FOR2022US230', '6', NULL),
(NULL, '134', 'FOR2022US231', '6', NULL),

(NULL, '135', 'FOR2022US232', '6', NULL),
(NULL, '135', 'FOR2022US233', '6', NULL),
(NULL, '135', 'FOR2022US234', '6', NULL),
(NULL, '135', 'FOR2022US235', '6', NULL),
(NULL, '135', 'FOR2022US236', '6', NULL),
(NULL, '135', 'FOR2022US237', '6', NULL),
(NULL, '135', 'FOR2022US238', '6', NULL),
(NULL, '135', 'FOR2022US239', '6', NULL),
(NULL, '135', 'FOR2022US240', '6', NULL),
(NULL, '135', 'FOR2022US241', '6', NULL),

(NULL, '136', 'FOR2022US242', '6', NULL),
(NULL, '136', 'FOR2022US243', '6', NULL),
(NULL, '136', 'FOR2022US244', '6', NULL),
(NULL, '136', 'FOR2022US245', '6', NULL),
(NULL, '136', 'FOR2022US246', '6', NULL),
(NULL, '136', 'FOR2022US247', '6', NULL),
(NULL, '136', 'FOR2022US248', '6', NULL),
(NULL, '136', 'FOR2022US249', '6', NULL),
(NULL, '136', 'FOR2022US250', '6', NULL),
(NULL, '136', 'FOR2022US251', '6', NULL),

(NULL, '137', 'FOR2022US252', '6', NULL),
(NULL, '137', 'FOR2022US253', '6', NULL),
(NULL, '137', 'FOR2022US254', '6', NULL),
(NULL, '137', 'FOR2022US255', '6', NULL),
(NULL, '137', 'FOR2022US256', '6', NULL),
(NULL, '137', 'FOR2022US257', '6', NULL),
(NULL, '137', 'FOR2022US258', '6', NULL),
(NULL, '137', 'FOR2022US259', '6', NULL),
(NULL, '137', 'FOR2022US260', '6', NULL),
(NULL, '137', 'FOR2022US261', '6', NULL),

(NULL, '138', 'FOR2022US262', '6', NULL),
(NULL, '138', 'FOR2022US263', '6', NULL),
(NULL, '138', 'FOR2022US264', '6', NULL),
(NULL, '138', 'FOR2022US265', '6', NULL),
(NULL, '138', 'FOR2022US266', '6', NULL),
(NULL, '138', 'FOR2022US267', '6', NULL),
(NULL, '138', 'FOR2022US268', '6', NULL),
(NULL, '138', 'FOR2022US269', '6', NULL),
(NULL, '138', 'FOR2022US270', '6', NULL),
(NULL, '138', 'FOR2022US271', '6', NULL),

(NULL, '139', 'FOR2022US272', '6', NULL),
(NULL, '139', 'FOR2022US273', '6', NULL),
(NULL, '139', 'FOR2022US274', '6', NULL),
(NULL, '139', 'FOR2022US275', '6', NULL),
(NULL, '139', 'FOR2022US276', '6', NULL),
(NULL, '139', 'FOR2022US277', '6', NULL),
(NULL, '139', 'FOR2022US278', '6', NULL),
(NULL, '139', 'FOR2022US279', '6', NULL),
(NULL, '139', 'FOR2022US280', '6', NULL),
(NULL, '139', 'FOR2022US281', '6', NULL),

(NULL, '140', 'FOR2022US282', '6', NULL),
(NULL, '140', 'FOR2022US283', '6', NULL),
(NULL, '140', 'FOR2022US284', '6', NULL),
(NULL, '140', 'FOR2022US285', '6', NULL),
(NULL, '140', 'FOR2022US286', '6', NULL),
(NULL, '140', 'FOR2022US287', '6', NULL),
(NULL, '140', 'FOR2022US288', '6', NULL),
(NULL, '140', 'FOR2022US289', '6', NULL),
(NULL, '140', 'FOR2022US290', '6', NULL),
(NULL, '140', 'FOR2022US291', '6', NULL),

(NULL, '141', 'FOR2022US292', '6', NULL),
(NULL, '141', 'FOR2022US293', '6', NULL),
(NULL, '141', 'FOR2022US294', '6', NULL),
(NULL, '141', 'FOR2022US295', '6', NULL),
(NULL, '141', 'FOR2022US296', '6', NULL),
(NULL, '141', 'FOR2022US297', '6', NULL),
(NULL, '141', 'FOR2022US298', '6', NULL),
(NULL, '141', 'FOR2022US299', '6', NULL),
(NULL, '141', 'FOR2022US300', '6', NULL),
(NULL, '141', 'FOR2022US301', '6', NULL),

(NULL, '142', 'FOR2022US302', '6', NULL),
(NULL, '142', 'FOR2022US303', '6', NULL),
(NULL, '142', 'FOR2022US304', '6', NULL),
(NULL, '142', 'FOR2022US305', '6', NULL),
(NULL, '142', 'FOR2022US306', '6', NULL),
(NULL, '142', 'FOR2022US307', '6', NULL),
(NULL, '142', 'FOR2022US308', '6', NULL),
(NULL, '142', 'FOR2022US309', '6', NULL),
(NULL, '142', 'FOR2022US310', '6', NULL),
(NULL, '142', 'FOR2022US311', '6', NULL),

(NULL, '143', 'FOR2022US312', '6', NULL),
(NULL, '143', 'FOR2022US313', '6', NULL),
(NULL, '143', 'FOR2022US314', '6', NULL),
(NULL, '143', 'FOR2022US315', '6', NULL),
(NULL, '143', 'FOR2022US316', '6', NULL),
(NULL, '143', 'FOR2022US317', '6', NULL),
(NULL, '143', 'FOR2022US318', '6', NULL),
(NULL, '143', 'FOR2022US319', '6', NULL),
(NULL, '143', 'FOR2022US320', '6', NULL),
(NULL, '143', 'FOR2022US321', '6', NULL),

(NULL, '144', 'FOR2022US322', '6', NULL),
(NULL, '144', 'FOR2022US323', '6', NULL),
(NULL, '144', 'FOR2022US324', '6', NULL),
(NULL, '144', 'FOR2022US325', '6', NULL),
(NULL, '144', 'FOR2022US326', '6', NULL),
(NULL, '144', 'FOR2022US327', '6', NULL),
(NULL, '144', 'FOR2022US328', '6', NULL),
(NULL, '144', 'FOR2022US329', '6', NULL),
(NULL, '144', 'FOR2022US330', '6', NULL),
(NULL, '144', 'FOR2022US331', '6', NULL),

(NULL, '145', 'FOR2022US332', '6', NULL),
(NULL, '145', 'FOR2022US333', '6', NULL),
(NULL, '145', 'FOR2022US334', '6', NULL),
(NULL, '145', 'FOR2022US335', '6', NULL),
(NULL, '145', 'FOR2022US336', '6', NULL),
(NULL, '145', 'FOR2022US337', '6', NULL),
(NULL, '145', 'FOR2022US338', '6', NULL),
(NULL, '145', 'FOR2022US339', '6', NULL),
(NULL, '145', 'FOR2022US340', '6', NULL),
(NULL, '145', 'FOR2022US341', '6', NULL),

(NULL, '146', 'FOR2022US342', '6', NULL),
(NULL, '146', 'FOR2022US343', '6', NULL),
(NULL, '146', 'FOR2022US344', '6', NULL),
(NULL, '146', 'FOR2022US345', '6', NULL),
(NULL, '146', 'FOR2022US346', '6', NULL),
(NULL, '146', 'FOR2022US347', '6', NULL),
(NULL, '146', 'FOR2022US348', '6', NULL),
(NULL, '146', 'FOR2022US349', '6', NULL),
(NULL, '146', 'FOR2022US350', '6', NULL),
(NULL, '146', 'FOR2022US351', '6', NULL),

(NULL, '147', 'FOR2022US352', '6', NULL),
(NULL, '147', 'FOR2022US353', '6', NULL),
(NULL, '147', 'FOR2022US354', '6', NULL),
(NULL, '147', 'FOR2022US355', '6', NULL),
(NULL, '147', 'FOR2022US356', '6', NULL),
(NULL, '147', 'FOR2022US357', '6', NULL),
(NULL, '147', 'FOR2022US358', '6', NULL),
(NULL, '147', 'FOR2022US359', '6', NULL),
(NULL, '147', 'FOR2022US360', '6', NULL),
(NULL, '147', 'FOR2022US361', '6', NULL),

(NULL, '148', 'FOR2022US362', '6', NULL),
(NULL, '148', 'FOR2022US363', '6', NULL),
(NULL, '148', 'FOR2022US364', '6', NULL),
(NULL, '148', 'FOR2022US365', '6', NULL),
(NULL, '148', 'FOR2022US366', '6', NULL),
(NULL, '148', 'FOR2022US367', '6', NULL),
(NULL, '148', 'FOR2022US368', '6', NULL),
(NULL, '148', 'FOR2022US369', '6', NULL),
(NULL, '148', 'FOR2022US370', '6', NULL),
(NULL, '148', 'FOR2022US371', '6', NULL),

(NULL, '149', 'FOR2022US372', '6', NULL),
(NULL, '149', 'FOR2022US373', '6', NULL),
(NULL, '149', 'FOR2022US374', '6', NULL),
(NULL, '149', 'FOR2022US375', '6', NULL),
(NULL, '149', 'FOR2022US376', '6', NULL),
(NULL, '149', 'FOR2022US377', '6', NULL),
(NULL, '149', 'FOR2022US378', '6', NULL),
(NULL, '149', 'FOR2022US379', '6', NULL),
(NULL, '149', 'FOR2022US380', '6', NULL),
(NULL, '149', 'FOR2022US381', '6', NULL),

(NULL, '150', 'FOR2022US382', '6', NULL),
(NULL, '150', 'FOR2022US383', '6', NULL),
(NULL, '150', 'FOR2022US384', '6', NULL),
(NULL, '150', 'FOR2022US385', '6', NULL),
(NULL, '150', 'FOR2022US386', '6', NULL),
(NULL, '150', 'FOR2022US387', '6', NULL),
(NULL, '150', 'FOR2022US388', '6', NULL),
(NULL, '150', 'FOR2022US389', '6', NULL),
(NULL, '150', 'FOR2022US390', '6', NULL),
(NULL, '150', 'FOR2022US391', '6', NULL),

(NULL, '151', 'FOR2022US392', '6', NULL),
(NULL, '151', 'FOR2022US393', '6', NULL),
(NULL, '151', 'FOR2022US394', '6', NULL),
(NULL, '151', 'FOR2022US395', '6', NULL),
(NULL, '151', 'FOR2022US396', '6', NULL),
(NULL, '151', 'FOR2022US397', '6', NULL),
(NULL, '151', 'FOR2022US398', '6', NULL),
(NULL, '151', 'FOR2022US399', '6', NULL),
(NULL, '151', 'FOR2022US400', '6', NULL),
(NULL, '151', 'FOR2022US401', '6', NULL),

(NULL, '152', 'FOR2022US402', '6', NULL),
(NULL, '152', 'FOR2022US403', '6', NULL),
(NULL, '152', 'FOR2022US404', '6', NULL),
(NULL, '152', 'FOR2022US405', '6', NULL),
(NULL, '152', 'FOR2022US406', '6', NULL),
(NULL, '152', 'FOR2022US407', '6', NULL),
(NULL, '152', 'FOR2022US408', '6', NULL),
(NULL, '152', 'FOR2022US409', '6', NULL),
(NULL, '152', 'FOR2022US410', '6', NULL),
(NULL, '152', 'FOR2022US411', '6', NULL),

(NULL, '153', 'FOR2022US412', '6', NULL),
(NULL, '153', 'FOR2022US413', '6', NULL),
(NULL, '153', 'FOR2022US414', '6', NULL),
(NULL, '153', 'FOR2022US415', '6', NULL),
(NULL, '153', 'FOR2022US416', '6', NULL),
(NULL, '153', 'FOR2022US417', '6', NULL),
(NULL, '153', 'FOR2022US418', '6', NULL),
(NULL, '153', 'FOR2022US419', '6', NULL),
(NULL, '153', 'FOR2022US420', '6', NULL),
(NULL, '153', 'FOR2022US421', '6', NULL),

(NULL, '154', 'FOR2022US422', '6', NULL),
(NULL, '154', 'FOR2022US423', '6', NULL),
(NULL, '154', 'FOR2022US424', '6', NULL),
(NULL, '154', 'FOR2022US425', '6', NULL),
(NULL, '154', 'FOR2022US426', '6', NULL),
(NULL, '154', 'FOR2022US427', '6', NULL),
(NULL, '154', 'FOR2022US428', '6', NULL),
(NULL, '154', 'FOR2022US429', '6', NULL),
(NULL, '154', 'FOR2022US430', '6', NULL),
(NULL, '154', 'FOR2022US431', '6', NULL),

(NULL, '155', 'FOR2022US432', '6', NULL),
(NULL, '155', 'FOR2022US433', '6', NULL),
(NULL, '155', 'FOR2022US434', '6', NULL),
(NULL, '155', 'FOR2022US435', '6', NULL),
(NULL, '155', 'FOR2022US436', '6', NULL),
(NULL, '155', 'FOR2022US437', '6', NULL),
(NULL, '155', 'FOR2022US438', '6', NULL),
(NULL, '155', 'FOR2022US439', '6', NULL),
(NULL, '155', 'FOR2022US440', '6', NULL),
(NULL, '155', 'FOR2022US441', '6', NULL),

(NULL, '156', 'FOR2022US442', '6', NULL),
(NULL, '156', 'FOR2022US443', '6', NULL),
(NULL, '156', 'FOR2022US444', '6', NULL),
(NULL, '156', 'FOR2022US445', '6', NULL),
(NULL, '156', 'FOR2022US446', '6', NULL),
(NULL, '156', 'FOR2022US447', '6', NULL),
(NULL, '156', 'FOR2022US448', '6', NULL),
(NULL, '156', 'FOR2022US449', '6', NULL),
(NULL, '156', 'FOR2022US450', '6', NULL),
(NULL, '156', 'FOR2022US451', '6', NULL),

(NULL, '157', 'FOR2022US452', '6', NULL),
(NULL, '157', 'FOR2022US453', '6', NULL),
(NULL, '157', 'FOR2022US454', '6', NULL),
(NULL, '157', 'FOR2022US455', '6', NULL),
(NULL, '157', 'FOR2022US456', '6', NULL),
(NULL, '157', 'FOR2022US457', '6', NULL),
(NULL, '157', 'FOR2022US458', '6', NULL),
(NULL, '157', 'FOR2022US459', '6', NULL),
(NULL, '157', 'FOR2022US460', '6', NULL),
(NULL, '157', 'FOR2022US461', '6', NULL),

(NULL, '158', 'FOR2022US462', '6', NULL),
(NULL, '158', 'FOR2022US463', '6', NULL),
(NULL, '158', 'FOR2022US464', '6', NULL),
(NULL, '158', 'FOR2022US465', '6', NULL),
(NULL, '158', 'FOR2022US466', '6', NULL),
(NULL, '158', 'FOR2022US467', '6', NULL),
(NULL, '158', 'FOR2022US468', '6', NULL),
(NULL, '158', 'FOR2022US469', '6', NULL),
(NULL, '158', 'FOR2022US470', '6', NULL),
(NULL, '158', 'FOR2022US471', '6', NULL),

(NULL, '159', 'FOR2022US472', '6', NULL),
(NULL, '159', 'FOR2022US473', '6', NULL),
(NULL, '159', 'FOR2022US474', '6', NULL),
(NULL, '159', 'FOR2022US475', '6', NULL),
(NULL, '159', 'FOR2022US476', '6', NULL),
(NULL, '159', 'FOR2022US477', '6', NULL),
(NULL, '159', 'FOR2022US478', '6', NULL),
(NULL, '159', 'FOR2022US479', '6', NULL),
(NULL, '159', 'FOR2022US480', '6', NULL),
(NULL, '159', 'FOR2022US481', '6', NULL),

(NULL, '160', 'FOR2022US482', '6', NULL),
(NULL, '160', 'FOR2022US483', '6', NULL),
(NULL, '160', 'FOR2022US484', '6', NULL),
(NULL, '160', 'FOR2022US485', '6', NULL),
(NULL, '160', 'FOR2022US486', '6', NULL),
(NULL, '160', 'FOR2022US487', '6', NULL),
(NULL, '160', 'FOR2022US488', '6', NULL),
(NULL, '160', 'FOR2022US489', '6', NULL),
(NULL, '160', 'FOR2022US490', '6', NULL),
(NULL, '160', 'FOR2022US491', '6', NULL),

(NULL, '161', 'FOR2022US492', '6', NULL),
(NULL, '161', 'FOR2022US493', '6', NULL),
(NULL, '161', 'FOR2022US494', '6', NULL),
(NULL, '161', 'FOR2022US495', '6', NULL),
(NULL, '161', 'FOR2022US496', '6', NULL),
(NULL, '161', 'FOR2022US497', '6', NULL),
(NULL, '161', 'FOR2022US498', '6', NULL),
(NULL, '161', 'FOR2022US499', '6', NULL),
(NULL, '161', 'FOR2022US500', '6', NULL),
(NULL, '161', 'FOR2022US501', '6', NULL),

(NULL, '162', 'FOR2022US502', '6', NULL),
(NULL, '162', 'FOR2022US503', '6', NULL),
(NULL, '162', 'FOR2022US504', '6', NULL),
(NULL, '162', 'FOR2022US505', '6', NULL),
(NULL, '162', 'FOR2022US506', '6', NULL),
(NULL, '162', 'FOR2022US507', '6', NULL),
(NULL, '162', 'FOR2022US508', '6', NULL),
(NULL, '162', 'FOR2022US509', '6', NULL),
(NULL, '162', 'FOR2022US510', '6', NULL),
(NULL, '162', 'FOR2022US511', '6', NULL),

(NULL, '163', 'FOR2022US512', '6', NULL),
(NULL, '163', 'FOR2022US513', '6', NULL),
(NULL, '163', 'FOR2022US514', '6', NULL),
(NULL, '163', 'FOR2022US515', '6', NULL),
(NULL, '163', 'FOR2022US516', '6', NULL),
(NULL, '163', 'FOR2022US517', '6', NULL),
(NULL, '163', 'FOR2022US518', '6', NULL),
(NULL, '163', 'FOR2022US519', '6', NULL),
(NULL, '163', 'FOR2022US520', '6', NULL),
(NULL, '163', 'FOR2022US521', '6', NULL),

(NULL, '164', 'FOR2022US522', '6', NULL),
(NULL, '164', 'FOR2022US523', '6', NULL),
(NULL, '164', 'FOR2022US524', '6', NULL),
(NULL, '164', 'FOR2022US525', '6', NULL),
(NULL, '164', 'FOR2022US526', '6', NULL),
(NULL, '164', 'FOR2022US527', '6', NULL),
(NULL, '164', 'FOR2022US528', '6', NULL),
(NULL, '164', 'FOR2022US529', '6', NULL),
(NULL, '164', 'FOR2022US530', '6', NULL),
(NULL, '164', 'FOR2022US531', '6', NULL),

(NULL, '165', 'FOR2022US532', '6', NULL),
(NULL, '165', 'FOR2022US533', '6', NULL),
(NULL, '165', 'FOR2022US534', '6', NULL),
(NULL, '165', 'FOR2022US535', '6', NULL),
(NULL, '165', 'FOR2022US536', '6', NULL),
(NULL, '165', 'FOR2022US537', '6', NULL),
(NULL, '165', 'FOR2022US538', '6', NULL),
(NULL, '165', 'FOR2022US539', '6', NULL),
(NULL, '165', 'FOR2022US540', '6', NULL),
(NULL, '165', 'FOR2022US541', '6', NULL),

(NULL, '166', 'FOR2022US542', '6', NULL),
(NULL, '166', 'FOR2022US543', '6', NULL),
(NULL, '166', 'FOR2022US544', '6', NULL),
(NULL, '166', 'FOR2022US545', '6', NULL),
(NULL, '166', 'FOR2022US546', '6', NULL),
(NULL, '166', 'FOR2022US547', '6', NULL),
(NULL, '166', 'FOR2022US548', '6', NULL),
(NULL, '166', 'FOR2022US549', '6', NULL),
(NULL, '166', 'FOR2022US550', '6', NULL),
(NULL, '166', 'FOR2022US551', '6', NULL),

(NULL, '167', 'FOR2022US552', '6', NULL),
(NULL, '167', 'FOR2022US553', '6', NULL),
(NULL, '167', 'FOR2022US554', '6', NULL),
(NULL, '167', 'FOR2022US555', '6', NULL),
(NULL, '167', 'FOR2022US556', '6', NULL),
(NULL, '167', 'FOR2022US557', '6', NULL),
(NULL, '167', 'FOR2022US558', '6', NULL),
(NULL, '167', 'FOR2022US559', '6', NULL),
(NULL, '167', 'FOR2022US560', '6', NULL),
(NULL, '167', 'FOR2022US561', '6', NULL),

(NULL, '168', 'FOR2022US562', '6', NULL),
(NULL, '168', 'FOR2022US563', '6', NULL),
(NULL, '168', 'FOR2022US564', '6', NULL),
(NULL, '168', 'FOR2022US565', '6', NULL),
(NULL, '168', 'FOR2022US566', '6', NULL),
(NULL, '168', 'FOR2022US567', '6', NULL),
(NULL, '168', 'FOR2022US568', '6', NULL),
(NULL, '168', 'FOR2022US569', '6', NULL),
(NULL, '168', 'FOR2022US570', '6', NULL),
(NULL, '168', 'FOR2022US571', '6', NULL),

(NULL, '169', 'FOR2022US572', '6', NULL),
(NULL, '169', 'FOR2022US573', '6', NULL),
(NULL, '169', 'FOR2022US574', '6', NULL),
(NULL, '169', 'FOR2022US575', '6', NULL),
(NULL, '169', 'FOR2022US576', '6', NULL),
(NULL, '169', 'FOR2022US577', '6', NULL),
(NULL, '169', 'FOR2022US578', '6', NULL),
(NULL, '169', 'FOR2022US579', '6', NULL),
(NULL, '169', 'FOR2022US580', '6', NULL),
(NULL, '169', 'FOR2022US581', '6', NULL),

(NULL, '170', 'FOR2022US582', '6', NULL),
(NULL, '170', 'FOR2022US583', '6', NULL),
(NULL, '170', 'FOR2022US584', '6', NULL),
(NULL, '170', 'FOR2022US585', '6', NULL),
(NULL, '170', 'FOR2022US586', '6', NULL),
(NULL, '170', 'FOR2022US587', '6', NULL),
(NULL, '170', 'FOR2022US588', '6', NULL),
(NULL, '170', 'FOR2022US589', '6', NULL),
(NULL, '170', 'FOR2022US590', '6', NULL),
(NULL, '170', 'FOR2022US591', '6', NULL),

(NULL, '171', 'FOR2022US592', '6', NULL),
(NULL, '171', 'FOR2022US593', '6', NULL),
(NULL, '171', 'FOR2022US594', '6', NULL),
(NULL, '171', 'FOR2022US595', '6', NULL),
(NULL, '171', 'FOR2022US596', '6', NULL),
(NULL, '171', 'FOR2022US597', '6', NULL),
(NULL, '171', 'FOR2022US598', '6', NULL),
(NULL, '171', 'FOR2022US599', '6', NULL),
(NULL, '171', 'FOR2022US600', '6', NULL),
(NULL, '171', 'FOR2022US601', '6', NULL),

(NULL, '172', 'FOR2022US602', '6', NULL),
(NULL, '172', 'FOR2022US603', '6', NULL),
(NULL, '172', 'FOR2022US604', '6', NULL),
(NULL, '172', 'FOR2022US605', '6', NULL),
(NULL, '172', 'FOR2022US606', '6', NULL),
(NULL, '172', 'FOR2022US607', '6', NULL),
(NULL, '172', 'FOR2022US608', '6', NULL),
(NULL, '172', 'FOR2022US609', '6', NULL),
(NULL, '172', 'FOR2022US610', '6', NULL),
(NULL, '172', 'FOR2022US611', '6', NULL),

(NULL, '173', 'FOR2022US612', '6', NULL),
(NULL, '173', 'FOR2022US613', '6', NULL),
(NULL, '173', 'FOR2022US614', '6', NULL),
(NULL, '173', 'FOR2022US615', '6', NULL),
(NULL, '173', 'FOR2022US616', '6', NULL),
(NULL, '173', 'FOR2022US617', '6', NULL),
(NULL, '173', 'FOR2022US618', '6', NULL),
(NULL, '173', 'FOR2022US619', '6', NULL),
(NULL, '173', 'FOR2022US620', '6', NULL),
(NULL, '173', 'FOR2022US621', '6', NULL),

(NULL, '174', 'FOR2022US622', '6', NULL),
(NULL, '174', 'FOR2022US623', '6', NULL),
(NULL, '174', 'FOR2022US624', '6', NULL),
(NULL, '174', 'FOR2022US625', '6', NULL),
(NULL, '174', 'FOR2022US626', '6', NULL),
(NULL, '174', 'FOR2022US627', '6', NULL),
(NULL, '174', 'FOR2022US628', '6', NULL),
(NULL, '174', 'FOR2022US629', '6', NULL),
(NULL, '174', 'FOR2022US630', '6', NULL),
(NULL, '174', 'FOR2022US631', '6', NULL),

(NULL, '175', 'FOR2022US632', '6', NULL),
(NULL, '175', 'FOR2022US633', '6', NULL),
(NULL, '175', 'FOR2022US634', '6', NULL),
(NULL, '175', 'FOR2022US635', '6', NULL),
(NULL, '175', 'FOR2022US636', '6', NULL),
(NULL, '175', 'FOR2022US637', '6', NULL),
(NULL, '175', 'FOR2022US638', '6', NULL),
(NULL, '175', 'FOR2022US639', '6', NULL),
(NULL, '175', 'FOR2022US640', '6', NULL),
(NULL, '175', 'FOR2022US641', '6', NULL),

(NULL, '176', 'FOR2022US642', '6', NULL),
(NULL, '176', 'FOR2022US643', '6', NULL),
(NULL, '176', 'FOR2022US644', '6', NULL),
(NULL, '176', 'FOR2022US645', '6', NULL),
(NULL, '176', 'FOR2022US646', '6', NULL),
(NULL, '176', 'FOR2022US647', '6', NULL),
(NULL, '176', 'FOR2022US648', '6', NULL),
(NULL, '176', 'FOR2022US649', '6', NULL),
(NULL, '176', 'FOR2022US650', '6', NULL),
(NULL, '176', 'FOR2022US651', '6', NULL),

(NULL, '177', 'FOR2022US652', '6', NULL),
(NULL, '177', 'FOR2022US653', '6', NULL),
(NULL, '177', 'FOR2022US654', '6', NULL),
(NULL, '177', 'FOR2022US655', '6', NULL),
(NULL, '177', 'FOR2022US656', '6', NULL),
(NULL, '177', 'FOR2022US657', '6', NULL),
(NULL, '177', 'FOR2022US658', '6', NULL),
(NULL, '177', 'FOR2022US659', '6', NULL),
(NULL, '177', 'FOR2022US660', '6', NULL),
(NULL, '177', 'FOR2022US661', '6', NULL),

(NULL, '178', 'FOR2022US662', '6', NULL),
(NULL, '178', 'FOR2022US663', '6', NULL),
(NULL, '178', 'FOR2022US664', '6', NULL),
(NULL, '178', 'FOR2022US665', '6', NULL),
(NULL, '178', 'FOR2022US666', '6', NULL),
(NULL, '178', 'FOR2022US667', '6', NULL),
(NULL, '178', 'FOR2022US668', '6', NULL),
(NULL, '178', 'FOR2022US669', '6', NULL),
(NULL, '178', 'FOR2022US670', '6', NULL),
(NULL, '178', 'FOR2022US671', '6', NULL),

(NULL, '179', 'FOR2022US672', '6', NULL),
(NULL, '179', 'FOR2022US673', '6', NULL),
(NULL, '179', 'FOR2022US674', '6', NULL),
(NULL, '179', 'FOR2022US675', '6', NULL),
(NULL, '179', 'FOR2022US676', '6', NULL),
(NULL, '179', 'FOR2022US677', '6', NULL),
(NULL, '179', 'FOR2022US678', '6', NULL),
(NULL, '179', 'FOR2022US679', '6', NULL),
(NULL, '179', 'FOR2022US680', '6', NULL),
(NULL, '179', 'FOR2022US681', '6', NULL),

(NULL, '180', 'FOR2022US682', '6', NULL),
(NULL, '180', 'FOR2022US683', '6', NULL),
(NULL, '180', 'FOR2022US684', '6', NULL),
(NULL, '180', 'FOR2022US685', '6', NULL),
(NULL, '180', 'FOR2022US686', '6', NULL),
(NULL, '180', 'FOR2022US687', '6', NULL),
(NULL, '180', 'FOR2022US688', '6', NULL),
(NULL, '180', 'FOR2022US689', '6', NULL),
(NULL, '180', 'FOR2022US690', '6', NULL),
(NULL, '180', 'FOR2022US691', '6', NULL),

(NULL, '181', 'FOR2022US692', '6', NULL),
(NULL, '181', 'FOR2022US693', '6', NULL),
(NULL, '181', 'FOR2022US694', '6', NULL),
(NULL, '181', 'FOR2022US695', '6', NULL),
(NULL, '181', 'FOR2022US696', '6', NULL),
(NULL, '181', 'FOR2022US697', '6', NULL),
(NULL, '181', 'FOR2022US698', '6', NULL),
(NULL, '181', 'FOR2022US699', '6', NULL),
(NULL, '181', 'FOR2022US700', '6', NULL),
(NULL, '181', 'FOR2022US701', '6', NULL),

(NULL, '182', 'FOR2022US702', '6', NULL),
(NULL, '182', 'FOR2022US703', '6', NULL),
(NULL, '182', 'FOR2022US704', '6', NULL),
(NULL, '182', 'FOR2022US705', '6', NULL),
(NULL, '182', 'FOR2022US706', '6', NULL),
(NULL, '182', 'FOR2022US707', '6', NULL),
(NULL, '182', 'FOR2022US708', '6', NULL),
(NULL, '182', 'FOR2022US709', '6', NULL),
(NULL, '182', 'FOR2022US710', '6', NULL),
(NULL, '182', 'FOR2022US711', '6', NULL),

(NULL, '183', 'FOR2022US712', '6', NULL),
(NULL, '183', 'FOR2022US713', '6', NULL),
(NULL, '183', 'FOR2022US714', '6', NULL),
(NULL, '183', 'FOR2022US715', '6', NULL),
(NULL, '183', 'FOR2022US716', '6', NULL),
(NULL, '183', 'FOR2022US717', '6', NULL),
(NULL, '183', 'FOR2022US718', '6', NULL),
(NULL, '183', 'FOR2022US719', '6', NULL),
(NULL, '183', 'FOR2022US720', '6', NULL),
(NULL, '183', 'FOR2022US721', '6', NULL),

(NULL, '184', 'FOR2022US722', '6', NULL),
(NULL, '184', 'FOR2022US723', '6', NULL),
(NULL, '184', 'FOR2022US724', '6', NULL),
(NULL, '184', 'FOR2022US725', '6', NULL),
(NULL, '184', 'FOR2022US726', '6', NULL),
(NULL, '184', 'FOR2022US727', '6', NULL),
(NULL, '184', 'FOR2022US728', '6', NULL),
(NULL, '184', 'FOR2022US729', '6', NULL),
(NULL, '184', 'FOR2022US730', '6', NULL),
(NULL, '184', 'FOR2022US731', '6', NULL),

(NULL, '185', 'FOR2022US732', '6', NULL),
(NULL, '185', 'FOR2022US733', '6', NULL),
(NULL, '185', 'FOR2022US734', '6', NULL),
(NULL, '185', 'FOR2022US735', '6', NULL),
(NULL, '185', 'FOR2022US736', '6', NULL),
(NULL, '185', 'FOR2022US737', '6', NULL),
(NULL, '185', 'FOR2022US738', '6', NULL),
(NULL, '185', 'FOR2022US739', '6', NULL),
(NULL, '185', 'FOR2022US740', '6', NULL),
(NULL, '185', 'FOR2022US741', '6', NULL),

(NULL, '186', 'FOR2022US742', '6', NULL),
(NULL, '186', 'FOR2022US743', '6', NULL),
(NULL, '186', 'FOR2022US744', '6', NULL),
(NULL, '186', 'FOR2022US745', '6', NULL),
(NULL, '186', 'FOR2022US746', '6', NULL),
(NULL, '186', 'FOR2022US747', '6', NULL),
(NULL, '186', 'FOR2022US748', '6', NULL),
(NULL, '186', 'FOR2022US749', '6', NULL),
(NULL, '186', 'FOR2022US750', '6', NULL),
(NULL, '186', 'FOR2022US751', '6', NULL),

(NULL, '187', 'FOR2022US752', '6', NULL),
(NULL, '187', 'FOR2022US753', '6', NULL),
(NULL, '187', 'FOR2022US754', '6', NULL),
(NULL, '187', 'FOR2022US755', '6', NULL),
(NULL, '187', 'FOR2022US756', '6', NULL),
(NULL, '187', 'FOR2022US757', '6', NULL),
(NULL, '187', 'FOR2022US758', '6', NULL),
(NULL, '187', 'FOR2022US759', '6', NULL),
(NULL, '187', 'FOR2022US760', '6', NULL),
(NULL, '187', 'FOR2022US761', '6', NULL),

(NULL, '188', 'FOR2022US762', '6', NULL),
(NULL, '188', 'FOR2022US763', '6', NULL),
(NULL, '188', 'FOR2022US764', '6', NULL),
(NULL, '188', 'FOR2022US765', '6', NULL),
(NULL, '188', 'FOR2022US766', '6', NULL),
(NULL, '188', 'FOR2022US767', '6', NULL),
(NULL, '188', 'FOR2022US768', '6', NULL),
(NULL, '188', 'FOR2022US769', '6', NULL),
(NULL, '188', 'FOR2022US770', '6', NULL),
(NULL, '188', 'FOR2022US771', '6', NULL),

(NULL, '189', 'FOR2022US772', '6', NULL),
(NULL, '189', 'FOR2022US773', '6', NULL),
(NULL, '189', 'FOR2022US774', '6', NULL),
(NULL, '189', 'FOR2022US775', '6', NULL),
(NULL, '189', 'FOR2022US776', '6', NULL),
(NULL, '189', 'FOR2022US777', '6', NULL),
(NULL, '189', 'FOR2022US778', '6', NULL),
(NULL, '189', 'FOR2022US779', '6', NULL),
(NULL, '189', 'FOR2022US780', '6', NULL),
(NULL, '189', 'FOR2022US781', '6', NULL),

(NULL, '190', 'FOR2022US782', '6', NULL),
(NULL, '190', 'FOR2022US783', '6', NULL),
(NULL, '190', 'FOR2022US784', '6', NULL),
(NULL, '190', 'FOR2022US785', '6', NULL),
(NULL, '190', 'FOR2022US786', '6', NULL),
(NULL, '190', 'FOR2022US787', '6', NULL),
(NULL, '190', 'FOR2022US788', '6', NULL),
(NULL, '190', 'FOR2022US789', '6', NULL),
(NULL, '190', 'FOR2022US790', '6', NULL),
(NULL, '190', 'FOR2022US791', '6', NULL),

(NULL, '191', 'FOR2022US792', '6', NULL),
(NULL, '191', 'FOR2022US793', '6', NULL),
(NULL, '191', 'FOR2022US794', '6', NULL),
(NULL, '191', 'FOR2022US795', '6', NULL),
(NULL, '191', 'FOR2022US796', '6', NULL),
(NULL, '191', 'FOR2022US797', '6', NULL),
(NULL, '191', 'FOR2022US798', '6', NULL),
(NULL, '191', 'FOR2022US799', '6', NULL),
(NULL, '191', 'FOR2022US800', '6', NULL),
(NULL, '191', 'FOR2022US801', '6', NULL),

(NULL, '192', 'FOR2022US802', '6', NULL),
(NULL, '192', 'FOR2022US803', '6', NULL),
(NULL, '192', 'FOR2022US804', '6', NULL),
(NULL, '192', 'FOR2022US805', '6', NULL),
(NULL, '192', 'FOR2022US806', '6', NULL),
(NULL, '192', 'FOR2022US807', '6', NULL),
(NULL, '192', 'FOR2022US808', '6', NULL),
(NULL, '192', 'FOR2022US809', '6', NULL),
(NULL, '192', 'FOR2022US810', '6', NULL),
(NULL, '192', 'FOR2022US811', '6', NULL),

(NULL, '193', 'FOR2022US812', '6', NULL),
(NULL, '193', 'FOR2022US813', '6', NULL),
(NULL, '193', 'FOR2022US814', '6', NULL),
(NULL, '193', 'FOR2022US815', '6', NULL),
(NULL, '193', 'FOR2022US816', '6', NULL),
(NULL, '193', 'FOR2022US817', '6', NULL),
(NULL, '193', 'FOR2022US818', '6', NULL),
(NULL, '193', 'FOR2022US819', '6', NULL),
(NULL, '193', 'FOR2022US820', '6', NULL),
(NULL, '193', 'FOR2022US821', '6', NULL),

(NULL, '194', 'FOR2022US822', '6', NULL),
(NULL, '194', 'FOR2022US823', '6', NULL),
(NULL, '194', 'FOR2022US824', '6', NULL),
(NULL, '194', 'FOR2022US825', '6', NULL),
(NULL, '194', 'FOR2022US826', '6', NULL),
(NULL, '194', 'FOR2022US827', '6', NULL),
(NULL, '194', 'FOR2022US828', '6', NULL),
(NULL, '194', 'FOR2022US829', '6', NULL),
(NULL, '194', 'FOR2022US830', '6', NULL),
(NULL, '194', 'FOR2022US831', '6', NULL),

(NULL, '195', 'FOR2022US832', '6', NULL),
(NULL, '195', 'FOR2022US833', '6', NULL),
(NULL, '195', 'FOR2022US834', '6', NULL),
(NULL, '195', 'FOR2022US835', '6', NULL),
(NULL, '195', 'FOR2022US836', '6', NULL),
(NULL, '195', 'FOR2022US837', '6', NULL),
(NULL, '195', 'FOR2022US838', '6', NULL),
(NULL, '195', 'FOR2022US839', '6', NULL),
(NULL, '195', 'FOR2022US840', '6', NULL),
(NULL, '195', 'FOR2022US841', '6', NULL),

(NULL, '196', 'FOR2022US842', '6', NULL),
(NULL, '196', 'FOR2022US843', '6', NULL),
(NULL, '196', 'FOR2022US844', '6', NULL),
(NULL, '196', 'FOR2022US845', '6', NULL),
(NULL, '196', 'FOR2022US846', '6', NULL),
(NULL, '196', 'FOR2022US847', '6', NULL),
(NULL, '196', 'FOR2022US848', '6', NULL),
(NULL, '196', 'FOR2022US849', '6', NULL),
(NULL, '196', 'FOR2022US850', '6', NULL),
(NULL, '196', 'FOR2022US851', '6', NULL),

(NULL, '197', 'FOR2022US852', '6', NULL),
(NULL, '197', 'FOR2022US853', '6', NULL),
(NULL, '197', 'FOR2022US854', '6', NULL),
(NULL, '197', 'FOR2022US855', '6', NULL),
(NULL, '197', 'FOR2022US856', '6', NULL),
(NULL, '197', 'FOR2022US857', '6', NULL),
(NULL, '197', 'FOR2022US858', '6', NULL),
(NULL, '197', 'FOR2022US859', '6', NULL),
(NULL, '197', 'FOR2022US860', '6', NULL),
(NULL, '197', 'FOR2022US861', '6', NULL),

(NULL, '198', 'FOR2022US862', '6', NULL),
(NULL, '198', 'FOR2022US863', '6', NULL),
(NULL, '198', 'FOR2022US864', '6', NULL),
(NULL, '198', 'FOR2022US865', '6', NULL),
(NULL, '198', 'FOR2022US866', '6', NULL),
(NULL, '198', 'FOR2022US867', '6', NULL),
(NULL, '198', 'FOR2022US868', '6', NULL),
(NULL, '198', 'FOR2022US869', '6', NULL),
(NULL, '198', 'FOR2022US870', '6', NULL),
(NULL, '198', 'FOR2022US871', '6', NULL),

(NULL, '199', 'FOR2022US872', '6', NULL),
(NULL, '199', 'FOR2022US873', '6', NULL),
(NULL, '199', 'FOR2022US874', '6', NULL),
(NULL, '199', 'FOR2022US875', '6', NULL),
(NULL, '199', 'FOR2022US876', '6', NULL),
(NULL, '199', 'FOR2022US877', '6', NULL),
(NULL, '199', 'FOR2022US878', '6', NULL),
(NULL, '199', 'FOR2022US879', '6', NULL),
(NULL, '199', 'FOR2022US880', '6', NULL),
(NULL, '199', 'FOR2022US881', '6', NULL),

(NULL, '200', 'FOR2022US882', '6', NULL),
(NULL, '200', 'FOR2022US883', '6', NULL),
(NULL, '200', 'FOR2022US884', '6', NULL),
(NULL, '200', 'FOR2022US885', '6', NULL),
(NULL, '200', 'FOR2022US886', '6', NULL),
(NULL, '200', 'FOR2022US887', '6', NULL),
(NULL, '200', 'FOR2022US888', '6', NULL),
(NULL, '200', 'FOR2022US889', '6', NULL),
(NULL, '200', 'FOR2022US890', '6', NULL),
(NULL, '200', 'FOR2022US891', '6', NULL),

(NULL, '201', 'FOR2022US892', '6', NULL),
(NULL, '201', 'FOR2022US893', '6', NULL),
(NULL, '201', 'FOR2022US894', '6', NULL),
(NULL, '201', 'FOR2022US895', '6', NULL),
(NULL, '201', 'FOR2022US896', '6', NULL),
(NULL, '201', 'FOR2022US897', '6', NULL),
(NULL, '201', 'FOR2022US898', '6', NULL),
(NULL, '201', 'FOR2022US899', '6', NULL),
(NULL, '201', 'FOR2022US900', '6', NULL),
(NULL, '201', 'FOR2022US901', '6', NULL),

(NULL, '202', 'FOR2022US902', '6', NULL),
(NULL, '202', 'FOR2022US903', '6', NULL),
(NULL, '202', 'FOR2022US904', '6', NULL),
(NULL, '202', 'FOR2022US905', '6', NULL),
(NULL, '202', 'FOR2022US906', '6', NULL),
(NULL, '202', 'FOR2022US907', '6', NULL),
(NULL, '202', 'FOR2022US908', '6', NULL),
(NULL, '202', 'FOR2022US909', '6', NULL),
(NULL, '202', 'FOR2022US910', '6', NULL),
(NULL, '202', 'FOR2022US911', '6', NULL),

(NULL, '203', 'FOR2022US912', '6', NULL),
(NULL, '203', 'FOR2022US913', '6', NULL),
(NULL, '203', 'FOR2022US914', '6', NULL),
(NULL, '203', 'FOR2022US915', '6', NULL),
(NULL, '203', 'FOR2022US916', '6', NULL),
(NULL, '203', 'FOR2022US917', '6', NULL),
(NULL, '203', 'FOR2022US918', '6', NULL),
(NULL, '203', 'FOR2022US919', '6', NULL),
(NULL, '203', 'FOR2022US920', '6', NULL),
(NULL, '203', 'FOR2022US921', '6', NULL),

(NULL, '204', 'FOR2022US922', '6', NULL),
(NULL, '204', 'FOR2022US923', '6', NULL),
(NULL, '204', 'FOR2022US924', '6', NULL),
(NULL, '204', 'FOR2022US925', '6', NULL),
(NULL, '204', 'FOR2022US926', '6', NULL),
(NULL, '204', 'FOR2022US927', '6', NULL),
(NULL, '204', 'FOR2022US928', '6', NULL),
(NULL, '204', 'FOR2022US929', '6', NULL),
(NULL, '204', 'FOR2022US930', '6', NULL),
(NULL, '204', 'FOR2022US931', '6', NULL),

(NULL, '205', 'FOR2022US932', '6', NULL),
(NULL, '205', 'FOR2022US933', '6', NULL),
(NULL, '205', 'FOR2022US934', '6', NULL),
(NULL, '205', 'FOR2022US935', '6', NULL),
(NULL, '205', 'FOR2022US936', '6', NULL),
(NULL, '205', 'FOR2022US937', '6', NULL),
(NULL, '205', 'FOR2022US938', '6', NULL),
(NULL, '205', 'FOR2022US939', '6', NULL),
(NULL, '205', 'FOR2022US940', '6', NULL),
(NULL, '205', 'FOR2022US941', '6', NULL),

(NULL, '206', 'FOR2022US942', '6', NULL),
(NULL, '206', 'FOR2022US943', '6', NULL),
(NULL, '206', 'FOR2022US944', '6', NULL),
(NULL, '206', 'FOR2022US945', '6', NULL),
(NULL, '206', 'FOR2022US946', '6', NULL),
(NULL, '206', 'FOR2022US947', '6', NULL),
(NULL, '206', 'FOR2022US948', '6', NULL),
(NULL, '206', 'FOR2022US949', '6', NULL),
(NULL, '206', 'FOR2022US950', '6', NULL),
(NULL, '206', 'FOR2022US951', '6', NULL),

(NULL, '207', 'FOR2022US952', '6', NULL),
(NULL, '207', 'FOR2022US953', '6', NULL),
(NULL, '207', 'FOR2022US954', '6', NULL),
(NULL, '207', 'FOR2022US955', '6', NULL),
(NULL, '207', 'FOR2022US956', '6', NULL),
(NULL, '207', 'FOR2022US957', '6', NULL),
(NULL, '207', 'FOR2022US958', '6', NULL),
(NULL, '207', 'FOR2022US959', '6', NULL),
(NULL, '207', 'FOR2022US960', '6', NULL),
(NULL, '207', 'FOR2022US961', '6', NULL),

(NULL, '208', 'FOR2022US962', '6', NULL),
(NULL, '208', 'FOR2022US963', '6', NULL),
(NULL, '208', 'FOR2022US964', '6', NULL),
(NULL, '208', 'FOR2022US965', '6', NULL),
(NULL, '208', 'FOR2022US966', '6', NULL),
(NULL, '208', 'FOR2022US967', '6', NULL),
(NULL, '208', 'FOR2022US968', '6', NULL),
(NULL, '208', 'FOR2022US969', '6', NULL),
(NULL, '208', 'FOR2022US970', '6', NULL),
(NULL, '208', 'FOR2022US971', '6', NULL),

(NULL, '209', 'FOR2022US972', '6', NULL),
(NULL, '209', 'FOR2022US973', '6', NULL),
(NULL, '209', 'FOR2022US974', '6', NULL),
(NULL, '209', 'FOR2022US975', '6', NULL),
(NULL, '209', 'FOR2022US976', '6', NULL),
(NULL, '209', 'FOR2022US977', '6', NULL),
(NULL, '209', 'FOR2022US978', '6', NULL),
(NULL, '209', 'FOR2022US979', '6', NULL),
(NULL, '209', 'FOR2022US980', '6', NULL),
(NULL, '209', 'FOR2022US981', '6', NULL),

(NULL, '210', 'FOR2022US982', '6', NULL),
(NULL, '210', 'FOR2022US983', '6', NULL),
(NULL, '210', 'FOR2022US984', '6', NULL),
(NULL, '210', 'FOR2022US985', '6', NULL),
(NULL, '210', 'FOR2022US986', '6', NULL),
(NULL, '210', 'FOR2022US987', '6', NULL),
(NULL, '210', 'FOR2022US988', '6', NULL),
(NULL, '210', 'FOR2022US989', '6', NULL),
(NULL, '210', 'FOR2022US990', '6', NULL),
(NULL, '210', 'FOR2022US991', '6', NULL),

(NULL, '211', 'FOR2022US992', '6', NULL),
(NULL, '211', 'FOR2022US993', '6', NULL),
(NULL, '211', 'FOR2022US994', '6', NULL),
(NULL, '211', 'FOR2022US995', '6', NULL),
(NULL, '211', 'FOR2022US996', '6', NULL),
(NULL, '211', 'FOR2022US997', '6', NULL),
(NULL, '211', 'FOR2022US998', '6', NULL),
(NULL, '211', 'FOR2022US999', '6', NULL),
(NULL, '211', 'FOR2022US1000', '6', NULL),
(NULL, '211', 'FOR2022US1001', '6', NULL),

(NULL, '212', 'FOR2022US1002', '6', NULL),
(NULL, '212', 'FOR2022US1003', '6', NULL),
(NULL, '212', 'FOR2022US1004', '6', NULL),
(NULL, '212', 'FOR2022US1005', '6', NULL),
(NULL, '212', 'FOR2022US1006', '6', NULL),
(NULL, '212', 'FOR2022US1007', '6', NULL),
(NULL, '212', 'FOR2022US1008', '6', NULL),
(NULL, '212', 'FOR2022US1009', '6', NULL),
(NULL, '212', 'FOR2022US1010', '6', NULL),
(NULL, '212', 'FOR2022US1011', '6', NULL),

(NULL, '213', 'FOR2022US1012', '6', NULL),
(NULL, '213', 'FOR2022US1013', '6', NULL),
(NULL, '213', 'FOR2022US1014', '6', NULL),
(NULL, '213', 'FOR2022US1015', '6', NULL),
(NULL, '213', 'FOR2022US1016', '6', NULL),
(NULL, '213', 'FOR2022US1017', '6', NULL),
(NULL, '213', 'FOR2022US1018', '6', NULL),
(NULL, '213', 'FOR2022US1019', '6', NULL),
(NULL, '213', 'FOR2022US1020', '6', NULL),
(NULL, '213', 'FOR2022US1021', '6', NULL),

(NULL, '214', 'FOR2022US1022', '6', NULL),
(NULL, '214', 'FOR2022US1023', '6', NULL),
(NULL, '214', 'FOR2022US1024', '6', NULL),
(NULL, '214', 'FOR2022US1025', '6', NULL),
(NULL, '214', 'FOR2022US1026', '6', NULL),
(NULL, '214', 'FOR2022US1027', '6', NULL),
(NULL, '214', 'FOR2022US1028', '6', NULL),
(NULL, '214', 'FOR2022US1029', '6', NULL),
(NULL, '214', 'FOR2022US1030', '6', NULL),
(NULL, '214', 'FOR2022US1031', '6', NULL),

(NULL, '215', 'FOR2022US1032', '6', NULL),
(NULL, '215', 'FOR2022US1033', '6', NULL),
(NULL, '215', 'FOR2022US1034', '6', NULL),
(NULL, '215', 'FOR2022US1035', '6', NULL),
(NULL, '215', 'FOR2022US1036', '6', NULL),
(NULL, '215', 'FOR2022US1037', '6', NULL),
(NULL, '215', 'FOR2022US1038', '6', NULL),
(NULL, '215', 'FOR2022US1039', '6', NULL),
(NULL, '215', 'FOR2022US1040', '6', NULL),
(NULL, '215', 'FOR2022US1041', '6', NULL),

(NULL, '216', 'FOR2022US1042', '6', NULL),
(NULL, '216', 'FOR2022US1043', '6', NULL),
(NULL, '216', 'FOR2022US1044', '6', NULL),
(NULL, '216', 'FOR2022US1045', '6', NULL),
(NULL, '216', 'FOR2022US1046', '6', NULL),
(NULL, '216', 'FOR2022US1047', '6', NULL),
(NULL, '216', 'FOR2022US1048', '6', NULL),
(NULL, '216', 'FOR2022US1049', '6', NULL),
(NULL, '216', 'FOR2022US1050', '6', NULL),
(NULL, '216', 'FOR2022US1051', '6', NULL),

(NULL, '217', 'FOR2022US1052', '6', NULL),
(NULL, '217', 'FOR2022US1053', '6', NULL),
(NULL, '217', 'FOR2022US1054', '6', NULL),
(NULL, '217', 'FOR2022US1055', '6', NULL),
(NULL, '217', 'FOR2022US1056', '6', NULL),
(NULL, '217', 'FOR2022US1057', '6', NULL),
(NULL, '217', 'FOR2022US1058', '6', NULL),
(NULL, '217', 'FOR2022US1059', '6', NULL),
(NULL, '217', 'FOR2022US1060', '6', NULL),
(NULL, '217', 'FOR2022US1061', '6', NULL),

(NULL, '218', 'FOR2022US1062', '6', NULL),
(NULL, '218', 'FOR2022US1063', '6', NULL),
(NULL, '218', 'FOR2022US1064', '6', NULL),
(NULL, '218', 'FOR2022US1065', '6', NULL),
(NULL, '218', 'FOR2022US1066', '6', NULL),
(NULL, '218', 'FOR2022US1067', '6', NULL),
(NULL, '218', 'FOR2022US1068', '6', NULL),
(NULL, '218', 'FOR2022US1069', '6', NULL),
(NULL, '218', 'FOR2022US1070', '6', NULL),
(NULL, '218', 'FOR2022US1071', '6', NULL),

(NULL, '219', 'FOR2022US1072', '6', NULL),
(NULL, '219', 'FOR2022US1073', '6', NULL),
(NULL, '219', 'FOR2022US1074', '6', NULL),
(NULL, '219', 'FOR2022US1075', '6', NULL),
(NULL, '219', 'FOR2022US1076', '6', NULL),
(NULL, '219', 'FOR2022US1077', '6', NULL),
(NULL, '219', 'FOR2022US1078', '6', NULL),
(NULL, '219', 'FOR2022US1079', '6', NULL),
(NULL, '219', 'FOR2022US1080', '6', NULL),
(NULL, '219', 'FOR2022US1081', '6', NULL),

(NULL, '220', 'FOR2022US1082', '6', NULL),
(NULL, '220', 'FOR2022US1083', '6', NULL),
(NULL, '220', 'FOR2022US1084', '6', NULL),
(NULL, '220', 'FOR2022US1085', '6', NULL),
(NULL, '220', 'FOR2022US1086', '6', NULL),
(NULL, '220', 'FOR2022US1087', '6', NULL),
(NULL, '220', 'FOR2022US1088', '6', NULL),
(NULL, '220', 'FOR2022US1089', '6', NULL),
(NULL, '220', 'FOR2022US1090', '6', NULL),
(NULL, '220', 'FOR2022US1091', '6', NULL),

(NULL, '221', 'FOR2022US1092', '6', NULL),
(NULL, '221', 'FOR2022US1093', '6', NULL),
(NULL, '221', 'FOR2022US1094', '6', NULL),
(NULL, '221', 'FOR2022US1095', '6', NULL),
(NULL, '221', 'FOR2022US1096', '6', NULL),
(NULL, '221', 'FOR2022US1097', '6', NULL),
(NULL, '221', 'FOR2022US1098', '6', NULL),
(NULL, '221', 'FOR2022US1099', '6', NULL),
(NULL, '221', 'FOR2022US1100', '6', NULL),
(NULL, '221', 'FOR2022US1101', '6', NULL),

(NULL, '222', 'FOR2022US1102', '6', NULL),
(NULL, '222', 'FOR2022US1103', '6', NULL),
(NULL, '222', 'FOR2022US1104', '6', NULL),
(NULL, '222', 'FOR2022US1105', '6', NULL),
(NULL, '222', 'FOR2022US1106', '6', NULL),
(NULL, '222', 'FOR2022US1107', '6', NULL),
(NULL, '222', 'FOR2022US1108', '6', NULL),
(NULL, '222', 'FOR2022US1109', '6', NULL),
(NULL, '222', 'FOR2022US1110', '6', NULL),
(NULL, '222', 'FOR2022US1111', '6', NULL),

(NULL, '223', 'FOR2022US1112', '6', NULL),
(NULL, '223', 'FOR2022US1113', '6', NULL),
(NULL, '223', 'FOR2022US1114', '6', NULL),
(NULL, '223', 'FOR2022US1115', '6', NULL),
(NULL, '223', 'FOR2022US1116', '6', NULL),
(NULL, '223', 'FOR2022US1117', '6', NULL),
(NULL, '223', 'FOR2022US1118', '6', NULL),
(NULL, '223', 'FOR2022US1119', '6', NULL),
(NULL, '223', 'FOR2022US1120', '6', NULL),
(NULL, '223', 'FOR2022US1121', '6', NULL),

(NULL, '224', 'FOR2022US1122', '6', NULL),
(NULL, '224', 'FOR2022US1123', '6', NULL),
(NULL, '224', 'FOR2022US1124', '6', NULL),
(NULL, '224', 'FOR2022US1125', '6', NULL),
(NULL, '224', 'FOR2022US1126', '6', NULL),
(NULL, '224', 'FOR2022US1127', '6', NULL),
(NULL, '224', 'FOR2022US1128', '6', NULL),
(NULL, '224', 'FOR2022US1129', '6', NULL),
(NULL, '224', 'FOR2022US1130', '6', NULL),
(NULL, '224', 'FOR2022US1131', '6', NULL),

(NULL, '225', 'FOR2022US1132', '6', NULL),
(NULL, '225', 'FOR2022US1133', '6', NULL),
(NULL, '225', 'FOR2022US1134', '6', NULL),
(NULL, '225', 'FOR2022US1135', '6', NULL),
(NULL, '225', 'FOR2022US1136', '6', NULL),
(NULL, '225', 'FOR2022US1137', '6', NULL),
(NULL, '225', 'FOR2022US1138', '6', NULL),
(NULL, '225', 'FOR2022US1139', '6', NULL),
(NULL, '225', 'FOR2022US1140', '6', NULL),
(NULL, '225', 'FOR2022US1141', '6', NULL),

(NULL, '226', 'FOR2022US1142', '6', NULL),
(NULL, '226', 'FOR2022US1143', '6', NULL),
(NULL, '226', 'FOR2022US1144', '6', NULL),
(NULL, '226', 'FOR2022US1145', '6', NULL),
(NULL, '226', 'FOR2022US1146', '6', NULL),
(NULL, '226', 'FOR2022US1147', '6', NULL),
(NULL, '226', 'FOR2022US1148', '6', NULL),
(NULL, '226', 'FOR2022US1149', '6', NULL),
(NULL, '226', 'FOR2022US1150', '6', NULL),
(NULL, '226', 'FOR2022US1151', '6', NULL),

(NULL, '227', 'FOR2022US1152', '6', NULL),
(NULL, '227', 'FOR2022US1153', '6', NULL),
(NULL, '227', 'FOR2022US1154', '6', NULL),
(NULL, '227', 'FOR2022US1155', '6', NULL),
(NULL, '227', 'FOR2022US1156', '6', NULL),
(NULL, '227', 'FOR2022US1157', '6', NULL),
(NULL, '227', 'FOR2022US1158', '6', NULL),
(NULL, '227', 'FOR2022US1159', '6', NULL),
(NULL, '227', 'FOR2022US1160', '6', NULL),
(NULL, '227', 'FOR2022US1161', '6', NULL),

(NULL, '228', 'FOR2022US1162', '6', NULL),
(NULL, '228', 'FOR2022US1163', '6', NULL),
(NULL, '228', 'FOR2022US1164', '6', NULL),
(NULL, '228', 'FOR2022US1165', '6', NULL),
(NULL, '228', 'FOR2022US1166', '6', NULL),
(NULL, '228', 'FOR2022US1167', '6', NULL),
(NULL, '228', 'FOR2022US1168', '6', NULL),
(NULL, '228', 'FOR2022US1169', '6', NULL),
(NULL, '228', 'FOR2022US1170', '6', NULL),
(NULL, '228', 'FOR2022US1171', '6', NULL),

(NULL, '229', 'FOR2022US1172', '6', NULL),
(NULL, '229', 'FOR2022US1173', '6', NULL),
(NULL, '229', 'FOR2022US1174', '6', NULL),
(NULL, '229', 'FOR2022US1175', '6', NULL),
(NULL, '229', 'FOR2022US1176', '6', NULL),
(NULL, '229', 'FOR2022US1177', '6', NULL),
(NULL, '229', 'FOR2022US1178', '6', NULL),
(NULL, '229', 'FOR2022US1179', '6', NULL),
(NULL, '229', 'FOR2022US1180', '6', NULL),
(NULL, '229', 'FOR2022US1181', '6', NULL),

(NULL, '230', 'FOR2022US1182', '6', NULL),
(NULL, '230', 'FOR2022US1183', '6', NULL),
(NULL, '230', 'FOR2022US1184', '6', NULL),
(NULL, '230', 'FOR2022US1185', '6', NULL),
(NULL, '230', 'FOR2022US1186', '6', NULL),
(NULL, '230', 'FOR2022US1187', '6', NULL),
(NULL, '230', 'FOR2022US1188', '6', NULL),
(NULL, '230', 'FOR2022US1189', '6', NULL),
(NULL, '230', 'FOR2022US1190', '6', NULL),
(NULL, '230', 'FOR2022US1191', '6', NULL),

(NULL, '231', 'FOR2022US1192', '6', NULL),
(NULL, '231', 'FOR2022US1193', '6', NULL),
(NULL, '231', 'FOR2022US1194', '6', NULL),
(NULL, '231', 'FOR2022US1195', '6', NULL),
(NULL, '231', 'FOR2022US1196', '6', NULL),
(NULL, '231', 'FOR2022US1197', '6', NULL),
(NULL, '231', 'FOR2022US1198', '6', NULL),
(NULL, '231', 'FOR2022US1199', '6', NULL),
(NULL, '231', 'FOR2022US1200', '6', NULL),
(NULL, '231', 'FOR2022US1201', '6', NULL),

(NULL, '232', 'FOR2022US1202', '6', NULL),
(NULL, '232', 'FOR2022US1203', '6', NULL),
(NULL, '232', 'FOR2022US1204', '6', NULL),
(NULL, '232', 'FOR2022US1205', '6', NULL),
(NULL, '232', 'FOR2022US1206', '6', NULL),
(NULL, '232', 'FOR2022US1207', '6', NULL),
(NULL, '232', 'FOR2022US1208', '6', NULL),
(NULL, '232', 'FOR2022US1209', '6', NULL),
(NULL, '232', 'FOR2022US1210', '6', NULL),
(NULL, '232', 'FOR2022US1211', '6', NULL),

(NULL, '233', 'FOR2022US1212', '6', NULL),
(NULL, '233', 'FOR2022US1213', '6', NULL),
(NULL, '233', 'FOR2022US1214', '6', NULL),
(NULL, '233', 'FOR2022US1215', '6', NULL),
(NULL, '233', 'FOR2022US1216', '6', NULL),
(NULL, '233', 'FOR2022US1217', '6', NULL),
(NULL, '233', 'FOR2022US1218', '6', NULL),
(NULL, '233', 'FOR2022US1219', '6', NULL),
(NULL, '233', 'FOR2022US1220', '6', NULL),
(NULL, '233', 'FOR2022US1221', '6', NULL),

(NULL, '234', 'FOR2022US1222', '6', NULL),
(NULL, '234', 'FOR2022US1223', '6', NULL),
(NULL, '234', 'FOR2022US1224', '6', NULL),
(NULL, '234', 'FOR2022US1225', '6', NULL),
(NULL, '234', 'FOR2022US1226', '6', NULL),
(NULL, '234', 'FOR2022US1227', '6', NULL),
(NULL, '234', 'FOR2022US1228', '6', NULL),
(NULL, '234', 'FOR2022US1229', '6', NULL),
(NULL, '234', 'FOR2022US1230', '6', NULL),
(NULL, '234', 'FOR2022US1231', '6', NULL),

(NULL, '235', 'FOR2022US1232', '6', NULL),
(NULL, '235', 'FOR2022US1233', '6', NULL),
(NULL, '235', 'FOR2022US1234', '6', NULL),
(NULL, '235', 'FOR2022US1235', '6', NULL),
(NULL, '235', 'FOR2022US1236', '6', NULL),
(NULL, '235', 'FOR2022US1237', '6', NULL),
(NULL, '235', 'FOR2022US1238', '6', NULL),
(NULL, '235', 'FOR2022US1239', '6', NULL),
(NULL, '235', 'FOR2022US1240', '6', NULL),
(NULL, '235', 'FOR2022US1241', '6', NULL),

(NULL, '236', 'FOR2022US1242', '6', NULL),
(NULL, '236', 'FOR2022US1243', '6', NULL),
(NULL, '236', 'FOR2022US1244', '6', NULL),
(NULL, '236', 'FOR2022US1245', '6', NULL),
(NULL, '236', 'FOR2022US1246', '6', NULL),
(NULL, '236', 'FOR2022US1247', '6', NULL),
(NULL, '236', 'FOR2022US1248', '6', NULL),
(NULL, '236', 'FOR2022US1249', '6', NULL),
(NULL, '236', 'FOR2022US1250', '6', NULL),
(NULL, '236', 'FOR2022US1251', '6', NULL),

(NULL, '237', 'FOR2022US1252', '6', NULL),
(NULL, '237', 'FOR2022US1253', '6', NULL),
(NULL, '237', 'FOR2022US1254', '6', NULL),
(NULL, '237', 'FOR2022US1255', '6', NULL),
(NULL, '237', 'FOR2022US1256', '6', NULL),
(NULL, '237', 'FOR2022US1257', '6', NULL),
(NULL, '237', 'FOR2022US1258', '6', NULL),
(NULL, '237', 'FOR2022US1259', '6', NULL),
(NULL, '237', 'FOR2022US1260', '6', NULL),
(NULL, '237', 'FOR2022US1261', '6', NULL),

(NULL, '238', 'FOR2022US1262', '6', NULL),
(NULL, '238', 'FOR2022US1263', '6', NULL),
(NULL, '238', 'FOR2022US1264', '6', NULL),
(NULL, '238', 'FOR2022US1265', '6', NULL),
(NULL, '238', 'FOR2022US1266', '6', NULL),
(NULL, '238', 'FOR2022US1267', '6', NULL),
(NULL, '238', 'FOR2022US1268', '6', NULL),
(NULL, '238', 'FOR2022US1269', '6', NULL),
(NULL, '238', 'FOR2022US1270', '6', NULL),
(NULL, '238', 'FOR2022US1271', '6', NULL),

(NULL, '239', 'FOR2022US1272', '6', NULL),
(NULL, '239', 'FOR2022US1273', '6', NULL),
(NULL, '239', 'FOR2022US1274', '6', NULL),
(NULL, '239', 'FOR2022US1275', '6', NULL),
(NULL, '239', 'FOR2022US1276', '6', NULL),
(NULL, '239', 'FOR2022US1277', '6', NULL),
(NULL, '239', 'FOR2022US1278', '6', NULL),
(NULL, '239', 'FOR2022US1279', '6', NULL),
(NULL, '239', 'FOR2022US1280', '6', NULL),
(NULL, '239', 'FOR2022US1281', '6', NULL),

(NULL, '240', 'FOR2022US1282', '6', NULL),
(NULL, '240', 'FOR2022US1283', '6', NULL),
(NULL, '240', 'FOR2022US1284', '6', NULL),
(NULL, '240', 'FOR2022US1285', '6', NULL),
(NULL, '240', 'FOR2022US1286', '6', NULL),
(NULL, '240', 'FOR2022US1287', '6', NULL),
(NULL, '240', 'FOR2022US1288', '6', NULL),
(NULL, '240', 'FOR2022US1289', '6', NULL),
(NULL, '240', 'FOR2022US1290', '6', NULL),
(NULL, '240', 'FOR2022US1291', '6', NULL),

(NULL, '241', 'FOR2022US1292', '6', NULL),
(NULL, '241', 'FOR2022US1293', '6', NULL),
(NULL, '241', 'FOR2022US1294', '6', NULL),
(NULL, '241', 'FOR2022US1295', '6', NULL),
(NULL, '241', 'FOR2022US1296', '6', NULL),
(NULL, '241', 'FOR2022US1297', '6', NULL),
(NULL, '241', 'FOR2022US1298', '6', NULL),
(NULL, '241', 'FOR2022US1299', '6', NULL),
(NULL, '241', 'FOR2022US1300', '6', NULL),
(NULL, '241', 'FOR2022US1301', '6', NULL),

(NULL, '242', 'FOR2022US1302', '6', NULL),
(NULL, '242', 'FOR2022US1303', '6', NULL),
(NULL, '242', 'FOR2022US1304', '6', NULL),
(NULL, '242', 'FOR2022US1305', '6', NULL),
(NULL, '242', 'FOR2022US1306', '6', NULL),
(NULL, '242', 'FOR2022US1307', '6', NULL),
(NULL, '242', 'FOR2022US1308', '6', NULL),
(NULL, '242', 'FOR2022US1309', '6', NULL),
(NULL, '242', 'FOR2022US1310', '6', NULL),
(NULL, '242', 'FOR2022US1311', '6', NULL),

(NULL, '243', 'FOR2022US1312', '6', NULL),
(NULL, '243', 'FOR2022US1313', '6', NULL),
(NULL, '243', 'FOR2022US1314', '6', NULL),
(NULL, '243', 'FOR2022US1315', '6', NULL),
(NULL, '243', 'FOR2022US1316', '6', NULL),
(NULL, '243', 'FOR2022US1317', '6', NULL),
(NULL, '243', 'FOR2022US1318', '6', NULL),
(NULL, '243', 'FOR2022US1319', '6', NULL),
(NULL, '243', 'FOR2022US1320', '6', NULL),
(NULL, '243', 'FOR2022US1321', '6', NULL),

(NULL, '244', 'FOR2022US1322', '6', NULL),
(NULL, '244', 'FOR2022US1323', '6', NULL),
(NULL, '244', 'FOR2022US1324', '6', NULL),
(NULL, '244', 'FOR2022US1325', '6', NULL),
(NULL, '244', 'FOR2022US1326', '6', NULL),
(NULL, '244', 'FOR2022US1327', '6', NULL),
(NULL, '244', 'FOR2022US1328', '6', NULL),
(NULL, '244', 'FOR2022US1329', '6', NULL),
(NULL, '244', 'FOR2022US1330', '6', NULL),
(NULL, '244', 'FOR2022US1331', '6', NULL),

(NULL, '245', 'FOR2022US1332', '6', NULL),
(NULL, '245', 'FOR2022US1333', '6', NULL),
(NULL, '245', 'FOR2022US1334', '6', NULL),
(NULL, '245', 'FOR2022US1335', '6', NULL),
(NULL, '245', 'FOR2022US1336', '6', NULL),
(NULL, '245', 'FOR2022US1337', '6', NULL),
(NULL, '245', 'FOR2022US1338', '6', NULL),
(NULL, '245', 'FOR2022US1339', '6', NULL),
(NULL, '245', 'FOR2022US1340', '6', NULL),
(NULL, '245', 'FOR2022US1341', '6', NULL),

(NULL, '246', 'FOR2022US1342', '6', NULL),
(NULL, '246', 'FOR2022US1343', '6', NULL),
(NULL, '246', 'FOR2022US1344', '6', NULL),
(NULL, '246', 'FOR2022US1345', '6', NULL),
(NULL, '246', 'FOR2022US1346', '6', NULL),
(NULL, '246', 'FOR2022US1347', '6', NULL),
(NULL, '246', 'FOR2022US1348', '6', NULL),
(NULL, '246', 'FOR2022US1349', '6', NULL),
(NULL, '246', 'FOR2022US1350', '6', NULL),
(NULL, '246', 'FOR2022US1351', '6', NULL),

(NULL, '247', 'FOR2022US1352', '6', NULL),
(NULL, '247', 'FOR2022US1353', '6', NULL),
(NULL, '247', 'FOR2022US1354', '6', NULL),
(NULL, '247', 'FOR2022US1355', '6', NULL),
(NULL, '247', 'FOR2022US1356', '6', NULL),
(NULL, '247', 'FOR2022US1357', '6', NULL),
(NULL, '247', 'FOR2022US1358', '6', NULL),
(NULL, '247', 'FOR2022US1359', '6', NULL),
(NULL, '247', 'FOR2022US1360', '6', NULL),
(NULL, '247', 'FOR2022US1361', '6', NULL),

(NULL, '248', 'FOR2022US1362', '6', NULL),
(NULL, '248', 'FOR2022US1363', '6', NULL),
(NULL, '248', 'FOR2022US1364', '6', NULL),
(NULL, '248', 'FOR2022US1365', '6', NULL),
(NULL, '248', 'FOR2022US1366', '6', NULL),
(NULL, '248', 'FOR2022US1367', '6', NULL),
(NULL, '248', 'FOR2022US1368', '6', NULL),
(NULL, '248', 'FOR2022US1369', '6', NULL),
(NULL, '248', 'FOR2022US1370', '6', NULL),
(NULL, '248', 'FOR2022US1371', '6', NULL),

(NULL, '249', 'FOR2022US1372', '6', NULL),
(NULL, '249', 'FOR2022US1373', '6', NULL),
(NULL, '249', 'FOR2022US1374', '6', NULL),
(NULL, '249', 'FOR2022US1375', '6', NULL),
(NULL, '249', 'FOR2022US1376', '6', NULL),
(NULL, '249', 'FOR2022US1377', '6', NULL),
(NULL, '249', 'FOR2022US1378', '6', NULL),
(NULL, '249', 'FOR2022US1379', '6', NULL),
(NULL, '249', 'FOR2022US1380', '6', NULL),
(NULL, '249', 'FOR2022US1381', '6', NULL),

(NULL, '250', 'FOR2022US1382', '6', NULL),
(NULL, '250', 'FOR2022US1383', '6', NULL),
(NULL, '250', 'FOR2022US1384', '6', NULL),
(NULL, '250', 'FOR2022US1385', '6', NULL),
(NULL, '250', 'FOR2022US1386', '6', NULL),
(NULL, '250', 'FOR2022US1387', '6', NULL),
(NULL, '250', 'FOR2022US1388', '6', NULL),
(NULL, '250', 'FOR2022US1389', '6', NULL),
(NULL, '250', 'FOR2022US1390', '6', NULL),
(NULL, '250', 'FOR2022US1391', '6', NULL),

(NULL, '251', 'FOR2022US1392', '6', NULL),
(NULL, '251', 'FOR2022US1393', '6', NULL),
(NULL, '251', 'FOR2022US1394', '6', NULL),
(NULL, '251', 'FOR2022US1395', '6', NULL),
(NULL, '251', 'FOR2022US1396', '6', NULL),
(NULL, '251', 'FOR2022US1397', '6', NULL),
(NULL, '251', 'FOR2022US1398', '6', NULL),
(NULL, '251', 'FOR2022US1399', '6', NULL),
(NULL, '251', 'FOR2022US1400', '6', NULL),
(NULL, '251', 'FOR2022US1401', '6', NULL),

(NULL, '252', 'FOR2022US1402', '6', NULL),
(NULL, '252', 'FOR2022US1403', '6', NULL),
(NULL, '252', 'FOR2022US1404', '6', NULL),
(NULL, '252', 'FOR2022US1405', '6', NULL),
(NULL, '252', 'FOR2022US1406', '6', NULL),
(NULL, '252', 'FOR2022US1407', '6', NULL),
(NULL, '252', 'FOR2022US1408', '6', NULL),
(NULL, '252', 'FOR2022US1409', '6', NULL),
(NULL, '252', 'FOR2022US1410', '6', NULL),
(NULL, '252', 'FOR2022US1411', '6', NULL),

(NULL, '253', 'FOR2022US1412', '6', NULL),
(NULL, '253', 'FOR2022US1413', '6', NULL),
(NULL, '253', 'FOR2022US1414', '6', NULL),
(NULL, '253', 'FOR2022US1415', '6', NULL),
(NULL, '253', 'FOR2022US1416', '6', NULL),
(NULL, '253', 'FOR2022US1417', '6', NULL),
(NULL, '253', 'FOR2022US1418', '6', NULL),
(NULL, '253', 'FOR2022US1419', '6', NULL),
(NULL, '253', 'FOR2022US1420', '6', NULL),
(NULL, '253', 'FOR2022US1421', '6', NULL),

(NULL, '254', 'FOR2022US1422', '6', NULL),
(NULL, '254', 'FOR2022US1423', '6', NULL),
(NULL, '254', 'FOR2022US1424', '6', NULL),
(NULL, '254', 'FOR2022US1425', '6', NULL),
(NULL, '254', 'FOR2022US1426', '6', NULL),
(NULL, '254', 'FOR2022US1427', '6', NULL),
(NULL, '254', 'FOR2022US1428', '6', NULL),
(NULL, '254', 'FOR2022US1429', '6', NULL),
(NULL, '254', 'FOR2022US1430', '6', NULL),
(NULL, '254', 'FOR2022US1431', '6', NULL),

(NULL, '255', 'FOR2022US1432', '6', NULL),
(NULL, '255', 'FOR2022US1433', '6', NULL),
(NULL, '255', 'FOR2022US1434', '6', NULL),
(NULL, '255', 'FOR2022US1435', '6', NULL),
(NULL, '255', 'FOR2022US1436', '6', NULL),
(NULL, '255', 'FOR2022US1437', '6', NULL),
(NULL, '255', 'FOR2022US1438', '6', NULL),
(NULL, '255', 'FOR2022US1439', '6', NULL),
(NULL, '255', 'FOR2022US1440', '6', NULL),
(NULL, '255', 'FOR2022US1441', '6', NULL),

(NULL, '256', 'FOR2022US1442', '6', NULL),
(NULL, '256', 'FOR2022US1443', '6', NULL),
(NULL, '256', 'FOR2022US1444', '6', NULL),
(NULL, '256', 'FOR2022US1445', '6', NULL),
(NULL, '256', 'FOR2022US1446', '6', NULL),
(NULL, '256', 'FOR2022US1447', '6', NULL),
(NULL, '256', 'FOR2022US1448', '6', NULL),
(NULL, '256', 'FOR2022US1449', '6', NULL),
(NULL, '256', 'FOR2022US1450', '6', NULL),
(NULL, '256', 'FOR2022US1451', '6', NULL),

(NULL, '257', 'FOR2022US1452', '6', NULL),
(NULL, '257', 'FOR2022US1453', '6', NULL),
(NULL, '257', 'FOR2022US1454', '6', NULL),
(NULL, '257', 'FOR2022US1455', '6', NULL),
(NULL, '257', 'FOR2022US1456', '6', NULL),
(NULL, '257', 'FOR2022US1457', '6', NULL),
(NULL, '257', 'FOR2022US1458', '6', NULL),
(NULL, '257', 'FOR2022US1459', '6', NULL),
(NULL, '257', 'FOR2022US1460', '6', NULL),
(NULL, '257', 'FOR2022US1461', '6', NULL),

(NULL, '258', 'FOR2022US1462', '6', NULL),
(NULL, '258', 'FOR2022US1463', '6', NULL),
(NULL, '258', 'FOR2022US1464', '6', NULL),
(NULL, '258', 'FOR2022US1465', '6', NULL),
(NULL, '258', 'FOR2022US1466', '6', NULL),
(NULL, '258', 'FOR2022US1467', '6', NULL),
(NULL, '258', 'FOR2022US1468', '6', NULL),
(NULL, '258', 'FOR2022US1469', '6', NULL),
(NULL, '258', 'FOR2022US1470', '6', NULL),
(NULL, '258', 'FOR2022US1471', '6', NULL),

(NULL, '259', 'FOR2022US1472', '6', NULL),
(NULL, '259', 'FOR2022US1473', '6', NULL),
(NULL, '259', 'FOR2022US1474', '6', NULL),
(NULL, '259', 'FOR2022US1475', '6', NULL),
(NULL, '259', 'FOR2022US1476', '6', NULL),
(NULL, '259', 'FOR2022US1477', '6', NULL),
(NULL, '259', 'FOR2022US1478', '6', NULL),
(NULL, '259', 'FOR2022US1479', '6', NULL),
(NULL, '259', 'FOR2022US1480', '6', NULL),
(NULL, '259', 'FOR2022US1481', '6', NULL),

(NULL, '260', 'FOR2022US1482', '6', NULL),
(NULL, '260', 'FOR2022US1483', '6', NULL),
(NULL, '260', 'FOR2022US1484', '6', NULL),
(NULL, '260', 'FOR2022US1485', '6', NULL),
(NULL, '260', 'FOR2022US1486', '6', NULL),
(NULL, '260', 'FOR2022US1487', '6', NULL),
(NULL, '260', 'FOR2022US1488', '6', NULL),
(NULL, '260', 'FOR2022US1489', '6', NULL),
(NULL, '260', 'FOR2022US1490', '6', NULL),
(NULL, '260', 'FOR2022US1491', '6', NULL),

(NULL, '261', 'FOR2022US1492', '6', NULL),
(NULL, '261', 'FOR2022US1493', '6', NULL),
(NULL, '261', 'FOR2022US1494', '6', NULL),
(NULL, '261', 'FOR2022US1495', '6', NULL),
(NULL, '261', 'FOR2022US1496', '6', NULL),
(NULL, '261', 'FOR2022US1497', '6', NULL),
(NULL, '261', 'FOR2022US1498', '6', NULL),
(NULL, '261', 'FOR2022US1499', '6', NULL),
(NULL, '261', 'FOR2022US1500', '6', NULL),
(NULL, '261', 'FOR2022US1501', '6', NULL),

(NULL, '262', 'FOR2022US1502', '6', NULL),
(NULL, '262', 'FOR2022US1503', '6', NULL),
(NULL, '262', 'FOR2022US1504', '6', NULL),
(NULL, '262', 'FOR2022US1505', '6', NULL),
(NULL, '262', 'FOR2022US1506', '6', NULL),
(NULL, '262', 'FOR2022US1507', '6', NULL),
(NULL, '262', 'FOR2022US1508', '6', NULL),
(NULL, '262', 'FOR2022US1509', '6', NULL),
(NULL, '262', 'FOR2022US1510', '6', NULL),
(NULL, '262', 'FOR2022US1511', '6', NULL),

(NULL, '263', 'FOR2022US1512', '6', NULL),
(NULL, '263', 'FOR2022US1513', '6', NULL),
(NULL, '263', 'FOR2022US1514', '6', NULL),
(NULL, '263', 'FOR2022US1515', '6', NULL),
(NULL, '263', 'FOR2022US1516', '6', NULL),
(NULL, '263', 'FOR2022US1517', '6', NULL),
(NULL, '263', 'FOR2022US1518', '6', NULL),
(NULL, '263', 'FOR2022US1519', '6', NULL),
(NULL, '263', 'FOR2022US1520', '6', NULL),
(NULL, '263', 'FOR2022US1521', '6', NULL),

(NULL, '264', 'FOR2022US1522', '6', NULL),
(NULL, '264', 'FOR2022US1523', '6', NULL),
(NULL, '264', 'FOR2022US1524', '6', NULL),
(NULL, '264', 'FOR2022US1525', '6', NULL),
(NULL, '264', 'FOR2022US1526', '6', NULL),
(NULL, '264', 'FOR2022US1527', '6', NULL),
(NULL, '264', 'FOR2022US1528', '6', NULL),
(NULL, '264', 'FOR2022US1529', '6', NULL),
(NULL, '264', 'FOR2022US1530', '6', NULL),
(NULL, '264', 'FOR2022US1531', '6', NULL),

(NULL, '265', 'FOR2022US1532', '6', NULL),
(NULL, '265', 'FOR2022US1533', '6', NULL),
(NULL, '265', 'FOR2022US1534', '6', NULL),
(NULL, '265', 'FOR2022US1535', '6', NULL),
(NULL, '265', 'FOR2022US1536', '6', NULL),
(NULL, '265', 'FOR2022US1537', '6', NULL),
(NULL, '265', 'FOR2022US1538', '6', NULL),
(NULL, '265', 'FOR2022US1539', '6', NULL),
(NULL, '265', 'FOR2022US1540', '6', NULL),
(NULL, '265', 'FOR2022US1541', '6', NULL),

(NULL, '266', 'FOR2022US1542', '6', NULL),
(NULL, '266', 'FOR2022US1543', '6', NULL),
(NULL, '266', 'FOR2022US1544', '6', NULL),
(NULL, '266', 'FOR2022US1545', '6', NULL),
(NULL, '266', 'FOR2022US1546', '6', NULL),
(NULL, '266', 'FOR2022US1547', '6', NULL),
(NULL, '266', 'FOR2022US1548', '6', NULL),
(NULL, '266', 'FOR2022US1549', '6', NULL),
(NULL, '266', 'FOR2022US1550', '6', NULL),
(NULL, '266', 'FOR2022US1551', '6', NULL),

(NULL, '267', 'FOR2022US1552', '6', NULL),
(NULL, '267', 'FOR2022US1553', '6', NULL),
(NULL, '267', 'FOR2022US1554', '6', NULL),
(NULL, '267', 'FOR2022US1555', '6', NULL),
(NULL, '267', 'FOR2022US1556', '6', NULL),
(NULL, '267', 'FOR2022US1557', '6', NULL),
(NULL, '267', 'FOR2022US1558', '6', NULL),
(NULL, '267', 'FOR2022US1559', '6', NULL),
(NULL, '267', 'FOR2022US1560', '6', NULL),
(NULL, '267', 'FOR2022US1561', '6', NULL),

(NULL, '268', 'FOR2022US1562', '6', NULL),
(NULL, '268', 'FOR2022US1563', '6', NULL),
(NULL, '268', 'FOR2022US1564', '6', NULL),
(NULL, '268', 'FOR2022US1565', '6', NULL),
(NULL, '268', 'FOR2022US1566', '6', NULL),
(NULL, '268', 'FOR2022US1567', '6', NULL),
(NULL, '268', 'FOR2022US1568', '6', NULL),
(NULL, '268', 'FOR2022US1569', '6', NULL),
(NULL, '268', 'FOR2022US1570', '6', NULL),
(NULL, '268', 'FOR2022US1571', '6', NULL),

(NULL, '269', 'FOR2022US1572', '6', NULL),
(NULL, '269', 'FOR2022US1573', '6', NULL),
(NULL, '269', 'FOR2022US1574', '6', NULL),
(NULL, '269', 'FOR2022US1575', '6', NULL),
(NULL, '269', 'FOR2022US1576', '6', NULL),
(NULL, '269', 'FOR2022US1577', '6', NULL),
(NULL, '269', 'FOR2022US1578', '6', NULL),
(NULL, '269', 'FOR2022US1579', '6', NULL),
(NULL, '269', 'FOR2022US1580', '6', NULL),
(NULL, '269', 'FOR2022US1581', '6', NULL),

(NULL, '270', 'FOR2022US1582', '6', NULL),
(NULL, '270', 'FOR2022US1583', '6', NULL),
(NULL, '270', 'FOR2022US1584', '6', NULL),
(NULL, '270', 'FOR2022US1585', '6', NULL),
(NULL, '270', 'FOR2022US1586', '6', NULL),
(NULL, '270', 'FOR2022US1587', '6', NULL),
(NULL, '270', 'FOR2022US1588', '6', NULL),
(NULL, '270', 'FOR2022US1589', '6', NULL),
(NULL, '270', 'FOR2022US1590', '6', NULL),
(NULL, '270', 'FOR2022US1591', '6', NULL),

(NULL, '271', 'FOR2022US1592', '6', NULL),
(NULL, '271', 'FOR2022US1593', '6', NULL),
(NULL, '271', 'FOR2022US1594', '6', NULL),
(NULL, '271', 'FOR2022US1595', '6', NULL),
(NULL, '271', 'FOR2022US1596', '6', NULL),
(NULL, '271', 'FOR2022US1597', '6', NULL),
(NULL, '271', 'FOR2022US1598', '6', NULL),
(NULL, '271', 'FOR2022US1599', '6', NULL),
(NULL, '271', 'FOR2022US1600', '6', NULL),
(NULL, '271', 'FOR2022US1601', '6', NULL),

(NULL, '272', 'FOR2022US1602', '6', NULL),
(NULL, '272', 'FOR2022US1603', '6', NULL),
(NULL, '272', 'FOR2022US1604', '6', NULL),
(NULL, '272', 'FOR2022US1605', '6', NULL),
(NULL, '272', 'FOR2022US1606', '6', NULL),
(NULL, '272', 'FOR2022US1607', '6', NULL),
(NULL, '272', 'FOR2022US1608', '6', NULL),
(NULL, '272', 'FOR2022US1609', '6', NULL),
(NULL, '272', 'FOR2022US1610', '6', NULL),
(NULL, '272', 'FOR2022US1611', '6', NULL),

(NULL, '273', 'FOR2022US1612', '6', NULL),
(NULL, '273', 'FOR2022US1613', '6', NULL),
(NULL, '273', 'FOR2022US1614', '6', NULL),
(NULL, '273', 'FOR2022US1615', '6', NULL),
(NULL, '273', 'FOR2022US1616', '6', NULL),
(NULL, '273', 'FOR2022US1617', '6', NULL),
(NULL, '273', 'FOR2022US1618', '6', NULL),
(NULL, '273', 'FOR2022US1619', '6', NULL),
(NULL, '273', 'FOR2022US1620', '6', NULL),
(NULL, '273', 'FOR2022US1621', '6', NULL),

(NULL, '274', 'FOR2022US1622', '6', NULL),
(NULL, '274', 'FOR2022US1623', '6', NULL),
(NULL, '274', 'FOR2022US1624', '6', NULL),
(NULL, '274', 'FOR2022US1625', '6', NULL),
(NULL, '274', 'FOR2022US1626', '6', NULL),
(NULL, '274', 'FOR2022US1627', '6', NULL),
(NULL, '274', 'FOR2022US1628', '6', NULL),
(NULL, '274', 'FOR2022US1629', '6', NULL),
(NULL, '274', 'FOR2022US1630', '6', NULL),
(NULL, '274', 'FOR2022US1631', '6', NULL),

(NULL, '275', 'FOR2022US1632', '6', NULL),
(NULL, '275', 'FOR2022US1633', '6', NULL),
(NULL, '275', 'FOR2022US1634', '6', NULL),
(NULL, '275', 'FOR2022US1635', '6', NULL),
(NULL, '275', 'FOR2022US1636', '6', NULL),
(NULL, '275', 'FOR2022US1637', '6', NULL),
(NULL, '275', 'FOR2022US1638', '6', NULL),
(NULL, '275', 'FOR2022US1639', '6', NULL),
(NULL, '275', 'FOR2022US1640', '6', NULL),
(NULL, '275', 'FOR2022US1641', '6', NULL),

(NULL, '276', 'FOR2022US1642', '6', NULL),
(NULL, '276', 'FOR2022US1643', '6', NULL),
(NULL, '276', 'FOR2022US1644', '6', NULL),
(NULL, '276', 'FOR2022US1645', '6', NULL),
(NULL, '276', 'FOR2022US1646', '6', NULL),
(NULL, '276', 'FOR2022US1647', '6', NULL),
(NULL, '276', 'FOR2022US1648', '6', NULL),
(NULL, '276', 'FOR2022US1649', '6', NULL),
(NULL, '276', 'FOR2022US1650', '6', NULL),
(NULL, '276', 'FOR2022US1651', '6', NULL),

(NULL, '277', 'FOR2022US1652', '6', NULL),
(NULL, '277', 'FOR2022US1653', '6', NULL),
(NULL, '277', 'FOR2022US1654', '6', NULL),
(NULL, '277', 'FOR2022US1655', '6', NULL),
(NULL, '277', 'FOR2022US1656', '6', NULL),
(NULL, '277', 'FOR2022US1657', '6', NULL),
(NULL, '277', 'FOR2022US1658', '6', NULL),
(NULL, '277', 'FOR2022US1659', '6', NULL),
(NULL, '277', 'FOR2022US1660', '6', NULL),
(NULL, '277', 'FOR2022US1661', '6', NULL),

(NULL, '278', 'FOR2022US1662', '6', NULL),
(NULL, '278', 'FOR2022US1663', '6', NULL),
(NULL, '278', 'FOR2022US1664', '6', NULL),
(NULL, '278', 'FOR2022US1665', '6', NULL),
(NULL, '278', 'FOR2022US1666', '6', NULL),
(NULL, '278', 'FOR2022US1667', '6', NULL),
(NULL, '278', 'FOR2022US1668', '6', NULL),
(NULL, '278', 'FOR2022US1669', '6', NULL),
(NULL, '278', 'FOR2022US1670', '6', NULL),
(NULL, '278', 'FOR2022US1671', '6', NULL),

(NULL, '279', 'FOR2022US1672', '6', NULL),
(NULL, '279', 'FOR2022US1673', '6', NULL),
(NULL, '279', 'FOR2022US1674', '6', NULL),
(NULL, '279', 'FOR2022US1675', '6', NULL),
(NULL, '279', 'FOR2022US1676', '6', NULL),
(NULL, '279', 'FOR2022US1677', '6', NULL),
(NULL, '279', 'FOR2022US1678', '6', NULL),
(NULL, '279', 'FOR2022US1679', '6', NULL),
(NULL, '279', 'FOR2022US1680', '6', NULL),
(NULL, '279', 'FOR2022US1681', '6', NULL),

(NULL, '280', 'FOR2022US1682', '6', NULL),
(NULL, '280', 'FOR2022US1683', '6', NULL),
(NULL, '280', 'FOR2022US1684', '6', NULL),
(NULL, '280', 'FOR2022US1685', '6', NULL),
(NULL, '280', 'FOR2022US1686', '6', NULL),
(NULL, '280', 'FOR2022US1687', '6', NULL),
(NULL, '280', 'FOR2022US1688', '6', NULL),
(NULL, '280', 'FOR2022US1689', '6', NULL),
(NULL, '280', 'FOR2022US1690', '6', NULL),
(NULL, '280', 'FOR2022US1691', '6', NULL),

(NULL, '281', 'FOR2022US1692', '6', NULL),
(NULL, '281', 'FOR2022US1693', '6', NULL),
(NULL, '281', 'FOR2022US1694', '6', NULL),
(NULL, '281', 'FOR2022US1695', '6', NULL),
(NULL, '281', 'FOR2022US1696', '6', NULL),
(NULL, '281', 'FOR2022US1697', '6', NULL),
(NULL, '281', 'FOR2022US1698', '6', NULL),
(NULL, '281', 'FOR2022US1699', '6', NULL),
(NULL, '281', 'FOR2022US1700', '6', NULL),
(NULL, '281', 'FOR2022US1701', '6', NULL),

(NULL, '282', 'FOR2022US1702', '6', NULL),
(NULL, '282', 'FOR2022US1703', '6', NULL),
(NULL, '282', 'FOR2022US1704', '6', NULL),
(NULL, '282', 'FOR2022US1705', '6', NULL),
(NULL, '282', 'FOR2022US1706', '6', NULL),
(NULL, '282', 'FOR2022US1707', '6', NULL),
(NULL, '282', 'FOR2022US1708', '6', NULL),
(NULL, '282', 'FOR2022US1709', '6', NULL),
(NULL, '282', 'FOR2022US1710', '6', NULL),
(NULL, '282', 'FOR2022US1711', '6', NULL),

(NULL, '283', 'FOR2022US1712', '6', NULL),
(NULL, '283', 'FOR2022US1713', '6', NULL),
(NULL, '283', 'FOR2022US1714', '6', NULL),
(NULL, '283', 'FOR2022US1715', '6', NULL),
(NULL, '283', 'FOR2022US1716', '6', NULL),
(NULL, '283', 'FOR2022US1717', '6', NULL),
(NULL, '283', 'FOR2022US1718', '6', NULL),
(NULL, '283', 'FOR2022US1719', '6', NULL),
(NULL, '283', 'FOR2022US1720', '6', NULL),
(NULL, '283', 'FOR2022US1721', '6', NULL),

(NULL, '284', 'FOR2022US1722', '6', NULL),
(NULL, '284', 'FOR2022US1723', '6', NULL),
(NULL, '284', 'FOR2022US1724', '6', NULL),
(NULL, '284', 'FOR2022US1725', '6', NULL),
(NULL, '284', 'FOR2022US1726', '6', NULL),
(NULL, '284', 'FOR2022US1727', '6', NULL),
(NULL, '284', 'FOR2022US1728', '6', NULL),
(NULL, '284', 'FOR2022US1729', '6', NULL),
(NULL, '284', 'FOR2022US1730', '6', NULL),
(NULL, '284', 'FOR2022US1731', '6', NULL),

(NULL, '285', 'FOR2022US1732', '6', NULL),
(NULL, '285', 'FOR2022US1733', '6', NULL),
(NULL, '285', 'FOR2022US1734', '6', NULL),
(NULL, '285', 'FOR2022US1735', '6', NULL),
(NULL, '285', 'FOR2022US1736', '6', NULL),
(NULL, '285', 'FOR2022US1737', '6', NULL),
(NULL, '285', 'FOR2022US1738', '6', NULL),
(NULL, '285', 'FOR2022US1739', '6', NULL),
(NULL, '285', 'FOR2022US1740', '6', NULL),
(NULL, '285', 'FOR2022US1741', '6', NULL),

(NULL, '286', 'FOR2022US1742', '6', NULL),
(NULL, '286', 'FOR2022US1743', '6', NULL),
(NULL, '286', 'FOR2022US1744', '6', NULL),
(NULL, '286', 'FOR2022US1745', '6', NULL),
(NULL, '286', 'FOR2022US1746', '6', NULL),
(NULL, '286', 'FOR2022US1747', '6', NULL),
(NULL, '286', 'FOR2022US1748', '6', NULL),
(NULL, '286', 'FOR2022US1749', '6', NULL),
(NULL, '286', 'FOR2022US1750', '6', NULL),
(NULL, '286', 'FOR2022US1751', '6', NULL),

(NULL, '287', 'FOR2022US1752', '6', NULL),
(NULL, '287', 'FOR2022US1753', '6', NULL),
(NULL, '287', 'FOR2022US1754', '6', NULL),
(NULL, '287', 'FOR2022US1755', '6', NULL),
(NULL, '287', 'FOR2022US1756', '6', NULL),
(NULL, '287', 'FOR2022US1757', '6', NULL),
(NULL, '287', 'FOR2022US1758', '6', NULL),
(NULL, '287', 'FOR2022US1759', '6', NULL),
(NULL, '287', 'FOR2022US1760', '6', NULL),
(NULL, '287', 'FOR2022US1761', '6', NULL),

(NULL, '288', 'FOR2022US1762', '6', NULL),
(NULL, '288', 'FOR2022US1763', '6', NULL),
(NULL, '288', 'FOR2022US1764', '6', NULL),
(NULL, '288', 'FOR2022US1765', '6', NULL),
(NULL, '288', 'FOR2022US1766', '6', NULL),
(NULL, '288', 'FOR2022US1767', '6', NULL),
(NULL, '288', 'FOR2022US1768', '6', NULL),
(NULL, '288', 'FOR2022US1769', '6', NULL),
(NULL, '288', 'FOR2022US1770', '6', NULL),
(NULL, '288', 'FOR2022US1771', '6', NULL),

(NULL, '289', 'FOR2022US1772', '6', NULL),
(NULL, '289', 'FOR2022US1773', '6', NULL),
(NULL, '289', 'FOR2022US1774', '6', NULL),
(NULL, '289', 'FOR2022US1775', '6', NULL),
(NULL, '289', 'FOR2022US1776', '6', NULL),
(NULL, '289', 'FOR2022US1777', '6', NULL),
(NULL, '289', 'FOR2022US1778', '6', NULL),
(NULL, '289', 'FOR2022US1779', '6', NULL),
(NULL, '289', 'FOR2022US1780', '6', NULL),
(NULL, '289', 'FOR2022US1781', '6', NULL),

(NULL, '290', 'FOR2022US1782', '6', NULL),
(NULL, '290', 'FOR2022US1783', '6', NULL),
(NULL, '290', 'FOR2022US1784', '6', NULL),
(NULL, '290', 'FOR2022US1785', '6', NULL),
(NULL, '290', 'FOR2022US1786', '6', NULL),
(NULL, '290', 'FOR2022US1787', '6', NULL),
(NULL, '290', 'FOR2022US1788', '6', NULL),
(NULL, '290', 'FOR2022US1789', '6', NULL),
(NULL, '290', 'FOR2022US1790', '6', NULL),
(NULL, '290', 'FOR2022US1791', '6', NULL),

(NULL, '291', 'FOR2022US1792', '6', NULL),
(NULL, '291', 'FOR2022US1793', '6', NULL),
(NULL, '291', 'FOR2022US1794', '6', NULL),
(NULL, '291', 'FOR2022US1795', '6', NULL),
(NULL, '291', 'FOR2022US1796', '6', NULL),
(NULL, '291', 'FOR2022US1797', '6', NULL),
(NULL, '291', 'FOR2022US1798', '6', NULL),
(NULL, '291', 'FOR2022US1799', '6', NULL),
(NULL, '291', 'FOR2022US1800', '6', NULL),
(NULL, '291', 'FOR2022US1801', '6', NULL),

(NULL, '292', 'FOR2022US1802', '6', NULL),
(NULL, '292', 'FOR2022US1803', '6', NULL),
(NULL, '292', 'FOR2022US1804', '6', NULL),
(NULL, '292', 'FOR2022US1805', '6', NULL),
(NULL, '292', 'FOR2022US1806', '6', NULL),
(NULL, '292', 'FOR2022US1807', '6', NULL),
(NULL, '292', 'FOR2022US1808', '6', NULL),
(NULL, '292', 'FOR2022US1809', '6', NULL),
(NULL, '292', 'FOR2022US1810', '6', NULL),
(NULL, '292', 'FOR2022US1811', '6', NULL),

(NULL, '293', 'FOR2022US1812', '6', NULL),
(NULL, '293', 'FOR2022US1813', '6', NULL),
(NULL, '293', 'FOR2022US1814', '6', NULL),
(NULL, '293', 'FOR2022US1815', '6', NULL),
(NULL, '293', 'FOR2022US1816', '6', NULL),
(NULL, '293', 'FOR2022US1817', '6', NULL),
(NULL, '293', 'FOR2022US1818', '6', NULL),
(NULL, '293', 'FOR2022US1819', '6', NULL),
(NULL, '293', 'FOR2022US1820', '6', NULL),
(NULL, '293', 'FOR2022US1821', '6', NULL),

(NULL, '294', 'FOR2022US1822', '6', NULL),
(NULL, '294', 'FOR2022US1823', '6', NULL),
(NULL, '294', 'FOR2022US1824', '6', NULL),
(NULL, '294', 'FOR2022US1825', '6', NULL),
(NULL, '294', 'FOR2022US1826', '6', NULL),
(NULL, '294', 'FOR2022US1827', '6', NULL),
(NULL, '294', 'FOR2022US1828', '6', NULL),
(NULL, '294', 'FOR2022US1829', '6', NULL),
(NULL, '294', 'FOR2022US1830', '6', NULL),
(NULL, '294', 'FOR2022US1831', '6', NULL),

(NULL, '295', 'FOR2022US1832', '6', NULL),
(NULL, '295', 'FOR2022US1833', '6', NULL),
(NULL, '295', 'FOR2022US1834', '6', NULL),
(NULL, '295', 'FOR2022US1835', '6', NULL),
(NULL, '295', 'FOR2022US1836', '6', NULL),
(NULL, '295', 'FOR2022US1837', '6', NULL),
(NULL, '295', 'FOR2022US1838', '6', NULL),
(NULL, '295', 'FOR2022US1839', '6', NULL),
(NULL, '295', 'FOR2022US1840', '6', NULL),
(NULL, '295', 'FOR2022US1841', '6', NULL),

(NULL, '296', 'FOR2022US1842', '6', NULL),
(NULL, '296', 'FOR2022US1843', '6', NULL),
(NULL, '296', 'FOR2022US1844', '6', NULL),
(NULL, '296', 'FOR2022US1845', '6', NULL),
(NULL, '296', 'FOR2022US1846', '6', NULL),
(NULL, '296', 'FOR2022US1847', '6', NULL),
(NULL, '296', 'FOR2022US1848', '6', NULL),
(NULL, '296', 'FOR2022US1849', '6', NULL),
(NULL, '296', 'FOR2022US1850', '6', NULL),
(NULL, '296', 'FOR2022US1851', '6', NULL),

(NULL, '297', 'FOR2022US1852', '6', NULL),
(NULL, '297', 'FOR2022US1853', '6', NULL),
(NULL, '297', 'FOR2022US1854', '6', NULL),
(NULL, '297', 'FOR2022US1855', '6', NULL),
(NULL, '297', 'FOR2022US1856', '6', NULL),
(NULL, '297', 'FOR2022US1857', '6', NULL),
(NULL, '297', 'FOR2022US1858', '6', NULL),
(NULL, '297', 'FOR2022US1859', '6', NULL),
(NULL, '297', 'FOR2022US1860', '6', NULL),
(NULL, '297', 'FOR2022US1861', '6', NULL),

(NULL, '298', 'FOR2022US1862', '6', NULL),
(NULL, '298', 'FOR2022US1863', '6', NULL),
(NULL, '298', 'FOR2022US1864', '6', NULL),
(NULL, '298', 'FOR2022US1865', '6', NULL),
(NULL, '298', 'FOR2022US1866', '6', NULL),
(NULL, '298', 'FOR2022US1867', '6', NULL),
(NULL, '298', 'FOR2022US1868', '6', NULL),
(NULL, '298', 'FOR2022US1869', '6', NULL),
(NULL, '298', 'FOR2022US1870', '6', NULL),
(NULL, '298', 'FOR2022US1871', '6', NULL),

(NULL, '299', 'FOR2022US1872', '6', NULL),
(NULL, '299', 'FOR2022US1873', '6', NULL),
(NULL, '299', 'FOR2022US1874', '6', NULL),
(NULL, '299', 'FOR2022US1875', '6', NULL),
(NULL, '299', 'FOR2022US1876', '6', NULL),
(NULL, '299', 'FOR2022US1877', '6', NULL),
(NULL, '299', 'FOR2022US1878', '6', NULL),
(NULL, '299', 'FOR2022US1879', '6', NULL),
(NULL, '299', 'FOR2022US1880', '6', NULL),
(NULL, '299', 'FOR2022US1881', '6', NULL),

(NULL, '300', 'FOR2022US1882', '6', NULL),
(NULL, '300', 'FOR2022US1883', '6', NULL),
(NULL, '300', 'FOR2022US1884', '6', NULL),
(NULL, '300', 'FOR2022US1885', '6', NULL),
(NULL, '300', 'FOR2022US1886', '6', NULL),
(NULL, '300', 'FOR2022US1887', '6', NULL),
(NULL, '300', 'FOR2022US1888', '6', NULL),
(NULL, '300', 'FOR2022US1889', '6', NULL),
(NULL, '300', 'FOR2022US1890', '6', NULL),
(NULL, '300', 'FOR2022US1891', '6', NULL),

(NULL, '301', 'FOR2022US1892', '6', NULL),
(NULL, '301', 'FOR2022US1893', '6', NULL),
(NULL, '301', 'FOR2022US1894', '6', NULL),
(NULL, '301', 'FOR2022US1895', '6', NULL),
(NULL, '301', 'FOR2022US1896', '6', NULL),
(NULL, '301', 'FOR2022US1897', '6', NULL),
(NULL, '301', 'FOR2022US1898', '6', NULL),
(NULL, '301', 'FOR2022US1899', '6', NULL),
(NULL, '301', 'FOR2022US1900', '6', NULL),
(NULL, '301', 'FOR2022US1901', '6', NULL),

(NULL, '302', 'FOR2022US1902', '6', NULL),
(NULL, '302', 'FOR2022US1903', '6', NULL),
(NULL, '302', 'FOR2022US1904', '6', NULL),
(NULL, '302', 'FOR2022US1905', '6', NULL),
(NULL, '302', 'FOR2022US1906', '6', NULL),
(NULL, '302', 'FOR2022US1907', '6', NULL),
(NULL, '302', 'FOR2022US1908', '6', NULL),
(NULL, '302', 'FOR2022US1909', '6', NULL),
(NULL, '302', 'FOR2022US1910', '6', NULL),
(NULL, '302', 'FOR2022US1911', '6', NULL),

(NULL, '303', 'FOR2022US1912', '6', NULL),
(NULL, '303', 'FOR2022US1913', '6', NULL),
(NULL, '303', 'FOR2022US1914', '6', NULL),
(NULL, '303', 'FOR2022US1915', '6', NULL),
(NULL, '303', 'FOR2022US1916', '6', NULL),
(NULL, '303', 'FOR2022US1917', '6', NULL),
(NULL, '303', 'FOR2022US1918', '6', NULL),
(NULL, '303', 'FOR2022US1919', '6', NULL),
(NULL, '303', 'FOR2022US1920', '6', NULL),
(NULL, '303', 'FOR2022US1921', '6', NULL),

(NULL, '304', 'FOR2022US1922', '6', NULL),
(NULL, '304', 'FOR2022US1923', '6', NULL),
(NULL, '304', 'FOR2022US1924', '6', NULL),
(NULL, '304', 'FOR2022US1925', '6', NULL),
(NULL, '304', 'FOR2022US1926', '6', NULL),
(NULL, '304', 'FOR2022US1927', '6', NULL),
(NULL, '304', 'FOR2022US1928', '6', NULL),
(NULL, '304', 'FOR2022US1929', '6', NULL),
(NULL, '304', 'FOR2022US1930', '6', NULL),
(NULL, '304', 'FOR2022US1931', '6', NULL),

(NULL, '305', 'FOR2022US1932', '6', NULL),
(NULL, '305', 'FOR2022US1933', '6', NULL),
(NULL, '305', 'FOR2022US1934', '6', NULL),
(NULL, '305', 'FOR2022US1935', '6', NULL),
(NULL, '305', 'FOR2022US1936', '6', NULL),
(NULL, '305', 'FOR2022US1937', '6', NULL),
(NULL, '305', 'FOR2022US1938', '6', NULL),
(NULL, '305', 'FOR2022US1939', '6', NULL),
(NULL, '305', 'FOR2022US1940', '6', NULL),
(NULL, '305', 'FOR2022US1941', '6', NULL),

(NULL, '306', 'FOR2022US1942', '6', NULL),
(NULL, '306', 'FOR2022US1943', '6', NULL),
(NULL, '306', 'FOR2022US1944', '6', NULL),
(NULL, '306', 'FOR2022US1945', '6', NULL),
(NULL, '306', 'FOR2022US1946', '6', NULL),
(NULL, '306', 'FOR2022US1947', '6', NULL),
(NULL, '306', 'FOR2022US1948', '6', NULL),
(NULL, '306', 'FOR2022US1949', '6', NULL),
(NULL, '306', 'FOR2022US1950', '6', NULL),
(NULL, '306', 'FOR2022US1951', '6', NULL),

(NULL, '307', 'FOR2022US1952', '6', NULL),
(NULL, '307', 'FOR2022US1953', '6', NULL),
(NULL, '307', 'FOR2022US1954', '6', NULL),
(NULL, '307', 'FOR2022US1955', '6', NULL),
(NULL, '307', 'FOR2022US1956', '6', NULL),
(NULL, '307', 'FOR2022US1957', '6', NULL),
(NULL, '307', 'FOR2022US1958', '6', NULL),
(NULL, '307', 'FOR2022US1959', '6', NULL),
(NULL, '307', 'FOR2022US1960', '6', NULL),
(NULL, '307', 'FOR2022US1961', '6', NULL),

(NULL, '308', 'FOR2022US1962', '6', NULL),
(NULL, '308', 'FOR2022US1963', '6', NULL),
(NULL, '308', 'FOR2022US1964', '6', NULL),
(NULL, '308', 'FOR2022US1965', '6', NULL),
(NULL, '308', 'FOR2022US1966', '6', NULL),
(NULL, '308', 'FOR2022US1967', '6', NULL),
(NULL, '308', 'FOR2022US1968', '6', NULL),
(NULL, '308', 'FOR2022US1969', '6', NULL),
(NULL, '308', 'FOR2022US1970', '6', NULL),
(NULL, '308', 'FOR2022US1971', '6', NULL),

(NULL, '309', 'FOR2022US1972', '6', NULL),
(NULL, '309', 'FOR2022US1973', '6', NULL),
(NULL, '309', 'FOR2022US1974', '6', NULL),
(NULL, '309', 'FOR2022US1975', '6', NULL),
(NULL, '309', 'FOR2022US1976', '6', NULL),
(NULL, '309', 'FOR2022US1977', '6', NULL),
(NULL, '309', 'FOR2022US1978', '6', NULL),
(NULL, '309', 'FOR2022US1979', '6', NULL),
(NULL, '309', 'FOR2022US1980', '6', NULL),
(NULL, '309', 'FOR2022US1981', '6', NULL),

(NULL, '310', 'FOR2022US1982', '6', NULL),
(NULL, '310', 'FOR2022US1983', '6', NULL),
(NULL, '310', 'FOR2022US1984', '6', NULL),
(NULL, '310', 'FOR2022US1985', '6', NULL),
(NULL, '310', 'FOR2022US1986', '6', NULL),
(NULL, '310', 'FOR2022US1987', '6', NULL),
(NULL, '310', 'FOR2022US1988', '6', NULL),
(NULL, '310', 'FOR2022US1989', '6', NULL),
(NULL, '310', 'FOR2022US1990', '6', NULL),
(NULL, '310', 'FOR2022US1991', '6', NULL),

(NULL, '311', 'FOR2022US1992', '6', NULL),
(NULL, '311', 'FOR2022US1993', '6', NULL),
(NULL, '311', 'FOR2022US1994', '6', NULL),
(NULL, '311', 'FOR2022US1995', '6', NULL),
(NULL, '311', 'FOR2022US1996', '6', NULL),
(NULL, '311', 'FOR2022US1997', '6', NULL),
(NULL, '311', 'FOR2022US1998', '6', NULL),
(NULL, '311', 'FOR2022US1999', '6', NULL),
(NULL, '311', 'FOR2022US2000', '6', NULL),
(NULL, '311', 'FOR2022US2001', '6', NULL),

(NULL, '312', 'FOR2022US2002', '6', NULL),
(NULL, '312', 'FOR2022US2003', '6', NULL),
(NULL, '312', 'FOR2022US2004', '6', NULL),
(NULL, '312', 'FOR2022US2005', '6', NULL),
(NULL, '312', 'FOR2022US2006', '6', NULL),
(NULL, '312', 'FOR2022US2007', '6', NULL),
(NULL, '312', 'FOR2022US2008', '6', NULL),
(NULL, '312', 'FOR2022US2009', '6', NULL),
(NULL, '312', 'FOR2022US2010', '6', NULL),
(NULL, '312', 'FOR2022US2011', '6', NULL),

(NULL, '313', 'FOR2022US2012', '6', NULL),
(NULL, '313', 'FOR2022US2013', '6', NULL),
(NULL, '313', 'FOR2022US2014', '6', NULL),
(NULL, '313', 'FOR2022US2015', '6', NULL),
(NULL, '313', 'FOR2022US2016', '6', NULL),
(NULL, '313', 'FOR2022US2017', '6', NULL),
(NULL, '313', 'FOR2022US2018', '6', NULL),
(NULL, '313', 'FOR2022US2019', '6', NULL),
(NULL, '313', 'FOR2022US2020', '6', NULL),
(NULL, '313', 'FOR2022US2021', '6', NULL),

(NULL, '314', 'FOR2022US2022', '6', NULL),
(NULL, '314', 'FOR2022US2023', '6', NULL),
(NULL, '314', 'FOR2022US2024', '6', NULL),
(NULL, '314', 'FOR2022US2025', '6', NULL),
(NULL, '314', 'FOR2022US2026', '6', NULL),
(NULL, '314', 'FOR2022US2027', '6', NULL),
(NULL, '314', 'FOR2022US2028', '6', NULL),
(NULL, '314', 'FOR2022US2029', '6', NULL),
(NULL, '314', 'FOR2022US2030', '6', NULL),
(NULL, '314', 'FOR2022US2031', '6', NULL);


