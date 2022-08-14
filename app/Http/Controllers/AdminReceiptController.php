<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReceiptModel;
use App\Models\ProductModel;
use App\Models\DetailReceiptModel;
use App\Models\UserModel;
use App\Models\PaymentMethodModel;
use App\Models\ReceiptStatusModel;
use App\Models\SerialModel;
use DB;
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

        $hoaDon = ReceiptModel::join('nguoi_dung', 'nguoi_dung.maND', '=', 'hoa_don.maKH')
            ->join('phuong_thuc_thanh_toan', 'phuong_thuc_thanh_toan.maPTTT', '=', 'hoa_don.maPTTT')
            ->join('tinh_trang_hoa_don', 'tinh_trang_hoa_don.maTTHD', '=', 'hoa_don.maTTHD')
            ->where('nguoi_dung.tenND', 'like', "%$searchName%")
            ->where('tinh_trang_hoa_don.tenTTHD', 'like', "%$searchStatus%")
            ->whereBetween('ngayTao', [$NBD, $NKTquery])
            ->orderBy('hoa_don.maTTHD', 'DESC')
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

        $hoaDonChiTiet = DB::select("
            SELECT 
                hoa_don_chi_tiet.maHDCT,
                san_pham.tenSP,
                san_pham.maSP,
                hoa_don_chi_tiet.giamGia,
                hoa_don_chi_tiet.soLuong,
                hoa_don_chi_tiet.giaSP,
                voucher.tenVoucher,
                voucher.giaTri,
                voucher.maTLV,
                bao_hanh.tenBH,
                DATE_ADD(hoa_don.ngayTao, INTERVAL bao_hanh.giaTri MONTH) AS ngayHetHan,
                IF(DATE_ADD(hoa_don.ngayTao, INTERVAL bao_hanh.giaTri MONTH) < now(), TRUE, FALSE) AS hetHan,
                ((hoa_don_chi_tiet.giaSP - (hoa_don_chi_tiet.giaSP * hoa_don_chi_tiet.giamGia / 100)) * hoa_don_chi_tiet.soLuong) AS tongTien,
                IF(maTLV = 1, voucher.giaTri * hoa_don_chi_tiet.soLuong, If(maTLV = 2, (hoa_don_chi_tiet.giaSP * voucher.giaTri /100) * hoa_don_chi_tiet.soLuong, 0)) AS tienGiamVoucher
                FROM hoa_don_chi_tiet
                JOIN san_pham ON hoa_don_chi_tiet.maSP = san_pham.maSP
                JOIN bao_hanh ON bao_hanh.maBH = san_pham.maBH
                JOIN hoa_don ON hoa_don.maHD = hoa_don_chi_tiet.maHD
                LEFT JOIN voucher ON hoa_don_chi_tiet.maVoucher = voucher.maVoucher
                WHERE hoa_don_chi_tiet.maHD = $id
        ");

        $thanhTien = DB::select("
        SELECT
            SUM(
                if(
                    maTLV = 1,
                    ((hoa_don_chi_tiet.giaSP - (hoa_don_chi_tiet.giaSP * hoa_don_chi_tiet.giamGia / 100) - giaTri) * hoa_don_chi_tiet.soLuong),
                    (IF(
                        maTLV = 2,
                        ((hoa_don_chi_tiet.giaSP - (hoa_don_chi_tiet.giaSP * hoa_don_chi_tiet.giamGia / 100) - (giaTri * hoa_don_chi_tiet.giaSP / 100)) * hoa_don_chi_tiet.soLuong),
                        ((hoa_don_chi_tiet.giaSP - (hoa_don_chi_tiet.giaSP * hoa_don_chi_tiet.giamGia / 100)) * hoa_don_chi_tiet.soLuong))
                    )
                )
            ) as tong
            FROM hoa_don_chi_tiet
            JOIN san_pham ON hoa_don_chi_tiet.maSP = san_pham.maSP
            LEFT JOIN voucher on voucher.maVoucher = hoa_don_chi_tiet.maVoucher
            WHERE hoa_don_chi_tiet.maHD = $id
        ")[0]->tong;
        
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
        $hoaDon->maTTHD = $request->get('maTTHD');
        $hoaDon->maNV = session()->get('admin');
        
        $hdct = DB::table('hoa_don_chi_tiet')->where('maHD', '=', $id)->get();

        if($request->get('maTTHD') == 1){
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
        $HDCT = DetailReceiptModel::selectRaw('hoa_don_chi_tiet.soLuong, san_pham.tenSP, hoa_don_chi_tiet.giaSP, IF(
            maTLV=1,
            (hoa_don_chi_tiet.giaSP-(hoa_don_chi_tiet.giaSP*hoa_don_chi_tiet.giamGia/100)-voucher.giaTri),
            IF(
                maTLV=2,
                (
                    hoa_don_chi_tiet.giaSP-(hoa_don_chi_tiet.giaSP*hoa_don_chi_tiet.giamGia/100)-
                    (hoa_don_chi_tiet.giaSP*voucher.giaTri/100)
                ),
                hoa_don_chi_tiet.giaSP-(hoa_don_chi_tiet.giaSP*hoa_don_chi_tiet.giamGia/100)
            )
        ) AS donGia')
            ->leftJoin('voucher', 'voucher.maVoucher', '=' ,'hoa_don_chi_tiet.maVoucher')
            ->join('san_pham', 'san_pham.maSP', '=', 'hoa_don_chi_tiet.maSP')
            ->where('maHD', $id)
            ->get();
        // return view('Admin.Receipt.pdf', compact('HD', 'HDCT'));
        $pdf = PDF::loadView('Admin.Receipt.pdf', [
            'HD' => $HD,
            'HDCT' => $HDCT,
        ]);
        return $pdf->download('receipt.pdf');
    }
}
