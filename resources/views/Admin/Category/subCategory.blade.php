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
                    <h1 class="h3 mb-2 text-gray-800">Danh mục con</h1>
                    <p class="mb-4">Trang thông tin danh mục con.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bảng danh mục con hiện tại</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Danh mục cha: {{ $theLoai->tenTL }}</th>
                                            <th colspan="2" width="10%">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tfoot>

                                    </tfoot>
                                    <tbody>
                                    @foreach ($theLoaiCon as $TLC)
                                        <tr>
                                            <td>{{$TLC->tenTLC}}</td>
                                            <td>
                                                <form action="{{route('subCategory.edit', $TLC->maTLC)}}" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Sửa</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('subCategory.destroy', $TLC->maTLC)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button 
                                                        onclick="return confirm('Xác nhận xóa danh mục con?')"
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
                    {{$theLoaiCon->links('')}}
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Thêm danh mục con mới</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="{{ route('subCategory.store') }}" method="POST">
                                    @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="hidden" name="maTL" value="{{$theLoai->maTL}}">
                                        <label class="form-inline label">Danh mục con</label>
                                        @error('tenTLC')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control form-control-user" id="exampleCategory"
                                            placeholder="Category" name="tenTLC" required>
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
    <script>
        <?php if(session()->has('delete')){ ?>
            alert('{{session()->get('delete')}}')
        <?php } ?>
    </script>
</body>
</html>
