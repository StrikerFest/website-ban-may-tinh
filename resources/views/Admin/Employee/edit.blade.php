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
                    <h1 class="h3 mb-2 text-gray-800">Nhân viên</h1>
                    <p class="mb-4">Trang thông tin nhân viên.</p>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Sửa thông tin nhân viên</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="{{route('employee.update', $nhanVien->maND)}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                <div class="form-group row">
                                    {{-- Tên --}}
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="form-inline label">Tên</label>
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control " id="exampleFirstName"
                                            placeholder="Name" name="name" required value=" {{$nhanVien->tenND}} ">
                                    </div>
                                    {{-- Chức vụ --}}
                                    <div class="col-sm-6">
                                        <label class="form-inline label">Chức vụ</label>
                                        @error('maCV')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <select name="maCV" class="form-control r"><br>
                                            @foreach ($chucVu as $CV)
                                                <option value="{{ $CV->maCV }}" <?php echo($nhanVien->maCV == $CV->maCV? "selected": "") ?>>
                                                    {{ $CV->tenCV }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="form-inline label">Email</label>
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                            placeholder="Email" name="email" required value="{{$nhanVien->emailND}}">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="form-inline label">Số điện thoại</label>
                                        @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                            placeholder="phone" name="phone" required value="{{$nhanVien->soDienThoai}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="form-inline label">Mật khẩu</label>
                                        @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password" required value="{{$nhanVien->matKhauND}}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-inline label">Nhập lại mật khẩu</label>
                                        @php
                                            $pwError = Session::get('matKhau');
                                        @endphp
                                        @isset( $pwError )
                                            <div class="col-sm-12 mb-3 mb-sm-0 alert alert-danger">
                                                {{ $pwError }}
                                            </div>
                                        @endisset
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" name="password2" required value="{{$nhanVien->matKhauND}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label class="form-inline label">Địa chỉ</label>
                                        @error('address')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control form-control-user" id="exampleAddress"
                                            placeholder="Address" name="address" required value="{{$nhanVien->diaChiND}}">
                                    </div>
                                </div>
                                
                                {{-- Nút Thêm --}}
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

</body>
</html>
