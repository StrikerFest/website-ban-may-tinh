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
                    <h1 class="h3 mb-2 text-gray-800">Thông số</h1>
                    <p class="mb-4">Trang thông tin thông số.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bảng thông số hiện tại</h6>
                            <!-- Filter -->
                            <div style="margin-top: 10px">
                                <table>
                                    <h6>Bộ lọc</h6>
                                    <form method="get">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input class="form-control" type="text" name="searchName" value="{{$searchName}}" placeholder="Nhập tên thông số">
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
                                            <th>Tên</th>
                                            <th colspan="2" width="10%">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tfoot>

                                    </tfoot>
                                    <tbody>
                                    @foreach ($thongSo as $TS)
                                        <tr>
                                            <td>{{$TS->maTS}}</td>
                                            <td>{{$TS->tenTS}}</td>
                                            <td>
                                                <form action="{{route('specification.edit', $TS->maTS)}}" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Sửa</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('specification.destroy', $TS->maTS)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button 
                                                        onclick="return confirm('Xác nhận xóa thông số?')"
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
                    {{$thongSo->links('')}}
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Thêm thông số mới</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="{{ route('specification.store') }}" method="post">
                                    @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label class="form-inline label">Thông số</label>
                                        @error('tenTS')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control form-control-user" id="exampleName"
                                            placeholder="Specification" name="tenTS" required>
                                    </div>
                                </div>
                                {{-- Nút Thêm --}}
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
    <script>
        <?php if(session()->has('delete')){ ?>
            alert('{{session()->get('delete')}}')
        <?php } ?>
    </script>
</body>
</html>
