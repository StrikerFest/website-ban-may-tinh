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

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bảng sản phẩm hiện tại</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tên</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
                                            <th>Giảm giá</th>
                                            <th>Nhà sản xuất</th>
                                            <th>Danh mục</th>
                                            <th>Tình trạng</th>
                                            <th colspan="4" width="20%">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tfoot>

                                    </tfoot>
                                    <tbody>
                                    @foreach ($sanPham as $SP)
                                        <tr>
                                            <td>{{$SP->tenSP}}</td>
                                            <td>{{$SP->giaSP}}</td>
                                            <td>{{$SP->soLuong}}</td>
                                            <td>{{$SP->giamGia}}%</td>
                                            <td>
                                                <?php
                                                    foreach($nhaSanXuat as $NSX){
                                                        if(($SP->maNSX)==($NSX->maNSX)){
                                                            echo $NSX->tenNSX;
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                    foreach($theLoai as $TL){
                                                        if(($SP->maTL)==($TL->maTL)){
                                                            echo $TL->tenTL;
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                    foreach($tinhTrangSanPham as $TTSP){
                                                        if(($SP->maTTSP)==($TTSP->maTTSP)){
                                                            echo $TTSP->tenTTSP;
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <form action="{{route('productSpecification.index', $SP->maSP)}}" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Thông số</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('productImage.index', $SP->maSP)}}" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Ảnh</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('product.edit', $SP->maSP)}}" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Sửa</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('product.destroy', $SP->maSP)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button 
                                                        onclick="return confirm('Xác nhận xóa sản phẩm?')"
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
                    {{$sanPham->links('')}}
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Thêm sản phẩm mới</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="{{ route('product.store') }}" method="POST">
                                    @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label class="form-inline label">Sản phẩm</label>
                                        <input type="text" class="form-control form-control-user" id="exampleProduct"
                                            placeholder="Product name" name="tenSP">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label class="form-inline label">Giá</label>
                                        <input type="number" class="form-control form-control-user" id="exampleProduct"
                                            placeholder="Price" name="giaSP">
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label class="form-inline label">Số lượng</label>
                                        <input type="number" class="form-control form-control-user" id="exampleProduct"
                                            placeholder="Quantity" name="soLuong">
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label class="form-inline label">Giảm giá</label>
                                        <input type="number" class="form-control form-control-user" id="exampleProduct"
                                            placeholder="Discount" name="giamGia" min="0" max="100">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label class="form-inline label">Nhà sản xuất</label>
                                        <select class="form-control" name="maNSX">
                                            <option value="" disabled selected hidden>Manufacturer</option>
                                            @foreach($nhaSanXuat as $NSX)
                                                <option value="{{ $NSX->maNSX }}">{{ $NSX->tenNSX }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label class="form-inline label">Danh mục</label>
                                        <select class="form-control" name="maTL">
                                            <option value="" disabled selected hidden>Category</option>
                                            @foreach($theLoai as $TL)
                                                <option value="{{ $TL->maTL }}">{{ $TL->tenTL }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label class="form-inline label">Tình trạng</label>
                                        <select class="form-control" name="maTTSP">
                                            <option value="" disabled selected hidden>Status</option>
                                            @foreach($tinhTrangSanPham as $TTSP)
                                                <option value="{{ $TTSP->maTTSP }}">{{ $TTSP->tenTTSP }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label class="form-inline label">Mô tả</label>
                                        <textarea class="form-control" name="moTa" rows="5" placeholder="Description"></textarea>
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
