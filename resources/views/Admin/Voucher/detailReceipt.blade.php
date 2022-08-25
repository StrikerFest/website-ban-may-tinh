<html lang="en">

<head>
    @include("Admin.Layout.Common.meta")
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
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
                <h1 class="h3 mb-2 text-gray-800">Voucher</h1>
                <p class="mb-4">Trang thông tin voucher.</p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Bảng voucher thuộc hoá đơn chi tiết</h6>
                        <!-- Filter -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                </tr>
                                <tr>
                                    <td>
                                        {{$HDCT->tenSP}}
                                    </td>
                                    <td>
                                        {{$HDCT->soLuong}}
                                    </td>
                                    <td>
                                        {{number_format($HDCT->giaSP). ' VND'}}
                                    </td>
                                </tr>
                            </table>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Voucher</th>
                                        <th>Giá trị voucher</th>
                                        <th>Số lượng</th>
                                        <th>Giá trị</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $tongGiaTri = 0; ?>
                                @foreach ($VHDCT as $vhdct)
                                    <tr>
                                        <td>{{$vhdct->tenVoucher}}</td>
                                        <td>
                                            <?php
                                                $giaTri = $vhdct->maTLV==2 ? $vhdct->giaTriPhanTram : $vhdct->giaTri;
                                                $tongGiaTri += $giaTri*$HDCT->soLuong;
                                                echo number_format($giaTri). ' VND';
                                            ?>
                                        </td>
                                        <td>{{$HDCT->soLuong}}</td>
                                        <td>{{number_format($giaTri*$HDCT->soLuong). ' VND'}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3">
                                            Tổng giá trị
                                        </td>
                                        <td>
                                            {{number_format($tongGiaTri). ' VND'}}
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <button class="btn btn-primary" onclick="window.history.back()">
                            Quay lại
                        </button>
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