<p>Xin ch&agrave;o <em>{{ $demo->receiver }}</em>,</p>
{{-- <p>BKCOM xin tr&igrave;nh h&oacute;a đơn điện tử m&atilde; số: {{ $demo->idReceipt }}</p> --}}

{{-- <p><u>Phương thức thanh to&aacute;n: {{ $demo->demo_one }}</u></p>
<p><u>Tổng số tiền cần thanh to&aacute;n: {{ $demo->demo_two }}</u></p> --}}
<p>Đơn hàng của quý khách đã bị hủy</p>
<div>
    <p>&nbsp;</p>
</div>
<div>
    <p>Đơn hàng với mã hóa đơn {{ $demo->idReceipt }} vủa bạn đã bị hủy vì: </p>
    <p>{{ $demo->reason }}</p>
    <p style="text-align: center;"><span style="color: #ff0000;">015938482928 - BachKhoaComputer</span></p>
</div>
<p>Xin ch&acirc;n th&agrave;nh cảm ơn, <br /><em>{{ $demo->sender }}</em></p>
