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
                    <h1 class="h3 mb-2 text-gray-800">Ảnh banner</h1>
                    <p class="mb-4">Trang thông tin ảnh banner.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bảng ảnh banner</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div style="font-size: 20px; margin: 5px 0; font-weight: bold;">
                                    Tổng số bản ghi: {{$anhQuangCao->total()}}
                                </div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Ảnh</th>
                                            <th>Đường dẫn</th>
                                            <th colspan="2" width="10%">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tfoot>

                                    </tfoot>
                                    <tbody>
                                    @foreach ($anhQuangCao as $AQC)
                                        <tr>
                                            <td>
                                                <img
                                                    class="card-img-top"
                                                    style="height: 150px; width: 150px; border: 1px solid lightgray"
                                                    src="{{ asset('assets/img/'.$AQC->anh) }}"
                                                    alt="..."
                                                />
                                            </td>
                                            <td>
                                                {{$AQC->duongDan}}
                                            </td>
                                            <td>
                                                <form action="{{route('bannerImage.edit', $AQC->maAQC)}}" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Sửa</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('bannerImage.destroy', $AQC->maAQC)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button 
                                                        onclick="return confirm('Xác nhận xóa ảnh banner?')"
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
                    {{$anhQuangCao->links('')}}
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Thêm ảnh banner</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="{{ route('bannerImage.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <label class="form-inline label">Ảnh</label>
                                        @error('anh')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="file" class="form-control-file" name="anh">
                                    </div>
                                    <div class="col-sm-8">
                                        <label class="form-inline label">Đường dẫn</label>
                                        @error('duongDan')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control" name="duongDan" placeholder="URL">
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
