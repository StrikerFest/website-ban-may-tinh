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
                <h1 class="h3 mb-2 text-gray-800">Nhân viên</h1>
                <p class="mb-4">Trang thông tin nhân viên.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bảng nhân viên hiện tại</h6>
                            <!-- Filter -->
                            <div style="margin-top: 10px">
                                <table>
                                    <h6>Bộ lọc</h6>
                                    <form method="get">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input class="form-control" type="text" name="searchName" value="{{$searchName}}" placeholder="Nhập tên nhân viên">
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
                                            <th>Email</th>
                                            <th>Chức vụ</th>
                                            <th colspan="2" width="10%">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tfoot>

                                </tfoot>
                                <tbody>
                                    @foreach ($employee as $E)
                                        <tr>
                                            <td>{{ $E->tenND }}</td>
                                            <td>{{ $E->emailND }}</td>
                                            <td>{{ $E->tenCV }}</td>
                                            <td>
                                                <form action="{{route('employee.edit', $E->maND)}}" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Sửa</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('employee.destroy', $E->maND)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button 
                                                        onclick="return confirm('Xác nhận xóa nhân viên?')"
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
                    {{$employee->links('')}}
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Thêm nhân viên mới</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="{{ route('employee.store') }}" method="POST">
                                    @csrf
                                <div class="form-group row">
                                    {{-- Tên --}}
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="form-inline label">Tên</label>
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control " id="exampleFirstName"
                                            placeholder="Name" name="name" required>
                                    </div>
                                    {{-- Chức vụ --}}
                                    <div class="col-sm-6">
                                        <label class="form-inline label">Chức vụ</label>
                                        @error('maCV')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <select name="maCV" class="form-control r"><br>
                                            @foreach ($chucVu as $CV)
                                                <option value="{{ $CV->maCV }}">{{ $CV->tenCV }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-inline label">Email</label>
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address" name="email" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="form-inline label">Mật khẩu</label>
                                        @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-inline label">Nhập lại mật khẩu</label>
                                        @php
                                            $pwError = Session::get('matKhau');
                                        @endphp
                                        @isset( $pwError )
                                            <div class="alert alert-danger">
                                                {{ $pwError }}
                                            </div>
                                        @endisset
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" name="password2" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label>Địa chỉ</label>
                                        @error('address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control form-control-user" placeholder="Address"
                                            name="address" required>
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

            </div>
            <!-- /.container-fluid -->
        </div>

    </div>
    <!-- End of Page Wrapper -->
    @include('Admin.Layout.Common.bottom_script')

</body>

</html>
