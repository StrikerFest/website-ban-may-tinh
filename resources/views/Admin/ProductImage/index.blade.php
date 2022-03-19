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
                    <h1 class="h3 mb-2 text-gray-800">Ảnh sản phẩm</h1>
                    <p class="mb-4">Trang thông tin ảnh sản phẩm.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bảng ảnh sản phẩm</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm: {{ $sanPham->tenSP }}</th>
                                            <th colspan="2" width="10%">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tfoot>

                                    </tfoot>
                                    <tbody>
                                    @foreach ($anhSP as $ASP)
                                        <tr>
                                            <td>
                                                <img
                                                    class="card-img-top"
                                                    style="height: 150px; width: 150px; border: 1px solid lightgray"
                                                    src="{{ asset('assets/img/'.$ASP->anh) }}"
                                                    alt="..."
                                                />
                                            </td>
                                            <td>
                                                <form action="{{route('productImage.edit', $ASP->maASP)}}" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Sửa</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('productImage.destroy', $ASP->maASP)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button 
                                                        onclick="return confirm('Xác nhận xóa ảnh sản phẩm?')"
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
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Thêm ảnh cho sản phẩm</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="{{ route('productImage.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="hidden" name="maSP" value="{{ $sanPham->maSP }}">
                                        <label class="form-inline label">Ảnh</label>
                                        <input type="file" class="form-control-file" name="anh[]" multiple>
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
