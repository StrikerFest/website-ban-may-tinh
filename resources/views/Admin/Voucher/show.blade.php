<html lang="en">

<head>
    @include("Admin.Layout.Common.meta")
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                <h1 class="h3 mb-2 text-gray-800">Voucher</h1>
                <p class="mb-4">Trang thông tin voucher.</p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Bảng sản phẩm thuộc voucher</h6>
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
                            <div style="font-size: 20px; margin: 5px 0; font-weight: bold;">
                                Tổng số bản ghi: {{$SPV->total()}}
                            </div>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tr>
                                    <th>Voucher</th>
                                    <th>Thể loại</th>
                                    <th>Giá trị</th>
                                    <th colspan="2" width="20%">Thao tác</th>
                                </tr>
                                <tr>
                                    <td>
                                        {{$V->tenVoucher}}
                                    </td>
                                    <td>
                                        {{$V->tenTLV}}
                                    </td>
                                    <td>
                                        {{$giaTriVoucher}}
                                    </td>
                                    <td>
                                        <form action="{{route('productVoucher.updateAll', $V->maVoucher)}}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="kichHoat" value="1">
                                            <button class="btn btn-success btn-user btn-block">Kích hoạt</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('productVoucher.updateAll', $V->maVoucher)}}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="kichHoat" value="0">
                                            <button class="btn btn-danger btn-user btn-block">Tắt</button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Tên</th>
                                        <th width="30%">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($SPV as $spv)
                                    <tr>
                                        <td>{{$spv->tenSP}}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <form action="{{route('productVoucher.update', $spv->maSPV)}}" method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <?php if($spv->kichHoat == 0){ ?>
                                                            <input type="hidden" name="kichHoat" value="1">
                                                            <button class="btn btn-danger btn-user btn-block">Kích hoạt</button>
                                                        <?php }else{ ?>
                                                            <input type="hidden" name="kichHoat" value="0">
                                                            <button class="btn btn-success btn-user btn-block">Kích hoạt</button>
                                                        <?php } ?>
                                                    </form>
                                                </div>
                                                <div class="col-sm-3">
                                                    <form action="{{route('admin.product.index')}}" method="get">
                                                        @csrf
                                                        <input type="hidden" name="searchName" value="{{$spv->tenSP}}">
                                                        <button class="btn btn-primary btn-user btn-block">Xem</button>
                                                    </form>
                                                </div>
                                                <div class="col-sm-3">
                                                    <form action="{{route('productVoucher.destroy', $spv->maSPV)}}" method="post">
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
                {{$SPV->links()}}
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Gắn voucher vào sản phẩm</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form class="user" action="{{ route('productVoucher.store') }}" method="POST">
                                @csrf
                                <div id="dynamic-div">
                                    <div class="form-group row">
                                        <div class="col-sm-11">
                                            <label class="form-inline label">Sản phẩm</label>
                                            <input type="hidden" name="maVoucher" value="{{$V->maVoucher}}">
                                            @error('maSP')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            @error('maSP.*')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <select class="form-control product-list select2" name="maSP[]">
                                                <option value="" disabled selected hidden>Product</option>
                                                @foreach($SanPham as $SP)
                                                    <option value="{{ $SP->maSP }}">
                                                        {{ $SP->tenSP }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-1">
                                            <label class="form-inline label">Thêm</label> 
                                            <button name="add" id="add" class="btn btn-success" onclick="event.preventDefault()">
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
    @include("Admin.Layout.Common.bottom_script")
    <script>
        <?php if(session()->has('delete')){ ?>
            alert('{{session()->get('delete')}}')
        <?php } ?>
    </script>
    <script>
        $(document).ready(function(){
            //Hàm thêm searchbox vào select option
            const searchboxInDropdown = () => {
                $('.select2').select2({
                    theme: "classic"
                });
            }
            searchboxInDropdown();

            //Thêm hàng nhập sản phẩm
            $('#add').on('click', function(){
                var html = '<div class="form-group row">';
                html += '<div class="col-sm-11">\
                            <label class="form-inline label">Sản phẩm</label>\
                            <input type="hidden" name="maVoucher" value="{{$V->maVoucher}}">\
                            <select class="form-control product-list select2" name="maSP[]">\
                                <option value="" disabled selected hidden>Product</option>\
                                @foreach($SanPham as $SP)\
                                    <option value="{{ $SP->maSP }}">\
                                        {{ $SP->tenSP }}\
                                    </option>\
                                @endforeach\
                            </select>\
                        </div>\
                        <div class="col-sm-1">\
                            <label class="form-inline label">Xoá</label>\
                            <button name="remove" id="remove" class="btn btn-danger" onclick="event.preventDefault()">\
                            Xoá\
                            </button>\
                        </div>\
                    </div>'
                $('#dynamic-div').append(html);

                //Thêm searchbox vào hàng mới được thêm
                searchboxInDropdown();
            })

            //Xoá hàng nhập sản phẩm
            $(document).on('click', '#remove', function(){
                $(this).closest('div').parent().remove();
            })
        });
    </script>
</body>

</html>