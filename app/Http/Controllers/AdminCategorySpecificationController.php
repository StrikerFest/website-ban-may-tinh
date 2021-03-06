<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\SpecificationModel;
use App\Models\CategorySpecificationModel;

class AdminCategorySpecificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($maTL)
    {
        $theLoai = CategoryModel::find($maTL);

        $thongSo = SpecificationModel::all();
        
        $theLoaiThongSo = CategorySpecificationModel::
            join('thong_so', 'thong_so.maTS', '=', 'the_loai_thong_so.maTS')
            ->where('the_loai_thong_so.maTL', '=', $maTL)
            ->get();
            
        return view('Admin.Category.categorySpecification', [
            'theLoai' => $theLoai,
            'thongSo' => $thongSo,
            'theLoaiThongSo' => $theLoaiThongSo,
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
            'maTL' => 'required',
            'maTS' => 'required|unique:App\Models\CategorySpecificationModel,maTS,NULL,id,maTL,'.$request->maTL,
        ]);

        $maTL = $request->get('maTL');
        for($i = 0; $i < sizeof($request->get('maTS')); $i++){
            $TLTS = new CategorySpecificationModel();
            $TLTS->maTL = $request->get('maTL');
            $TLTS->maTS = $request->get('maTS')[$i];
            $TLTS->save();

        }

        return redirect(route('categorySpecification.index', $maTL));
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
        $TLTS = CategorySpecificationModel::find($id);
        
        $thongSo = SpecificationModel::get();
        
        $maTL = $TLTS->maTL;
        $theLoai = CategoryModel::find($maTL);
        
        return view('Admin.Category.specificationEdit', [
            'theLoai' => $theLoai,
            'thongSo' => $thongSo,
            "TLTS" => $TLTS,
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
            'maTL' => 'required',
            'maTS' => 'required|unique:App\Models\CategorySpecificationModel,maTS,.$id.',
        ]);

        $TLTS = CategorySpecificationModel::find($id);
        $TLTS->maTS = $request->get('maTS');

        $maTL = $TLTS->maTL;
        
        $TLTS->save();
        return redirect(route('categorySpecification.index', $maTL));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $theLoaiThongSo = CategorySpecificationModel::find($id);
        $maTL = $theLoaiThongSo->maTL;
        $theLoaiThongSo->delete();

        return redirect(route('categorySpecification.index', $maTL));
    }
}
