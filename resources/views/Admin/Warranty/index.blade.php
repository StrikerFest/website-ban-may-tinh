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
                        <h6 class="m-0 font-weight-bold text-primary">Bảng thời hạn bảo hành hiện tại</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Thời hạn</th>
                                        <th>Giá trị</th>
                                        <th colspan="2" width="10%">Thao tác</th>
                                    </tr>
                                </thead>
                                <tfoot>

                                </tfoot>
                                <tbody>
                                    @foreach ($baoHanh as $BH)
                                        <tr>
                                            <td>{{ $BH->maBH }}</td>
                                            <td>{{ $BH->tenBH }}</td>
                                            <td>{{ $BH->giaTri }}</td>
                                            <td>
                                                <form action="{{route('warranty.edit', $BH->maBH)}}" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Sửa</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('warranty.destroy', $BH->maBH)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button 
                                                        onclick="return prompt('Xác nhận xóa bảo hành?')"
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
                        <h6 class="m-0 font-weight-bold text-primary">Thêm thời hạn bảo hành mới</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form class="user" action="{{ route('warranty.store') }}" method="POST">
                                @csrf
                                {{-- Dòng 1 --}}
                                <div class="form-group row">
                                    {{-- Tên --}}
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label class="form-inline label">Thời hạn bảo hành (Chữ)</label>
                                        @error('tenBH')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control " id="exampleFirstName"
                                            placeholder="Warranty period" name="tenBH">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label class="form-inline label">Thời hạn bảo hành (Số (tháng))</label>
                                        @error('giaTri')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="number" class="form-control " id="exampleFirstName"
                                            placeholder="Warranty period" name="giaTri">
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Thêm bảo hành
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
