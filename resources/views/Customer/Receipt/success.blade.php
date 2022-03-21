<html lang="en">

<head>
    @include('Customer.Layout.Common.meta')
</head>
@include('Customer.Layout.Common.header')

<body>
    <div id="collapsePoint">
        <!-- Wrapper - Cả trang -->
        <div id="wrapper">

            <!-- Wrapper - Chỉ riêng phần nội dung - Không bao gồm navbar -->
            <div id="content-wrapper" class="d-flex flex-row">
                {{-- @include('Customer.Layout.Common.side_nav_menu') --}}

                <!-- Content của trang -->
                <div class="container-fluid d-flex " {{-- style="position:relative;top: 70px" --}}
                    style="padding: 50px 50px 0px 50px;margin: 0px 50px 100px 50px">
                    <div class="grid">
                        <div class="row">
                            {{-- Trống --}}
                            <div class="col-md-4">

                            </div>
                            {{-- Hết - Trống --}}

                            {{-- Thông tin --}}
                            <div class="col-md-8">
                                <h3>Cảm ơn bạn đã mua hàng tại BKCOM</h3>
                                <p>Mã số đơn hàng của bạn:</p>
                                <div class="padding-bottom-20">
                                    <button class="btn btn-danger" type="button">
                                        #03391
                                    </button>
                                </div>
                                <p>Đơn hàng đã được tiếp nhận. Thông tin chi tiết đơn hàng của bạn đã được gửi về địa
                                    chỉ
                                    email của bạn. Nếu không tìm thấy vui lòng kiểm tra hộp thư Spam.</p>
                                <p>Nếu quý khách có yêu cầu hay thắc mắc, vui lòng liên hệ tại
                                    <a href="#">Facebook BKCOM</a> hoặc gọi hotline 1900 1009
                                </p>

                                <table class="border-gray width-100">
                                    <tr>
                                        <td class="width-25 text-bold padding-left-20 padding-top-20 padding-bottom-20">
                                            Họ tên
                                        </td>
                                        <td class="width-75 padding-right-20">Nguyễn Văn A
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="width-25 text-bold padding-left-20 padding-top-20 padding-bottom-20">
                                            Số
                                            điện thoại</td>
                                        <td class="width-75 padding-right-20">09748381931
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="width-25 text-bold padding-left-20 padding-top-20 padding-bottom-20">
                                            Email
                                        </td>
                                        <td class="width-75 padding-right-20">NVA@mail.com
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="width-25 text-bold padding-left-20 padding-top-20 padding-bottom-20">
                                            Địa
                                            chỉ</td>
                                        <td class="width-75 padding-right-20">Viet Nam</td>
                                    </tr>
                                </table>

                                <div class="center-custom padding-top-20 width-100">
                                    <div class="width-75">
                                        <a href="{{ route('product.index') }}">
                                            <button class="btn btn-danger padding-top-20 padding-bottom-10 width-100 "
                                                type="button">

                                                <h5><i class="fa fa-shopping-cart"></i> Tiếp tục mua hàng</h5>
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                            {{-- Hết - Thông tin --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>

    <!-- End of Page Wrapper -->
    @include('Customer.Layout.Common.bottom_script')
</body>

</html>
