<html lang="en">
<head>
    @include("Admin.Layout.Common.meta")
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
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
                    <h1 class="h3 mb-2 text-gray-800">Nhập kho</h1>
                    <p class="mb-4">Trang thông tin nhập kho.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách nhập kho</h6>
                            <!-- Filter -->
                            <div style="margin-top: 10px">
                                <table>
                                    <h6>Bộ lọc</h6>
                                    <form method="get">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input class="form-control" type="text" name="searchName" value="{{$searchName}}" placeholder="Nhập tên nhà phân phối">
                                            </div>
                                            <div class="col-sm-2">
                                                <input class="form-control" type="date" name="NBD" value="{{$NBD}}" max="<?php echo date('Y-m-d'); ?>">
                                            </div>
                                            <div class="col-sm-2">
                                                <input class="form-control" type="date" name="NKT" value="{{$NKT}}" max="<?php echo date('Y-m-d'); ?>">
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
                                            <th>Mã</th>
                                            <th>Nhà phân phối</th>
                                            <th>Ngày nhập</th>
                                            <th>Người nhập</th>
                                            <th>Chi tiết</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($nhapKho as $NK)
                                        <tr>
                                            <td>{{$NK->maNK}}</td>
                                            <td>
                                                <?php 
                                                    foreach($nhaPhanPhoi as $NPP){
                                                        if($NPP->maNPP == $NK->maNPP){
                                                            echo $NPP->tenNPP;
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td>{{$NK->ngayNhap}}</td>
                                            <td>
                                                <?php 
                                                    foreach($nhanVien as $NV){
                                                        if($NV->maND == $NK->maNV){
                                                            echo $NV->tenND;
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <form action="{{route('import.show', $NK->maNK)}}" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Chi tiết</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{$nhapKho->links('')}}
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tạo đơn nhập kho</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="{{ route('import.store') }}" method="POST">
                                    @csrf
                                    <div id="dynamic-div">
                                        <div class="form-group row">
                                            {{-- Tên --}}
                                            <div class="col-sm-5 mb-3 mb-sm-0">
                                            <label class="form-inline label">Nhà phân phối</label>
                                                    @error('maNPP')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                <select id="supplier" class="form-control" name="maNPP">
                                                    <option value="" disabled selected hidden>Supplier</option>
                                                    @foreach($nhaPhanPhoi as $NPP)
                                                        <option value="{{ $NPP->maNPP }}">{{ $NPP->tenNPP }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-3 mb-3 mb-sm-0">
                                                <label class="form-inline label">Ngày nhập</label>
                                                @error('ngayNhap')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <input type="date" class="form-control" id="exampleProduct" name="ngayNhap" value="<?php echo date('Y-m-d'); ?>" readonly>
                                            </div>
                                            <div class="col-sm-3 mb-3 mb-sm-0">
                                                <input type="hidden" name="maNV" value="<?php echo(session()->get('admin')) ?>">
                                                <label class="form-inline label">Người nhập</label>
                                                @error('maNV')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <input type="text" class="form-control" id="exampleProduct"
                                                    placeholder="Creator" value="<?php echo(session()->get('tenAdmin')) ?>" readonly>
                                            </div>
                                            <div class="col-sm-1">
                                                <label class="form-inline label">Thêm</label> 
                                                <button name="add" id="add" class="btn btn-success" onclick="event.preventDefault()">
                                                Thêm
                                                </button>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-7">
                                                <label class="form-inline label">Sản phẩm</label>
                                                @error('maSP')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <select class="form-control product-list select2" name="maSP[]">
                                                    <option value="" disabled selected hidden>Product</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-2">
                                                <label class="form-inline label">Số lượng</label>
                                                @error('soLuong')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <input class="form-control" type="number" name="soLuong[]" min="0">
                                            </div>
                                            <div class="col-sm-2">
                                                <label class="form-inline label">Giá nhập</label>
                                                @error('giaNhap')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <input class="form-control" type="number" name="giaNhap[]" min="0">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Nút Thêm --}}
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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            //Chọn nhà phân phối sẽ đưa list sản phẩm tương ứng vào select option
            $('#supplier').on('change', function(e){
                var maNPP = e.target.value;
                $.ajax({
                    url: "{{ url('admin/importProduct') }}/"+maNPP,
                    type: "get",
                    success: function(res){
                        if(res){
                            $('.product-list').empty();
                            $('.product-list').append('<option value="" disabled selected hidden>Product</option>');
                            $.each(res, function(key, val){
                                var options = '';
                                options += '<option value="'+val.maSP+'">'+val.tenSP+'</option>';
                                $('.product-list').append(options);
                            });
                        }
                    }
                })
            })

            //Thêm hàng nhập sản phẩm
            $('#add').on('click', function(){
                var html = '<div class="form-group row">';//tag mở 1 hàng
                html += '<div class="col-sm-7">\
                            <label class="form-inline label">Sản phẩm</label>\
                            <select class="form-control product-list select2" name="maSP[]">\
                                <option value="" disabled selected hidden>Product</option>\
                            </select>\
                        </div>\
                        <div class="col-sm-2">\
                            <label class="form-inline label">Số lượng</label>\
                            <input class="form-control" type="number" name="soLuong[]">\
                        </div>\
                        <div class="col-sm-2">\
                            <label class="form-inline label">Giá nhập</label>\
                            <input class="form-control" type="number" name="giaNhap[]">\
                        </div>\
                        <div class="col-sm-1">\
                            <label class="form-inline label">Xoá</label>\
                            <button name="remove" id="remove" class="btn btn-danger" onclick="event.preventDefault()">\
                            Xoá\
                            </button>\
                        </div>\
                    </div>';//tag đóng 1 hàng
                $('#dynamic-div').append(html);

                //Thêm searchbox vào hàng mới được thêm
                searchboxInDropdown();

                //Đưa list sản phẩm tương ứng vào select option mới được thêm
                var maNPP = $('#supplier').val();
                $.ajax({
                    url: "{{ url('admin/importProduct') }}/"+maNPP,
                    type: "get",
                    success: function(res){
                        if(res){
                            $('.product-list').empty();
                            $('.product-list').append('<option value="" disabled selected hidden>Product</option>');
                            $.each(res, function(key, val){
                                var options = '';
                                options += '<option value="'+val.maSP+'">'+val.tenSP+'</option>';
                                $('.product-list').append(options);
                            });
                        }
                    }
                })
            })

            //Xoá hàng nhập sản phẩm
            $(document).on('click', '#remove', function(){
                $(this).closest('div').parent().remove();
            })

            //Hàm thêm searchbox vào select option
            const searchboxInDropdown = () => {
                $('.select2').select2({
                    theme: "classic"
                });
            }
            searchboxInDropdown();

        });
    </script>
    <script>
        <?php if(session()->has('delete')){ ?>
            alert('{{session()->get('delete')}}')
        <?php } ?>
    </script>
</body>
</html>
