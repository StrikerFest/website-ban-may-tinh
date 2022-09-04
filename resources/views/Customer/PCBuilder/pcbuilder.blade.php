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
        if(pageAccessedByReload == true){
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
                                                                        <span
                                                                            class="text-danger text-bold">{{ number_format($SPM->giaSP) }}
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
                                                            <span
                                                                class="text-danger text-bold">{{ number_format($SPM->giaSP) }}
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
                                                                {{ number_format(session()->get('PCBGiaCPU')) }}
                                                                VND x <input type="number" id="PCBSoLuongCPU"
                                                                    value="{{ session()->get('PCBSoLuongCPU') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongCPU">
                                                                =
                                                                <span id="PCBTongTienCPU">
                                                                    {{ number_format(session()->get('PCBSoLuongCPU') * session()->get('PCBGiaCPU')) }}
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
                                                                {{ number_format(session()->get('PCBGiaBMC')) }}
                                                                VND x <input type="number" id="PCBSoLuongBMC"
                                                                    value="{{ session()->get('PCBSoLuongBMC') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongBMC">
                                                                =
                                                                <span id="PCBTongTienBMC">
                                                                    {{ number_format(session()->get('PCBSoLuongBMC') * session()->get('PCBGiaBMC')) }}
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
                                                                {{ number_format(session()->get('PCBGiaRAM')) }}
                                                                VND x <input type="number" id="PCBSoLuongRAM"
                                                                    value="{{ session()->get('PCBSoLuongRAM') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongRAM">
                                                                =
                                                                <span id="PCBTongTienRAM">
                                                                    {{ number_format(session()->get('PCBSoLuongRAM') * session()->get('PCBGiaRAM')) }}
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
                                                                {{ number_format(session()->get('PCBGiaHDD')) }}
                                                                VND x <input type="number" id="PCBSoLuongHDD"
                                                                    value="{{ session()->get('PCBSoLuongHDD') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongHDD">
                                                                =
                                                                <span id="PCBTongTienHDD">
                                                                    {{ number_format(session()->get('PCBSoLuongHDD') * session()->get('PCBGiaHDD')) }}
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
                                                                {{ number_format(session()->get('PCBGiaSSD')) }}
                                                                VND x <input type="number" id="PCBSoLuongSSD"
                                                                    value="{{ session()->get('PCBSoLuongSSD') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongSSD">
                                                                =
                                                                <span id="PCBTongTienSSD">
                                                                    {{ number_format(session()->get('PCBSoLuongSSD') * session()->get('PCBGiaSSD')) }}
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
                                                                {{ number_format(session()->get('PCBGiaVGA')) }}
                                                                VND x <input type="number" id="PCBSoLuongVGA"
                                                                    value="{{ session()->get('PCBSoLuongVGA') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongVGA">
                                                                =
                                                                <span id="PCBTongTienVGA">
                                                                    {{ number_format(session()->get('PCBSoLuongVGA') * session()->get('PCBGiaVGA')) }}
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
                                                                {{ number_format(session()->get('PCBGiaPSU')) }}
                                                                VND x <input type="number" id="PCBSoLuongPSU"
                                                                    value="{{ session()->get('PCBSoLuongPSU') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongPSU">
                                                                =
                                                                <span id="PCBTongTienPSU">
                                                                    {{ number_format(session()->get('PCBSoLuongPSU') * session()->get('PCBGiaPSU')) }}
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
                                                                {{ number_format(session()->get('PCBGiaCase')) }}
                                                                VND x <input type="number" id="PCBSoLuongCase"
                                                                    value="{{ session()->get('PCBSoLuongCase') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongCase">
                                                                =
                                                                <span id="PCBTongTienCase">
                                                                    {{ number_format(session()->get('PCBSoLuongCase') * session()->get('PCBGiaCase')) }}
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
                                                                {{ number_format(session()->get('PCBGiaMH')) }}
                                                                VND x <input type="number" id="PCBSoLuongMH"
                                                                    value="{{ session()->get('PCBSoLuongMH') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongMH">
                                                                =
                                                                <span id="PCBTongTienMH">
                                                                    {{ number_format(session()->get('PCBSoLuongMH') * session()->get('PCBGiaMH')) }}
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
                                                                {{ number_format(session()->get('PCBGiaBP')) }}
                                                                VND x <input type="number" id="PCBSoLuongBP"
                                                                    value="{{ session()->get('PCBSoLuongBP') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongBP">
                                                                =
                                                                <span id="PCBTongTienBP">
                                                                    {{ number_format(session()->get('PCBSoLuongBP') * session()->get('PCBGiaBP')) }}
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
                                                                {{ number_format(session()->get('PCBGiaMouse')) }}
                                                                VND x <input type="number" id="PCBSoLuongMouse"
                                                                    value="{{ session()->get('PCBSoLuongMouse') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongMouse">
                                                                =
                                                                <span id="PCBTongTienMouse">
                                                                    {{ number_format(session()->get('PCBSoLuongMouse') * session()->get('PCBGiaMouse')) }}
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
                                                                {{ number_format(session()->get('PCBGiaFan')) }}
                                                                VND x <input type="number" id="PCBSoLuongFan"
                                                                    value="{{ session()->get('PCBSoLuongFan') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongFan">
                                                                =
                                                                <span id="PCBTongTienFan">
                                                                    {{ number_format(session()->get('PCBSoLuongFan') * session()->get('PCBGiaFan')) }}
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
                                                                {{ number_format(session()->get('PCBGiaTNK')) }}
                                                                VND x <input type="number" id="PCBSoLuongTNK"
                                                                    value="{{ session()->get('PCBSoLuongTNK') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongTNK">
                                                                =
                                                                <span id="PCBTongTienTNK">
                                                                    {{ number_format(session()->get('PCBSoLuongTNK') * session()->get('PCBGiaTNK')) }}
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
                                                                {{ number_format(session()->get('PCBGiaTNN')) }}
                                                                VND x <input type="number" id="PCBSoLuongTNN"
                                                                    value="{{ session()->get('PCBSoLuongTNN') }}"
                                                                    min="1" max="9"
                                                                    name="PCBSoLuongTNN">
                                                                =
                                                                <span id="PCBTongTienTNN">
                                                                    {{ number_format(session()->get('PCBSoLuongTNN') * session()->get('PCBGiaTNN')) }}
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
                                                                {{ number_format(session()->get('PCBGiaL')) }}
                                                                VND x <input type="number" id="PCBSoLuongL"
                                                                    value="{{ session()->get('PCBSoLuongL') }}"
                                                                    min="1" max="9" name="PCBSoLuongL"
                                                                    onkeydown="return (event.keyCode!=13);">
                                                                =
                                                                <span class="hihi" id="PCBTongTienL">
                                                                    {{ number_format(session()->get('PCBSoLuongL') * session()->get('PCBGiaL')) }}
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
