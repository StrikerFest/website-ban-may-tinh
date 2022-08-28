<html lang="en">

<head>
    @include('Customer.Layout.Common.meta')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                                {{-- Thông báo --}}
                                @if ($message = Session::get('success'))
                                    <div class=" mb-3 bg-green-400 rounded padding-20">
                                        <p class="text-green-800">{{ $message }}</p>
                                    </div>
                                @endif
                                {{-- Title giỏ hàng --}}
                                <h3 class="text-3xl text-bold text-light padding-10 black-glass">Giỏ hàng</h3>

                                <div class="flex-1 bg- padding-10">
                                    @if (sizeof($cartItems) == 0)
                                        <h1>Giỏ hàng trống - Hãy đặt hàng để thấy sản phẩm ở đây</h1>
                                    @else
                                        <table class="w-full text-sm lg:text-base border-radius-10" cellspacing="0">
                                            {{-- Header từng cột --}}
                                            <thead class="border-radius-10"
                                                style="border: 1px solid black; border-radius: 10px">
                                                <tr class="h-12 uppercase">
                                                    <th class="hidden md:table-cell" style="width: 20%"></th>
                                                    <th class="text-center" style="width: 30%">Sản phẩm</th>
                                                    <th class="text-center" style="width: 20%">Số lượng</th>
                                                    <th class="hidden text-center md:table-cell" style="width: 20%">Giá
                                                    </th>
                                                    <th class="hidden text-center md:table-cell" style="width: 10%">
                                                    </th>
                                                </tr>
                                            </thead>
                                            {{-- Content của giỏ hàng --}}
                                            <tbody style="border: 1px solid lightgray">
                                                @php
                                                    $countReducePrice = 0;
                                                @endphp
                                                @foreach ($cartItems as $item)
                                                    <tr>
                                                        <td class="hidden pb-4 md:table-cell" style="width: 25%">
                                                            <a href="{{ route('product.show', $item->id) }}">
                                                                <img {{-- src="{{ $item->image }}" --}}
                                                                    style="height: 100%;width: 100%;"
                                                                    src="{{ asset('assets/img/' . $item->attributes->image) }}"
                                                                    class="w-20 rounded" alt="Thumbnail">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('product.show', $item->id) }}">
                                                                <p class="mb-2 md:ml-4">{{ $item->name }}</p>
                                                            </a>
                                                        </td>
                                                        <td class="justify-center mt-6 md:justify-end md:flex">
                                                            <div class="h-10 w-28">
                                                                <div class="relative flex flex-row w-full h-8">

                                                                    <!-- <form action="{{ route('cart.update') }}"
                                                                        method="POST">
                                                                        @csrf -->
                                                                        <input type="hidden" name="id" class="cart-id"
                                                                            value="{{ $item->id }}">
                                                                        <div
                                                                            style="display:flex; flex-direction: column; justify-content: center; align-items:center">
                                                                            <div class="padding-bottom-5">
                                                                                <button type="button"
                                                                                    class=" btn btn-danger decrease"
                                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i
                                                                                        class="fa fa-arrow-left"></i></button>
                                                                                        @if($item->quantity > 9)
                                                                                        <input type="number" name="quantity" class="item-quantity"
                                                                                        min="1"
                                                                                        max="9"
                                                                                        value="9"
                                                                                        class=" text-center bg-gray-300"
                                                                                        style="width:50" />
                                                                                        @else
                                                                                        <input type="number" name="quantity" class="item-quantity"
                                                                                        min="1"
                                                                                        max="9"
                                                                                        value="{{ $item->quantity }}"
                                                                                        class=" text-center bg-gray-300"
                                                                                        style="width:50" />
                                                                                        @endif

                                                                                <button type="button"
                                                                                    class="btn btn-danger increase"
                                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                                                                        class="fa fa-arrow-right"></i></button>
                                                                                        <br>
                                                                                        <span>
                                                                                            Tối đa 9 sản phẩm - Liên hệ để mua nhiều hơn
                                                                                        </span>
                                                                            </div>
                                                                            <!-- <button type="submit"
                                                                                class=" text-white bg-gradient-secondary border-radius-10"
                                                                                style="width:75%">Cập nhật</button> -->
                                                                        </div>
                                                                    <!-- </form> -->
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="hidden text-center md:table-cell padding-10"
                                                            style="padding-top: 0px">
                                                            <input type="hidden" value="{{ $item->price }}">
                                                            <input type="hidden" value="{{ $item->attributes->reduceFlat }}">
                                                            <input type="hidden" value="{{ $item->attributes->reducePercent }}">
                                                            @php
                                                                $countReducePrice += $item->attributes->reduceFlat * $item->quantity + ($item->price * $item->attributes->reducePercent / 100) * $item->quantity;
                                                            @endphp
                                                            <span class="">
                                                                <span>
                                                                    {{ number_format($item->price * $item->quantity - $item->attributes->reduceFlat * $item->quantity - ($item->price * $item->attributes->reducePercent) / 100 * $item->quantity) }} VND
                                                                </span>
                                                                <br>
                                                                (Giảm
                                                                <span>
                                                                    {{ number_format($item->attributes->reduceFlat * $item->quantity + ($item->price * $item->attributes->reducePercent) / 100  * $item->quantity)}}
                                                                </span>
                                                                 VNĐ từ voucher và giảm giá)
                                                            </span>
                                                        </td>
                                                        <td class="hidden text-right md:table-cell padding-10">
                                                            <form action="{{ route('cart.remove') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" value="{{ $item->id }}"
                                                                    name="id">
                                                                <button class="text-white btn btn-danger"
                                                                    style="width:100%">Xóa</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    @endif

                                    {{-- Tính tổng tiền giỏ hàng --}}
                                    @if (sizeof($cartItems) == 0)
                                    @else
                                        <div class="d-flex padding-10" style="justify-content: end">
                                            Tổng : &nbsp;
                                            <span id="final-price">
                                                {{ number_format(Cart::getTotal() - $countReducePrice) }}
                                            </span>
                                            VND (Tổng voucher giảm &nbsp;
                                            <span id="final-reduce">
                                                {{number_format($countReducePrice)}}
                                            </span>
                                            VNĐ)
                                        </div>
                                    @endif
                                    <div class="d-flex" style="justify-content: end;">
                                        <div class="d-flex-" style="width:50%;justify-content: start">
                                            {{-- Nút quay về trang chủ --}}
                                            <a href="javascript:history.back()">
                                                <button
                                                    class="px-6 py-2 text-light bg-gradient-primary padding-10 btn btn-primary"
                                                    style="border-top-right-radius: 20px;border-bottom-right-radius: 20px">Quay
                                                    lại</button>
                                            </a>
                                        </div>
                                        <div class="d-flex bg-" style="width:50%;justify-content: end">
                                            @if (sizeof($cartItems) == 0)
                                            @else
                                                <form action="{{ route('receiptCustomer.create') }}" method="GET">
                                                    @csrf
                                                    {{-- Nút đặt hàng --}}
                                                    <button
                                                        class="px-6 py-2 text-light bg-gradient-primary padding-10 btn btn-primary"
                                                        style="border-top-left-radius: 20px;border-bottom-left-radius: 20px">Đặt
                                                        hàng</button>
                                                </form>
                                                <form action="{{ route('cart.clear') }}" method="POST">
                                                    @csrf
                                                    {{-- Nút xóa tất cả các mặt hàng trong giỏ hàng --}}
                                                    <button
                                                        class="px-6 py-2 text-light bg-gradient-danger btn-secondary btn">Xóa
                                                        tất cả</button>
                                                </form>
                                            @endif

                                        </div>


                                    </div>

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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function(){
            function getFinalPrice(){
                let abc = $('.item-quantity')
                console.log('abc', abc)
                let sum = 0;
                let sumReduce = 0;
                for(let i = 0; i <abc.length; i++){
                    let quantityTemp = abc.eq(i).val();
                    let priceTemp = abc.eq(i).closest('td').next().children().eq(0).val();
                    let totalPriceTemp = quantityTemp*priceTemp
                    sum += totalPriceTemp

                    let reduceFlatTemp = abc.eq(i).closest('td').next().children().eq(1).val();
                    let reducePercentTemp = abc.eq(i).closest('td').next().children().eq(2).val();
                    let totalReduceTemp = reduceFlatTemp*quantityTemp + (priceTemp*reducePercentTemp/100)*quantityTemp
                    sumReduce += totalReduceTemp
                }
                $('#final-price').html(sum.toLocaleString());
                $('#final-reduce').html(sumReduce.toLocaleString());
            }

            $('.item-quantity').change(function(){
                if($(this).val() < 1){
                    $(this).val(1)
                }else if($(this).val() > 9){
                    $(this).val(9)
                }
                let cartId = $(this).parent().parent().prev().val();
                let quantity = $(this).val();
                let price = $(this).closest('td').next().children().eq(0).val();
                let totalPrice = (quantity*price).toLocaleString()+ ' VND';

                let reduceFlat = $(this).closest('td').next().children().eq(1).val();
                let reducePercent = $(this).closest('td').next().children().eq(2).val();
                let totalReduce = (reduceFlat*quantity + (price*reducePercent/100)*quantity).toLocaleString();

                $(this).closest('td').next().children().eq(3).children().eq(0).html(totalPrice);
                $(this).closest('td').next().children().eq(3).children().eq(2).html(totalReduce);
                $.ajax({
                    url: "{{ url('update-cart') }}",
                    type: "post",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": cartId,
                        "quantity": quantity,
                    },
                    success: function(res){
                        console.log('cartID', res[0], 'quantity', res[1])
                    }
                })
                getFinalPrice();
            });

            $('.decrease').click(function(){
                let quantity = $(this).next().val();
                let cartId = $(this).parent().parent().prev().val();
                let price = $(this).closest('td').next().children().eq(0).val();
                let totalPrice = (quantity*price).toLocaleString()+ ' VND';

                let reduceFlat = $(this).closest('td').next().children().eq(1).val();
                let reducePercent = $(this).closest('td').next().children().eq(2).val();
                let totalReduce = (reduceFlat*quantity + (price*reducePercent/100)*quantity).toLocaleString();
                
                $(this).closest('td').next().children().eq(3).children().eq(0).html(totalPrice);
                $(this).closest('td').next().children().eq(3).children().eq(2).html(totalReduce);
                $.ajax({
                    url: "{{ url('update-cart') }}",
                    type: "post",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": cartId,
                        "quantity": quantity,
                    },
                    success: function(res){
                        console.log('cartID', res[0], 'quantity', res[1])
                    }
                })
                getFinalPrice();
            });

            $('.increase').click(function(){
                let quantity = $(this).prev().val();
                let cartId = $(this).parent().parent().prev().val();
                let price = $(this).closest('td').next().children().eq(0).val();
                let totalPrice = (quantity*price).toLocaleString()+ ' VNĐ';

                let reduceFlat = $(this).closest('td').next().children().eq(1).val();
                let reducePercent = $(this).closest('td').next().children().eq(2).val();
                let totalReduce = (reduceFlat*quantity + (price*reducePercent/100)*quantity).toLocaleString();

                $(this).closest('td').next().children().eq(3).children().eq(0).html(totalPrice);
                $(this).closest('td').next().children().eq(3).children().eq(2).html(totalReduce);
                $.ajax({
                    url: "{{ url('update-cart') }}",
                    type: "post",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": cartId,
                        "quantity": quantity,
                    },
                    success: function(res){
                        console.log('cartID', res[0], 'quantity', res[1])
                    }
                })
                getFinalPrice();
            });
        });
    </script>
</body>

</html>
