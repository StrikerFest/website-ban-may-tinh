<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\SpecificationModel;
use App\Models\ProductSpecificationModel;
use App\Models\SubCategoryModel;
use Exception;

class AdminProductSpecificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($maSP)
    {
        $sanPham = ProductModel::find($maSP);

        $maTLC = $sanPham->maTLC;

        $maTL = SubCategoryModel::find($maTLC)->maTL;

        $thongSo = SpecificationModel::
            join('the_loai_thong_so', 'the_loai_thong_so.maTS', '=', 'thong_so.maTS')
            ->where('the_loai_thong_so.maTL', '=' , $maTL)
            ->get();
        
        $sanPhamThongSo = ProductSpecificationModel::
            join('thong_so', 'thong_so.maTS', '=', 'san_pham_thong_so.maTS')
            ->where('san_pham_thong_so.maSP', '=', $maSP)
            ->get();

        return view('Admin.Product.productSpecification', [
            'sanPham' => $sanPham,
            'thongSo' => $thongSo,
            'sanPhamThongSo' => $sanPhamThongSo,
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
            'maSP' => 'required',
            //Validate two columns unique constraint:
            //unique:table,column,except,idColumn,extraColumn,extraColumnValue
            'maTS' => 'required|unique:App\Models\ProductSpecificationModel,maTS,NULL,id,maSP,'.$request->maSP,
            'giaTri.*' => 'required|min:1',
        ]);
        $maSP = $request->get('maSP');
        try{
            for($i = 0; $i < sizeof($request->get('maTS')); $i++){
                $SPTS = new ProductSpecificationModel();
                $SPTS->maSP = $request->get('maSP');
                $SPTS->maTS = $request->get('maTS')[$i];
                $SPTS->giaTri = $request->get('giaTri')[$i];
    
                $SPTS->save();
            };
        }catch(Exception $e){
            return back()->with('duplicate', "Lỗi trùng lặp");
        }

        return redirect(route('productSpecification.index', $maSP));
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
        $SPTS = ProductSpecificationModel::find($id);

        $maTS = $SPTS->maTS;
        $thongSo = SpecificationModel::find($maTS);

        $maSP = $SPTS->maSP;
        $sanPham = ProductModel::find($maSP);

        return view('Admin.Product.productSpecificationEdit', [
            'SPTS' => $SPTS,
            'thongSo' => $thongSo,
            'sanPham' => $sanPham,
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
            'maSP' => 'required',
            'maTS' => 'required|unique:App\Models\ProductSpecificationModel,maTS,NULL,id,maSP,'.$request->maSP,
            'giaTri' => 'required|min:1',
        ]);
        
        $SPTS = ProductSpecificationModel::find($id);
        $SPTS->maSP = $request->get('maSP');
        $SPTS->maTS = $request->get('maTS');
        $SPTS->giaTri = $request->get('giaTri');
        $maSP = $SPTS->maSP;
        
        $SPTS->save();
        return redirect(route('productSpecification.index', $maSP));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $SPTS = ProductSpecificationModel::find($id);
        $maSP = $SPTS->maSP;
        $SPTS->delete();

        return redirect(route('productSpecification.index', $maSP));
    }
}
