<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerImageModel;
use File;

class AdminBannerImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anhQuangCao = BannerImageModel::paginate(5);

        return view('Admin.BannerImage.index', [
            'anhQuangCao' => $anhQuangCao,
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
            'anh' => 'required|mimes:jpg,jpeg,png,bmp,gif,svg,webp',
            'duongDan' => 'required',
        ]);

        $path = $request->file('anh')->store('img');
        $anhQuangCao = new BannerImageModel();
        $anhQuangCao->anh = explode("/", $path)[1];
        $anhQuangCao->duongDan = $request->get('duongDan');
        $anhQuangCao->save();

        return redirect(route('bannerImage.index'));
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
        $anhQuangCao = BannerImageModel::find($id);

        return view('Admin.BannerImage.edit', [
            'anhQuangCao' => $anhQuangCao,
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
            'anh' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp',
            'duongDan' => 'required',
        ]);

        //Xoá ảnh cũ khỏi public/assets/img
        $anhQuangCao = BannerImageModel::find($id);

        if(!is_null($request->file('anh'))){
            $oldPath = public_path('assets/img/'.$anhQuangCao->anh);
            if(File::exists($oldPath)){
                File::delete($oldPath);
            }

            $path = $request->file('anh')->store('img');
            $anhQuangCao->anh = explode("/", $path)[1];
        }
        $anhQuangCao->duongDan = $request->get('duongDan');
        $anhQuangCao->save();

        return redirect(route('bannerImage.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anhQuangCao = BannerImageModel::find($id);
        $path = public_path('assets/img/'.$anhQuangCao->anh);
        if(File::exists($path)){
            File::delete($path);
        }
        $anhQuangCao->delete();

        return redirect(route('bannerImage.index'));
    }
}
