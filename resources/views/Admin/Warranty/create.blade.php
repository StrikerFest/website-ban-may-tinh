<html lang="en">

<head>
    @include('Admin.Layout.Common.meta')
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
                <h1 class="h3 mb-2 text-gray-800">Bảo hành</h1>
                <p class="mb-4">Trang thông tin bảo hành.</p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Nhập thông tin bảo hành</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form class="user" action="{{ route('warrantyInfo.store') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label class="form-inline label">Tên sản phẩm</label>
                                        @error('tenSP')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control " id="exampleFirstName"
                                            placeholder="Product" name="tenSP" value="{{ $tenSP }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label class="form-inline label">Mã serial</label>
                                        @error('maSerial')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <select class="form-control" name="maSerial">
                                            <option value="" disabled selected hidden>Serial</option>
                                            @foreach($Serial as $serial)
                                                <option value="{{ $serial->maSerial }}">{{ $serial->serial }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label class="form-inline label">Tên khách hàng</label>
                                        @error('tenNBH')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control " id="exampleFirstName"
                                            placeholder="Warranty period" name="tenNBH" value="{{ $tenND }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label class="form-inline label">SĐT khách hàng</label>
                                        @error('soDienThoaiNBH')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control " id="exampleFirstName"
                                            placeholder="Warranty period" name="soDienThoaiNBH" value="{{ $soDienThoai }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label class="form-inline label">Nội dung bảo hành</label>
                                        @error('noiDung')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <textarea class="form-control" name="noiDung" rows="3"></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Thêm thông tin bảo hành
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
        <?php if(session()->has('delete')){ ?>
            alert('{{session()->get('delete')}}')
        <?php } ?>
    </script>
</body>

</html>
