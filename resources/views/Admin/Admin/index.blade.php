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
                <h1 class="h3 mb-2 text-gray-800">Administrator</h1>
                <p class="mb-4">Trang thông tin Admin.</p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Bảng Admin hiện tại</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Tên</th>
                                        <th>Email</th>
                                        <th>Mật khẩu</th>
                                    </tr>
                                </thead>
                                <tfoot>

                                </tfoot>
                                <tbody>
                                    @foreach ($admin as $A)
                                        <tr>
                                            <td>{{ $A->tenND }}</td>
                                            <td>{{ $A->emailND }}</td>
                                            <td>{{ $A->matKhauND }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Thêm Admin mới</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form class="user" action="{{ route('admin.store') }}" method="POST">
                                @csrf
                                {{-- Dòng 1 --}}
                                <div class="form-group row">
                                    {{-- Tên --}}
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control " id="exampleFirstName"
                                            placeholder="Nhập tên" name="ten">
                                    </div>
                                    {{-- Chức vụ --}}
                                    <div class="col-sm-6">
                                        <select name="maCV" class="form-control r"><br>
                                            @foreach ($chucVu as $CV)
                                                <option value="{{ $CV->maCV }}">{{ $CV->tenCV }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{-- Dòng 2 --}}
                                <div class="form-group">
                                    {{-- Email --}}
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address" name="email">
                                </div>
                                {{-- Dòng 3 --}}
                                <div class="form-group row">
                                    {{-- Mật khẩu --}}
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password">
                                    </div>
                                    {{-- Nhập lại mật khẩu --}}
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" name="password2">
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
    @include('Admin.Layout.Common.bottom_script')

</body>

</html>
