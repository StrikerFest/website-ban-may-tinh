<html lang="en">

<head>
    @include('Customer.Layout.Common.meta')
</head>
@include('Customer.Layout.Common.header')

<body>
    <!-- Wrapper - Cả trang -->
    <div id="wrapper">


        <!-- Wrapper - Chỉ riêng phần nội dung - Không bao gồm navbar -->
        <div id="content-wrapper" class="d-flex flex-row">
            @include('Customer.Layout.Common.side_nav_menu')

            <!-- Content của trang -->
            <div class="container-fluid" {{-- style="position:relative;top: 70px" --}} style="padding-top: 60px">
                {{--  --}}
                <div class="row">
                    <div class="col-md-12  ">
                        <div class="col-md-6 alert ">
                            <h3 class="text-danger">
                                1. CHẤP THUẬN CÁC ĐIỀU KIỆN SỬ DỤNG
                            </h3>
                        </div>
                        <div class="col-md-12">
                            <p class="text-dark">Khi sử dụng Website của BKCOM (BKCOM), Quý khách đã mặc nhiên chấp
                                thuận các điều khoản và điều kiện sử dụng được quy định dưới đây. Để biết được các sửa
                                đổi mới nhất, Quý khách nên thường xuyên kiểm tra lại “Điều Kiện Sử Dụng”.

                                BKCOM có quyền thay đổi, điều chỉnh, thêm hay bớt các nội dung của “Điều Kiện Sử dụng”
                                tại bất kỳ thời điểm nà</p>
                        </div>
                    </div>
                </div>
                {{--  --}}
                {{--  --}}
                <div class="row">
                    <div class="col-md-12  ">
                        <div class="col-md-6 alert ">
                            <h3 class="text-danger">
                                2. TÍNH CHẤT CỦA THÔNG TIN HIỂN THỊ
                            </h3>
                        </div>
                        <div class="col-md-12">
                            <p class="text-dark">Các nội dung hiển thị trên Website nhằm mục đích cung cấp thông
                                tin về BKCOM, về thông tin sản phẩm và dịch vụ mà mà BKCOM đang cung cấp.

                                Các thông tin khác liên quan nhằm phục vụ nhu cầu tìm hiểu của khách hàng đều được ghi
                                rõ nguồn cung cấp.</p>
                        </div>
                    </div>
                </div>
                {{--  --}}
                {{--  --}}
                <div class="row">
                    <div class="col-md-12  ">
                        <div class="col-md-6 alert ">
                            <h3 class="text-danger">
                                3. LIÊN KẾT ĐẾN WEBSITE KHÁC
                            </h3>
                        </div>
                        <div class="col-md-12">
                            <p class="text-dark">Website cung cấp một số liên kết tới trang Web hoặc nguồn dữ liệu
                                khác. Quý khách tự chịu trách nhiệm khi sử dụng các liên kết này. BKCOM không tiến hành
                                thẩm định hay xác thực nội dung, tính chính xác, quan điểm thể hiện tại các trang Web và
                                nguồn dữ liệu liên kết này.

                                BKCOM từ chối bất cứ trách nhiệm pháp lý nào liên quan tới tính chính xác, nội dung thể
                                hiện, mức độ an toàn và việc cho hiển thị hay che đi các thông tin trên các trang Web và
                                nguồn dữ liệu nói trên.

                            </p>
                        </div>
                    </div>
                </div>
                {{--  --}}
                {{--  --}}
                <div class="row">
                    <div class="col-md-12  ">
                        <div class="col-md-6 alert ">
                            <h3 class="text-danger">
                                4. LIÊN KẾT TỪ WEBSITE KHÁC
                            </h3>
                        </div>
                        <div class="col-md-12">
                            <p class="text-dark">BKCOM không cho phép bất kỳ nhà cung cấp dịch vụ internet nào được
                                phép “đặt toàn bộ” hay “nhúng” bất kỳ thành tố nào của Website này sang một trang khác
                                hoặc sử dụng các kỹ thuật làm thay đổi giao diện / hiển thị mặc định của Website mà chưa
                                có sự đồng ý của BKCOM.</p>
                        </div>
                    </div>
                </div>
                {{--  --}}
                {{--  --}}
                <div class="row">
                    <div class="col-md-12  ">
                        <div class="col-md-6 alert ">
                            <h3 class="text-danger">
                                5. MIỄN TRỪ TRÁCH NHIỆM
                            </h3>
                        </div>
                        <div class="col-md-12">
                            <p class="text-dark">Khi truy cập vào website này, quý khách mặc nhiên đồng ý rằng
                                BKCOM, các nhà cung cấp khác cùng với đối tác liên kết, nhân viên của họ không chịu bất
                                cứ trách nhiệm nào liên quan đến thương tật, mất mát, khiếu kiện, thiệt hại trực tiếp
                                hoặc gián tiếp do không lường trước hoặc do hậu quả để lại dưới bất cứ hình thức nào
                                phát sinh từ việc:

                                BKCOM từ chối trách nhiệm hay đưa ra đảm bảo rằng website sẽ không có lỗi vận hành, an
                                toàn, không bị gián đoạn hay tính chính xác, đầy đủ và đúng hạn của các thông tin hiển
                                thị.

                                Thông tin hiển thị tại website này không đi kèm bất kỳ đảm bảo hay cam kết trách nhiệm
                                từ phía BKCOM về sự phù hợp của sản phẩm, dịch vụ mà người mua đã lựa chọn:

                                (1) Sử dụng các thông tin trên website này;

                                (2) các truy cập kết nối từ website này;

                                (3) Đăng ký thành viên, đăng ký nhận thư điện tử hay tham gia vào chương trình khách
                                hàng thường xuyên của BKCOM

                                Các điều kiện và hạn chế nêu trên chỉ có hiệu lực trong khuôn khổ pháp luật hiện hành.
                            </p>
                        </div>
                    </div>
                </div>
                {{--  --}}
                {{--  --}}
                <div class="row">
                    <div class="col-md-12  ">
                        <div class="col-md-6 alert ">
                            <h3 class="text-danger">
                                1. CHẤP THUẬN CÁC ĐIỀU KIỆN SỬ DỤNG
                            </h3>
                        </div>
                        <div class="col-md-12">
                            <p class="text-dark">Khi sử dụng Website của BKCOM (BKCOM), Quý khách đã mặc nhiên chấp
                                thuận các điều khoản và điều kiện sử dụng được quy định dưới đây. Để biết được các sửa
                                đổi mới nhất, Quý khách nên thường xuyên kiểm tra lại “Điều Kiện Sử Dụng”.

                                BKCOM có quyền thay đổi, điều chỉnh, thêm hay bớt các nội dung của “Điều Kiện Sử dụng”
                                tại bất kỳ thời điểm nà</p>
                        </div>
                    </div>
                </div>
                {{--  --}}
                {{--  --}}
                <div class="row">
                    <div class="col-md-12  ">
                        <div class="col-md-6 alert ">
                            <h3 class="text-danger">
                                6. QUYỀN SỞ HỮU TRÍ TUỆ
                            </h3>
                        </div>
                        <div class="col-md-12">
                            <p class="text-dark">Website này và mọi nội dung xếp đặt, hiển thị đều thuộc sở hữu và
                                là tài sản độc quyền khai thác của BKCOM và các nhà cung cấp có liên quan khác.

                                Mọi sử dụng, trích dẫn phải không gây thiệt hại cho BKCOM và đều phải tuân thủ các điều
                                kiện sau:

                                (1) Chỉ sử dụng cho mục đích cá nhân, phi thương mại.

                                (2) các sao chép hoặc trích dẫn đều phải giữ nguyên dấu hiệu bản quyền hoặc các yết thị
                                về quyền sở hữu trí tuệ như đã thể hiện trong phiên bản gốc.

                                Tất cả các nội dung được cung cấp tại Website này không được phép nhân bản, hiển thị,
                                công bố, phổ biến, đưa tin tức hay lưu hành cho bất cứ ai, dưới bất kỳ hình thức nào, kể
                                cả trên các Website độc lập khác mà không được sự chấp thuận của BKCOM.</p>
                        </div>
                    </div>
                </div>
                {{--  --}}

            </div>
            <!-- /.container-fluid -->
        </div>

    </div>
    <!-- End of Page Wrapper -->
    @include('Customer.Layout.Common.bottom_script')
    <script>
    </script>
</body>

</html>
