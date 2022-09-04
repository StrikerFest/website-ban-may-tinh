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
            {{-- @include('Customer.Layout.Common.side_nav_menu') --}}

            <!-- Content của trang -->
            <div class="container-fluid" style="padding-top: 55px">


                {{-- Slide quảng cáo --}}
                <div class="hide-from-work">
                    <div class="grid">
                        <div class="row" style="height: 13.8%">
                            {{-- Banner trái nhỏ --}}
                            <div class="col-md-4 ">
                                <div class="" style="margin-right: 0%; height: 100%">
                                 @foreach ($bannerImageN as $BIN)
                                 <div class=" shadowx mb-0 " style="width: 420px">
                                        {{-- Label nội dung --}}
                                        {{-- <div class="card-header py-3 " style="background-color: black">
                                            <h6 class="m-0 font-weight-bold text-light carousel-promo-item-label"></h6>
                                        </div> --}}
                                        {{-- Vật phẩm trong nội dung --}}
                                        <div class=" padding-10x black-glassx" style="height: 32%">
                                            <div class="table-responsive center-custom">
                                                        <a href="http://localhost:8000/{{$BIN->duongDan}}">
                                                <img class=""
                                                    style="height: 170px; overflow: hidden;width: 420px;object-fit: cover ;"
                                                    src="{{ asset('assets/img/' . $BIN->anh) }}">
                                                        </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                            {{-- Slide banner --}}
                            <div class="col-md-8 " >
                                <div id="carouselExampleIndicators"
                                    class="carousel slide carousel-main-container-custom card-" data-ride="carousel"
                                    data-pause="hover" data-interval="5000">
                                    {{-- Hiển thị vị trí slide --}}
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                        </li>
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
                                            @foreach ($bannerImageL as $BI1)
                                                @if ($count == 0)
                                                    <div class="carousel-item active">
                                                        <a href="http://localhost:8000/{{$BI1->duongDan}}">
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
                                                        <a href="http://localhost:8000/{{$BI1->duongDan}}">
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
                        <div class="row" style="padding-bottom: 50px">
                            @foreach ($bannerImageT as $BIT)
                                <div class="col-6">
                                        <a href="http://localhost:8000/{{$BIT->duongDan}}">
                                            <img class=""
                                        style="height: 150px; overflow: hiddenx;width: 100%;object-fit: ;"
                                        src="{{ asset('assets/img/' . $BIT->anh) }}">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{-- Kết thúc - Slide quảng cảo --}}

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
                                            @if ($i == 0)
                                                <li data-target="#saleCarousel" data-slide-to="{{ $i }}"
                                                    class="active"
                                                    style="background-color: red; transform: scale(1, 8)"></li>
                                            @else
                                                <li data-target="#saleCarousel" data-slide-to="{{ $i }}"
                                                    style="background-color: red; transform: scale(1, 8)"></li>
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
                                                                @if ($loop->index <= 2)
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
                                                                                        style="overflow: visible">
                                                                                        {{-- <img class="carousel-promo-item-image-size"
                                                                                    src="https://w7.pngwing.com/pngs/257/925/png-transparent-desktop-computers-personal-computer-computer-icons-computer-monitors-computer-rectangle-computer-computer-monitor-accessory-thumbnail.png"> --}}
                                                                                        <div
                                                                                            class="card product-item ">
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
                                                                                                            <div
                                                                                                                class="btn btn-danger ">
                                                                                                                Xem ngay
                                                                                                                <br> Ưu đãi lớn
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
                                                                @if ($loop->index < ($i + 1) * 3 && $loop->index >= $i * 3)
                                                                    <div class="carousel-promo-item col-md-4 "
                                                                        onmouseover="" {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}}
                                                                        style=" padding: 10px">
                                                                        {{-- Quảng cáo 1 --}}
                                                                        <div class="carousel-promo-item">
                                                                            <div class=" shadow mb-4 ">
                                                                                {{-- Label nội dung --}}
                                                                                <div
                                                                                    class="card-header py-3 red-glass">
                                                                                    <h6
                                                                                        class="m-0 font-weight-bold text-light carousel-promo-item-label">
                                                                                        Khuyến mãi đặc biệt</h6>
                                                                                </div>
                                                                                {{-- Vật phẩm trong nội dung --}}
                                                                                <div
                                                                                    class="card-body padding-10 black-glass-2">
                                                                                    <div class="table-responsive "
                                                                                        style="overflow: visible">
                                                                                        {{-- <img class="carousel-promo-item-image-size"
                                                                                                src="https://w7.pngwing.com/pngs/257/925/png-transparent-desktop-computers-personal-computer-computer-icons-computer-monitors-computer-rectangle-computer-computer-monitor-accessory-thumbnail.png"> --}}
                                                                                        <div
                                                                                            class="card product-item ">
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
                                                                                                            <div
                                                                                                                class="btn btn-danger ">
                                                                                                                Xem ngay <br> Ưu đãi lớn
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
                {{-- <div class="hide-from-work">
                    <img width="100%" src="{{ asset('assets/img/banner-store-2.jpg') }}" />
                </div> --}}

                {{-- Danh mục - PC, Laptop phiên bản mới nhất --}}
                @foreach ($theLoaiCon as $TLC)
                    @php
                        $checkExist = 0;
                    @endphp
                    @foreach ($sanPham as $SP)
                        @if ($SP->maTLC == $TLC->maTLC)
                            @php
                                $checkExist++;
                            @endphp
                        @endif
                    @endforeach
                    @if ($checkExist > 3)
                        <div class="card shadow mb-4 background-none" id="collapsePoint">
                            {{-- Label danh mục - Thay class bằng class khác --}}
                            <div class="card-header py-3 black-glass ">
                                <h4 class="m-0 font-weight-bold text-light text-left carousel-promo-item-label "
                                    style="padding-left: 4%">
                                    {{ $TLC->tenTLC }}</h4>
                            </div>
                            {{-- Content danh mục - Thay class bằng class khác --}}
                            <div class="card-body center-custom">
                                <div class="table-responsive d-flex">

                                    <div style="overflow: visible">
                                        <div id="carouselExampleIndicators{{ $TLC->maTLC }}"
                                            class="carousel slide carousel-container-custom" data-ride="carousel"
                                            data-pause="hover" data-interval="5000" style="width:100%;">
                                            {{-- Hiển thị vị trí slide --}}
                                            <ol class="carousel-indicators">
                                                @php
                                                    $countSlide = 0;
                                                    $countItem = 0;
                                                @endphp
                                                @foreach ($sanPham as $SP)
                                                    @if ($SP->maTLC == $TLC->maTLC)
                                                        @php
                                                            $countItem++;
                                                        @endphp
                                                        @if ($countItem == 4)
                                                            @php
                                                                $countSlide++;
                                                                $countItem = 0;
                                                            @endphp
                                                            @if ($countSlide == 1)
                                                                <li data-target="#carouselExampleIndicators{{ $TLC->maTLC }}"
                                                                    class="bg-danger" data-slide-to="0"
                                                                    class="active"></li>
                                                            @else
                                                                <li data-target="#carouselExampleIndicators{{ $TLC->maTLC }}"
                                                                    class="bg-danger"
                                                                    data-slide-to="{{ $countSlide - 1 }}"></li>
                                                            @endif
                                                        @endif
                                                    @endif
                                                @endforeach
                                                {{-- {{$countSlide }} --}}


                                            </ol>
                                            {{-- Kết thúc - Hiển thị vị trí slide --}}
                                            {{-- Vật phẩm bên trong slide --}}
                                            <div class="d-flex">
                                                <div class="carousel-inner">
                                                    @php
                                                        // 27
                                                        $loop = floor(count($sanPham) / 4);
                                                        $countSP = 1;
                                                        $break = 0;
                                                        $current = 0;
                                                        $skip = 0;

                                                    @endphp
                                                    @for ($i = 0; $i < $countSlide; $i++)
                                                        @if ($i == 0)
                                                            @php
                                                                $current = 0;

                                                            @endphp
                                                            <div class="carousel-item active" style="width:100%">
                                                                <div class="row">
                                                                    {{--  --}}
                                                                    @foreach ($sanPham as $CN)
                                                                        {{-- Filter thể loại --}}
                                                                        @if ($CN->maTLC == $TLC->maTLC)
                                                                            @if ($skip > $current)
                                                                                @php
                                                                                    $current++;
                                                                                @endphp
                                                                                {{-- Bỏ qua - Skip sản phẩm đã in --}}
                                                                            @else
                                                                                @if ($countSP % 5 !== 0)
                                                                                    @php
                                                                                        $countSP++;
                                                                                        $current++;
                                                                                        $skip++;
                                                                                    @endphp
                                                                                    {{-- In sản phẩm ở đây --}}
                                                                                    <div class="carousel-promo-item col-md-3 "
                                                                                        onmouseover=""
                                                                                        {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}}
                                                                                        style=" padding: 10px">
                                                                                        <div class="col mb-5">
                                                                                            <div class="card product-item"
                                                                                                style="height: 440px;width:260px">
                                                                                                <!-- Thẻ sale trên đầu -->
                                                                                                <div class="badge bg-dark text-white position-absolute"
                                                                                                    style="top: 0.5rem; right: 0.5rem">
                                                                                                    Sale!
                                                                                                </div>
                                                                                                {{-- Overlay hiển thị chi tiết sau khi hover --}}
                                                                                                <div
                                                                                                    class="product-overlay">
                                                                                                    <div
                                                                                                        class="text-center">
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
                                                                                                            Core:
                                                                                                            I9-10925
                                                                                                            4.25Ghz-5.1Ghz<br>
                                                                                                            Ram:
                                                                                                            16GB<br>
                                                                                                            SSD:
                                                                                                            512GB<br>
                                                                                                            PSU:
                                                                                                            550W<br>
                                                                                                            Card:
                                                                                                            RTX3080<br>
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
                                                                                                        @php
                                                                                                            $reducedMoneyPercent = $CN->giamGia;
                                                                                                            $reducedMoneyFlat = 0;
                                                                                                        @endphp
                                                                                                        @foreach ($productPromotion as $PP)
                                                                                                            @if ($PP->maSP == $CN->maSP)
                                                                                                                @php
                                                                                                                    if ($PP->kichHoat == 1) {
                                                                                                                        $ten = $PP->tenVoucher;
                                                                                                                        if ($PP->giaTri >= 0 && $PP->giaTri <= 100) {
                                                                                                                            $reducedMoneyPercent += $PP->giaTri;
                                                                                                                        } elseif ($PP->giaTri > 100) {
                                                                                                                            $reducedMoneyFlat += $PP->giaTri;
                                                                                                                        }
                                                                                                                    }
                                                                                                                @endphp
                                                                                                            @endif
                                                                                                        @endforeach

                                                                                                        <!-- Giá sản phẩm -->
                                                                                                        <span
                                                                                                            class="text-decoration-line-through text-danger">{{ number_format($CN->giaSP) }}
                                                                                                            VND</span>
                                                                                                        <br>
                                                                                                        <span>{{ number_format($CN->giaSP - $reducedMoneyFlat - ($CN->giaSP * $reducedMoneyPercent) / 100) }}
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
                                                                                                                Liên hệ
                                                                                                                ngay
                                                                                                            @else
                                                                                                                <button
                                                                                                                    class="btn btn-outline-success text-left"
                                                                                                                    href="{{ route('product.show', $CN->maSP) }}"
                                                                                                                    style="background-color: navy;padding-top: 3px;height:65%">
                                                                                                                    Còn
                                                                                                                    hàng
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
                                                                                                            <input
                                                                                                                type="hidden"
                                                                                                                value="{{ $reducedMoneyFlat }}"
                                                                                                                name="reduceFlat">
                                                                                                            <input
                                                                                                                type="hidden"
                                                                                                                value="{{ $reducedMoneyPercent }}"
                                                                                                                name="reducePercent">
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
                                                                                    <br>
                                                                                @else
                                                                                    @php
                                                                                        $countSP++;
                                                                                        break;
                                                                                    @endphp
                                                                                    {{-- Đạt giới hạn - Thoát vòng lặp --}}
                                                                                @endif
                                                                            @endif
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        @else
                                                            @php
                                                                $current = 0;

                                                            @endphp
                                                            <div class="carousel-item " style="width:100%">
                                                                <div class="row">
                                                                    {{--  --}}
                                                                    @foreach ($sanPham as $CN)
                                                                        @if ($CN->maTLC == $TLC->maTLC)
                                                                            @if ($skip > $current)
                                                                                @php
                                                                                    $current++;
                                                                                @endphp
                                                                                {{-- Bỏ qua - Skip sản phẩm đã in --}}
                                                                            @else
                                                                                @if ($countSP % 5 !== 0)
                                                                                    @php
                                                                                        $countSP++;
                                                                                        $current++;
                                                                                        $skip++;
                                                                                    @endphp
                                                                                    {{-- In sản phẩm ở đây --}}
                                                                                    <div class="carousel-promo-item col-md-3 "
                                                                                        onmouseover=""
                                                                                        {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}}
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
                                                                                                <div
                                                                                                    class="product-overlay">
                                                                                                    <div
                                                                                                        class="text-center">
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
                                                                                                            Core:
                                                                                                            I9-10925
                                                                                                            4.25Ghz-5.1Ghz<br>
                                                                                                            Ram:
                                                                                                            16GB<br>
                                                                                                            SSD:
                                                                                                            512GB<br>
                                                                                                            PSU:
                                                                                                            550W<br>
                                                                                                            Card:
                                                                                                            RTX3080<br>
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
                                                                                                        @php
                                                                                                            $reducedMoneyPercent = $CN->giamGia;
                                                                                                            $reducedMoneyFlat = 0;
                                                                                                        @endphp
                                                                                                        @foreach ($productPromotion as $PP)
                                                                                                            @if ($PP->maSP == $CN->maSP)
                                                                                                                @php
                                                                                                                    if ($PP->kichHoat == 1) {
                                                                                                                        $ten = $PP->tenVoucher;
                                                                                                                        if ($PP->giaTri >= 0 && $PP->giaTri <= 100) {
                                                                                                                            $reducedMoneyPercent += $PP->giaTri;
                                                                                                                        } elseif ($PP->giaTri > 100) {
                                                                                                                            $reducedMoneyFlat += $PP->giaTri;
                                                                                                                        }
                                                                                                                    }
                                                                                                                @endphp
                                                                                                            @endif
                                                                                                        @endforeach

                                                                                                        <!-- Giá sản phẩm -->
                                                                                                        <span
                                                                                                            class="text-decoration-line-through text-danger">{{ number_format($CN->giaSP) }}
                                                                                                            VND</span>
                                                                                                        <br>
                                                                                                        <span>{{ number_format($CN->giaSP - $reducedMoneyFlat - ($CN->giaSP * $reducedMoneyPercent) / 100) }}
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
                                                                                                                Liên hệ
                                                                                                                ngay
                                                                                                            @else
                                                                                                                <button
                                                                                                                    class="btn btn-outline-success text-left"
                                                                                                                    href="{{ route('product.show', $CN->maSP) }}"
                                                                                                                    style="background-color: navy;padding-top: 3px;height:65%">
                                                                                                                    Còn
                                                                                                                    hàng
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
                                                                                                            <input
                                                                                                                type="hidden"
                                                                                                                value="{{ $reducedMoneyFlat }}"
                                                                                                                name="reduceFlat">
                                                                                                            <input
                                                                                                                type="hidden"
                                                                                                                value="{{ $reducedMoneyPercent }}"
                                                                                                                name="reducePercent">
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
                                                                                    <br>
                                                                                @else
                                                                                    @php
                                                                                        $countSP++;
                                                                                        break;
                                                                                    @endphp
                                                                                    {{-- Đạt giới hạn - Thoát vòng lặp --}}
                                                                                @endif
                                                                            @endif
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endfor




                                                </div>
                                            </div>
                                            {{-- Kết thúc - Vật phẩm bên trong slide --}}

                                        </div>
                                        {{-- Nút điều khiển slide --}}
                                        <div>
                                            <a class="carousel-control-prev"
                                                href="#carouselExampleIndicators{{ $TLC->maTLC }}" role="button"
                                                data-slide="prev" style="z-index: 1">
                                                {{-- <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span> --}}
                                                {{-- <span class="sr-only">Previous</span> --}}

                                                <i class=" fa fa-chevron-left text-primary"
                                                    style="font-size: 42px;padding-right: 70px;transform: scale(2, 5.5);"></i>
                                            </a>
                                            <a class="carousel-control-next"
                                                href="#carouselExampleIndicators{{ $TLC->maTLC }}" role="button"
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
                    @endif
                @endforeach
                {{-- Kết thúc - PC, Laptop phiên bản mới nhất --}}



            </div>
            <!-- /.container-fluid -->
        </div>

    </div>

    <div id="dom-target" style="display: none;">
        {{-- @foreach ($computerNew1 as $CN)
            <div id="CN-maSP">{{ $CN->maSP }}</div>
            <div id="CN-tenSP">{{ $CN->tenSP }}</div>
            <div id="CN-giaSP">{{ $CN->giaSP }}</div>
            <div id="CN-baoHanhSP">2 years</div>
        @endforeach --}}

    </div>
    <!-- End of Page Wrapper -->
    @include('Customer.Layout.Common.bottom_script')
    <script>
        <?php if(session()->has('unknownError')){ ?>
        alert('{{ session()->get('unknownError') }}')
        <?php } ?>
    </script>
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
