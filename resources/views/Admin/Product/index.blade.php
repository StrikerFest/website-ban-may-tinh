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
                            <!-- Filter -->
                            <div style="margin-top: 10px">
                                <table>
                                    <h6>Bộ lọc</h6>
                                    <form method="get">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input class="form-control" type="text" name="searchName" value="{{$searchName}}" placeholder="Nhập tên sản phẩm">
                                            </div>
                                            <div class="col-sm-3">
                                                <select class="form-control" name="searchManufacturer">
                                                    <option value="" selected>Nhà sản xuất</option>
                                                    @foreach($nhaSanXuat as $NSX)
                                                        <option value="{{$NSX->tenNSX}}" <?php if($searchManufacturer == $NSX->tenNSX)echo "selected" ?>>
                                                            {{$NSX->tenNSX}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <select class="form-control" name="searchSubCategory">
                                                    <option value="" selected>Danh mục</option>
                                                    @foreach($theLoaiCon as $TLC)
                                                        <option value="{{$TLC->tenTLC}}" <?php if($searchSubCategory == $TLC->tenTLC)echo "selected" ?>>
                                                            {{$TLC->tenTLC}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
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
                                            <th>Tên</th>
                                            <th>Giá</th>
                                            <th>Giảm giá</th>
                                            <th>Nhà sản xuất</th>
                                            <th>Danh mục</th>
                                            <th>Tình trạng</th>
                                            <th width="22%">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tfoot>

                                    </tfoot>
                                    <tbody>
                                    @foreach ($sanPham as $SP)
                                        <tr>
                                            <td>{{$SP->tenSP}}</td>
                                            <td>{{number_format($SP->giaSP)}} VND</td>
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
                                                    foreach($theLoaiCon as $TLC){
                                                        if(($SP->maTLC)==($TLC->maTLC)){
                                                            echo $TLC->tenTLC;
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
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <form action="{{route('admin.product.updateSpecial', $SP->maSP)}}" method="post">
                                                            @csrf
                                                            <?php if($SP->dacBiet == 0){ ?>
                                                                <input type="hidden" name="dacBiet" value="1">
                                                                <button class="btn btn-danger btn-user btn-block">Thêm vào sale</button>
                                                            <?php }else{ ?>
                                                                <input type="hidden" name="dacBiet" value="0">
                                                                <button class="btn btn-success btn-user btn-block">Bỏ khỏi sale</button>
                                                            <?php } ?>
                                                        </form>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <form action="{{route('promotion.index', $SP->maSP)}}" method="get">
                                                            @csrf
                                                            <button class="btn btn-primary btn-user btn-block">Khuyến mãi</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <form action="{{route('productImage.index', $SP->maSP)}}" method="get">
                                                            @csrf
                                                            <button class="btn btn-primary btn-user btn-block">Ảnh</button>
                                                        </form>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <form action="{{route('productSpecification.index', $SP->maSP)}}" method="get">
                                                            @csrf
                                                            <button class="btn btn-primary btn-user btn-block">Thông số</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <form action="{{route('admin.product.edit', $SP->maSP)}}" method="get">
                                                            @csrf
                                                            <button class="btn btn-primary btn-user btn-block">Sửa</button>
                                                        </form>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <form action="{{route('admin.product.destroy', $SP->maSP)}}" method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button 
                                                                onclick="return confirm('Xác nhận xóa sản phẩm?')"
                                                                class="btn btn-primary btn-user btn-block"
                                                                >
                                                                Xóa
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
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
                                <form class="user" action="{{ route('admin.product.store') }}" method="POST">
                                    @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label class="form-inline label">Sản phẩm</label>
                                        @error('tenSP')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control form-control-user" id="exampleProduct"
                                            placeholder="Product name" name="tenSP">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="form-inline label">Giá</label>
                                        @error('giaSP')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="number" class="form-control form-control-user" id="exampleProduct"
                                            placeholder="Price" name="giaSP" min="0" value="0">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="form-inline label">Giảm giá</label>
                                        @error('giamGia')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="number" class="form-control form-control-user" id="exampleProduct"
                                            placeholder="Discount" name="giamGia" min="0" max ="100">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <label class="form-inline label">Nhà sản xuất</label>
                                        @error('maNSX')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <select class="form-control" name="maNSX">
                                            <option value="" disabled selected hidden>Manufacturer</option>
                                            @foreach($nhaSanXuat as $NSX)
                                                <option value="{{ $NSX->maNSX }}">{{ $NSX->tenNSX }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <label class="form-inline label">Nhà phân phối</label>
                                        @error('maNPP')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <select class="form-control" name="maNPP">
                                            <option value="" disabled selected hidden>Supplier</option>
                                            @foreach($nhaPhanPhoi as $NPP)
                                                <option value="{{ $NPP->maNPP }}">{{ $NPP->tenNPP }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <label class="form-inline label">Danh mục</label>
                                        @error('maTLC')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <select class="form-control" name="maTLC">
                                            <option value="" disabled selected hidden>Category</option>
                                            @foreach($theLoaiCon as $TLC)
                                                <option value="{{ $TLC->maTLC }}">{{ $TLC->tenTLC }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <label class="form-inline label">Tình trạng</label>
                                        @error('maTTSP')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
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
                                        @error('moTa')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
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
    <script>
        <?php if(session()->has('delete')){ ?>
            alert('{{session()->get('delete')}}')
        <?php } ?>
    </script>
</body>
</html>
