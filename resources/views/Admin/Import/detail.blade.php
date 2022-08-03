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
                    <h1 class="h3 mb-2 text-gray-800">Đơn nhập hàng chi tiết</h1>
                    <p class="mb-4">Trang thông tin đơn nhập hàng chi tiết.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Đơn nhập hàng chi tiết</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Nhà phân phối</th>
                                        <th>Ngày nhập</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{$nhapKho->maNK}}
                                        </td>
                                        <td>
                                            {{$nhapKho->tenNPP}}
                                        </td>
                                        <td>
                                            {{$nhapKho->ngayNhap}}
                                        </td>
                                    </tr>
                                </table>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Mã serial</th>
                                            <th>Giá</th>
                                            <th colspan="2">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($nhapKhoChiTiet as $NKCT)
                                        <tr>
                                            <td>
                                                <?php
                                                    foreach($sanPham as $SP){
                                                        if($NKCT->maSP == $SP->maSP){
                                                            echo $SP->tenSP;
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                {{$NKCT->soLuong}}
                                            </td>
                                            <td>
                                                <form action="{{route('serial.show', $NKCT->maSP)}}" method="get">
                                                    @csrf
                                                    <input type="hidden" name="searchImport" value="{{$nhapKho->maNK}}" />
                                                    <button class="btn btn-info">
                                                        Xem
                                                    </button>
                                                </form>
                                            </td>
                                            <td>{{number_format($NKCT->giaNhap)}} VND</td>
                                            <td colspan="2">
                                                {{number_format($NKCT->giaNhap * $NKCT->soLuong)}} VND
                                            </td>
                                        </tr>
                                    @endforeach
                                        <tr>
                                            <td colspan="4">
                                                Tổng tiền
                                            </td>
                                            <td colspan="1">
                                                {{number_format($tongTien->tong)}} VND
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                {{$nhapKhoChiTiet->links('')}}
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
