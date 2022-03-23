<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\ManufacturerModel;
use App\Models\SubCategoryModel;
use App\Models\ProductStatusModel;
use App\Models\PromotionModel;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nhaSanXuat = ManufacturerModel::get();

        $theLoaiCon = SubCategoryModel::get();

        $tinhTrangSanPham = ProductStatusModel::get();

        $sanPham = ProductModel::orderBy('maSP', 'desc')->paginate(5);
        
        return view('Admin.Product.index', [
            "nhaSanXuat" => $nhaSanXuat,
            "theLoaiCon" => $theLoaiCon,
            "tinhTrangSanPham" => $tinhTrangSanPham,
            "sanPham" => $sanPham,
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
            'soLuong' => 'required|numeric|min:0',
            'giamGia' => 'required|numeric|min:0',
            'maNSX' => 'required',
            'maTLC' => 'required',
            'maTTSP' => 'required',
        ]);

        $sanPham = new ProductModel();
        $sanPham->tenSP = $request->get('tenSP');
        $sanPham->giaSP = $request->get('giaSP');
        $sanPham->moTa = $request->get('moTa');
        $sanPham->soLuong = $request->get('soLuong');
        $sanPham->giamGia = $request->get('giamGia');
        $sanPham->maNSX = $request->get('maNSX');
        $sanPham->maTLC = $request->get('maTLC');
        $sanPham->maTTSP = $request->get('maTTSP');
        $sanPham->save();

        $khuyenMai = new PromotionModel();
        $khuyenMai->maSP = $sanPham->maSP;
        $khuyenMai->khuyenMai = "Sản phẩm chưa có khuyến mãi";
        $khuyenMai->save();

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

        $SP = ProductModel::find($id);
        
        return view('Admin.Product.edit', [
            "nhaSanXuat" => $nhaSanXuat,
            "theLoaiCon" => $theLoaiCon,
            "tinhTrangSanPham" => $tinhTrangSanPham,
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
            'soLuong' => 'required|numeric|min:0',
            'giamGia' => 'required|numeric|min:0',
            'maNSX' => 'required',
            'maTLC' => 'required',
            'maTTSP' => 'required',
        ]);
        
        $SP = ProductModel::find($id);
        $SP->tenSP = $request->get('tenSP');
        $SP->giaSP = $request->get('giaSP');
        $SP->moTa = $request->get('moTa');
        $SP->soLuong = $request->get('soLuong');
        $SP->giamGia = $request->get('giamGia');
        $SP->maNSX = $request->get('maNSX');
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
        $sanPham->delete();

        return redirect(route('admin.product.index'));
    }

    public function updateSpecial(Request $request, $id)
    {
        $sanPham = ProductModel::find($id);
        $sanPham->dacBiet = $request->get('dacBiet');
        $sanPham->save();

        return back();
    }
}
