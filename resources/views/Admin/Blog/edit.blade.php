<!DOCTYPE html>
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
                    <h1 class="h3 mb-2 text-gray-800">Blog</h1>
                    <p class="mb-4">Trang thông tin blog.</p>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Sửa thông tin blog</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="{{ route('blog.update', $BV->maBV) }}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label class="form-inline label">Tên bài viết</label>
                                        @error('tenBV')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control form-control-user" id="exampleProduct"
                                            placeholder="Blog title" name="tenBV" value="{{$BV->tenBV}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-4 mb-sm-0">
                                        <label class="form-inline label">Người viết</label>
                                        @error('maNV')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <select class="form-control" name="maNV">
                                            @foreach($nhanVien as $NV)
                                                <option value="{{ $NV->maND }}" <?php if($NV->maND == $BV->maNV)echo("selected") ?>>
                                                    {{ $NV->tenND }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-4 mb-4 mb-sm-0">
                                        <label class="form-inline label">Ngày tạo</label>
                                        @error('ngayTao')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="date" class="form-control" id="exampleProduct" name="ngayTao" value="{{$BV->ngayTao}}">
                                    </div>
                                    <div class="col-sm-4 mb-4 mb-sm-0">
                                        <label class="form-inline label">Thể loại</label>
                                        @error('theLoai')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <select class="form-control" name="theLoai">
                                            <option value="0" <?php if($BV->theLoai == 0)echo("selected") ?>>
                                                Bài blog
                                            </option>
                                            <option value="1" <?php if($BV->theLoai == 1)echo("selected") ?>>
                                                Bài viết về sản phẩm
                                            </option>
                                        </select>
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
