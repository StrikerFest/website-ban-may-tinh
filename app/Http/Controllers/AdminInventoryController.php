<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use DB;

class AdminInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchName = $request->get('searchName');
        $searchSupplier = $request->get('searchSupplier');
        $searchSubCategory = $request->get('searchSubCategory');

        $sanPham = ProductModel::select(['san_pham.*'])
            ->leftJoin('san_pham_nha_phan_phoi', 'san_pham_nha_phan_phoi.maSP', '=', 'san_pham.maSP')
            ->leftJoin('nha_phan_phoi', 'nha_phan_phoi.maNPP', '=', 'san_pham_nha_phan_phoi.maNPP')
            ->join('the_loai_con', 'the_loai_con.maTLC', '=', 'san_pham.maTLC')
            ->where('tenSP', 'like', "%$searchName%")
            ->where('tenTLC', 'like', "%$searchSubCategory%")
            ->where('tenNPP', 'like', "%$searchSupplier%")
            ->orWhereNull('tenNPP')
            ->orderBy('soLuong', 'ASC')
            ->groupBy('san_pham.maSP')
            ->paginate(10)
            ->appends([
                'searchName' => $searchName,
                'searchSupplier' => $searchSupplier,
                'searchSubCategory' => $searchSubCategory,
            ]);
        // dd($sanPham);
        $nhaPhanPhoi = DB::table('nha_phan_phoi')->get();

        $theLoaiCon = DB::table('the_loai_con')->get();

        return view('Admin.Inventory.index', [
            'sanPham' => $sanPham,
            'nhaPhanPhoi' => $nhaPhanPhoi,
            'theLoaiCon' => $theLoaiCon,
            'searchName' => $searchName,
            "searchSupplier" => $searchSupplier,
            "searchSubCategory" => $searchSubCategory,
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
    public function show($maSP)
    {
        $sanPham = DB::table('san_pham')
            ->join('nhap_kho_chi_tiet', 'nhap_kho_chi_tiet.maSP', '=', 'san_pham.maSP')
            ->join('nhap_kho', 'nhap_kho.maNK', '=', 'nhap_kho_chi_tiet.maNK')
            ->leftJoin('nha_phan_phoi', 'nha_phan_phoi.maNPP', '=', 'nhap_kho.maNPP')
            ->where('san_pham.maSP', '=', $maSP)
            ->orderBy('nhap_kho.ngayNhap', 'DESC')
            ->paginate(10);
        // dd($sanPham);
        $tenSP = ProductModel::find($maSP)->tenSP;
        // dd($tenSP);
        return view('Admin.Inventory.detail', [
            'tenSP' => $tenSP,
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
        //
    }
}
