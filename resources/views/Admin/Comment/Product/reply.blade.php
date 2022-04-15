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
                    <h1 class="h3 mb-2 text-gray-800">Phản hồi sản phẩm</h1>
                    <p class="mb-4">Trang thông tin phản hồi.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách phản hồi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Người dùng: {{ $ND->tenND }}</th>
                                            <th colspan="1">Bình luận: {{ $binhLuanSanPham->noiDung }}</th>
                                            <th colspan="2" rowspan="2" width="10%" style="text-align: center; vertical-align: middle">Thao tác</th>
                                        </tr>
                                        <tr>
                                            <th>Người dùng</th>
                                            <th>Thời gian</th>
                                            <th>Nội dung</th>
                                        </tr>
                                    </thead>
                                    <tfoot>

                                    </tfoot>
                                    <tbody>
                                    @foreach ($phanHoiSanPham as $PHSP)
                                        <tr>
                                            <td>
                                                <?php
                                                    foreach($nguoiDung as $ND){
                                                        if(($ND->maND)==($PHSP->maND)){
                                                            echo $ND->tenND;
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td>{{$PHSP->ngayTao}}</td>
                                            <td>{{$PHSP->noiDung}}</td>
                                            <td>
                                                <form action="{{route('blogComment.destroy', $PHSP->maBLSP)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button 
                                                        onclick="return confirm('Xác nhận xóa bình luận?')"
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
                                <button class="btn btn-primary" onclick="window.location='{{ route("productComment.index") }}'">
                                    Quay lại
                                </button>
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
