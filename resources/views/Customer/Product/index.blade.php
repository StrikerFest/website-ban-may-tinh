<html lang="en">

<head>
    @include('Customer.Layout.Common.meta')
</head>
@include('Customer.Layout.Common.header')

<body>
    <div>
        <!-- Wrapper - Cả trang -->
        <div id="wrapper">

            <!-- Wrapper - Chỉ riêng phần nội dung - Không bao gồm navbar -->
            <div id="content-wrapper" class="d-flex flex-row text-dark">
                {{-- @include('Customer.Layout.Common.side_nav_menu') --}}

                <!-- Content của trang -->
                <div class="container-fluid d-flex pt-0" {{-- style="position:relative;top: 70px" --}}
                    style="padding: 50px 50px 0px 50px;margin: 0px 50px 100px 50px">
                    <div class="grid">
                        <div class="row">
                            <div class="col-12 bg-" style="height: 50px">

                            </div>
                        </div>
                        {{-- Tiêu đề tên sản phẩm --}}
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 text-dark pt-1"
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
                                    <div style="flex-direction: column"
                                        class="d-flex width-100 height-auto flex-center">
                                        {{-- Div chứa ảnh và mũi tên --}}
                                        {{--  --}}
                                        <div id="carouselExampleIndicators" style="scroll-margin-block-start: 17rem"
                                            class="carousel slide carousel-main-container-customx " data-ride="carousel"
                                            data-pause="hover" data-interval="5000">
                                            {{-- copy1 --}}
                                            <div class="d-flex">
                                                <div class="carousel-inner ">
                                                    {{-- Thay --}}
                                                    @php
                                                        $tempImg = '';
                                                    @endphp
                                                    @foreach ($productImageGetFirst as $PI)
                                                        <div class="carousel-item active hide-from-work bg-secondary ">
                                                            @if ($PI->maSP == $sanPham->maSP)
                                                                @php
                                                                    $tempImg = $PI->anh;
                                                                @endphp
                                                                <img class="card-img-top1 center-custom"
                                                                    style="height: 100%;width:75%"
                                                                    src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                    alt="..." />
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                    @if ($tempImg == '')
                                                        @php
                                                            $tempImg = 'STOCK.jpg';
                                                        @endphp
                                                        <img class="card-img-top "
                                                            src="{{ asset('assets/img/' . $tempImg) }}"
                                                            alt="..." />
                                                    @endif
                                                    <div class="row bg-secondary">

                                                        @foreach ($productImageSkipFirst as $PI)
                                                            <div class="carousel-item hide-from-work ">
                                                                @if ($PI->maSP == $sanPham->maSP)
                                                                    @php
                                                                        $tempImg = $PI->anh;
                                                                    @endphp
                                                                    <img class="card-img-top "
                                                                        src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                        alt="..." />
                                                                @endif
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    {{--  --}}
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
                                        </div>
                                        {{-- Div chứa ảnh khác --}}
                                        <div class="d-flex width-100 height-auto flex-center hide-from-work">
                                            <div class="grid container">
                                                <div class="row">
                                                    @foreach ($productImageGetFirst as $PI)
                                                        @if ($PI->maSP == $sanPham->maSP)
                                                            <div class="col-md-3 active" style="cursor: pointer"
                                                            href="#carouselExampleIndicators"
                                                                data-slide-to="0">
                                                                <img class="card-img-top img-thumbnail-small"
                                                                    src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                    alt="..." />
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                    @php
                                                        $count = 1;
                                                    @endphp
                                                    @foreach ($productImageSkipFirst as $PI)
                                                        @if ($PI->maSP == $sanPham->maSP)
                                                            <div class="col-md-3" style="cursor: pointer"
                                                            href="#carouselExampleIndicators"
                                                                data-slide-to="{{ $count }}">
                                                                <img class="card-img-top img-thumbnail-small"
                                                                    src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                    alt="..." />
                                                            </div>
                                                            @php
                                                                $count += 1;
                                                            @endphp
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        {{-- copy2 --}}
                                    </div>
                                </div>
                            </div>

                            {{-- Thông số --}}
                            <div class="col-md-5 ">
                                <div class="width-100 height-auto padding-10 ">
                                    {{-- Thông tin con --}}
                                    <div class="width-100 height-auto">
                                        Mã SP: {{ $sanPham->maSP }}
                                    </div>
                                    {{-- Thông số --}}
                                    <div>
                                        {{-- Title thông số sản phẩm --}}
                                        <div class="text-danger text-bold">
                                            <h5>Thông số sản phẩm</h5>
                                        </div>
                                        {{-- Hết - Title thông số sản phẩm --}}
                                        {{-- Thông số --}}
                                        <div>
                                            <ul style="padding: 5px">
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
                                                            <div class="text-dark">
                                                                {{ $PS->tenTS . ' : ' }}
                                                            </div>
                                                            <div class="text-danger">
                                                                {{ strlen($PS->giaTri) > 30 ? ': ' . substr($PS->giaTri, 0, 30) . '...' : ': ' . $PS->giaTri }}

                                                            </div>
                                                        </div>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        <a href="#productSpec" class="padding-left-20 link-red">Xem thêm</a>
                                    </div>
                                    {{-- Hết - Thông số sản phẩm --}}

                                    {{-- Giá sản phẩm --}}
                                    <div class="padding-top-20" id="collapsePoint">
                                        <div class="grid border-gray border-radius-10 padding-20">
                                            {{-- Dòng 1 --}}
                                            <div class="row w-100">

                                                {{-- Giá cuối cùng --}}
                                                <div class="col-md-12 text-danger ">
                                                    <h5>{{ number_format($sanPham->giaSP - $reducedMoneyFlat - ($sanPham->giaSP * $reducedMoneyPercent) / 100) }}
                                                        VNĐ</h5>
                                                </div>
                                                {{-- Dòng 2 --}}
                                                {{-- Giá cũ --}}
                                                <div class="col-md-6  text-decoration-line-through">
                                                    <h6>{{ number_format($sanPham->giaSP) }}
                                                        VND</h6>
                                                </div>
                                                {{-- Giá tiết kiệm --}}
                                                <div class="col-md-6 text-danger padding-bottom-10">
                                                    Tiết kiệm
                                                    {{ number_format($reducedMoneyFlat + ($sanPham->giaSP * $reducedMoneyPercent) / 100) }}
                                                    VND
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
                                                @if (count($productPromotion) !== 0)
                                                    <h5 class="text-danger">Khuyến mãi đặc biệt</h5>
                                                    <ul>
                                                        @foreach ($productPromotion as $PM)
                                                            @php
                                                                if($PM->kichHoat == 1)
                                                                echo '+ ' . $PM->tenVoucher . '<br>';
                                                            @endphp
                                                        @endforeach
                                                    </ul>
                                                @else
                                                    <h5 class="text-danger">Khuyến mãi cho sản phẩm hiện tại đã hết
                                                    </h5>
                                                @endif

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

                                                @if ($sanPham->soLuong <= 0)
                                                    <div class="padding-top-5">
                                                        <div class=" border-radius-25 ">
                                                            <button class="btn btn-danger width-100 padding-10">
                                                                <span class="text-bold text-large">Hàng đã
                                                                    hết</span>
                                                                <br>
                                                                <span class="text-normal">Mời quý khách xem các
                                                                    món hàng khác</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                @elseif($sanPham->soLuong > 0 && $sanPham->soLuong <= 5)
                                                    <div class="padding-top-5">
                                                        <div class=" border-radius-25 ">
                                                            <button class="btn btn-danger width-100 padding-10">
                                                                <span class="text-bold text-large">Số lượng có
                                                                    hạn</span>
                                                                <br>
                                                                <span class="text-normal">Liên hệ ngay với chúng
                                                                    tôi tại 1800 2828</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                @else
                                                    <form action="{{ route('cart.go') }}" method="POST"
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
                                                        <input type="hidden" value="{{ $sanPham->maSP }}"
                                                            name="id">
                                                        <input type="hidden" value="{{ $tenSP }}"
                                                            name="name">
                                                        <input type="hidden" value="{{ $sanPham->giaSP }}"
                                                            name="price">
                                                        <input type="hidden" value="{{ $tempImg }}"
                                                            name="image">
                                                        <input type="hidden" value="{{ $reducedMoneyFlat }}"
                                                            name="reduceFlat">
                                                        <input type="hidden" value="{{ $reducedMoneyPercent }}"
                                                            name="reducePercent">
                                                        @if ($reducedMoneyPercent - $sanPham->giamGia - $reducedMoneyFlat == 0)
                                                            <input type="hidden" value="1"
                                                                name="noVoucher">
                                                        @endif
                                                        {{-- <input type="hidden" value="1" name="quantity"> --}}


                                                        <div class="padding-top-5">
                                                            <div class=" border-radius-25 ">
                                                                <button
                                                                    class="btn btn-danger width-100 padding-10">
                                                                    <span class="text-bold text-large">Đặt mua
                                                                        ngay</span>
                                                                    <br>
                                                                    <span class="text-normal">Giao hàng nhanh
                                                                        chóng</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                @endif

                                            </div>

                                        </div>
                                    </div>
                                    {{-- Hết - Thêm vào giỏ hàng --}}

                                    @if ($sanPham->soLuong <= 5)
                                    @else
                                        {{-- Nút mua --}}
                                        <form action="{{ route('cart.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="{{ $sanPham->maSP }}" name="id">
                                            <input type="hidden" value="{{ $tenSP }}" name="name">
                                            <input type="hidden" value="{{ $sanPham->giaSP }}" name="price">
                                            <input type="hidden" value="{{ $tempImg }}" name="image">
                                            <input type="hidden" value="{{ $reducedMoneyFlat }}"
                                                name="reduceFlat">
                                            <input type="hidden" value="{{ $reducedMoneyPercent }}"
                                                name="reducePercent">
                                            @if ($reducedMoneyPercent - $sanPham->giamGia - $reducedMoneyFlat == 0)
                                                <input type="hidden" value="1" name="noVoucher">
                                            @endif
                                            <div class="text-center padding-left-10 padding-right-10">
                                                Số lượng:
                                                <br>
                                                <button type="button"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                    class="btn btn-primary border-top-left-radius-25 border-bottom-left-radius-25">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input type="number" class="width-10 text-center"
                                                    name="quantity" min="1" value="1">
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
                                    @endif
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
                                            <li>Trả bảo hành tận nơi sử dụng</li>
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
                                            <li>Giao hàng và thanh toán tại nhà</li>
                                            <li>Đội ngũ tư vấn hỗ trợ chuyên nghiệp</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            {{-- Hết - Giao hàng --}}

                        </div>
                        {{-- Hết - Thông tin ngoài --}}
                    </div>
                    <div class="row" style="height: 30%">
                        {{-- Bai viet --}}
                        <div class="col-8">
                            <h1>Mô tả sản phẩm</h1>
                            @foreach ($productReview as $PR)
                                @foreach ($productReviewDetail as $PRD)
                                    @if ($PR->maBV == $PRD->maBV)
                                        @if ($PRD->tieuDe !== null)
                                            <h4 style="color: black">{{ $PRD->tieuDe }}</h4>
                                        @endif
                                        @if ($PRD->anh !== null)
                                            <img class="card-img-top1 center-custom" style="height: 20%;"
                                                src="{{ asset('assets/img/' . $PRD->anh) }}" alt="..." />
                                        @endif
                                        @if ($PRD->noiDung !== null)
                                            @if ($PRD->tieuDe !== 'Video')
                                                <p>{{ $PRD->noiDung }}</p>
                                            @else
                                                <iframe width="100%" height="315" src="{{ $PRD->noiDung }}"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                            @endif
                                        @endif
                                    @endif
                                @endforeach
                            @endforeach
                        </div>

                        {{-- Thông số full -------------------- --}}
                        <div class="col-md-4 ">
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
                    <div class="row">
                        {{-- Hàng tương tự -------------------- --}}
                        <div class="col-md-12 " style="height: auto;">
                            <div class="padding-10">
                                {{-- Danh mục - PC, Laptop phiên bản mới nhất --}}
                                <div class="card shadow mb-4 background-none">
                                    {{-- Label danh mục - Thay class bằng class khác --}}
                                    <div class="card-header py-3 black-glass ">
                                        <h4 class="m-0 font-weight-bold text-light text-left carousel-promo-item-label "
                                            style="padding-left: 4%;">
                                            Sản phẩm tương tự</h4>
                                    </div>
                                    {{-- Content danh mục - Thay class bằng class khác --}}
                                    <div class="card-body center-custom">
                                        <div class="table-responsive d-flex">

                                            <div style="overflow: hidden">
                                                <div id="carouselExampleIndicators2"
                                                    class="carousel slide carousel-container-custom"
                                                    data-ride="carousel" data-pause="hover" data-interval="5000"
                                                    style="width:100%;scroll-margin-block-end: 7rem">
                                                    {{-- Hiển thị vị trí slide --}}
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators2"
                                                            class="bg-danger" data-slide-to="0" class="active">
                                                        </li>
                                                        <li data-target="#carouselExampleIndicators2"
                                                            class="bg-danger" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators2"
                                                            class="bg-danger" data-slide-to="2"></li>
                                                    </ol>
                                                    {{-- Kết thúc - Hiển thị vị trí slide --}}
                                                    {{-- Vật phẩm bên trong slide --}}
                                                    <div class="carousel-inner">
                                                        @if (sizeof($computerNew1) == 4)
                                                            <div class="carousel-item active" style="width:100%">
                                                                <div class="row">
                                                                    @foreach ($computerNew1 as $CN)
                                                                        @foreach ($productPromotion as $PP)

                                                                        @endforeach
                                                                        {{-- Vật phẩm 4 --}}
                                                                        <div class="carousel-promo-item col-md-3 "
                                                                            onmouseover="" {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}}
                                                                            style=" padding: 10px">
                                                                            <div class="col mb-5">
                                                                                <div class="card product-item"
                                                                                    style="height: 450px;width:260px">
                                                                                    <!-- Thẻ sale trên đầu -->
                                                                                    <div class="badge bg-dark text-white position-absolute"
                                                                                        style="top: 0.5rem; right: 0.5rem">
                                                                                        Sale!
                                                                                    </div>
                                                                                    {{-- Overlay hiển thị chi tiết sau khi hover --}}
                                                                                    <div class="product-overlay">
                                                                                        <div class="text-center">
                                                                                            <!-- Tên sản phẩm trong overlay-->
                                                                                            <div
                                                                                                class="product-overlay-product-name">
                                                                                                <h5 class="fw-bolder"
                                                                                                    style="font-size:0.9em">
                                                                                                    @php
                                                                                                        $find = '(';
                                                                                                        $positionOfOpenP = strpos($CN->tenSP, $find);
                                                                                                        $tenSP = strlen($CN->tenSP) > 40 ? substr($CN->tenSP, 0, $positionOfOpenP) . '' : $CN->tenSP;
                                                                                                    @endphp
                                                                                                    {{ $tenSP }}
                                                                                                </h5>
                                                                                            </div>
                                                                                            <!-- Giá sản phẩm trong overlay-->
                                                                                            <div
                                                                                                class="product-overlay-product-price">
                                                                                                <span
                                                                                                    class="">{{ number_format($CN->giaSP) }}
                                                                                                    VND</span>
                                                                                            </div>
                                                                                            {{-- Bảo hành sản phẩm trong overlay --}}
                                                                                            <div
                                                                                                class="product-overlay-product-warranty">
                                                                                                12 tháng
                                                                                            </div>
                                                                                            {{-- Thông số sản phẩm trong overlay --}}
                                                                                            <div
                                                                                                class="product-overlay-product-spec text-left">
                                                                                                Core: I9-10925
                                                                                                4.25Ghz-5.1Ghz<br>
                                                                                                Ram: 16GB<br>
                                                                                                SSD: 512GB<br>
                                                                                                PSU: 550W<br>
                                                                                                Card: RTX3080<br>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    {{-- Hết overlay chi tiết --}}
                                                                                    @php
                                                                                        $tempImg = 'STOCK.jpg';
                                                                                        $count = 0;
                                                                                        // dd($tempImg);
                                                                                    @endphp
                                                                                    <!-- Ảnh sản phẩm-->
                                                                                    @foreach ($productImage as $PI)
                                                                                        @if ($PI->maSP == $CN->maSP)
                                                                                            @if ($count == 0)
                                                                                                @php
                                                                                                    $tempImg = $PI->anh;
                                                                                                @endphp
                                                                                                <a
                                                                                                    href="{{ route('product.show', $CN->maSP) }}">
                                                                                                    <img class="card-img-top "
                                                                                                        style="height:240px ; width:260px ; border: 1px solid lightgray"
                                                                                                        src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                                                        id="{{ $CN->maSP }}"
                                                                                                        alt="..." />
                                                                                                </a>
                                                                                                @php
                                                                                                    $count = 1;
                                                                                                @endphp
                                                                                            @endif
                                                                                        @endif
                                                                                    @endforeach
                                                                                    @if ($tempImg == 'STOCK.jpg')
                                                                                        <img class="card-img-top "
                                                                                            src="{{ asset('assets/img/' . $tempImg) }}"
                                                                                            alt="..." />
                                                                                    @endif
                                                                                    <!-- Thông tin sản phẩm-->
                                                                                    <div class="card-body p-4 bg- text-light"
                                                                                        style="background-color: black">
                                                                                        <div class="text-center">
                                                                                            <!-- Tên sản phẩm-->
                                                                                            <h5 class="fw-bolder"
                                                                                                style="font-size:0.9em">
                                                                                                @php
                                                                                                    $find = '(';
                                                                                                    $positionOfOpenP = strpos($CN->tenSP, $find);
                                                                                                    $tenSP = strlen($CN->tenSP) > 40 ? substr($CN->tenSP, 0, $positionOfOpenP) . '' : $CN->tenSP;
                                                                                                @endphp
                                                                                                <a class="link-white"
                                                                                                    href="{{ route('product.show', $CN->maSP) }}">{{ $tenSP }}</a>

                                                                                            </h5>

                                                                                            <!-- Giá sản phẩm -->
                                                                                            <span
                                                                                                class="">{{ number_format($CN->giaSP) }}
                                                                                                VND</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- Hành động của sản phẩm-->
                                                                                    <div class="card-footer border-top-0 bg-dar d-flex"
                                                                                        style="width: 100%;background-color: black;">

                                                                                        @if ($CN->soLuong <= 0)
                                                                                            <button
                                                                                                class="btn btn-outline-danger text-left"
                                                                                                href="{{ route('product.show', $CN->maSP) }}"
                                                                                                style="background-color: navy;padding-bottom: 10px;height: 75%">
                                                                                                Hết hàng
                                                                                            @elseif($CN->soLuong > 0 && $CN->soLuong <= 5)
                                                                                                <button
                                                                                                    class="btn btn-outline-success text-left"
                                                                                                    href="{{ route('product.show', $CN->maSP) }}"
                                                                                                    style="background-color: navy;padding-bottom: 10px;height: 75%">
                                                                                                    Liên hệ ngay
                                                                                                @else
                                                                                                    <button
                                                                                                        class="btn btn-outline-success text-left"
                                                                                                        href="{{ route('product.show', $CN->maSP) }}"
                                                                                                        style="background-color: ;padding-top: 3px;height:65%">
                                                                                                        Còn hàng
                                                                                        @endif
                                                                                        </button>
                                                                                        @if ($CN->soLuong <= 0)
                                                                                        @elseif($CN->soLuong > 0 && $CN->soLuong <= 5)
                                                                                        @else
                                                                                            <form
                                                                                                action="{{ route('cart.store') }}"
                                                                                                method="POST"
                                                                                                enctype="multipart/form-data">
                                                                                                @csrf
                                                                                                <input
                                                                                                    type="hidden"
                                                                                                    value="{{ $CN->maSP }}"
                                                                                                    name="id">
                                                                                                <input
                                                                                                    type="hidden"
                                                                                                    value="{{ $tenSP }}"
                                                                                                    name="name">
                                                                                                <input
                                                                                                    type="hidden"
                                                                                                    value="{{ $CN->giaSP }}"
                                                                                                    name="price">
                                                                                                <input
                                                                                                    type="hidden"
                                                                                                    value="{{ $tempImg }}"
                                                                                                    name="image">
                                                                                                <input
                                                                                                    type="hidden"
                                                                                                    value="1"
                                                                                                    name="quantity">
                                                                                                {{-- <button
                                                                                                    class="btn btn-outline-light  text-right"
                                                                                                    style="background-color: crimson"><i
                                                                                                        class="fa fa-shopping-cart"></i></button> --}}
                                                                                            </form>
                                                                                        @endif
                                                                                    </div>


                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    @endforeach

                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if (sizeof($computerNew2) == 4)
                                                            <div class="carousel-item " style="width:100%">
                                                                <div class="row">
                                                                    @foreach ($computerNew2 as $CN)
                                                                        {{-- Vật phẩm 4 --}}
                                                                        <div class="carousel-promo-item col-md-3 "
                                                                            onmouseover="" {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}}
                                                                            style=" padding: 10px">
                                                                            <div class="col mb-5">
                                                                                <div class="card product-item"
                                                                                    style="height: 450px;width:260px">
                                                                                    <!-- Thẻ sale trên đầu -->
                                                                                    <div class="badge bg-dark text-white position-absolute"
                                                                                        style="top: 0.5rem; right: 0.5rem">
                                                                                        Sale!
                                                                                    </div>
                                                                                    {{-- Overlay hiển thị chi tiết sau khi hover --}}
                                                                                    <div class="product-overlay">
                                                                                        <div class="text-center">
                                                                                            <!-- Tên sản phẩm trong overlay-->
                                                                                            <div
                                                                                                class="product-overlay-product-name">
                                                                                                <h5 class="fw-bolder"
                                                                                                    style="font-size:0.9em">
                                                                                                    @php
                                                                                                        $find = '(';
                                                                                                        $positionOfOpenP = strpos($CN->tenSP, $find);
                                                                                                        $tenSP = strlen($CN->tenSP) > 40 ? substr($CN->tenSP, 0, $positionOfOpenP) . '' : $CN->tenSP;
                                                                                                    @endphp
                                                                                                    {{ $tenSP }}
                                                                                                </h5>
                                                                                            </div>
                                                                                            <!-- Giá sản phẩm trong overlay-->
                                                                                            <div
                                                                                                class="product-overlay-product-price">
                                                                                                <span
                                                                                                    class="">{{ number_format($CN->giaSP) }}
                                                                                                    VND</span>
                                                                                            </div>
                                                                                            {{-- Bảo hành sản phẩm trong overlay --}}
                                                                                            <div
                                                                                                class="product-overlay-product-warranty">
                                                                                                12 tháng
                                                                                            </div>
                                                                                            {{-- Thông số sản phẩm trong overlay --}}
                                                                                            <div
                                                                                                class="product-overlay-product-spec text-left">
                                                                                                Core: I9-10925
                                                                                                4.25Ghz-5.1Ghz<br>
                                                                                                Ram: 16GB<br>
                                                                                                SSD: 512GB<br>
                                                                                                PSU: 550W<br>
                                                                                                Card: RTX3080<br>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    {{-- Hết overlay chi tiết --}}
                                                                                    @php
                                                                                        $tempImg;
                                                                                        $count = 0;
                                                                                    @endphp
                                                                                    <!-- Ảnh sản phẩm-->
                                                                                    @foreach ($productImage as $PI)
                                                                                        @if ($PI->maSP == $CN->maSP)
                                                                                            @if ($count == 0)
                                                                                                @php
                                                                                                    $tempImg = $PI->anh;
                                                                                                @endphp
                                                                                                <a
                                                                                                    href="{{ route('product.show', $CN->maSP) }}">
                                                                                                    <img class="card-img-top hide-from-work"
                                                                                                        style="height:240px ; width:260px ; border: 1px solid lightgray"
                                                                                                        src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                                                        id="{{ $CN->maSP }}"
                                                                                                        alt="..." />
                                                                                                </a>
                                                                                                @php
                                                                                                    $count = 1;
                                                                                                @endphp
                                                                                            @endif
                                                                                        @endif
                                                                                    @endforeach
                                                                                    @if ($tempImg == 'STOCK.jpg')
                                                                                        <img class="card-img-top "
                                                                                            src="{{ asset('assets/img/' . $tempImg) }}"
                                                                                            alt="..." />
                                                                                    @endif
                                                                                    <!-- Thông tin sản phẩm-->
                                                                                    <div class="card-body p-4 bg- text-light"
                                                                                        style="background-color: black">
                                                                                        <div class="text-center">
                                                                                            <!-- Tên sản phẩm-->
                                                                                            <h5 class="fw-bolder"
                                                                                                style="font-size:0.9em">
                                                                                                @php
                                                                                                    $find = '(';
                                                                                                    $positionOfOpenP = strpos($CN->tenSP, $find);
                                                                                                    $tenSP = strlen($CN->tenSP) > 40 ? substr($CN->tenSP, 0, $positionOfOpenP) . '' : $CN->tenSP;
                                                                                                @endphp
                                                                                                <a class="link-white"
                                                                                                    href="{{ route('product.show', $CN->maSP) }}">{{ $tenSP }}</a>

                                                                                            </h5>

                                                                                            <!-- Giá sản phẩm -->
                                                                                            <span
                                                                                                class="">{{ number_format($CN->giaSP) }}
                                                                                                VND</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- Hành động của sản phẩm-->
                                                                                    <div class="card-footer border-top-0 bg-dar d-flex"
                                                                                        style="width: 100%;background-color: black;">

                                                                                        @if ($CN->soLuong <= 0)
                                                                                            <button
                                                                                                class="btn btn-outline-danger text-left"
                                                                                                href="{{ route('product.show', $CN->maSP) }}"
                                                                                                style="background-color: navy;padding-bottom: 10px;height: 75%">
                                                                                                Hết hàng
                                                                                            @elseif($CN->soLuong > 0 && $CN->soLuong <= 5)
                                                                                                <button
                                                                                                    class="btn btn-outline-success text-left"
                                                                                                    href="{{ route('product.show', $CN->maSP) }}"
                                                                                                    style="background-color: navy;padding-bottom: 10px;height: 75%">
                                                                                                    Liên hệ ngay
                                                                                                @else
                                                                                                    <button
                                                                                                        class="btn btn-outline-success text-left"
                                                                                                        href="{{ route('product.show', $CN->maSP) }}"
                                                                                                        style="background-color: ;padding-top: 3px;height:65%">
                                                                                                        Còn hàng
                                                                                        @endif
                                                                                        </button>
                                                                                        @if ($CN->soLuong <= 0)
                                                                                        @elseif($CN->soLuong > 0 && $CN->soLuong <= 5)
                                                                                        @else
                                                                                            <form
                                                                                                action="{{ route('cart.store') }}"
                                                                                                method="POST"
                                                                                                enctype="multipart/form-data">
                                                                                                @csrf
                                                                                                <input
                                                                                                    type="hidden"
                                                                                                    value="{{ $CN->maSP }}"
                                                                                                    name="id">
                                                                                                <input
                                                                                                    type="hidden"
                                                                                                    value="{{ $tenSP }}"
                                                                                                    name="name">
                                                                                                <input
                                                                                                    type="hidden"
                                                                                                    value="{{ $CN->giaSP }}"
                                                                                                    name="price">
                                                                                                <input
                                                                                                    type="hidden"
                                                                                                    value="{{ $tempImg }}"
                                                                                                    name="image">
                                                                                                <input
                                                                                                    type="hidden"
                                                                                                    value="1"
                                                                                                    name="quantity">
                                                                                                {{-- <button
                                                                                                    class="btn btn-outline-light  text-right"
                                                                                                    style="background-color: crimson"><i
                                                                                                        class="fa fa-shopping-cart"></i></button> --}}
                                                                                            </form>
                                                                                        @endif
                                                                                    </div>


                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    @endforeach

                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if (sizeof($computerNew3) == 4)
                                                            <div class="carousel-item " style="width:100%">
                                                                <div class="row">
                                                                    @foreach ($computerNew3 as $CN)
                                                                        {{-- Vật phẩm 4 --}}
                                                                        <div class="carousel-promo-item col-md-3 "
                                                                            onmouseover="" {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}}
                                                                            style=" padding: 10px">
                                                                            <div class="col mb-5">
                                                                                <div class="card product-item"
                                                                                    style="height: 450px;width:260px">
                                                                                    <!-- Thẻ sale trên đầu -->
                                                                                    <div class="badge bg-dark text-white position-absolute"
                                                                                        style="top: 0.5rem; right: 0.5rem">
                                                                                        Sale!
                                                                                    </div>
                                                                                    {{-- Overlay hiển thị chi tiết sau khi hover --}}
                                                                                    <div class="product-overlay">
                                                                                        <div class="text-center">
                                                                                            <!-- Tên sản phẩm trong overlay-->
                                                                                            <div
                                                                                                class="product-overlay-product-name">
                                                                                                <h5 class="fw-bolder"
                                                                                                    style="font-size:0.9em">
                                                                                                    @php
                                                                                                        $find = '(';
                                                                                                        $positionOfOpenP = strpos($CN->tenSP, $find);
                                                                                                        $tenSP = strlen($CN->tenSP) > 40 ? substr($CN->tenSP, 0, $positionOfOpenP) . '' : $CN->tenSP;
                                                                                                    @endphp
                                                                                                    {{ $tenSP }}
                                                                                                </h5>
                                                                                            </div>
                                                                                            <!-- Giá sản phẩm trong overlay-->
                                                                                            <div
                                                                                                class="product-overlay-product-price">
                                                                                                <span
                                                                                                    class="">{{ number_format($CN->giaSP) }}
                                                                                                    VND</span>
                                                                                            </div>
                                                                                            {{-- Bảo hành sản phẩm trong overlay --}}
                                                                                            <div
                                                                                                class="product-overlay-product-warranty">
                                                                                                12 tháng
                                                                                            </div>
                                                                                            {{-- Thông số sản phẩm trong overlay --}}
                                                                                            <div
                                                                                                class="product-overlay-product-spec text-left">
                                                                                                Core: I9-10925
                                                                                                4.25Ghz-5.1Ghz<br>
                                                                                                Ram: 16GB<br>
                                                                                                SSD: 512GB<br>
                                                                                                PSU: 550W<br>
                                                                                                Card: RTX3080<br>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    {{-- Hết overlay chi tiết --}}
                                                                                    @php
                                                                                        $tempImg;
                                                                                        $count = 0;
                                                                                    @endphp
                                                                                    <!-- Ảnh sản phẩm-->
                                                                                    @foreach ($productImage as $PI)
                                                                                        @if ($PI->maSP == $CN->maSP)
                                                                                            @if ($count == 0)
                                                                                                @php
                                                                                                    $tempImg = $PI->anh;
                                                                                                @endphp
                                                                                                <a
                                                                                                    href="{{ route('product.show', $CN->maSP) }}">
                                                                                                    <img class="card-img-top hide-from-work"
                                                                                                        style="height:240px ; width:260px ; border: 1px solid lightgray"
                                                                                                        src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                                                        id="{{ $CN->maSP }}"
                                                                                                        alt="..." />
                                                                                                </a>
                                                                                                @php
                                                                                                    $count = 1;
                                                                                                @endphp
                                                                                            @endif
                                                                                        @endif
                                                                                    @endforeach
                                                                                    @if ($tempImg == 'STOCK.jpg')
                                                                                        <img class="card-img-top "
                                                                                            src="{{ asset('assets/img/' . $tempImg) }}"
                                                                                            alt="..." />
                                                                                    @endif
                                                                                    <!-- Thông tin sản phẩm-->
                                                                                    <div class="card-body p-4 bg- text-light"
                                                                                        style="background-color: black">
                                                                                        <div class="text-center">
                                                                                            <!-- Tên sản phẩm-->
                                                                                            <h5 class="fw-bolder"
                                                                                                style="font-size:0.9em">
                                                                                                @php
                                                                                                    $find = '(';
                                                                                                    $positionOfOpenP = strpos($CN->tenSP, $find);
                                                                                                    $tenSP = strlen($CN->tenSP) > 40 ? substr($CN->tenSP, 0, $positionOfOpenP) . '' : $CN->tenSP;
                                                                                                @endphp
                                                                                                <a class="link-white"
                                                                                                    href="{{ route('product.show', $CN->maSP) }}">{{ $tenSP }}</a>

                                                                                            </h5>

                                                                                            <!-- Giá sản phẩm -->
                                                                                            <span
                                                                                                class="">{{ number_format($CN->giaSP) }}
                                                                                                VND</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- Hành động của sản phẩm-->
                                                                                    <div class="card-footer border-top-0 bg-dar d-flex"
                                                                                        style="width: 100%;background-color: black;">

                                                                                        @if ($CN->soLuong <= 0)
                                                                                            <button
                                                                                                class="btn btn-outline-danger text-left"
                                                                                                href="{{ route('product.show', $CN->maSP) }}"
                                                                                                style="background-color: navy;padding-bottom: 10px;height: 75%">
                                                                                                Hết hàng
                                                                                            @elseif($CN->soLuong > 0 && $CN->soLuong <= 5)
                                                                                                <button
                                                                                                    class="btn btn-outline-success text-left"
                                                                                                    href="{{ route('product.show', $CN->maSP) }}"
                                                                                                    style="background-color: navy;padding-bottom: 10px;height: 75%">
                                                                                                    Liên hệ ngay
                                                                                                @else
                                                                                                    <button
                                                                                                        class="btn btn-outline-success text-left"
                                                                                                        href="{{ route('product.show', $CN->maSP) }}"
                                                                                                        style="background-color: ;padding-top: 3px;height:65%">
                                                                                                        Còn hàng
                                                                                        @endif
                                                                                        </button>
                                                                                        @if ($CN->soLuong <= 0)
                                                                                        @elseif($CN->soLuong > 0 && $CN->soLuong <= 5)
                                                                                        @else
                                                                                            <form
                                                                                                action="{{ route('cart.store') }}"
                                                                                                method="POST"
                                                                                                enctype="multipart/form-data">
                                                                                                @csrf
                                                                                                <input
                                                                                                    type="hidden"
                                                                                                    value="{{ $CN->maSP }}"
                                                                                                    name="id">
                                                                                                <input
                                                                                                    type="hidden"
                                                                                                    value="{{ $tenSP }}"
                                                                                                    name="name">
                                                                                                <input
                                                                                                    type="hidden"
                                                                                                    value="{{ $CN->giaSP }}"
                                                                                                    name="price">
                                                                                                <input
                                                                                                    type="hidden"
                                                                                                    value="{{ $tempImg }}"
                                                                                                    name="image">
                                                                                                <input
                                                                                                    type="hidden"
                                                                                                    value="1"
                                                                                                    name="quantity">
                                                                                                {{-- <button
                                                                                                    class="btn btn-outline-light  text-right"
                                                                                                    style="background-color: crimson"><i
                                                                                                        class="fa fa-shopping-cart"></i></button> --}}
                                                                                            </form>
                                                                                        @endif
                                                                                    </div>


                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    @endforeach

                                                                </div>
                                                            </div>
                                                        @endif

                                                    </div>
                                                    {{-- Kết thúc - Vật phẩm bên trong slide --}}

                                                </div>
                                                {{-- Nút điều khiển slide --}}
                                                <div>
                                                    <a class="carousel-control-prev" role="button"
                                                        data-target="#carouselExampleIndicators2"
                                                        data-slide="prev" style="z-index: 1">
                                                        {{-- <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span> --}}
                                                        {{-- <span class="sr-only">Previous</span> --}}

                                                        <i class=" fa fa-chevron-left text-primary"
                                                            style="font-size: 42px;padding-right: 70px;transform: scale(2, 5.5);"></i>
                                                    </a>
                                                    <a class="carousel-control-next" role="button"
                                                        data-target="#carouselExampleIndicators2"
                                                        data-slide="next" style="z-index: 1">
                                                        {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span> --}}

                                                        <i class="fa fa-chevron-right text-primary"
                                                            style="font-size: 42px;padding-left: 70px;transform: scale(2, 5.5);"></i>

                                                    </a>
                                                </div>

                                                {{-- Kết thúc - Nút điều khiển slide --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Hết - Hàng tương tự --}}
                    </div>
                    <div class="row">
                        <div class="container mb-5 mt-5">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="text-center mb-5" id="comment"> Bình luận sản phẩm </h3>
                                        {{-- Tạo bình luận --}}
                                        <div class="row" style="padding:  0% 0% 5% 0%">
                                            <form action="{{ route('commentCustomer.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="maNDBinhLuan"
                                                    value="{{ session()->get('khachHang') }}">
                                                <input type="hidden" name="maSPBinhLuan"
                                                    value="{{ $sanPham->maSP }}">
                                                <div style="box-sizing: border-box;width:100%;">
                                                    <textarea name="binhLuan" cols="130" rows="4" placeholder="Nhập bình luận của bạn tại đây"></textarea>
                                                </div>
                                                <button class="btn btn-danger" style="margin-top:1%">
                                                    Gửi ngay
                                                </button>
                                            </form>
                                        </div>
                                        {{-- Hết - Tạo bình luận --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                {{-- Container bình luận --}}
                                                <div class="media">
                                                    <div class="media-body">
                                                        @foreach ($productCommentMain as $PCM)
                                                            @if ($PCM->maSP == $sanPham->maSP)
                                                                <div class="row">
                                                                    <img class="mr-3 rounded-circle"
                                                                        alt="Bootstrap Media Preview"
                                                                        src="http://cdn.onlinewebfonts.com/svg/img_24787.png"
                                                                        style="width:10%;height: 10%;padding:1%" />
                                                                    <div class="col-8 d-flex"
                                                                        style="flex-direction: column">
                                                                        @foreach ($user as $U)
                                                                            @if ($U->maND == $PCM->maND)
                                                                                <h5>{{ $U->tenND }}</h5>
                                                                            @endif
                                                                        @endforeach
                                                                        <div>{{ $PCM->ngayTao }}</div>
                                                                        <h5>{{ $PCM->noiDung }}</h5>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        {{-- <div class="pull-right reply"> <a href="#"><span><i class="fa fa-reply"></i> reply</span></a> </div> --}}
                                                                    </div>
                                                                </div>

                                                                @foreach ($productComment as $PC)
                                                                    @if ($PC->maBLC == $PCM->maBLSP)
                                                                        {{-- Phản hồi --}}
                                                                        <div class="media mt-4 "
                                                                            style="padding-left:8%">
                                                                            <img class="rounded-circle"
                                                                                alt="Bootstrap Media Another Preview"
                                                                                src="http://cdn.onlinewebfonts.com/svg/img_24787.png"
                                                                                style="width:10%;height: 10%;padding:1%" />
                                                                            <div class="media-body">
                                                                                <div class="row">
                                                                                    <div class="col-12 d-flex"
                                                                                        style="flex-direction: column">
                                                                                        @foreach ($user as $U)
                                                                                            @if ($U->maND == $PC->maND)
                                                                                                <h5>{{ $U->tenND }}
                                                                                                </h5>
                                                                                            @endif
                                                                                        @endforeach
                                                                                        <div>{{ $PC->ngayTao }}
                                                                                        </div>
                                                                                        <h5>{{ $PC->noiDung }}
                                                                                        </h5>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        {{-- Hết phản hồi --}}
                                                                    @endif
                                                                @endforeach
                                                                {{-- Form gửi phản hồi --}}
                                                                <form
                                                                    action="{{ route('commentCustomer.store') }}"
                                                                    method="POST" style="padding-left:8%">
                                                                    @csrf
                                                                    <input type="hidden" name="maNDBinhLuan"
                                                                        value="{{ session()->get('khachHang') }}">
                                                                    <input type="hidden" name="maSPBinhLuan"
                                                                        value="{{ $sanPham->maSP }}">
                                                                    <input type="hidden" name="maBLC"
                                                                        value="{{ $PCM->maBLSP }}">
                                                                    <textarea name="binhLuan" id="BL{{ $PCM->maBLSP }}" cols="110" rows="3"></textarea>
                                                                    <button class="btn btn-danger"
                                                                        style="margin-top:1%">
                                                                        Gửi ngay
                                                                    </button>
                                                                </form>
                                                                {{-- Hết - Form gửi phản hồi --}}
                                                            @endif
                                                        @endforeach
                                                        {{-- Hết bình luận cha --}}


                                                    </div>
                                                </div>
                                                {{-- Hết - Container bình luận --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
