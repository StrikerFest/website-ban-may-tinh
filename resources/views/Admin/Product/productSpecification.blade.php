<html lang="en">
<head>
    @include("Admin.Layout.Common.meta")
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                    <h1 class="h3 mb-2 text-gray-800">Thông số theo sản phẩm</h1>
                    <p class="mb-4">Trang thông tin thông số theo sản phẩm.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bảng thông số hiện tại</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Sản phẩm: {{ $sanPham->tenSP }}</th>
                                            <th colspan="2" rowspan="2" width="10%" style="text-align: center; vertical-align: middle">Thao tác</th>
                                        </tr>
                                        <tr>
                                            <th>Thông số</th>
                                            <th>Giá trị</th>
                                        </tr>
                                    </thead>
                                    <tfoot>

                                    </tfoot>
                                    <tbody>
                                    <tr>
                                    @foreach ($sanPhamThongSo as $SPTS)
                                        <tr>
                                            <td>{{$SPTS->tenTS}}</td>
                                            <td>{{$SPTS->giaTri}}</td>
                                            <td>
                                                <form action="{{route('productSpecification.edit', $SPTS->maSPTS)}}" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Sửa</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('productSpecification.destroy', $SPTS->maSPTS)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button 
                                                        onclick="return confirm('Xác nhận xóa thông số?')"
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
                            <h6 class="m-0 font-weight-bold text-primary">Thêm thông số cho sản phẩm</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form id="dynamic-form" class="user" action="{{ route('productSpecification.store') }}" method="POST">
                                    @csrf
                                <div id="dynamic-div">
                                    <div class="form-group row">
                                        <input type="hidden" name="maSP" value="{{ $sanPham->maSP }}">  
                                        <div class="col-sm-5">
                                            <label class="form-inline label">Thông số</label>
                                            <select class="form-control" name="maTS[]">
                                                @foreach($thongSo as $TS)
                                                    <option value="{{ $TS->maTS }}">{{ $TS->tenTS }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <label class="form-inline label">Giá trị</label>
                                            <input class="form-control" type="text" name="giaTri[]" placeholder="Value" required>
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
                html += '<div class="col-sm-5">\
                            <label class="form-inline label">Thông số</label>\
                            <select class="form-control" name="maTS[]">\
                                @foreach($thongSo as $TS)\
                                    <option value="{{ $TS->maTS }}">{{ $TS->tenTS }}</option>\
                                @endforeach\
                            </select>\
                        </div>\
                        <div class="col-sm-5">\
                            <label class="form-inline label">Giá trị</label>\
                            <input class="form-control" type="text" name="giaTri[]">\
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
