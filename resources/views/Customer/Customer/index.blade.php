<html lang="en">

<head>
    @include('Customer.Layout.Common.meta')
</head>

<body class="sidebar-toggled">
    <!-- Wrapper - Cả trang -->
    {{-- <div id="product-test" class="text-light">
        @foreach ($computerNew as $computerNew)
            @if ($computerNew->ma)
            @endif
            <div id="product-test-name" style="background-color: red"></div>
            <div id="product-test-price" style="background-color: blue"></div>
            <div id="product-test-warranty" style="background-color: green"></div>
            <div id="product-test-spec"></div>
        @endforeach
    </div> --}}

    <div id="wrapper">

        @include('Customer.Layout.Common.header')

        <!-- Wrapper - Chỉ riêng phần nội dung - Không bao gồm navbar -->
        <div id="content-wrapper" class="d-flex flex-row">
            @include('Customer.Layout.Common.side_nav_menu')

            <!-- Content của trang -->
            <div class="container-fluid" style="padding-top: 55px">


                {{-- Slide quảng cáo --}}
                <div class="hide-from-work">
                    <div class="grid">
                        <div class="row">
                            {{-- Banner trái nhỏ --}}
                            <div class="col-md-4 ">
                                <div class="" style="margin-left:3%; height: 100%">
                                    <div class=" shadow mb-4 ">
                                        {{-- Label nội dung --}}
                                        <div class="card-header py-3 " style="background-color: black">
                                            <h6 class="m-0 font-weight-bold text-light carousel-promo-item-label"></h6>
                                        </div>
                                        {{-- Vật phẩm trong nội dung --}}
                                        <div class="card-body padding-10 black-glass">
                                            <div class="table-responsive center-custom">
                                                <img class=""
                                                    style="height: 400px; overflow: hidden;width: 100%;object-fit: cover;"
                                                    src="https://gamingcentral.in/wp-content/uploads/2018/02/Omen17.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Slide banner --}}
                            <div class="col-md-8">
                                <div id="carouselExampleIndicators"
                                    class="carousel slide carousel-main-container-custom" data-ride="carousel"
                                    data-pause="hover" data-interval="5000">
                                    {{-- Hiển thị vị trí slide --}}
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                            class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    {{-- Kết thúc - Hiển thị vị trí slide --}}
                                    {{-- Vật phẩm bên trong slide --}}
                                    <div class="d-flex">
                                        <div class="carousel-inner ">
                                            @php
                                                $count = 0;
                                            @endphp
                                            @foreach ($bannerImage as $BI1)
                                                @if ($count == 0)
                                                    <div class="carousel-item active">
                                                        <a href="{{ route('product.show', $BI1->duongDan) }}">
                                                            <img class="d-block carousel-item-custom"
                                                                src="{{ asset('assets/img/' . $BI1->anh) }}"
                                                                alt="First slide">
                                                        </a>
                                                    </div>
                                                    @php
                                                        $count = 1;
                                                    @endphp
                                                @else
                                                    <div class="carousel-item">
                                                        <a href="{{ route('product.show', $BI1->duongDan) }}">
                                                            <img class="d-block carousel-item-custom"
                                                                src="{{ asset('assets/img/' . $BI1->anh) }}"
                                                                alt="Second slide">
                                                        </a>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    {{-- Kết thúc - Vật phẩm bên trong slide --}}
                                    {{-- Nút điều khiển slide --}}
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    {{-- Kết thúc - Nút điều khiển slide --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Kết thúc - Slide quảng cảo --}}

                <br>

                {{-- Vật phẩm dưới slide quảng cáo --}}
                <div class="card shadow bg-gradient-  background-none hide-from-work" style="margin-top: -3%;">
                    <div class="card-body padding-0">
                        <div class="table-responsive d-flex justify-content-center">
                            {{-- Slide --}}
                            <div class="col-md-12">
                                <div id="saleCarousel" class="carousel slide carousel-main-container-custom"
                                    data-ride="carousel" data-pause="hover" data-interval="5000" style="height: 90%">
                                    {{-- Hiển thị vị trí slide --}}

                                    {{-- <ol class="carousel-indicators" style="margin-bottom: -20px; overflow:hidden">
                                        <li data-target="#saleCarousel" data-slide-to="0" class="active" style="background-color: red; transform: scale(1, 8)"></li>
                                        <li data-target="#saleCarousel" data-slide-to="1" style="background-color: red; transform: scale(1, 8)"></li>
                                        <li data-target="#saleCarousel" data-slide-to="2" style="background-color: red; transform: scale(1, 8)"></li>
                                    </ol> --}}
                                    @php
                                        $conNum = sizeof($saleProduct) / 3;
                                        $conNum = ceil($conNum);
                                    @endphp
                                    <ol class="carousel-indicators" style="margin-bottom: -20px; overflow:hidden">
                                        @for ($i = 0; $i < $conNum; $i++)
                                            @if($i == 0)
                                            <li data-target="#saleCarousel" data-slide-to="{{$i}}" class="active" style="background-color: red; transform: scale(1, 8)"></li>
                                            @else
                                            <li data-target="#saleCarousel" data-slide-to="{{$i}}" style="background-color: red; transform: scale(1, 8)"></li>
                                            @endif
                                        @endfor
                                    </ol>
                                    {{-- Kết thúc - Hiển thị vị trí slide --}}
                                    {{-- Vật phẩm bên trong slide --}}
                                    <div class="d-flex">
                                        <div class="carousel-inner ">
                                            @php
                                                $conNum = sizeof($saleProduct) / 3;
                                                $conNum = ceil($conNum);
                                                // dd($conNum);
                                            @endphp
                                                @for ($i = 0; $i < $conNum; $i++)
                                                    @if ($i == 0)
                                                        @php
                                                            // $CN = json_decode(json_encode($CN), true);
                                                            // dd($CN);
                                                        @endphp
                                                        <div class="carousel-item active">
                                                            <div class="row">
                                                                @foreach ($saleProduct as $CN)
                                                                @if($loop->index <= 2)

                                                                <div class="carousel-promo-item col-md-4 "
                                                                    onmouseover="" {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}}
                                                                    style=" padding: 10px">
                                                                    {{-- Quảng cáo 1 --}}
                                                                    <div class="carousel-promo-item">
                                                                        <div class=" shadow mb-4 ">
                                                                            {{-- Label nội dung --}}
                                                                            <div class="card-header py-3 red-glass">
                                                                                <h6
                                                                                    class="m-0 font-weight-bold text-light carousel-promo-item-label">
                                                                                    Khuyến mãi đặc biệt</h6>
                                                                            </div>
                                                                            {{-- Vật phẩm trong nội dung --}}
                                                                            <div
                                                                                class="card-body padding-10 black-glass-2">
                                                                                <div class="table-responsive "
                                                                                    style="overflow: hidden">
                                                                                    {{-- <img class="carousel-promo-item-image-size"
                                                                                    src="https://w7.pngwing.com/pngs/257/925/png-transparent-desktop-computers-personal-computer-computer-icons-computer-monitors-computer-rectangle-computer-computer-monitor-accessory-thumbnail.png"> --}}
                                                                                    <div class="card product-item ">
                                                                                        <!-- Thẻ sale trên đầu -->
                                                                                        <div class="badge bg-dark text-white position-absolute"
                                                                                            style="top: 0.5rem; right: 0.5rem">
                                                                                            Sale!
                                                                                        </div>
                                                                                        <div class="row">
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
                                                                                                        <div
                                                                                                            class="col-md-6">
                                                                                                            <a
                                                                                                                href="{{ route('product.show', $CN->maSP) }}">
                                                                                                                <img class="card-img-top hide-from-work"
                                                                                                                    style="height:180px ; width:110% ; border: 1px solid lightgray"
                                                                                                                    src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                                                                    id="{{ $CN->maSP }}"
                                                                                                                    alt="..." />
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        @php
                                                                                                            $count = 1;
                                                                                                        @endphp
                                                                                                    @endif
                                                                                                @endif
                                                                                            @endforeach

                                                                                            <!-- Thông tin sản phẩm-->
                                                                                            <div class="card-body p-4 col-md-6 bg- text-light"
                                                                                                style="background-color: black">
                                                                                                <div
                                                                                                    class="text-center">
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
                                                                                                        <a class="link-white"
                                                                                                        href="{{ route('product.show', $CN->maSP) }}">
                                                                                                        <div class="btn btn-danger ">
                                                                                                            Xem ngay
                                                                                                        </div>
                                                                                                        </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        {{-- Hết - Quảng cáo 1 --}}
                                                                        <div class="col mb-5">

                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @else
                                                        {{--  --}}
                                                        <div class="carousel-item">
                                                            <div class="row">
                                                                @foreach ($saleProduct as $CN)
                                                                    @if($loop->index < ($i+1) * 3 && $loop->index >= ($i  ) * 3)
                                                                        <div class="carousel-promo-item col-md-4 "
                                                                            onmouseover="" {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}}
                                                                            style=" padding: 10px">
                                                                            {{-- Quảng cáo 1 --}}
                                                                            <div class="carousel-promo-item">
                                                                                <div class=" shadow mb-4 ">
                                                                                    {{-- Label nội dung --}}
                                                                                    <div class="card-header py-3 red-glass">
                                                                                        <h6
                                                                                            class="m-0 font-weight-bold text-light carousel-promo-item-label">
                                                                                            Khuyến mãi đặc biệt</h6>
                                                                                    </div>
                                                                                    {{-- Vật phẩm trong nội dung --}}
                                                                                    <div
                                                                                        class="card-body padding-10 black-glass-2">
                                                                                        <div class="table-responsive "
                                                                                            style="overflow: hidden">
                                                                                            {{-- <img class="carousel-promo-item-image-size"
                                                                                                src="https://w7.pngwing.com/pngs/257/925/png-transparent-desktop-computers-personal-computer-computer-icons-computer-monitors-computer-rectangle-computer-computer-monitor-accessory-thumbnail.png"> --}}
                                                                                            <div class="card product-item ">
                                                                                                <!-- Thẻ sale trên đầu -->
                                                                                                <div class="badge bg-dark text-white position-absolute"
                                                                                                    style="top: 0.5rem; right: 0.5rem">
                                                                                                    Sale!
                                                                                                </div>
                                                                                                <div class="row">
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
                                                                                                                <div
                                                                                                                    class="col-md-6">
                                                                                                                    <a
                                                                                                                        href="{{ route('product.show', $CN->maSP) }}">
                                                                                                                        <img class="card-img-top hide-from-work"
                                                                                                                            style="height:180px ; width:110% ; border: 1px solid lightgray"
                                                                                                                            src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                                                                            id="{{ $CN->maSP }}"
                                                                                                                            alt="..." />
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                                @php
                                                                                                                    $count = 1;
                                                                                                                @endphp
                                                                                                            @endif
                                                                                                        @endif
                                                                                                    @endforeach

                                                                                                    <!-- Thông tin sản phẩm-->
                                                                                                    <div class="card-body p-4 col-md-6 bg- text-light"
                                                                                                        style="background-color: black">
                                                                                                        <div
                                                                                                            class="text-center">
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
                                                                                                            <a class="link-white"
                                                                                                            href="{{ route('product.show', $CN->maSP) }}">
                                                                                                            <div class="btn btn-danger ">
                                                                                                                Xem ngay
                                                                                                            </div>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                {{-- Hết - Quảng cáo 1 --}}
                                                                                <div class="col mb-5">

                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    @endif
                                                                @endforeach

                                                            </div>
                                                        </div>
                                                    @endif
                                                @endfor
                                        </div>
                                    </div>
                                    {{-- Kết thúc - Vật phẩm bên trong slide --}}
                                    {{-- Nút điều khiển slide --}}
                                    <a class="carousel-control-prev" href="#saleCarousel" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#saleCarousel" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    {{-- Kết thúc - Nút điều khiển slide --}}
                                </div>
                            </div>
                            {{-- Hết - Slide --}}
                        </div>
                    </div>
                </div>
                {{-- Kết thúc - Vật phẩm dưới slide quảng cáo --}}

                {{-- Banner 1 --}}
                <div class="hide-from-work">
                    <img width="100%" src="{{ asset('assets/img/banner-store-2.jpg') }}" />
                </div>

                {{-- Danh mục - PC, Laptop phiên bản mới nhất --}}
                <div class="card shadow mb-4 background-none" id="collapsePoint">
                    {{-- Label danh mục - Thay class bằng class khác --}}
                    <div class="card-header py-3 black-glass ">
                        <h4 class="m-0 font-weight-bold text-light text-left carousel-promo-item-label "
                            style="padding-left: 4%">
                            PC, Laptop phiên bản mới
                            nhất</h4>
                    </div>
                    {{-- Content danh mục - Thay class bằng class khác --}}
                    <div class="card-body center-custom">
                        <div class="table-responsive d-flex">

                            <div style="overflow: hidden">
                                <div id="carouselExampleIndicators2" class="carousel slide carousel-container-custom"
                                    data-ride="carousel" data-pause="hover" data-interval="5000" style="width:100%;">
                                    {{-- Hiển thị vị trí slide --}}
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators2" class="bg-danger"
                                            data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators2" class="bg-danger"
                                            data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators2" class="bg-danger"
                                            data-slide-to="2"></li>
                                    </ol>
                                    {{-- Kết thúc - Hiển thị vị trí slide --}}
                                    {{-- Vật phẩm bên trong slide --}}
                                    <div class="carousel-inner">
                                        @if (sizeof($computerNew1) == 4)
                                            <div class="carousel-item active" style="width:100%">
                                                <div class="row">
                                                    @foreach ($computerNew1 as $CN)
                                                        {{-- Vật phẩm 4 --}}
                                                        <div class="carousel-promo-item col-md-3 " onmouseover=""
                                                            {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}} style=" padding: 10px">
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
                                                                            <div class="product-overlay-product-name">
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
                                                                            <div class="product-overlay-product-price">
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
                                                                                Core: I9-10925 4.25Ghz-5.1Ghz<br>
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
                                                                                        style="background-color: navy;padding-top: 3px;height:65%">
                                                                                        Còn hàng
                                                                        @endif
                                                                        </button>
                                                                        @if ($CN->soLuong <= 0)
                                                                        @elseif($CN->soLuong > 0 && $CN->soLuong <= 5)
                                                                        @else
                                                                            <form action="{{ route('cart.store') }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->maSP }}"
                                                                                    name="id">
                                                                                <input type="hidden"
                                                                                    value="{{ $tenSP }}"
                                                                                    name="name">
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->giaSP }}"
                                                                                    name="price">
                                                                                <input type="hidden"
                                                                                    value="{{ $tempImg }}"
                                                                                    name="image">
                                                                                <input type="hidden" value="1"
                                                                                    name="quantity">
                                                                                <button
                                                                                    class="btn btn-outline-light  text-right"
                                                                                    style="background-color: crimson"><i
                                                                                        class="fa fa-shopping-cart"></i></button>
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
                                                        <div class="carousel-promo-item col-md-3 " onmouseover=""
                                                            {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}} style=" padding: 10px">
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
                                                                            <div class="product-overlay-product-name">
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
                                                                            <div class="product-overlay-product-price">
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
                                                                                Core: I9-10925 4.25Ghz-5.1Ghz<br>
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
                                                                                        style="background-color: navy;padding-top: 3px;height:65%">
                                                                                        Còn hàng
                                                                        @endif
                                                                        </button>
                                                                        @if ($CN->soLuong <= 0)
                                                                        @elseif($CN->soLuong > 0 && $CN->soLuong <= 5)
                                                                        @else
                                                                            <form action="{{ route('cart.store') }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->maSP }}"
                                                                                    name="id">
                                                                                <input type="hidden"
                                                                                    value="{{ $tenSP }}"
                                                                                    name="name">
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->giaSP }}"
                                                                                    name="price">
                                                                                <input type="hidden"
                                                                                    value="{{ $tempImg }}"
                                                                                    name="image">
                                                                                <input type="hidden" value="1"
                                                                                    name="quantity">
                                                                                <button
                                                                                    class="btn btn-outline-light  text-right"
                                                                                    style="background-color: crimson"><i
                                                                                        class="fa fa-shopping-cart"></i></button>
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
                                                        <div class="carousel-promo-item col-md-3 " onmouseover=""
                                                            {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}} style=" padding: 10px">
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
                                                                            <div class="product-overlay-product-name">
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
                                                                            <div class="product-overlay-product-price">
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
                                                                                Core: I9-10925 4.25Ghz-5.1Ghz<br>
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
                                                                                        style="background-color: navy;padding-top: 3px;height:65%">
                                                                                        Còn hàng
                                                                        @endif
                                                                        </button>
                                                                        @if ($CN->soLuong <= 0)
                                                                        @elseif($CN->soLuong > 0 && $CN->soLuong <= 5)
                                                                        @else
                                                                            <form action="{{ route('cart.store') }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->maSP }}"
                                                                                    name="id">
                                                                                <input type="hidden"
                                                                                    value="{{ $tenSP }}"
                                                                                    name="name">
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->giaSP }}"
                                                                                    name="price">
                                                                                <input type="hidden"
                                                                                    value="{{ $tempImg }}"
                                                                                    name="image">
                                                                                <input type="hidden" value="1"
                                                                                    name="quantity">
                                                                                <button
                                                                                    class="btn btn-outline-light  text-right"
                                                                                    style="background-color: crimson"><i
                                                                                        class="fa fa-shopping-cart"></i></button>
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
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button"
                                        data-slide="prev" style="z-index: 1">
                                        {{-- <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span> --}}
                                        {{-- <span class="sr-only">Previous</span> --}}

                                        <i class=" fa fa-chevron-left text-primary"
                                            style="font-size: 42px;padding-right: 70px;transform: scale(2, 5.5);"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button"
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
                {{-- Kết thúc - PC, Laptop phiên bản mới nhất --}}

                {{-- Danh mục - Gaming - Streaming PC --}}
                <div class="card shadow mb-4 background-none" id="collapsePoint">
                    {{-- Label danh mục - Thay class bằng class khác --}}
                    <div class="card-header py-3 black-glass ">
                        <h4 class="m-0 font-weight-bold text-light text-left carousel-promo-item-label "
                            style="padding-left: 4%">
                            PC gaming</h4>
                    </div>
                    {{-- Content danh mục - Thay class bằng class khác --}}
                    <div class="card-body center-custom">
                        <div class="table-responsive d-flex">

                            <div style="overflow: hidden">
                                <div id="carouselExampleIndicators3" class="carousel slide carousel-container-custom"
                                    data-ride="carousel" data-pause="hover" data-interval="5000" style="width:100%">
                                    {{-- Hiển thị vị trí slide --}}
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators3" class="bg-danger"
                                            data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators3" class="bg-danger"
                                            data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators3" class="bg-danger"
                                            data-slide-to="2"></li>
                                    </ol>
                                    {{-- Kết thúc - Hiển thị vị trí slide --}}
                                    {{-- Vật phẩm bên trong slide --}}
                                    <div class="carousel-inner">
                                        @if (sizeof($computerGamingNew1) == 4)
                                            <div class="carousel-item active" style="width:100%">
                                                <div class="row">
                                                    @foreach ($computerGamingNew1 as $CN)
                                                        {{-- Vật phẩm 4 --}}
                                                        <div class="carousel-promo-item col-md-3 " onmouseover=""
                                                            {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}} style=" padding: 10px">
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
                                                                            <div class="product-overlay-product-name">
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
                                                                            <div class="product-overlay-product-price">
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
                                                                                Core: I9-10925 4.25Ghz-5.1Ghz<br>
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
                                                                                        style="background-color: navy;padding-top: 3px;height:65%">
                                                                                        Còn hàng
                                                                        @endif
                                                                        </button>
                                                                        @if ($CN->soLuong <= 0)
                                                                        @elseif($CN->soLuong > 0 && $CN->soLuong <= 5)
                                                                        @else
                                                                            <form action="{{ route('cart.store') }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->maSP }}"
                                                                                    name="id">
                                                                                <input type="hidden"
                                                                                    value="{{ $tenSP }}"
                                                                                    name="name">
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->giaSP }}"
                                                                                    name="price">
                                                                                <input type="hidden"
                                                                                    value="{{ $tempImg }}"
                                                                                    name="image">
                                                                                <input type="hidden" value="1"
                                                                                    name="quantity">
                                                                                <button
                                                                                    class="btn btn-outline-light  text-right"
                                                                                    style="background-color: crimson"><i
                                                                                        class="fa fa-shopping-cart"></i></button>
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
                                        @if (sizeof($computerGamingNew2) == 4)
                                            <div class="carousel-item " style="width:100%">
                                                <div class="row">
                                                    @foreach ($computerGamingNew2 as $CN)
                                                        {{-- Vật phẩm 4 --}}
                                                        <div class="carousel-promo-item col-md-3 " onmouseover=""
                                                            {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}} style=" padding: 10px">
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
                                                                            <div class="product-overlay-product-name">
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
                                                                            <div class="product-overlay-product-price">
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
                                                                                Core: I9-10925 4.25Ghz-5.1Ghz<br>
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
                                                                                        style="background-color: navy;padding-top: 3px;height:65%">
                                                                                        Còn hàng
                                                                        @endif
                                                                        </button>
                                                                        @if ($CN->soLuong <= 0)
                                                                        @elseif($CN->soLuong > 0 && $CN->soLuong <= 5)
                                                                        @else
                                                                            <form action="{{ route('cart.store') }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->maSP }}"
                                                                                    name="id">
                                                                                <input type="hidden"
                                                                                    value="{{ $tenSP }}"
                                                                                    name="name">
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->giaSP }}"
                                                                                    name="price">
                                                                                <input type="hidden"
                                                                                    value="{{ $tempImg }}"
                                                                                    name="image">
                                                                                <input type="hidden" value="1"
                                                                                    name="quantity">
                                                                                <button
                                                                                    class="btn btn-outline-light  text-right"
                                                                                    style="background-color: crimson"><i
                                                                                        class="fa fa-shopping-cart"></i></button>
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
                                        @if (sizeof($computerGamingNew3) == 4)
                                            <div class="carousel-item " style="width:100%">
                                                <div class="row">
                                                    @foreach ($computerGamingNew3 as $CN)
                                                        {{-- Vật phẩm 4 --}}
                                                        <div class="carousel-promo-item col-md-3"
                                                            style="padding: 10px">
                                                            <div class="col mb-5">
                                                                <div class="card product-item"
                                                                    style="height: 450px;width:260px">
                                                                    <!-- Thẻ Sale-->
                                                                    <div class="badge bg-dark text-white position-absolute"
                                                                        style="top: 0.5rem; right: 0.5rem">
                                                                        Sale
                                                                    </div>
                                                                    {{-- Overlay hiển thị chi tiết sau khi hover --}}
                                                                    <div class="product-overlay">
                                                                        <div class="text-center">
                                                                            <!-- Tên sản phẩm trong overlay-->
                                                                            <h5 class="fw-bolder"
                                                                                style="font-size:0.9em">
                                                                                @php
                                                                                    $find = '(';
                                                                                    $positionOfOpenP = strpos($CN->tenSP, $find);
                                                                                    $tenSP = strlen($CN->tenSP) > 40 ? substr($CN->tenSP, 0, $positionOfOpenP) . '' : $CN->tenSP;
                                                                                @endphp
                                                                                {{ $tenSP }}
                                                                            </h5>

                                                                            <!-- Giá sản phẩm trong overlay-->
                                                                            <span
                                                                                class="">{{ number_format($CN->giaSP) }}
                                                                                VND</span>
                                                                        </div>
                                                                    </div>
                                                                    {{-- Hết overlay chi tiết --}}
                                                                    <!-- Ảnh sản phẩm-->
                                                                    @foreach ($productImage as $PI)
                                                                        @if ($PI->maSP == $CN->maSP)
                                                                            <img class="card-img-top"
                                                                                style="height:240px ; width:260px ; border: 1px solid lightgray"
                                                                                src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                                alt="..." />
                                                                        @endif
                                                                    @endforeach
                                                                    <!-- Thông tin sản phẩm-->
                                                                    <div class="card-body p-4 bg-dark text-light">
                                                                        <div class="text-center">
                                                                            <!-- Tên sản phẩm-->
                                                                            <h5 class="fw-bolder"
                                                                                style="font-size: 0.9em">
                                                                                {{ $CN->tenSP }}
                                                                            </h5>

                                                                            <!-- Giá sản phẩm -->
                                                                            <span
                                                                                class="">{{ number_format($CN->giaSP) }}
                                                                                VND</span>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Hành động của sản phẩm-->
                                                                    <div class="card-footer border-top-0 bg-secondary"
                                                                        style="width: 100%">
                                                                        <a class="btn btn-outline-light mt-auto text-left"
                                                                            href="#" style="background-color: navy">Còn
                                                                            hàng</a>
                                                                        <a class="btn btn-outline-light mt-auto bg-gradientsecondary text-right"
                                                                            href="#"
                                                                            style="background-color: crimson"><i
                                                                                class="fa fa-shopping-cart"></i></a>
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
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button"
                                        data-slide="prev" style="z-index: 1">
                                        {{-- <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span> --}}
                                        {{-- <span class="sr-only">Previous</span> --}}

                                        <i class=" fa fa-chevron-left text-primary"
                                            style="font-size: 42px;padding-right: 70px;transform: scale(2, 5.5);"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button"
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
                {{-- Kết thúc - Gaming - Streaming PC --}}

                {{-- Danh mục - PC trạm - thiết kế đồ họa chuyên nghiệp --}}
                <div class="card shadow mb-4 background-none" id="collapsePoint">
                    {{-- Label danh mục - Thay class bằng class khác --}}
                    <div class="card-header py-3 black-glass ">
                        <h4 class="m-0 font-weight-bold text-light text-left carousel-promo-item-label "
                            style="padding-left: 4%">
                            PC trạm</h4>
                    </div>
                    {{-- Content danh mục - Thay class bằng class khác --}}
                    <div class="card-body center-custom">
                        <div class="table-responsive d-flex">

                            <div style="overflow: hidden">
                                <div id="carouselExampleIndicators4" class="carousel slide carousel-container-custom"
                                    data-ride="carousel" data-pause="hover" data-interval="5000" style="width:100%">
                                    {{-- Hiển thị vị trí slide --}}
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators4" class="bg-danger"
                                            data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators4" class="bg-danger"
                                            data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators4" class="bg-danger"
                                            data-slide-to="2"></li>
                                    </ol>
                                    {{-- Kết thúc - Hiển thị vị trí slide --}}
                                    {{-- Vật phẩm bên trong slide --}}
                                    <div class="carousel-inner">
                                        @if (sizeof($computerStationNew1) == 4)
                                            <div class="carousel-item active" style="width:100%">
                                                <div class="row">
                                                    @foreach ($computerStationNew1 as $CN)
                                                        {{-- Vật phẩm 4 --}}
                                                        <div class="carousel-promo-item col-md-3 " onmouseover=""
                                                            {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}} style=" padding: 10px">
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
                                                                            <div class="product-overlay-product-name">
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
                                                                            <div class="product-overlay-product-price">
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
                                                                                Core: I9-10925 4.25Ghz-5.1Ghz<br>
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
                                                                                        style="background-color: navy;padding-top: 3px;height:65%">
                                                                                        Còn hàng
                                                                        @endif
                                                                        </button>
                                                                        @if ($CN->soLuong <= 0)
                                                                        @elseif($CN->soLuong > 0 && $CN->soLuong <= 5)
                                                                        @else
                                                                            <form action="{{ route('cart.store') }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->maSP }}"
                                                                                    name="id">
                                                                                <input type="hidden"
                                                                                    value="{{ $tenSP }}"
                                                                                    name="name">
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->giaSP }}"
                                                                                    name="price">
                                                                                <input type="hidden"
                                                                                    value="{{ $tempImg }}"
                                                                                    name="image">
                                                                                <input type="hidden" value="1"
                                                                                    name="quantity">
                                                                                <button
                                                                                    class="btn btn-outline-light  text-right"
                                                                                    style="background-color: crimson"><i
                                                                                        class="fa fa-shopping-cart"></i></button>
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
                                        @if (sizeof($computerStationNew2) == 4)
                                            <div class="carousel-item " style="width:100%">
                                                <div class="row">
                                                    @foreach ($computerStationNew2 as $CN)
                                                        {{-- Vật phẩm 4 --}}
                                                        <div class="carousel-promo-item col-md-3 " onmouseover=""
                                                            {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}} style=" padding: 10px">
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
                                                                            <div class="product-overlay-product-name">
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
                                                                            <div class="product-overlay-product-price">
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
                                                                                Core: I9-10925 4.25Ghz-5.1Ghz<br>
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
                                                                                        style="background-color: navy;padding-top: 3px;height:65%">
                                                                                        Còn hàng
                                                                        @endif
                                                                        </button>
                                                                        @if ($CN->soLuong <= 0)
                                                                        @elseif($CN->soLuong > 0 && $CN->soLuong <= 5)
                                                                        @else
                                                                            <form action="{{ route('cart.store') }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->maSP }}"
                                                                                    name="id">
                                                                                <input type="hidden"
                                                                                    value="{{ $tenSP }}"
                                                                                    name="name">
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->giaSP }}"
                                                                                    name="price">
                                                                                <input type="hidden"
                                                                                    value="{{ $tempImg }}"
                                                                                    name="image">
                                                                                <input type="hidden" value="1"
                                                                                    name="quantity">
                                                                                <button
                                                                                    class="btn btn-outline-light  text-right"
                                                                                    style="background-color: crimson"><i
                                                                                        class="fa fa-shopping-cart"></i></button>
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
                                        @if (sizeof($computerStationNew3) == 4)
                                            <div class="carousel-item " style="width:100%">
                                                <div class="row">
                                                    @foreach ($computerStationNew3 as $CN)
                                                        {{-- Vật phẩm 4 --}}
                                                        <div class="carousel-promo-item col-md-3"
                                                            style="padding: 10px">
                                                            <div class="col mb-5">
                                                                <div class="card product-item"
                                                                    style="height: 450px;width:260px">
                                                                    <!-- Thẻ Sale-->
                                                                    <div class="badge bg-dark text-white position-absolute"
                                                                        style="top: 0.5rem; right: 0.5rem">
                                                                        Sale
                                                                    </div>
                                                                    {{-- Overlay hiển thị chi tiết sau khi hover --}}
                                                                    <div class="product-overlay">
                                                                        <div class="text-center">
                                                                            <!-- Tên sản phẩm trong overlay-->
                                                                            <h5 class="fw-bolder"
                                                                                style="font-size:0.9em">
                                                                                @php
                                                                                    $find = '(';
                                                                                    $positionOfOpenP = strpos($CN->tenSP, $find);
                                                                                    $tenSP = strlen($CN->tenSP) > 40 ? substr($CN->tenSP, 0, $positionOfOpenP) . '' : $CN->tenSP;
                                                                                @endphp
                                                                                {{ $tenSP }}
                                                                            </h5>

                                                                            <!-- Giá sản phẩm trong overlay-->
                                                                            <span
                                                                                class="">{{ number_format($CN->giaSP) }}
                                                                                VND</span>
                                                                        </div>
                                                                    </div>
                                                                    {{-- Hết overlay chi tiết --}}
                                                                    <!-- Ảnh sản phẩm-->
                                                                    @foreach ($productImage as $PI)
                                                                        @if ($PI->maSP == $CN->maSP)
                                                                            <img class="card-img-top"
                                                                                style="height:240px ; width:260px ; border: 1px solid lightgray"
                                                                                src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                                alt="..." />
                                                                        @endif
                                                                    @endforeach
                                                                    <!-- Thông tin sản phẩm-->
                                                                    <div class="card-body p-4 bg-dark text-light">
                                                                        <div class="text-center">
                                                                            <!-- Tên sản phẩm-->
                                                                            <h5 class="fw-bolder"
                                                                                style="font-size: 0.9em">
                                                                                {{ $CN->tenSP }}
                                                                            </h5>

                                                                            <!-- Giá sản phẩm -->
                                                                            <span
                                                                                class="">{{ number_format($CN->giaSP) }}
                                                                                VND</span>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Hành động của sản phẩm-->
                                                                    <div class="card-footer border-top-0 bg-secondary"
                                                                        style="width: 100%">
                                                                        <a class="btn btn-outline-light mt-auto text-left"
                                                                            href="#" style="background-color: navy">Còn
                                                                            hàng</a>
                                                                        <a class="btn btn-outline-light mt-auto bg-gradientsecondary text-right"
                                                                            href="#"
                                                                            style="background-color: crimson"><i
                                                                                class="fa fa-shopping-cart"></i></a>
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
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button"
                                        data-slide="prev" style="z-index: 1">
                                        {{-- <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span> --}}
                                        {{-- <span class="sr-only">Previous</span> --}}

                                        <i class=" fa fa-chevron-left text-primary"
                                            style="font-size: 42px;padding-right: 70px;transform: scale(2, 5.5);"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button"
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
                {{-- Kết thúc - PC trạm - thiết kế đồ họa chuyên nghiệp --}}

                {{-- Danh mục - Laptop văn phòng --}}
                <div class="card shadow mb-4 background-none" id="collapsePoint">
                    {{-- Label danh mục - Thay class bằng class khác --}}
                    <div class="card-header py-3 black-glass ">
                        <h4 class="m-0 font-weight-bold text-light text-left carousel-promo-item-label "
                            style="padding-left: 4%">
                            Laptop văn phòng</h4>
                    </div>
                    {{-- Content danh mục - Thay class bằng class khác --}}
                    <div class="card-body center-custom">
                        <div class="table-responsive d-flex">

                            <div style="overflow: hidden">
                                <div id="carouselExampleIndicators5" class="carousel slide carousel-container-custom"
                                    data-ride="carousel" data-pause="hover" data-interval="5000" style="width:100%">
                                    {{-- Hiển thị vị trí slide --}}
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators5" class="bg-danger"
                                            data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators5" class="bg-danger"
                                            data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators5" class="bg-danger"
                                            data-slide-to="2"></li>
                                    </ol>
                                    {{-- Kết thúc - Hiển thị vị trí slide --}}
                                    {{-- Vật phẩm bên trong slide --}}
                                    <div class="carousel-inner">
                                        @if (sizeof($laptopOfficeNew1) == 4)
                                            <div class="carousel-item active" style="width:100%">
                                                <div class="row">
                                                    @foreach ($laptopOfficeNew1 as $CN)
                                                        {{-- Vật phẩm 4 --}}
                                                        <div class="carousel-promo-item col-md-3 " onmouseover=""
                                                            {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}} style=" padding: 10px">
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
                                                                            <div class="product-overlay-product-name">
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
                                                                            <div class="product-overlay-product-price">
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
                                                                                Core: I9-10925 4.25Ghz-5.1Ghz<br>
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
                                                                                        style="background-color: navy;padding-top: 3px;height:65%">
                                                                                        Còn hàng
                                                                        @endif
                                                                        </button>
                                                                        @if ($CN->soLuong <= 0)
                                                                        @elseif($CN->soLuong > 0 && $CN->soLuong <= 5)
                                                                        @else
                                                                            <form action="{{ route('cart.store') }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->maSP }}"
                                                                                    name="id">
                                                                                <input type="hidden"
                                                                                    value="{{ $tenSP }}"
                                                                                    name="name">
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->giaSP }}"
                                                                                    name="price">
                                                                                <input type="hidden"
                                                                                    value="{{ $tempImg }}"
                                                                                    name="image">
                                                                                <input type="hidden" value="1"
                                                                                    name="quantity">
                                                                                <button
                                                                                    class="btn btn-outline-light  text-right"
                                                                                    style="background-color: crimson"><i
                                                                                        class="fa fa-shopping-cart"></i></button>
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
                                        @if (sizeof($laptopOfficeNew2) == 4)
                                            <div class="carousel-item " style="width:100%">
                                                <div class="row">
                                                    @foreach ($laptopOfficeNew2 as $CN)
                                                        {{-- Vật phẩm 4 --}}
                                                        <div class="carousel-promo-item col-md-3 " onmouseover=""
                                                            {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}} style=" padding: 10px">
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
                                                                            <div class="product-overlay-product-name">
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
                                                                            <div class="product-overlay-product-price">
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
                                                                                Core: I9-10925 4.25Ghz-5.1Ghz<br>
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
                                                                                        style="background-color: navy;padding-top: 3px;height:65%">
                                                                                        Còn hàng
                                                                        @endif
                                                                        </button>
                                                                        @if ($CN->soLuong <= 0)
                                                                        @elseif($CN->soLuong > 0 && $CN->soLuong <= 5)
                                                                        @else
                                                                            <form action="{{ route('cart.store') }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->maSP }}"
                                                                                    name="id">
                                                                                <input type="hidden"
                                                                                    value="{{ $tenSP }}"
                                                                                    name="name">
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->giaSP }}"
                                                                                    name="price">
                                                                                <input type="hidden"
                                                                                    value="{{ $tempImg }}"
                                                                                    name="image">
                                                                                <input type="hidden" value="1"
                                                                                    name="quantity">
                                                                                <button
                                                                                    class="btn btn-outline-light  text-right"
                                                                                    style="background-color: crimson"><i
                                                                                        class="fa fa-shopping-cart"></i></button>
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
                                        @if (sizeof($laptopOfficeNew3) == 4)
                                            <div class="carousel-item " style="width:100%">
                                                <div class="row">
                                                    @foreach ($laptopOfficeNew3 as $CN)
                                                        {{-- Vật phẩm 4 --}}
                                                        <div class="carousel-promo-item col-md-3"
                                                            style="padding: 10px">
                                                            <div class="col mb-5">
                                                                <div class="card product-item"
                                                                    style="height: 450px;width:260px">
                                                                    <!-- Thẻ Sale-->
                                                                    <div class="badge bg-dark text-white position-absolute"
                                                                        style="top: 0.5rem; right: 0.5rem">
                                                                        Sale
                                                                    </div>
                                                                    {{-- Overlay hiển thị chi tiết sau khi hover --}}
                                                                    <div class="product-overlay">
                                                                        <div class="text-center">
                                                                            <!-- Tên sản phẩm trong overlay-->
                                                                            <h5 class="fw-bolder"
                                                                                style="font-size:0.9em">
                                                                                @php
                                                                                    $find = '(';
                                                                                    $positionOfOpenP = strpos($CN->tenSP, $find);
                                                                                    $tenSP = strlen($CN->tenSP) > 40 ? substr($CN->tenSP, 0, $positionOfOpenP) . '' : $CN->tenSP;
                                                                                @endphp
                                                                                {{ $tenSP }}
                                                                            </h5>

                                                                            <!-- Giá sản phẩm trong overlay-->
                                                                            <span
                                                                                class="">{{ number_format($CN->giaSP) }}
                                                                                VND</span>
                                                                        </div>
                                                                    </div>
                                                                    {{-- Hết overlay chi tiết --}}
                                                                    <!-- Ảnh sản phẩm-->
                                                                    @foreach ($productImage as $PI)
                                                                        @if ($PI->maSP == $CN->maSP)
                                                                            <img class="card-img-top"
                                                                                style="height:240px ; width:260px ; border: 1px solid lightgray"
                                                                                src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                                alt="..." />
                                                                        @endif
                                                                    @endforeach
                                                                    <!-- Thông tin sản phẩm-->
                                                                    <div class="card-body p-4 bg-dark text-light">
                                                                        <div class="text-center">
                                                                            <!-- Tên sản phẩm-->
                                                                            <h5 class="fw-bolder"
                                                                                style="font-size: 0.9em">
                                                                                {{ $CN->tenSP }}
                                                                            </h5>

                                                                            <!-- Giá sản phẩm -->
                                                                            <span
                                                                                class="">{{ number_format($CN->giaSP) }}
                                                                                VND</span>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Hành động của sản phẩm-->
                                                                    <div class="card-footer border-top-0 bg-secondary"
                                                                        style="width: 100%">
                                                                        <a class="btn btn-outline-light mt-auto text-left"
                                                                            href="#" style="background-color: navy">Còn
                                                                            hàng</a>
                                                                        <a class="btn btn-outline-light mt-auto bg-gradientsecondary text-right"
                                                                            href="#"
                                                                            style="background-color: crimson"><i
                                                                                class="fa fa-shopping-cart"></i></a>
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
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators5" role="button"
                                        data-slide="prev" style="z-index: 1">
                                        {{-- <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span> --}}
                                        {{-- <span class="sr-only">Previous</span> --}}

                                        <i class=" fa fa-chevron-left text-primary"
                                            style="font-size: 42px;padding-right: 70px;transform: scale(2, 5.5);"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators5" role="button"
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
                {{-- Kết thúc - Laptop văn phòng --}}

                {{-- Danh mục - Linh kiện máy tính --}}
                <div class="card shadow mb-4 background-none" id="collapsePoint">
                    {{-- Label danh mục - Thay class bằng class khác --}}
                    <div class="card-header py-3 black-glass ">
                        <h4 class="m-0 font-weight-bold text-light text-left carousel-promo-item-label "
                            style="padding-left: 4%">
                            Linh kiện</h4>
                    </div>
                    {{-- Content danh mục - Thay class bằng class khác --}}
                    <div class="card-body center-custom">
                        <div class="table-responsive d-flex">

                            <div style="overflow: hidden">
                                <div id="carouselExampleIndicators6" class="carousel slide carousel-container-custom"
                                    data-ride="carousel" data-pause="hover" data-interval="5000" style="width:100%">
                                    {{-- Hiển thị vị trí slide --}}
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators6" class="bg-danger"
                                            data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators6" class="bg-danger"
                                            data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators6" class="bg-danger"
                                            data-slide-to="2"></li>
                                    </ol>
                                    {{-- Kết thúc - Hiển thị vị trí slide --}}
                                    {{-- Vật phẩm bên trong slide --}}
                                    <div class="carousel-inner">
                                        @if (sizeof($hardwareNew1) == 4)
                                            <div class="carousel-item active" style="width:100%">
                                                <div class="row">
                                                    @foreach ($hardwareNew1 as $CN)
                                                        {{-- Vật phẩm 4 --}}
                                                        <div class="carousel-promo-item col-md-3 " onmouseover=""
                                                            {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}} style=" padding: 10px">
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
                                                                            <div class="product-overlay-product-name">
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
                                                                            <div class="product-overlay-product-price">
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
                                                                                Core: I9-10925 4.25Ghz-5.1Ghz<br>
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
                                                                                        style="background-color: navy;padding-top: 3px;height:65%">
                                                                                        Còn hàng
                                                                        @endif
                                                                        </button>
                                                                        @if ($CN->soLuong <= 0)
                                                                        @elseif($CN->soLuong > 0 && $CN->soLuong <= 5)
                                                                        @else
                                                                            <form action="{{ route('cart.store') }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->maSP }}"
                                                                                    name="id">
                                                                                <input type="hidden"
                                                                                    value="{{ $tenSP }}"
                                                                                    name="name">
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->giaSP }}"
                                                                                    name="price">
                                                                                <input type="hidden"
                                                                                    value="{{ $tempImg }}"
                                                                                    name="image">
                                                                                <input type="hidden" value="1"
                                                                                    name="quantity">
                                                                                <button
                                                                                    class="btn btn-outline-light  text-right"
                                                                                    style="background-color: crimson"><i
                                                                                        class="fa fa-shopping-cart"></i></button>
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
                                        @if (sizeof($hardwareNew2) == 4)
                                            <div class="carousel-item " style="width:100%">
                                                <div class="row">
                                                    @foreach ($hardwareNew2 as $CN)
                                                        {{-- Vật phẩm 4 --}}
                                                        <div class="carousel-promo-item col-md-3 " onmouseover=""
                                                            {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}} style=" padding: 10px">
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
                                                                            <div class="product-overlay-product-name">
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
                                                                            <div class="product-overlay-product-price">
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
                                                                                Core: I9-10925 4.25Ghz-5.1Ghz<br>
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
                                                                                        style="background-color: navy;padding-top: 3px;height:65%">
                                                                                        Còn hàng
                                                                        @endif
                                                                        </button>
                                                                        @if ($CN->soLuong <= 0)
                                                                        @elseif($CN->soLuong > 0 && $CN->soLuong <= 5)
                                                                        @else
                                                                            <form action="{{ route('cart.store') }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->maSP }}"
                                                                                    name="id">
                                                                                <input type="hidden"
                                                                                    value="{{ $tenSP }}"
                                                                                    name="name">
                                                                                <input type="hidden"
                                                                                    value="{{ $CN->giaSP }}"
                                                                                    name="price">
                                                                                <input type="hidden"
                                                                                    value="{{ $tempImg }}"
                                                                                    name="image">
                                                                                <input type="hidden" value="1"
                                                                                    name="quantity">
                                                                                <button
                                                                                    class="btn btn-outline-light  text-right"
                                                                                    style="background-color: crimson"><i
                                                                                        class="fa fa-shopping-cart"></i></button>
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
                                        @if (sizeof($hardwareNew3) == 4)
                                            <div class="carousel-item " style="width:100%">
                                                <div class="row">
                                                    @foreach ($hardwareNew3 as $CN)
                                                        {{-- Vật phẩm 4 --}}
                                                        <div class="carousel-promo-item col-md-3"
                                                            style="padding: 10px">
                                                            <div class="col mb-5">
                                                                <div class="card product-item"
                                                                    style="height: 450px;width:260px">
                                                                    <!-- Thẻ Sale-->
                                                                    <div class="badge bg-dark text-white position-absolute"
                                                                        style="top: 0.5rem; right: 0.5rem">
                                                                        Sale
                                                                    </div>
                                                                    {{-- Overlay hiển thị chi tiết sau khi hover --}}
                                                                    <div class="product-overlay">
                                                                        <div class="text-center">
                                                                            <!-- Tên sản phẩm trong overlay-->
                                                                            <h5 class="fw-bolder"
                                                                                style="font-size:0.9em">
                                                                                @php
                                                                                    $find = '(';
                                                                                    $positionOfOpenP = strpos($CN->tenSP, $find);
                                                                                    $tenSP = strlen($CN->tenSP) > 40 ? substr($CN->tenSP, 0, $positionOfOpenP) . '' : $CN->tenSP;
                                                                                @endphp
                                                                                {{ $tenSP }}
                                                                            </h5>

                                                                            <!-- Giá sản phẩm trong overlay-->
                                                                            <span
                                                                                class="">{{ number_format($CN->giaSP) }}
                                                                                VND</span>
                                                                        </div>
                                                                    </div>
                                                                    {{-- Hết overlay chi tiết --}}
                                                                    <!-- Ảnh sản phẩm-->
                                                                    @foreach ($productImage as $PI)
                                                                        @if ($PI->maSP == $CN->maSP)
                                                                            <img class="card-img-top"
                                                                                style="height:240px ; width:260px ; border: 1px solid lightgray"
                                                                                src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                                alt="..." />
                                                                        @endif
                                                                    @endforeach
                                                                    <!-- Thông tin sản phẩm-->
                                                                    <div class="card-body p-4 bg-dark text-light">
                                                                        <div class="text-center">
                                                                            <!-- Tên sản phẩm-->
                                                                            <h5 class="fw-bolder"
                                                                                style="font-size: 0.9em">
                                                                                {{ $CN->tenSP }}
                                                                            </h5>

                                                                            <!-- Giá sản phẩm -->
                                                                            <span
                                                                                class="">{{ number_format($CN->giaSP) }}
                                                                                VND</span>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Hành động của sản phẩm-->
                                                                    <div class="card-footer border-top-0 bg-secondary"
                                                                        style="width: 100%">
                                                                        <a class="btn btn-outline-light mt-auto text-left"
                                                                            href="#" style="background-color: navy">Còn
                                                                            hàng</a>
                                                                        <a class="btn btn-outline-light mt-auto bg-gradientsecondary text-right"
                                                                            href="#"
                                                                            style="background-color: crimson"><i
                                                                                class="fa fa-shopping-cart"></i></a>
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
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators6" role="button"
                                        data-slide="prev" style="z-index: 1">
                                        {{-- <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span> --}}
                                        {{-- <span class="sr-only">Previous</span> --}}

                                        <i class=" fa fa-chevron-left text-primary"
                                            style="font-size: 42px;padding-right: 70px;transform: scale(2, 5.5);"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators6" role="button"
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
                {{-- Kết thúc - Linh kiện máy tính --}}

            </div>
            <!-- /.container-fluid -->
        </div>

    </div>

    <div id="dom-target" style="display: none;">
        @foreach ($computerNew1 as $CN)
            <div id="CN-maSP">{{ $CN->maSP }}</div>
            <div id="CN-tenSP">{{ $CN->tenSP }}</div>
            <div id="CN-giaSP">{{ $CN->giaSP }}</div>
            <div id="CN-baoHanhSP">2 years</div>
        @endforeach

    </div>
    <!-- End of Page Wrapper -->
    @include('Customer.Layout.Common.bottom_script')
    <script>
        // const toolbox = document.getElementById('product-test');
        // const hoverObject = document.getElementsByClassName('product-item');
        // toolbox.style.display = "none";
        // for (let i = 0; i < hoverObject.length; i++) {
        //     hoverObject[i].addEventListener('mouseenter', () => {
        //         toolbox.style.display = "block";
        //     });

        //     hoverObject[i].addEventListener('mouseleave', () => {
        //         toolbox.style.display = "none";
        //     });

        //     toolbox.addEventListener('mouseenter', () => {
        //         toolbox.style.display = "block";
        //     });

        //     toolbox.addEventListener('mouseleave', () => {
        //         toolbox.style.display = "none";
        //     });
        // }
        // toolbox.style.display = "none";
    </script>
    <script>
        let circle = document.getElementById('product-test');
        let name = document.getElementById('product-test-name');
        let price = document.getElementById('product-test-price');
        let warranty = document.getElementById('product-test-warranty');
        let spec = document.getElementById('product-test-spec');

        const onMouseMove = (e) => {
            // circle.style.left = (e.pageX + 100) + 'px';
            // circle.style.top = e.pageY + 'px';
        }
        document.addEventListener('mousemove', onMouseMove);

        document.onmouseover = function(e) {
            // console.log("ProductID:::", e.target.id);
            const maSP = document.getElementById("CN-maSP");
            const tenSP = document.getElementById("CN-tenSP");
            const giaSP = document.getElementById("CN-giaSP");
            const baoHanhSP = document.getElementById("CN-baoHanhSP");
            // add js var as id,name,price
            if (e.target.id == maSP.innerHTML) {
                name.innerHTML = tenSP.innerHTML;
                price.innerHTML = giaSP.innerHTML;
                warranty.innerHTML = baoHanhSP.innerHTML;
                // spec.innerHTML = "spec 1"
            }
        }

        document.onmouseleave = function(e) {
            // console.log("ProductID:::", e.target.id);
            const maSP = document.getElementById("CN-maSP");
            const tenSP = document.getElementById("CN-tenSP");
            const giaSP = document.getElementById("CN-giaSP");
            const baoHanhSP = document.getElementById("CN-baoHanhSP");
            // add js var as id,name,price
            if (e.target.id == maSP.innerHTML) {
                name.innerHTML = tenSP.innerHTML;
                price.innerHTML = giaSP.innerHTML;
                warranty.innerHTML = baoHanhSP.innerHTML;
                // spec.innerHTML = "spec 1"
            }
        }
    </script>
    <script>
        // let XMLHttpRequestObject = false;
        // // let name = document.getElementById('product-test-name');
        // // let price = document.getElementById('product-test-price');
        // // let warranty = document.getElementById('product-test-warranty');
        // // let spec = document.getElementById('product-test-spec');
        // // let name = document.getElementById('product-test-warranty');
        // if (window.XMLHttpRequest) {
        //     XMLHttpRequestObject = new XMLHttpRequest();
        // } else if (window.ActiveXObject) {
        //     XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
        // }

        // function getData(dataSource, divID) {
        //     if (XMLHttpRequestObject) {
        //         let obj = document.getElementById(divID);
        //         XMLHttpRequestObject.open("GET", dataSource);

        //         XMLHttpRequestObject.onreadystatechange = function() {
        //             // if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200) {
        //             obj.innerHTML = dataSource;
        //             // }
        //         }
        //         XMLHttpRequestObject.send(null);
        //     }
        // }
    </script>
</body>

</html>
