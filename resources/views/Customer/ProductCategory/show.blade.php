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

            <!-- Content của trang -->
            <div class="container-fluid" style="padding-top: 60px">
                <div class="grid">
                    <div class="row">
                        {{-- Lọc sản phẩm --}}
                        <div class="col-md-2 bg-light " style="margin-top:10px">
                            <div class="col-md-12 text-center padding-top-10 text-bold text-danger">
                                <h4>Lọc sản phẩm</h4>
                            </div>
                            {{-- --------- --}}
                            <div class="col-md-12 text-center text-danger">
                                <hr class="border-red">
                                <h5>Nhà sản xuất CH</h5>
                                <hr class="border-red">
                            </div>
                            {{-- Chọn hãng --}}
                            <div class="col-md-12">
                                <ul>
                                    @foreach ($listNhaSanXuat as $NSX)
                                        <a class=" text-bold " style="text-decoration: none"
                                            href="{{ route('manufacturerCustomer.show', $NSX->maNSX) }}">
                                            <div class="text-dark">
                                                <li>{{ $NSX->tenNSX }}</li>

                                            </div>
                                        </a>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="col-md-12 text-center text-danger">
                                <hr class="border-red">
                                <h5>Giá tiêu dùng</h5>
                                <hr class="border-red">
                            </div>

                            {{-- Khoảng giá --}}

                            <div class="col-md-12">
                                <form
                                    action="{{ route('categoryCustomer.show', session()->get('currentCategory')) }}">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-bold text-danger">Từ</div>
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMin2" value="10000000">10 triệu<br>
                                            </div>
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMin2" value="20000000">20 triệu<br>
                                            </div>
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMin2" value="30000000">30 triệu<br>
                                            </div>
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMin2" value="40000000">40 triệu<br>
                                            </div>
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMin2" value="50000000">50 triệu<br>
                                            </div>
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMin2" value="75000000">75 triệu<br>
                                            </div>
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMin2" value="100000000">100 triệu<br>
                                            </div>
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMin2" value="200000000">200 triệu<br>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-bold text-danger">Đến</div>
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMax2" value="10000000">10 triệu<br>
                                            </div>
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMax2" value="20000000">20 triệu<br>
                                            </div>
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMax2" value="30000000">30 triệu<br>
                                            </div>
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMax2" value="40000000">40 triệu<br>
                                            </div>
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMax2" value="50000000">50 triệu<br>
                                            </div>
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMax2" value="75000000">75 triệu<br>
                                            </div>
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMax2" value="100000000">100 triệu<br>
                                            </div>
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMax2" value="200000000">200 triệu<br>
                                            </div>
                                        </div>
                                    </div>
                                    Giá từ
                                    <input type="number" name="priceMin"
                                        value="{{ session()->get('currentPriceMin') }}">
                                    Giá đến
                                    @if (session()->get('currentPriceMax') == 10000000000)
                                        <input type="number" name="priceMax">
                                    @else
                                        <input type="number" name="priceMax"
                                            value="{{ session()->get('currentPriceMax') }}">
                                    @endif
                                    <div class="text-center padding-top-10">
                                        <button class="btn btn-danger">Lọc giá</button>
                                    </div>
                                </form>
                            </div>

                            {{-- --------- --}}
                            <div class="col-md-12 text-center text-danger">
                                <hr class="border-red">
                                <h5>Nhu cầu sử dụng</h5>
                                <hr class="border-red">
                            </div>

                            {{-- Nhu cầu --}}
                            <div class="col-md-12">
                                <ul>
                                    @foreach ($listTheLoai as $TL)
                                        <a class=" text-bold " style="text-decoration: none"
                                            href="{{ route('categoryCustomer.show', $TL->maTLC) }}">
                                            <div class="text-dark">
                                                <li>{{ $TL->tenTLC }}</li>
                                            </div>

                                        </a>
                                    @endforeach
                                </ul>
                            </div>

                            {{-- --------- --}}
                            <div class="col-md-12 text-center text-danger">
                                <hr class="border-red">
                                <h5>CPU</h5>
                                <hr class="border-red">
                            </div>

                            {{-- --------- --}}
                            <div class="col-md-12 text-center text-danger">
                                <hr class="border-red">
                                <h5>RAM</h5>
                                <hr class="border-red">
                            </div>


                            {{-- --------- --}}
                            <div class="col-md-12 ">
                                <hr class="border-red">
                            </div>
                        </div>
                        {{-- Sản phẩm --}}
                        <div class="col-md-10">
                            <div class="row">
                                @foreach ($listSanPham as $CN)
                                    <div class="carousel-promo-item col-md-3 " onmouseover="" {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}}
                                        style=" padding: 10px">
                                        <div class="col mb-5">
                                            <div class="card product-item" style="height: 450px;width:260px">
                                                <!-- Thẻ sale trên đầu -->
                                                <div class="badge bg-dark text-white position-absolute"
                                                    style="top: 0.5rem; right: 0.5rem">
                                                    Sale!
                                                </div>
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
                                                            <a href="{{ route('product.show', $CN->maSP) }}">
                                                                <img class="card-img-top hide-from-work"
                                                                    style="height:240px ; width:260px ; border: 1px solid lightgray"
                                                                    src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                    id="{{ $CN->maSP }}" alt="..." />
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
                                                        <h5 class="fw-bolder" style="font-size:0.9em">
                                                            @php
                                                                $find = '(';
                                                                $positionOfOpenP = strpos($CN->tenSP, $find);
                                                                $tenSP = strlen($CN->tenSP) > 40 ? substr($CN->tenSP, 0, $positionOfOpenP) . '' : $CN->tenSP;
                                                            @endphp
                                                            <a class="link-white"
                                                                href="{{ route('product.show', $CN->maSP) }}">{{ $tenSP }}</a>

                                                        </h5>

                                                        <!-- Giá sản phẩm -->
                                                        <span class="">{{ number_format($CN->giaSP) }}
                                                            VND</span>
                                                    </div>
                                                </div>
                                                <!-- Hành động của sản phẩm-->
                                                <div class="card-footer border-top-0 bg-dar d-flex"
                                                    style="width: 100%;background-color: black;">
                                                    <a class="btn btn-outline-success text-left" href="#"
                                                        style="background-color: navy;padding-top: 3px;height:65%">Còn
                                                        hàng</a>

                                                    <form action="{{ route('cart.store') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" value="{{ $CN->maSP }}" name="id">
                                                        <input type="hidden" value="{{ $tenSP }}" name="name">
                                                        <input type="hidden" value="{{ $CN->giaSP }}" name="price">
                                                        <input type="hidden" value="{{ $tempImg }}" name="image">
                                                        <input type="hidden" value="1" name="quantity">
                                                        <button class="btn btn-outline-light  text-right"
                                                            style="background-color: crimson"><i
                                                                class="fa fa-shopping-cart"></i></button>
                                                    </form>
                                                </div>


                                            </div>

                                        </div>

                                    </div>
                                @endforeach
                            </div>
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
