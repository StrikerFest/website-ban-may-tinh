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
                    <h1 class="h3 mb-2 text-gray-800">Bình luận sản phẩm</h1>
                    <p class="mb-4">Trang thông tin bình luận.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách bình luận</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Người dùng</th>
                                            <th>Nội dung</th>
                                            <th>Thời gian</th>
                                            <th colspan="3" width="25%">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tfoot>

                                    </tfoot>
                                    <tbody>
                                    @foreach ($binhLuanSanPham as $BLSP)
                                        <tr>
                                            <td>
                                                <?php
                                                    foreach($nguoiDung as $ND){
                                                        if(($ND->maND)==($BLSP->maND)){
                                                            echo $ND->tenND;
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td>{{$BLSP->noiDung}}</td>
                                            <td>{{$BLSP->ngayTao}}</td>
                                            <td>
                                                <form action="{{route('product.show', $BLSP->maSP)}}">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Trả lời</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('productComment.show', $BLSP->maBLSP)}}" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Phản hồi</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('productComment.destroy', $BLSP->maBLSP)}}" method="post">
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
