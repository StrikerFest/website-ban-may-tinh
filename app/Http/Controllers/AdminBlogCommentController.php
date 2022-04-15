<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCommentModel;
use DB;

class AdminBlogCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $binhLuanBaiViet = BlogCommentModel::orderBy('ngayTao', 'DESC')
            ->where('maBLC', null)
            ->get();

        $nguoiDung = DB::table('nguoi_dung')->get();

        return view('Admin.Comment.Blog.index', [
            'binhLuanBaiViet' => $binhLuanBaiViet,
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
        $binhLuanBaiViet = BlogCommentModel::find($id);

        $ND = DB::table('nguoi_dung')->where('maND', '=', $binhLuanBaiViet->maND)->get()[0];

        $phanHoiBaiViet = BlogCommentModel::where('maBLC', '=' , $id)->orderBy('ngayTao', 'DESC')->get();

        $nguoiDung = DB::table('nguoi_dung')->get();
        return view('Admin.Comment.Blog.reply', [
            'binhLuanBaiViet' => $binhLuanBaiViet,
            'ND' => $ND,
            'phanHoiBaiViet' => $phanHoiBaiViet,
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
        $BL = BlogCommentModel::find($id);
        $BL->delete();

        return redirect()->back();
    }
}
