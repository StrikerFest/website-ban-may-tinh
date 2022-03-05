<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark  sidebar sidebar-dark accordion sticky-top" style="height: 100% !important;" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <div class="text-center d-none d-md-inline p-1">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>


        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-user"></i>
                <span>Nhân sự</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="{{route('admin.index')}}">Quản lý Admin</a>
                    <a class="collapse-item" href="{{route('employee.index')}}">Quản lý nhân viên</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-users"></i>
                <span>Khách hàng</span>
            </a>
            <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="{{route('customer.index')}}">Danh sách người dùng</a>
                    <a class="collapse-item" href="{{route('customer.create')}}">Thêm người dùng</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-shopping-basket"></i>
                <span>Sản phẩm</span>
            </a>
            <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="{{route('customer.index')}}">Quản lý sản phẩm</a>
                    <a class="collapse-item" href="{{route('customer.index')}}">Quản lý danh mục SP</a>
                    <a class="collapse-item" href="{{route('customer.index')}}">Quản lý nhà sản xuất</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-edit"></i>
                <span>Blog</span>
            </a>
            <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="{{route('customer.index')}}">Danh sách sản phẩm</a>
                    <a class="collapse-item" href="{{route('customer.create')}}">Thêm sản phẩm</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-receipt"></i>
                <span>Hóa đơn</span>
            </a>
            <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="{{route('customer.index')}}">Danh sách sản phẩm</a>
                    <a class="collapse-item" href="{{route('customer.create')}}">Thêm sản phẩm</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-comment"></i>
                <span>Bình luận và phản hồi</span>
            </a>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="{{route('customer.index')}}">Danh sách sản phẩm</a>
                    <a class="collapse-item" href="{{route('customer.create')}}">Thêm sản phẩm</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEight"
                aria-expanded="true" aria-controls="collapseEight">
                <i class="fas fa-fw fa-ellipsis-h"></i>
                <span>Phân quyền</span>
            </a>
            <div id="collapseEight" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="{{route('role.index')}}">Quản lý chức vụ</a>
                    <a class="collapse-item" href="{{route('permission.index')}}">Quản lý quyền hạn</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-ellipsis-h"></i>
                <span>Khác</span>
            </a>
            <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="{{route('customer.index')}}">Danh sách sản phẩm</a>
                    <a class="collapse-item" href="{{route('customer.create')}}">Thêm sản phẩm</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
        {{-- <div class="sidebar-card d-none d-lg-flex">

        </div> --}}

    </ul>
<!-- End of Sidebar -->

<!-- Filler -->
    {{-- <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion"  id="accordionSidebar">

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link">
                <span>Charts</span></a>
        </li>
    </ul> --}}
<!-- End of Filler -->
