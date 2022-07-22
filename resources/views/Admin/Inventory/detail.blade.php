<html lang="en">
<head>
    @include("Admin.Layout.Common.meta")
</head>
<body>
    <!-- Page Wrapper -->
    <div id="wrapper">

        @include("Admin.Layout.Common.side_nav_menu")

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            @include("Admin.Layout.Common.header")
            <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Chi tiết nhập sản phẩm</h1>
                    <p class="mb-4">Trang thông tin sản phẩm được nhập.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Chi tiết nhập của sản phẩm</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th colspan="5">Sản phẩm: {{ $tenSP }}</th>
                                        </tr>
                                        <tr>
                                            <th>Nhà phân phối</th>
                                            <th>Ngày nhập</th>
                                            <th>Giá nhập</th>
                                            <th>Số lượng</th>
                                            <th>Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($sanPham as $SP)
                                        <tr>
                                            <td>{{$SP->tenNPP}}</td>
                                            <td>{{$SP->ngayNhap}}</td>
                                            <td>{{number_format($SP->giaNhap)}} VND</td>
                                            <td>{{$SP->soLuong}}</td>
                                            <td>{{number_format($SP->giaNhap * $SP->soLuong)}} VND</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{$sanPham->links('')}}
                                <button class="btn btn-primary" onclick="window.history.back()">
                                    Quay lại
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
        </div>

    </div>
    <!-- End of Page Wrapper -->
    @include("Admin.Layout.Common.bottom_script")

</body>
</html>
