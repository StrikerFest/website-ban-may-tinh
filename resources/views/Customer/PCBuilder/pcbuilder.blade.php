<html lang="en">

<head>
    @include('Customer.Layout.Common.meta')
    <meta name="_token" content="{{ csrf_token() }}" />

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
                        @if (session()->get('modal') == 1)
                            <div id="PCBuildModal" style="display: block" class="modal-PCB">
                            @else
                                <div id="PCBuildModal" class="modal-PCB">
                        @endif
                        <!-- Modal content -->
                        <div class="modal-content-PCB">
                            <span id="close-x" class="close-PCB">&times;</span>
                            <h1>{{ $PCBTheLoai }}</h1>
                            <div style="overflow: scroll; overflow-x: hidden ;height: 90%">
                                @foreach ($listSanPhamModal as $SPM)
                                    <form action="{{ route('PCBuilderCustomer.store') }}" method="POST">
                                        @csrf
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
                                                                        style="height:130px ; width:130px ; border: 1px solid lightgray"
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
                                                    <button type="submit" name="PCBSubmit"
                                                        class="btn btn-danger">+</button>
                                                </div>
                                                {{-- Hết - Thông tin sản phẩm --}}
                                            </div>
                                        </div>
                                    </form>
                                @endforeach

                            </div>
                        </div>


                    </div>

                </div>
            </div>
            {{--  --}}
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-danger text-center">
                        Xây dựng máy tính chất lượng cao của riêng bạn
                    </h2>
                    @php
                        // dd(session()->get('modal'));
                    @endphp
                </div>
                <div class="col-md-12">
                    <div class="padding-10 center-custom border-red rounded">
                        <form action="{{ route('PCBuilderCustomer.store') }}" method="POST">
                            @csrf
                            <table class="bg- w-100 ">
                                {{-- TODO: Khi nào seed xong thì cho thêm vào }}
                                {{-- <tr class="">
                                    <td class="padding-10" style="width: 10%">Bộ vi xử lý</td>

                                    <td class="padding-10 " style="width: 10%">
                                        <button id="PCBuilderButtonMotherboard" type="submit" value="Motherboard"
                                            name="VGA" class="btn btn-danger" style="width: 200px">Chọn
                                            bộ
                                            vi xử lý
                                        </button>
                                    </td>

                                </tr> --}}
                                {{-- * VGA --}}
                                <tr class="">
                                    <td class="padding-10" style="width: 170px">Card đồ họa</td>
                                    <td class="padding-10" style="width: 170px">
                                        <button id="PCBuilderButton1" type="submit" value="VGA" name="PCBModal"
                                            class="btn btn-danger" style="width: 200px">Chọn card đồ họa</button>
                                    </td>
                                    @php
                                        $displayVGA = session()->has('PCBMaVGA');
                                    @endphp
                                    @if ($displayVGA == true)
                                        @php
                                            // dd('Here');
                                        @endphp
                                        <td class="padding-10" style="width:60%">
                                            <div class="bg-gray-300 card padding-10 text-left">
                                                <div class="row">
                                                    <!-- Ảnh sản phẩm-->
                                                    <div class="col-3">
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
                                                                            style="height:130px ; width:130px ; border: 1px solid lightgray"
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
                                                    {{-- Hết - Ảnh sản phẩm --}}

                                                    {{-- Thông tin sản phẩm --}}
                                                    <div class="col-7">
                                                        {{-- Tên sản phẩm --}}
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
                                                                    min="1" max="9" name="PCBSoLuongVGA">
                                                                =
                                                                <span id="PCBTongTienVGA">
                                                                    {{ number_format(session()->get('PCBSoLuongVGA') * session()->get('PCBGiaVGA')) }}
                                                                    VND
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">

                                                        <button type="submit" name="PCBDeleteVGA" value="1"
                                                            class="btn btn-danger">x</button>
                                                    </div>
                                                    {{-- Hết - Thông tin sản phẩm --}}
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                                {{-- * Bộ phận khác --}}
                                <tr class="">
                                    <td class="padding-10" style="width: 200px">Sẽ có thêm bộ vi xử lý, ram, nguồn,...
                                        12/08 sẽ xong
                                    </td>
                                    <td class="padding-10" style="width: 200px">
                                        <button id="PCBuilderButton2" type="submit" value="LaptopGaming"
                                            name="PCBModal" class="btn btn-danger" style="width: 200px">Chọn
                                            khác</button>
                                    </td>
                                    @php
                                        $displayL = session()->has('PCBMaL');
                                    @endphp
                                    @if ($displayL == true)
                                        <td class="padding-10" style="width:55%">
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
                                                                            style="height:130px ; width:130px ; border: 1px solid lightgray"
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
                                                                    min="1" max="9" name="PCBSoLuongL">
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
                                                            class="btn btn-danger">x</button>
                                                    </div>
                                                    {{-- Hết - Thông tin sản phẩm --}}
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                                <tr>
                                    <td colspan="3">

                                    </td>
                                </tr>
                            </table>
                        </form>

                    </div>
                    {{-- Thêm vào giỏ hàng --}}
                    <div class="row padding-10 ">
                        <div class="w-100" id="PCBCart">
                            <form action="{{ route('cart.addToCartPCB') }}" method="POST">
                                @csrf

                                {{-- VGA --}}
                                @if ($displayVGA == true)
                                    {{-- -- Mã --}}
                                    <input type="hidden" name="PCBCartMaVGA"
                                        value="{{ session()->has('PCBMaVGA') ? session()->get('PCBMaVGA') : 0 }}">
                                    {{-- -- Số lượng --}}
                                    <input type="hidden" name="PCBCartSoLuongVGA"
                                        value="{{ session()->has('PCBSoLuongVGA') ? session()->get('PCBSoLuongVGA') : 0 }}">
                                    {{-- -- Ảnh --}}
                                    <input type="hidden" name="PCBCartAnhVGA" value="{{ $tempImgVGA }}">
                                    {{-- VGA --}}
                                @endif
                                @if ($displayL == true)
                                    {{-- L --}}
                                    {{-- -- Mã --}}
                                    <input type="hidden" name="PCBCartMaL"
                                        value="{{ session()->has('PCBMaL') ? session()->get('PCBMaL') : 0 }}">
                                    {{-- -- Số lượng --}}
                                    <input type="hidden" name="PCBCartSoLuongL"
                                        value="{{ session()->has('PCBSoLuongL') ? session()->get('PCBSoLuongL') : 0 }}">
                                    {{-- -- Ảnh --}}
                                    <input type="hidden" name="PCBCartAnhL" value="{{ $tempImgL }}">
                                    {{-- L --}}
                                @endif

                                <button class="btn btn-danger w-100" type="submit">Thêm vào giỏ
                                    hàng</button>
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
    <script>
        jQuery(document).ready(function() {
            jQuery('#ajaxSubmit').click(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                jQuery.ajax({
                    url: "{{ route('PCBuilderCustomer.store') }}",
                    method: 'post',
                    data: {
                        PCBSoLuongVGA: jQuery('#PCBSoLuongVGA').val(),

                    },
                    success: function(result) {
                        console.log("Result::" + result);
                        jQuery('.alert').show();
                        jQuery('.alert').html(result.success);
                    }
                });
            });
        });

        function reloadPCB(url) {
            $('#PCBTongTienVGA').load(location.href + " #PCBTongTienVGA");
            $('#PCBTongTienL').load(location.href + " #PCBTongTienL");
            $('#PCBCart').load(location.href + " #PCBCart");
        }

        // Kiểm tra số lượng

        // VGA
        var PCBSoLuongVGA = document.getElementById("PCBSoLuongVGA");
        PCBSoLuongVGA.addEventListener("keyup", function(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '{{ route('PCBuilderCustomer.store') }}',
                data: {
                    PCBSoLuongVGA: jQuery('#PCBSoLuongVGA').val(),
                },
                success: function(result) {
                    reloadPCB(); // this calls the reload function
                }
            });
        });

        // L
        var PCBSoLuongL = document.getElementById("PCBSoLuongL");
        PCBSoLuongL.addEventListener("keyup", function(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '{{ route('PCBuilderCustomer.store') }}',
                data: {
                    PCBSoLuongL: jQuery('#PCBSoLuongL').val(),
                },
                success: function(result) {
                    reloadPCB(); // this calls the reload function
                }
            });
        });
    </script>
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
            {{ session()->put('modal', 1) }}
        }
        btn2.onclick = function() {
            // modal.style.display = "block";
            console.log("BTN");
            {{ session()->put('modal', 1) }}
        }
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
            // modal2.style.display = "none";
            console.log("X CLICK");
            console.log("Modal is " + {{ session()->get('modal') }});
            {{ session()->put('modalClose', 1) }}
            console.log("Modal close is " + {{ session()->get('modalClose') }});

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
            }
        }
    </script>
    @include('Customer.Layout.Common.bottom_script')
    <script></script>
</body>

</html>
