<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\ManufacturerModel;
use App\Models\SubCategoryModel;
use App\Models\ProductStatusModel;
use App\Models\PromotionModel;
use App\Models\SupplierModel;
use Illuminate\Http\Request;
use Exception;
use Excel;
use App\Imports\ProductImport;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchName = $request->get('searchName');
        $searchManufacturer = $request->get('searchManufacturer');
        $searchSubCategory = $request->get('searchSubCategory');

        $nhaSanXuat = ManufacturerModel::get();

        $theLoaiCon = SubCategoryModel::get();

        $nhaPhanPhoi = SupplierModel::get();

        $tinhTrangSanPham = ProductStatusModel::get();
        // dd($searchName, $searchManufacturer, $searchSubCategory);
        $sanPham = ProductModel::join('nha_san_xuat', 'nha_san_xuat.maNSX', '=', 'san_pham.maNSX')
            ->join('the_loai_con', 'the_loai_con.maTLC', '=', 'san_pham.maTLC')
            ->where('tenSP', 'like', "%$searchName%")
            ->where('tenNSX', 'like', "%$searchManufacturer%")
            ->where('tenTLC', 'like', "%$searchSubCategory%")
            ->orderBy('maSP', 'desc')
            ->paginate(5)
            ->appends([
                'searchName' => $searchName,
                'searchManufacturer' => $searchManufacturer,
                'searchSubCategory' => $searchSubCategory,
            ]);
        
        return view('Admin.Product.index', [
            "nhaSanXuat" => $nhaSanXuat,
            "theLoaiCon" => $theLoaiCon,
            "tinhTrangSanPham" => $tinhTrangSanPham,
            "nhaPhanPhoi" => $nhaPhanPhoi,
            "sanPham" => $sanPham,
            "searchName" => $searchName,
            "searchManufacturer" => $searchManufacturer,
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
        $validated = $request->validate([
            'tenSP' => 'required|min:3|unique:App\Models\ProductModel,tenSP',
            'giaSP' => 'required|numeric|min:0',
            'moTa' => 'required|min:3',
            'giamGia' => 'required|numeric|min:0|max:100',
            'maNSX' => 'required',
            'maNPP' => 'required',
            'maTLC' => 'required',
            'maTTSP' => 'required',
        ]);

        $sanPham = new ProductModel();
        $sanPham->tenSP = $request->get('tenSP');
        $sanPham->giaSP = $request->get('giaSP');
        $sanPham->moTa = $request->get('moTa');
        $sanPham->giamGia = $request->get('giamGia');
        $sanPham->maNSX = $request->get('maNSX');
        $sanPham->maNPP = $request->get('maNPP');
        $sanPham->maTLC = $request->get('maTLC');
        $sanPham->maTTSP = $request->get('maTTSP');
        $sanPham->save();

        return redirect(route('admin.product.index'));
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
        $nhaSanXuat = ManufacturerModel::get();

        $theLoaiCon = SubCategoryModel::get();

        $tinhTrangSanPham = ProductStatusModel::get();

        $nhaPhanPhoi = SupplierModel::get();

        $SP = ProductModel::find($id);
        
        return view('Admin.Product.edit', [
            "nhaSanXuat" => $nhaSanXuat,
            "theLoaiCon" => $theLoaiCon,
            "tinhTrangSanPham" => $tinhTrangSanPham,
            "nhaPhanPhoi" => $nhaPhanPhoi,
            "SP" => $SP,
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
            'tenSP' => 'required|min:3|unique:App\Models\ProductModel,tenSP,'. $id,
            'giaSP' => 'required|numeric|min:0',
            'moTa' => 'required|min:3',
            'giamGia' => 'required|numeric|min:0|max:100',
            'maNSX' => 'required',
            'maNPP' => 'required',
            'maTLC' => 'required',
            'maTTSP' => 'required',
        ]);
        
        $SP = ProductModel::find($id);
        $SP->tenSP = $request->get('tenSP');
        $SP->giaSP = $request->get('giaSP');
        $SP->moTa = $request->get('moTa');
        $SP->giamGia = $request->get('giamGia');
        $SP->maNSX = $request->get('maNSX');
        $SP->maNPP = $request->get('maNPP');
        $SP->maTLC = $request->get('maTLC');
        $SP->maTTSP = $request->get('maTTSP');
        $SP->save();
        
        return redirect(route('admin.product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sanPham = ProductModel::find($id);
        try{
            $khuyenMai = PromotionModel::where('maSP', '=', $id);
            $khuyenMai->delete();
            $sanPham->delete();
            return redirect(route('admin.product.index'));
        }catch(Exception $e){
            return back()->with('delete', "Xung đột khoá ngoại!");
        }
    }

    public function updateSpecial(Request $request, $id)
    {
        $sanPham = ProductModel::find($id);
        $sanPham->dacBiet = $request->get('dacBiet');
        $sanPham->save();

        return back();
    }

    public function excel(Request $request){
        $this->validate($request, [
            'file-excel' => 'required|mimes:xls,xlsx'
        ]);

        $file = $request->file('file-excel');
        Excel::import(new ProductImport, $file);
        return back()->with('success', "File imported successfully");
    }
}
