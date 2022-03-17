<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;
use App\Models\UserModel;
use App\Models\BlogStatusModel;
use File;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nhanVien = UserModel::all();

        $tinhTrangBaiViet = BlogStatusModel::all();

        $baiViet = BlogModel::all();

        return view('Admin.Blog.index', [
            'nhanVien' => $nhanVien,
            'tinhTrangBaiViet' => $tinhTrangBaiViet,
            'baiViet' => $baiViet,
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
        $path = $request->file('anh')->store('img');
        $baiViet = new BlogModel();
        $baiViet->tieuDe = $request->get('tieuDe');
        $baiViet->anh = explode("/", $path)[1];
        $baiViet->maNV = $request->get('maNV');
        $baiViet->ngayTao = $request->get('ngayTao');
        $baiViet->noiDung = $request->get('noiDung');
        $baiViet->maTTBV = $request->get('maTTBV');
        $baiViet->save();

        return redirect(route('blog.index'));
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
        $BV = BlogModel::find($id);
        $BV->ngayTao = date_format(date_create($BV->ngayTao),"Y-m-d");

        $nhanVien = UserModel::join('chuc_vu', 'chuc_vu.maCV', '=', 'nguoi_dung.maCV')
            ->join('chuc_vu_quyen_han', 'chuc_vu_quyen_han.maCV', '=', 'chuc_vu.maCV')
            ->where('chuc_vu_quyen_han.maQH', '=', '5')
            ->get();

        $tinhTrangBaiViet = BlogStatusModel::all();

        return view('Admin.Blog.edit', [
            'BV' => $BV,
            'nhanVien' => $nhanVien,
            'tinhTrangBaiViet' => $tinhTrangBaiViet,
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
        $BV = BlogModel::find($id);
        $BV->tieuDe = $request->get('tieuDe');
        $BV->maNV = $request->get('maNV');
        $BV->ngayTao = date_create($request->get('ngayTao'));
        $BV->noiDung = $request->get('noiDung');
        $BV->maTTBV = $request->get('maTTBV');

        if(!is_null($request->file('anh'))){
            $oldPath = public_path('assets/img/'.$BV->anh);
            if(File::exists($oldPath)){
                File::delete($oldPath);
            }else{
                dd('File does not exists.');
            }

            $path = $request->file('anh')->store('img');
            $BV->anh = explode("/", $path)[1];
        }
        $BV->save();

        return redirect(route('blog.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $BV = BlogModel::find($id);
        $path = public_path('assets/img/'.$BV->anh);
        if(File::exists($path)){
            File::delete($path);
        }else{
            dd('File does not exists.');
        }
        $BV->delete();
        
        return redirect(route('blog.index'));
    }
}
