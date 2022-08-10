<?php

namespace App\Http\Controllers;

use App\Models\DetailReceiptModel;
use App\Models\WarrantyInfoModel;

use Illuminate\Http\Request;

class AdminWarrantyInfoController extends Controller
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

        $searchSerial = $request->get('searchSerial');
        $searchProduct = $request->get('searchProduct');
        $searchName = $request->get('searchName');
        //lấy ngày tạo nhỏ nhất của bảng thông tin bảo hành
        $start = date_format(date_create(WarrantyInfoModel::get('ngayBH')->min('ngayBH')),"Y-m-d");
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

        $TTBH = WarrantyInfoModel::join('serial', 'serial.maSerial', '=', 'thong_tin_bao_hanh.maSerial')
            ->join('san_pham', 'san_pham.maSP', '=', 'serial.maSP')
            ->where('serial.serial', 'like', "%$searchSerial%")
            ->where('san_pham.tenSP', 'like', "%$searchProduct%")
            ->where('thong_tin_bao_hanh.tenNBH', 'like', "%$searchName%")
            ->whereBetween('ngayBH', [$NBD, $NKTquery])
            ->orderBy('ngayBH', 'DESC')
            ->paginate(10)
            ->appends([
                'searchSerial' => $searchSerial,
                'searchProduct' => $searchProduct,
                'searchName' => $searchName,
                'NBD' => $NBD,
                'NKT' => $NKT,
            ]);

        return view('Admin.Warranty.list', [
            'TTBH' => $TTBH,
            'searchSerial' => $searchSerial,
            'searchProduct' => $searchProduct,
            'searchName' => $searchName,
            'NBD' => $NBD,
            'NKT' => $NKT,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($maHDCT)
    {
        $Serial = DetailReceiptModel::select(['serial.maSerial', 'serial.serial', 'san_pham.tenSP', 'nguoi_dung.tenND', 'hoa_don.soDienThoai'])
            ->join('serial', 'serial.maHDCT', '=', 'hoa_don_chi_tiet.maHDCT')
            ->join('san_pham', 'san_pham.maSP', '=', 'serial.maSP')
            ->join('hoa_don', 'hoa_don.maHD', '=', 'hoa_don_chi_tiet.maHD')
            ->join('nguoi_dung', 'nguoi_dung.maND', '=', 'hoa_don.maKH')
            ->where('hoa_don_chi_tiet.maHDCT', $maHDCT)
            ->get();

        $tenSP = $Serial[0]->tenSP;
        $tenND = $Serial[0]->tenND;
        $soDienThoai = $Serial[0]->soDienThoai;

        return view('Admin.Warranty.create', [
            'Serial' => $Serial,
            'tenSP' => $tenSP,
            'tenND' => $tenND,
            'soDienThoai' => $soDienThoai,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'maSerial' => 'required',
            'tenNBH' => 'required',
            'soDienThoaiNBH' => 'required',
            'noiDung' => 'required',
        ]);

        $TTBH = new WarrantyInfoModel();
        $TTBH->maSerial = $request->get('maSerial');
        $TTBH->tenNBH = $request->get('tenNBH');
        $TTBH->soDienThoaiNBH = $request->get('soDienThoaiNBH');
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $TTBH->ngayBH =  date("Y/m/d H:i:s");
        $TTBH->noiDung = $request->Get('noiDung');
        $TTBH->save();
        
        return redirect()->route('warrantyInfo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
}
