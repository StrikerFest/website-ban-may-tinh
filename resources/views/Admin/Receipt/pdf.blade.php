<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Hoá đơn điện tử</title>
    <style>
        body {
            margin: 0;
            font-family: DejaVu Sans;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #858796;
            text-align: left;
            background-color: #fff;
        }
        table th, td {
            padding: 5px;
            font-size: 16px;
        }
        *{
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div style="padding: 60px 0; margin: 0 10%;">
        <div style="position: relative;">
            <div style="font-size: 3rem; position: absolute; top: 0; left: 15px;">
                <img width="362"; height="152" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAWoAAACYCAYAAADN9aNFAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAAEnQAABJ0Ad5mH3gAACBvSURBVHhe7Z13tBXVvce3IggiKr03aZcqoCgKigVsYK9YYkxieqJ5yct66/2Vv97Kynt5LyZ5SSyJsSBgF7FiAwSpAlKl914EsWF789nO8d17OTOz55yZuXMv389ad8kc8J45c/b+7t/+tX3UVx5GCCFEbjna/68QQoicIqEWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicI6EWQoicc9RXHv6fhcfnn39htm/fZRYuWm42btpqDhw4aI5tUN906tzenHvOGaZ585P8fymEENkgofbYuWuPee+9tWbZ8tVm374D5ssvv/T/pirHHFPPnD18iDlz6CD/FSGESJ8jUqg/+OCgeW/lOrNixVqzddsOa0W7cvTRR5sxo883/fr28F8RQoh0OSKE+tChz8yGjVvMokUrzKZNW83Hn3zq/01ptG3bytw89nLToEF9/xUhhEiPOinUuC62bdtlli5baVat3mD9zEl+zIYNjzU3XDfatG/f2n9FCCHSo84I9d59+83y5avNivfWml279gb6mZPi/PPONEPPGOhfCSFEetRaof7wo4/NqlXrzbJlq8zWbTuteyNLup3cydxw/Wj/Sggh0qPWCDUBv/UbNpvFi98zGzZuNR95Ql2TnHhiE3PrzVeaE0443n9FCCHSIbdCjesCF8aSpV/7mfft25+on7kYRx11lGna9ETTo3tn069vTzN77iKzZMlK/2+rUq9ePXPlFaNMr55d/VeEECIdciXU779/wPqYl69Y44n0nlhpc6WAMB93XCPTtWsHK8ydOrazudIFli5bZZ6b/HqgvxsfNb5qIYRIkxoVatLkVq9e7wniarNly3bz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" alt="BKCom">
            </div>
            <div style="width: 49%; display: inline-block;"></div>
            <div style="text-align: center; width: 50%; display: inline-block;">
                <p style="margin: 5px;">
                    <b style="font-size: 32px;">
                        Hoá đơn bán hàng
                    </b>
                </p>
                <p style="margin: 5px;">
                    <?php 
                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                        echo 'Ngày '.date_format(date_create($HD->ngayTao), 'd')
                        .' tháng '.date_format(date_create($HD->ngayTao), 'm')
                        .' năm '.date_format(date_create($HD->ngayTao), 'Y'); 
                    ?>
                </p>
                <span>Mã hoá đơn: {{$HD->maHD}}</span>
            </div>
        </div>
        <!-- <hr style="background: #000;" />
        <div >
            <p>
                <span>
                    Họ tên người bán hàng:
                </span>
                <b style="text-transform: uppercase;">
                    Cửa hàng BKCom
                </b>
            </p>
            <p>
                Địa chỉ: 
                <b>
                    Hà Nội, Việt Nam
                </b>
            </p>
            <p>
                Số điện thoại:
                <b>
                    0123456789
                </b>
            </p>
        </div> -->
        <hr/>
        <div >
            <p>
                <span>
                    Họ tên người mua hàng: 
                </span>
                <b>
                    {{$HD->tenND}}
                </b>
            </p>
            <p>
                Địa chỉ: 
                <b>
                    {{$HD->diaChiND}}
                </b>
            </p>
            <p>
                Số điện thoại: 
                <b>
                    {{$HD->soDienThoai}}
                </b>
            </p>
        </div>
        <div>
            <table border="1" style="border-collapse: collapse; width :100%; text-align: center;">
                <tr>
                    <th width="5%">
                        STT
                    </th>
                    <th>
                        Tên hàng hoá
                    </th>
                    <th width="10%">
                        Đơn giá
                    </th>
                    <th width="10%">
                        Số lượng
                    </th>
                    <th width="10%">
                        Tiền giảm
                    </th>
                    <th width="15%">
                        Thành tiền
                    </th>
                </tr>
                <?php $tongTien = 0 ?>
                @foreach($HDCT as $index => $hdct)
                <tr>
                    <td>
                        {{++$index}}
                    </td>
                    <td>
                        {{$hdct->tenSP}}
                    </td>
                    <td>
                        {{number_format($hdct->giaSP)}}
                    </td>
                    <td>
                        {{$hdct->soLuong}}
                    </td>
                    <td>
                        <?php 
                            $tienGiam = $hdct->tienGiamVoucher + ($hdct->giaSP * $hdct->giamGia /100) * $hdct->soLuong;
                            echo number_format($tienGiam);
                        ?>
                    </td>
                    <td>
                        {{number_format($hdct->giaSP * $hdct->soLuong - $tienGiam)}}
                        <?php $tongTien += $hdct->giaSP * $hdct->soLuong - $tienGiam ?>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="5" style="text-align: right; border-right: none;">
                        Tổng tiền hàng:
                        &nbsp;
                    </td>
                    <td style="border-left: none;">
                        {{number_format($tongTien).' VND'}}
                    </td>
                </tr>
            </table>
        </div>
        <div style=" margin-top: 20px; text-align: center;">
            <div style="width: 50%; display: inline-block;">
                <p style="margin-bottom: 5px;">
                    <b>Người mua hàng</b>
                </p>
                <p style="margin-top: 5px;">(Ký, ghi rõ họ, tên)</p>
            </div>
            <div style="width: 49%; display: inline-block;">
                <p style="margin-bottom: 5px;">
                    <b>Người bán hàng</b>
                </p>
                <p style="margin-top: 5px;">(Ký, ghi rõ họ, tên)</p>
            </div>
        </div>
    </div>
</body>
</html>