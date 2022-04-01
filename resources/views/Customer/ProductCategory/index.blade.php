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
            <div class="container-fluid" style="padding-top: 60px;min-height: 400px">
                <div class="grid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card-header black-glass ">
                                <h4 class="m-0 font-weight-bold text-light text-left carousel-promo-item-label "
                                    style="padding-left: 4%">
                                    Danh sách danh mục</h4>
                            </div>
                            <div>
                                <ul class="navbar-nav bg-primary toggled sidebar-dark accordion "
                                    style="background-color: rgba(20, 20, 20, 0.95)  !important" id="accordionSidebar">

                                    @foreach ($listTheLoaiCha as $TL)
                                        {{-- Danh mục chính --}}
                                        <li class="padding-left-20 width-50 padding-bottom-20">
                                            <a class="nav-link collapsed link-white " href="#" data-toggle="collapse"
                                                data-target="#data{{ $TL->maTL }}" aria-expanded="true"
                                                aria-controls="data{{ $TL->maTL }}">
                                                <i class="fas fa-laptop sidenav-header"></i>
                                                <span>{{ $TL->tenTL }}</span>
                                            </a>
                                            {{-- Danh mục con --}}
                                            <div id="data{{ $TL->maTL }}" class="collapse"
                                                aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                                <div class="bg-white py-2 collapse-inner border-top-left-radius-10 border-bottom-left-radius-10 padding-20"
                                                    style=" background-image: url('../assets/img/white-background-1.jpg');
                                                    background-attachment: fixed;
                                                    background-position: center;
                                                    background-repeat: no-repeat;
                                                    background-size: cover;">
                                                    @foreach ($listTheLoaiCon as $TLC)
                                                        @if ($TLC->maTL == $TL->maTL)
                                                            <a class="collapse-item link-red text-bold"
                                                                href="{{ route('categoryCustomer.show', $TLC->maTLC) }}">{{ $TLC->tenTLC }}</a>

                                                            <div class="collapse-divider"></div>
                                                            <div class="">
                                                                <hr class="border-black " style="opacity: 25%">
                                                            </div>
                                                        @endif
                                                    @endforeach

                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
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
