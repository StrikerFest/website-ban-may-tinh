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
                    <h1 class="h3 mb-2 text-gray-800">Sản phẩm</h1>
                    <p class="mb-4">Trang thông tin sản phẩm.</p>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Sửa thông tin sản phẩm</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="{{ route('admin.product.update', $SP->maSP) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label class="form-inline label">Sản phẩm</label>
                                        @error('tenSP')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control form-control-user" id="exampleProduct"
                                            placeholder="Product name" name="tenSP" value="{{$SP->tenSP}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="form-inline label">Giá</label>
                                        @error('giaSP')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="number" class="form-control form-control-user" id="exampleProduct"
                                            placeholder="Price" name="giaSP" min="0" value="{{$SP->giaSP}}">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="form-inline label">Giảm giá</label>
                                        <input type="number" class="form-control form-control-user" id="exampleProduct"
                                            placeholder="Discount" name="giamGia" min="0" max="100" value="{{$SP->giamGia}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-4 mb-sm-0">
                                        <label class="form-inline label">Nhà sản xuất</label>
                                        @error('maNSX')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <select class="form-control" name="maNSX">
                                            <option value="" disabled selected hidden>Manufacturer</option>
                                            @foreach($nhaSanXuat as $NSX)
                                                <option value="{{ $NSX->maNSX }}" <?php echo($SP->maNSX == $NSX->maNSX? "selected": "") ?>>
                                                    {{ $NSX->tenNSX }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-4 mb-4 mb-sm-0">
                                        <label class="form-inline label">Danh mục</label>
                                        @error('maTLC')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <select class="form-control" name="maTLC">
                                            <option value="" disabled selected hidden>Category</option>
                                            @foreach($theLoaiCon as $TLC)
                                                <option value="{{ $TLC->maTLC }}" <?php echo($SP->maTLC == $TLC->maTLC? "selected": "") ?>>
                                                    {{ $TLC->tenTLC }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-4 mb-4 mb-sm-0">
                                        <label class="form-inline label">Tình trạng</label>
                                        @error('maTTSP')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <select class="form-control" name="maTTSP">
                                            <option value="" disabled selected hidden>Status</option>
                                            @foreach($tinhTrangSanPham as $TTSP)
                                                <option value="{{ $TTSP->maTTSP }}" <?php echo($SP->maTTSP == $TTSP->maTTSP? "selected": "") ?>>
                                                    {{ $TTSP->tenTTSP }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label class="form-inline label">Mô tả</label>
                                        @error('moTa')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <textarea class="form-control" name="moTa" rows="5" placeholder="Description">{{$SP->moTa}}</textarea>
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
