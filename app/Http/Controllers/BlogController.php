<?php

namespace App\Http\Controllers;

use App\Models\BlogCommentModel;
use App\Models\BlogModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listNhaSanXuat = DB::table('nha_san_xuat')->skip(0)->take(7)->get();
        $cartItems = \Cart::getContent();
        $listTheLoaiMayTinhBan = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Máy tính bàn')->get();
        $listTheLoaiLaptop = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Laptop')->get();
        $listTheLoaiLinhKien = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Linh kiện')->get();
        $listTheLoaiPhuKien = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Phụ kiện')->get();
        $listTheLoaiManHinh = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Màn hình')->get();
        $listTheLoaiSidenav = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->get();

        $listTheLoaiCha = DB::table('the_loai')->get();

        $listBlog = DB::table('bai_viet')->get();
        // dd($cartItems);
        return view('Customer.Blog.index', [
            'cartItems' =>  $cartItems,
            'listTheLoaiCha' =>  $listTheLoaiCha,
            'listNhaSanXuat' =>  $listNhaSanXuat,
            'listTheLoaiLaptop' =>  $listTheLoaiLaptop,
            'listTheLoaiMayTinhBan' =>  $listTheLoaiMayTinhBan,
            'listTheLoaiLinhKien' =>  $listTheLoaiLinhKien,
            'listTheLoaiPhuKien' =>  $listTheLoaiPhuKien,
            'listTheLoaiManHinh' =>  $listTheLoaiManHinh,
            'listBlog' =>  $listBlog,
            'listTheLoaiSidenav' =>  $listTheLoaiSidenav,
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
        $listNhaSanXuat = DB::table('nha_san_xuat')->skip(0)->take(7)->get();
        $cartItems = \Cart::getContent();
        $listTheLoaiMayTinhBan = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Máy tính bàn')->get();
        $listTheLoaiLaptop = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Laptop')->get();
        $listTheLoaiLinhKien = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Linh kiện')->get();
        $listTheLoaiPhuKien = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Phụ kiện')->get();
        $listTheLoaiManHinh = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Màn hình')->get();
        $listTheLoaiSidenav = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->get();

        $listTheLoaiCha = DB::table('the_loai')->get();
        // dd($cartItems);
        $listNguoiDung = UserModel::get();
        $baiViet = BlogModel::findOrFail($id);
        $blogComment = BlogCommentModel::where('maBLC','!=',null)->get();
        $blogCommentMain = BlogCommentModel::where('maBLC',null)->get();
        return view('Customer.Blog.show', [
            'cartItems' =>  $cartItems,
            'baiViet' =>  $baiViet,
            'blogComment' =>  $blogComment,
            'blogCommentMain' =>  $blogCommentMain,
            'listNguoiDung' =>  $listNguoiDung,
            'listTheLoaiCha' =>  $listTheLoaiCha,
            'listNhaSanXuat' =>  $listNhaSanXuat,
            'listTheLoaiLaptop' =>  $listTheLoaiLaptop,
            'listTheLoaiMayTinhBan' =>  $listTheLoaiMayTinhBan,
            'listTheLoaiLinhKien' =>  $listTheLoaiLinhKien,
            'listTheLoaiPhuKien' =>  $listTheLoaiPhuKien,
            'listTheLoaiManHinh' =>  $listTheLoaiManHinh,
            'listTheLoaiSidenav' =>  $listTheLoaiSidenav,
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
