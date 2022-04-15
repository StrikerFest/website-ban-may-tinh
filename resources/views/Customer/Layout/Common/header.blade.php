<!-- Topbar -->
{{-- Thanh navbar thứ nhất --}}
<header class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow fixed-top "
    style="padding: 0; background-color: rgba(20, 20, 20, 0.97) !important">
    <div style="display: flex;justify-content: center;align-items: center; margin: auto;">
        <!-- Nút đóng mở navbar -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
        <a href="{{ route('product.index') }}">
            <div class=""
                style="padding-top: 10px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color:white">
                <h1>BKCOM</h1>
            </div>
        </a>
        <!-- Topbar tìm kiếm -->
        <form class="d-flex align-items-center justify-content-center mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
            action="{{ route('searchCustomer.index') }}">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" name="search"
                    placeholder="Tìm kiếm vật phẩm" aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class=" btn btn-primary">
                        <i class=" fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <!-- Counter - Alerts -->
                    <span class="badge badge-danger badge-counter">3+</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                        Alerts Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-primary">
                                <i class="fas fa-file-alt text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 12, 2019</div>
                            <span class="font-weight-bold">A new monthly report is ready to download!</span>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-success">
                                <i class="fas fa-donate text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 7, 2019</div>
                            $290.29 has been deposited into your account!
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-warning">
                                <i class="fas fa-exclamation-triangle text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 2, 2019</div>
                            Spending Alert: We've noticed unusually high spending for your account.
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                </div>
            </li>

            {{-- Vách ngăn --}}
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - Icon và thông tin người dùng -->
            <li class="nav-item dropdown no-arrow ">
                @if (session()->has('khachHang'))
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{-- Tên người dùng --}}
                        <span class="mr-2 d-none d-lg-inline text-white small"><i class="fa fa-bars"></i>
                            {{ session()->get('tenKhachHang') }}</span>

                        {{-- Ảnh người dùng --}}

                        <img class="img-profile rounded-circle" src="{{ asset('img/undraw_profile.svg') }}">
                    </a>
                @else
                    <br>
                    <a href="#" class="link-white justify-content-center align-items-center"
                        onclick="displayBlockLogin()">Đăng nhập ngay</a>
                @endif
                <!-- Dropdown - Thông tin người dùng -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#" onclick="displayBlockProfile()">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Thông tin khách hàng
                    </a>
                    <a class="dropdown-item" href="{{ route('receiptCustomer.index') }}">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Hóa đơn khách hàng
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Đăng xuất
                    </a>
                </div>


            </li>

            {{-- Vách ngăn --}}
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - Giỏ hàng -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="" id="messagesDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-shopping-cart fa-fw"></i>
                    <!-- Counter - Messages -->
                    <span class="badge badge-danger badge-counter">{{ sizeof($cartItems) }}</span>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header bg-danger">
                        Giỏ hàng cá nhân
                    </h6>
                    @php
                        $counterCart = 0;
                    @endphp
                    @foreach ($cartItems as $item)
                        @if ($counterCart < 2)
                            {{--  --}}
                            <a class="dropdown-item d-flex align-items-center"
                                href="{{ route('product.show', $item->id) }}">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle"
                                        src="{{ asset('assets/img/' . $item->attributes->image) }}" alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">{{ $item->name }}</div>
                                    <div class="small text-gray-500">{{ number_format($item->price) }} VND</div>
                                    <div>Số lượng: {{ $item->quantity }}</div>
                                </div>
                            </a>
                            @php
                                $counterCart += 1;
                            @endphp
                        @else
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('cart.list') }}">

                                <div class="font-weight-bold">
                                    Còn {{ sizeof($cartItems) - 2 }} vật phẩm nữa
                                </div>
                            </a>
                        @break
                        @endif

                    {{--  --}}
                    @endforeach

                    <a class="dropdown-item text-center small text-dark" href="{{ route('cart.list') }}">Mở giỏ
                        hàng
                    </a>
                </div>
            </li>

        </ul>
    </div>


</header>

{{-- Thanh navbar thứ 2 --}}
<nav class="navbar navbar-expand navbar-light bg-gradient- topbar mb-4 static-top shadow fixed-top second-navbar padding-0"
style="background-color: rgba(255, 255, 255, 0.9)">
    <div class="center-custom list-style-none">
        <div class="nav-item-container-highlight">
            <li class="nav-item ">
                <a class="nav-link nav-item-custom link-white " href="{{ route('product.index') }}">
                    Trang chủ
                </a>
            </li>
        </div>
        <div class="nav-item-container">
            <li class="nav-item ">
                <a class="nav-link nav-item-custom link-red-nav" href="{{ route('searchCustomer.index') }}">
                    Sản phẩm
                </a>
            </li>
        </div>
        <div class="nav-item-container">
            <li class="nav-item ">
                <a class="nav-link nav-item-custom link-red-nav" href="{{ route('blogCustomer.index') }}">
                    Blog công nghệ
                </a>
            </li>
        </div>
        <div class="nav-item-container">
            <li class="nav-item ">
                <a class="nav-link nav-item-custom link-red-nav" href="{{ route('contactCustomer.create') }}">
                    Liên hệ
                </a>
            </li>
        </div>
        <div class="nav-item-container">
            <li class="nav-item ">
                <a class="nav-link nav-item-custom link-red-nav" href="{{ route('contactCustomer.index') }}">
                    Chính sách
                </a>
            </li>
        </div>
    </div>

</nav>

<!-- End of Topbar -->
@if (session()->has('cartAddSuccess') == 1)
<div style="display: block" id="alert">
@else
<div style="display: none" id="alert">
@endif
    <div class="card text-center alert alert-success"
    style="position: fixed; width:50%;left:25%;height:15%;top:15%;z-index:1000;padding-top:1%">
    <h1>{{ Session::get('cartAddSuccess') }}</h1>
    </div>
</div>
@php
$dataError = Session::get('error');
$dataSuccess = Session::get('success');

@endphp
{{-- Error alert ------------------------------------- --}}
@if ($dataError || ($dataSuccess && session()->has('khachHang') == 0) || (sizeof($errors->all()) != 0 && session()->has('khachHang') == 0) || session()->has('profileError') == 1)
{{-- @if (sizeof($errors) != 0) --}}
<div style="display: block" id="alert-error">
@else
<div style="display: none" id="alert-error">
@endif
    <div class="card text-center alert alert-danger border-red"
    style="position: fixed; width:25%;left:75%;height:auto;top:15%;z-index:1001;padding-top:1%">
        @foreach ($errors->all() as $error)
            <div class="col-md-12">
                <p class="text-danger">{{ $error }}</p>
                <hr class="border-red">
            </div>
        @endforeach
        @isset($dataError)
            @if (session()->has('khachHang') == 0)
                <div class="alert alert-danger">
                    {{ $dataError }}
                <hr class="border-red">
            </div>
            @endif
        @endisset
    </div>
</div>
{{-- Hết - Error alert --}}

{{-- Thông tin khách hàng --}}
{{-- Fix phần này --}}
{{-- @if (sizeof($errors) != 0)--}}
@if(session()->has('profileError') == 1)
<div style="display: block" id="profile">
    @php
        session()->forget('profileError');
    @endphp
@else
    <div style="display: none" id="profile">
@endif
{{--  --}}
<div style="background-color: black; position: fixed; width: 100%;height: 100%;z-index:999;opacity:75%"
onclick="displayNoneProfile()">
</div>
<div class="card " style="position: fixed; width:50%;left:25%;height:50%;top:15%;z-index:1000">

<div class="card shadow mb-4">

    <div class="card-header py-3">
        <div class="row">
            <div class="col-md-6">
                <h6 class="m-0 font-weight-bold text-danger">Thông tin khách hàng</h6>
            </div>
            <div class="col-md-6 text-right">
                <button class="fa fa-times border-radius-25" onclick="displayNoneProfile()"></button>
            </div>
        </div>

    </div>
    @php
        $check = false;
        if (session()->has('khachHang')) {
            $check = true;
        }
    @endphp
    @isset($check)
        <div class="card-body">
            <div class="table-responsive" style="overflow: hidden">

                <form class="user" method="POST"
                    action="{{ route('customerCustomer.update', session()->get('khachHang') ?? 0) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group row ">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <p class="text-black">Tên tài khoản</p>
                            <input type="text" class="form-control text-black" placeholder="Tên tài khoản"
                                value="{{ session()->get('tenKhachHang') }}" name="updateName">

                        </div>
                        <div class="col-sm-6">
                            <p class="text-black">Số điện thoại</p>
                            <input type="text" class="form-control text-black" placeholder="Số điện thoại tài khoản"
                                value="{{ session()->get('soDienThoai') }}" name="updatePhone">
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="text-black">Email</p>
                        <input type="text" class="form-control text-black" placeholder="Email" name="updateEmail"
                            value="{{ session()->get('email') }}">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="submit" class="form-control btn-danger btn-user text-bold"
                                style="padding:0">Thay đổi thông tin khách
                                hàng</button>
                        </div>
                    </div>
                    {{-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                            Add data
                        </a> --}}
                </form>
                <form action="{{ route('changePasswordCustomer.store') }}" method="POST">
                    @csrf

                    <div class="form-group row">
                        <div class="col-sm-12 mb-12 mb-sm-0">
                            <p class="text-black">Mật khẩu hiện tại</p>
                            <input type="password" class="form-control" name="current_password">
                        </div>


                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <p class="text-black">Mật khẩu mới</p>
                            <input type="password" class="form-control" name="new_password">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <p class="text-black">Mật khẩu mới xác nhận lại</p>
                            <input type="password" class="form-control" name="new_confirm_password">
                        </div>

                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <p class="text-white">.</p>
                            <button class="form-control btn-danger btn-user text-bold" placeholder="Repeat Password"
                                style="padding:0">Đổi mật khẩu</button>

                        </div>
                        {{-- @foreach ($errors->all() as $error)
                            <div class="col-md-6">
                                <p class="text-danger">{{ $error }}</p>
                            </div>
                        @endforeach --}}
                    </div>
                </form>
            </div>
        </div>
    @endisset
</div>
</div>
</div>

{{-- Them moi khách hàng --}}
@if(session()->has('signupError') == 1)
<div style="display: block" id="createCustomer">
    @php
        session()->forget('signupError');
    @endphp
@else
<div style="display: none" id="createCustomer">
@endif
<div style="background-color: black; position: fixed; width: 100%;height: 100%;z-index:999;opacity:75%"
    onclick="displayNoneCreateCustomer()">
</div>
<div class="card " style="position: fixed; width:50%;left:25%;height:50%;top:15%;z-index:1000">

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="m-0 font-weight-bold text-danger">Thông tin khách hàng</h6>
                </div>
                <div class="col-md-6 text-right">
                    <button class="fa fa-times border-radius-25" onclick="displayNoneCreateCustomer()"></button>
                </div>
            </div>

        </div>
        <div class="card-body">

            <div class="table-responsive" style="overflow: hidden">
                <form method="POST" action="{{ route('customerCustomer.store') }}">

                    @csrf
                    <div class="form-group row ">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <p class="text-black">Tên khách hàng</p>
                            <input type="text" class="form-control text-black" name="newName"
                                placeholder="Nhập tên khách hàng">
                        </div>
                        <div class="col-sm-6">
                            <p class="text-black">Số điện thoại</p>
                            <input type="text" class="form-control text-black" name="newPhone"
                                placeholder="Số điện thoại">
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="text-black">Email</p>
                        <input type="email" class="form-control text-black" name="newEmail"
                            placeholder="Nhập email">
                    </div>
                    <div class="form-group">
                        <p class="text-black">Địa chỉ</p>
                        <input type="text" class="form-control text-black" name="newAddress"
                            placeholder="Nhập địa chỉ">
                    </div>
                    <p class="text-black">Password</p>
                    <input type="password" class="form-control" name="newPassword" placeholder="Nhập password"
                        autocomplete="current-password">
            </div>
            <div class="form-group row">

                <div class="col-sm-12">
                    <button type="submit" class="form-control btn-danger btn-user text-bold"
                        placeholder="Repeat Password" style="padding:0">Đăng ký ngay</button>
                </div>
            </div>
            {{-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                            Add data
                        </a> --}}
            </form>
        </div>
    </div>
</div>
</div>

{{-- Đăng nhập --}}

{{-- Sửa phần này --}}
{{-- @if ($dataError || ($dataSuccess && session()->has('khachHang') == 0) || (sizeof($errors->all()) != 0 && session()->has('khachHang') == 0)) --}}
{{--  --}}
@if(session()->has('loginError') == 1)
<div style="display: block" class="row justify-content-center" id="login">
    @php
        session()->forget('loginError');
    @endphp
@else
    <div style="display: none" class="row justify-content-center" id="login">
@endif
<div style="background-color: black; position: fixed; width: 100%;height: 100%;z-index:999;opacity:75%"
onclick="displayNoneLogin()">
</div>
<div class="card " style="position: fixed; width:50%;left:25%;height:50%;top:15%;z-index:1000">

<div class="card shadow mb-4">

    <div class="card-header py-3">
        <div class="row">
            <div class="col-md-6">
                <h6 class="m-0 font-weight-bold text-danger">Đăng nhập</h6>
            </div>
            <div class="col-md-6 text-right">
                <button class="fa fa-times border-radius-25" onclick="displayNoneLogin()"></button>
            </div>
        </div>

    </div>
    <div class="card-body">

        <div class="table-responsive" style="overflow: hidden">
            <form action="{{ route('loginProcess') }}" method="POST" class="user">

                @csrf
                @php
                    $dataError = Session::get('error');
                    $dateSuccess = Session::get('success');
                @endphp
                {{-- @foreach ($errors->all() as $error)
                    @if (session()->has('khachHang') == 0)
                        <div class="alert alert-danger">
                            <li>{{ $error }}</li>
                        </div>
                    @endif
                @endforeach
                @isset($dataError)
                    @if (session()->has('khachHang') == 0)
                        <div class="alert alert-danger">
                            {{ $dataError }}
                        </div>
                    @endif
                @endisset --}}
                @isset($dateSuccess)
                    <div class="alert alert-success">
                        {{ $dateSuccess }}
                    </div>
                @endisset
                <div class="form-group">
                    @if (session()->has('nhoMatKhau') == 1)
                        <input type="email" class="form-control form-control-user" name="email"
                            aria-describedby="emailHelp" placeholder="Nhập email của bạn"
                            value="{{ session()->get('nhoTaiKhoan') }}">
                        {{-- Sửa phần này --}}
                    @elseif(session()->has('emailSai') == 1)
                        <input type="email" class="form-control form-control-user" name="email"
                            aria-describedby="emailHelp" placeholder="Nhập email của bạn"
                            value="{{ session()->get('emailSai') }}">
                        {{--  --}}
                    @else
                        <input type="email" class="form-control form-control-user" name="email"
                            aria-describedby="emailHelp" placeholder="Nhập email của bạn">
                    @endif
                </div>
                <div class="form-group">
                    @if (session()->has('nhoMatKhau') == 1)
                        <input type="password" class="form-control form-control-user" name="password"
                            placeholder="Nhập mật khẩu của bạn" value="{{ session()->get('nhoMatKhau') }}">
                    @else
                        <input type="password" class="form-control form-control-user" name="password"
                            placeholder="Nhập mật khẩu của bạn">
                    @endif
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                        @if (session()->has('nhoMatKhau') == 1)
                            <input type="checkbox" class="custom-control-input" id="customCheck"
                                name="rememberPassword" checked="{{ session()->get('nhoCheck') }}">
                        @else
                            <input type="checkbox" class="custom-control-input" id="customCheck"
                                name="rememberPassword">
                        @endif
                        <label class="custom-control-label" for="customCheck">Nhớ mật khẩu</label>
                    </div>
                </div>
                <button class="btn text-light btn-user btn-block" style="background-color: red">
                    Đăng nhập
                </button>
            </form>
            <hr>
            <div class="text-center">
                <a class="small link-red" href="forgot-password.html">Quên mật khẩu?</a> |
                <a class="small link-red" href="#" onclick="displayBlockCreateCustomer(), displayNoneLogin()">Đăng
                    ký ngay</a>
            </div>
        </div>
    </div>
</div>


</div>
</div>








<!-- Topbar Filler - Không cần quan tâm đến cái này -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<!-- Topbar Search -->
<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
            aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
            aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>

    <!-- Nav Item - Alerts -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - Alerts -->
            <span class="badge badge-danger badge-counter">3+</span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
                Alerts Center
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
        </div>
    </li>

    <!-- Nav Item - Messages -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <!-- Counter - Messages -->
            <span class="badge badge-danger badge-counter">7</span>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">
                Message Center
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                    <div class="status-indicator bg-success"></div>
                </div>
                <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                        problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                    <div class="status-indicator"></div>
                </div>
                <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how
                        would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                    <div class="status-indicator bg-warning"></div>
                </div>
                <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with
                        the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                    <div class="status-indicator bg-success"></div>
                </div>
                <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                        told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
        </div>
    </li>

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
                <a href="{{ route('logout') }}">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                </a>
            </a>
        </div>
    </li>
    </div>
</ul>
</nav>
<!-- End of Topbar -->
