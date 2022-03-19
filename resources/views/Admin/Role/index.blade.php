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
                <h1 class="h3 mb-2 text-gray-800">Chức vụ</h1>
                <p class="mb-4">Trang thông tin chức vụ.</p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Bảng chức vụ hiện tại</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Tên</th>
                                    </tr>
                                </thead>
                                <tfoot>

                                </tfoot>
                                <tbody>
                                    @foreach ($chucVu as $CV)
                                        <tr>
                                            <td>{{ $CV->maCV }}</td>
                                            <td>{{ $CV->tenCV }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                {{-- Form thêm nhân viên --}}
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Thêm chức vụ mới</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form class="user" action="{{ route('role.store') }}" method="POST">
                                @csrf
                                {{-- Dòng 1 --}}
                                <div class="form-group row">
                                    {{-- Tên --}}
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label class="form-inline label">Chức vụ</label>
                                        @error('ten')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control " id="exampleFirstName"
                                            placeholder="Nhập tên" name="ten">
                                    </div>
                                </div>
                                {{-- Dòng 2 --}}<label class="form-inline label">Quyền hạn</label>
                                <div class="form-group row">
                                    {{-- Email --}}
                                    @foreach ($quyenHan as $QH)
                                        <div class="col-sm-4">
                                            <input type="checkbox" id="exampleInputEmail" name="maQH[]"
                                                value="{{ $QH->maQH }}"> {{ $QH->tenQH }}
                                        </div>
                                    @endforeach

                                </div>
                                {{-- Nút Thêm --}}
                                <button class="btn btn-primary btn-user btn-block">
                                    Thêm chức vụ
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
