<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PromotionModel;
use App\Models\ProductModel;

class AdminPromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($maSP)
    {
        $sanPham = ProductModel::find($maSP);
        
        $khuyenMai = PromotionModel::where('maSP', '=', $maSP)->get();
        
        return view('Admin.Product.promotion', [
            'sanPham' => $sanPham,
            'khuyenMai' => $khuyenMai,
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
            'khuyenMai' => 'required',
        ]);
        $maSP = $request->get('maSP');
        for($i = 0; $i < sizeof($request->get('khuyenMai')); $i++){
            $KM = new PromotionModel();
            $KM->maSP = $request->get('maSP');
            $KM->khuyenMai = $request->get('khuyenMai')[$i];

            $KM->save();
        };
        
        return redirect(route('promotion.index', $maSP));
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
        $khuyenMai = PromotionModel::find($id);
        
        return view('Admin.Product.promotionEdit', [
            'khuyenMai' => $khuyenMai,
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
            'khuyenMai' => 'required'
        ]);

        $khuyenMai = PromotionModel::find($id);
        $khuyenMai->khuyenMai = $request->get('khuyenMai');
        $khuyenMai->save();
        $maSP = $khuyenMai->maSP;

        return redirect(route('promotion.index', $maSP));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $khuyenMai = PromotionModel::find($id);
        $maSP = $khuyenMai->maSP;
        $khuyenMai->delete();

        return redirect(route('promotion.index', $maSP));
    }
}
