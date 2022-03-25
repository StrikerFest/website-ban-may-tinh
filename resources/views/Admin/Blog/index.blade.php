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

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bảng blog hiện tại</h6>
                            <!-- Filter -->
                            <div style="margin-top: 10px">
                                <table>
                                    <h6>Bộ lọc</h6>
                                    <form method="get">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input class="form-control" type="text" name="searchName" value="{{$searchName}}" placeholder="Nhập tiêu đề">
                                            </div>
                                            <div class="col-sm-2">
                                                <input class="form-control" type="date" name="NBD" value="{{$NBD}}">
                                            </div>
                                            <div class="col-sm-2">
                                                <input class="form-control" type="date" name="NKT" value="{{$NKT}}">
                                            </div>
                                            <div class="col-sm-2">
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
                                            <th>Tiêu đề</th>
                                            <th>Ảnh</th>
                                            <th>Người viết</th>
                                            <th>Ngày tạo</th>
                                            <th>Nội dung</th>
                                            <th>Tình trạng</th>
                                            <th colspan="2" width="10%">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tfoot>

                                    </tfoot>
                                    <tbody>
                                    @foreach ($baiViet as $BV)
                                        <tr>
                                            <td>{{$BV->tieuDe}}</td>
                                            <td>
                                                <img
                                                    class="card-img-top"
                                                    style="height: 150px; width: 150px; border: 1px solid lightgray"
                                                    src="{{ asset('assets/img/'.$BV->anh) }}"
                                                    alt="..."
                                                />
                                            </td>
                                            <td>
                                                <?php
                                                    foreach($nhanVien as $NV){
                                                        if(($BV->maNV)==($NV->maND)){
                                                            echo $NV->tenND;
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td>{{date_format(date_create($BV->ngayTao),"d-m-Y")}}</td>
                                            <td>
                                                <textarea class="form-control" cols="15" rows="5" readonly>
                                                    {{$BV->noiDung}}
                                                </textarea>
                                            </td>
                                            <td>
                                                <?php
                                                    foreach($tinhTrangBaiViet as $TTBV){
                                                        if(($BV->maTTBV)==($TTBV->maTTBV)){
                                                            echo $TTBV->tenTTBV;
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <form action="{{route('blog.edit', $BV->maBV)}}" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Sửa</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('blog.destroy', $BV->maBV)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button 
                                                        onclick="return confirm('Xác nhận xóa bài viết?')"
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
                            <h6 class="m-0 font-weight-bold text-primary">Thêm bài viết mới</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label class="form-inline label">Tiêu đề</label>
                                        @error('tieuDe')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control form-control-user" id="exampleProduct"
                                            placeholder="Blog title" name="tieuDe">
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <label class="form-inline label">Ảnh</label>
                                        @error('anh')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="file" class="form-control-file" id="exampleProduct" name="anh">
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <input type="hidden" name="maNV" value="<?php echo(session()->get('admin')) ?>">
                                        <label class="form-inline label">Người viết</label>
                                        @error('maNV')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control" id="exampleProduct"
                                            placeholder="Creator" value="<?php echo(session()->get('tenAdmin')) ?>" readonly>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <label class="form-inline label">Ngày tạo</label>
                                        @error('ngayTao')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="date" class="form-control" id="exampleProduct" name="ngayTao" value="<?php echo date('Y-m-d'); ?>" readonly>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <label class="form-inline label">Tình trạng</label>
                                        @error('maTTBV')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <select class="form-control" name="maTTBV">
                                            <option value="" disabled selected hidden>Status</option>
                                            @foreach($tinhTrangBaiViet as $TTBV)
                                                <option value="{{ $TTBV->maTTBV }}">{{ $TTBV->tenTTBV }}</option>
                                            @endforeach
                                        </select>    
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label class="form-inline label">Nội dung</label>
                                        @error('noiDung')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <textarea class="form-control" name="noiDung" rows="5" placeholder="Content"></textarea>
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
