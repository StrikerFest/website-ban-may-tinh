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
            <div class="container-fluid" {{-- style="position:relative;top: 70px" --}} style="padding-top: 70px">

                <main class="my-8">
                    <div class="container px-6 mx-auto">
                        <div class="flex justify-center my-6">
                            <div
                                class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                                {{-- Title giỏ hàng --}}
                                <h3 class="text-3xl text-bold text-light padding-10 black-glass">Hóa đơn</h3>

                                <div class="flex-1 bg- padding-10">
                                    <table class="width-100 text-sm lg:text-base border-radius-10" cellspacing="0">
                                        {{-- Header từng cột --}}
                                        <thead class="border-radius-10"
                                            style="border: 1px solid black; border-radius: 10px">
                                            @if (sizeof($listHoaDon) == 0)
                                                <tr>
                                                    <td colspan="6" class="text-center text-light bg-danger">
                                                        <button class="fa fa-shopping-cart rounded"></button>
                                                    </td>
                                                </tr>
                                            @else
                                                <tr class="h-12 uppercase">
                                                    <th class="text-center padding-5" style="width: 10%">Mã hóa đơn</th>
                                                    <th class="text-center padding-5" style="width: 20%">Ngày đặt</th>
                                                    <th class="text-center padding-5" style="width: 20%">Phương thức
                                                        thanh
                                                        toán
                                                    </th>
                                                    <th class="hidden text-center md:table-cell" style="width: 20%">Tình
                                                        trạng
                                                    </th>
                                                    <th class="hidden text-center md:table-cell" style="width: 20%">Chi
                                                        tiết
                                                    </th>
                                                </tr>
                                            @endif
                                        </thead>
                                        {{-- Content của giỏ hàng --}}
                                        <tbody style="border: 1px solid lightgray">
                                            @if (sizeof($listHoaDon) == 0)
                                                <tr>
                                                    <td colspan="6" class="text-center">
                                                        <h3 class="padding-top-10">Khách hàng chưa có lịch sử đặt hàng
                                                        </h3>
                                                        <br>
                                                        <h4 class="padding-bottom-10">Sau khi đặt hàng sản phẩm của
                                                            khách hàng sẽ hiện ở đây</h4>
                                                    </td>
                                                </tr>
                                            @else
                                                @foreach ($listHoaDon as $item)
                                                    <tr>
                                                        <td class="padding-15">
                                                            <p class="mb-2 md:ml-4 text-center">{{ $item->maHD }}
                                                            </p>
                                                        </td>
                                                        <td class="padding-15">
                                                            <p class="mb-2 md:ml-4 text-center">{{ $item->ngayTao }}
                                                            </p>
                                                        </td>
                                                        <td class="padding-15">
                                                            <div class="h-10 w-28 text-center">
                                                                <div class="relative flex flex-row w-full h-8">
                                                                    <p class="mb-2 md:ml-4 text-center">
                                                                        @foreach ($listPTTT as $PTTT)
                                                                            @if ($item->maPTTT == $PTTT->maPTTT)
                                                                                {{ $PTTT->tenPTTT }}
                                                                            @endif
                                                                        @endforeach
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="padding-15">
                                                            <p class="mb-2 md:ml-4 text-center">
                                                                @foreach ($listTTHD as $TTHD)
                                                                    @if ($item->maTTHD == $TTHD->maTTHD)
                                                                        {{ $TTHD->tenTTHD }}
                                                                    @endif
                                                                @endforeach
                                                            </p>
                                                        </td>
                                                        <td class="padding-15">
                                                            <a href="{{ route('receiptCustomer.show', $item->maHD) }} "
                                                                class="link-red">
                                                                <p class="mb-2 md:ml-4 text-center">Chi tiết
                                                                </p>
                                                            </a>
                                                        </td>

                                                    </tr>
                                                @endforeach
                                            @endif

                                            <tr>
                                                <td colspan="6" class="text-center">
                                                    <a href="{{ route('product.index') }}">
                                                        <button class="btn btn-danger">
                                                            Quay lại trang chủ
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
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

    </div>
    <!-- End of Page Wrapper -->
    @include('Customer.Layout.Common.bottom_script')
    <script>
    </script>
</body>

</html>
