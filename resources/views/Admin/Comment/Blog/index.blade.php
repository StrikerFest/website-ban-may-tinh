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
                    <h1 class="h3 mb-2 text-gray-800">Bình luận bài viết</h1>
                    <p class="mb-4">Trang thông tin bình luận.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách bình luận</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div style="font-size: 20px; margin: 5px 0; font-weight: bold;">
                                    Tổng số bản ghi: {{$binhLuanBaiViet->total()}}
                                </div>
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
                                    @foreach ($binhLuanBaiViet as $BLBV)
                                        <tr>
                                            <td>
                                                <?php
                                                    foreach($nguoiDung as $ND){
                                                        if(($ND->maND)==($BLBV->maND)){
                                                            echo $ND->tenND;
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td>{{$BLBV->noiDung}}</td>
                                            <td>{{$BLBV->ngayTao}}</td>
                                            <td>
                                                <form action="{{route('blogCustomer.show', $BLBV->maBV)}}">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Trả lời</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('blogComment.show', $BLBV->maBLBV)}}" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Phản hồi</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('blogComment.destroy', $BLBV->maBLBV)}}" method="post">
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
                    {{$binhLuanBaiViet->links()}}
                </div>
                <!-- /.container-fluid -->
        </div>

    </div>
    <!-- End of Page Wrapper -->
    @include("Admin.Layout.Common.bottom_script")

</body>
</html>
