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

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Sửa thông tin ảnh sản phẩm</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="{{ route('productImage.update', $ASP->maASP) }}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                <input type="hidden" name="maSP" value="{{$SP->maSP}}">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control form-control-user" id="exampleProduct"
                                            placeholder="Product name" name="tenSP" value="{{$SP->tenSP}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label class="form-inline label">Ảnh hiện tại</label>
                                        <img
                                            class="card-img-top"
                                            style="height: 150px; width: 150px; border: 1px solid lightgray"
                                            src="{{ asset('assets/img/'.$ASP->anh) }}"
                                            alt="..."
                                        />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-inline label">Ảnh mới</label>
                                        @error('anh')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="file" class="form-control-file" name="anh">
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Update data
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
