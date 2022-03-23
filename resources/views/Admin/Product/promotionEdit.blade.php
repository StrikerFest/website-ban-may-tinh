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
                
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Sửa khuyến mãi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="{{ route('promotion.update', $khuyenMai->maKM) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="hidden" name="maSP" value="{{ $khuyenMai->maSP }}">
                                        @error('maSP')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        @error('khuyenMai')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <textarea class="form-control" cols="15" rows="5" name="khuyenMai">
                                            {{$khuyenMai->khuyenMai}}
                                        </textarea>
                                    </div>
                                </div>
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
