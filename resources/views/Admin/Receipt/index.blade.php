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
                            <!-- Filter -->
                            <div style="margin-top: 10px">
                                <table>
                                    <h6>Bộ lọc</h6>
                                    <form method="get">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input class="form-control" type="text" name="searchName" value="{{$searchName}}" placeholder="Nhập tên khách hàng">
                                            </div>
                                            <div class="col-sm-2">
                                                <input class="form-control" type="date" name="NBD" value="{{$NBD}}" max="<?php echo date('Y-m-d'); ?>">
                                            </div>
                                            <div class="col-sm-2">
                                                <input class="form-control" type="date" name="NKT" value="{{$NKT}}" max="<?php echo date('Y-m-d'); ?>">
                                            </div>
                                            <div class="col-sm-2">
                                                <select class="form-control" name="searchStatus">
                                                    <option value="" selected>Tình trạng</option>
                                                    @foreach($tinhTrangHoaDon as $TTHD)
                                                        <option value="{{$TTHD->tenTTHD}}" <?php if($searchStatus == $TTHD->tenTTHD)echo "selected" ?>>
                                                            {{$TTHD->tenTTHD}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <button class="btn btn-primary">Tìm kiếm</button>
                                            </div>
                                        </div>
                                    </form>
                                </table>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã</th>
                                            <th>Khách hàng</th>
                                            <th>Số điện thoại</th>
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
                                            <td>{{$HD->soDienThoai}}</td>
                                            <td>
                                                <textarea class="form-control" cols="15" rows="5" readonly>{{$HD->diaChi}}</textarea>
                                            </td>
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
