<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\SubCategoryModel;

class AdminSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($maTL)
    {
        $theLoai = CategoryModel::find($maTL);

        $theLoaiCon = SubCategoryModel::where('maTL', '=', $maTL)->paginate(5);

        return view('Admin.Category.subCategory', [
            'theLoai' => $theLoai,
            'theLoaiCon' => $theLoaiCon,
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
            'tenTLC' => 'required|unique:App\Models\SubCategoryModel,tenTLC',
        ]);

        $theLoaiCon = new SubCategoryModel();
        $theLoaiCon->maTL = $request->get('maTL');
        $theLoaiCon->tenTLC = $request->get('tenTLC');

        $theLoaiCon->save();
        $maTL = $request->get('maTL');

        return redirect(route('subCategory.index', $maTL));
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
        $TLC = SubCategoryModel::find($id);

        return view('Admin.Category.subCategoryEdit', [
            'TLC' => $TLC,
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
            'tenTLC' => 'required|unique:App\Models\SubCategoryModel,tenTLC,'. $id,
        ]);

        $theLoaiCon = SubCategoryModel::find($id);
        $theLoaiCon->maTL = $request->get('maTL');
        $theLoaiCon->tenTLC = $request->get('tenTLC');

        $theLoaiCon->save();
        $maTL = $request->get('maTL');

        return redirect(route('subCategory.index', $maTL));        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $TLC = SubCategoryModel::find($id);
        $TLC->delete();
        $maTL = $TLC->maTL;
        return redirect(route('subCategory.index', $maTL));
    }
}
