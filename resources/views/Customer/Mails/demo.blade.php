<p>Xin chào <em>{{ $demo->receiver }}</em>,</p>
<p>Đây là tin nhắn xác nhận đơn hàng mã số: {{ $demo->idReceipt }}</p>
<table style="border-collapse: collapse; width: 100%; height: 78px;" border="1">
    <tbody>
        <tr style="height: 42px;">
            <td style="width: 100%; height: 42px; text-align: center;"><span style="color: #ff0000;"><strong>ĐƠN HÀNG ĐÃ
                        ĐẶT</strong></span></td>
        </tr>
        <tr style="height: 18px;">
            <td style="width: 100%; height: 18px; text-align: center;">
                <table style="border-collapse: collapse; width: 100%;" border="1">
                    <tbody>
                        <tr>
                            <td style="width: 25%;">Sản phẩm</td>
                            <td style="width: 20%;">Giá sản phẩm</td>
                            <td style="width: 10%;">Số lượng</td>
                            <td style="width: 20%;">Giảm giá</td>
                            <td style="width: 25%;">Tổng giá</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        @php
            $cartItems = \Cart::getContent();
        @endphp
        @foreach ($cartItems as $item)
            <tr style="height: 18px;">
                <td style="width: 100%; height: 18px; text-align: center;">
                    <table style="border-collapse: collapse; width: 100%;" border="1">
                        <tbody>
                            <tr>
                                <td style="width: 25%;">{{ $item->name }}</td>
                                <td style="width: 20%;">{{ number_format($item->price) }} VND </td>
                                <td style="width: 10%;">{{ $item->quantity }}</td>
                                <td style="width: 20%;">
                                    {{ number_format($item->attributes->reduceFlat + ($item->price * $item->attributes->reducePercent) / 100) }} VND
                                </td>
                                <td style="width: 25%;">{{ number_format(($item->price - $item->attributes->reduceFlat - $item->price * $item->attributes->reducePercent / 100) * $item->quantity) }} VND</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<p><u>Phương thức thanh to&aacute;n: {{ $demo->demo_one }}</u></p>
<p><u>Tổng giá trị đơn hàng: {{ $demo->demo_two }}</u></p>
<p><u>Tổng số tiền giảm tải: {{ $demo->reduce_price }}</u></p>
<div>
    <p>&nbsp;</p>
</div>
<div>
    <p>Cảm ơn quý khách đã tin tưởng và lựa chọn BKCOM</p>
    {{-- <p style="text-align: center;"><span style="color: #ff0000;">015938482928 - BachKhoaComputer</span></p> --}}
</div>
<p>Xin chân thành cảm ơn, <br /><em>{{ $demo->sender }}</em></p>
