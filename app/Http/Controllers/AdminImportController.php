<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\ImportModel;
use App\Models\ImportDetailModel;
use DB;
use Exception;
use Excel;
use App\Imports\StockImport;


class AdminImportController extends Controller
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
        //lấy ngày tạo nhỏ nhất của bảng hoá đơn
        $start = date_format(date_create(ImportModel::get('ngayNhap')->min('ngayNhap')),"Y-m-d");
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
        $nhapKho = ImportModel::join('nha_phan_phoi', 'nha_phan_phoi.maNPP', '=', 'nhap_kho.maNPP')
            ->where('nha_phan_phoi.tenNPP', 'like', "%$searchName%")
            ->whereBetween('ngayNhap', [$NBD, $NKTquery])
            ->orderBy('maNK', 'desc')
            ->paginate(5);

        $nhaPhanPhoi = DB::table('nha_phan_phoi')->get();

        $nhanVien = DB::table('nguoi_dung')->get();

        $sanPham = DB::table('san_pham')->get();

        return view('Admin.Import.index', [
            'nhapKho' => $nhapKho,
            'nhaPhanPhoi' => $nhaPhanPhoi,
            'nhanVien' => $nhanVien,
            'sanPham' => $sanPham,
            "searchName" => $searchName,
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
        $validated = $request->validate([
            'maNPP' => 'required',
            'ngayNhap' => 'required|date',
            'maNV' => 'required',
            'maSP' => 'required',
            'soLuong.*' => 'required|numeric|min:1',
            'giaNhap.*' => 'required|numeric|min:0',
        ]);
        //Nhập kho
        $NK = new ImportModel();
        $NK->maNPP = $request->get('maNPP');
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $NK->ngayNhap = date('Y-m-d H:i:s');
        $NK->maNV = $request->get('maNV');
        $NK->save();
        //Nhập kho chi tiết
        for($i = 0; $i < sizeof($request->get('maSP')); $i++){
            try{
                $NKCT = new ImportDetailModel();
                $NKCT->maNK = $NK->maNK;
                $NKCT->maSP = $request->get('maSP')[$i];
                $NKCT->soLuong = $request->get('soLuong')[$i];
                $NKCT->giaNhap = $request->get('giaNhap')[$i];
    
                $NKCT->save();

                $sanPham = ProductModel::find($NKCT->maSP);
                $sanPham->soLuong += $NKCT->soLuong;
                $sanPham->save();

            }catch(Exception $e){
                $NKCT = ImportDetailModel::where('maNK', '=', $NK->maNK);
                $NKCT->delete();
                $NK = ImportModel::find($NK->maNK);
                $NK->delete();
                return back()->with('delete', "Trùng lặp sản phẩm");
            }
        }
        return redirect(route('import.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sanPham = DB::table('san_pham')->get();

        $nhapKhoChiTiet = ImportDetailModel::where('maNK', '=', $id)->paginate(10);
        
        $tongTien = DB::select("
            SELECT SUM(giaNhap*soLuong) AS tong FROM nhap_kho_chi_tiet
            WHERE maNK = $id
        ")[0];

        return view('Admin.Import.detail', [
            'nhapKhoChiTiet' => $nhapKhoChiTiet,
            'tongTien' => $tongTien,
            'sanPham' => $sanPham,
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
        $NK = ImportModel::find($id);
        $NK->delete();

        return redirect(route('import.index'));
    }

    public function get($maNPP){
        $listSP = DB::table('san_pham')->where('maNPP', '=', $maNPP)->get();
        
        return response()->json($listSP);
    }

    public function excel(Request $request){
        $this->validate($request, [
            'file-excel' => 'required|mimes:xls,xlsx'
        ]);

        $file = $request->file('file-excel');
        Excel::import(new StockImport, $file);
        return back()->with('success', "File imported successfully");
    }
}
