<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCommentModel;
use DB;

class AdminProductCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $binhLuanSanPham = ProductCommentModel::orderBy('ngayTao', 'DESC')
            ->where('maBLC', null)
            ->paginate(10);

        $nguoiDung = DB::table('nguoi_dung')->get();

        return view('Admin.Comment.Product.index', [
            'binhLuanSanPham' => $binhLuanSanPham,
            'nguoiDung' => $nguoiDung,
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
        $binhLuanSanPham = ProductCommentModel::find($id);

        $ND = DB::table('nguoi_dung')->where('maND', '=', $binhLuanSanPham->maND)->get()[0];

        $phanHoiSanPham = ProductCommentModel::where('maBLC', '=' , $id)->orderBy('ngayTao', 'DESC')->paginate(10);

        $nguoiDung = DB::table('nguoi_dung')->get();
        return view('Admin.Comment.Product.reply', [
            'binhLuanSanPham' => $binhLuanSanPham,
            'ND' => $ND,
            'phanHoiSanPham' => $phanHoiSanPham,
            'nguoiDung' =>$nguoiDung,
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
        $BL = ProductCommentModel::find($id);
        $BL->delete();

        return redirect()->back();
    }
}
