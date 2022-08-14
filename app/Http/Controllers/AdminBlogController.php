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
    public function index(Request $request)
    {
        $validated = $request->validate([
            'NKT' => 'before_or_equal:' . Date('Y-m-d'),
            'NBD' => 'before_or_equal:' . Date('Y-m-d'),
        ]);

        $searchName = $request->get('searchName');
        //lấy ngày tạo nhỏ nhất của bảng blog
        $start = date_format(date_create(BlogModel::get('ngayTao')->min('ngayTao')),"Y-m-d");
        //lấy ngày hiện tại
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $end = date('Y-m-d');
        
        $NBD = is_null($request->get('NBD')) ? $start : $request->get('NBD');
        $NKT = is_null($request->get('NKT')) ? $end : $request->get('NKT');
        
        if($NBD > $NKT){
            $temp = $NBD;
            $NBD = $NKT;
            $NKT = $temp;
        }

        $NKTquery = strtotime($NKT)+23*60*60+59*60+59;
        $NKTquery = date('Y-m-d H:i:s', $NKTquery);


        $nhanVien = UserModel::all();

        $tinhTrangBaiViet = BlogStatusModel::all();

        $baiViet = BlogModel::where('tieuDe', 'like', "%$searchName%")
            ->whereBetween('ngayTao', [$NBD, $NKT])
            ->paginate(5)
            ->appends([
                "searchName" => $searchName,
                "NBD" => $NBD,
                "NKT" => $NKT,
            ]);

        return view('Admin.Blog.index', [
            "nhanVien" => $nhanVien,
            "tinhTrangBaiViet" => $tinhTrangBaiViet,
            "baiViet" => $baiViet,
            "searchName" => $searchName,
            "NBD" => $NBD,
            "NKT" => $NKT,
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
            'tieuDe' => 'required|min:3',
            'anh' => 'required|mimes:jpg,jpeg,png,bmp,gif,svg,webp',
            'maNV' => 'required',
            'ngayTao' => 'required|date',
            'noiDung' => 'required|min:5',
            'maTTBV' => 'required',
        ]);

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
        $validated = $request->validate([
            'tieuDe' => 'required|min:3',
            'anh' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp',
            'maNV' => 'required',
            'ngayTao' => 'required|date',
            'noiDung' => 'required|min:5',
            'maTTBV' => 'required',
        ]);

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
        }
        $BV->delete();
        
        return redirect(route('blog.index'));
    }
}
