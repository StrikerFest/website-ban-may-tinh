<html lang="en">
<head>
    @include("Admin.Layout.Common.meta")
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
                    <h1 class="h3 mb-2 text-gray-800">Hàng tồn kho</h1>
                    <p class="mb-4">Trang thông tin hàng tồn kho.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bảng hàng tồn kho</h6>
                            <!-- Filter -->
                            <div style="margin-top: 10px">
                                <table>
                                    <h6>Bộ lọc</h6>
                                    <form method="get">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input class="form-control" type="text" name="searchName" value="{{$searchName}}" placeholder="Nhập tên sản phẩm">
                                            </div>
                                            <div class="col-sm-2">
                                                <input class="form-control" type="text" name="searchSerial" value="{{$searchSerial}}" placeholder="Nhập mã serial">
                                            </div>
                                            <div class="col-sm-2">
                                                <select class="form-control" name="searchSupplier">
                                                    <option value="" selected>Nhà phân phối</option>
                                                    @foreach($nhaPhanPhoi as $NPP)
                                                        <option value="{{$NPP->tenNPP}}" <?php if($searchSupplier == $NPP->tenNPP)echo "selected" ?>>
                                                            {{$NPP->tenNPP}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-2">
                                                <select class="form-control" name="searchSubCategory">
                                                    <option value="" selected>Danh mục</option>
                                                    @foreach($theLoaiCon as $TLC)
                                                        <option value="{{$TLC->tenTLC}}" <?php if($searchSubCategory == $TLC->tenTLC)echo "selected" ?>>
                                                            {{$TLC->tenTLC}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <button class="btn btn-primary">Tìm kiếm</button>
                                                <button type="button" class="btn btn-primary" onclick="window.location='{{ route("import.index") }}'">
                                                    Nhập kho
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </table>
                            </div>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div style="font-size: 20px; margin: 5px 0; font-weight: bold;">
                                    Tổng số bản ghi: {{$sanPham->total()}}
                                </div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tên</th>
                                            <th>Số lượng</th>
                                            <th>Tình trạng</th>
                                            <th width="25%">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($sanPham as $SP)
                                        <tr>
                                            <td>{{$SP->tenSP}}</td>
                                            <td>{{$SP->soLuong}}</td>
                                            <td>{{$SP->getProductStatus()}}</td>
                                            <td>
                                                
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <form action="{{route('serial.show', $SP->maSP)}}" method="get">
                                                            @csrf
                                                            <button class="btn btn-primary btn-user btn-block">Mã serial</button>
                                                        </form>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <form action="{{route('inventory.show', $SP->maSP)}}" method="get">
                                                            @csrf
                                                            <button class="btn btn-primary btn-user btn-block">Chi tiết nhập</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{$sanPham->links('')}}
                </div>
                <!-- /.container-fluid -->
        </div>

    </div>
    <!-- End of Page Wrapper -->
    @include("Admin.Layout.Common.bottom_script")
</body>
</html>
