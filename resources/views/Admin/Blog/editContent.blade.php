<!DOCTYPE html>
<html lang="en">
<head>
    @include("Admin.Layout.Common.meta")
    <script src="https://cdn.tiny.cloud/1/13dhm7ievvt2m5zqgf71jpj7kzxx89vu8bh22bhcrh5717n8/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Sửa nội dung bài viết</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="{{ route('blog.updateContent', $NDBV->maNDBV) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                <div id="sample-div">
                                    <div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <label class="form-inline label">Tiêu đề</label>
                                                @error('tieuDe.*')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <input type="text" class="form-control" id="exampleProduct"
                                                    placeholder="Blog title" name="tieuDe" value="{{ $NDBV->tieuDe }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label class="form-inline label">Ảnh cũ</label>
                                                <?php if(!is_null($NDBV->anh)){ ?>
                                                <img
                                                    class="card-img-top"
                                                    style="height: 150px; width: 150px; border: 1px solid lightgray"
                                                    src="{{ asset('assets/img/'.$NDBV->anh) }}"
                                                    alt="..."
                                                />
                                                <?php } ?>
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label class="form-inline label">Ảnh</label>
                                                @error('anh')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <input type="file" class="form-control-file" name="anh">
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <label class="form-inline label">Nội dung</label>
                                                @error('noiDung.*')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <textarea class="form-control abc" name="noiDung" rows="5" placeholder="Content">{{$NDBV->noiDung}}</textarea>
                                            </div>
                                        </div>
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
    <script>
        const init = () => {
            tinymce.init({
                selector: 'textarea.abc',
                plugins: 'advlist autolink lists link image charmap preview anchor pagebreak table',
                toolbar_mode: 'floating',
            });
        }
        init();
    </script>
</body>
</html>
