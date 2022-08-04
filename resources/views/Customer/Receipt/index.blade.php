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
                    {{-- if (session()->has('khachHang')) { --}}
                    <form action="{{ route('receiptCustomer.store') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ Cart::getTotal() }}" name="tongTien">
                        <div class="grid width-100 text-dark">
                            <div class="row">
                                {{-- Form mua hàng --}}
                                {{-- Địa chỉ giao hàng --}}
                                <div class="col-md-8 ">
                                    {{-- Title --}}
                                    <div class="col-md-12">
                                        <h3>Địa chỉ giao hàng</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <h6>Khách hàng có thể điều chỉnh thông tin người nhận hàng và địa chỉ nhận hàng
                                            tại đây</h6>
                                    </div>
                                    {{-- Table thông tin khách hàng --}}
                                    <div class="col-md-12">
                                        <div class="col-md-12 alert">
                                            @foreach ($errors->all() as $error)
                                                <p class="text-danger">{{ $error }}</p>
                                            @endforeach
                                            <hr class="border-red">
                                        </div>
                                        {{-- Nếu là khách vãng lai - Không lấy được thông tin người dùng phù hợp với session --}}
                                        @if (count($listNguoiDung) == 0)
                                            <table class="border-gray width-100">
                                                <input type="hidden" value="1" name="isNotRegister">
                                                <tr>
                                                    <td
                                                        class="width-25 text-bold padding-left-20 padding-top-20 padding-bottom-20">
                                                        Họ tên người nhận
                                                    </td>
                                                    <td class="width-75 padding-right-20"><input name="receiptName"
                                                            class="width-100 border-gray" type="text">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        class="width-25 text-bold padding-left-20 padding-top-20 padding-bottom-20">
                                                        Số
                                                        điện thoại</td>
                                                    <td class="width-75 padding-right-20"><input name="receiptPhone"
                                                            class="width-100 border-gray" type="text">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        class="width-25 text-bold padding-left-20 padding-top-20 padding-bottom-20">
                                                        Email
                                                    </td>
                                                    <td class="width-75 padding-right-20"><input name="receiptEmail"
                                                            class="width-100 border-gray" type="text">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        class="width-25 text-bold padding-left-20 padding-top-20 padding-bottom-20">
                                                        Địa
                                                        chỉ nhận hàng</td>
                                                    <td class="width-75 padding-right-20"><input name="receiptAddress"
                                                            class="width-100 border-gray" type="text">
                                                    </td>
                                                </tr>
                                            </table>
                                        @else
                                            @foreach ($listNguoiDung as $ND)
                                                <table class="border-gray width-100">
                                                    <input type="hidden" value="0" name="isNotRegister">
                                                    <tr>
                                                        <td
                                                            class="width-25 text-bold padding-left-20 padding-top-20 padding-bottom-20">
                                                            Họ tên
                                                        </td>
                                                        <td class="width-75 padding-right-20"><input name="receiptName"
                                                                class="width-100 border-gray" type="text"
                                                                value="{{ $ND->tenND }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            class="width-25 text-bold padding-left-20 padding-top-20 padding-bottom-20">
                                                            Số
                                                            điện thoại</td>
                                                        <td class="width-75 padding-right-20"><input name="receiptPhone"
                                                                class="width-100 border-gray" type="text"
                                                                value="0987654321">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            class="width-25 text-bold padding-left-20 padding-top-20 padding-bottom-20">
                                                            Email
                                                        </td>
                                                        <td class="width-75 padding-right-20"><input name="receiptEmail"
                                                                class="width-100 border-gray" type="text"
                                                                value="{{ $ND->emailND }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            class="width-25 text-bold padding-left-20 padding-top-20 padding-bottom-20">
                                                            Địa
                                                            chỉ nhận hàng</td>
                                                        <td class="width-75 padding-right-20"><input
                                                                name="receiptAddress" class="width-100 border-gray"
                                                                type="text" value="{{ $ND->diaChiND }}">
                                                        </td>
                                                    </tr>
                                                </table>
                                            @endforeach
                                        @endif

                                    </div>
                                    {{-- Title hình thức thanh toán --}}
                                    <div class="col-md-12 padding-top-20">
                                        <h3>Chọn hình thức giao hàng</h3>
                                    </div>
                                    {{-- Hình thức thanh toán và giỏ hàng --}}
                                    <div class="col-md-12">
                                        <div class="padding-10">
                                            <input type="radio" name="paymentMethod" value="COD" checked> Thanh
                                            toán khi
                                            nhận hàng (
                                            tiền mặt/ quẹt thẻ ATM)
                                            <br>
                                            <input type="radio" name="paymentMethod" value="online"> Thanh toán bằng
                                            Momo
                                        </div>
                                        <div>
                                            <table class="w-full text-sm lg:text-base border-radius-10" cellspacing="0">
                                                {{-- Tiêu đề bảng --}}

                                                <tbody style="border: 1px solid lightgray">
                                                    @foreach ($cartItems as $item)
                                                        <tr>
                                                            <td class="hidden pb-4 md:table-cell" style="width: 15%">
                                                                <a href="{{ route('product.show', $item->id) }}">
                                                                    <img {{-- src="{{ $item->image }}" --}}
                                                                        style="height: 100%;width: 100%;"
                                                                        src="{{ asset('assets/img/' . $item->attributes->image) }}"
                                                                        class="w-20 rounded" alt="Thumbnail">
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('product.show', $item->id) }}">
                                                                    <p class="mb-2 md:ml-4">{{ $item->name }}</p>

                                                                </a>
                                                                <h5>Số lượng: {{ $item->quantity }}</h5>
                                                            </td>
                                                            <td class="hidden text-center md:table-cell padding-10"
                                                                style="padding-top: 0px">
                                                                <span class="">
                                                                    {{ number_format($item->price) }} VND
                                                                </span>
                                                            </td>

                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                {{-- Hết - Địa chỉ giao hàng --}}

                                {{-- Thông tin bên cánh phải --}}
                                <div class="col-md-4">
                                    {{-- Thành tiền --}}
                                    <div class="col-md-12">
                                        <h3>Thành tiền</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-flex text-bold"
                                            style="justify-content: end;font-size: 2.3em;color:red">
                                            {{ number_format(Cart::getTotal()) }} VND
                                        </div>
                                        <div class="d-flex  text-bold" style="justify-content: end;font-size: 1em;">
                                            ( Đã bao gồm VAT nếu có)
                                        </div>
                                    </div>
                                    {{-- Hết - Thành tiền --}}

                                    {{-- Yên tâm khi mua hàng --}}
                                    <div class="padding-top-20">
                                        <div class="border-gray ">
                                            <div
                                                class="padding-5 background-light-gray text-danger padding-left-20 padding-top-5 padding-bottom-5">
                                                <i class="fa fa-gift  text-danger"></i> Yên tâm mua hàng
                                            </div>
                                            <div class="padding-top-10 padding-bottom-10 padding-right-10">
                                                <ul>
                                                    <li>Uy tín 10 năm xây dựng và phát triển</li>
                                                    <li>Sản phẩm chính hãng 100%</li>
                                                    <li>Trả bảo hành tận nơi sử dụng</li>
                                                    <li>Bảo hành tận nơi cho doanh nghiệp</li>
                                                    <li>Ưu đãi riêng cho học sinh, sinh viên</li>
                                                    <li>Vệ sinh máy tính miễn phi trọn đời</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    {{-- Hết - Yên tâm khi mua hàng --}}

                                    {{-- Nút mua --}}
                                    <div class="padding-top-5">
                                        <div class=" border-radius-25 ">
                                            <button type="submit" name="COD" value="COD"
                                                class="btn btn-danger width-100 padding-10">
                                                <span class="text-bold text-large">Đặt mua ngay</span>
                                                <br>
                                                <span class="text-normal">Giao hàng nhanh chóng</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="padding-top-5">
                                        <div class=" border-radius-25 ">
                                            <button type="submit" name="momo" value="momo"
                                                class="btn btn-danger width-100 padding-10">
                                                <span class="text-bold text-large">Thanh toán bằng ví momo</span>
                                                <br>
                                                <span class="text-normal">Giao hàng nhanh chóng</span>
                                            </button>
                                        </div>
                                    </div>
                                    {{-- Hết - Nút mua --}}
                    </form>
                    {{-- Thanh toán momo --}}
                    {{-- <form style="margin-bottom: 0;" action="{{ route('onlinePayment.momo') }}" method="post"
                        enctype="application/x-www-form-urlencoded">
                        @csrf
                        <div class="padding-top-5">
                            <div class=" border-radius-25 ">
                                <input type="hidden" value="{{ Cart::getTotal() }}" name="tongTien">
                                <button class="btn btn-danger width-100 padding-10">
                                    <span class="text-bold text-large">Thanh toán bằng momo</span>
                                    <br>
                                    <span class="text-normal">Giao hàng nhanh chóng</span>
                                </button>
                            </div>
                        </div>
                    </form> --}}
                    {{-- Hết - Thanh toán momo --}}

                    {{-- Quay về trang chủ --}}
                    <a href="javascript:history.back()">
                        <div class="padding-top-5">
                            <div class=" border-radius-25 ">
                                <button class="btn btn-warning width-100 padding-10" type="button">
                                    <span class="text-bold text-large">Quay về giỏ hàng</span>
                                    <br>
                                    <span class="text-normal">Kiểm tra sản phẩm</span>
                                </button>
                            </div>
                        </div>
                    </a>
                    {{-- Hết - Quay về trang chủ --}}

                    {{-- Quay về giỏ hàng --}}
                    <a href="{{ route('product.index') }}">
                        <div class="padding-top-5">
                            <div class=" border-radius-25 ">
                                <button class="btn btn-primary width-100 padding-10" type="button">
                                    <span class="text-bold text-large">Quay về trang chủ</span>
                                    <br>
                                    <span class="text-normal">Chọn thêm sản phẩm</span>
                                </button>
                            </div>
                        </div>
                    </a>
                    {{-- Hết - Quay về giỏ hàng --}}
                </div>
                {{-- Hết - Thông tin bên cánh phải --}}
            </div>
        </div>
    </div>
    </div>
    <!-- /.container-fluid -->
    </div>
    </div>

    <!-- End of Page Wrapper -->
    @include('Customer.Layout.Common.bottom_script')
    <script>
        <?php if(session()->has('momoCancel')){ ?>
        alert('{{ session()->get('momoCancel') }}')
        <?php } ?>
    </script>
</body>

</html>
