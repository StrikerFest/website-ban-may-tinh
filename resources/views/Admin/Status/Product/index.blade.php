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
                    <h1 class="h3 mb-2 text-gray-800">Tình trạng sản phẩm</h1>
                    <p class="mb-4">Trang thông tin tình trạng sản phẩm.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bảng tình trạng sản phẩm hiện tại</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã</th>
                                            <th>Tên</th>
                                            <th colspan="2" width="10%">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tfoot>

                                    </tfoot>
                                    <tbody>
                                    @foreach ($TTSP as $TT)
                                        <tr>
                                            <td>{{$TT->maTTSP}}</td>
                                            <td>{{$TT->tenTTSP}}</td>
                                            <td>
                                                <form action="{{route('productStatus.edit', $TT->maTTSP)}}" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Sửa</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('productStatus.destroy', $TT->maTTSP)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button 
                                                        onclick="return confirm('Xác nhận xóa tình trạng?')"
                                                        class="btn btn-primary btn-user btn-block"
                                                        >
                                                        Xóa
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{$TTSP->links('')}}
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Thêm tình trạng mới</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="{{ route('productStatus.store') }}" method="POST">
                                    @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control form-control-user" id="exampleProductStatus"
                                            placeholder="Role" name="tenTTSP">
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Add data
                                </button>
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

</body>
</html>