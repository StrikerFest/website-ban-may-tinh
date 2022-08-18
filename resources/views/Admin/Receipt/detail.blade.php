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
                                    <tr>
                                        <th>Mã hoá đơn</th>
                                        <th>Khách hàng</th>
                                        <th>Số điện thoại</th>
                                        <th>Ngày tạo</th>
                                        <th>Tình trạng</th>
                                        <th>Thanh toán</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{$hoaDon->maHD}}
                                        </td>
                                        <td>
                                            {{$hoaDon->tenND}}
                                        </td>
                                        <td>
                                            {{$hoaDon->soDienThoai}}
                                        </td>
                                        <td>
                                            {{date_format(date_create($hoaDon->ngayTao), 'd-m-Y H:i:s')}}
                                        </td>
                                        <td>
                                            <?php
                                                foreach($tinhTrangHoaDon as $TTHD){
                                                    if(($TTHD->maTTHD)==($hoaDon->maTTHD)){
                                                        echo $TTHD->tenTTHD;
                                                    }
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                if($hoaDon->maPTTT == 1){
                                                    if($hoaDon->maTTHD == 5){
                                                        echo "Đã thanh toán";
                                                    }else{
                                                        echo "Chưa thanh toán";
                                                    }
                                                }else{
                                                    if($hoaDon->maTTHD == 2){
                                                        echo "Hoàn tiền";
                                                    }else {
                                                        echo "Đã thanh toán";
                                                    }
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng</th>
                                            <?php if($hoaDon->maTTHD == 4 || $hoaDon->maTTHD == 5){ ?>
                                                <th>Mã serial</th>     
                                            <?php } ?>
                                            <th>Giá</th>
                                            <th>Giảm giá</th>
                                            <th>Voucher</th>
                                            <?php if($hoaDon->maTTHD == 5){ ?>
                                                <th colspan="2" width="25%">Bảo hành</th>
                                            <?php } ?>
                                            <th colspan="2">Tổng tiền</th>
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
                                            <?php if($hoaDon->maTTHD == 4 || $hoaDon->maTTHD == 5){ ?>
                                                <td>
                                                    <form action="{{route('serial.show', $HDCT->maSP)}}" method="get">
                                                        @csrf
                                                        <input type="hidden" name="searchReceipt" value="{{$hoaDon->maHD}}" />
                                                        <button class="btn btn-info">
                                                            Xem
                                                        </button>
                                                    </form>
                                                </td>
                                            <?php } ?>
                                            <td>{{number_format($HDCT->giaSP)}} VND</td>
                                            <td>{{$HDCT->giamGia}}%</td>
                                            <td>
                                                <?php 
                                                    if(isset($HDCT->tenVoucher)){
                                                        echo $HDCT->tenVoucher;
                                                    }else{
                                                        echo 'Không có voucher';
                                                    }
                                                ?>
                                            </td>
                                            <?php if($hoaDon->maTTHD == 5){ ?>
                                                <td>{{date_format(date_create($HDCT->ngayHetHan), 'd-m-Y')}}</td>
                                                <td>
                                                    <?php if($HDCT->hetHan){ ?>
                                                        Đã hết hạn
                                                    <?php }else{ ?>
                                                        <form action="{{route('warrantyInfo.create', $HDCT->maHDCT)}}" method="get">
                                                            <button class="btn btn-primary" type="submit">
                                                                Bảo hành
                                                            </button>
                                                        </form>
                                                    <?php } ?>
                                                </td>
                                            <?php } ?>
                                            <td colspan="2">
                                                {{number_format($HDCT->tongTien - $HDCT->tienGiamVoucher)}} VND
                                            </td>
                                        </tr>
                                    @endforeach
                                        <tr>
                                            <td colspan="<?php echo (($hoaDon->maTTHD == 1 || $hoaDon->maTTHD == 2 || $hoaDon->maTTHD ==3) ? 5 : ($hoaDon->maTTHD == 4 ? 6 : 8)) ?>">
                                                Thành tiền
                                            </td>
                                            <td colspan="2">
                                                {{number_format($thanhTien) .' VND'}}
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <?php if(!($hoaDon->maTTHD == 2 || $hoaDon->maTTHD == 5 || $hoaDon->maTTHD == 6)){ ?>
                                                <td colspan="<?php echo (($hoaDon->maTTHD == 1 || $hoaDon->maTTHD == 2 || $hoaDon->maTTHD ==3) ? 5 : ($hoaDon->maTTHD == 4 ? 6 : 8)) ?>">
                                                    Thao tác
                                                </td>
                                            <?php } ?>
                                            <?php if($hoaDon->maTTHD == 1){ ?>
                                                <td>
                                                    <form action="{{route('receipt.update', $hoaDon->maHD)}}" method="post">
                                                        @method('PUT')
                                                        @csrf
                                                        <!-- Đang lấy hàng -->
                                                        <input type="hidden" name="maTTHD" value="3">
                                                        <button class="btn btn-success" onclick="return confirm('Xác nhận duyệt đơn?')">
                                                            Duyệt
                                                        </button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="{{route('receipt.cancelOrder', $hoaDon->maHD)}}" method="post">
                                                        @method('PUT')
                                                        @csrf
                                                        <button class="btn btn-danger" onclick="return confirm('Xác nhận huỷ đơn?')">
                                                            Huỷ
                                                        </button>
                                                    </form>
                                                </td>
                                            <?php }else if ($hoaDon->maTTHD == 3){ ?>
                                                <td width="11%">
                                                    <form action="{{route('receipt.update', $hoaDon->maHD)}}" method="post">
                                                        @method('PUT')
                                                        @csrf
                                                        <input type="hidden" name="maTTHD" value="4">
                                                        <button class="btn btn-primary" onclick="return confirm('Xác nhận giao hàng?')">
                                                            Giao hàng
                                                        </button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="{{route('receipt.cancelOrder', $hoaDon->maHD)}}" method="post">
                                                        @method('PUT')
                                                        @csrf
                                                        <button class="btn btn-danger" onclick="return confirm('Xác nhận huỷ đơn?')">
                                                            Huỷ
                                                        </button>
                                                    </form>
                                                </td>
                                            <?php }else if ($hoaDon->maTTHD == 4){ ?>
                                                <td colspan="2">
                                                    <form action="{{route('receipt.cancelOrder', $hoaDon->maHD)}}" method="post">
                                                        @method('PUT')
                                                        @csrf
                                                        <button class="btn btn-danger" onclick="return confirm('Xác nhận huỷ đơn?')">
                                                            Huỷ
                                                        </button>
                                                    </form>
                                                </td>
                                            <?php } ?>
                                        </tr>
                                    </tfoot>
                                </table>
                                <form action="{{route('receipt.pdf', $hoaDon->maHD)}}" method="get">
                                    <button class="btn btn-primary" type="button" onclick="window.location='{{ route("receipt.index") }}'">
                                        Quay lại
                                    </button>
                                    <?php if($hoaDon->maTTHD == 5){ ?>
                                        <button style="float: right;" class="btn btn-info">
                                            Xuất file PDF
                                        </button>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
        </div>

    </div>
    <!-- End of Page Wrapper -->
    @include("Admin.Layout.Common.bottom_script")

    <script>
        <?php if(session()->has('negative_quantity')){ ?>
            alert('{{session()->get('negative_quantity')}}')
        <?php } ?>
        <?php if(session()->has('canceled')){ ?>
            alert('{{session()->get('canceled')}}')
        <?php } ?>
    </script>
</body>
</html>
