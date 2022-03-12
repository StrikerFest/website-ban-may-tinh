<html lang="en">

<head>
    @include('Customer.Layout.Common.meta')
</head>

<body>
    <!-- Wrapper - Cả trang -->
    <div id="product-test">
        @foreach ($computerNew as $computerNew)
            @if ($computerNew->ma)
            @endif
            <div id="product-test-name" style="background-color: red"></div>
            <div id="product-test-price" style="background-color: blue"></div>
            <div id="product-test-warranty" style="background-color: green"></div>
            <div id="product-test-spec"></div>
        @endforeach
    </div>

    <div id="wrapper">

        @include('Customer.Layout.Common.header')

        <!-- Wrapper - Chỉ riêng phần nội dung - Không bao gồm navbar -->
        <div id="content-wrapper" class="d-flex flex-row">
            @include('Customer.Layout.Common.side_nav_menu')

            <!-- Content của trang -->
            <div class="container-fluid" style="position:relative;top: 70px">


                {{-- Slide quảng cáo --}}
                <div>
                    <div id="carouselExampleIndicators" class="carousel slide carousel-container-custom"
                        data-ride="carousel" data-pause="hover" data-interval="5000">
                        {{-- Hiển thị vị trí slide --}}
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        {{-- Kết thúc - Hiển thị vị trí slide --}}
                        {{-- Vật phẩm bên trong slide --}}
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block center-custom carousel-item-custom"
                                    src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17f2998a76c%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17f2998a76c%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9140625%22%20y%3D%22217.7%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                    alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block center-custom carousel-item-custom"
                                    src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17f2998a76d%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17f2998a76d%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3125%22%20y%3D%22217.7%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                    alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block center-custom carousel-item-custom"
                                    src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17f2998a76e%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17f2998a76e%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22276.9921875%22%20y%3D%22217.7%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                    alt="Third slide">
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
                {{-- Kết thúc - Slide quảng cảo --}}

                <br>

                {{-- Vật phẩm dưới slide quảng cáo --}}
                <div class="card shadow mb-4 bg-gradient-  background-none">
                    <div class="card-body padding-0">
                        <div class="table-responsive d-flex justify-content-center">
                            {{-- Nội dung 1 --}}
                            <div class="carousel-promo-item">
                                <div class=" shadow mb-4 ">
                                    {{-- Label nội dung --}}
                                    <div class="card-header py-3 red-glass">
                                        <h6 class="m-0 font-weight-bold text-light carousel-promo-item-label">Quảng cáo
                                            máy tính BKCOMe</h6>
                                    </div>
                                    {{-- Vật phẩm trong nội dung --}}
                                    <div class="card-body padding-10 black-glass">
                                        <div class="table-responsive center-custom">
                                            <img class="carousel-promo-item-image-size"
                                                src="https://w7.pngwing.com/pngs/257/925/png-transparent-desktop-computers-personal-computer-computer-icons-computer-monitors-computer-rectangle-computer-computer-monitor-accessory-thumbnail.png">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Nội dung 2 --}}
                            <div class="carousel-promo-item">
                                <div class=" shadow mb-4 ">
                                    {{-- Label nội dung --}}
                                    <div class="card-header py-3 red-glass">
                                        <h6 class="m-0 font-weight-bold text-light carousel-promo-item-label">Quảng cáo
                                            máy tính BKCOMe</h6>
                                    </div>
                                    {{-- Vật phẩm trong nội dung --}}
                                    <div class="card-body padding-10 black-glass">
                                        <div class="table-responsive center-custom">
                                            <img class="carousel-promo-item-image-size"
                                                src="https://w7.pngwing.com/pngs/257/925/png-transparent-desktop-computers-personal-computer-computer-icons-computer-monitors-computer-rectangle-computer-computer-monitor-accessory-thumbnail.png">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Nội dung 3 --}}
                            <div class="carousel-promo-item">
                                <div class=" shadow mb-4 ">
                                    {{-- Label nội dung --}}
                                    <div class="card-header py-3 red-glass">
                                        <h6 class="m-0 font-weight-bold text-light carousel-promo-item-label">Quảng cáo
                                            máy tính BKCOMe</h6>
                                    </div>
                                    {{-- Vật phẩm trong nội dung --}}
                                    <div class="card-body padding-10 black-glass">
                                        <div class="table-responsive center-custom">
                                            <img class="carousel-promo-item-image-size"
                                                src="https://w7.pngwing.com/pngs/257/925/png-transparent-desktop-computers-personal-computer-computer-icons-computer-monitors-computer-rectangle-computer-computer-monitor-accessory-thumbnail.png">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Nội dung 4 --}}
                            <div class="carousel-promo-item">
                                <div class=" shadow mb-4 ">
                                    {{-- Label nội dung --}}
                                    <div class="card-header py-3 red-glass">
                                        <h6 class="m-0 font-weight-bold text-light carousel-promo-item-label">Quảng cáo
                                            máy tính BKCOMe</h6>
                                    </div>
                                    {{-- Vật phẩm trong nội dung --}}
                                    <div class="card-body padding-10 black-glass">
                                        <div class="table-responsive center-custom">
                                            <img class="carousel-promo-item-image-size"
                                                src="https://w7.pngwing.com/pngs/257/925/png-transparent-desktop-computers-personal-computer-computer-icons-computer-monitors-computer-rectangle-computer-computer-monitor-accessory-thumbnail.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Kết thúc - Vật phẩm dưới slide quảng cáo --}}

                {{-- Banner 1 --}}
                <div>
                    <img width="100%" src="{{ asset('assets/img/banner-store-2.jpg') }}" />
                </div>
                {{-- Kết thúc - Banner 1 --}}

                {{-- Vật phẩm danh mục 1 --}}
                <div class="card shadow mb-4 background-none" id="carouselID">
                    {{-- Label danh mục - Thay class bằng class khác --}}
                    <div class="card-header py-3 black-glass">
                        <h6 class="m-0 font-weight-bold text-light carousel-promo-item-label">PC phiên bản mới nhất</h6>
                    </div>
                    {{-- Content danh mục - Thay class bằng class khác --}}
                    <div class="card-body center-custom">
                        <div class="table-responsive d-flex">

                            <div>
                                <div id="carouselExampleIndicators2" class="carousel slide carousel-container-custom"
                                    data-ride="carousel" data-pause="hover" data-interval="5000" style="width:100%">
                                    {{-- Hiển thị vị trí slide --}}
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" class="bg-danger"
                                            data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" class="bg-danger"
                                            data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" class="bg-danger"
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
                                                                        Sale
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

                                                                    <!-- Ảnh sản phẩm-->
                                                                    @foreach ($productImage as $PI)
                                                                        @if ($PI->maSP == $CN->maSP)
                                                                            <img class="card-img-top"
                                                                                style="height:240px ; width:260px ; border: 1px solid lightgray"
                                                                                src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                                id="{{ $CN->maSP }}" alt="..." />
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
                                                                                {{ $tenSP }}
                                                                            </h5>

                                                                            <!-- Giá sản phẩm -->
                                                                            <span
                                                                                class="">{{ number_format($CN->giaSP) }}
                                                                                VND</span>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Hành động của sản phẩm-->
                                                                    <div class="card-footer border-top-0 bg-dar "
                                                                        style="width: 100%;background-color: black;">
                                                                        <a class="btn btn-outline-success mt-auto text-left"
                                                                            href="#" style="background-color: gray">Còn
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
                                        @if (sizeof($computerNew2) == 4)
                                            <div class="carousel-item" style="width:100%">
                                                <div class="row">
                                                    @foreach ($computerNew2 as $CN)
                                                        {{-- Vật phẩm 4 --}}
                                                        <div class="carousel-promo-item col-md-3" style="padding: 10px">
                                                            <div class="col mb-5">
                                                                <div class="card product-item"
                                                                    style="height: 450px;width:260px">
                                                                    <!-- Thẻ Sale -->
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
                                                                    <!-- Ảnh sản phẩm -->
                                                                    @foreach ($productImage as $PI)
                                                                        @if ($PI->maSP == $CN->maSP)
                                                                            <div>
                                                                                <img class="card-img-top"
                                                                                    id="{{ $CN->maSP }}"
                                                                                    style="height:240px ; width:260px ; border: 1px solid lightgray"
                                                                                    src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                                    alt="..." />
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                    <!-- Thông tin sản phẩm-->
                                                                    <div class="card-body p-4 bg-dark text-light">
                                                                        <div class="text-center">
                                                                            <!-- Tên sản phẩm-->
                                                                            <h5 class="fw-bolder"
                                                                                style="font-size:0.9em">
                                                                                @php
                                                                                    $find = '(';
                                                                                    $positionOfOpenP = strpos($CN->tenSP, $find);
                                                                                    $tenSP = strlen($CN->tenSP) > 40 ? substr($CN->tenSP, 0, $positionOfOpenP) . '' : $CN->tenSP;
                                                                                @endphp
                                                                                {{ $tenSP }}
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
                                        @if (sizeof($computerNew3) == 4)
                                            <div class="carousel-item " style="width:100%">
                                                <div class="row">
                                                    @foreach ($computerNew3 as $CN)
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
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button"
                                        data-slide="prev" style="z-index: 1">
                                        {{-- <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span> --}}
                                        {{-- <span class="sr-only">Previous</span> --}}

                                        <i class=" fa fa-chevron-left text-primary"
                                            style="font-size: 42px;padding-right: 70px;height:48px;transform: scale(2, 5.5);"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button"
                                        data-slide="next" style="z-index: 1">
                                        {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span> --}}

                                        <i class="fa fa-chevron-right text-primary"
                                            style="font-size: 42px;padding-left: 70px;height:48px;transform: scale(2, 5.5);"></i>

                                    </a>
                                </div>

                                {{-- Kết thúc - Nút điều khiển slide --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Kết thúc - Vật phẩm danh mục 1 --}}

                {{-- Mẫu table --}}
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- Mẫu form --}}
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Add data
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
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
        const toolbox = document.getElementById('product-test');
        const hoverObject = document.getElementsByClassName('product-item');
        toolbox.style.display = "none";
        for (let i = 0; i < hoverObject.length; i++) {
            hoverObject[i].addEventListener('mouseenter', () => {
                toolbox.style.display = "block";
            });

            hoverObject[i].addEventListener('mouseleave', () => {
                toolbox.style.display = "none";
            });

            toolbox.addEventListener('mouseenter', () => {
                toolbox.style.display = "block";
            });

            toolbox.addEventListener('mouseleave', () => {
                toolbox.style.display = "none";
            });
        }
        toolbox.style.display = "none";
    </script>
    <script>
        let circle = document.getElementById('product-test');
        let name = document.getElementById('product-test-name');
        let price = document.getElementById('product-test-price');
        let warranty = document.getElementById('product-test-warranty');
        let spec = document.getElementById('product-test-spec');

        const onMouseMove = (e) => {
            circle.style.left = (e.pageX + 100) + 'px';
            circle.style.top = e.pageY + 'px';
        }
        document.addEventListener('mousemove', onMouseMove);

        document.onmouseover = function(e) {
            console.log("ProductID:::", e.target.id);
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
            console.log("ProductID:::", e.target.id);
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
