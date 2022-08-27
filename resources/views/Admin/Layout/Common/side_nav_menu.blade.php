<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark  sidebar sidebar-dark accordion sticky-top" style="z-index: 1995"
    id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="javascript: window.location.href=window.location.origin">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laptop-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">BKCOM</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <div class="text-center d-none d-md-inline p-1">
        <button class="rounded-circle border-0 admin-toggle-sidebar" id="sidebarToggle"></button>
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
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
        <?php
            $arrQH = session()->get('quyenHan');
            //Mã QH: 1->là Admin, 3->QL sản phẩm
            if(in_array(1, $arrQH) || in_array(3, $arrQH)){
        ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-shopping-basket"></i>
                <span>Sản phẩm</span>
            </a>
            <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="{{route('admin.product.index')}}">Quản lý sản phẩm</a>
                    <a class="collapse-item" href="{{route('category.index')}}">Quản lý danh mục SP</a>
                    <a class="collapse-item" href="{{route('manufacturer.index')}}">Quản lý nhà sản xuất</a>
                    <a class="collapse-item" href="{{route('specification.index')}}">Thông số sản phẩm</a>
                </div>
            </div>
        </li>
        <?php } ?>

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
                    <a class="collapse-item" href="{{route('receipt.index')}}">Xem hoá đơn</a>
                    <a class="collapse-item" href="{{route('paymentMethod.index')}}">Phương thức thanh toán</a>
                </div>
            </div>
        </li>

        <?php
            $arrQH = session()->get('quyenHan');
            //Mã QH: 1->là Admin, 3->QL sản phẩm
            if(in_array(1, $arrQH) || in_array(3, $arrQH)){
        ?>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-box"></i>
                <span>Quản lý kho</span>
            </a>
            <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="{{route('inventory.index')}}">Kho</a>
                    <a class="collapse-item" href="{{route('import.index')}}">Nhập kho</a>
                    <a class="collapse-item" href="{{route('supplier.index')}}">Nhà phân phối</a>
                </div>
            </div>
        </li>
        <?php } ?>

        <?php
            $arrQH = session()->get('quyenHan');
            //Mã QH: 1->là Admin, 3->QL sản phẩm
            if(in_array(1, $arrQH) || in_array(3, $arrQH)){
        ?>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEleven"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-tools"></i>
                <span>Bảo hành</span>
            </a>
            <div id="collapseEleven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="{{route('warranty.index')}}">Quản lý bảo hành</a>
                    <a class="collapse-item" href="{{route('warrantyInfo.index')}}">Thông tin bảo hành</a>
                </div>
            </div>
        </li>
        <?php } ?>

        <?php
            $arrQH = session()->get('quyenHan');
            //Mã QH: 1->là Admin, 5->QL blog
            if(in_array(1, $arrQH) || in_array(5, $arrQH)){
        ?>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-edit"></i>
                <span>Blog & Banner</span>
            </a>
            <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="{{route('blog.index')}}">Quản lý blog</a>
                    <a class="collapse-item" href="{{route('bannerImage.index')}}">Ảnh banner</a>
                </div>
            </div>
        </li>
        <?php } ?>

        <?php
            $arrQH = session()->get('quyenHan');
            //Mã QH: 1->là Admin, 3->QL sản phẩm
            if(in_array(1, $arrQH) || in_array(3, $arrQH)){
        ?>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTen"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-gift"></i>
                <span>Voucher</span>
            </a>
            <div id="collapseTen" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="{{route('voucher.index')}}">Quản lý voucher</a>
                    <a class="collapse-item" href="{{route('voucherType.index')}}">Thể loại voucher</a>
                </div>
            </div>
        </li>
        <?php } ?>

        <?php
            $arrQH = session()->get('quyenHan');
            //Mã QH: 1->là Admin, 2->QL nhân sự
            if(in_array(1, $arrQH) || in_array(2, $arrQH)){
        ?>
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
                    <!-- chucVu 1 (super admin) -->
                    <?php if(session()->get('chucVu') == 1){ ?>
                    <a class="collapse-item" href="{{route('admin.index')}}">Quản lý Admin</a>
                    <?php } ?>
                    <a class="collapse-item" href="{{route('employee.index')}}">Quản lý nhân viên</a>
                </div>
            </div>
        </li>
        <?php } ?>

        <?php
            $arrQH = session()->get('quyenHan');
            //Mã QH: 1->là Admin, 4->QL khách hàng
            if(in_array(1, $arrQH) || in_array(4, $arrQH)){
        ?>
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
                    <!-- <a class="collapse-item" href="{{route('customer.create')}}">Thêm người dùng</a> -->
                </div>
            </div>
        </li>
        <?php } ?>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-comment"></i>
                <span>Bình luận</span>
            </a>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="{{route('productComment.index')}}">Bình luận sản phẩm</a>
                    <a class="collapse-item" href="{{route('blogComment.index')}}">Bình luận bài viết</a>
                </div>
            </div>
        </li>
        
        <!-- Nav Item - Pages Collapse Menu -->
        <?php
            $arrQH = session()->get('quyenHan');
            //Mã QH: 1->là Admin, 2->QL nhân sự
            if(in_array(1, $arrQH) || in_array(2, $arrQH)){
        ?>
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
        <?php } ?>
        

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNine"
                aria-expanded="true" aria-controls="collapseNine">
                <i class="fas fa-fw fa-info"></i>
                <span>Tình trạng</span>
            </a>
            <div id="collapseNine" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="{{route('productStatus.index')}}">Tình trạng sản phẩm</a>
                    <!-- <a class="collapse-item" href="{{route('blogStatus.index')}}">Tình trạng blog</a> -->
                    <a class="collapse-item" href="{{route('receiptStatus.index')}}">Tình trạng hoá đơn</a>
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
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNull"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-ellipsis-h"></i>
                <span>Khác</span>
            </a>
            <div id="collapseNull" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="#">Danh sách sản phẩm</a>
                    <a class="collapse-item" href="#">Thêm sản phẩm</a>
                </div>
            </div>
        
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0 admin-toggle-sidebar" id="sidebarToggle"></button>
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
