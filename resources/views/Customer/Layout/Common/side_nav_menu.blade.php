<!-- Sidebar -->
<ul class="navbar-nav bg-primary toggled  sidebar sidebar-dark accordion fixed-top "
    style="background-color: rgba(20, 20, 20, 0.95)  !important;" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <div class="sidebar-brand d-flex align-items-center justify-content-center sidenav-text side" ">
        {{-- href="javascript: window.location.href=window.location.origin --}}
        <div class="sidebar-brand-icon rotate-n-15 sidenav-header">
            <i class="fas fa-laptop-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3 sidenav-header">BKCOM</div>
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <div id="cateShow2" class="nav-link sidenav-text" href="{{ route('product.index') }}">
            <div class="sidenav-header">
                <i class="fas fa-fw fa-home sidenav-header"></i>
                <span>Danh mục</span>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider sidenav-divider">

    <!-- Heading -->
    <div class="sidebar-heading sidenav-header">
        PC Build
    </div>

    <!-- Nav Item - Máy tính bàn -->
    <li class="nav-item">
        {{-- Title --}}
        <a class="nav-link collapsed sidenav-text" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-desktop sidenav-header"></i>
            <span>Máy tính bàn</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white collapse-inner rounded " style="width: 400%">
                <div class="grid">
                    <div class="row">
                         @foreach ($listTheLoaiCha as $TLCha)
        @if ($TLCha->tenTL == 'Máy tính bàn')
            {{-- PC theo hãng --}}
            <div class="col-md-4">
                <h6 class="collapse-header text-danger">PC theo hãng :</h6>
                @foreach ($listNhaSanXuat as $NSX)
                    <form action="{{ route('categoryCustomer.show', $NSX->maNSX) }}" method="GET">
                        @csrf
                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                        <input type="hidden" name="loai" value="NSX">
                        <button class="collapse-item width-100" href="">{{ $NSX->tenNSX }}</button>
                    </form>
                @endforeach
                <a class="collapse-item text-danger" href="cards.html">Nhiều hơn nữa</a>
            </div>
            <div class="col-md-4">
                <h6 class="collapse-header text-danger">PC theo nhu cầu:</h6>
                @foreach ($listTheLoaiSidenav as $TL)
                    @if ($TL->tenTL == 'Máy tính bàn')
                        <form action="{{ route('categoryCustomer.show', $TL->maTLC) }}" method="GET">
                            <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                            <input type="hidden" name="loai" value="TLC">
                            <button class="collapse-item width-100">
                                {{ $TL->tenTLC }}
                            </button>
                        </form>
                    @endif
                @endforeach
            </div>
            <div class="col-md-4">
                <h6 class="collapse-header text-danger">PC theo giá:</h6>
                {{--  --}}
                <form action="{{ route('categoryCustomer.show', 'duoi5trieu') }}" method="GET">
                    <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                    <input type="hidden" name="loai" value="tien">

                    <button class="width-75 collapse-item">Dưới 5
                        triệu</button>
                </form>
                {{--  --}}
                <form action="{{ route('categoryCustomer.show', '5trieu-10trieu') }}" method="GET">
                    <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                    <input type="hidden" name="loai" value="tien">

                    <button class="width-75 collapse-item">5
                        triệu -
                        10
                        triệu</button>
                </form>
                {{--  --}}
                <form action="{{ route('moneyCategoryCustomer.show', '10trieu-20trieu') }}" method="GET">
                    <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                    <input type="hidden" name="loai" value="tien">

                    <button class="width-75 collapse-item">10
                        triệu
                        -
                        20
                        triệu</button>

                </form>
                {{--  --}}
                <form action=" {{ route('moneyCategoryCustomer.show', '20trieu-30trieu') }}" method="GET">
                    <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                    <input type="hidden" name="loai" value="tien">

                    <button class="width-75 collapse-item">20
                        triệu
                        -
                        30
                        triệu</button>

                </form>
                {{--  --}}
                <form action="{{ route('moneyCategoryCustomer.show', '30trieu-50trieu') }}" method="GET">
                    <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                    <input type="hidden" name="loai" value="tien">

                    <button class="width-75 collapse-item">30
                        triệu
                        -
                        50
                        triệu</button>

                </form>
                {{--  --}}
                <form action="{{ route('moneyCategoryCustomer.show', 'tren50trieu') }}" method="GET">
                    <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                    <input type="hidden" name="loai" value="tien">

                    <button class="width-75 collapse-item">Trên
                        50
                        triệu</button>
                </form>
            </div>
        @endif
        @endforeach
    </div>
    </div>
    </div>
    </div>
    </li>

    <!-- Nav Item - GamingPC Collapse Menu -->


    <!-- Divider -->
    <hr class="sidebar-divider sidenav-divider">

    <!-- Heading -->
    <div class="sidebar-heading sidenav-header">
        Laptop
    </div>

    <!-- Nav Item - Laptop -->
    <li class="nav-item">
        {{-- Title --}}
        <a class="nav-link collapsed sidenav-text" href="#" data-toggle="collapse"
            data-target="#collapseLaptop" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-desktop sidenav-header"></i>
            <span>Laptop</span>
        </a>
        <div id="collapseLaptop" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white collapse-inner rounded " style="width: 400%">
                <div class="grid">
                    <div class="row">
                        @foreach ($listTheLoaiCha as $TLCha)
                            @if ($TLCha->tenTL == 'Laptop')
                                {{-- PC theo hãng --}}
                                <div class="col-md-4">
                                    <h6 class="collapse-header text-danger">Laptop theo hãng :</h6>
                                    @foreach ($listNhaSanXuat as $NSX)
                                        <form action="{{ route('categoryCustomer.show', $NSX->maNSX) }}"
                                            method="GET">
                                            @csrf
                                            <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                            <input type="hidden" name="loai" value="NSX">
                                            <button class="collapse-item width-100"
                                                href="">{{ $NSX->tenNSX }}</button>
                                        </form>
                                    @endforeach
                                    <a class="collapse-item text-danger" href="cards.html">Nhiều hơn nữa</a>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="collapse-header text-danger">Laptop theo nhu cầu:</h6>
                                    @foreach ($listTheLoaiSidenav as $TL)
                                        @if ($TL->tenTL == 'Laptop')
                                            <form action="{{ route('categoryCustomer.show', $TL->maTLC) }}"
                                                method="GET">
                                                <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                                <input type="hidden" name="loai" value="TLC">
                                                <button class="collapse-item width-100">
                                                    {{ $TL->tenTLC }}
                                                </button>
                                            </form>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-md-4">
                                    <h6 class="collapse-header text-danger">Laptop theo giá:</h6>
                                    {{--  --}}
                                    <form action="{{ route('categoryCustomer.show', 'duoi5trieu') }}" method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <input type="hidden" name="loai" value="tien">

                                        <button class="width-75 collapse-item">Dưới 5
                                            triệu</button>
                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('categoryCustomer.show', '5trieu-10trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <input type="hidden" name="loai" value="tien">

                                        <button class="width-75 collapse-item">5
                                            triệu -
                                            10
                                            triệu</button>
                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', '10trieu-20trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <input type="hidden" name="loai" value="tien">

                                        <button class="width-75 collapse-item">10
                                            triệu
                                            -
                                            20
                                            triệu</button>

                                    </form>
                                    {{--  --}}
                                    <form action=" {{ route('moneyCategoryCustomer.show', '20trieu-30trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <input type="hidden" name="loai" value="tien">

                                        <button class="width-75 collapse-item">20
                                            triệu
                                            -
                                            30
                                            triệu</button>

                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', '30trieu-50trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <input type="hidden" name="loai" value="tien">

                                        <button class="width-75 collapse-item">30
                                            triệu
                                            -
                                            50
                                            triệu</button>

                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', 'tren50trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <input type="hidden" name="loai" value="tien">

                                        <button class="width-75 collapse-item">Trên
                                            50
                                            triệu</button>
                                    </form>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block  sidenav-divider">

    <!-- Heading -->
    <div class="sidebar-heading sidenav-header">
        Linh phụ kiện
    </div>
    <!-- Nav Item - Linh kiện-->
    <li class="nav-item">
        {{-- Title --}}
        <a class="nav-link collapsed sidenav-text" href="#" data-toggle="collapse" data-target="#collapseVGA"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-desktop sidenav-header"></i>
            <span>VGA</span>
        </a>
        <div id="collapseVGA" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white collapse-inner rounded " style="width: 400%">
                <div class="grid">
                    <div class="row">
                        @foreach ($listTheLoaiCha as $TLCha)
                            @if ($TLCha->tenTL == 'VGA')
                                {{-- PC theo hãng --}}
                                <div class="col-md-4">
                                    <h6 class="collapse-header text-danger">Laptop theo hãng :</h6>
                                    @foreach ($listNhaSanXuat as $NSX)
                                        <form action="{{ route('categoryCustomer.show', $NSX->maNSX) }}"
                                            method="GET">
                                            @csrf
                                            <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                            <input type="hidden" name="loai" value="NSX">
                                            <button class="collapse-item width-100"
                                                href="">{{ $NSX->tenNSX }}</button>
                                        </form>
                                    @endforeach
                                    <a class="collapse-item text-danger" href="cards.html">Nhiều hơn nữa</a>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="collapse-header text-danger">Laptop theo nhu cầu:</h6>
                                    @foreach ($listTheLoaiSidenav as $TL)
                                        @if ($TL->tenTL == 'VGA')
                                            <form action="{{ route('categoryCustomer.show', $TL->maTLC) }}"
                                                method="GET">
                                                <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                                <input type="hidden" name="loai" value="TLC">
                                                <button class="collapse-item width-100">
                                                    {{ $TL->tenTLC }}
                                                </button>
                                            </form>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-md-4">
                                    <h6 class="collapse-header text-danger">Laptop theo giá:</h6>
                                    {{--  --}}
                                    <form action="{{ route('categoryCustomer.show', 'duoi5trieu') }}" method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <input type="hidden" name="loai" value="tien">

                                        <button class="width-75 collapse-item">Dưới 5
                                            triệu</button>
                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('categoryCustomer.show', '5trieu-10trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <input type="hidden" name="loai" value="tien">

                                        <button class="width-75 collapse-item">5
                                            triệu -
                                            10
                                            triệu</button>
                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', '10trieu-20trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <input type="hidden" name="loai" value="tien">

                                        <button class="width-75 collapse-item">10
                                            triệu
                                            -
                                            20
                                            triệu</button>

                                    </form>
                                    {{--  --}}
                                    <form action=" {{ route('moneyCategoryCustomer.show', '20trieu-30trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <input type="hidden" name="loai" value="tien">

                                        <button class="width-75 collapse-item">20
                                            triệu
                                            -
                                            30
                                            triệu</button>

                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', '30trieu-50trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <input type="hidden" name="loai" value="tien">

                                        <button class="width-75 collapse-item">30
                                            triệu
                                            -
                                            50
                                            triệu</button>

                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', 'tren50trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <input type="hidden" name="loai" value="tien">

                                        <button class="width-75 collapse-item">Trên
                                            50
                                            triệu</button>
                                    </form>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block  sidenav-divider">

    <!-- Heading -->
    <div class="sidebar-heading sidenav-header">
        Thiết bị khác
    </div>
    <!-- Nav Item - Pages Collapse Menu -->


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        {{-- <button class="rounded-circle bg-light border-0" id="sidebarToggle"></button> --}}
    </div>

    <!-- Sidebar Message -->
    {{-- <div class="sidebar-card d-none d-lg-flex">

        </div> --}}

</ul>
<!-- End of Sidebar -->

{{-- <!-- Filler -->
<ul class="navbar-nav toggled bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link">
            <span>Charts</span></a>
    </li>
</ul>
<!-- End of Filler --> --}}
