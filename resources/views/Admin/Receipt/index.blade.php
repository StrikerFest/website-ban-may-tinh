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
                    <h1 class="h3 mb-2 text-gray-800">Hoá đơn</h1>
                    <p class="mb-4">Trang thông tin hoá đơn.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách hoá đơn</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã</th>
                                            <th>Khách hàng</th>
                                            <th>Địa chỉ</th>
                                            <th>Người duyệt</th>
                                            <th>Ngày tạo</th>
                                            <th>Phương thức thanh toán</th>
                                            <th>Tình trạng</th>
                                            <th>Duyệt đơn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($hoaDon as $HD)
                                        <tr>
                                            <td>{{$HD->maHD}}</td>
                                            <td>
                                                <?php 
                                                    foreach($nguoiDung as $ND){
                                                        if($ND->maND == $HD->maKH){
                                                            echo $ND->tenND;
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td>{{$HD->diaChi}}</td>
                                            <td>
                                                <?php 
                                                    foreach($nguoiDung as $ND){
                                                        if($ND->maND == $HD->maNV){
                                                            echo $ND->tenND;
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td>{{$HD->ngayTao}}</td>
                                            <td>
                                                <?php 
                                                    foreach($phuongThucThanhToan as $PTTT){
                                                        if($PTTT->maPTTT == $HD->maPTTT){
                                                            echo $PTTT->tenPTTT;
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    foreach($tinhTrangHoaDon as $TTHD){
                                                        if($TTHD->maTTHD == $HD->maTTHD){
                                                            echo $TTHD->tenTTHD;
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <form action="{{route('receipt.show', $HD->maHD)}}" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Chi tiết</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
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
