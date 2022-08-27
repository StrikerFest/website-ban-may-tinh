<?php

namespace App\Http\Controllers;

use App\Mail\CancelOrderMail;
use Illuminate\Http\Request;
use App\Models\ReceiptModel;
use App\Models\ProductModel;
use App\Models\VoucherModel;
use App\Models\DetailReceiptModel;
use App\Models\VoucherDetailReceiptModel;
use App\Models\UserModel;
use App\Models\PaymentMethodModel;
use App\Models\ReceiptStatusModel;
use App\Models\SerialModel;
use DB;
use Illuminate\Support\Facades\Mail;
use PDF;


class AdminReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $validated = $request->validate([
            'NKT' => 'before_or_equal:' . Date('Y-m-d'),
            'NBD' => 'before_or_equal:' . Date('Y-m-d'),
        ]);

        $searchName = $request->get('searchName');
        $searchStatus = $request->get('searchStatus');
        //lấy ngày tạo nhỏ nhất của bảng hoá đơn
        $start = date_format(date_create(ReceiptModel::get('ngayTao')->min('ngayTao')),"Y-m-d");
        //lấy ngày hiện tại
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $end = date('Y-m-d');

        $NBD = is_null($request->get('NBD')) ? $start : $request->get('NBD');
        $NKT = is_null($request->get('NKT')) ? $end : $request->get('NKT');

        if($NBD > $NKT){
            $temp = $NBD;
            $NBD = $NKT;
            $NKT = $temp;
        }

        $NKTquery = strtotime($NKT)+23*60*60+59*60+59;
        $NKTquery = date('Y-m-d H:i:s', $NKTquery);

        $nguoiDung = UserModel::all();

        $phuongThucThanhToan = PaymentMethodModel::all();

        $tinhTrangHoaDon = ReceiptStatusModel::all();

        $hoaDon = ReceiptModel::select(['hoa_don.*'])
            ->join('nguoi_dung', 'nguoi_dung.maND', '=', 'hoa_don.maKH')
            ->join('phuong_thuc_thanh_toan', 'phuong_thuc_thanh_toan.maPTTT', '=', 'hoa_don.maPTTT')
            ->join('tinh_trang_hoa_don', 'tinh_trang_hoa_don.maTTHD', '=', 'hoa_don.maTTHD')
            ->where('nguoi_dung.tenND', 'like', "%$searchName%")
            ->where('tinh_trang_hoa_don.tenTTHD', 'like', "%$searchStatus%")
            ->whereBetween('ngayTao', [$NBD, $NKTquery])
            ->orderByRaw('FIELD(hoa_don.maTTHD, "1", "3", "4", "5", "2")')
            ->orderBy('ngayTao', 'ASC')
            ->orderBy('hoa_don.maHD', 'DESC')
            ->paginate(5)
            ->appends([
                'searchName' => $searchName,
                'searchStatus' => $searchStatus,
                "NBD" => $NBD,
                "NKT" => $NKT,
            ]);
        // dd($hoaDon);
        return view('Admin.Receipt.index', [
            'nguoiDung' => $nguoiDung,
            'phuongThucThanhToan' => $phuongThucThanhToan,
            'tinhTrangHoaDon' => $tinhTrangHoaDon,
            'hoaDon' => $hoaDon,
            'searchName' => $searchName,
            'searchStatus' => $searchStatus,
            "NBD" => $NBD,
            "NKT" => $NKT,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sanPham = ProductModel::all();

        $hoaDon = ReceiptModel::join('nguoi_dung', 'nguoi_dung.maND', '=', 'hoa_don.maKH')->find($id);

        $tinhTrangHoaDon = ReceiptStatusModel::all();

        // $VHDCT = VoucherDetailReceiptModel::join('hoa_don_chi_tiet', 'hoa_don_chi_tiet.maHDCT', '=', 'voucher_hoa_don_chi_tiet.maHDCT')
        //     ->join('hoa_don', 'hoa_don.maHD', '=', 'hoa_don_chi_tiet.maHD')
        //     ->where('hoa_don.maHD', $id)
        //     ->orderBy('hoa_don_chi_tiet.maHDCT')
        //     ->get();
        // dd($VHDCT);
        $hoaDonChiTietTemp = DB::select("
            SELECT
                hoa_don_chi_tiet.maHDCT,
                san_pham.tenSP,
                san_pham.maSP,
                hoa_don_chi_tiet.giamGia,
                hoa_don_chi_tiet.soLuong,
                hoa_don_chi_tiet.giaSP,
                bao_hanh.tenBH,
                voucher_hoa_don_chi_tiet.maVoucher,
                DATE_ADD(hoa_don.ngayTao, INTERVAL bao_hanh.giaTri MONTH) AS ngayHetHan,
                IF(DATE_ADD(hoa_don.ngayTao, INTERVAL bao_hanh.giaTri MONTH) < now(), TRUE, FALSE) AS hetHan,
                ((hoa_don_chi_tiet.giaSP - (hoa_don_chi_tiet.giaSP * hoa_don_chi_tiet.giamGia / 100)) * hoa_don_chi_tiet.soLuong) AS tongTien
                FROM hoa_don_chi_tiet
                JOIN san_pham ON hoa_don_chi_tiet.maSP = san_pham.maSP
                JOIN bao_hanh ON bao_hanh.maBH = san_pham.maBH
                JOIN hoa_don ON hoa_don.maHD = hoa_don_chi_tiet.maHD
                LEFT JOIN voucher_hoa_don_chi_tiet ON voucher_hoa_don_chi_tiet.maHDCT = hoa_don_chi_tiet.maHDCT
                WHERE hoa_don_chi_tiet.maHD = $id
                GROUP BY hoa_don_chi_tiet.maHDCT
                ORDER BY maHDCT;
        ");

        $tienGiamVoucher = DB::select("
            SELECT SUM(tienGiamVoucher) as tienGiamVoucher FROM
                (SELECT
                    hoa_don_chi_tiet.maHDCT,
                    IF(
                        maTLV=1,
                        giaTri*hoa_don_chi_tiet.soLuong,
                        IF(
                            maTLV=2,
                            (giaSP*giaTri/100)*hoa_don_chi_tiet.soLuong,
                            0
                        )
                    ) AS tienGiamVoucher
                FROM hoa_don_chi_tiet
                JOIN hoa_don ON hoa_don.maHD = hoa_don_chi_tiet.maHD
                LEFT JOIN voucher_hoa_don_chi_tiet ON voucher_hoa_don_chi_tiet.maHDCT = hoa_don_chi_tiet.maHDCT
                LEFT JOIN voucher ON voucher_hoa_don_chi_tiet.maVoucher = voucher.maVoucher
                WHERE hoa_don_chi_tiet.maHD = $id
                ORDER BY maHDCT) AS X
                GROUP BY maHDCT;
        ");

        $thanhTien = 0;
        $hoaDonChiTiet = [];
        for($i = 0; $i < sizeof($hoaDonChiTietTemp); $i++){
            $mergedObj = (object)array_merge((array)$hoaDonChiTietTemp[$i], (array)$tienGiamVoucher[$i]);
            array_push($hoaDonChiTiet, $mergedObj);
            $thanhTien += ($hoaDonChiTietTemp[$i]->tongTien - $tienGiamVoucher[$i]->tienGiamVoucher);
        }
        // dd($hoaDonChiTietTemp, $tienGiamVoucher);
        // dd($hoaDonChiTiet, $thanhTien);
        return view('Admin.Receipt.detail', [
            'thanhTien' => $thanhTien,
            'hoaDon' => $hoaDon,
            'hoaDonChiTiet' => $hoaDonChiTiet,
            'tinhTrangHoaDon' => $tinhTrangHoaDon,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hoaDon = ReceiptModel::find($id);
        if($hoaDon->maTTHD == 2){
            return back()->with('canceled', "Đơn hàng đã bị huỷ");
        }
        if($hoaDon->maTTHD == 1){
            $hoaDon->maNV = session()->get('admin');//Chỉ lưu lại admin đã duyệt lần đầu
        }
        $hoaDon->maTTHD = $request->get('maTTHD');

        $hdct = DB::table('hoa_don_chi_tiet')->where('maHD', '=', $id)->get();

        if($request->get('maTTHD') == 4){
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $hoaDon->updated_at = date('Y-m-d H:i:s');
            //kiểm tra số lượng sản phẩm
            for($i = 0; $i < sizeof($hdct); $i++){
                $sanPham = ProductModel::find($hdct[$i]->maSP);
                $sanPham->soLuong -= $hdct[$i]->soLuong;
                if($sanPham->soLuong < 0){
                    return redirect()->back()->with('negative_quantity', 'Số lượng sản phẩm không đủ');
                }
            }

            //nếu đủ số lượng sẽ giảm số lượng sản phẩm tương ứng
            for($i = 0; $i < sizeof($hdct); $i++){
                $sanPham = ProductModel::find($hdct[$i]->maSP);
                $sanPham->soLuong -= $hdct[$i]->soLuong;
                $sanPham->save();

                //Lấy số lượng mã serial của sản phẩm đươc mua tương ứng theo số lượng trong HĐCT
                $serials = SerialModel::join('nhap_kho', 'nhap_kho.maNK', '=', 'serial.maNK')
                ->where('maSP', $hdct[$i]->maSP)
                ->whereNull('serial.maHDCT')
                ->orderBy('nhap_kho.ngayNhap', 'ASC')
                ->orderBy('serial.maSerial', 'ASC')
                ->take($hdct[$i]->soLuong)
                ->get();
                // dd($serials);
                //Lưu mã serial của sản phẩm vào hoá đơn chi tiết
                for($j = 0; $j < sizeof($serials); $j++){
                    $serial = SerialModel::find($serials[$j]->maSerial);
                    $serial->maHDCT = $hdct[$i]->maHDCT;
                    $serial->save();
                }
            }
        }

        $hoaDon->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function printPDF($id)
    {
        $HD = ReceiptModel::join('nguoi_dung', 'nguoi_dung.maND', '=', 'hoa_don.maKH')->find($id);

        $hoaDonCT = DB::table('hoa_don_chi_tiet')
                ->select(['hoa_don_chi_tiet.*', 'maVoucher', 'tenSP'])
                ->leftJoin('voucher_hoa_don_chi_tiet', 'voucher_hoa_don_chi_tiet.maHDCT', '=', 'hoa_don_chi_tiet.maHDCT')
                ->join('san_pham', 'san_pham.maSP', '=', 'hoa_don_chi_tiet.maSP')
                ->where('maHD', $id)
                ->groupBy('hoa_don_chi_tiet.maHDCT')
                ->orderBy('hoa_don_chi_tiet.maHDCT', 'ASC')
                ->get();

        $tienGiamVoucher = DB::select("
            SELECT SUM(tienGiamVoucher) as tienGiamVoucher FROM
                (SELECT
                    hoa_don_chi_tiet.maHDCT,
                    IF(
                        maTLV=1,
                        giaTri*hoa_don_chi_tiet.soLuong,
                        IF(
                            maTLV=2,
                            (giaSP*giaTri/100)*hoa_don_chi_tiet.soLuong,
                            0
                        )
                    ) AS tienGiamVoucher
                FROM hoa_don_chi_tiet
                JOIN hoa_don ON hoa_don.maHD = hoa_don_chi_tiet.maHD
                LEFT JOIN voucher_hoa_don_chi_tiet ON voucher_hoa_don_chi_tiet.maHDCT = hoa_don_chi_tiet.maHDCT
                LEFT JOIN voucher ON voucher_hoa_don_chi_tiet.maVoucher = voucher.maVoucher
                WHERE hoa_don_chi_tiet.maHD = $id
                ORDER BY maHDCT) AS X
                GROUP BY maHDCT;
            ");
        $HDCT = [];
        for($i = 0; $i < sizeof($hoaDonCT); $i++){
            //Kết hợp object HDCT với object tiền giảm voucher
            $mergedObj = (object)array_merge((array)$hoaDonCT[$i], (array)$tienGiamVoucher[$i]);
            //Đưa object đã kết hợp vào $HDCT
            array_push($HDCT, $mergedObj);
        }
        // dd($HDCT);
        // return view('Admin.Receipt.pdf', compact('HD', 'HDCT'));
        $pdf = PDF::loadView('Admin.Receipt.pdf', [
            'HD' => $HD,
            'HDCT' => $HDCT,
        ]);
        return $pdf->download('receipt.pdf');
    }

    public function cancelOrder(Request $request, $id)
    {
        $hoaDon = ReceiptModel::join('nguoi_dung', 'nguoi_dung.maND', '=', 'hoa_don.maKH')->find($id);
        // dd($hoaDon);
        if($hoaDon->maTTHD == 5){
            return back()->with('canceled', "Đơn hàng đã được giao");
        }
        // Gửi mail thông báo huỷ đơn
        $objDemo = new \stdClass();
        // Mã hóa đơn
        $objDemo->idReceipt = $hoaDon->maHD;
        // Tên người gửi
        $objDemo->sender = 'BKCOM';
        // Tên người nhận
        $objDemo->receiver = $hoaDon->tenND;
        // Lý do
        $objDemo->reason = $request->cancelReason;
        Mail::to($hoaDon->emailND)->send(new CancelOrderMail($objDemo));


        // dd($hoaDon->maTTHD);
        $hdct = DB::table('hoa_don_chi_tiet')->where('maHD', '=', $id)->get();
        // dd($hdct);
        if($hoaDon->maTTHD == 4){
            //Tăng số lượng sp sau khi huỷ đơn
            for($i = 0; $i < sizeof($hdct); $i++){
                $sp = ProductModel::find($hdct[$i]->maSP);
                $sp->soLuong += $hdct[$i]->soLuong;
                $sp->save();

                //Bỏ liên kết của serial với hoá đơn chi tiết
                $serials = SerialModel::where('maHDCT', $hdct[$i]->maHDCT)->get();
                // dd($serial);
                for($j = 0; $j < sizeof($serials); $j++){
                    $serial = SerialModel::find($serials[$j]->maSerial);
                    $serial->maHDCT = null;
                    $serial->save();
                }
            }

        }
        //Tăng số lượng voucher sau khi huỷ đơn
        for($i = 0; $i < sizeof($hdct); $i++){
            $vhdct = VoucherDetailReceiptModel::select(['voucher_hoa_don_chi_tiet.*', 'voucher.soLuong AS soLuongV', 'hoa_don_chi_tiet.soLuong AS soLuongSP'])
                ->join('hoa_don_chi_tiet', 'hoa_don_chi_tiet.maHDCT', '=', 'voucher_hoa_don_chi_tiet.maHDCT')
                ->join('voucher', 'voucher.maVoucher', '=', 'voucher_hoa_don_chi_tiet.maVoucher')
                ->where('voucher_hoa_don_chi_tiet.maHDCT', $hdct[$i]->maHDCT)
                ->get();
            // dd($vhdct);
            foreach($vhdct as $item){
                $voucher = VoucherModel::find($item->maVoucher);
                $voucher->soLuong += $item->soLuongSP;
                $voucher->save();
            }
        }
        // dd($hdct);
        $hoaDon->maTTHD = 2;//Huỷ đơn
        $hoaDon->save();

        return back();
    }
}
