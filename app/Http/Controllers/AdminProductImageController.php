<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\ProductImageModel;
use File;

class AdminProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($maSP)
    {
        $sanPham = ProductModel::find($maSP);

        $anhSP = ProductImageModel::where('maSP', '=', $maSP)->get();

        return view('Admin.ProductImage.index', [
            'sanPham' => $sanPham,
            'anhSP' => $anhSP,
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
        // $request->validate([
        //     'anh' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // ]);
        for($i = 0; $i < sizeof($request->file('anh')); $i++){
            $path = $request->file('anh')[$i]->store('img');
            $ASP = new ProductImageModel();
            $ASP->maSP = $request->get('maSP');
            $ASP->anh = explode("/", $path)[1];
            $ASP->save();

        }
        
        $maSP = $request->Get('maSP');
        return redirect(route('productImage.index', $maSP));
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
        $ASP = ProductImageModel::find($id);
        $SP = ProductModel::find($ASP->maSP);
        return view('Admin.ProductImage.edit',[
            'ASP' => $ASP,
            'SP' => $SP
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
        //Xoá ảnh cũ khỏi public/assets/img
        $ASP = ProductImageModel::find($id);

        if(!is_null($request->file('anh'))){
            $oldPath = public_path('assets/img/'.$ASP->anh);
            if(File::exists($oldPath)){
                File::delete($oldPath);
            }else{
                dd('File does not exists.');
            }

            $path = $request->file('anh')->store('img');
            $BV->anh = explode("/", $path)[1];
        }

        $ASP->maSP = $request->get('maSP');
        $maSP = $ASP->maSP;
        $ASP->save();

        return redirect(route('productImage.index', $maSP));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ASP = ProductImageModel::find($id);
        $maSP = $ASP->maSP;
        $path = public_path('assets/img/'.$ASP->anh);
        if(File::exists($path)){
            File::delete($path);
        }else{
            dd('File does not exists.');
        }
        $ASP->delete();

        return redirect(route('productImage.index', $maSP));
    }
}
