<html lang="en">
<head>
    @include("Admin.Layout.Common.meta")
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>
    <!-- Page Wrapper -->
    <div id="wrapper">

        @include("Admin.Layout.Common.side_nav_menu")

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
        @include("Admin.Layout.Common.header")

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Doanh Thu Tháng
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{number_format($doanhThuThang)}} VND</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Doanh Thu Năm
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{number_format($doanhThuNam)}} VND</div>
                                                </div>
                                                <!-- <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Số sản phẩm bán trong tháng
                                            </div>
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$tongSanPhamThang}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-boxes fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Số sản phẩm bán trong năm
                                            </div>
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$tongSanPhamNam}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-boxes fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Tiền nhập hàng trong tháng
                                            </div>
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{number_format($tongTienNhapThang)}} VND</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Tiền nhập hàng trong năm
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{number_format($tongTienNhapNam)}} VND</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Số sản phẩm nhập trong tháng
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$tongSanPhamNhapThang}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-boxes fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Số sản phẩm nhập trong năm
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$tongSanPhamNhapNam}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-boxes fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Lợi nhuận tháng
                                            </div>
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{number_format($doanhThuThang - $tongTienNhapThang)}} VND</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Lợi nhuận năm
                                            </div>
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{number_format($doanhThuNam - $tongTienNhapNam)}} VND</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <a href="{{route('receipt.index', ['NBD' => date('Y-m-01'), 'NKT' => date('Y-m-d')])}}">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Số đơn hàng trong tháng
                                                </div>
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$tongHoaDonThang}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <a href="{{route('receipt.index', ['searchStatus' => 'Đã nhận hàng'])}}">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    Số đơn hàng đã giao
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$hoaDonDaGiao}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <a href="{{route('receipt.index', ['searchStatus' => 'Chưa duyệt'])}}">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Số Đơn Hàng Đang Chờ Duyệt
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$hoaDonChuaDuyet}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <a href="{{route('receipt.index', ['searchStatus' => 'Đang lấy hàng'])}}">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                    Số Đơn Hàng Đang Lấy Hàng
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$hoaDonChoLayHang}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <a href="{{route('receipt.index', ['searchStatus' => 'Đang giao hàng'])}}">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Số Đơn Hàng Đang Giao
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$hoaDonDangGiao}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <a href="{{route('receipt.index', ['searchStatus' => 'Đã huỷ'])}}">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    Số Đơn Hàng Đã Huỷ
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$tongHoaDonHuy}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-ban fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Số lượng voucher đã áp dụng
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$soLuongVoucherApDung}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-ticket-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Số tiền giảm giá từ voucher
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{number_format($soTienGiamVoucher) .' VND'}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-ticket-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Số sản phẩm đã tặng qua voucher
                                            </div>
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$soLuongTangPham}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-ticket-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Tổng giá trị sản phẩm đã tặng
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{number_format($giaTriTangPham) .' VND'}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-ticket-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Doanh thu năm 
                                            <select id="revenueYear" name="nam">
                                                <option value="" disabled selected hidden>Chọn năm</option>
                                                @foreach($listNamTheoHoaDon as $nam)
                                                    <option value="{{$nam->nam}}">
                                                        {{$nam->nam}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </h6>
                                    </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div id="container">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Sản phẩm bán chạy theo danh mục
                                            <select id="subCategory">
                                                <option value="" disabled selected hidden>Chọn danh mục</option>
                                                @foreach($listDanhMucCon as $DMC)
                                                    <option value="{{$DMC->maTLC}}">
                                                        {{$DMC->tenTLC}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </h6>
                                    </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div id="container2">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Danh mục sản phẩm</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div id="container3">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                <div>
                    @include("Admin.Layout.Common.footer")
                </div>
            </div>
            <!-- End of Main Content -->



        </div>

    </div>
    <!-- End of Page Wrapper -->
    @include("Admin.Layout.Common.bottom_script")
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        //Biểu đồ AJAX
        $(document).ready(function(){
            //Biểu đồ doanh thu 12 tháng
            $('#revenueYear').on('change', function(e){
                var namDuocChon = e.target.value;
                $.ajax({
                    url: "{{ url('dashboard/doanhThu12Thang') }}/"+namDuocChon,
                    type: "get",
                    success: function(res){
                        console.log(res);
                        if(res){
                            Highcharts.chart('container', {
                                chart: {
                                    type: 'column'
                                },
                                title: {
                                    text: 'Biểu đồ doanh thu năm '+$('#revenueYear').children(':selected').text()
                                },
                                xAxis: {
                                    categories: [
                                        'Jan',
                                        'Feb',
                                        'Mar',
                                        'Apr',
                                        'May',
                                        'Jun',
                                        'Jul',
                                        'Aug',
                                        'Sep',
                                        'Oct',
                                        'Nov',
                                        'Dec'
                                    ],
                                    crosshair: true
                                },
                                yAxis: {
                                    min: 0,
                                    title: {
                                        text: 'Việt Nam Đồng (VND)'
                                    }
                                },
                                tooltip: {
                                    headerFormat: '<span style="font-size:10px">{point.key}</span><table width="400px">',
                                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                        '<td style="padding:0"><b>{point.y:,.0f} VND</b></td></tr>',
                                    footerFormat: '</table>',
                                    shared: true,
                                    useHTML: true
                                },
                                plotOptions: {
                                    column: {
                                        pointPadding: 0.1,
                                        borderWidth: 0
                                    }
                                },
                                series: [
                                    {name: 'Chỉ đơn đã hoàn thành', data: res.doanhThu12Thang}, 
                                    {name: 'Gồm cả đơn chưa hoàn thành', data: res.doanhThuDuKien12Thang}
                                ]
                            });
                        }
                    }
                })
            })

            //Biểu đồ top 5 sản phẩm bán chạy theo danh mục
            $('#subCategory').on('change', function(e){
                var maTLC = e.target.value;
                $.ajax({
                    url: "{{ url('dashboard/danhMucCon') }}/"+maTLC,
                    type: "get",
                    success: function(res){
                        if(res){
                            Highcharts.chart('container2', {
                                chart: {
                                    type: 'column'
                                },
                                title: {
                                    text: 'Top 5 sản phẩm bán chạy của danh mục '+ $('#subCategory').children(':selected').text()
                                },
                                xAxis: {
                                    categories: res.ten5SP,
                                    crosshair: true
                                },
                                yAxis: {
                                    min: 0,
                                    title: {
                                        text: 'Chiếc'
                                    }
                                },
                                tooltip: {
                                    headerFormat: '<span style="font-size:10px">{point.key}</span><table width="400px">',
                                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                        '<td style="padding:0"><b>{point.y:,.0f} Chiếc</b></td></tr>',
                                    footerFormat: '</table>',
                                    shared: true,
                                    useHTML: true
                                },
                                plotOptions: {
                                    column: {
                                        pointPadding: 0.1,
                                        borderWidth: 0
                                    }
                                },
                                series: [
                                    {name: 'Số lượng', data: res.soLuong5SP}
                                ]
                            });
                        }
                    }
                })
            })
        })

        //Khung của biểu đồ doanh thu 12 tháng (dữ liệu truyền vào = null)(được hiển thị trước khi user chọn năm)
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Biểu đồ doanh thu năm '
            },
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Việt Nam Đồng (VND)'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table width="400px">',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:,.0f} VND</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.1,
                    borderWidth: 0
                }
            },
            series: [
                {name: 'Chỉ đơn đã hoàn thành', data: null}, 
                {name: 'Gồm cả đơn chưa hoàn thành', data: null}
            ]
        });

        //Khung của biểu đồ top 5 sản phẩm bán chạy theo danh mục (dữ liệu truyền vào = null)(được hiển thị trước khi user chọ danh mục)
        Highcharts.chart('container2', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Top 5 sản phẩm bán chạy của danh mục'
            },
            xAxis: {
                categories: null,
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Chiếc'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table width="400px">',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:,.0f} Chiếc</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.1,
                    borderWidth: 0
                }
            },
            series: [
                {name: 'Số lượng', data: null}
            ]
        });

        //Biểu đồ danh mục sản phẩm đã bán
        var danhMuc = {!! json_encode($danhMuc, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE) !!};
        var danhMucCon = {!! json_encode($danhMucCon, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE) !!};
        var colors = Highcharts.getOptions().colors;
        for(var i = 0; i < danhMuc.length; i++) {
            danhMuc[i].color = colors[i];
            
        }
        for(var j = 0; j < danhMucCon.length; j++) {
            var index = (danhMuc.findIndex(x => x.maDM === danhMucCon[j].maDM));
            danhMucCon[j].color = Highcharts.color(danhMuc[index].color).brighten(0.1).get();
        }
        
        // console.log(danhMucCon);
        Highcharts.chart('container3', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Danh mục sản phẩm đã bán'
            },
            plotOptions: {
                pie: {
                    shadow: false,
                    center: ['50%', '50%']
                }
            },
            tooltip: {
                valueSuffix: '%'
            },
            series: [{
                name: 'Danh mục',
                data: danhMuc,
                size: '80%',
                dataLabels: {
                    formatter: function () {
                        return this.y > 5 ? this.point.name : null;
                    },
                    color: '#ffffff',
                    distance: 10
                }
            }
            , {
                name: 'Danh mục con',
                data: danhMucCon,
                size: '80%',
                innerSize: '60%',
                dataLabels: {
                    formatter: function () {
                        // display only if larger than 1
                        return this.y > 1 ? '<b>' + this.point.name + ':</b> ' +
                            this.y + '%' : null;
                    }
                },
                id: 'danh mục con'
            }
            ],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 400
                    },
                    chartOptions: {
                        series: [{
                        }, {
                            id: 'danh mục con',
                            dataLabels: {
                                enabled: false
                            }
                        }]
                    }
                }]
            }
        });
    </script>
</body>
</html>
