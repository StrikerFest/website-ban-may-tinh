<!-- Sidebar -->
<ul class="navbar-nav bg-primary toggled  sidebar sidebar-dark accordion fixed-top"
    style="background-color: rgba(20, 20, 20, 0.95)  !important" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center sidenav-text side" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15 sidenav-header">
            <i class="fas fa-laptop-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3 sidenav-header">BKCOM</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link sidenav-text" href="{{ route('product.index') }}">
            <div class="sidenav-header">
                <i class="fas fa-fw fa-home sidenav-header"></i>
                <span>Homepage</span>
            </div>
        </a>
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
                                        <form action="{{ route('manufacturerCustomer.show', $NSX->maNSX) }}"
                                            method="GET">
                                            @csrf
                                            <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                            <button class="collapse-item width-100"
                                                href="">{{ $NSX->tenNSX }}</button>
                                        </form>
                                    @endforeach
                                    <a class="collapse-item text-danger" href="cards.html">Nhiều hơn nữa</a>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="collapse-header text-danger">PC theo nhu cầu:</h6>
                                    @foreach ($listTheLoaiMayTinhBan as $TL)
                                        {{-- Create item page for this - show in controller - Manufacture --}}
                                        <a class="collapse-item"
                                            href="{{ route('categoryCustomer.show', $TL->maTLC) }}">{{ $TL->tenTLC }}</a>
                                    @endforeach
                                </div>
                                <div class="col-md-4">
                                    <h6 class="collapse-header text-danger">PC theo giá:</h6>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', 'duoi5trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <button class="width-75 collapse-item">Dưới 5
                                            triệu</button>
                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', '5trieu-10trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <button class="width-75 collapse-item">5
                                            triệu -
                                            10
                                            triệu</button>
                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', '10trieu-20trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
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
                                        <button class="width-75 collapse-item">30
                                            triệu
                                            -
                                            50
                                            triệu</button>

                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', '50trieu') }}" method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
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
    {{-- <li class="nav-item">
        <a class="nav-link collapsed sidenav-text" href="#" data-toggle="collapse" data-target="#collapseGamingPC"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-gamepad sidenav-icon"></i>
            <span>Máy tính đồ họa</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider sidenav-divider">

    <!-- Heading -->
    <div class="sidebar-heading sidenav-header">
        Laptop
    </div>

    <!-- Nav Item - Laptop -->
    <li class="nav-item">
        <a class="nav-link collapsed sidenav-text" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-laptop sidenav-header"></i>
            <span>Laptop</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white collapse-inner rounded " style="width: 400%">
                <div class="grid">
                    <div class="row">
                        @foreach ($listTheLoaiCha as $TLCha)
                            @if ($TLCha->tenTL == 'Laptop')
                                {{-- @php
                                    session()->put("theLoaiSideNav",$TLCha->maTL);
                                @endphp --}}
                                {{-- Laptop theo hãng --}}
                                <div class="col-md-4">
                                    <h6 class="collapse-header text-danger">Laptop theo hãng :</h6>
                                    @foreach ($listNhaSanXuat as $NSX)
                                        <form action="{{ route('manufacturerCustomer.show', $NSX->maNSX) }}"
                                            method="GET">
                                            @csrf
                                            <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                            <button class="collapse-item width-100">{{ $NSX->tenNSX }}</button>
                                        </form>
                                    @endforeach
                                    <a class="collapse-item text-danger" href="cards.html">Nhiều hơn nữa</a>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="collapse-header text-danger">Laptop theo nhu cầu:</h6>
                                    @foreach ($listTheLoaiLaptop as $TL)
                                        {{-- Create item page for this - show in controller - Manufacture --}}
                                        <a class="collapse-item"
                                            href="{{ route('categoryCustomer.show', $TL->maTLC) }}">{{ $TL->tenTLC }}</a>
                                    @endforeach
                                </div>
                                <div class="col-md-4">
                                    <h6 class="collapse-header text-danger">Laptop theo giá:</h6>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', 'duoi5trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <button class="width-75 collapse-item">Dưới 5
                                            triệu</button>
                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', '5trieu-10trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <button class="width-75 collapse-item">5
                                            triệu -
                                            10
                                            triệu</button>
                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', '10trieu-20trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
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
                                        <button class="width-75 collapse-item">30
                                            triệu
                                            -
                                            50
                                            triệu</button>

                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', '50trieu') }}" method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
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
        <a class="nav-link collapsed sidenav-text" href="#" data-toggle="collapse" data-target="#collapseHardware"
            aria-expanded="true" aria-controls="collapseHardware">
            <i class="fas fa-cog sidenav-header"></i>
            <span>Linh kiện </span>
        </a>
        <div id="collapseHardware" style="margin-top: -40px" class="collapse" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white collapse-inner rounded " style="width: 400%">
                <div class="grid">
                    <div class="row">
                        @foreach ($listTheLoaiCha as $TLCha)
                            @if ($TLCha->tenTL == 'Linh kiện')
                                {{-- Laptop theo hãng --}}
                                <div class="col-md-4">
                                    <h6 class="collapse-header text-danger">Linh kiện theo hãng :</h6>
                                    @foreach ($listNhaSanXuat as $NSX)
                                        <form action="{{ route('manufacturerCustomer.show', $NSX->maNSX) }}"
                                            method="GET">
                                            @csrf
                                            <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                            <button class="collapse-item width-100"
                                                href="">{{ $NSX->tenNSX }}</button>
                                        </form>
                                    @endforeach
                                    <a class="collapse-item text-danger" href="cards.html">Nhiều hơn nữa</a>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="collapse-header text-danger">Linh kiện theo nhu cầu:</h6>
                                    @foreach ($listTheLoaiLinhKien as $TL)
                                        {{-- Create item page for this - show in controller - Manufacture --}}
                                        <a class="collapse-item"
                                            href="{{ route('categoryCustomer.show', $TL->maTLC) }}">{{ $TL->tenTLC }}</a>
                                    @endforeach
                                </div>
                                <div class="col-md-4">
                                    <h6 class="collapse-header text-danger">Linh kiện theo giá:</h6>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', 'duoi5trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <button class="width-75 collapse-item">Dưới 5
                                            triệu</button>
                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', '5trieu-10trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <button class="width-75 collapse-item">5
                                            triệu -
                                            10
                                            triệu</button>
                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', '10trieu-20trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
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
                                        <button class="width-75 collapse-item">30
                                            triệu
                                            -
                                            50
                                            triệu</button>

                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', '50trieu') }}" method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
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
    <li class="nav-item">
        <a class="nav-link collapsed sidenav-text" href="#" data-toggle="collapse" data-target="#collapseAccessories"
            aria-expanded="true" aria-controls="collapseAccessories">
            <i class="fas fa-headphones sidenav-header"></i>
            <span>Phụ kiện</span>
        </a>
        <div id="collapseAccessories" class="collapse" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar" style="margin-top: -100px">
            <div class="bg-white collapse-inner rounded " style="width: 400%">
                <div class="grid">
                    <div class="row">
                        @foreach ($listTheLoaiCha as $TLCha)
                            @if ($TLCha->tenTL == 'Phụ kiện')
                                {{-- Laptop theo hãng --}}
                                <div class="col-md-4">
                                    <h6 class="collapse-header text-danger">Phu kiện theo hãng :</h6>
                                    @foreach ($listNhaSanXuat as $NSX)
                                        <form action="{{ route('manufacturerCustomer.show', $NSX->maNSX) }}"
                                            method="GET">
                                            @csrf
                                            <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                            <button class="collapse-item width-100"
                                                href="">{{ $NSX->tenNSX }}</button>
                                        </form>
                                    @endforeach
                                    <a class="collapse-item text-danger" href="cards.html">Nhiều hơn nữa</a>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="collapse-header text-danger">Phu kiện theo nhu cầu:</h6>
                                    @foreach ($listTheLoaiPhuKien as $TL)
                                        {{-- Create item page for this - show in controller - Manufacture --}}
                                        <a class="collapse-item"
                                            href="{{ route('categoryCustomer.show', $TL->maTLC) }}">{{ $TL->tenTLC }}</a>
                                    @endforeach
                                </div>
                                <div class="col-md-4">
                                    <h6 class="collapse-header text-danger">Phụ kiện theo giá:</h6>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', 'duoi5trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <button class="width-75 collapse-item">Dưới 5
                                            triệu</button>
                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', '5trieu-10trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <button class="width-75 collapse-item">5
                                            triệu -
                                            10
                                            triệu</button>
                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', '10trieu-20trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
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
                                        <button class="width-75 collapse-item">30
                                            triệu
                                            -
                                            50
                                            triệu</button>

                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', '50trieu') }}" method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
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
    <li class="nav-item">
        <a class="nav-link collapsed sidenav-text" href="#" data-toggle="collapse" data-target="#collapsePrinter"
            aria-expanded="true" aria-controls="collapsePrinter">
            <i class="fas fa-tv sidenav-header"></i>
            <span>Màn hình</span>
        </a>
        <div id="collapsePrinter" style="margin-top: -200px" class="collapse" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white collapse-inner rounded " style="width: 400%">
                <div class="grid">
                    <div class="row">
                        @foreach ($listTheLoaiCha as $TLCha)
                            @if ($TLCha->tenTL == 'Màn hình')
                                {{-- Laptop theo hãng --}}
                                <div class="col-md-4">
                                    <h6 class="collapse-header text-danger">Màn hình theo hãng :</h6>
                                    @foreach ($listNhaSanXuat as $NSX)
                                        <form action="{{ route('manufacturerCustomer.show', $NSX->maNSX) }}"
                                            method="GET">
                                            @csrf
                                            <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                            <button class="collapse-item width-100"
                                                href="">{{ $NSX->tenNSX }}</button>
                                        </form>
                                    @endforeach
                                    <a class="collapse-item text-danger" href="cards.html">Nhiều hơn nữa</a>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="collapse-header text-danger">Màn hình theo nhu cầu:</h6>
                                    @foreach ($listTheLoaiManHinh as $TL)
                                        {{-- Create item page for this - show in controller - Manufacture --}}
                                        <a class="collapse-item"
                                            href="{{ route('categoryCustomer.show', $TL->maTLC) }}">{{ $TL->tenTLC }}</a>
                                    @endforeach
                                </div>
                                <div class="col-md-4">
                                    <h6 class="collapse-header text-danger">Màn hình theo giá:</h6>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', 'duoi5trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <button class="width-75 collapse-item">Dưới 5
                                            triệu</button>
                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', '5trieu-10trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
                                        <button class="width-75 collapse-item">5
                                            triệu -
                                            10
                                            triệu</button>
                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', '10trieu-20trieu') }}"
                                        method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
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
                                        <button class="width-75 collapse-item">30
                                            triệu
                                            -
                                            50
                                            triệu</button>

                                    </form>
                                    {{--  --}}
                                    <form action="{{ route('moneyCategoryCustomer.show', '50trieu') }}" method="GET">
                                        <input type="hidden" name="theLoaiCha" value="{{ $TLCha->maTL }}">
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
    <li class="nav-item">
        <a class="nav-link collapsed sidenav-text" href="#" data-toggle="collapse" data-target="#collapseOther"
            aria-expanded="true" aria-controls="collapseOther">
            <i class="fas fa-laptop sidenav-header"></i>
            <span>Danh mục khác</span>
        </a>
        <div id="collapseOther" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar"
            style="position: absolute;bottom: 100px">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Nhiều hơn nữa trong danh sách các danh mục</h6>
                <a class="collapse-item" href="{{ route('categoryListCustomer.index') }}">Danh sách danh mục</a>

                <div class="collapse-divider"></div>

            </div>
        </div>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        {{-- <button class="rounded-circle bg-light border-0" id="sidebarToggle"></button> --}}
    </div>

    <!-- Sidebar Message -->
    {{-- <div class="sidebar-card d-none d-lg-flex">

        </div> --}}

</ul>
<!-- End of Sidebar -->

<!-- Filler -->
<ul class="navbar-nav toggled bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link">
            <span>Charts</span></a>
    </li>
</ul>
<!-- End of Filler -->
