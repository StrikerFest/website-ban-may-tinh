<html lang="en">

<head>
    @include('Customer.Layout.Common.meta')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .card{
            position: absolute;
            width: 80%;
            top: 20%;
            left: 50%;
            transform: translateX(-50%);
            display: none;
        }
        .voucher-table {
            width: 100%;
        }
        .voucher-table th, td {
            text-align: center;
        }
    </style>
</head>
@include('Customer.Layout.Common.header')

<body>
    <!-- Wrapper - Cả trang -->
    <div id="wrapper">


        <!-- Wrapper - Chỉ riêng phần nội dung - Không bao gồm navbar -->
        <div id="content-wrapper" class="d-flex flex-row">
            @include('Customer.Layout.Common.side_nav_menu')

            <!-- Content của trang -->
            <div class="container-fluid" {{-- style="position:relative;top: 70px" --}} style="padding-top: 70px">

                <main class="my-8">
                    <div class="container px-6 mx-auto">
                        <div class="flex justify-center my-6">
                            <div
                                class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                                {{-- Title giỏ hàng --}}
                                @if (sizeof($listHoaDonCT) == 0)
                                    <h3 class="text-3xl text-bold text-light padding-10 black-glass">Xin mời quý khách
                                        quay lại
                                    </h3>
                                @else
                                    <h3 class="text-3xl text-bold text-light padding-10 black-glass">Hóa đơn chi tiết
                                    </h3>
                                @endif

                                <div class="flex-1 bg- padding-10">
                                    <table class="width-100 text-sm lg:text-base border-radius-10" cellspacing="0">
                                        {{-- Header từng cột --}}
                                        <thead class="border-radius-10"
                                            style="border: 1px solid black; border-radius: 10px">
                                            @if (sizeof($listHoaDonCT) == 0)
                                            @else
                                                <tr class="h-12 uppercase">
                                                    <th class="text-center padding-5" style="width: 10%"></th>
                                                    <th class="text-center padding-5" style="width: 27%">Sản phẩm
                                                    </th>
                                                    <th class="text-center padding-5" style="width: 17.5%">Giá sản
                                                        phẩm
                                                    </th>
                                                    <th class="hidden text-center md:table-cell" style="width: 17.5%">
                                                        Khuyến
                                                        mãi
                                                    </th>
                                                    <th class="text-center padding-5">Voucher</th>
                                                    <th class="text-center padding-5" style="width: 8%">Số lượng
                                                    </th>

                                                    <th class="hidden text-center md:table-cell" style="width: 17.5%">
                                                        Giá
                                                        cuối
                                                        cùng
                                                    </th>
                                                </tr>
                                            @endif
                                        </thead>
                                        {{-- Content của giỏ hàng --}}
                                        <tbody style="border: 1px solid lightgray">
                                            @if (sizeof($listHoaDonCT) == 0)
                                                <tr>
                                                    <td colspan="6" class="text-center">
                                                        <h3 class="padding-15">Yêu cầu của quý khách không được
                                                            tìm
                                                            thấy</h3>
                                                    </td>
                                                </tr>
                                            @else
                                                @php
                                                    $sum = 0;
                                                @endphp
                                                @foreach ($listHoaDonCT as $item)
                                                    <tr>
                                                        @foreach ($listSanPham as $SP)
                                                            @if ($SP->maSP == $item->maSP)
                                                                <td>
                                                                    @foreach ($listAnh as $PI)
                                                                        @if ($PI->maSP == $SP->maSP)
                                                                            <a
                                                                                href="{{ route('product.show', $SP->maSP) }}">
                                                                                <img class="card-img-top "
                                                                                    style="height:100px ; width:100px ; border: 1px solid lightgray"
                                                                                    src="{{ asset('assets/img/' . $PI->anh) }}"
                                                                                    id="{{ $SP->maSP }}"
                                                                                    alt="..." />
                                                                            </a>
                                                                        @endif
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    <a href="{{ route('product.show', $SP->maSP) }}"
                                                                        class="link-red">
                                                                        <p class="mb-2 md:ml-4 text-center">
                                                                            {{ $SP->tenSP }}
                                                                        </p>
                                                                    </a>
                                                                </td>
                                                            @endif
                                                        @endforeach


                                                        <td>
                                                            <div class="h-10 w-28 text-center">
                                                                <div class="relative flex flex-row w-full h-8">
                                                                    <p class="mb-2 md:ml-4 text-center">
                                                                        {{ number_format($item->giaSP) }} VND
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="mb-2 md:ml-4 text-center">

                                                                Giảm
                                                                {{ number_format($item->giaSP * ($item->giamGia / 100)) }}
                                                                VND
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php 
                                                                if($item->maVoucher === null){
                                                                    echo 'Không có voucher';
                                                                }else{ ?>
                                                                    <button class="btn btn-info voucher" value="{{$item->maHDCT}}">
                                                                        Voucher
                                                                    </button>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <p class="mb-2 md:ml-4 text-center">
                                                                {{ $item->soLuong }}
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="mb-2 md:ml-4 text-center">
                                                                {{ number_format($item->giaSP * $item->soLuong - $item->soLuong * $item->giaSP * ($item->giamGia / 100) - $item->tienGiamVoucher) }}
                                                                VND
                                                            </p>
                                                        </td>
                                                        @php
                                                            $sum += $item->giaSP * $item->soLuong - ($item->soLuong * ($item->giaSP * $item->giamGia)) / 100 - $item->tienGiamVoucher;
                                                        @endphp
                                                    </tr>
                                                @endforeach
                                                @if ($sum != 0)
                                                    <tr>
                                                        <td colspan="7" class="text-center">
                                                            <h3>Tổng tiền: {{ number_format($sum) }}VND</h3>
                                                        </td>
                                                    </tr>
                                                @endif
                                                <tr>
                                                    <td colspan="7">
                                                        <div style="display: flex; justify-content: flex-end;">
                                                            <?php if($hoaDon->maTTHD == 4){ ?>
                                                                <form style="margin-right: 10px;" action="{{route('receipt.update', $hoaDon->maHD)}}" method="post">
                                                                    @method('PUT')
                                                                    @csrf
                                                                    <input type="hidden" name="maTTHD" value="5">
                                                                    <button class="btn btn-success" onclick="return confirm('Xác nhận đã nhận hàng?')">
                                                                        Đã nhận được hàng
                                                                    </button>
                                                                </form>
                                                            <?php } ?>
                                                            <?php if($hoaDon->maTTHD != 5 && $hoaDon->maTTHD != 2){ ?>
                                                                <form action="{{route('receipt.cancelOrder', $hoaDon->maHD)}}" method="post">
                                                                    @method('PUT')
                                                                    @csrf
                                                                    <button class="btn btn-danger" onclick="return confirm('Xác nhận huỷ đơn?')">
                                                                        Huỷ đơn
                                                                    </button>
                                                                </form>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="7" class="text-center">
                                                        <a href="{{ route('receiptCustomer.index') }}">
                                                            <button class="btn btn-primary">
                                                                Quay lại hóa đơn
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- /.container-fluid -->
        </div>

        <!-- Modal voucher -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="m-0 font-weight-bold text-danger">Voucher được áp dụng</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <button class="fa fa-times border-radius-25" id="closeModal"></button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="voucher-table">
                    <tr>
                        <th>Voucher</th>
                        <th>Giá trị voucher</th>
                        <th>Số lượng</th>
                        <th>Giá trị</th>
                    </tr>
                    
                </table>
            </div>
        </div>
    </div>
    <!-- End of Page Wrapper -->
    @include('Customer.Layout.Common.bottom_script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function(){
            //Bấm nút xem voucher sẽ mở bảng và in dữ liệu
            $('.voucher').on('click', function(e){
                $('.card').show();
                e.preventDefault();
                let maHDCT = $(this)[0].value;
                $.ajax({
                    url: "{{ url('receiptVoucher') }}/"+maHDCT,
                    type: "get",
                    success: function(res){
                        console.log(res);
                        if(res){
                            $('.voucher-table').empty();
                            $('.voucher-table').append(`<tr>
                                                            <th>Voucher</th>
                                                            <th>Giá trị voucher</th>
                                                            <th>Số lượng</th>
                                                            <th>Giá trị</th>
                                                        </tr>`);
                            let tongGiaTri = 0;
                            $.each(res, function(key, value){
                                let giaTri = value.maTLV == 2 ? value.giaTriPhanTram : value.giaTri;
                                tongGiaTri += giaTri*value.soLuong;
                                let html = '';
                                html += `<tr>
                                            <td style="padding: 8px;">${value.tenVoucher}</td>
                                            <td style="padding: 8px;">${giaTri.toLocaleString()+' VND'}</td>
                                            <td style="padding: 8px;">${value.soLuong}</td>
                                            <td style="padding: 8px;">${(value.soLuong*giaTri).toLocaleString()+' VND'}</td>
                                        </tr>`;
                                $('.voucher-table').append(html);
                            })
                            $('.voucher-table').append(`<tr>
                                                            <td colspan="3" style="padding: 8px; text-align: right; border-top: solid #777 1px;">
                                                                Tổng giá trị
                                                            </td>
                                                            <td style="padding: 8px; border-top: solid #777 1px;">
                                                            ${(tongGiaTri).toLocaleString()+' VND'}
                                                            </td>
                                                        </tr>`);
                        }
                    }
                })
            });
            
            //Tắt modal nếu bấm nút x
            $('#closeModal').on('click', function(){
                $('.card').hide();
            });
            //Tắt modal nếu bấm ra ngoài
            $(document).on('click',function(e){
                if(!(($(e.target).closest(".card").length > 0 ) || ($(e.target).closest(".voucher").length > 0))){
                    $(".card").hide();
                }
            });
        })
    </script>
    <script>
        <?php if(session()->has('canceled')){ ?>
            alert('{{session()->get('canceled')}}')
        <?php } ?>
    </script>
</body>

</html>
