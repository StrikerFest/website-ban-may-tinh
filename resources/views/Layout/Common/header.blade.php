    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="{{ route('dashboard') }}">
                            <!-- <img class="img-fluid" src="png/logo.png" alt="Theme-Logo" /> -->
                            <h3>Quản lý học phí</h3>
                        </a>
                        {{-- <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu icon-toggle-right"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a> --}}
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close">
                                            <i class="feather icon-x input-group-text"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn">
                                            <i class="feather icon-search input-group-text"></i>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!"
                                    onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()"
                                    class="waves-effect waves-light" data-cf-modified-284550efe2f34c11bdc2fce4-="">
                                    <i class="full-screen feather icon-maximize fixed-fullscreen-icon"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-red">5</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="{{ asset('jpg/avatar-4.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="{{ asset('jpg/avatar-3.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="{{ asset('jpg/avatar-4.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green">3</span>
                                    </div>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ asset('jpg/avatar-4.jpg') }}" class="img-radius" alt="User-Profile-Image">
                                        <span>{{ session()->get('tenGiaoVu')}}</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.html">
                                                <i class="feather icon-mail"></i> My Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-lock-screen.html">
                                                <i class="feather icon-lock"></i> Lock Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('administrator/logout')}}">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-search-box">
                                <a class="back_friendlist">
                                    <i class="feather icon-x"></i>
                                </a>
                                <div class="right-icon-control">
                                    <div class="input-group input-group-button">
                                        <input type="text" id="search-friends" name="footer-email" class="form-control"
                                            placeholder="Search Friend">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary waves-effect waves-light" type="button"><i
                                                    class="feather icon-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box waves-effect waves-light" data-id="1"
                                    data-status="online" data-username="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius img-radius" src="{{ asset('jpg/avatar-3.jpg') }}"
                                            alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="2"
                                    data-status="online" data-username="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{ asset('jpg/avatar-2.jpg') }}"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="3"
                                    data-status="online" data-username="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{ asset('jpg/avatar-4.jpg') }}"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="4"
                                    data-status="offline" data-username="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{ asset('jpg/avatar-3.jpg') }}"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-default"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min
                                                ago</small></div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="5"
                                    data-status="offline" data-username="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{ asset('jpg/avatar-2.jpg') }}"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-default"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min
                                                ago</small></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-x"></i> Josephin Doe
                    </a>
                </div>
                <div class="main-friend-chat">
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="{{ asset('jpg/avatar-2.jpg') }}"
                                alt="Generic placeholder image">
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?
                                </p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <div class="media-body chat-menu-reply">
                            <div class="">
                                <p class="chat-cont">Ohh! very nice</p>
                            </div>
                            <p class="chat-time">8:22 a.m.</p>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="{{ asset('jpg/avatar-2.jpg') }}"
                                alt="Generic placeholder image">
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">can you come with me?</p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="chat-reply-box">
                    <div class="right-icon-control">
                        <div class="input-group input-group-button">
                            <input type="text" class="form-control" placeholder="Write hear . . ">
                            <div class="input-group-append">
                                <button class="btn btn-primary waves-effect waves-light" type="button"><i
                                        class="feather icon-message-circle"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pcoded-main-container main-container-height" >
                <div class="pcoded-wrapper ">

                    <nav class="pcoded-navbar wrapper-fill">
                        <div class="pcoded-inner-navbar">
                            <ul class="pcoded-item">
                                {{-- Dashboard - Bảng thống kê --}}
                                <li class="pcoded-hasmenu">
                                    <a href="{{ route('dashboard') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="pcoded-">
                                            <a href="{{ route('dashboard') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Dashboard cơ bản</span>
                                            </a>
                                            {{-- <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="index.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Default</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="dashboard-crm.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">CRM</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="dashboard-analytics.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Analytics</span>
                                                        <span class="pcoded-badge label label-info ">NEW</span>
                                                    </a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        {{-- <li class="pcoded-">
                                            <a href="{{ route('dashboardDetail') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Dashboard chi tiết</span>

                                            </a>

                                        </li> --}}
                                        {{-- <li class="">
                                            <a href="navbar-light.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.navigate.main">Navigation</span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Widget</span>
                                                <span class="pcoded-badge label label-danger">100+</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="widget-statistic.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Statistic</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="widget-data.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Data</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="widget-chart.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Chart Widget</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li> --}}
                                    </ul>
                                </li>
                                {{-- Học phí - Bao gồm cả biên lai --}}
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">Học phí</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="pcoded-hasmenu">
                                            <a href="{{ route('hinhthucdong.index')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Hình thức đóng</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li>
                                                    <a href="{{ route('hinhthucdong.index')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">DS hình thức</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="{{ route('hinhthucdong.create')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Thêm hình thức đóng</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="pcoded-hasmenu">
                                            {{-- Sinh viên --}}
                                            <a href="{{ route('sinhvien.index')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Sinh viên</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="{{ route('sinhvien.index')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">DS Sinh viên</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="{{ route('sinhvien.create')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Thêm sinh viên</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="pcoded-hasmenu">
                                            {{-- Học phí --}}
                                            <a href="{{route('hocphi.index')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Học phí</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="{{route('hocphi.index')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">DS khoản học phí</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="{{route('hocphi.create')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Thêm khoản học phí</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="pcoded-hasmenu">
                                            {{-- Biên lai --}}
                                            <a href="{{ route('hoadon.index')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Biên lai</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="{{route('hoadon.index')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">DS biên lai</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                {{-- Học bổng --}}
                                <li class="pcoded-hasmenu">
                                    <a href="{{ route('hocBong.index')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                        <span class="pcoded-mtext">Học bổng</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="{{ route('hocBong.index')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Học bổng hiện tại</span>
                                            </a>
                                            {{-- <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="form-elements-component.html"
                                                        class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Form Components</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="form-elements-add-on.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Form-Elements-Add-On</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="form-elements-advance.html"
                                                        class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Form-Elements-Advance</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="form-validation.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Form Validation</span>
                                                    </a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li class=" ">
                                            <a href="{{ route('hocBong.create')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Tạo học bổng mới</span>
                                                {{-- <span class="pcoded-badge label label-warning">NEW</span> --}}
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- Giáo vụ --}}
                                <li class="pcoded-hasmenu">
                                    <a href="{{ route('giaoVu.index')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
                                        <span class="pcoded-mtext">Giáo vụ</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="pcoded-">
                                            <a href="{{ route('giaoVu.index')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Giáo vụ hiện tại</span>
                                            </a>

                                        </li>
                                    <?php if(session()->get('chucVu')==1){ ?>

                                        <li class="pcoded-">
                                            <a href="{{ route('giaoVu.create')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Thêm giáo vụ</span>
                                            </a>

                                        </li>
                                    <?php }?>
                                    </ul>
                                </li>
                                {{-- Lớp --}}
                                <li class="pcoded-hasmenu">
                                    <a href="{{ route('lop.index')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span>
                                        <span class="pcoded-mtext">Lớp</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="pcoded- ">
                                            <a href="{{ route('lop.index')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Danh sách lớp</span>
                                            </a>

                                        </li>
                                        <li class="pcoded- ">
                                            <a href="{{ route('lop.create')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Thêm lớp</span>
                                            </a>

                                        </li>
                                    </ul>
                                </li>
                                {{-- Chuyên ngành --}}
                                <li class="pcoded-hasmenu">
                                    <a href="{{route('chuyennganh.index')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-unlock"></i></span>
                                        <span class="pcoded-mtext">Chuyên ngành</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="pcoded- ">
                                            <a href="{{route('chuyennganh.index')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon">
                                                    <i class="feather icon-unlock"></i>
                                                </span>
                                                <span class="pcoded-mtext">DS chuyên ngành</span>
                                            </a>

                                        </li>
                                        <li class="pcoded- ">
                                            <a href="{{ route('chuyennganh.create')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Thêm chuyên ngành</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="error.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Error</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="comming-soon.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Comming Soon</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="offline-ui.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Offline UI</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                {{-- Khóa --}}
                                <li class="pcoded-hasmenu">
                                    <a href="{{route('khoa.index')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-award"></i></span>
                                        <span class="pcoded-mtext">Khóa</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="{{route('khoa.index')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Danh sách khóa</span>
                                            </a>
                                        </li>
                                        <li class="pcoded-">
                                            <a href="{{route('khoa.create')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Tạo khóa</span>
                                            </a>

                                        </li>
                                    </ul>
                                </li>
                                {{-- Khác --}}
                                {{-- <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-watch"></i></span>
                                        <span class="pcoded-mtext">Khác</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="pcoded-hasmenu ">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Menu Levels</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Menu Level 2.1</span>
                                                    </a>
                                                </li>
                                                <li class="pcoded-hasmenu ">
                                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Menu Level 2.2</span>
                                                    </a>
                                                    <ul class="pcoded-submenu">
                                                        <li class="">
                                                            <a href="javascript:void(0)"
                                                                class="waves-effect waves-dark">
                                                                <span class="pcoded-mtext">Menu Level 3.1</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Menu Level 2.3</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="javascript:void(0)" class="disabled waves-effect waves-dark">
                                                <span class="pcoded-mtext">Disabled Menu</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="sample-page.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Sample Page</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li> --}}
                            </ul>
                        </div>
                    </nav>

                    <!-- <div class="pcoded-content">

                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-sidebar bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Sample page</h5>
                                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Page Layouts</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Sample page</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="card">
                                                    <div class="card-block">
                                                        <span>
                                                            Horizontal Fixed with icon layout is useful for those users
                                                            who only wants menu options on top.
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>CSS Class</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <span>To use static layout for your project add
                                                            <code><strong>.horizontal-icon</strong></code> class in
                                                            <code>body</code> tag.</span>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>JS Option</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <span>To use Compact Menu for your project add
                                                            <code><strong>themelayout: 'horizontal', FixedNavbarPosition: true, FixedHeaderPosition: true,</strong></code>
                                                            class in js.</span>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>HTML Markup</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <p>Use the following code to use <strong>Horizontal Fixed Layout
                                                                with Icon</strong> in horizontal.</p>
                                                        <h6 class="m-t-20 f-w-600">Usage:</h6>
                                                        <pre>                                                                <code class="language-markup">
                                                                        $( document ).ready(function() {
                                                                        $( "#pcoded" ).pcodedmenu({
                                                                        themelayout: 'horizontal',
                                                                        FixedNavbarPosition: true,
                                                                        FixedHeaderPosition: true,
                                                                    });
                                                                });
                                                            </code>
                                                        </pre>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Sample Block</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i>
                                                                </li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i>
                                                                </li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i>
                                                                </li>
                                                                <li><i class="icofont icofont-error close-card"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                            standard dummy text ever since the 1500s, when an unknown
                                                            printer took a galley of type
                                                            and scrambled it to make a type specimen book. It has
                                                            survived not only five centuries, but also the leap into
                                                            electronic typesetting, remaining essentially unchanged. It
                                                            was popularised in the
                                                            1960s with the release of Letraset sheets containing Lorem
                                                            Ipsum passages, and more recently with desktop publishing
                                                            software like Aldus PageMaker including versions of Lorem
                                                            Ipsum.</p>
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random
                                                            text. It has roots in a piece of classical Latin literature
                                                            from 45 BC, making it over 2000 years old. Richard
                                                            McClintock, a Latin professor
                                                            at Hampden-Sydney College in Virginia, looked up one of the
                                                            more obscure Latin words, consectetur, from a Lorem Ipsum
                                                            passage, and going through the cites of the word in
                                                            classical literature,
                                                            discovered the undoubtable source. Lorem Ipsum comes from
                                                            sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et
                                                            Malorum" (The Extremes of Good and Evil) by Cicero, written
                                                            in 45 BC. This book
                                                            is a treatise on the theory of ethics, very popular during
                                                            the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum
                                                            dolor sit amet..", comes from a line in section 1.10.32. The
                                                            standard chunk
                                                            of Lorem Ipsum used since the 1500s is reproduced below for
                                                            those interested. Sections 1.10.32 and 1.10.33 from "de
                                                            Finibus Bonorum et Malorum" by Cicero are also reproduced in
                                                            their exact original
                                                            form, accompanied by English versions from the 1914
                                                            translation by H. Rackham.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div id="styleSelector">
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

