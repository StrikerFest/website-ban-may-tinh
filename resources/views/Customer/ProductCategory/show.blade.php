<html lang="en">

<head>
    @include('Customer.Layout.Common.meta')
    <script>
        funtion myFunc() {
            alert('ASS');
            // const params = new Proxy(new URLSearchParams(window.location.search), {
            //     get: (searchParams, prop) => searchParams.get(prop),
            // });
            // // Get the value of "some_key" in eg "https://example.com/?some_key=some_value"
            // let value = params.theLoaiCha; // "some_value"

            // console.log('::8' + value);
        }
    </script>
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
                        <div class="col-md-3 bg-light " style="margin-top:10px;margin-right:20px;margin-left:20px">
                            <div class="col-md-12 text-center padding-top-10 text-bold text-danger">
                                <h4>Lọc sản phẩm</h4>
                                <form action="{{ route('categoryCustomer.show', 'null') }}">
                                    <input type="hidden" name="theLoaiCha" value="{{ $theLoaiChaCate }}">
                                    <input type="hidden" name="theLoaiCon" value="{{ null }}">
                                    <input type="hidden" name="priceMin" value="{{ 0 }}">
                                    <input type="hidden" name="priceMax" value="{{ 10000000000 }}">
                                    <input type="hidden" name="nhaSanXuat" value="{{ null }}">
                                    <button class="btn btn-danger">
                                        Hiển thị lại tất cả
                                    </button>
                                </form>
                            </div>
                            {{-- --------- --}}
                            <div class="col-md-12 text-center  text-danger">
                                <hr class="border-red">
                                <h5>Nhà sản xuất CH</h5>
                                <hr class="border-red">
                            </div>
                            {{-- Chọn hãng --}}
                            <div class="col-md-12" style="font-size: 0.9em;color: black">
                                <ul>
                                    <div class="row">
                                        @foreach ($listNhaSanXuat as $NSX)
                                            {{-- <a class=" text-bold " style="text-decoration: none"
                                            href="{{ route('categoryCustomer.show', $NSX->maNSX) }}">
                                            <div class="text-dark">
                                                <li>{{ $NSX->tenNSX }}</li>

                                            </div>
                                        </a> --}}
                                            <div class="col-6">
                                                <form action="{{ route('categoryCustomer.show', 'null') }}">
                                                    <input type="hidden" name="theLoaiCha"
                                                        value="{{ $theLoaiChaCate }}">
                                                    <input type="hidden" name="theLoaiCon"
                                                        value="{{ $theLoaiConCate }}">
                                                    <input type="hidden" name="priceMin"
                                                        value="{{ session()->get('currentPriceMin') }}">
                                                    <input type="hidden" name="priceMax"
                                                        value="{{ session()->get('currentPriceMax') }}">
                                                    <input type="hidden" name="nhaSanXuat"
                                                        value="{{ $NSX->maNSX }}">
                                                    @if ($NSX->maNSX == $nhaSanXuatCate)
                                                        <button class=" text-center btn "
                                                            style="text-decoration: none; padding:0;list-style: none">
                                                            <div
                                                                class="text-light bg-danger  rounded padding-left-5 padding-right-5">
                                                                <li>{{ $NSX->tenNSX }}</li>
                                                            </div>
                                                        </button>
                                                    @else
                                                        <button class=" text- btn"
                                                            style="text-decoration: none; padding:0;list-style: none">
                                                            <div class="text-dark">
                                                                <li>{{ $NSX->tenNSX }}</li>
                                                            </div>
                                                        </button>
                                                    @endif
                                                </form>
                                            </div>
                                        @endforeach
                                    </div>
                                </ul>
                            </div>

                            <div class="col-md-12 text-center text-danger">
                                <hr class="border-red">
                                <h5>Giá tiêu dùng</h5>
                                <hr class="border-red">
                            </div>

                            {{-- Khoảng giá --}}

                            <div class="col-md-12" style="font-size: 0.9em;color: black">
                                <form action="{{ route('categoryCustomer.show', 'null') }}">
                                    @isset($theLoaiChaCate)
                                        <input type="hidden" name="theLoaiCha" value="{{ $theLoaiChaCate }}">
                                    @endisset
                                    @isset($theLoaiConCate)
                                        <input type="hidden" name="theLoaiCon" value="{{ $theLoaiConCate }}">
                                    @endisset
                                    @isset($nhaSanXuatCate)
                                        <input type="hidden" name="nhaSanXuat" value="{{ $nhaSanXuatCate }}">
                                    @endisset
                                    @isset($search)
                                        <input type="hidden" name="search" value="{{ $search }}">
                                    @endisset
                                    <div class="row">
                                        <div class="col-md-6 text-center ">
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
                                            {{-- <div class="padding-bottom-5">
                                                <input type="radio" name="priceMin2" value="40000000">40 triệu<br>
                                            </div> --}}
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMin2" value="50000000">50 triệu<br>
                                            </div>
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMin2" value="75000000">75 triệu<br>
                                            </div>
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMin2" value="100000000">100
                                                triệu<br>
                                            </div>
                                            {{-- <div class="padding-bottom-5">
                                                <input type="radio" name="priceMin2" value="200000000">200
                                                triệu<br>
                                            </div> --}}
                                        </div>
                                        <div class="col-md-6 text-center ">
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
                                            {{-- <div class="padding-bottom-5">
                                                <input type="radio" name="priceMax2" value="40000000">40 triệu<br>
                                            </div> --}}
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMax2" value="50000000">50 triệu<br>
                                            </div>
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMax2" value="75000000">75 triệu<br>
                                            </div>
                                            <div class="padding-bottom-5">
                                                <input type="radio" name="priceMax2" value="100000000">100
                                                triệu<br>
                                            </div>
                                            {{-- <div class="padding-bottom-5">
                                                <input type="radio" name="priceMax2" value="200000000">200
                                                triệu<br>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        Giá từ
                                        <br>
                                        <input type="number" name="priceMin"
                                            value="{{ session()->get('currentPriceMin') }}">
                                        <br>
                                        Giá đến
                                        <br>
                                        @if (session()->get('currentPriceMax') == 10000000000)
                                            <input type="number" name="priceMax">
                                        @else
                                            <input type="number" name="priceMax"
                                                value="{{ session()->get('currentPriceMax') }}">
                                        @endif
                                    </div>
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
                            <div class="col-md-12" style="font-size: 0.9em;color: black">
                                <ul>
                                    @foreach ($listTheLoai as $TL)
                                        {{-- <a class=" text-bold " style="text-decoration: none"
                                            href="{{ route('categoryCustomer.show', $TL->maTLC) }}">
                                            <div class="text-dark">
                                                <li>{{ $TL->tenTLC }}</li>
                                            </div>

                                        </a> --}}
                                        <form action="{{ route('categoryCustomer.show', $TL->maTLC) }}">
                                            @isset($theLoaiChaCate)
                                                <input type="hidden" name="theLoaiCha" value="{{ $theLoaiChaCate }}">
                                            @endisset
                                            @isset($nhaSanXuatCate)
                                                <input type="hidden" name="nhaSanXuat" value="{{ $nhaSanXuatCate }}">
                                            @endisset
                                            <input type="hidden" name="theLoaiCon" value="{{ $TL->maTLC }}">
                                            <input type="hidden" name="priceMin"
                                                value="{{ session()->get('currentPriceMin') }}">

                                            <input type="hidden" name="priceMax"
                                                value="{{ session()->get('currentPriceMax') }}">
                                            @if ($TL->maTLC == $theLoaiConCate)
                                                <button class=" text- btn "
                                                    style="text-decoration: none;list-style: none;padding:0">
                                                    <div
                                                        class="text-light bg-danger rounded padding-left-5 padding-right-5">
                                                        <li>{{ $TL->tenTLC }}</li>
                                                    </div>
                                                </button>
                                            @else
                                                <button class=" text- btn"
                                                    style="text-decoration: none;list-style: none;padding:0">
                                                    <div class="text-dark">
                                                        <li>{{ $TL->tenTLC }}</li>
                                                    </div>
                                                </button>
                                            @endif
                                        </form>
                                    @endforeach
                                </ul>
                            </div>
                            @php
                                $countTS = 0;
                            @endphp
                            {{-- Thông số --}}
                            @foreach ($listThongSo as $TS)
                                <div class="col-md-12 text-center text-danger">
                                    <hr class="border-red">
                                    <h5>{{ $TS->tenTS }}</h5>
                                    @foreach ($listSanPhamThongSo as $SPTS)
                                        @if ($SPTS->maTS == $TS->maTS)
                                            @php
                                                $countTS = 0;
                                            @endphp
                                            {{-- <input type="checkbox">{{$SPTS->giaTri}}<br> --}}
                                            <form action="{{ route('categoryCustomer.show', 'null') }}">
                                                @isset($theLoaiChaCate)
                                                    <input type="hidden" name="theLoaiCha"
                                                        value="{{ $theLoaiChaCate }}">
                                                @endisset
                                                @isset($theLoaiChaCate)
                                                    <input type="hidden" name="theLoaiCon"
                                                        value="{{ $theLoaiConCate }}">
                                                @endisset
                                                {{-- Không rỗng --}}
                                                @php
                                                    $sizeTS = sizeof($thongSoCate);
                                                @endphp
                                                @if ($sizeTS > 1)
                                                    @foreach ($thongSoCate as $key => $value)
                                                        {{-- Thông số thứ 2 trở đi --}}
                                                        @if ($countTS !== 0)
                                                            <input type="hidden" name="ass2nd">
                                                            <input type="hidden" name="{{ 'thongSo' . $key }}"
                                                                value="{{ $key }}">
                                                            <input type="hidden" name="{{ 'giaTriThongSo' . $key }}"
                                                                value="{{ $value }}">
                                                            {{-- Thông số đầu tiên --}}
                                                        @else
                                                            @php
                                                                $countTS++;
                                                            @endphp
                                                            <input type="hidden" name="ass1st">
                                                            <input type="hidden" name="thongSoDau"
                                                                value="{{ $key }}">
                                                            <input type="hidden" name="giaTriThongSoDau"
                                                                value="{{ $value }}">
                                                        @endif
                                                    @endforeach
                                                    <input type="hidden" name="{{ 'thongSo' . $SPTS->maTS }}"
                                                        value="{{ $SPTS->maTS }}">
                                                    <input type="hidden" name="{{ 'giaTriThongSo' . $SPTS->maTS }}"
                                                        value="{{ $SPTS->giaTri }}">
                                                @elseif($sizeTS == 0)
                                                    {{-- <input type="hidden" name="{{ 'thongSo' . $SPTS->maTS }}"
                                                        value="{{ $SPTS->maTS }}">
                                                    <input type="hidden" name="{{ 'giaTriThongSo' . $SPTS->maTS }}"
                                                        value="{{ $SPTS->giaTri }}"> --}}
                                                    <input type="hidden" name="ass">
                                                    <input type="hidden" name="thongSoDau"
                                                        value="{{ $SPTS->maTS }}">
                                                    <input type="hidden" name="giaTriThongSoDau"
                                                        value="{{ $SPTS->giaTri }}">
                                                @elseif($sizeTS == 1)
                                                    @foreach ($thongSoCate as $key => $value)
                                                        <input type="hidden" name="ass1st">
                                                        <input type="hidden" name="thongSoDau"
                                                            value="{{ $key }}">
                                                        <input type="hidden" name="giaTriThongSoDau"
                                                            value="{{ $value }}">
                                                    @endforeach
                                                    <input type="hidden" name="{{ 'thongSo' . $SPTS->maTS }}"
                                                        value="{{ $SPTS->maTS }}">
                                                    <input type="hidden" name="{{ 'giaTriThongSo' . $SPTS->maTS }}"
                                                        value="{{ $SPTS->giaTri }}">
                                                @endif


                                                @isset($nhaSanXuatCate)
                                                    <input type="hidden" name="nhaSanXuat"
                                                        value="{{ $nhaSanXuatCate }}">
                                                @endisset
                                                @isset($priceMinCate)
                                                    <input type="hidden" name="priceMin" value="{{ $priceMinCate }}">
                                                @endisset
                                                @isset($priceMaxCate)
                                                    <input type="hidden" name="priceMax" value="{{ $priceMaxCate }}">
                                                @endisset
                                                @if ($thongSoCate[$SPTS->maTS] ?? null)
                                                    @if ($SPTS->giaTri == $thongSoCate[$SPTS->maTS])
                                                        <button class=" text- btn "
                                                            style="text-decoration: none;list-style: none;padding:0">
                                                            <div
                                                                class="text-light bg-danger rounded padding-left-5 padding-right-5">
                                                                <li>{{ $SPTS->giaTri }}</li>
                                                            </div>
                                                        </button>
                                                    @endif
                                                @endif
                                                <button class=" text- btn"
                                                    style="text-decoration: none;list-style: none;padding:0">
                                                    <div class="text-dark">
                                                        <li>{{ $SPTS->giaTri }}</li>
                                                    </div>
                                                </button>


                                            </form>
                                        @endif
                                    @endforeach
                                    <hr class="border-red">
                                </div>
                            @endforeach



                            {{-- --------- --}}
                            <div class="col-md-12 ">
                                <hr class="border-red">
                            </div>
                        </div>

                        {{-- Sản phẩm --}}
                        <div class="col-md-8">
                            <div class="row">
                                @foreach ($listSanPham as $CN)
                                    <div class="carousel-promo-item col-md-3 " onmouseover="" {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}}
                                        style=" padding: 10px">
                                        <div class="">
                                            <div class="card product-item" style="height: 400px;width:220px">
                                                <!-- Thẻ sale trên đầu -->
                                                <div class="badge bg-dark text-white position-absolute"
                                                    style="top: 0.5rem; right: 0.5rem">
                                                    Sale!
                                                </div>
                                                @php
                                                    $tempImg = 'STOCK.jpg';
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
                                                                <img class="card-img-top hide-from-work -10"
                                                                    style="height:220px ; width:220px ; border: 1px solid gray"
                                                                    src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                    id="{{ $CN->maSP }}" alt="..." />
                                                            </a>
                                                            @php
                                                                $count = 1;
                                                            @endphp
                                                        @endif
                                                    @endif
                                                @endforeach
                                                @if ($tempImg == 'STOCK.jpg')
                                                    <img class="card-img-top "
                                                        style="height:220px ; width:220px ; border: 1px solid lightgray"
                                                        src="{{ asset('assets/img/' . $tempImg) }}" alt="..." />
                                                @endif
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
                                                    @if ($CN->soLuong <= 0)
                                                        <button class="btn btn-outline-danger text-left"
                                                            href="{{ route('product.show', $CN->maSP) }}"
                                                            style="background-color: navy;padding-bottom: 10px;height: 75%">
                                                            Hết hàng
                                                        @elseif($CN->soLuong > 0 && $CN->soLuong <= 5)
                                                            <button class="btn btn-outline-success text-left"
                                                                href="{{ route('product.show', $CN->maSP) }}"
                                                                style="background-color: navy;padding-bottom: 10px;height: 75%">
                                                                Liên hệ ngay
                                                            @else
                                                                <button class="btn btn-outline-success text-left"
                                                                    href="{{ route('product.show', $CN->maSP) }}"
                                                                    style="background-color: ;padding-top: 3px;height:65%">
                                                                    Còn hàng
                                                    @endif
                                                    </button>

                                                    @if ($CN->soLuong <= 0)
                                                    @elseif($CN->soLuong > 0 && $CN->soLuong <= 5)
                                                    @else
                                                        <form action="{{ route('cart.store') }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $CN->maSP }}"
                                                                name="id">
                                                            <input type="hidden" value="{{ $tenSP }}"
                                                                name="name">
                                                            <input type="hidden" value="{{ $CN->giaSP }}"
                                                                name="price">
                                                            <input type="hidden" value="{{ $tempImg }}"
                                                                name="image">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <button class="btn btn-outline-light  text-right"
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
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // alert("Ready!");
            const params = new Proxy(new URLSearchParams(window.location.search), {
                get: (searchParams, prop) => searchParams.get(prop),
            });
            // Get the value of "some_key" in eg "https://example.com/?some_key=some_value"
            let value = params.theLoaiCha; // "some_value"
            console.log(params);
            console.log('::8-' + value);
        }, false);
    </script>
    <!-- End of Page Wrapper -->
    @include('Customer.Layout.Common.bottom_script')

</body>

</html>
