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
                                    {{-- <input type="hidden" name="theLoaiCon" value="{{ null }}">
                                    <input type="hidden" name="priceMin" value="{{ 0 }}">
                                    <input type="hidden" name="priceMax" value="{{ 10000000000 }}">
                                    <input type="hidden" name="nhaSanXuat" value="{{ null }}"> --}}
                                    <input type="hidden" name="resetSoft" value="1">
                                    <button class="btn btn-danger">
                                        Hiển thị lại tất cả
                                    </button>
                                </form>
                            </div>
                            {{-- --------- --}}
                            <div class="col-md-12 text-center  text-dark">
                                <span style="font-size: 1.2em;font-weight: bold">Nhà sản xuất CH</span>
                            </div>
                            {{-- * Hãng --}}
                            <div class="col-md-12 pl-5" style="font-size: 0.9em;color: black">
                                <div class="row">
                                    @php
                                        $countCheck = 0;
                                    @endphp
                                    @foreach ($listNhaSanXuat as $NSX)
                                        @if ($NSX->maNSX == $nhaSanXuatCate)
                                            @php
                                                $countCheck = 1;
                                            @endphp
                                            <div class="col-12 center-custom " style="">
                                                <form action="{{ route('categoryCustomer.show', 'null') }}">
                                                    {{-- Chuyển mã nhà sản xuất --}}
                                                    <input type="hidden" name="nhaSanXuat" value="{{ $NSX->maNSX }}">
                                                    {{-- Chuyển giá min --}}
                                                    @isset($priceMinCate)
                                                        <input type="hidden" name="priceMin" value="{{ $priceMinCate }}">
                                                    @endisset
                                                    {{-- Chuyển giá max --}}
                                                    @isset($priceMaxCate)
                                                        <input type="hidden" name="priceMax" value="{{ $priceMaxCate }}">
                                                    @endisset
                                                    {{-- Chuyển thể loại cha --}}
                                                    @isset($theLoaiChaCate)
                                                        <input type="hidden" name="theLoaiCha"
                                                            value="{{ $theLoaiChaCate }}">
                                                    @endisset
                                                    {{-- Chuyển thể loại con --}}
                                                    @isset($theLoaiConCate)
                                                        <input type="hidden" name="theLoaiCon"
                                                            value="{{ $theLoaiConCate }}">
                                                    @endisset
                                                    @php
                                                        $countTS = 0;
                                                    @endphp
                                                    {{-- Lặp giá trị thông số đã được chọn - Chuyển nó --}}
                                                    @foreach ($thongSoCate as $key => $value)
                                                        {{-- Thông số thứ 2 trở đi --}}
                                                        @if ($countTS !== 0)
                                                            <input type="hidden" name="{{ 'thongSo' . $key }}"
                                                                value="{{ $key }}">
                                                            <input type="hidden" name="{{ 'giaTriThongSo' . $key }}"
                                                                value="{{ $value }}">
                                                            {{-- Thông số đầu tiên --}}
                                                        @else
                                                            @php
                                                                $countTS++;
                                                            @endphp
                                                            <input type="hidden" name="thongSoDau"
                                                                value="{{ $key }}">
                                                            <input type="hidden" name="giaTriThongSoDau"
                                                                value="{{ $value }}">
                                                        @endif
                                                    @endforeach

                                                    <input type="hidden" name="removeNSX" value="1">
                                                    <button class=" text-center btn  "
                                                        style="text-decoration: none; padding:0;list-style: none">
                                                        <div
                                                            class="text-light bg-danger  rounded padding-left-5 padding-right-5">

                                                            <li><i class="fa fa-check"></i> {{ $NSX->tenNSX }}</li>
                                                        </div>
                                                    </button>

                                                </form>
                                            </div>
                                        @endif
                                    @endforeach
                                    @if ($countCheck == 0)
                                        @foreach ($listNhaSanXuat as $NSX)
                                            <div class="col-6">
                                                <form action="{{ route('categoryCustomer.show', 'null') }}">
                                                    {{-- Chuyển mã nhà sản xuất --}}
                                                    <input type="hidden" name="nhaSanXuat"
                                                        value="{{ $NSX->maNSX }}">
                                                    {{-- Chuyển giá min --}}
                                                    @isset($priceMinCate)
                                                        <input type="hidden" name="priceMin" value="{{ $priceMinCate }}">
                                                    @endisset
                                                    {{-- Chuyển giá max --}}
                                                    @isset($priceMaxCate)
                                                        <input type="hidden" name="priceMax" value="{{ $priceMaxCate }}">
                                                    @endisset
                                                    {{-- Chuyển thể loại cha --}}
                                                    @isset($theLoaiChaCate)
                                                        <input type="hidden" name="theLoaiCha"
                                                            value="{{ $theLoaiChaCate }}">
                                                    @endisset
                                                    {{-- Chuyển thể loại con --}}
                                                    @isset($theLoaiConCate)
                                                        <input type="hidden" name="theLoaiCon"
                                                            value="{{ $theLoaiConCate }}">
                                                    @endisset
                                                    @php
                                                        $countTS = 0;
                                                    @endphp
                                                    {{-- Lặp giá trị thông số đã được chọn - Chuyển nó --}}
                                                    @foreach ($thongSoCate as $key => $value)
                                                        {{-- Thông số thứ 2 trở đi --}}
                                                        @if ($countTS !== 0)
                                                            <input type="hidden" name="{{ 'thongSo' . $key }}"
                                                                value="{{ $key }}">
                                                            <input type="hidden" name="{{ 'giaTriThongSo' . $key }}"
                                                                value="{{ $value }}">
                                                            {{-- Thông số đầu tiên --}}
                                                        @else
                                                            @php
                                                                $countTS++;
                                                            @endphp
                                                            <input type="hidden" name="thongSoDau"
                                                                value="{{ $key }}">
                                                            <input type="hidden" name="giaTriThongSoDau"
                                                                value="{{ $value }}">
                                                        @endif
                                                    @endforeach


                                                    <button class=" text-center btn "
                                                        style="text-decoration: none; padding:0;list-style: none">
                                                        <div class="text-dark">
                                                            <li><i class="fa-regular fa-square"></i>
                                                                {{ $NSX->tenNSX }}</li>
                                                        </div>
                                                    </button>

                                                </form>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>

                            <div class="col-md-12 text-center  text-dark">
                                <span style="font-size: 1.2em;font-weight: bold">Giá tiêu dùng</span>
                            </div>

                            {{-- * Khoảng giá --}}

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
                                    @php
                                        $countTS = 0;
                                    @endphp
                                    {{-- Lặp giá trị thông số đã được chọn - Chuyển nó --}}
                                    @foreach ($thongSoCate as $key => $value)
                                        {{-- Thông số thứ 2 trở đi --}}
                                        @if ($countTS !== 0)
                                            <input type="hidden" name="{{ 'thongSo' . $key }}"
                                                value="{{ $key }}">
                                            <input type="hidden" name="{{ 'giaTriThongSo' . $key }}"
                                                value="{{ $value }}">
                                            {{-- Thông số đầu tiên --}}
                                        @else
                                            @php
                                                $countTS++;
                                            @endphp
                                            <input type="hidden" name="thongSoDau" value="{{ $key }}">
                                            <input type="hidden" name="giaTriThongSoDau"
                                                value="{{ $value }}">
                                        @endif
                                    @endforeach
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
                            <div class="col-md-12 text-center  text-dark">
                                <span style="font-size: 1.2em;font-weight: bold">Nhu cầu sử dụng</span>
                            </div>
                            {{-- * Nhu cầu --}}
                            <div class="col-md-12 text-left" style="font-size: 0.9em;color: black">
                                <ul>
                                    @php
                                        $countCheck = 0;
                                    @endphp
                                    @foreach ($listTheLoai as $TL)
                                        @if ($TL->maTLC == $theLoaiConCate)
                                            @php
                                                $countCheck = 1;
                                            @endphp
                                            <form action="{{ route('categoryCustomer.show', $TL->maTLC) }}">
                                                @isset($theLoaiChaCate)
                                                    <input type="hidden" name="theLoaiCha"
                                                        value="{{ $theLoaiChaCate }}">
                                                @endisset
                                                @isset($nhaSanXuatCate)
                                                    <input type="hidden" name="nhaSanXuat"
                                                        value="{{ $nhaSanXuatCate }}">
                                                @endisset
                                                {{-- <input type="hidden" name="theLoaiCon" value="{{ $TL->maTLC }}"> --}}
                                                {{-- Chuyển giá min --}}
                                                @isset($priceMinCate)
                                                    <input type="hidden" name="priceMin" value="{{ $priceMinCate }}">
                                                @endisset
                                                {{-- Chuyển giá max --}}
                                                @isset($priceMaxCate)
                                                    <input type="hidden" name="priceMax" value="{{ $priceMaxCate }}">
                                                @endisset
                                                @php
                                                    $countTS = 0;
                                                @endphp
                                                {{-- Lặp giá trị thông số đã được chọn - Chuyển nó --}}
                                                @foreach ($thongSoCate as $key => $value)
                                                    {{-- Thông số thứ 2 trở đi --}}
                                                    @if ($countTS !== 0)
                                                        <input type="hidden" name="{{ 'thongSo' . $key }}"
                                                            value="{{ $key }}">
                                                        <input type="hidden" name="{{ 'giaTriThongSo' . $key }}"
                                                            value="{{ $value }}">
                                                        {{-- Thông số đầu tiên --}}
                                                    @else
                                                        @php
                                                            $countTS++;
                                                        @endphp
                                                        <input type="hidden" name="thongSoDau"
                                                            value="{{ $key }}">
                                                        <input type="hidden" name="giaTriThongSoDau"
                                                            value="{{ $value }}">
                                                    @endif
                                                @endforeach
                                                <input type="hidden" name="removeTLC" value="1">
                                                <button class=" text- btn "
                                                    style="text-decoration: none;list-style: none;padding:0">
                                                    <div
                                                        class="text-light bg-danger rounded padding-left-5 padding-right-5">
                                                        <li><i class="fa fa-check"></i> {{ $TL->tenTLC }}</li>
                                                    </div>
                                                </button>
                                            </form>
                                        @endif
                                    @endforeach
                                    @if ($countCheck == 0)
                                        @foreach ($listTheLoai as $TL)
                                            <form action="{{ route('categoryCustomer.show', $TL->maTLC) }}">
                                                @isset($theLoaiChaCate)
                                                    <input type="hidden" name="theLoaiCha"
                                                        value="{{ $theLoaiChaCate }}">
                                                @endisset
                                                @isset($nhaSanXuatCate)
                                                    <input type="hidden" name="nhaSanXuat"
                                                        value="{{ $nhaSanXuatCate }}">
                                                @endisset
                                                <input type="hidden" name="theLoaiCon" value="{{ $TL->maTLC }}">
                                                {{-- Chuyển giá min --}}
                                                @isset($priceMinCate)
                                                    <input type="hidden" name="priceMin" value="{{ $priceMinCate }}">
                                                @endisset
                                                {{-- Chuyển giá max --}}
                                                @isset($priceMaxCate)
                                                    <input type="hidden" name="priceMax" value="{{ $priceMaxCate }}">
                                                @endisset
                                                @php
                                                    $countTS = 0;
                                                @endphp
                                                {{-- Lặp giá trị thông số đã được chọn - Chuyển nó --}}
                                                @foreach ($thongSoCate as $key => $value)
                                                    {{-- Thông số thứ 2 trở đi --}}
                                                    @if ($countTS !== 0)
                                                        <input type="hidden" name="{{ 'thongSo' . $key }}"
                                                            value="{{ $key }}">
                                                        <input type="hidden" name="{{ 'giaTriThongSo' . $key }}"
                                                            value="{{ $value }}">
                                                        {{-- Thông số đầu tiên --}}
                                                    @else
                                                        @php
                                                            $countTS++;
                                                        @endphp
                                                        <input type="hidden" name="thongSoDau"
                                                            value="{{ $key }}">
                                                        <input type="hidden" name="giaTriThongSoDau"
                                                            value="{{ $value }}">
                                                    @endif
                                                @endforeach
                                                <button class=" text- btn"
                                                    style="text-decoration: none;list-style: none;padding:0">
                                                    <div class="text-dark">
                                                        <li><i class="fa-regular fa-square"></i> {{ $TL->tenTLC }}
                                                        </li>
                                                    </div>
                                                </button>
                                            </form>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            @php
                                $countTS = 0;
                            @endphp
                            {{-- * Thông số --}}
                            @if (count($listSanPhamThongSo) !== 0)
                                {{-- Lặp thông số --}}
                                @foreach ($listThongSo as $TS)
                                    <div class="col-md-12 text-center text-dark">
                                        <span style="font-size: 1.2em;font-weight: bold">{{ $TS->tenTS }}</span>
                                        {{-- Lặp các giá trị thông số có trong sản phẩm --}}
                                        @foreach ($listSanPhamThongSo as $SPTS)
                                            {{-- Nếu giá trị thông số có mã thông số giống thông số --}}
                                            @if ($SPTS->maTS == $TS->maTS)
                                                @php
                                                    $countTS = 0;
                                                @endphp
                                                {{-- Gửi lại vào controller --}}
                                                <form class="text-left pl-5"
                                                    action="{{ route('categoryCustomer.show', 'null') }}">
                                                    @isset($theLoaiChaCate)
                                                        <input type="hidden" name="theLoaiCha"
                                                            value="{{ $theLoaiChaCate }}">
                                                    @endisset
                                                    @isset($theLoaiConCate)
                                                        <input type="hidden" name="theLoaiCon"
                                                            value="{{ $theLoaiConCate }}">
                                                    @endisset
                                                    @php
                                                        // Lấy độ dài mảng thông số đã chọn
                                                        $sizeTS = sizeof($thongSoCate);
                                                    @endphp
                                                    {{-- Điều kiện hiển thị các giá trị thông số đã và chưa được chọn --}}
                                                    @if ($sizeTS > 1)
                                                        {{-- Lặp giá trị thông số đã được chọn - Chuyển nó --}}
                                                        @foreach ($thongSoCate as $key => $value)
                                                            {{-- Thông số thứ 2 trở đi --}}
                                                            @if ($countTS !== 0)
                                                                <input type="hidden" name="{{ 'thongSo' . $key }}"
                                                                    value="{{ $key }}">
                                                                <input type="hidden"
                                                                    name="{{ 'giaTriThongSo' . $key }}"
                                                                    value="{{ $value }}">
                                                                {{-- Thông số đầu tiên --}}
                                                            @else
                                                                @php
                                                                    $countTS++;
                                                                @endphp
                                                                <input type="hidden" name="thongSoDau"
                                                                    value="{{ $key }}">
                                                                <input type="hidden" name="giaTriThongSoDau"
                                                                    value="{{ $value }}">
                                                            @endif
                                                        @endforeach
                                                        {{-- Chuyển thông số chưa được chọn --}}
                                                        <input type="hidden" name="{{ 'thongSo' . $SPTS->maTS }}"
                                                            value="{{ $SPTS->maTS }}">
                                                        <input type="hidden"
                                                            name="{{ 'giaTriThongSo' . $SPTS->maTS }}"
                                                            value="{{ $SPTS->giaTri }}">
                                                    @elseif($sizeTS == 0)
                                                        {{-- Chuyển thống số chưa được chọn --}}
                                                        <input type="hidden" name="thongSoDau"
                                                            value="{{ $SPTS->maTS }}">
                                                        <input type="hidden" name="giaTriThongSoDau"
                                                            value="{{ $SPTS->giaTri }}">
                                                    @elseif($sizeTS == 1)
                                                        @php
                                                            $repeatCheck = '';
                                                        @endphp
                                                        {{-- Chuyển thông số được chọn duy nhất --}}
                                                        @foreach ($thongSoCate as $key => $value)
                                                            @php
                                                                $repeatCheck = $value;
                                                            @endphp
                                                            <input type="hidden" name="thongSoDau"
                                                                value="{{ $key }}">
                                                            <input type="hidden" name="giaTriThongSoDau"
                                                                value="{{ $value }}">
                                                        @endforeach
                                                        {{-- Chuyển thông số chưa được chọn --}}
                                                        @if ($repeatCheck != $SPTS->giaTri)
                                                            <input type="hidden"
                                                                name="{{ 'thongSo' . $SPTS->maTS }}"
                                                                value="{{ $SPTS->maTS }}">
                                                            <input type="hidden"
                                                                name="{{ 'giaTriThongSo' . $SPTS->maTS }}"
                                                                value="{{ $SPTS->giaTri }}">
                                                        @endif
                                                    @endif

                                                    {{-- Chuyển mã nhà sản xuất --}}
                                                    @isset($nhaSanXuatCate)
                                                        <input type="hidden" name="nhaSanXuat"
                                                            value="{{ $nhaSanXuatCate }}">
                                                    @endisset
                                                    {{-- Chuyển giá min --}}
                                                    @isset($priceMinCate)
                                                        <input type="hidden" name="priceMin"
                                                            value="{{ $priceMinCate }}">
                                                    @endisset
                                                    {{-- Chuyển giá max --}}
                                                    @isset($priceMaxCate)
                                                        <input type="hidden" name="priceMax"
                                                            value="{{ $priceMaxCate }}">
                                                    @endisset
                                                    {{-- Hiển thị thông số đã chọn nếu tồn tại --}}
                                                    @if ($thongSoCate[$SPTS->maTS] ?? null)
                                                        @if ($SPTS->giaTri == $thongSoCate[$SPTS->maTS])
                                                            <input type="hidden" name="removeTS"
                                                                value="{{ $SPTS->maTS }}">
                                                            <button class=" text- btn "
                                                                style="text-decoration: none;list-style: none;padding:0">
                                                                <div
                                                                    class="text-light bg-danger rounded padding-left-5 padding-right-5">
                                                                    <li><i class="fa fa-check"></i>
                                                                        {{ $SPTS->giaTri }}</li>
                                                                </div>
                                                            </button>
                                                        @endif
                                                        {{-- TODO: Thêm else vào đây nếu muốn bỏ các thông số khác thông số đã chọn --}}
                                                    @else
                                                        <button class=" text- btn"
                                                            style="text-decoration: none;list-style: none;padding:0">
                                                            <div class="text-dark">
                                                                <li><i class="fa-regular fa-square"></i>
                                                                    {{ $SPTS->giaTri }}</li>
                                                            </div>
                                                        </button>
                                                    @endif
                                                </form>
                                            @endif
                                        @endforeach
                                    </div>
                                @endforeach

                            @endif


                            {{-- --------- --}}
                            {{-- <div class="col-md-12 ">
                                <hr class="border-red">
                            </div> --}}
                        </div>

                        {{-- Sản phẩm --}}
                        <div class="col-md-8">
                            <div class="row">
                                @foreach ($listSanPham as $CN)
                                    <div class="carousel-promo-item col-md-3 " onmouseover="" {{-- onmouseover="getData('{{ $CN->tenSP }}', 'product-test');" --}}
                                        style=" padding: 10px">
                                        <div class="">
                                            <div class="card product-item" style="height: 430px;width:220px">
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
                                                        src="{{ asset('assets/img/' . $tempImg) }}"
                                                        alt="..." />
                                                @endif
                                                <!-- Thông tin sản phẩm-->
                                                <div class="card-body p-4 bg- text-light"
                                                    style="background-color: black">
                                                    <div class="text-center">
                                                        <!-- Tên sản phẩm-->
                                                        <h5 class="fw-bolder" style="font-size:0.8em">
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
                                                        <span style="font-size: 0.8em"
                                                            class="text-decoration-line-through text-danger">{{ number_format($CN->giaSP) }}
                                                            VND</span>
                                                        <br>
                                                        <span
                                                            style="font-size: 0.9em">{{ number_format($CN->giaSP - $reducedMoneyFlat - ($CN->giaSP * $reducedMoneyPercent) / 100) }}
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
                                                                    style="background-color: ;padding-top: 3px;height:65%;font-size: 0.9em">
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
                                                            <input type="hidden" value="{{ $reducedMoneyFlat }}"
                                                                name="reduceFlat">
                                                            <input type="hidden" value="{{ $reducedMoneyPercent }}"
                                                                name="reducePercent">
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
