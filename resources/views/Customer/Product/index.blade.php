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
                        {{-- Ảnh, Thông số, Thông tin --------------------- --}}
                        <div class="row">
                            {{-- Container Ảnh --}}
                            <div class="col-md-4 bg-light">
                                <div class="d-flex">
                                    {{-- Size, props container ảnh --}}
                                    <div style="flex-direction: column" class="d-flex width-100 height-auto flex-center">
                                        {{-- Div chứa ảnh và mũi tên --}}
                                        {{--  --}}
                                        {{-- <div id="carouselExampleIndicators"
                                            class="carousel slide carousel-main-container-custom " data-ride="carousel"
                                            data-pause="hover" data-interval="5000">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                    class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="d-flex">
                                                <div class="carousel-inner ">
                                                    <div class="carousel-item active hide-from-work">
                                                        <img class="d-block carousel-item-custom"
                                                            src="https://i.ytimg.com/vi/pQIbnkOuNoE/maxresdefault.jpg"
                                                            alt="First slide">
                                                    </div>
                                                    <div class="carousel-item hide-from-work">
                                                        <img class="d-block carousel-item-custom"
                                                            src="https://i.ytimg.com/vi/pQIbnkOuNoE/maxresdefault.jpg"
                                                            alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item hide-from-work">
                                                        <img class="d-block carousel-item-custom"
                                                            src="https://i.ytimg.com/vi/pQIbnkOuNoE/maxresdefault.jpg"
                                                            alt="Third slide">
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div> --}}
                                        {{--  --}}
                                        <div class="d-flex width-100 height-auto flex-center " style="display: none">
                                            <div>
                                                <div>
                                                    <i style="transform: scale(3, 8);padding-right: 0px"
                                                        class="fa fa-angle-left"></i>
                                                </div>
                                            </div>
                                            @php
                                                $tempImg;
                                            @endphp
                                            <div class="hide-from-work">
                                                @foreach ($productImage as $PI)
                                                    @if ($PI->maSP == $sanPham->maSP)
                                                        @php
                                                            $tempImg = $PI->anh;
                                                        @endphp
                                                        <img class="card-img-top"
                                                            style="height:400px ; width:400px ; "
                                                            src="{{ asset('assets/img/' . $PI->anh) }}" alt="..." />
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div>
                                                <div>
                                                    <i style="transform: scale(3, 8); padding-left: 0px"
                                                        class="fa fa-angle-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Hết - Div chứa ảnh và mũi tên --}}

                                        {{-- Div chứa ảnh khác --}}
                                        <div class="d-flex width-100 height-auto flex-center hide-from-work">
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
                                                @php
                                                    $countSpec = 0;
                                                @endphp
                                                @foreach ($productSpec as $PS)
                                                    @if ($countSpec == 9)
                                                    @break
                                                @endif
                                                @if ($sanPham->maSP == $PS->maSP)
                                                    @php
                                                        $countSpec++;
                                                    @endphp
                                                    <li>
                                                        <div class="d-flex">
                                                            <div
                                                                class="
                                                                text-bold text-dark">
                                                                {{ $PS->tenTS . ' : ' }}
                                                            </div>
                                                            <div class="text-danger">
                                                                {{ strlen($PS->giaTri) > 40 ? ': ' . substr($PS->giaTri, 0, 40) . '...' : ': ' . $PS->giaTri }}

                                                            </div>
                                                        </div>
                                                    </li>
                                                @endif
                                            @endforeach
                                            {{-- <li>CPU: AMD R7 5800H</li>
                                                <li>RAM: 8GB</li>
                                                <li>Ổ cứng: 512GB</li>
                                                <li>VGA: Onboard</li>
                                                <li>Màn hình: 60hz</li>
                                                <li>HĐH: Win11</li> --}}
                                        </ul>

                                        <a href="#productSpec" class="padding-left-20 link-red">Xem thêm</a>
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
                                                {{-- <div class="col-md-6">
                                                        <span class="background-light-gray opacity-85 padding-5">
                                                            Bảo hành 12 tháng
                                                        </span>
                                                    </div> --}}
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
                                            <div class="padding-top-20 padding-left-20">
                                                <h5 class="text-danger">Khuyến mãi đặc biệt</h5>
                                                <ul>
                                                    @foreach ($productPromotion as $PM)
                                                        @if ($sanPham->maSP == $PM->maSP)
                                                            @php
                                                                echo $PM->khuyenMai;
                                                            @endphp
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    {{-- Hết -Khuyến mãi --}}

                                    {{-- Thêm vào giỏ hàng --}}
                                    <div class="padding-top-5">
                                        <div
                                            class=" border-radius-25 padding-top-10 padding-left-10 padding-right-10">
                                            <div>

                                                @php
                                                    $find = '(';
                                                    $positionOfOpenP = strpos($sanPham->tenSP, $find);
                                                    $tenSP = strlen($sanPham->tenSP) > 40 ? substr($sanPham->tenSP, 0, $positionOfOpenP) . '' : $sanPham->tenSP;
                                                @endphp

                                                <form action="{{ route('cart.store') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="text-center">
                                                        Số lượng:
                                                        <br>
                                                        <button type="button"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                            class="btn btn-danger border-top-left-radius-25 border-bottom-left-radius-25">
                                                            <i class="fa fa-minus"></i>
                                                        </button>
                                                        <input type="number" class="width-10 text-center"
                                                            name="quantity" min="1" value="1">
                                                        <button type="button"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                            class="btn btn-danger border-top-right-radius-25 border-bottom-right-radius-25 ">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                    <input type="hidden" value="{{ $sanPham->maSP }}" name="id">
                                                    <input type="hidden" value="{{ $tenSP }}" name="name">
                                                    <input type="hidden" value="{{ $sanPham->giaSP }}"
                                                        name="price">
                                                    <input type="hidden" value="{{ $tempImg }}" name="image">
                                                    {{-- <input type="hidden" value="1" name="quantity"> --}}


                                                    <div class="padding-top-5">
                                                        <div class=" border-radius-25 ">
                                                            <button class="btn btn-danger width-100 padding-10">
                                                                <span class="text-bold text-large">Đặt mua
                                                                    ngay</span>
                                                                <br>
                                                                <span class="text-normal">Giao hàng nhanh
                                                                    chóng</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>

                                        </div>
                                    </div>
                                    {{-- Hết - Thêm vào giỏ hàng --}}

                                    {{-- Nút mua --}}
                                    <form action="{{ route('cart.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $sanPham->maSP }}" name="id">
                                        <input type="hidden" value="{{ $tenSP }}" name="name">
                                        <input type="hidden" value="{{ $sanPham->giaSP }}" name="price">
                                        <input type="hidden" value="{{ $tempImg }}" name="image">
                                        <div class="text-center padding-left-10 padding-right-10">
                                            Số lượng:
                                            <br>
                                            <button type="button"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                class="btn btn-primary border-top-left-radius-25 border-bottom-left-radius-25">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                            <input type="number" class="width-10 text-center" name="quantity"
                                                min="1" value="1">
                                            <button type="button"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                class="btn btn-primary border-top-right-radius-25 border-bottom-right-radius-25 ">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>

                                        <div class="padding-top-5 padding-left-10 padding-right-10">
                                            <div class=" border-radius-25 ">
                                                <button class="btn btn-primary width-100 padding-10">
                                                    <span class="text-bold text-large">Thêm vào giỏ hàng</span>
                                                    <br>
                                                    <span class="text-normal">Tiếp tục mua sắm</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                    {{-- Hết - Nút mua --}}
                                </div>
                            </div>

                        </div>
                        {{-- Hết - Ảnh, Thông số, Thông tin --}}

                        {{-- Thông tin ngoài -------------------- --}}
                        <div class="col-md-3">
                            {{-- Yên tâm khi mua hàng ---------------- --}}
                            <div class="padding-top-20">
                                <div class="border-gray border-radius-25">
                                    {{-- Title --}}
                                    <div
                                        class="padding-5 background-light-gray border-top-left-radius-15 border-top-right-radius-15 text-danger padding-left-20 padding-top-5 padding-bottom-5">
                                        <i class="fa fa-gift  text-danger"></i> Yên tâm mua hàng
                                    </div>
                                    {{-- Nội dung --}}
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

                            {{-- Giao hàng -------------------- --}}
                            <div class="padding-top-20">
                                <div class="border-gray border-radius-25">
                                    {{-- Title --}}
                                    <div
                                        class="padding-5 background-light-gray border-top-left-radius-15 border-top-right-radius-15 text-danger padding-left-20 padding-top-5 padding-bottom-5">
                                        <i class="fa fa-gift  text-danger"></i> Miễn phí giao hàng
                                    </div>
                                    {{-- Nội dung --}}
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
                    <div class="row">
                        {{-- Thông số full -------------------- --}}
                        <div class="col-md-12 " style="height: auto">
                            <div class="padding-10" id="productSpec">
                                <h3>Thông số sản phẩm</h3>
                                <table class="table-bordered width-100">
                                    @php
                                        $countSpec = 0;
                                    @endphp
                                    @foreach ($productSpec as $PS)
                                        @if ($sanPham->maSP == $PS->maSP)
                                            @php
                                                $countSpec++;
                                            @endphp
                                            <tr>
                                                <td
                                                    class=" padding-5
                                                                text-bold text-dark">
                                                    {{ $PS->tenTS . ' : ' }}
                                                </td>
                                                <td class="padding-5 text-danger">
                                                    {{ strlen($PS->giaTri) < 0 ? substr($PS->giaTri, 0, 40) . '...' : $PS->giaTri }}

                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    {{-- <li>CPU: AMD R7 5800H</li>
                                                <li>RAM: 8GB</li>
                                                <li>Ổ cứng: 512GB</li>
                                                <li>VGA: Onboard</li>
                                                <li>Màn hình: 60hz</li>
                                                <li>HĐH: Win11</li> --}}
                                </table>
                            </div>
                        </div>
                        {{-- Hết - Thông số full --}}
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>

</div>
<script>
    // Trượt xuống id mượt hơn khi ấn link # trong trang
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
<!-- End of Page Wrapper -->
@include('Customer.Layout.Common.bottom_script')
</body>

</html>
