<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VoucherModel;
use DB;
use Exception;
use App\Imports\VoucherImport;
use Excel;

class AdminVoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchName = $request->get('searchName');
        $searchValue = $request->get('searchValue');
        $searchType = $request->get('searchType');

        $Voucher = VoucherModel::select(['voucher.*'])
            ->join('the_loai_voucher', 'the_loai_voucher.maTLV', '=', 'voucher.maTLV')
            ->leftJoin('san_pham_voucher', 'san_pham_voucher.maVoucher', '=', 'voucher.maVoucher')
            ->leftJoin('san_pham', 'san_pham.maSP', '=', 'san_pham_voucher.maSP')
            ->where('tenVoucher', 'like', "%$searchName%")
            ->where('giaTri', 'like', "%$searchValue%")
            ->where('tenTLV', 'like', "%$searchType%")
            ->groupBy('tenVoucher')
            ->orderBy('voucher.maVoucher', 'desc')
            ->paginate(5)
            ->appends([
                'searchName' => $searchName,
                'searchValue' => $searchValue,
                'searchType' => $searchType,
            ]);
        // dd($Voucher);
        $TangPham = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
            ->where('the_loai_con.tenTLC', 'like', 'Tặng phẩm')
            ->get();

        $TheLoaiVoucher = DB::table('the_loai_voucher')->get();
        // dd($Voucher);
        return view('Admin.Voucher.index', [
            'Voucher' => $Voucher,
            'TheLoaiVoucher' => $TheLoaiVoucher,
            'TangPham' => $TangPham,
            'searchName' => $searchName,
            'searchValue' => $searchValue,
            'searchType' => $searchType,
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
            'tenVoucher' => 'required|min:5|unique:App\Models\VoucherModel,tenVoucher',
            'maTLV' => 'required',
            'giaTri' => 'required|numeric|min:0',
            'soLuong' => 'required|numeric|min:0',
        ]);

        $V = new VoucherModel();
        $V->tenVoucher = $request->get('tenVoucher');
        $V->maTLV = $request->get('maTLV');
        $V->giaTri = $request->get('giaTri');
        $V->soLuong = $request->get('soLuong');
        $V->maSP = $request->get('maTLV') == 3 ? $request->get('maSP') : null;
        $V->save();

        return redirect(route('voucher.index'));
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
        $Voucher = VoucherModel::find($id);

        $TangPham = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
            ->where('the_loai_con.tenTLC', 'like', 'Tặng phẩm')
            ->get();

        $TheLoaiVoucher = DB::table('the_loai_voucher')->get();
        
        return view('Admin.Voucher.edit', [
            'Voucher' => $Voucher,
            'TangPham' => $TangPham,
            'TheLoaiVoucher' => $TheLoaiVoucher,
        ]);
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
        $validated = $request->validate([
            'tenVoucher' => 'required|min:5|unique:App\Models\VoucherModel,tenVoucher,'. $id,
            'maTLV' => 'required',
            'giaTri' => 'required|numeric|min:0',
            'soLuong' => 'required|numeric|min:0',
        ]);

        $V = VoucherModel::find($id);
        $V->tenVoucher = $request->get('tenVoucher');
        $V->maTLV = $request->get('maTLV');
        $V->giaTri = $request->get('giaTri');
        $V->soLuong = $request->get('soLuong');
        $V->maSP = $request->get('maTLV') == 3 ? $request->Get('maSP') : null;
        $V->save();

        return redirect(route('voucher.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $voucher = VoucherModel::find($id);
        try{
            $voucher->delete();
            return redirect(route('voucher.index'));
        }catch(Exception $e){
            return back()->with('delete', "Xung đột khoá ngoại!");
        }
    }

    public function getGiftValue($maSP)
    {
        $giaTri = DB::table('san_pham')->where('maSP', $maSP)->get('giaSP');

        return response()->json($giaTri);
    }

    public function excel(Request $request){
        $this->validate($request, [
            'file-excel' => 'required|mimes:xls,xlsx'
        ]);

        $file = $request->file('file-excel');
        Excel::import(new VoucherImport, $file);
        return back()->with('success', "File imported successfully");
    }

    public function sample(){
        $path = public_path('excel_sample\voucher-sample.xlsx');
        return response()->download($path);
    }
}
