<html lang="en">

<head>
    @include('Customer.Layout.Common.meta')
    <meta name="_token" content="{{ csrf_token() }}" />
    <script>
        const pageAccessedByReload = (
            (window.performance.navigation && window.performance.navigation.type === 1) ||
            window.performance
            .getEntriesByType('navigation')
            .map((nav) => nav.type)
            .includes('reload')
        );
        if (pageAccessedByReload == true) {
            @php
                // $modalStatus = 0;
            @endphp
        }
    </script>
    <style>
        /* The Modal (background) */
        .modal-PCB {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content-PCB {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 75%;
            height: 85%;
        }

        /* The Close Button */
        .close-PCB {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close-PCB:hover,
        .close-PCB:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
@include('Customer.Layout.Common.header')

<body>
    <!-- Wrapper - Cả trang -->
    <div id="wrapper">


        <!-- Wrapper - Chỉ riêng phần nội dung - Không bao gồm navbar -->
        <div id="content-wrapper" class="d-flex flex-row">
            @include('Customer.Layout.Common.side_nav_menu')

            <!-- Content của trang -->
            <div class="container-fluid" {{-- style="position:relative;top: 70px" --}} style="padding-top: 60px">
                {{--  --}}
                <div class="row">
                    <div class="col-md-12">
                        <!-- The Modal -->
                        @if ($modalStatus == 1)
                            <div id="PCBuildModal" style="display: block" class="modal-PCB">
                            @else
                                <div id="PCBuildModal" class="modal-PCB">
                        @endif
                        <!-- Modal content -->
                        <div class="modal-content-PCB">
                            <span id="close-x" class="close-PCB">&times;</span>
                            <h1>{{ $PCBTheLoai }}</h1>
                            <div style="overflow: scroll; overflow-x: hidden ;height: 90%">
                                @php
                                    $countCheck1 = 0;
                                    $countCheck2 = 0;
                                @endphp
                                {{-- Search trong modal --}}
                                <form action="{{ route('PCBuilderCustomer.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="scrollPos" id="scrollPos3"
                                        value="{{ $scrollPos }}">
                                    <input type="hidden" name="modalStatus" id="modalStatus3" value="1">
                                    Tìm kiếm <input class="" type="text" name="searchModal">
                                </form>
                                {{-- Vòng lặp hiển thị sản phẩm trong modal--}}
                                @foreach ($listSanPhamModal as $SPM)
                                    @if ($listCheckCase !== null && $listCheckCPU !== null)
                                        @foreach ($listCheckCPU as $CPU)
                                            @foreach ($listCheckCase as $Case)
                                                @if ($SPM->maSP == $CPU->maSP && $SPM->maSP == $Case->maSP)
                                                    <form action="{{ route('PCBuilderCustomer.store') }}"
                                                        method="POST">
                                                        @csrf
                                                        <input type="hidden" value="{{ $SPM->maSP }}"
                                                            name="PCBMa">
                                                        <div
                                                            class="bg-gray-300 card padding-left-10 padding-right-10 text-center">
                                                            <div class="row">
                                                                <!-- Ảnh sản phẩm-->
                                                                <div class="col-2 bg-primary">
                                                                    @php
                                                                        $tempImg;
                                                                        $count = 0;
                                                                    @endphp
                                                                    @foreach ($productImage as $PI)
                                                                        @if ($PI->maSP == $SPM->maSP)
                                                                            @if ($count == 0)
                                                                                @php
                                                                                    $tempImg = $PI->anh;
                                                                                @endphp
                                                                                <a
                                                                                    href="{{ route('product.show', $SPM->maSP) }}">
                                                                                    <img class="card-img-top hide-from-work"
                                                                                        style="height:110px ; width:110px ; border: 1px solid lightgray"
                                                                                        src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                                        id="{{ $SPM->maSP }}"
                                                                                        alt="..." />
                                                                                </a>
                                                                                @php
                                                                                    $count = 1;
                                                                                @endphp
                                                                            @endif
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                                {{-- Hết - Ảnh sản phẩm --}}

                                                                {{-- Thông tin sản phẩm --}}
                                                                <div class="col-8">
                                                                    {{-- Tên sản phẩm --}}
                                                                    <div class="text-bold text-dark">
                                                                        {{ $SPM->tenSP }}
                                                                    </div>
                                                                    <div class=" text-dark">
                                                                        Mã sản phẩm: {{ $SPM->maSP }}
                                                                        <br>
                                                                        Bảo hành: 1 năm
                                                                        <br>
                                                                        Tình trạng sản phẩm: Còn hàng
                                                                        <br>
                                                                        @php
                                                                            $reducedMoneyPercent = $SPM->giamGia;
                                                                            $reducedMoneyFlat = 0;
                                                                        @endphp
                                                                        @foreach ($productPromotion as $PP)
                                                                            @if ($PP->maSP == $SPM->maSP)
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
                                                                        <span
                                                                            class="text-danger text-bold">{{ number_format($SPM->giaSP - $reducedMoneyFlat - ($SPM->giaSP * $reducedMoneyPercent) / 100) }}
                                                                            VND</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-2">
                                                                    <button type="submit" name="PCBSubmit"
                                                                        class="btn btn-danger">+</button>
                                                                </div>
                                                                {{-- Hết - Thông tin sản phẩm --}}
                                                            </div>
                                                        </div>
                                                    </form>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    @else
                                        <form action="{{ route('PCBuilderCustomer.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="scrollPos" id="scrollPos2"
                                                value="{{ $scrollPos }}">
                                            <input type="hidden" name="modalStatus" id="modalStatus2">
                                            <input type="hidden" value="{{ $SPM->maSP }}" name="PCBMa">
                                            <div class="bg-gray-300 card padding-left-10 padding-right-10 text-center">
                                                <div class="row">
                                                    <!-- Ảnh sản phẩm-->
                                                    <div class="col-2 bg-primary">
                                                        @php
                                                            $tempImg;
                                                            $count = 0;
                                                        @endphp
                                                        @foreach ($productImage as $PI)
                                                            @if ($PI->maSP == $SPM->maSP)
                                                                @if ($count == 0)
                                                                    @php
                                                                        $tempImg = $PI->anh;
                                                                    @endphp
                                                                    <a href="{{ route('product.show', $SPM->maSP) }}">
                                                                        <img class="card-img-top hide-from-work"
                                                                            style="height:110px ; width:110px ; border: 1px solid lightgray"
                                                                            src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                            id="{{ $SPM->maSP }}" alt="..." />
                                                                    </a>
                                                                    @php
                                                                        $count = 1;
                                                                    @endphp
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    {{-- Hết - Ảnh sản phẩm --}}

                                                    {{-- Thông tin sản phẩm --}}
                                                    <div class="col-8">
                                                        {{-- Tên sản phẩm --}}
                                                        <div class="text-bold text-dark">
                                                            {{ $SPM->tenSP }}
                                                        </div>
                                                        <div class=" text-dark">
                                                            Mã sản phẩm: {{ $SPM->maSP }}
                                                            <br>
                                                            Bảo hành: 1 năm
                                                            <br>
                                                            Tình trạng sản phẩm: Còn hàng
                                                            <br>
                                                            @php
                                                                $reducedMoneyPercent = $SPM->giamGia;
                                                                $reducedMoneyFlat = 0;
                                                            @endphp
                                                            @foreach ($productPromotion as $PP)
                                                                @if ($PP->maSP == $SPM->maSP)
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
                                                            <span
                                                                class="text-danger text-bold">{{ number_format($SPM->giaSP - $reducedMoneyFlat - ($SPM->giaSP * $reducedMoneyPercent) / 100) }}
                                                                VND</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <button type="submit" name="PCBSubmit" class="btn btn-danger"
                                                            onmouseover="closeModalOnClick()">+</button>
                                                    </div>
                                                    {{-- Hết - Thông tin sản phẩm --}}
                                                </div>
                                            </div>
                                        </form>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @php
                        // dd($countCheck2);
                        // dd($countaaa);
                        // dd($countaaa);
                    @endphp
                </div>
            </div>
            {{--  --}}
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-danger text-center">
                        Xây dựng máy tính chất lượng cao của riêng bạn
                    </h2>
                </div>
                <div class="col-md-12">
                    <div class="padding-10 center-custom border-red rounded">
                        <form action="{{ route('PCBuilderCustomer.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="scrollPos" id="scrollPos">
                            <input type="hidden" name="modalStatus" id="modalStatus">

                            <table class="bg- w-100 ">
                                {{-- Bộ vi xử lý --}}
                                <tr class="">
                                    <td class="padding-10" style="width: 170px">Bộ vi xử lý</td>
                                    <td class="padding-10" style="width: 170px">
                                        <button id="PCBuilderButton1" type="submit" value="CPU" name="PCBModal"
                                            class="btn btn-danger" onmouseover="getPosition()" style="width: 130px">Chọn
                                            bộ vi xử lý</button>
                                    </td>
                                    @php
                                        $displayCPU = session()->has('PCBMaCPU');
                                    @endphp
                                    @if ($displayCPU == true)
                                        <td class="padding-10" style="width:900px" id="PCBCPU">
                                            <div class="bg-gray-300 card padding-10 text-left">
                                                <div class="row">
                                                    {{-- * Ảnh sản phẩm --}}
                                                    <div class="col-2">
                                                        @php
                                                            $tempImgCPU;
                                                            $count = 0;
                                                        @endphp
                                                        @foreach ($productImage as $PI)
                                                            @if ($PI->maSP == session()->get('PCBMaCPU'))
                                                                @if ($count == 0)
                                                                    @php
                                                                        $tempImgCPU = $PI->anh;
                                                                    @endphp
                                                                    <a
                                                                        href="{{ route('product.show', session()->get('PCBMaCPU')) }}">
                                                                        <img class="card-img-top hide-from-work"
                                                                            style="height:110px ; width:110px ; border: 1px solid lightgray"
                                                                            src="{{ asset('assets/img/' . $tempImgCPU) }}"
                                                                            id="{{ session()->get('PCBMaCPU') }}"
                                                                            alt="..." />
                                                                    </a>
                                                                    @php
                                                                        $count = 1;
                                                                    @endphp
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    {{-- * Hết - Ảnh sản phẩm --}}

                                                    {{-- * Thông tin sản phẩm --}}
                                                    <div class="col-8">
                                                        {{-- * Tên sản phẩm --}}
                                                        <div class="text-bold text-dark">
                                                            {{ session()->get('PCBTenCPU') }}
                                                        </div>
                                                        <div class=" text-dark">
                                                            Mã sản phẩm: {{ session()->get('PCBMaCPU') }}
                                                            <br>
                                                            Bảo hành: {{ session()->get('PCBBaoHanhCPU') }}
                                                            <br>
                                                            Tình trạng sản phẩm:
                                                            {{ session()->get('PCBTinhTrangCPU') }}
                                                            <br>
                                                            @php
                                                                if (session()->has('PCBSoLuongCPU') == false) {
                                                                    session()->put('PCBSoLuongCPU', 1);
                                                                }
                                                            @endphp
                                                            <span class="text-danger text-bold">
                                                                @php
                                                                    $reducedMoneyPercentCPU = session()->get('PCBGiamGiaCPU');
                                                                    $reducedMoneyFlatCPU = 0;
                                                                @endphp
                                                                @foreach ($productPromotion as $PP)
                                                                    @if ($PP->maSP == session()->get('PCBMaCPU'))
                                                                        @php
                                                                            if ($PP->kichHoat == 1) {
                                                                                $ten = $PP->tenVoucher;
                                                                                if ($PP->giaTri >= 0 && $PP->giaTri <= 100) {
                                                                                    $reducedMoneyPercentCPU += $PP->giaTri;
                                                                                } elseif ($PP->giaTri > 100) {
                                                                                    $reducedMoneyFlatCPU += $PP->giaTri;
                                                                                }
                                                                            }
                                                                        @endphp
                                                                    @endif
                                                                @endforeach
                                                                {{ number_format(session()->get('PCBGiaCPU') - (session()->get('PCBGiaCPU') * $reducedMoneyPercentCPU) / 100 - $reducedMoneyFlatCPU) }}
                                                                VND x <input type="number" id="PCBSoLuongCPU"
                                                                    value="{{ session()->get('PCBSoLuongCPU') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongCPU">
                                                                =
                                                                <span id="PCBTongTienCPU">
                                                                    {{ number_format(session()->get('PCBSoLuongCPU') * (session()->get('PCBGiaCPU') - (session()->get('PCBGiaCPU') * $reducedMoneyPercentCPU) / 100 - $reducedMoneyFlatCPU)) }}
                                                                    VND
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">

                                                        <button type="submit" name="PCBDeleteCPU" id="PCBDeleteCPU"
                                                            value="1" class="btn btn-danger">x</button>
                                                    </div>
                                                    {{-- * Hết - Thông tin sản phẩm --}}
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                                {{-- Bo mạch chủ --}}
                                <tr class="">
                                    <td class="padding-10" style="width: 170px">Bo mạch chủ</td>
                                    <td class="padding-10" style="width: 170px">
                                        <button id="PCBuilderButton1" type="submit" value="BMC" name="PCBModal"
                                            class="btn btn-danger" onmouseover="getPosition()"
                                            style="width: 130px">Chọn Bo mạch chủ</button>
                                    </td>
                                    @php
                                        $displayBMC = session()->has('PCBMaBMC');
                                    @endphp
                                    @if ($displayBMC == true)
                                        <td class="padding-10" style="width:900px" id="PCBBMC">
                                            <div class="bg-gray-300 card padding-10 text-left">
                                                <div class="row">
                                                    {{-- * Ảnh sản phẩm --}}
                                                    <div class="col-2">
                                                        @php
                                                            $tempImgBMC;
                                                            $count = 0;
                                                        @endphp
                                                        @foreach ($productImage as $PI)
                                                            @if ($PI->maSP == session()->get('PCBMaBMC'))
                                                                @if ($count == 0)
                                                                    @php
                                                                        $tempImgBMC = $PI->anh;
                                                                    @endphp
                                                                    <a
                                                                        href="{{ route('product.show', session()->get('PCBMaBMC')) }}">
                                                                        <img class="card-img-top hide-from-work"
                                                                            style="height:110px ; width:110px ; border: 1px solid lightgray"
                                                                            src="{{ asset('assets/img/' . $tempImgBMC) }}"
                                                                            id="{{ session()->get('PCBMaBMC') }}"
                                                                            alt="..." />
                                                                    </a>
                                                                    @php
                                                                        $count = 1;
                                                                    @endphp
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    {{-- * Hết - Ảnh sản phẩm --}}

                                                    {{-- * Thông tin sản phẩm --}}
                                                    <div class="col-8">
                                                        {{-- * Tên sản phẩm --}}
                                                        <div class="text-bold text-dark">
                                                            {{ session()->get('PCBTenBMC') }}
                                                        </div>
                                                        <div class=" text-dark">
                                                            Mã sản phẩm: {{ session()->get('PCBMaBMC') }}
                                                            <br>
                                                            Bảo hành: {{ session()->get('PCBBaoHanhBMC') }}
                                                            <br>
                                                            Tình trạng sản phẩm:
                                                            {{ session()->get('PCBTinhTrangBMC') }}
                                                            <br>
                                                            @php
                                                                if (session()->has('PCBSoLuongBMC') == false) {
                                                                    session()->put('PCBSoLuongBMC', 1);
                                                                }
                                                            @endphp
                                                            <span class="text-danger text-bold">
                                                                @php
                                                                    $reducedMoneyPercentBMC = session()->get('PCBGiamGiaBMC');
                                                                    $reducedMoneyFlatBMC = 0;
                                                                @endphp
                                                                @foreach ($productPromotion as $PP)
                                                                    @if ($PP->maSP == session()->get('PCBMaBMC'))
                                                                        @php
                                                                            if ($PP->kichHoat == 1) {
                                                                                $ten = $PP->tenVoucher;
                                                                                if ($PP->giaTri >= 0 && $PP->giaTri <= 100) {
                                                                                    $reducedMoneyPercentBMC += $PP->giaTri;
                                                                                } elseif ($PP->giaTri > 100) {
                                                                                    $reducedMoneyFlatBMC += $PP->giaTri;
                                                                                }
                                                                            }
                                                                        @endphp
                                                                    @endif
                                                                @endforeach
                                                                {{ number_format(session()->get('PCBGiaBMC') - (session()->get('PCBGiaBMC') * $reducedMoneyPercentBMC) / 100 - $reducedMoneyFlatBMC) }}
                                                                VND x <input type="number" id="PCBSoLuongBMC"
                                                                    value="{{ session()->get('PCBSoLuongBMC') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongBMC">
                                                                =
                                                                <span id="PCBTongTienBMC">
                                                                    {{ number_format(session()->get('PCBSoLuongBMC') * (session()->get('PCBGiaBMC') - (session()->get('PCBGiaBMC') * $reducedMoneyPercentBMC) / 100 - $reducedMoneyFlatBMC)) }}
                                                                    VND
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">

                                                        <button type="submit" name="PCBDeleteBMC" id="PCBDeleteBMC"
                                                            value="1" class="btn btn-danger">x</button>
                                                    </div>
                                                    {{-- * Hết - Thông tin sản phẩm --}}
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                                {{-- RAM --}}
                                <tr class="">
                                    <td class="padding-10" style="width: 170px">RAM</td>
                                    <td class="padding-10" style="width: 170px">
                                        <button id="PCBuilderButton1" type="submit" value="RAM" name="PCBModal"
                                            class="btn btn-danger" onmouseover="getPosition()"
                                            style="width: 130px">Chọn RAM</button>
                                    </td>
                                    @php
                                        $displayRAM = session()->has('PCBMaRAM');
                                    @endphp
                                    @if ($displayRAM == true)
                                        <td class="padding-10" style="width:900px" id="PCBRAM">
                                            <div class="bg-gray-300 card padding-10 text-left">
                                                <div class="row">
                                                    {{-- * Ảnh sản phẩm --}}
                                                    <div class="col-2">
                                                        @php
                                                            $tempImgRAM;
                                                            $count = 0;
                                                        @endphp
                                                        @foreach ($productImage as $PI)
                                                            @if ($PI->maSP == session()->get('PCBMaRAM'))
                                                                @if ($count == 0)
                                                                    @php
                                                                        $tempImgRAM = $PI->anh;
                                                                    @endphp
                                                                    <a
                                                                        href="{{ route('product.show', session()->get('PCBMaRAM')) }}">
                                                                        <img class="card-img-top hide-from-work"
                                                                            style="height:110px ; width:110px ; border: 1px solid lightgray"
                                                                            src="{{ asset('assets/img/' . $tempImgRAM) }}"
                                                                            id="{{ session()->get('PCBMaRAM') }}"
                                                                            alt="..." />
                                                                    </a>
                                                                    @php
                                                                        $count = 1;
                                                                    @endphp
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    {{-- * Hết - Ảnh sản phẩm --}}

                                                    {{-- * Thông tin sản phẩm --}}
                                                    <div class="col-8">
                                                        {{-- * Tên sản phẩm --}}
                                                        <div class="text-bold text-dark">
                                                            {{ session()->get('PCBTenRAM') }}
                                                        </div>
                                                        <div class=" text-dark">
                                                            Mã sản phẩm: {{ session()->get('PCBMaRAM') }}
                                                            <br>
                                                            Bảo hành: {{ session()->get('PCBBaoHanhRAM') }}
                                                            <br>
                                                            Tình trạng sản phẩm:
                                                            {{ session()->get('PCBTinhTrangRAM') }}
                                                            <br>
                                                            @php
                                                                if (session()->has('PCBSoLuongRAM') == false) {
                                                                    session()->put('PCBSoLuongRAM', 1);
                                                                }
                                                            @endphp
                                                            <span class="text-danger text-bold">
                                                                @php
                                                                    $reducedMoneyPercentRAM = session()->get('PCBGiamGiaRAM');
                                                                    $reducedMoneyFlatRAM = 0;
                                                                @endphp
                                                                @foreach ($productPromotion as $PP)
                                                                    @if ($PP->maSP == session()->get('PCBMaRAM'))
                                                                        @php
                                                                            if ($PP->kichHoat == 1) {
                                                                                $ten = $PP->tenVoucher;
                                                                                if ($PP->giaTri >= 0 && $PP->giaTri <= 100) {
                                                                                    $reducedMoneyPercentRAM += $PP->giaTri;
                                                                                } elseif ($PP->giaTri > 100) {
                                                                                    $reducedMoneyFlatRAM += $PP->giaTri;
                                                                                }
                                                                            }
                                                                        @endphp
                                                                    @endif
                                                                @endforeach
                                                                {{ number_format(session()->get('PCBGiaRAM') - (session()->get('PCBGiaRAM') * $reducedMoneyPercentRAM) / 100 - $reducedMoneyFlatRAM) }}
                                                                VND x <input type="number" id="PCBSoLuongRAM"
                                                                    value="{{ session()->get('PCBSoLuongRAM') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongRAM">
                                                                =
                                                                <span id="PCBTongTienRAM">
                                                                    {{ number_format(session()->get('PCBSoLuongRAM') * (session()->get('PCBGiaRAM') - (session()->get('PCBGiaRAM') * $reducedMoneyPercentRAM) / 100 - $reducedMoneyFlatRAM)) }}
                                                                    VND
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">

                                                        <button type="submit" name="PCBDeleteRAM" id="PCBDeleteRAM"
                                                            value="1" class="btn btn-danger">x</button>
                                                    </div>
                                                    {{-- * Hết - Thông tin sản phẩm --}}
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                                {{-- HDD --}}
                                <tr class="">
                                    <td class="padding-10" style="width: 170px">HDD</td>
                                    <td class="padding-10" style="width: 170px">
                                        <button id="PCBuilderButton1" type="submit" value="HDD" name="PCBModal"
                                            class="btn btn-danger" onmouseover="getPosition()"
                                            style="width: 130px">Chọn HDD</button>
                                    </td>
                                    @php
                                        $displayHDD = session()->has('PCBMaHDD');
                                    @endphp
                                    @if ($displayHDD == true)
                                        <td class="padding-10" style="width:900px" id="PCBHDD">
                                            <div class="bg-gray-300 card padding-10 text-left">
                                                <div class="row">
                                                    {{-- * Ảnh sản phẩm --}}
                                                    <div class="col-2">
                                                        @php
                                                            $tempImgHDD;
                                                            $count = 0;
                                                        @endphp
                                                        @foreach ($productImage as $PI)
                                                            @if ($PI->maSP == session()->get('PCBMaHDD'))
                                                                @if ($count == 0)
                                                                    @php
                                                                        $tempImgHDD = $PI->anh;
                                                                    @endphp
                                                                    <a
                                                                        href="{{ route('product.show', session()->get('PCBMaHDD')) }}">
                                                                        <img class="card-img-top hide-from-work"
                                                                            style="height:110px ; width:110px ; border: 1px solid lightgray"
                                                                            src="{{ asset('assets/img/' . $tempImgHDD) }}"
                                                                            id="{{ session()->get('PCBMaHDD') }}"
                                                                            alt="..." />
                                                                    </a>
                                                                    @php
                                                                        $count = 1;
                                                                    @endphp
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    {{-- * Hết - Ảnh sản phẩm --}}

                                                    {{-- * Thông tin sản phẩm --}}
                                                    <div class="col-8">
                                                        {{-- * Tên sản phẩm --}}
                                                        <div class="text-bold text-dark">
                                                            {{ session()->get('PCBTenHDD') }}
                                                        </div>
                                                        <div class=" text-dark">
                                                            Mã sản phẩm: {{ session()->get('PCBMaHDD') }}
                                                            <br>
                                                            Bảo hành: {{ session()->get('PCBBaoHanhHDD') }}
                                                            <br>
                                                            Tình trạng sản phẩm:
                                                            {{ session()->get('PCBTinhTrangHDD') }}
                                                            <br>
                                                            @php
                                                                if (session()->has('PCBSoLuongHDD') == false) {
                                                                    session()->put('PCBSoLuongHDD', 1);
                                                                }
                                                            @endphp
                                                            <span class="text-danger text-bold">
                                                                @php
                                                                    $reducedMoneyPercentHDD = session()->get('PCBGiamGiaHDD');
                                                                    $reducedMoneyFlatHDD = 0;
                                                                @endphp
                                                                @foreach ($productPromotion as $PP)
                                                                    @if ($PP->maSP == session()->get('PCBMaHDD'))
                                                                        @php
                                                                            if ($PP->kichHoat == 1) {
                                                                                $ten = $PP->tenVoucher;
                                                                                if ($PP->giaTri >= 0 && $PP->giaTri <= 100) {
                                                                                    $reducedMoneyPercentHDD += $PP->giaTri;
                                                                                } elseif ($PP->giaTri > 100) {
                                                                                    $reducedMoneyFlatHDD += $PP->giaTri;
                                                                                }
                                                                            }
                                                                        @endphp
                                                                    @endif
                                                                @endforeach
                                                                {{ number_format(session()->get('PCBGiaHDD') - (session()->get('PCBGiaHDD') * $reducedMoneyPercentHDD) / 100 - $reducedMoneyFlatHDD) }}
                                                                VND x <input type="number" id="PCBSoLuongHDD"
                                                                    value="{{ session()->get('PCBSoLuongHDD') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongHDD">
                                                                =
                                                                <span id="PCBTongTienHDD">
                                                                    {{ number_format(session()->get('PCBSoLuongHDD') * (session()->get('PCBGiaHDD') - (session()->get('PCBGiaHDD') * $reducedMoneyPercentHDD) / 100 - $reducedMoneyFlatHDD)) }}
                                                                    VND
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">

                                                        <button type="submit" name="PCBDeleteHDD" id="PCBDeleteHDD"
                                                            value="1" class="btn btn-danger">x</button>
                                                    </div>
                                                    {{-- * Hết - Thông tin sản phẩm --}}
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                                {{-- SSD --}}
                                <tr class="">
                                    <td class="padding-10" style="width: 170px">SSD</td>
                                    <td class="padding-10" style="width: 170px">
                                        <button id="PCBuilderButton1" type="submit" value="SSD" name="PCBModal"
                                            class="btn btn-danger" onmouseover="getPosition()"
                                            style="width: 130px">Chọn SSD</button>
                                    </td>
                                    @php
                                        $displaySSD = session()->has('PCBMaSSD');
                                    @endphp
                                    @if ($displaySSD == true)
                                        <td class="padding-10" style="width:900px" id="PCBSSD">
                                            <div class="bg-gray-300 card padding-10 text-left">
                                                <div class="row">
                                                    {{-- * Ảnh sản phẩm --}}
                                                    <div class="col-2">
                                                        @php
                                                            $tempImgSSD;
                                                            $count = 0;
                                                        @endphp
                                                        @foreach ($productImage as $PI)
                                                            @if ($PI->maSP == session()->get('PCBMaSSD'))
                                                                @if ($count == 0)
                                                                    @php
                                                                        $tempImgSSD = $PI->anh;
                                                                    @endphp
                                                                    <a
                                                                        href="{{ route('product.show', session()->get('PCBMaSSD')) }}">
                                                                        <img class="card-img-top hide-from-work"
                                                                            style="height:110px ; width:110px ; border: 1px solid lightgray"
                                                                            src="{{ asset('assets/img/' . $tempImgSSD) }}"
                                                                            id="{{ session()->get('PCBMaSSD') }}"
                                                                            alt="..." />
                                                                    </a>
                                                                    @php
                                                                        $count = 1;
                                                                    @endphp
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    {{-- * Hết - Ảnh sản phẩm --}}

                                                    {{-- * Thông tin sản phẩm --}}
                                                    <div class="col-8">
                                                        {{-- * Tên sản phẩm --}}
                                                        <div class="text-bold text-dark">
                                                            {{ session()->get('PCBTenSSD') }}
                                                        </div>
                                                        <div class=" text-dark">
                                                            Mã sản phẩm: {{ session()->get('PCBMaSSD') }}
                                                            <br>
                                                            Bảo hành: {{ session()->get('PCBBaoHanhSSD') }}
                                                            <br>
                                                            Tình trạng sản phẩm:
                                                            {{ session()->get('PCBTinhTrangSSD') }}
                                                            <br>
                                                            @php
                                                                if (session()->has('PCBSoLuongSSD') == false) {
                                                                    session()->put('PCBSoLuongSSD', 1);
                                                                }
                                                            @endphp
                                                            <span class="text-danger text-bold">
                                                                @php
                                                                    $reducedMoneyPercentSSD = session()->get('PCBGiamGiaSSD');
                                                                    $reducedMoneyFlatSSD = 0;
                                                                @endphp
                                                                @foreach ($productPromotion as $PP)
                                                                    @if ($PP->maSP == session()->get('PCBMaSSD'))
                                                                        @php
                                                                            if ($PP->kichHoat == 1) {
                                                                                $ten = $PP->tenVoucher;
                                                                                if ($PP->giaTri >= 0 && $PP->giaTri <= 100) {
                                                                                    $reducedMoneyPercentSSD += $PP->giaTri;
                                                                                } elseif ($PP->giaTri > 100) {
                                                                                    $reducedMoneyFlatSSD += $PP->giaTri;
                                                                                }
                                                                            }
                                                                        @endphp
                                                                    @endif
                                                                @endforeach
                                                                {{ number_format(session()->get('PCBGiaSSD') - (session()->get('PCBGiaSSD') * $reducedMoneyPercentSSD) / 100 - $reducedMoneyFlatSSD) }}
                                                                VND x <input type="number" id="PCBSoLuongSSD"
                                                                    value="{{ session()->get('PCBSoLuongSSD') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongSSD">
                                                                =
                                                                <span id="PCBTongTienSSD">
                                                                    {{ number_format(session()->get('PCBSoLuongSSD') * (session()->get('PCBGiaSSD') - (session()->get('PCBGiaSSD') * $reducedMoneyPercentSSD) / 100 - $reducedMoneyFlatSSD)) }}
                                                                    VND
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">

                                                        <button type="submit" name="PCBDeleteSSD" id="PCBDeleteSSD"
                                                            value="1" class="btn btn-danger">x</button>
                                                    </div>
                                                    {{-- * Hết - Thông tin sản phẩm --}}
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                                {{-- VGA --}}
                                <tr class="">
                                    <td class="padding-10" style="width: 170px">Card đồ họa</td>
                                    <td class="padding-10" style="width: 170px">
                                        <button id="PCBuilderButton1" type="submit" value="VGA" name="PCBModal"
                                            class="btn btn-danger" onmouseover="getPosition()"
                                            style="width: 130px">Chọn card đồ họa</button>
                                    </td>
                                    @php
                                        $displayVGA = session()->has('PCBMaVGA');
                                    @endphp
                                    @if ($displayVGA == true)
                                        <td class="padding-10" style="width:900px" id="PCBVGA">
                                            <div class="bg-gray-300 card padding-10 text-left">
                                                <div class="row">
                                                    {{-- * Ảnh sản phẩm --}}
                                                    <div class="col-2">
                                                        @php
                                                            $tempImgVGA;
                                                            $count = 0;
                                                        @endphp
                                                        @foreach ($productImage as $PI)
                                                            @if ($PI->maSP == session()->get('PCBMaVGA'))
                                                                @if ($count == 0)
                                                                    @php
                                                                        $tempImgVGA = $PI->anh;
                                                                    @endphp
                                                                    <a
                                                                        href="{{ route('product.show', session()->get('PCBMaVGA')) }}">
                                                                        <img class="card-img-top hide-from-work"
                                                                            style="height:110px ; width:110px ; border: 1px solid lightgray"
                                                                            src="{{ asset('assets/img/' . $tempImgVGA) }}"
                                                                            id="{{ session()->get('PCBMaVGA') }}"
                                                                            alt="..." />
                                                                    </a>
                                                                    @php
                                                                        $count = 1;
                                                                    @endphp
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    {{-- * Hết - Ảnh sản phẩm --}}

                                                    {{-- * Thông tin sản phẩm --}}
                                                    <div class="col-8">
                                                        {{-- * Tên sản phẩm --}}
                                                        <div class="text-bold text-dark">
                                                            {{ session()->get('PCBTenVGA') }}
                                                        </div>
                                                        <div class=" text-dark">
                                                            Mã sản phẩm: {{ session()->get('PCBMaVGA') }}
                                                            <br>
                                                            Bảo hành: {{ session()->get('PCBBaoHanhVGA') }}
                                                            <br>
                                                            Tình trạng sản phẩm:
                                                            {{ session()->get('PCBTinhTrangVGA') }}
                                                            <br>
                                                            @php
                                                                if (session()->has('PCBSoLuongVGA') == false) {
                                                                    session()->put('PCBSoLuongVGA', 1);
                                                                }
                                                            @endphp
                                                            <span class="text-danger text-bold">
                                                                @php
                                                                    $reducedMoneyPercentVGA = session()->get('PCBGiamGiaVGA');
                                                                    $reducedMoneyFlatVGA = 0;
                                                                @endphp
                                                                @foreach ($productPromotion as $PP)
                                                                    @if ($PP->maSP == session()->get('PCBMaVGA'))
                                                                        @php
                                                                            if ($PP->kichHoat == 1) {
                                                                                $ten = $PP->tenVoucher;
                                                                                if ($PP->giaTri >= 0 && $PP->giaTri <= 100) {
                                                                                    $reducedMoneyPercentVGA += $PP->giaTri;
                                                                                } elseif ($PP->giaTri > 100) {
                                                                                    $reducedMoneyFlatVGA += $PP->giaTri;
                                                                                }
                                                                            }
                                                                        @endphp
                                                                    @endif
                                                                @endforeach
                                                                {{ number_format(session()->get('PCBGiaVGA') - (session()->get('PCBGiaVGA') * $reducedMoneyPercentVGA) / 100 - $reducedMoneyFlatVGA) }}
                                                                VND x <input type="number" id="PCBSoLuongVGA"
                                                                    value="{{ session()->get('PCBSoLuongVGA') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongVGA">
                                                                =
                                                                <span id="PCBTongTienVGA">
                                                                    {{ number_format(session()->get('PCBSoLuongVGA') * (session()->get('PCBGiaVGA') - (session()->get('PCBGiaVGA') * $reducedMoneyPercentVGA) / 100 - $reducedMoneyFlatVGA)) }}
                                                                    VND
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">

                                                        <button type="submit" name="PCBDeleteVGA" id="PCBDeleteVGA"
                                                            value="1" class="btn btn-danger">x</button>
                                                    </div>
                                                    {{-- * Hết - Thông tin sản phẩm --}}
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                                {{-- Nguồn --}}
                                <tr class="">
                                    <td class="padding-10" style="width: 170px">Nguồn</td>
                                    <td class="padding-10" style="width: 170px">
                                        <button id="PCBuilderButton1" type="submit" value="PSU" name="PCBModal"
                                            class="btn btn-danger" onmouseover="getPosition()"
                                            style="width: 130px">Chọn Nguồn</button>
                                    </td>
                                    @php
                                        $displayPSU = session()->has('PCBMaPSU');
                                    @endphp
                                    @if ($displayPSU == true)
                                        <td class="padding-10" style="width:900px" id="PCBPSU">
                                            <div class="bg-gray-300 card padding-10 text-left">
                                                <div class="row">
                                                    {{-- * Ảnh sản phẩm --}}
                                                    <div class="col-2">
                                                        @php
                                                            $tempImgPSU;
                                                            $count = 0;
                                                        @endphp
                                                        @foreach ($productImage as $PI)
                                                            @if ($PI->maSP == session()->get('PCBMaPSU'))
                                                                @if ($count == 0)
                                                                    @php
                                                                        $tempImgPSU = $PI->anh;
                                                                    @endphp
                                                                    <a
                                                                        href="{{ route('product.show', session()->get('PCBMaPSU')) }}">
                                                                        <img class="card-img-top hide-from-work"
                                                                            style="height:110px ; width:110px ; border: 1px solid lightgray"
                                                                            src="{{ asset('assets/img/' . $tempImgPSU) }}"
                                                                            id="{{ session()->get('PCBMaPSU') }}"
                                                                            alt="..." />
                                                                    </a>
                                                                    @php
                                                                        $count = 1;
                                                                    @endphp
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    {{-- * Hết - Ảnh sản phẩm --}}

                                                    {{-- * Thông tin sản phẩm --}}
                                                    <div class="col-8">
                                                        {{-- * Tên sản phẩm --}}
                                                        <div class="text-bold text-dark">
                                                            {{ session()->get('PCBTenPSU') }}
                                                        </div>
                                                        <div class=" text-dark">
                                                            Mã sản phẩm: {{ session()->get('PCBMaPSU') }}
                                                            <br>
                                                            Bảo hành: {{ session()->get('PCBBaoHanhPSU') }}
                                                            <br>
                                                            Tình trạng sản phẩm:
                                                            {{ session()->get('PCBTinhTrangPSU') }}
                                                            <br>
                                                            @php
                                                                if (session()->has('PCBSoLuongPSU') == false) {
                                                                    session()->put('PCBSoLuongPSU', 1);
                                                                }
                                                            @endphp
                                                            <span class="text-danger text-bold">
                                                                @php
                                                                    $reducedMoneyPercentPSU = session()->get('PCBGiamGiaPSU');
                                                                    $reducedMoneyFlatPSU = 0;
                                                                @endphp
                                                                @foreach ($productPromotion as $PP)
                                                                    @if ($PP->maSP == session()->get('PCBMaPSU'))
                                                                        @php
                                                                            if ($PP->kichHoat == 1) {
                                                                                $ten = $PP->tenVoucher;
                                                                                if ($PP->giaTri >= 0 && $PP->giaTri <= 100) {
                                                                                    $reducedMoneyPercentPSU += $PP->giaTri;
                                                                                } elseif ($PP->giaTri > 100) {
                                                                                    $reducedMoneyFlatPSU += $PP->giaTri;
                                                                                }
                                                                            }
                                                                        @endphp
                                                                    @endif
                                                                @endforeach
                                                                {{ number_format(session()->get('PCBGiaPSU') - (session()->get('PCBGiaPSU') * $reducedMoneyPercentPSU) / 100 - $reducedMoneyFlatPSU) }}
                                                                VND x <input type="number" id="PCBSoLuongPSU"
                                                                    value="{{ session()->get('PCBSoLuongPSU') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongPSU">
                                                                =
                                                                <span id="PCBTongTienPSU">
                                                                    {{ number_format(session()->get('PCBSoLuongPSU') * (session()->get('PCBGiaPSU') - (session()->get('PCBGiaPSU') * $reducedMoneyPercentPSU) / 100 - $reducedMoneyFlatPSU)) }}
                                                                    VND
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">

                                                        <button type="submit" name="PCBDeletePSU" id="PCBDeletePSU"
                                                            value="1" class="btn btn-danger">x</button>
                                                    </div>
                                                    {{-- * Hết - Thông tin sản phẩm --}}
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                                {{-- Vỏ case --}}
                                <tr class="">
                                    <td class="padding-10" style="width: 170px">Vỏ case</td>
                                    <td class="padding-10" style="width: 170px">
                                        <button id="PCBuilderButton1" type="submit" value="Case" name="PCBModal"
                                            class="btn btn-danger" onmouseover="getPosition()"
                                            style="width: 130px">Chọn Vỏ case</button>
                                    </td>
                                    @php
                                        $displayCase = session()->has('PCBMaCase');
                                    @endphp
                                    @if ($displayCase == true)
                                        <td class="padding-10" style="width:900px" id="PCBCase">
                                            <div class="bg-gray-300 card padding-10 text-left">
                                                <div class="row">
                                                    {{-- * Ảnh sản phẩm --}}
                                                    <div class="col-2">
                                                        @php
                                                            $tempImgCase;
                                                            $count = 0;
                                                        @endphp
                                                        @foreach ($productImage as $PI)
                                                            @if ($PI->maSP == session()->get('PCBMaCase'))
                                                                @if ($count == 0)
                                                                    @php
                                                                        $tempImgCase = $PI->anh;
                                                                    @endphp
                                                                    <a
                                                                        href="{{ route('product.show', session()->get('PCBMaCase')) }}">
                                                                        <img class="card-img-top hide-from-work"
                                                                            style="height:110px ; width:110px ; border: 1px solid lightgray"
                                                                            src="{{ asset('assets/img/' . $tempImgCase) }}"
                                                                            id="{{ session()->get('PCBMaCase') }}"
                                                                            alt="..." />
                                                                    </a>
                                                                    @php
                                                                        $count = 1;
                                                                    @endphp
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    {{-- * Hết - Ảnh sản phẩm --}}

                                                    {{-- * Thông tin sản phẩm --}}
                                                    <div class="col-8">
                                                        {{-- * Tên sản phẩm --}}
                                                        <div class="text-bold text-dark">
                                                            {{ session()->get('PCBTenCase') }}
                                                        </div>
                                                        <div class=" text-dark">
                                                            Mã sản phẩm: {{ session()->get('PCBMaCase') }}
                                                            <br>
                                                            Bảo hành: {{ session()->get('PCBBaoHanhCase') }}
                                                            <br>
                                                            Tình trạng sản phẩm:
                                                            {{ session()->get('PCBTinhTrangCase') }}
                                                            <br>
                                                            @php
                                                                if (session()->has('PCBSoLuongCase') == false) {
                                                                    session()->put('PCBSoLuongCase', 1);
                                                                }
                                                            @endphp
                                                            <span class="text-danger text-bold">
                                                                @php
                                                                    $reducedMoneyPercentCase = session()->get('PCBGiamGiaCase');
                                                                    $reducedMoneyFlatCase = 0;
                                                                @endphp
                                                                @foreach ($productPromotion as $PP)
                                                                    @if ($PP->maSP == session()->get('PCBMaCase'))
                                                                        @php
                                                                            if ($PP->kichHoat == 1) {
                                                                                $ten = $PP->tenVoucher;
                                                                                if ($PP->giaTri >= 0 && $PP->giaTri <= 100) {
                                                                                    $reducedMoneyPercentCase += $PP->giaTri;
                                                                                } elseif ($PP->giaTri > 100) {
                                                                                    $reducedMoneyFlatCase += $PP->giaTri;
                                                                                }
                                                                            }
                                                                        @endphp
                                                                    @endif
                                                                @endforeach
                                                                {{ number_format(session()->get('PCBGiaCase') - (session()->get('PCBGiaCase') * $reducedMoneyPercentCase) / 100 - $reducedMoneyFlatCase) }}
                                                                VND x <input type="number" id="PCBSoLuongCase"
                                                                    value="{{ session()->get('PCBSoLuongCase') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongCase">
                                                                =
                                                                <span id="PCBTongTienCase">
                                                                    {{ number_format(session()->get('PCBSoLuongCase') * (session()->get('PCBGiaCase') - (session()->get('PCBGiaCase') * $reducedMoneyPercentCase) / 100 - $reducedMoneyFlatCase)) }}
                                                                    VND
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">

                                                        <button type="submit" name="PCBDeleteCase"
                                                            id="PCBDeleteCase" value="1"
                                                            class="btn btn-danger">x</button>
                                                    </div>
                                                    {{-- * Hết - Thông tin sản phẩm --}}
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                                {{-- Màn hình --}}
                                <tr class="">
                                    <td class="padding-10" style="width: 170px">Màn hình</td>
                                    <td class="padding-10" style="width: 170px">
                                        <button id="PCBuilderButton1" type="submit" value="MH" name="PCBModal"
                                            class="btn btn-danger" onmouseover="getPosition()"
                                            style="width: 130px">Chọn Màn hình</button>
                                    </td>
                                    @php
                                        $displayMH = session()->has('PCBMaMH');
                                    @endphp
                                    @if ($displayMH == true)
                                        <td class="padding-10" style="width:900px" id="PCBMH">
                                            <div class="bg-gray-300 card padding-10 text-left">
                                                <div class="row">
                                                    {{-- * Ảnh sản phẩm --}}
                                                    <div class="col-2">
                                                        @php
                                                            $tempImgMH;
                                                            $count = 0;
                                                        @endphp
                                                        @foreach ($productImage as $PI)
                                                            @if ($PI->maSP == session()->get('PCBMaMH'))
                                                                @if ($count == 0)
                                                                    @php
                                                                        $tempImgMH = $PI->anh;
                                                                    @endphp
                                                                    <a
                                                                        href="{{ route('product.show', session()->get('PCBMaMH')) }}">
                                                                        <img class="card-img-top hide-from-work"
                                                                            style="height:110px ; width:110px ; border: 1px solid lightgray"
                                                                            src="{{ asset('assets/img/' . $tempImgMH) }}"
                                                                            id="{{ session()->get('PCBMaMH') }}"
                                                                            alt="..." />
                                                                    </a>
                                                                    @php
                                                                        $count = 1;
                                                                    @endphp
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    {{-- * Hết - Ảnh sản phẩm --}}

                                                    {{-- * Thông tin sản phẩm --}}
                                                    <div class="col-8">
                                                        {{-- * Tên sản phẩm --}}
                                                        <div class="text-bold text-dark">
                                                            {{ session()->get('PCBTenMH') }}
                                                        </div>
                                                        <div class=" text-dark">
                                                            Mã sản phẩm: {{ session()->get('PCBMaMH') }}
                                                            <br>
                                                            Bảo hành: {{ session()->get('PCBBaoHanhMH') }}
                                                            <br>
                                                            Tình trạng sản phẩm:
                                                            {{ session()->get('PCBTinhTrangMH') }}
                                                            <br>
                                                            @php
                                                                if (session()->has('PCBSoLuongMH') == false) {
                                                                    session()->put('PCBSoLuongMH', 1);
                                                                }
                                                            @endphp
                                                            <span class="text-danger text-bold">
                                                                @php
                                                                    $reducedMoneyPercentMH = session()->get('PCBGiamGiaMH');
                                                                    $reducedMoneyFlatMH = 0;
                                                                @endphp
                                                                @foreach ($productPromotion as $PP)
                                                                    @if ($PP->maSP == session()->get('PCBMaMH'))
                                                                        @php
                                                                            if ($PP->kichHoat == 1) {
                                                                                $ten = $PP->tenVoucher;
                                                                                if ($PP->giaTri >= 0 && $PP->giaTri <= 100) {
                                                                                    $reducedMoneyPercentMH += $PP->giaTri;
                                                                                } elseif ($PP->giaTri > 100) {
                                                                                    $reducedMoneyFlatMH += $PP->giaTri;
                                                                                }
                                                                            }
                                                                        @endphp
                                                                    @endif
                                                                @endforeach
                                                                {{ number_format(session()->get('PCBGiaMH') - (session()->get('PCBGiaMH') * $reducedMoneyPercentMH) / 100 - $reducedMoneyFlatMH) }}
                                                                VND x <input type="number" id="PCBSoLuongMH"
                                                                    value="{{ session()->get('PCBSoLuongMH') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongMH">
                                                                =
                                                                <span id="PCBTongTienMH">
                                                                    {{ number_format(session()->get('PCBSoLuongMH') * (session()->get('PCBGiaMH') - (session()->get('PCBGiaMH') * $reducedMoneyPercentMH) / 100 - $reducedMoneyFlatMH)) }}
                                                                    VND
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">

                                                        <button type="submit" name="PCBDeleteMH" id="PCBDeleteMH"
                                                            value="1" class="btn btn-danger">x</button>
                                                    </div>
                                                    {{-- * Hết - Thông tin sản phẩm --}}
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                                {{-- Bàn phím --}}
                                <tr class="">
                                    <td class="padding-10" style="width: 170px">Bàn phím</td>
                                    <td class="padding-10" style="width: 170px">
                                        <button id="PCBuilderButton1" type="submit" value="BP" name="PCBModal"
                                            class="btn btn-danger" onmouseover="getPosition()"
                                            style="width: 130px">Chọn Bàn phím</button>
                                    </td>
                                    @php
                                        $displayBP = session()->has('PCBMaBP');
                                    @endphp
                                    @if ($displayBP == true)
                                        <td class="padding-10" style="width:900px" id="PCBBP">
                                            <div class="bg-gray-300 card padding-10 text-left">
                                                <div class="row">
                                                    {{-- * Ảnh sản phẩm --}}
                                                    <div class="col-2">
                                                        @php
                                                            $tempImgBP;
                                                            $count = 0;
                                                        @endphp
                                                        @foreach ($productImage as $PI)
                                                            @if ($PI->maSP == session()->get('PCBMaBP'))
                                                                @if ($count == 0)
                                                                    @php
                                                                        $tempImgBP = $PI->anh;
                                                                    @endphp
                                                                    <a
                                                                        href="{{ route('product.show', session()->get('PCBMaBP')) }}">
                                                                        <img class="card-img-top hide-from-work"
                                                                            style="height:110px ; width:110px ; border: 1px solid lightgray"
                                                                            src="{{ asset('assets/img/' . $tempImgBP) }}"
                                                                            id="{{ session()->get('PCBMaBP') }}"
                                                                            alt="..." />
                                                                    </a>
                                                                    @php
                                                                        $count = 1;
                                                                    @endphp
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    {{-- * Hết - Ảnh sản phẩm --}}

                                                    {{-- * Thông tin sản phẩm --}}
                                                    <div class="col-8">
                                                        {{-- * Tên sản phẩm --}}
                                                        <div class="text-bold text-dark">
                                                            {{ session()->get('PCBTenBP') }}
                                                        </div>
                                                        <div class=" text-dark">
                                                            Mã sản phẩm: {{ session()->get('PCBMaBP') }}
                                                            <br>
                                                            Bảo hành: {{ session()->get('PCBBaoHanhBP') }}
                                                            <br>
                                                            Tình trạng sản phẩm:
                                                            {{ session()->get('PCBTinhTrangBP') }}
                                                            <br>
                                                            @php
                                                                if (session()->has('PCBSoLuongBP') == false) {
                                                                    session()->put('PCBSoLuongBP', 1);
                                                                }
                                                            @endphp
                                                            <span class="text-danger text-bold">
                                                                @php
                                                                    $reducedMoneyPercentBP = session()->get('PCBGiamGiaBP');
                                                                    $reducedMoneyFlatBP = 0;
                                                                @endphp
                                                                @foreach ($productPromotion as $PP)
                                                                    @if ($PP->maSP == session()->get('PCBMaBP'))
                                                                        @php
                                                                            if ($PP->kichHoat == 1) {
                                                                                $ten = $PP->tenVoucher;
                                                                                if ($PP->giaTri >= 0 && $PP->giaTri <= 100) {
                                                                                    $reducedMoneyPercentBP += $PP->giaTri;
                                                                                } elseif ($PP->giaTri > 100) {
                                                                                    $reducedMoneyFlatBP += $PP->giaTri;
                                                                                }
                                                                            }
                                                                        @endphp
                                                                    @endif
                                                                @endforeach
                                                                {{ number_format(session()->get('PCBGiaBP') - (session()->get('PCBGiaBP') * $reducedMoneyPercentBP) / 100 - $reducedMoneyFlatBP) }}
                                                                VND x <input type="number" id="PCBSoLuongBP"
                                                                    value="{{ session()->get('PCBSoLuongBP') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongBP">
                                                                =
                                                                <span id="PCBTongTienBP">
                                                                    {{ number_format(session()->get('PCBSoLuongBP') * (session()->get('PCBGiaBP') - (session()->get('PCBGiaBP') * $reducedMoneyPercentBP) / 100 - $reducedMoneyFlatBP)) }}
                                                                    VND
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">

                                                        <button type="submit" name="PCBDeleteBP" id="PCBDeleteBP"
                                                            value="1" class="btn btn-danger">x</button>
                                                    </div>
                                                    {{-- * Hết - Thông tin sản phẩm --}}
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                                {{-- Chuột --}}
                                <tr class="">
                                    <td class="padding-10" style="width: 170px">Chuột</td>
                                    <td class="padding-10" style="width: 170px">
                                        <button id="PCBuilderButton1" type="submit" value="Mouse" name="PCBModal"
                                            class="btn btn-danger" onmouseover="getPosition()"
                                            style="width: 130px">Chọn Chuột</button>
                                    </td>
                                    @php
                                        $displayMouse = session()->has('PCBMaMouse');
                                    @endphp
                                    @if ($displayMouse == true)
                                        <td class="padding-10" style="width:900px" id="PCBMouse">
                                            <div class="bg-gray-300 card padding-10 text-left">
                                                <div class="row">
                                                    {{-- * Ảnh sản phẩm --}}
                                                    <div class="col-2">
                                                        @php
                                                            $tempImgMouse;
                                                            $count = 0;
                                                        @endphp
                                                        @foreach ($productImage as $PI)
                                                            @if ($PI->maSP == session()->get('PCBMaMouse'))
                                                                @if ($count == 0)
                                                                    @php
                                                                        $tempImgMouse = $PI->anh;
                                                                    @endphp
                                                                    <a
                                                                        href="{{ route('product.show', session()->get('PCBMaMouse')) }}">
                                                                        <img class="card-img-top hide-from-work"
                                                                            style="height:110px ; width:110px ; border: 1px solid lightgray"
                                                                            src="{{ asset('assets/img/' . $tempImgMouse) }}"
                                                                            id="{{ session()->get('PCBMaMouse') }}"
                                                                            alt="..." />
                                                                    </a>
                                                                    @php
                                                                        $count = 1;
                                                                    @endphp
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    {{-- * Hết - Ảnh sản phẩm --}}

                                                    {{-- * Thông tin sản phẩm --}}
                                                    <div class="col-8">
                                                        {{-- * Tên sản phẩm --}}
                                                        <div class="text-bold text-dark">
                                                            {{ session()->get('PCBTenMouse') }}
                                                        </div>
                                                        <div class=" text-dark">
                                                            Mã sản phẩm: {{ session()->get('PCBMaMouse') }}
                                                            <br>
                                                            Bảo hành: {{ session()->get('PCBBaoHanhMouse') }}
                                                            <br>
                                                            Tình trạng sản phẩm:
                                                            {{ session()->get('PCBTinhTrangMouse') }}
                                                            <br>
                                                            @php
                                                                if (session()->has('PCBSoLuongMouse') == false) {
                                                                    session()->put('PCBSoLuongMouse', 1);
                                                                }
                                                            @endphp
                                                            <span class="text-danger text-bold">
                                                                @php
                                                                    $reducedMoneyPercentMouse = session()->get('PCBGiamGiaMouse');
                                                                    $reducedMoneyFlatMouse = 0;
                                                                @endphp
                                                                @foreach ($productPromotion as $PP)
                                                                    @if ($PP->maSP == session()->get('PCBMaMouse'))
                                                                        @php
                                                                            if ($PP->kichHoat == 1) {
                                                                                $ten = $PP->tenVoucher;
                                                                                if ($PP->giaTri >= 0 && $PP->giaTri <= 100) {
                                                                                    $reducedMoneyPercentMouse += $PP->giaTri;
                                                                                } elseif ($PP->giaTri > 100) {
                                                                                    $reducedMoneyFlatMouse += $PP->giaTri;
                                                                                }
                                                                            }
                                                                        @endphp
                                                                    @endif
                                                                @endforeach
                                                                {{ number_format(session()->get('PCBGiaMouse') - (session()->get('PCBGiaMouse') * $reducedMoneyPercentMouse) / 100 - $reducedMoneyFlatMouse) }}
                                                                VND x <input type="number" id="PCBSoLuongMouse"
                                                                    value="{{ session()->get('PCBSoLuongMouse') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongMouse">
                                                                =
                                                                <span id="PCBTongTienMouse">
                                                                    {{ number_format(session()->get('PCBSoLuongMouse') * (session()->get('PCBGiaMouse') - (session()->get('PCBGiaMouse') * $reducedMoneyPercentMouse) / 100 - $reducedMoneyFlatMouse)) }}
                                                                    VND
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">

                                                        <button type="submit" name="PCBDeleteMouse"
                                                            id="PCBDeleteMouse" value="1"
                                                            class="btn btn-danger">x</button>
                                                    </div>
                                                    {{-- * Hết - Thông tin sản phẩm --}}
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                                {{-- Quạt làm mát --}}
                                <tr class="">
                                    <td class="padding-10" style="width: 170px">Quạt làm mát</td>
                                    <td class="padding-10" style="width: 170px">
                                        <button id="PCBuilderButton1" type="submit" value="Fan" name="PCBModal"
                                            class="btn btn-danger" onmouseover="getPosition()"
                                            style="width: 130px">Chọn Quạt làm mát</button>
                                    </td>
                                    @php
                                        $displayFan = session()->has('PCBMaFan');
                                    @endphp
                                    @if ($displayFan == true)
                                        <td class="padding-10" style="width:900px" id="PCBFan">
                                            <div class="bg-gray-300 card padding-10 text-left">
                                                <div class="row">
                                                    {{-- * Ảnh sản phẩm --}}
                                                    <div class="col-2">
                                                        @php
                                                            $tempImgFan;
                                                            $count = 0;
                                                        @endphp
                                                        @foreach ($productImage as $PI)
                                                            @if ($PI->maSP == session()->get('PCBMaFan'))
                                                                @if ($count == 0)
                                                                    @php
                                                                        $tempImgFan = $PI->anh;
                                                                    @endphp
                                                                    <a
                                                                        href="{{ route('product.show', session()->get('PCBMaFan')) }}">
                                                                        <img class="card-img-top hide-from-work"
                                                                            style="height:110px ; width:110px ; border: 1px solid lightgray"
                                                                            src="{{ asset('assets/img/' . $tempImgFan) }}"
                                                                            id="{{ session()->get('PCBMaFan') }}"
                                                                            alt="..." />
                                                                    </a>
                                                                    @php
                                                                        $count = 1;
                                                                    @endphp
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    {{-- * Hết - Ảnh sản phẩm --}}

                                                    {{-- * Thông tin sản phẩm --}}
                                                    <div class="col-8">
                                                        {{-- * Tên sản phẩm --}}
                                                        <div class="text-bold text-dark">
                                                            {{ session()->get('PCBTenFan') }}
                                                        </div>
                                                        <div class=" text-dark">
                                                            Mã sản phẩm: {{ session()->get('PCBMaFan') }}
                                                            <br>
                                                            Bảo hành: {{ session()->get('PCBBaoHanhFan') }}
                                                            <br>
                                                            Tình trạng sản phẩm:
                                                            {{ session()->get('PCBTinhTrangFan') }}
                                                            <br>
                                                            @php
                                                                if (session()->has('PCBSoLuongFan') == false) {
                                                                    session()->put('PCBSoLuongFan', 1);
                                                                }
                                                            @endphp
                                                            <span class="text-danger text-bold">
                                                                @php
                                                                    $reducedMoneyPercentFan = session()->get('PCBGiamGiaFan');
                                                                    $reducedMoneyFlatFan = 0;
                                                                @endphp
                                                                @foreach ($productPromotion as $PP)
                                                                    @if ($PP->maSP == session()->get('PCBMaFan'))
                                                                        @php
                                                                            if ($PP->kichHoat == 1) {
                                                                                $ten = $PP->tenVoucher;
                                                                                if ($PP->giaTri >= 0 && $PP->giaTri <= 100) {
                                                                                    $reducedMoneyPercentFan += $PP->giaTri;
                                                                                } elseif ($PP->giaTri > 100) {
                                                                                    $reducedMoneyFlatFan += $PP->giaTri;
                                                                                }
                                                                            }
                                                                        @endphp
                                                                    @endif
                                                                @endforeach
                                                                {{ number_format(session()->get('PCBGiaFan') - (session()->get('PCBGiaFan') * $reducedMoneyPercentFan) / 100 - $reducedMoneyFlatFan) }}
                                                                VND x <input type="number" id="PCBSoLuongFan"
                                                                    value="{{ session()->get('PCBSoLuongFan') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongFan">
                                                                =
                                                                <span id="PCBTongTienFan">
                                                                    {{ number_format(session()->get('PCBSoLuongFan') * (session()->get('PCBGiaFan') - (session()->get('PCBGiaFan') * $reducedMoneyPercentFan) / 100 - $reducedMoneyFlatFan)) }}
                                                                    VND
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">

                                                        <button type="submit" name="PCBDeleteFan" id="PCBDeleteFan"
                                                            value="1" class="btn btn-danger">x</button>
                                                    </div>
                                                    {{-- * Hết - Thông tin sản phẩm --}}
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                                {{-- Tản nhiệt khí --}}
                                <tr class="">
                                    <td class="padding-10" style="width: 170px">Tản nhiệt khí</td>
                                    <td class="padding-10" style="width: 170px">
                                        <button id="PCBuilderButton1" type="submit" value="TNK" name="PCBModal"
                                            class="btn btn-danger" onmouseover="getPosition()"
                                            style="width: 130px">Chọn Tản nhiệt khí</button>
                                    </td>
                                    @php
                                        $displayTNK = session()->has('PCBMaTNK');
                                    @endphp
                                    @if ($displayTNK == true)
                                        <td class="padding-10" style="width:900px" id="PCBTNK">
                                            <div class="bg-gray-300 card padding-10 text-left">
                                                <div class="row">
                                                    {{-- * Ảnh sản phẩm --}}
                                                    <div class="col-2">
                                                        @php
                                                            $tempImgTNK;
                                                            $count = 0;
                                                        @endphp
                                                        @foreach ($productImage as $PI)
                                                            @if ($PI->maSP == session()->get('PCBMaTNK'))
                                                                @if ($count == 0)
                                                                    @php
                                                                        $tempImgTNK = $PI->anh;
                                                                    @endphp
                                                                    <a
                                                                        href="{{ route('product.show', session()->get('PCBMaTNK')) }}">
                                                                        <img class="card-img-top hide-from-work"
                                                                            style="height:110px ; width:110px ; border: 1px solid lightgray"
                                                                            src="{{ asset('assets/img/' . $tempImgTNK) }}"
                                                                            id="{{ session()->get('PCBMaTNK') }}"
                                                                            alt="..." />
                                                                    </a>
                                                                    @php
                                                                        $count = 1;
                                                                    @endphp
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    {{-- * Hết - Ảnh sản phẩm --}}

                                                    {{-- * Thông tin sản phẩm --}}
                                                    <div class="col-8">
                                                        {{-- * Tên sản phẩm --}}
                                                        <div class="text-bold text-dark">
                                                            {{ session()->get('PCBTenTNK') }}
                                                        </div>
                                                        <div class=" text-dark">
                                                            Mã sản phẩm: {{ session()->get('PCBMaTNK') }}
                                                            <br>
                                                            Bảo hành: {{ session()->get('PCBBaoHanhTNK') }}
                                                            <br>
                                                            Tình trạng sản phẩm:
                                                            {{ session()->get('PCBTinhTrangTNK') }}
                                                            <br>
                                                            @php
                                                                if (session()->has('PCBSoLuongTNK') == false) {
                                                                    session()->put('PCBSoLuongTNK', 1);
                                                                }
                                                            @endphp
                                                            <span class="text-danger text-bold">
                                                                @php
                                                                    $reducedMoneyPercentTNK = session()->get('PCBGiamGiaTNK');
                                                                    $reducedMoneyFlatTNK = 0;
                                                                @endphp
                                                                @foreach ($productPromotion as $PP)
                                                                    @if ($PP->maSP == session()->get('PCBMaTNK'))
                                                                        @php
                                                                            if ($PP->kichHoat == 1) {
                                                                                $ten = $PP->tenVoucher;
                                                                                if ($PP->giaTri >= 0 && $PP->giaTri <= 100) {
                                                                                    $reducedMoneyPercentTNK += $PP->giaTri;
                                                                                } elseif ($PP->giaTri > 100) {
                                                                                    $reducedMoneyFlatTNK += $PP->giaTri;
                                                                                }
                                                                            }
                                                                        @endphp
                                                                    @endif
                                                                @endforeach
                                                                {{ number_format(session()->get('PCBGiaTNK') - (session()->get('PCBGiaTNK') * $reducedMoneyPercentTNK) / 100 - $reducedMoneyFlatTNK) }}
                                                                VND x <input type="number" id="PCBSoLuongTNK"
                                                                    value="{{ session()->get('PCBSoLuongTNK') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongTNK">
                                                                =
                                                                <span id="PCBTongTienTNK">
                                                                    {{ number_format(session()->get('PCBSoLuongTNK') * (session()->get('PCBGiaTNK') - (session()->get('PCBGiaTNK') * $reducedMoneyPercentTNK) / 100 - $reducedMoneyFlatTNK)) }}
                                                                    VND
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">

                                                        <button type="submit" name="PCBDeleteTNK" id="PCBDeleteTNK"
                                                            value="1" class="btn btn-danger">x</button>
                                                    </div>
                                                    {{-- * Hết - Thông tin sản phẩm --}}
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                                {{-- Tản nhiệt nước --}}
                                <tr class="">
                                    <td class="padding-10" style="width: 170px">Tản nhiệt nước</td>
                                    <td class="padding-10" style="width: 170px">
                                        <button id="PCBuilderButton1" type="submit" value="TNN" name="PCBModal"
                                            class="btn btn-danger" onmouseover="getPosition()"
                                            style="width: 130px">Chọn Tản nhiệt nước</button>
                                    </td>
                                    @php
                                        $displayTNN = session()->has('PCBMaTNN');
                                    @endphp
                                    @if ($displayTNN == true)
                                        <td class="padding-10" style="width:900px" id="PCBTNN">
                                            <div class="bg-gray-300 card padding-10 text-left">
                                                <div class="row">
                                                    {{-- * Ảnh sản phẩm --}}
                                                    <div class="col-2">
                                                        @php
                                                            $tempImgTNN;
                                                            $count = 0;
                                                        @endphp
                                                        @foreach ($productImage as $PI)
                                                            @if ($PI->maSP == session()->get('PCBMaTNN'))
                                                                @if ($count == 0)
                                                                    @php
                                                                        $tempImgTNN = $PI->anh;
                                                                    @endphp
                                                                    <a
                                                                        href="{{ route('product.show', session()->get('PCBMaTNN')) }}">
                                                                        <img class="card-img-top hide-from-work"
                                                                            style="height:110px ; width:110px ; border: 1px solid lightgray"
                                                                            src="{{ asset('assets/img/' . $tempImgTNN) }}"
                                                                            id="{{ session()->get('PCBMaTNN') }}"
                                                                            alt="..." />
                                                                    </a>
                                                                    @php
                                                                        $count = 1;
                                                                    @endphp
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    {{-- * Hết - Ảnh sản phẩm --}}

                                                    {{-- * Thông tin sản phẩm --}}
                                                    <div class="col-8">
                                                        {{-- * Tên sản phẩm --}}
                                                        <div class="text-bold text-dark">
                                                            {{ session()->get('PCBTenTNN') }}
                                                        </div>
                                                        <div class=" text-dark">
                                                            Mã sản phẩm: {{ session()->get('PCBMaTNN') }}
                                                            <br>
                                                            Bảo hành: {{ session()->get('PCBBaoHanhTNN') }}
                                                            <br>
                                                            Tình trạng sản phẩm:
                                                            {{ session()->get('PCBTinhTrangTNN') }}
                                                            <br>
                                                            @php
                                                                if (session()->has('PCBSoLuongTNN') == false) {
                                                                    session()->put('PCBSoLuongTNN', 1);
                                                                }
                                                            @endphp
                                                            <span class="text-danger text-bold">
                                                                @php
                                                                    $reducedMoneyPercentTNN = session()->get('PCBGiamGiaTNN');
                                                                    $reducedMoneyFlatTNN = 0;
                                                                @endphp
                                                                @foreach ($productPromotion as $PP)
                                                                    @if ($PP->maSP == session()->get('PCBMaTNN'))
                                                                        @php
                                                                            if ($PP->kichHoat == 1) {
                                                                                $ten = $PP->tenVoucher;
                                                                                if ($PP->giaTri >= 0 && $PP->giaTri <= 100) {
                                                                                    $reducedMoneyPercentTNN += $PP->giaTri;
                                                                                } elseif ($PP->giaTri > 100) {
                                                                                    $reducedMoneyFlatTNN += $PP->giaTri;
                                                                                }
                                                                            }
                                                                        @endphp
                                                                    @endif
                                                                @endforeach
                                                                {{ number_format(session()->get('PCBGiaTNN') - (session()->get('PCBGiaTNN') * $reducedMoneyPercentTNN) / 100 - $reducedMoneyFlatTNN) }}
                                                                VND x <input type="number" id="PCBSoLuongTNN"
                                                                    value="{{ session()->get('PCBSoLuongTNN') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongTNN">
                                                                =
                                                                <span id="PCBTongTienTNN">
                                                                    {{ number_format(session()->get('PCBSoLuongTNN') * (session()->get('PCBGiaTNN') - (session()->get('PCBGiaTNN') * $reducedMoneyPercentTNN) / 100 - $reducedMoneyFlatTNN)) }}
                                                                    VND
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">

                                                        <button type="submit" name="PCBDeleteTNN" id="PCBDeleteTNN"
                                                            value="1" class="btn btn-danger">x</button>
                                                    </div>
                                                    {{-- * Hết - Thông tin sản phẩm --}}
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                                {{-- Bộ phận khác --}}
                                <tr hidden class="">
                                    <td class="padding-10" style="width: 170px">Laptop
                                    </td>
                                    <td class="padding-10" style="width: 170px">
                                        <button id="PCBuilderButton2" type="submit" value="LaptopGaming"
                                            name="PCBModal" class="btn btn-danger" onmouseover="getPosition()"
                                            style="width: 130px">Chọn
                                            khác</button>
                                    </td>
                                    @php
                                        $displayL = session()->has('PCBMaL');
                                    @endphp
                                    @if ($displayL == true)
                                        <td class="padding-10" style="width:900px" id="PCBL">
                                            <div class="bg-gray-300 card padding-10 text-left">
                                                <div class="row">
                                                    <!-- Ảnh sản phẩm-->
                                                    <div class="col-3 ">
                                                        @php
                                                            $tempImgL;
                                                            $count = 0;
                                                        @endphp
                                                        @foreach ($productImage as $PI)
                                                            @if ($PI->maSP == session()->get('PCBMaL'))
                                                                @if ($count == 0)
                                                                    @php
                                                                        $tempImgL = $PI->anh;
                                                                    @endphp
                                                                    <a
                                                                        href="{{ route('product.show', session()->get('PCBMaL')) }}">
                                                                        <img class="card-img-top hide-from-work"
                                                                            style="height:110px ; width:110px ; border: 1px solid lightgray"
                                                                            src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                            id="{{ session()->get('PCBMaL') }}"
                                                                            alt="..." />
                                                                    </a>
                                                                    @php
                                                                        $count = 1;
                                                                    @endphp
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    {{-- Hết - Ảnh sản phẩm --}}

                                                    {{-- Thông tin sản phẩm --}}
                                                    <div class="col-7">
                                                        {{-- Tên sản phẩm --}}
                                                        <div class="text-bold text-dark">
                                                            {{ session()->get('PCBTenL') }}
                                                        </div>
                                                        <div class=" text-dark">
                                                            Mã sản phẩm: {{ session()->get('PCBMaL') }}
                                                            <br>
                                                            Bảo hành: {{ session()->get('PCBBaoHanhL') }}
                                                            <br>
                                                            Tình trạng sản phẩm: {{ session()->get('PCBTinhTrangL') }}
                                                            <br>
                                                            @php
                                                                if (session()->has('PCBSoLuongL') == false) {
                                                                    session()->put('PCBSoLuongL', 1);
                                                                }
                                                            @endphp
                                                            <span class="text-danger text-bold">
                                                                @php
                                                                    $reducedMoneyPercentL = session()->get('PCBGiamGiaL');
                                                                    $reducedMoneyFlatL = 0;
                                                                @endphp
                                                                @foreach ($productPromotion as $PP)
                                                                    @if ($PP->maSP == session()->get('PCBMaL'))
                                                                        @php
                                                                            if ($PP->kichHoat == 1) {
                                                                                $ten = $PP->tenVoucher;
                                                                                if ($PP->giaTri >= 0 && $PP->giaTri <= 100) {
                                                                                    $reducedMoneyPercentL += $PP->giaTri;
                                                                                } elseif ($PP->giaTri > 100) {
                                                                                    $reducedMoneyFlatL += $PP->giaTri;
                                                                                }
                                                                            }
                                                                        @endphp
                                                                    @endif
                                                                @endforeach
                                                                {{ number_format(session()->get('PCBGiaL') - (session()->get('PCBGiaL') * $reducedMoneyPercentL) / 100 - $reducedMoneyFlatL) }}
                                                                VND x <input type="number" id="PCBSoLuongL"
                                                                    value="{{ session()->get('PCBSoLuongL') }}"
                                                                    min="1" max="9" name="PCBSoLuongL">
                                                                =
                                                                <span id="PCBTongTienL">
                                                                    {{ number_format(session()->get('PCBSoLuongL') * (session()->get('PCBGiaL') - (session()->get('PCBGiaL') * $reducedMoneyPercentL) / 100 - $reducedMoneyFlatL)) }}
                                                                    VND
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <button type="submit" name="PCBDeleteL" value="1"
                                                            id="PCBDeleteL" class="btn btn-danger">x</button>
                                                    </div>
                                                    {{-- Hết - Thông tin sản phẩm --}}
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            </table>
                        </form>

                    </div>
                    {{-- Thêm vào giỏ hàng --}}
                    <div class="row padding-10 ">
                        <div class="w-100" id="PCBCart">
                            <form action="{{ route('cart.addToCartPCB') }}" method="POST">
                                @csrf
                                {{-- Bộ vi xử lý --}}
                                @if ($displayCPU == true)
                                    {{-- * Mã --}}
                                    <input type="hidden" name="PCBCartMaCPU"
                                        value="{{ session()->has('PCBMaCPU') ? session()->get('PCBMaCPU') : 0 }}">
                                    {{-- * Số lượng --}}
                                    <input type="hidden" name="PCBCartSoLuongCPU"
                                        value="{{ session()->has('PCBSoLuongCPU') ? session()->get('PCBSoLuongCPU') : 0 }}">
                                    {{-- * Ảnh --}}
                                    <input type="hidden" name="PCBCartAnhCPU" value="{{ $tempImgCPU }}">
                                    <input type="hidden" value="{{ $reducedMoneyFlatCPU }}" name="reduceFlatCPU">
                                    <input type="hidden" value="{{ $reducedMoneyPercentCPU }}" name="reducePercentCPU">
                                    {{-- Bộ vi xử lý --}}
                                @endif
                                {{-- Bo mạch chủ --}}
                                @if ($displayBMC == true)
                                    {{-- * Mã --}}
                                    <input type="hidden" name="PCBCartMaBMC"
                                        value="{{ session()->has('PCBMaBMC') ? session()->get('PCBMaBMC') : 0 }}">
                                    {{-- * Số lượng --}}
                                    <input type="hidden" name="PCBCartSoLuongBMC"
                                        value="{{ session()->has('PCBSoLuongBMC') ? session()->get('PCBSoLuongBMC') : 0 }}">
                                    {{-- * Ảnh --}}
                                    <input type="hidden" name="PCBCartAnhBMC" value="{{ $tempImgBMC }}">
                                    <input type="hidden" value="{{ $reducedMoneyFlatBMC }}" name="reduceFlatBMC">
                                    <input type="hidden" value="{{ $reducedMoneyPercentBMC }}" name="reducePercentBMC">
                                    {{-- Bo mạch chủ --}}
                                @endif
                                {{-- RAM --}}
                                @if ($displayRAM == true)
                                    {{-- * Mã --}}
                                    <input type="hidden" name="PCBCartMaRAM"
                                        value="{{ session()->has('PCBMaRAM') ? session()->get('PCBMaRAM') : 0 }}">
                                    {{-- * Số lượng --}}
                                    <input type="hidden" name="PCBCartSoLuongRAM"
                                        value="{{ session()->has('PCBSoLuongRAM') ? session()->get('PCBSoLuongRAM') : 0 }}">
                                    {{-- * Ảnh --}}
                                    <input type="hidden" name="PCBCartAnhRAM" value="{{ $tempImgRAM }}">
                                    <input type="hidden" value="{{ $reducedMoneyFlatRAM }}" name="reduceFlatRAM">
                                    <input type="hidden" value="{{ $reducedMoneyPercentRAM }}" name="reducePercentRAM">
                                    {{-- RAM --}}
                                @endif
                                {{-- HDD --}}
                                @if ($displayHDD == true)
                                    {{-- * Mã --}}
                                    <input type="hidden" name="PCBCartMaHDD"
                                        value="{{ session()->has('PCBMaHDD') ? session()->get('PCBMaHDD') : 0 }}">
                                    {{-- * Số lượng --}}
                                    <input type="hidden" name="PCBCartSoLuongHDD"
                                        value="{{ session()->has('PCBSoLuongHDD') ? session()->get('PCBSoLuongHDD') : 0 }}">
                                    {{-- * Ảnh --}}
                                    <input type="hidden" name="PCBCartAnhHDD" value="{{ $tempImgHDD }}">
                                    <input type="hidden" value="{{ $reducedMoneyFlatHDD }}" name="reduceFlatHDD">
                                    <input type="hidden" value="{{ $reducedMoneyPercentHDD }}" name="reducePercentHDD">
                                    {{-- HDD --}}
                                @endif
                                {{-- SSD --}}
                                @if ($displaySSD == true)
                                    {{-- * Mã --}}
                                    <input type="hidden" name="PCBCartMaSSD"
                                        value="{{ session()->has('PCBMaSSD') ? session()->get('PCBMaSSD') : 0 }}">
                                    {{-- * Số lượng --}}
                                    <input type="hidden" name="PCBCartSoLuongSSD"
                                        value="{{ session()->has('PCBSoLuongSSD') ? session()->get('PCBSoLuongSSD') : 0 }}">
                                    {{-- * Ảnh --}}
                                    <input type="hidden" name="PCBCartAnhSSD" value="{{ $tempImgSSD }}">
                                    <input type="hidden" value="{{ $reducedMoneyFlatSSD }}" name="reduceFlatSSD">
                                    <input type="hidden" value="{{ $reducedMoneyPercentSSD }}" name="reducePercentSSD">
                                    {{-- SSD --}}
                                @endif
                                {{-- VGA --}}
                                @if ($displayVGA == true)
                                    {{-- * Mã --}}
                                    <input type="hidden" name="PCBCartMaVGA"
                                        value="{{ session()->has('PCBMaVGA') ? session()->get('PCBMaVGA') : 0 }}">
                                    {{-- * Số lượng --}}
                                    <input type="hidden" name="PCBCartSoLuongVGA"
                                        value="{{ session()->has('PCBSoLuongVGA') ? session()->get('PCBSoLuongVGA') : 0 }}">
                                    {{-- * Ảnh --}}
                                    <input type="hidden" name="PCBCartAnhVGA" value="{{ $tempImgVGA }}">
                                    <input type="hidden" value="{{ $reducedMoneyFlatVGA }}" name="reduceFlatVGA">
                                    <input type="hidden" value="{{ $reducedMoneyPercentVGA }}" name="reducePercentVGA">
                                    {{-- VGA --}}
                                @endif

                                {{-- Nguồn --}}
                                @if ($displayPSU == true)
                                    {{-- * Mã --}}
                                    <input type="hidden" name="PCBCartMaPSU"
                                        value="{{ session()->has('PCBMaPSU') ? session()->get('PCBMaPSU') : 0 }}">
                                    {{-- * Số lượng --}}
                                    <input type="hidden" name="PCBCartSoLuongPSU"
                                        value="{{ session()->has('PCBSoLuongPSU') ? session()->get('PCBSoLuongPSU') : 0 }}">
                                    {{-- * Ảnh --}}
                                    <input type="hidden" name="PCBCartAnhPSU" value="{{ $tempImgPSU }}">
                                    <input type="hidden" value="{{ $reducedMoneyFlatPSU }}" name="reduceFlatPSU">
                                    <input type="hidden" value="{{ $reducedMoneyPercentPSU }}" name="reducePercentPSU">
                                    {{-- Nguồn --}}
                                @endif
                                {{-- Vỏ case --}}
                                @if ($displayCase == true)
                                    {{-- * Mã --}}
                                    <input type="hidden" name="PCBCartMaCase"
                                        value="{{ session()->has('PCBMaCase') ? session()->get('PCBMaCase') : 0 }}">
                                    {{-- * Số lượng --}}
                                    <input type="hidden" name="PCBCartSoLuongCase"
                                        value="{{ session()->has('PCBSoLuongCase') ? session()->get('PCBSoLuongCase') : 0 }}">
                                    {{-- * Ảnh --}}
                                    <input type="hidden" name="PCBCartAnhCase" value="{{ $tempImgCase }}">
                                    <input type="hidden" value="{{ $reducedMoneyFlatCase }}" name="reduceFlatCase">
                                    <input type="hidden" value="{{ $reducedMoneyPercentCase }}" name="reducePercentCase">
                                    {{-- Vỏ case --}}
                                @endif
                                {{-- Màn hình --}}
                                @if ($displayMH == true)
                                    {{-- * Mã --}}
                                    <input type="hidden" name="PCBCartMaMH"
                                        value="{{ session()->has('PCBMaMH') ? session()->get('PCBMaMH') : 0 }}">
                                    {{-- * Số lượng --}}
                                    <input type="hidden" name="PCBCartSoLuongMH"
                                        value="{{ session()->has('PCBSoLuongMH') ? session()->get('PCBSoLuongMH') : 0 }}">
                                    {{-- * Ảnh --}}
                                    <input type="hidden" name="PCBCartAnhMH" value="{{ $tempImgMH }}">
                                    <input type="hidden" value="{{ $reducedMoneyFlatMH }}" name="reduceFlatMH">
                                    <input type="hidden" value="{{ $reducedMoneyPercentMH }}" name="reducePercentMH">
                                    {{-- Màn hình --}}
                                @endif
                                {{-- Bàn phím --}}
                                @if ($displayBP == true)
                                    {{-- * Mã --}}
                                    <input type="hidden" name="PCBCartMaBP"
                                        value="{{ session()->has('PCBMaBP') ? session()->get('PCBMaBP') : 0 }}">
                                    {{-- * Số lượng --}}
                                    <input type="hidden" name="PCBCartSoLuongBP"
                                        value="{{ session()->has('PCBSoLuongBP') ? session()->get('PCBSoLuongBP') : 0 }}">
                                    {{-- * Ảnh --}}
                                    <input type="hidden" name="PCBCartAnhBP" value="{{ $tempImgBP }}">
                                    <input type="hidden" value="{{ $reducedMoneyFlatBP }}" name="reduceFlatBP">
                                    <input type="hidden" value="{{ $reducedMoneyPercentBP }}" name="reducePercentBP">
                                    {{-- Bàn phím --}}
                                @endif
                                {{-- Chuột --}}
                                @if ($displayMouse == true)
                                    {{-- * Mã --}}
                                    <input type="hidden" name="PCBCartMaMouse"
                                        value="{{ session()->has('PCBMaMouse') ? session()->get('PCBMaMouse') : 0 }}">
                                    {{-- * Số lượng --}}
                                    <input type="hidden" name="PCBCartSoLuongMouse"
                                        value="{{ session()->has('PCBSoLuongMouse') ? session()->get('PCBSoLuongMouse') : 0 }}">
                                    {{-- * Ảnh --}}
                                    <input type="hidden" name="PCBCartAnhMouse" value="{{ $tempImgMouse }}">
                                    <input type="hidden" value="{{ $reducedMoneyFlatMouse }}" name="reduceFlatMouse">
                                    <input type="hidden" value="{{ $reducedMoneyPercentMouse }}" name="reducePercentMouse">
                                    {{-- Chuột --}}
                                @endif
                                {{-- Quạt làm mát --}}
                                @if ($displayFan == true)
                                    {{-- * Mã --}}
                                    <input type="hidden" name="PCBCartMaFan"
                                        value="{{ session()->has('PCBMaFan') ? session()->get('PCBMaFan') : 0 }}">
                                    {{-- * Số lượng --}}
                                    <input type="hidden" name="PCBCartSoLuongFan"
                                        value="{{ session()->has('PCBSoLuongFan') ? session()->get('PCBSoLuongFan') : 0 }}">
                                    {{-- * Ảnh --}}
                                    <input type="hidden" name="PCBCartAnhFan" value="{{ $tempImgFan }}">
                                    <input type="hidden" value="{{ $reducedMoneyFlatFan }}" name="reduceFlatFan">
                                    <input type="hidden" value="{{ $reducedMoneyPercentFan }}" name="reducePercentFan">
                                    {{-- Quạt làm mát --}}
                                @endif
                                {{-- Tản nhiệt khí --}}
                                @if ($displayTNK == true)
                                    {{-- * Mã --}}
                                    <input type="hidden" name="PCBCartMaTNK"
                                        value="{{ session()->has('PCBMaTNK') ? session()->get('PCBMaTNK') : 0 }}">
                                    {{-- * Số lượng --}}
                                    <input type="hidden" name="PCBCartSoLuongTNK"
                                        value="{{ session()->has('PCBSoLuongTNK') ? session()->get('PCBSoLuongTNK') : 0 }}">
                                    {{-- * Ảnh --}}
                                    <input type="hidden" name="PCBCartAnhTNK" value="{{ $tempImgTNK }}">
                                    <input type="hidden" value="{{ $reducedMoneyFlatTNK }}" name="reduceFlatTNK">
                                    <input type="hidden" value="{{ $reducedMoneyPercentTNK }}" name="reducePercentTNK">
                                    {{-- Tản nhiệt khí --}}
                                @endif
                                {{-- Tản nhiệt nước --}}
                                @if ($displayTNN == true)
                                    {{-- * Mã --}}
                                    <input type="hidden" name="PCBCartMaTNN"
                                        value="{{ session()->has('PCBMaTNN') ? session()->get('PCBMaTNN') : 0 }}">
                                    {{-- * Số lượng --}}
                                    <input type="hidden" name="PCBCartSoLuongTNN"
                                        value="{{ session()->has('PCBSoLuongTNN') ? session()->get('PCBSoLuongTNN') : 0 }}">
                                    {{-- * Ảnh --}}
                                    <input type="hidden" name="PCBCartAnhTNN" value="{{ $tempImgTNN }}">
                                    <input type="hidden" value="{{ $reducedMoneyFlatTNN }}" name="reduceFlatTNN">
                                    <input type="hidden" value="{{ $reducedMoneyPercentTNN }}" name="reducePercentTNN">
                                    {{-- Tản nhiệt nước --}}
                                @endif
                                {{-- Khác --}}
                                @if ($displayL == true)
                                    {{-- L --}}
                                    {{-- * Mã --}}
                                    <input type="hidden" name="PCBCartMaL"
                                        value="{{ session()->has('PCBMaL') ? session()->get('PCBMaL') : 0 }}">
                                    {{-- * Số lượng --}}
                                    <input type="hidden" name="PCBCartSoLuongL"
                                        value="{{ session()->has('PCBSoLuongL') ? session()->get('PCBSoLuongL') : 0 }}">
                                    {{-- * Ảnh --}}
                                    <input type="hidden" name="PCBCartAnhL" value="{{ $tempImgL }}">
                                    <input type="hidden" value="{{ $reducedMoneyFlatL }}" name="reduceFlatL">
                                    <input type="hidden" value="{{ $reducedMoneyPercentL }}" name="reducePercentL">
                                    {{-- L --}}
                                @endif

                                <button class="btn btn-danger w-100" type="submit">Thêm vào giỏ
                                    hàng</button>
                            </form>
                            <form action="{{ route('PCBuilderCustomer.store') }}" method="POST">
                                @csrf
                                <button type="submit" name="PCBDeleteAll" id="PCBDeleteAll" value="1"
                                    class="btn btn-danger w-100">Reset xây dựng PC</button>
                            </form>
                        </div>
                    </div>
                    {{-- Hết - Thêm vào giỏ hàng --}}
                </div>

            </div>
        </div>
        <!-- /.container-fluid -->
    </div>

    </div>
    <!-- End of Page Wrapper -->
    @include('Customer.PCBuilder.pcbuilderScript')

    <script>
        // Get the modal
        var modal = document.getElementById("PCBuildModal");
        // var modal2 = document.getElementById("PCBuildModal2");
        // var closex = document.getElementById("close-x");

        // Get the button that opens the modal
        var btn1 = document.getElementById("PCBuilderButton1");
        var btn2 = document.getElementById("PCBuilderButton2");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close-PCB")[0];

        // function loadModal() {
        //     if ({{ session()->has('modal') }} !== null) {
        //         modal.style.display = "block";
        //         console.log("LOAD");
        //     }
        // }

        // window.onload = loadModal();

        // When the user clicks the button, open the modal
        btn1.onclick = function() {
            // modal.style.display = "block";
            console.log("BTN");
            document.getElementById('modalStatus').value = 1;
            // {{ session()->put('modal', 1) }}
        }
        btn2.onclick = function() {
            // modal.style.display = "block";
            console.log("BTN");
            // {{ session()->put('modal', 1) }}
            document.getElementById('modalStatus').value = 1;
        }
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
            // modal2.style.display = "none";
            console.log("X CLICK");
            console.log("Modal is " + {{ session()->get('modal') }});
            document.getElementById('modalStatus').value = 0;
            {{ session()->put('modalClose', 1) }}
            console.log("Modal close is " + {{ session()->get('modalClose') }});

        }

        function closeModalOnClick() {
            document.getElementById('modalStatus2').value = 0;
        }

        // closex.onclick = function() {
        //     modal.style.display = "none";
        //     modal2.style.display = "none";
        //     console.log("X2 CLICK");
        // }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                console.log("OUTSIDE CLICK");
                document.getElementById('modalStatus').value = 0;
                {{ session()->put('modalClose', 1) }}
            }
        }
        var mousePos;
        onmousemove = function(e) {
            // console.log("mouse location:", e.clientX, e.clientY)
            mousePos = e.clientY;
        }

        function setPosition() {
            console.log("HIRES::", {{ $scrollPos }});
            document.documentElement.scrollTop = document.body.scrollTop = {{ $scrollPos }}
            // console.log(document.documentElement.scrollTop || document.body.scrollTop);

        }

        function getPosition() {
            // document.documentElement.scrollTop = document.body.scrollTop =
            mousePos = document.documentElement.scrollTop || document.body.scrollTop;
            console.log("RES:", mousePos);
            document.getElementById('scrollPos').value = mousePos;
            document.getElementById('modalStatus').value = 1;
            // document.getElementById('scrollPos2').value = mousePos;
        }


        window.onload = setPosition();
    </script>
    @include('Customer.Layout.Common.bottom_script')
    <script></script>
</body>

</html>
