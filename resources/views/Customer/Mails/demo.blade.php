<p>Xin ch&agrave;o <em>{{ $demo->receiver }}</em>,</p>
<p>BKCOM xin tr&igrave;nh h&oacute;a đơn điện tử m&atilde; số: {{ $demo->idReceipt }}</p>
<table style="border-collapse: collapse; width: 100%; height: 78px;" border="1">
    <tbody>
        <tr style="height: 42px;">
            <td style="width: 100%; height: 42px; text-align: center;"><span style="color: #ff0000;"><strong>H&Oacute;A
                        ĐƠN ĐIỆN TỬ</strong></span></td>
        </tr>
        <tr style="height: 18px;">
            <td style="width: 100%; height: 18px; text-align: center;">
                <table style="border-collapse: collapse; width: 100%;" border="1">
                    <tbody>
                        <tr>
                            <td style="width: 50%;">Sản phẩm</td>
                            <td style="width: 50%;">Gi&aacute; sản phẩm</td>
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
                            <td style="width: 50%;">{{  $item->name  }}</td>
                            <td style="width: 50%;">{{ number_format($item->price) }} VND x {{$item->quantity}} = {{number_format($item->price * $item->quantity)}} VND</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<p><u>Phương thức thanh to&aacute;n: {{ $demo->demo_one }}</u></p>
<p><u>Tổng số tiền cần thanh to&aacute;n: {{ $demo->demo_two }}</u></p>
<div>
    <p>&nbsp;</p>
</div>
<div>
    <p>Qu&yacute; kh&aacute;ch vui l&ograve;ng thanh to&aacute;n sản phẩm sau khi nhận h&agrave;ng, nếu qu&yacute;
        kh&aacute;ch đăng k&yacute; mua h&agrave;ng qua phương thức chuyển khoản, vui l&ograve;ng chuyển tổng số tiền
        cần thanh to&aacute;n qua số t&agrave;i khoản (Đ&atilde; bao gồm VAT)</p>
    <p style="text-align: center;"><span style="color: #ff0000;">015938482928 - BachKhoaComputer</span></p>
</div>
<p>Xin ch&acirc;n th&agrave;nh cảm ơn, <br /><em>{{ $demo->sender }}</em></p>
