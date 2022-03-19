<html lang="en">

<head>
    @include('Customer.Layout.Common.meta')
</head>
@include('Customer.Layout.Common.header')

<body>
    <div id="collapsePoint">
        <!-- Wrapper - Cả trang -->
        <div id="wrapper">

            <!-- Wrapper - Chỉ riêng phần nội dung - Không bao gồm navbar -->
            <div id="content-wrapper" class="d-flex flex-row">
                {{-- @include('Customer.Layout.Common.side_nav_menu') --}}

                <!-- Content của trang -->
                <div class="container-fluid d-flex" {{-- style="position:relative;top: 70px" --}}
                    style="padding: 50px 50px 0px 50px;margin: 0px 50px 0px 50px">
                    <div class="grid">
                        {{-- Tiêu đề tên sản phẩm --}}
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h5 class="text-dark">
                                    {{ $sanPham->tenSP }}
                                </h5>
                            </div>
                        </div>
                        {{-- Ảnh, Thông số, Thông tin --}}
                        <div class="row">
                            {{-- Container Ảnh --}}
                            <div class="col-md-4 bg-light">
                                <div class="d-flex">
                                    {{-- Size, props container ảnh --}}
                                    <div style="flex-direction: column" class="d-flex width-100 height-auto flex-center">
                                        {{-- Div chứa ảnh và mũi tên --}}
                                        <div class="d-flex width-100 height-auto flex-center">
                                            {{-- Mũi tên trái --}}
                                            <div>
                                                <div>
                                                    <i style="transform: scale(3, 8);padding-right: 0px"
                                                        class="fa fa-angle-left"></i>
                                                </div>
                                            </div>
                                            {{-- Ảnh --}}
                                            <div>
                                                @foreach ($productImage as $PI)
                                                    @if ($PI->maSP == $sanPham->maSP)
                                                        <img class="card-img-top"
                                                            style="height:400px ; width:400px ; "
                                                            src="{{ asset('assets/img/' . $PI->anh) }}" alt="..." />
                                                    @endif
                                                @endforeach
                                            </div>
                                            {{-- Mũi tên phải --}}
                                            <div>
                                                <div>
                                                    <i style="transform: scale(3, 8); padding-left: 0px"
                                                        class="fa fa-angle-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Hết - Div chứa ảnh và mũi tên --}}

                                        {{-- Div chứa ảnh khác --}}
                                        <div class="d-flex width-100 height-auto flex-center">
                                            <div class="grid">
                                                <div class="row">
                                                    @foreach ($productImage as $PI)
                                                        <div class="col-md-3">
                                                            @if ($PI->maSP == $sanPham->maSP)
                                                                <img class="card-img-top img-thumbnail-small"
                                                                    src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                    alt="..." />
                                                            @endif
                                                        </div>
                                                        <div class="col-md-3">
                                                            @if ($PI->maSP == $sanPham->maSP)
                                                                <img class="card-img-top img-thumbnail-small"
                                                                    src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                    alt="..." />
                                                            @endif
                                                        </div>
                                                        <div class="col-md-3">
                                                            @if ($PI->maSP == $sanPham->maSP)
                                                                <img class="card-img-top img-thumbnail-small"
                                                                    src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                    alt="..." />
                                                            @endif
                                                        </div>
                                                        <div class="col-md-3">
                                                            @if ($PI->maSP == $sanPham->maSP)
                                                                <img class="card-img-top img-thumbnail-small"
                                                                    src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                    alt="..." />
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Thông số --}}
                            <div class="col-md-5 bg-gray-200">
                                <div class="width-100 height-auto padding-10 ">
                                    {{-- Thông tin con --}}
                                    <div class="width-100 height-auto">
                                        Ma SP: LTAU660 | Danh gia: X X X X X (0) | Binh luan: 1 |
                                    </div>
                                    {{-- Thông số --}}
                                    <div>
                                        <div class="text-danger">
                                            <h5>Thông số sản phẩm</h5>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>CPU: AMD R7 5800H</li>
                                                <li>RAM: 8GB</li>
                                                <li>Ổ cứng: 512GB</li>
                                                <li>VGA: Onboard</li>
                                                <li>Màn hình: 60hz</li>
                                                <li>HĐH: Win11</li>
                                            </ul>

                                            <a href="#" class="padding-left-20 link-red">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Thông tin ngoài --}}
                            <div class="col-md-3 bg-gray-700">
                                <h1>Here</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>

    </div>
    <!-- End of Page Wrapper -->
    @include('Customer.Layout.Common.bottom_script')
</body>

</html>
