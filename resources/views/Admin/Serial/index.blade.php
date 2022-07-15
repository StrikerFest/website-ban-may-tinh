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
                                            <div class="col-sm-3">
                                                <input class="form-control" type="text" name="searchName" value="{{$searchName}}" placeholder="Nhập mã serial">
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
                                            <th colspan="2" width="25%">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($Serial as $S)
                                        <tr>
                                            <td>{{$S->serial}}</td>
                                            <td>
                                                <form action="{{route('serial.edit', $S->maSerial)}}" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Sửa</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('serial.destroy', $S->maSerial)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button onclick="return confirm('Xác nhận xóa mã serial?')" class="btn btn-primary btn-user btn-block">
                                                        Xóa
                                                    </button>
                                                </form>
                                            </td>
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
