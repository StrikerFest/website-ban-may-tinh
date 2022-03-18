<html lang="en">
<head>
    @include("Admin.Layout.Common.meta")
    <script src="https://cdn.tiny.cloud/1/13dhm7ievvt2m5zqgf71jpj7kzxx89vu8bh22bhcrh5717n8/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
                                        <label class="form-inline label">Tiêu đề</label>
                                        <input type="text" class="form-control form-control-user" id="exampleProduct"
                                            placeholder="Blog title" name="tieuDe" value="{{$BV->tieuDe}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label class="form-inline label">Ảnh hiện tại</label>
                                        <img
                                            class="card-img-top"
                                            style="height: 150px; width: 150px; border: 1px solid lightgray"
                                            src="{{ asset('assets/img/'.$BV->anh) }}"
                                            alt="..."
                                        />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-inline label">Ảnh mới</label>
                                        <input type="file" class="form-control-file" name="anh">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label class="form-inline label">Người viết</label>
                                        <select class="form-control" name="maNV">
                                            @foreach($nhanVien as $NV)
                                                <option value="{{ $NV->maND }}" <?php if($NV->maND == $BV->maNV)echo("selected") ?>>
                                                    {{ $NV->tenND }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label class="form-inline label">Ngày tạo</label>
                                        <input type="date" class="form-control" id="exampleProduct" name="ngayTao" value="{{$BV->ngayTao}}">
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label class="form-inline label">Tình trạng</label>
                                        <select class="form-control" name="maTTBV">
                                            @foreach($tinhTrangBaiViet as $TTBV)
                                                <option value="{{ $TTBV->maTTBV }}" <?php if($TTBV->maTTBV == $BV->maTTBV)echo("selected") ?>>
                                                    {{ $TTBV->tenTTBV }}
                                                </option>
                                            @endforeach
                                        </select>    
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label class="form-inline label">Nội dung</label>
                                        <textarea class="form-control" name="noiDung" rows="5" placeholder="Content">{{$BV->noiDung}}</textarea>
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
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
    </script>
</body>
</html>
