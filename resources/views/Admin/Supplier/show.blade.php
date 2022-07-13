<html lang="en">

<head>
    @include('Admin.Layout.Common.meta')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
</head>

<body>
    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('Admin.Layout.Common.side_nav_menu')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            @include('Admin.Layout.Common.header')
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Nhà phân phối</h1>
                <p class="mb-4">Trang thông tin nhà phân phối.</p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Bảng sản phẩm thuộc nhà phân phối</h6>
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
                                        <th>Nhà phân phối: {{$nhaPhanPhoi->tenNPP}}</th>
                                        <th colspan="2" rowspan="2" width="15%">Thao tác</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            Sản phẩm
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sanPham as $SP)
                                        <tr>
                                            <td>{{ $SP->tenSP }}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <form action="{{route('supplier.deleteProduct', $SP->maSPNPP)}}" method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button
                                                                onclick="return confirm('Xác nhận xóa sản phẩm khỏi nhà phân phối này?')"
                                                                class="btn btn-primary btn-user btn-block"
                                                                >
                                                                Xoá
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
                            <h6 class="m-0 font-weight-bold text-primary">Thêm nhà phân phối cho sản phẩm</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form id="dynamic-form" class="user" action="{{ route('supplier.createProduct') }}" method="POST">
                                    @csrf
                                <div id="dynamic-div">
                                    <div class="form-group row">
                                        <input type="hidden" name="maNPP" value="{{ $nhaPhanPhoi->maNPP }}">
                                            @error('maNPP')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        <div class="col-sm-10">
                                            <label class="form-inline label">Sản phẩm</label>
                                                @error('maSP')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            <select class="form-control select2" name="maSP[]">
                                                <option value="" disabled selected hidden>Product</option>
                                                @foreach($listSanPham as $sp)
                                                    <option value="{{ $sp->maSP }}">{{ $sp->tenSP }}</option>
                                                @endforeach
                                            </select>
                                            @if(isset($errors) && $errors->any())
                                                <div class="alert alert-danger">
                                                    @foreach($errors->all() as $error)
                                                        {{$error}}
                                                        <br>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="form-inline label">Thêm</label> 
                                            <button type="button" name="add" id="add" class="btn btn-success">
                                                Thêm
                                            </button>
                                        </div>
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
    @include('Admin.Layout.Common.bottom_script')
    <script>
        $(document).ready(function() {
            //Hàm thêm searchbox vào select option
            const searchboxInDropdown = () => {
                $('.select2').select2({
                    theme: "classic"
                });
            }
            searchboxInDropdown()
            $('#add').on('click', function(){
                var html = '<div class="form-group row">';//tag mở 1 hàng
                html += '<div class="col-sm-10">\
                            <label class="form-inline label">Sản phẩm</label>\
                            <select class="form-control select2" name="maSP[]">\
                            <option value="" disabled selected hidden>Product</option>\
                                @foreach($listSanPham as $sp)\
                                    <option value="{{ $sp->maSP }}">{{ $sp->tenSP }}</option>\
                                @endforeach\
                            </select>\
                        </div>\
                        <div class="col-sm-2">\
                            <label class="form-inline label">Xoá</label>\
                            <button name="remove" id="remove" class="btn btn-danger" onclick="event.preventDefault()">\
                            Xoá\
                            </button>\
                        </div>\
                    </div>';//tag đóng 1 hàng
                $('#dynamic-div').append(html);
                searchboxInDropdown()
            })
            
            $(document).on('click', '#remove', function(){
                $(this).closest('div').parent().remove();
            })
        });
    </script>
    <script>
        <?php if(session()->has('duplicate')){ ?>
            alert('{{session()->get('duplicate')}}')
        <?php } ?>
    </script>
</body>

</html>
