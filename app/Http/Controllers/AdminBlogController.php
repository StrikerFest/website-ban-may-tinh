<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;
use App\Models\UserModel;
use App\Models\BlogContentModel;
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

        // $tinhTrangBaiViet = BlogStatusModel::all();

        $baiViet = BlogModel::where('tenBV', 'like', "%$searchName%")
            ->whereBetween('ngayTao', [$NBD, $NKT])
            ->paginate(5)
            ->appends([
                "searchName" => $searchName,
                "NBD" => $NBD,
                "NKT" => $NKT,
            ]);

        return view('Admin.Blog.index', [
            "nhanVien" => $nhanVien,
            // "tinhTrangBaiViet" => $tinhTrangBaiViet,
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
            'tenBV' => 'required|min:3',
            'anh.*' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp',
            'maNV' => 'required',
            'ngayTao' => 'required|date',
            'theLoai' => 'required',
            // 'noiDung.*' => 'min:5',
            // 'tieuDe.*' => 'min:3',
            // 'maTTBV' => 'required',
        ]);
        // dd($request->tenBV, $request->theLoai, $request->noiDung, $request->tieuDe, $request->anh);

        $baiViet = new BlogModel();
        $baiViet->tenBV = $request->get('tenBV');
        $baiViet->maNV = $request->get('maNV');
        $baiViet->theLoai = $request->get('theLoai');
        $baiViet->ngayTao = $request->get('ngayTao');
        $baiViet->save();
        
        for($i=0; $i<sizeof($request->tieuDe); $i++){
            $NDBV = new BlogContentModel();
            $NDBV->maBV = $baiViet->maBV;
            $NDBV->tieuDe = $request->tieuDe[$i];
            $NDBV->noiDung = $request->noiDung[$i];
            if(isset($request->file('anh')[$i])){
                $path = $request->file('anh')[$i]->store('img');
                $NDBV->anh = explode("/", $path)[1];
            }
            $NDBV->save();
        }

        
        // $baiViet->maTTBV = $request->get('maTTBV');
        

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
        $NDBV = BlogContentModel::where('maBV', $id)->paginate(5);

        return view('Admin.Blog.show', [
            'NDBV' => $NDBV,
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
        $BV = BlogModel::find($id);
        $BV->ngayTao = date_format(date_create($BV->ngayTao),"Y-m-d");

        $nhanVien = UserModel::join('chuc_vu', 'chuc_vu.maCV', '=', 'nguoi_dung.maCV')
            ->join('chuc_vu_quyen_han', 'chuc_vu_quyen_han.maCV', '=', 'chuc_vu.maCV')
            ->where('chuc_vu_quyen_han.maQH', '=', '5')
            ->get();

        // $tinhTrangBaiViet = BlogStatusModel::all();

        return view('Admin.Blog.edit', [
            'BV' => $BV,
            'nhanVien' => $nhanVien,
            // 'tinhTrangBaiViet' => $tinhTrangBaiViet,
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
            'tenBV' => 'required|min:3',
            // 'anh' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp',
            'maNV' => 'required',
            'ngayTao' => 'required|date',
            // 'noiDung' => 'required|min:5',
            // 'maTTBV' => 'required',
        ]);

        $BV = BlogModel::find($id);
        $BV->tenBV = $request->get('tenBV');
        $BV->maNV = $request->get('maNV');
        $BV->ngayTao = date_create($request->get('ngayTao'));
        // $BV->maTTBV = $request->get('maTTBV');

        // if(!is_null($request->file('anh'))){
        //     $oldPath = public_path('assets/img/'.$BV->anh);
        //     if(File::exists($oldPath)){
        //         File::delete($oldPath);
        //     }

        //     $path = $request->file('anh')->store('img');
        //     $BV->anh = explode("/", $path)[1];
        // }
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
        $NDBV = BlogContentModel::where('maBV', $id)->get();
        $NDBV->each(function($record){
            $path = public_path('assets/img/'.$record->anh);
            if(File::exists($path)){
                File::delete($path);
            }
            $record->delete();
        });

        $BV->delete();
        
        return redirect(route('blog.index'));
    }

    public function storeContent(Request $request, $id)
    {
        $validated = $request->validate([
            'anh.*' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp',
            'noiDung.*' => 'min:5',
            'tieuDe.*' => 'min:3',
        ]);

        
        for($i=0; $i<sizeof($request->tieuDe); $i++){
            $NDBV = new BlogContentModel();
            $NDBV->maBV = $id;
            $NDBV->tieuDe = $request->tieuDe[$i];
            $NDBV->noiDung = $request->noiDung[$i];
            if(isset($request->file('anh')[$i])){
                $path = $request->file('anh')[$i]->store('img');
                $NDBV->anh = explode("/", $path)[1];
            }
            $NDBV->save();
        }

        return redirect(route('blog.show', $id));
    }

    public function editContent($id)
    {
        $NDBV = BlogContentModel::find($id);

        return view('Admin.Blog.editContent', [
            'NDBV' => $NDBV,
        ]);
    }

    public function updateContent(Request $request, $id)
    {
        $validated = $request->validate([
            'anh' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp',
            'noiDung' => 'min:5',
            'tieuDe' => 'min:4',
        ]);

        $NDBV = BlogContentModel::find($id);
        $maBV = $NDBV->maBV;
        $NDBV->noiDung = $request->get('noiDung');
        $NDBV->tieuDe = $request->get('tieuDe');
        if(!is_null($request->file('anh'))){
            $oldPath = public_path('assets/img/'.$NDBV->anh);
            if(File::exists($oldPath)){
                File::delete($oldPath);
            }

            $path = $request->file('anh')->store('img');
            $NDBV->anh = explode("/", $path)[1];
        }

        $NDBV->save();
        return redirect(route('blog.show', $maBV));
    }

    public function deleteContent($id)
    {
        $NDBV = BlogContentModel::find($id);

        $path = public_path('assets/img/'.$NDBV->anh);
        if(File::exists($path)){
            File::delete($path);
        }
        $NDBV->delete();

        return back();
    }
}
