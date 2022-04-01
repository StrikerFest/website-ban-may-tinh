<html lang="en">

<head>
    @include('Customer.Layout.Common.meta')
</head>
@include('Customer.Layout.Common.headerError')

<body>
    <!-- Wrapper - Cả trang -->
    <div id="wrapper">


        <!-- Wrapper - Chỉ riêng phần nội dung - Không bao gồm navbar -->
        <div id="content-wrapper" class="d-flex flex-row">
            {{-- @include('Customer.Layout.Common.side_nav_menu') --}}

            <!-- Content của trang -->
            <div class="container-fluid" {{-- style="position:relative;top: 70px" --}} style="padding-top: 70px">
                <h1>Thưa quý khách hàng, người có thể thấy ở đây không có 1 cái gì hết, mời người </h1>
                <h2>Tốc biến</h2>
                <h3 class="text-danger">Không tìm thấy trang khách hàng yêu cầu - Lỗi 404</h3>
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
