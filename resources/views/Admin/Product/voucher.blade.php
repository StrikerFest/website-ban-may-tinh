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
                        <h6 class="m-0 font-weight-bold text-primary">Bảng voucher thuộc sản phẩm</h6>
                        <!-- Filter -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tr>
                                    <th>Sản phẩm</th>
                                </tr>
                                <tr>
                                    <td>
                                        {{$SanPham->tenSP}}
                                    </td>
                                </tr>
                            </table>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Tên</th>
                                        <th width="22%">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($SPV as $spv)
                                    <tr>
                                        <td>{{$spv->tenVoucher}}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <form action="{{route('voucher.index')}}" method="get">
                                                        @csrf
                                                        <input type="hidden" name="searchName" value="{{$spv->tenVoucher}}">
                                                        <button class="btn btn-primary btn-user btn-block">Xem</button>
                                                    </form>
                                                </div>
                                                <div class="col-sm-6">
                                                    <form action="{{route('productVoucher.destroy', $spv->maSPV)}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <input type="hidden" name="redirect" value="toProduct">
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

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Gắn voucher vào sản phẩm</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form class="user" action="{{route('admin.product.storeVoucher')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="hidden" name="maSP" value="{{ $SanPham->maSP }}"/>
                                        <label class="form-inline label">Tên voucher</label>
                                        @error('maVoucher')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <select class="form-control select2" name="maVoucher">
                                            <option value="" disabled selected hidden>Voucher</option>
                                            @foreach($Voucher as $V)
                                                <option value="{{ $V->maVoucher }}">{{ $V->tenVoucher }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Add data
                                </button>
                            </form>
                        </div>
                            <button style="margin-top: 20px;" class="btn btn-primary" onclick="window.location='{{ route("admin.product.index") }}'">
                                Quay lại
                            </button>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>

    </div>
    <!-- End of Page Wrapper -->
    @include("Admin.Layout.Common.bottom_script")
    <script>
        $(document).ready(function() {
            //Hàm thêm searchbox vào select option
            const searchboxInDropdown = () => {
                $('.select2').select2({
                    theme: "classic"
                });
            }
            searchboxInDropdown();
        });
    </script>
</body>

</html>