<html lang="en">

<head>
    @include('Admin.Layout.Common.meta')
</head>

<body>
    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('Admin.Layout.Common.side_nav_menu')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            @include('Admin.Layout.Common.header')
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Bảo hành</h1>
                <p class="mb-4">Trang thông tin bảo hành.</p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Bảng thông tin bảo hành</h6>
                        <div style="margin-top: 10px">
                            <table>
                                <h6>Bộ lọc</h6>
                                <form method="get">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <input class="form-control" type="text" name="searchSerial" value="{{$searchSerial}}" placeholder="Nhập mã serial">
                                        </div>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="text" name="searchProduct" value="{{$searchProduct}}" placeholder="Nhập tên sản phẩm">
                                        </div>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="text" name="searchName" value="{{$searchName}}" placeholder="Nhập tên khách hàng">
                                        </div>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="date" name="NBD" value="{{$NBD}}" max="<?php echo date('Y-m-d'); ?>">
                                        </div>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="date" name="NKT" value="{{$NKT}}" max="<?php echo date('Y-m-d'); ?>">
                                        </div>
                                        <div class="col-sm-2">
                                            <button class="btn btn-primary">Tìm kiếm</button>
                                        </div>
                                    </div>
                                </form>
                            </table>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div style="font-size: 20px; margin: 5px 0; font-weight: bold;">
                                Tổng số bản ghi: {{$TTBH->total()}}
                            </div>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Mã serial</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Tên người bảo hành</th>
                                        <th>SĐT người bảo hành</th>
                                        <th>Ngày bảo hành</th>
                                        <th>Nội dung</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($TTBH as $BH)
                                        <tr>
                                            <td>{{ $BH->serial }}</td>
                                            <td>{{ $BH->tenSP }}</td>
                                            <td>{{ $BH->tenNBH }}</td>
                                            <td>{{ $BH->soDienThoaiNBH }}</td>
                                            <td width="10%">{{ date_format(date_create($BH->ngayBH), 'd-m-Y H:i:s') }}</td>
                                            <td width="20%">
                                                <textarea class="form-control" readonly>{{ $BH->noiDung }}</textarea>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button class="btn btn-primary" onclick="window.location='{{ route("receipt.index") }}'">
                                Quay về hoá đơn
                            </button>
                        </div>
                    </div>
                </div>
                {{$TTBH->links()}}
            </div>
            <!-- /.container-fluid -->
            
        </div>

    </div>
    <!-- End of Page Wrapper -->
    @include('Admin.Layout.Common.bottom_script')
</body>

</html>
