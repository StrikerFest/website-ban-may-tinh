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
                    <h1 class="h3 mb-2 text-gray-800">Hoá đơn chi tiết</h1>
                    <p class="mb-4">Trang thông tin hoá đơn chi tiết.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Hoá đơn chi tiết</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Giá</th>
                                            <th>Giảm giá</th>
                                            <th>Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($hoaDonChiTiet as $HDCT)
                                        <tr>
                                            <td>
                                                {{$HDCT->tenSP}}
                                            </td>
                                            <td>
                                                {{$HDCT->soLuong}}
                                            </td>
                                            <td>{{number_format($HDCT->giaSP)}} VND</td>
                                            <td>{{number_format($HDCT->giamGia)}} VND</td>
                                            <td>
                                                {{number_format($HDCT->thanhTien)}} VND
                                            </td>
                                        </tr>
                                    @endforeach
                                        <tr>
                                            <td colspan="4">
                                                Tổng tiền
                                            </td>
                                            <td>
                                                {{number_format($tongTien->tong)}} VND
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td>
                                                duyethoadon-----
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
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
