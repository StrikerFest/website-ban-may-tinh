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
                                                            <p class="mb-2 md:ml-4 text-center">
                                                                {{ $item->soLuong }}
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="mb-2 md:ml-4 text-center">


                                                                {{ number_format($item->giaSP * $item->soLuong - $item->soLuong * $item->giaSP * ($item->giamGia / 100)) }}
                                                                VND
                                                            </p>
                                                        </td>

                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="6" class="text-center">
                                                        <a href="{{ route('receiptCustomer.index') }}">
                                                            <button class="btn btn-danger">
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

    </div>
    <!-- End of Page Wrapper -->
    @include('Customer.Layout.Common.bottom_script')
    <script>
    </script>
</body>

</html>
