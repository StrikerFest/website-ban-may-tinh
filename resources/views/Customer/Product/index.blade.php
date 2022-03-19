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
                <div class="container-fluid d-flex" {{-- style="position:relative;top: 70px" --}}
                    style="padding: 50px 50px 0px 50px;margin: 0px 50px 100px 50px">
                    <div class="grid">
                        {{-- Tiêu đề tên sản phẩm --}}
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 text-dark"
                                style="font-size: 1.4em;font-weight: bold">
                                {{ $sanPham->tenSP }}
                            </div>
                        </div>
                        {{-- Ảnh, Thông số, Thông tin --}}
                        <div class="row">
                            {{-- Container Ảnh --}}
                            <div class="col-md-4 bg-light">
                                <div class="d-flex">
                                    {{-- Size, props container ảnh --}}
                                    <div style="flex-direction: column" class="d-flex width-100 height-auto flex-center">
                                        {{-- Div chứa ảnh và mũi tên --}}
                                        <div class="d-flex width-100 height-auto flex-center">
                                            {{-- Mũi tên trái --}}
                                            <div>
                                                <div>
                                                    <i style="transform: scale(3, 8);padding-right: 0px"
                                                        class="fa fa-angle-left"></i>
                                                </div>
                                            </div>
                                            {{-- Ảnh --}}
                                            <div>
                                                @foreach ($productImage as $PI)
                                                    @if ($PI->maSP == $sanPham->maSP)
                                                        <img class="card-img-top"
                                                            style="height:400px ; width:400px ; "
                                                            src="{{ asset('assets/img/' . $PI->anh) }}" alt="..." />
                                                    @endif
                                                @endforeach
                                            </div>
                                            {{-- Mũi tên phải --}}
                                            <div>
                                                <div>
                                                    <i style="transform: scale(3, 8); padding-left: 0px"
                                                        class="fa fa-angle-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Hết - Div chứa ảnh và mũi tên --}}

                                        {{-- Div chứa ảnh khác --}}
                                        <div class="d-flex width-100 height-auto flex-center">
                                            <div class="grid">
                                                <div class="row">
                                                    @foreach ($productImage as $PI)
                                                        <div class="col-md-3">
                                                            @if ($PI->maSP == $sanPham->maSP)
                                                                <img class="card-img-top img-thumbnail-small"
                                                                    src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                    alt="..." />
                                                            @endif
                                                        </div>
                                                        <div class="col-md-3">
                                                            @if ($PI->maSP == $sanPham->maSP)
                                                                <img class="card-img-top img-thumbnail-small"
                                                                    src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                    alt="..." />
                                                            @endif
                                                        </div>
                                                        <div class="col-md-3">
                                                            @if ($PI->maSP == $sanPham->maSP)
                                                                <img class="card-img-top img-thumbnail-small"
                                                                    src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                    alt="..." />
                                                            @endif
                                                        </div>
                                                        <div class="col-md-3">
                                                            @if ($PI->maSP == $sanPham->maSP)
                                                                <img class="card-img-top img-thumbnail-small"
                                                                    src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                    alt="..." />
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Thông số --}}
                            <div class="col-md-5 ">
                                <div class="width-100 height-auto padding-10 ">
                                    {{-- Thông tin con --}}
                                    <div class="width-100 height-auto">
                                        Ma SP: LTAU660 | Danh gia: X X X X X (0) | Binh luan: 1 |
                                    </div>
                                    {{-- Thông số --}}
                                    <div>
                                        {{-- Title thông số sản phẩm --}}
                                        <div class="text-danger">
                                            <h5>Thông số sản phẩm</h5>
                                        </div>
                                        {{-- Hết - Title thông số sản phẩm --}}

                                        {{-- Thông số --}}
                                        <div>
                                            <ul>
                                                <li>CPU: AMD R7 5800H</li>
                                                <li>RAM: 8GB</li>
                                                <li>Ổ cứng: 512GB</li>
                                                <li>VGA: Onboard</li>
                                                <li>Màn hình: 60hz</li>
                                                <li>HĐH: Win11</li>
                                            </ul>

                                            <a href="#" class="padding-left-20 link-red">Xem thêm</a>
                                        </div>
                                        {{-- Hết - Thông số sản phẩm --}}

                                        {{-- Giá sản phẩm --}}
                                        <div class="padding-top-20">
                                            <div class="grid border-gray border-radius-10 padding-20">
                                                {{-- Dòng 1 --}}
                                                <div class="row">
                                                    {{-- Giá cuối cùng --}}
                                                    <div class="col-md-6 text-danger ">
                                                        <h3>{{ number_format($sanPham->giaSP) }} VNĐ</h3>
                                                    </div>
                                                </div>
                                                {{-- Dòng 2 --}}
                                                <div class="row">
                                                    {{-- Giá cũ --}}
                                                    <div class="col-md-5 text-decoration-line-through">
                                                        <h5>{{ number_format($sanPham->giaSP + $sanPham->giamGia) }}
                                                            VND</h5>
                                                    </div>
                                                    {{-- Giá tiết kiệm --}}
                                                    <div class="col-md-7 text-danger padding-bottom-10">
                                                        Tiết kiệm {{ number_format($sanPham->giamGia) }} VND
                                                    </div>
                                                </div>
                                                {{-- Dòng 3 --}}
                                                <div class="row">
                                                    {{-- Thẻ --}}
                                                    <div class="col-md-4">
                                                        <span class="background-light-gray opacity-85 padding-5">
                                                            Giá đã có VAT
                                                        </span>
                                                    </div>
                                                    {{-- Thẻ --}}
                                                    <div class="col-md-6">
                                                        <span class="background-light-gray opacity-85 padding-5">
                                                            Bảo hành 12 tháng
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Hết - Giá sản phẩm --}}

                                        {{-- Khuyến mãi --}}
                                        <div class="padding-top-20">
                                            <div class="border-gray border-radius-25">
                                                <div
                                                    class="padding-5 background-light-gray border-top-left-radius-15 border-top-right-radius-15 text-danger padding-left-20 padding-top-5 padding-bottom-5">
                                                    <i class="fa fa-gift  text-danger"></i> Quà
                                                    tặng và ưu
                                                    đãi kèm theo
                                                </div>
                                                <div class="padding-10">
                                                    <h5 class="text-danger">Bộ quà tặng trị giá 1,500,000 VND</h5>
                                                    <ul>
                                                        <li>Chuột không dây 1 triệu </li>
                                                        <li>Tấm lót chuột 200k</li>
                                                        <li>Bộ vệ sinh laptop 100k</li>
                                                        <li>Đế làm mát laptop 100k</li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                        {{-- Hết -Khuyến mãi --}}

                                        {{-- Thêm vào giỏ hàng --}}
                                        <div class="padding-top-5">
                                            <div class=" border-radius-25 padding-top-10 padding-left-10">
                                                <div>
                                                    <form>
                                                        Số lượng:
                                                        <button type="button"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                            class="btn btn-danger border-top-left-radius-25 border-bottom-left-radius-25">
                                                            <i class="fa fa-minus"></i>
                                                        </button>
                                                        <input type="number" class="width-10 text-center"
                                                            name="quantity" value="1">
                                                        <button type="button"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                            class="btn btn-danger border-top-right-radius-25 border-bottom-right-radius-25 ">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                        <button class="btn btn-primary"> <i
                                                                class="fa fa-shopping-cart"></i>
                                                            Thêm vào giỏ
                                                            hàng</button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                        {{-- Hết - Thêm vào giỏ hàng --}}

                                        {{-- Nút mua --}}
                                        <div class="padding-top-5">
                                            <div class=" border-radius-25 ">
                                                <button class="btn btn-danger width-100 padding-10">
                                                    <span class="text-bold text-large">Đặt mua ngay</span>
                                                    <br>
                                                    <span class="text-normal">Giao hàng nhanh chóng</span>
                                                </button>
                                            </div>
                                        </div>
                                        {{-- Hết - Nút mua --}}
                                    </div>
                                </div>
                            </div>
                            {{-- Hết - Thông số sản phẩm --}}

                            {{-- Thông tin ngoài --}}
                            <div class="col-md-3">
                                {{-- Yên tâm khi mua hàng --}}
                                <div class="padding-top-20">
                                    <div class="border-gray border-radius-25">
                                        <div
                                            class="padding-5 background-light-gray border-top-left-radius-15 border-top-right-radius-15 text-danger padding-left-20 padding-top-5 padding-bottom-5">
                                            <i class="fa fa-gift  text-danger"></i> Yên tâm mua hàng
                                        </div>
                                        <div class="padding-top-10 padding-bottom-10 padding-right-10">
                                            <ul>
                                                <li>Uy tín 10 năm xây dựng và phát triển</li>
                                                <li>Sản phẩm chính hãng 100%</li>
                                                <li>Trả bảo hành tận nơi sử d</li>
                                                <li>Bảo hành tận nơi cho doanh nghiệp</li>
                                                <li>Ưu đãi riêng cho học sinh, sinh viên</li>
                                                <li>Vệ sinh máy tính miễn phi trọn đời</li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                {{-- Hết - Yên tâm khi mua hàng --}}

                                {{-- Giao hàng --}}
                                <div class="padding-top-20">
                                    <div class="border-gray border-radius-25">
                                        <div
                                            class="padding-5 background-light-gray border-top-left-radius-15 border-top-right-radius-15 text-danger padding-left-20 padding-top-5 padding-bottom-5">
                                            <i class="fa fa-gift  text-danger"></i> Miễn phí giao hàng
                                        </div>
                                        <div class="padding-top-10 padding-bottom-10 padding-right-10">
                                            <ul>
                                                <li>Giao hàng siêu tốc khu vực nội thành</li>
                                                <li>Giao hàng toàn quốc miễn phí</li>
                                                <li>Giao hàng và thanh toán tại nhà ( COD )</li>
                                                <li>Đội ngũ tư vấn hỗ trợ chuyên nghiệp</li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                {{-- Hết - Giao hàng --}}
                            </div>
                            {{-- Hết - Thông tin ngoài --}}
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>

    </div>
    <!-- End of Page Wrapper -->
    @include('Customer.Layout.Common.bottom_script')
</body>

</html>
