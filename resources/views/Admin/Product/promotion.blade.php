<html lang="en">
<head>
    @include("Admin.Layout.Common.meta")
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
                    <h1 class="h3 mb-2 text-gray-800">Khuyến mãi</h1>
                    <p class="mb-4">Trang thông tin khuyến mãi.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bảng khuyến mãi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm: {{ $sanPham->tenSP }}</th>
                                            <th colspan="2" width="10%">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tfoot>

                                    </tfoot>
                                    <tbody>
                                    @foreach ($khuyenMai as $KM)
                                        <tr>
                                            <td>
                                                {{$KM->khuyenMai}}
                                            </td>
                                            <td>
                                                <form action="{{route('promotion.edit', $KM->maKM)}}" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Sửa</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('promotion.destroy', $KM->maKM)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button 
                                                        onclick="return confirm('Xác nhận xóa khuyến mãi?')"
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
                            <h6 class="m-0 font-weight-bold text-primary">Thêm khuyến mãi cho sản phẩm</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="{{ route('promotion.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div id="dynamic-div">
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <input type="hidden" name="maSP" value="{{ $sanPham->maSP }}">
                                            <label class="form-inline label">Khuyến mãi</label>
                                            @error('khuyenMai')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <input type="text" class="form-control" name="khuyenMai[]" placeholder="Promotion">
                                        </div>
                                        <div class="col-sm-2">
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
        $(document).ready(function() {
            $('#add').on('click', function(){
                var html = '<div class="form-group row">';//tag mở 1 hàng
                html += '<div class="col-sm-10">\
                            <label class="form-inline label">Khuyến mãi</label>\
                            <input class="form-control" type="text" name="khuyenMai[]" placeholder="Promotion">\
                        </div>\
                        <div class="col-sm-2">\
                            <label class="form-inline label">Xoá</label>\
                            <button name="remove" id="remove" class="btn btn-danger" onclick="event.preventDefault()">\
                            Xoá\
                            </button>\
                        </div>\
                    </div>';//tag đóng 1 hàng
                $('#dynamic-div').append(html);
            })
            
            $(document).on('click', '#remove', function(){
                $(this).closest('div').parent().remove();
            })
        });
    </script>
</body>
</html>
