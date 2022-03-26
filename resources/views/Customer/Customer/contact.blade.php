<html lang="en">

<head>
    @include('Customer.Layout.Common.meta')
</head>
@include('Customer.Layout.Common.header')

<body>
    <!-- Wrapper - Cả trang -->
    <div id="wrapper">


        <!-- Wrapper - Chỉ riêng phần nội dung - Không bao gồm navbar -->
        <div id="content-wrapper" class="d-flex flex-row">
            @include('Customer.Layout.Common.side_nav_menu')

            <!-- Content của trang -->
            <div class="container-fluid" {{-- style="position:relative;top: 70px" --}} style="padding-top: 60px">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="col-md-12">
                            <h3 class="text-danger">
                                Thông tin liên hệ với BKCOM
                            </h3>
                        </div>
                        <div class="col-md-12">
                            <p class="text-dark">Quý khách có yêu cầu liên hệ với đơn vị chăm sóc khách hàng của
                                BKCOM vui lòng liên hệ
                                đến</p>
                            <h4 class="text-danger">Đường dây HOTLINE 24/7: </h4>
                            <p class="text-dark">1900 2828</p>
                            <h4 class="text-danger">Địa chỉ email: </h4>
                            <p class="text-dark">Bachkhoacomputer@mail.com</p>
                            <h4 class="text-danger">Hỗ trợ chăm sóc khách hàng nhiệt tình, chu đáo</h4>
                            <p class="text-dark">Bộ phận đơn vị chăm sóc khách hàng của chúng tôi luôn sẵn sàng đón
                                nhận yêu cầu và khiếu nại của quý khách hàng</p>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="card shadow ">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold text-danger">Liên hệ với chúng tôi ngay</h6>
                            </div>
                            <div class="card-body ">
                                <div class="table-responsive " style="overflow: hidden">
                                    <form class="user ">
                                        <div class="form-group row ">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control form-control-user"
                                                    id="exampleLastName" placeholder="Họ tên">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" placeholder="Địa chỉ email">
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-12 mb-sm-0">
                                                <input type="text" class="form-control form-control-user"
                                                    id="exampleInputPassword" placeholder="Số điện thoại">
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-12 mb-sm-0">
                                                <textarea type="text" class="form-control " id="exampleInputPassword" placeholder="Nội dung liên hệ"></textarea>
                                            </div>

                                        </div>
                                        <a href="login.html" class="btn btn-danger   btn-user btn-block">
                                            Gửi ngay
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>

    </div>
    <!-- End of Page Wrapper -->
    @include('Customer.Layout.Common.bottom_script')
    <script>
    </script>
</body>

</html>
