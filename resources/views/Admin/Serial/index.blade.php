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
                    <h1 class="h3 mb-2 text-gray-800">Danh sách mã serial</h1>
                    <p class="mb-4">Trang thông tin mã serial.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách mã serial của sản phẩm</h6>
                            <div style="margin-top: 10px">
                                <table>
                                    <h6>Bộ lọc</h6>
                                    <form method="get">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input class="form-control" type="text" name="searchName" value="{{$searchName}}" placeholder="Mã serial">
                                            </div>
                                            <div class="col-sm-2">
                                                <input class="form-control" type="number" name="searchReceipt" value="{{$searchReceipt}}" placeholder="Mã hoá đơn">
                                            </div>
                                            <div class="col-sm-2">
                                                <input class="form-control" type="number" name="searchImport" value="{{$searchImport}}" placeholder="Mã đơn nhập hàng">
                                            </div>
                                            <div class="col-sm-2">
                                                <select class="form-control" name="searchStatus" value="{{$searchStatus}}">
                                                    <option value="">Tình trạng</option>
                                                    <option value="1" <?php if($searchStatus == 1)echo "selected" ?>>Đã bán</option>
                                                    <option value="2" <?php if($searchStatus == 2)echo "selected" ?>>Chưa bán</option>
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
                                            <th colspan="3">Sản phẩm: {{ $tenSP }}</th>
                                        </tr>
                                        <tr>
                                            <th>Mã serial</th>
                                            <th colspan="2" width="40%">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($Serial as $S)
                                        <tr>
                                            <td>{{$S->serial}}</td>
                                            <?php if($S->maHDCT == null){ ?>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <form action="{{route('import.show', $S->maNK)}}" method="get">
                                                                @csrf
                                                                <button class="btn btn-primary btn-user btn-block">Đơn nhập</button>
                                                            </form>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <form action="{{route('serial.edit', $S->maSerial)}}" method="get">
                                                                @csrf
                                                                <button class="btn btn-primary btn-user btn-block">Sửa</button>
                                                            </form>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <form action="{{route('serial.destroy', $S->maSerial)}}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button onclick="return confirm('Xác nhận xóa mã serial?')" class="btn btn-primary btn-user btn-block">
                                                                    Xóa
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            <?php }else{ ?>
                                                <td colspan="2">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <form action="{{route('import.show', $S->maNK)}}" method="get">
                                                                @csrf
                                                                <button class="btn btn-primary btn-user btn-block">Đơn nhập</button>
                                                            </form>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <form action="{{route('receipt.show', $S->maHD)}}" method="get">
                                                                @csrf
                                                                <button class="btn btn-primary btn-user btn-block">Hoá đơn</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            <?php } ?>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{$Serial->links('')}}
                                <button class="btn btn-primary" onclick="window.location='{{ route("inventory.index") }}'">
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
    <?php if(session()->has('delete')){ ?>
        alert('{{session()->get('delete')}}')
    <?php } ?>
</body>
</html>
