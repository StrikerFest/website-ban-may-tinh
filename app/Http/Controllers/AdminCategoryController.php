<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\CategoryModel;
use Exception;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchName = $request->get('searchName');

        $theLoai = CategoryModel::where('tenTL', 'like', "%$searchName%")
        ->orderBy('maTL', 'desc')
        ->paginate(5)
        ->appends(['searchName' => $searchName]);

        return view('Admin.Category.index', [
            "theLoai" => $theLoai,
            "searchName" => $searchName,
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
            'tenTL' => 'required|min:3|unique:App\Models\CategoryModel,tenTL'
        ]);

        $theLoai = new CategoryModel();
        $theLoai->tenTL = $request->get('tenTL');
        $theLoai->save();

        return redirect(route('category.index'));
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
        $TL = CategoryModel::find($id);
        
        return view('Admin.Category.edit', [
            "TL" => $TL,
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
            'tenTL' => 'required|min:3|unique:App\Models\CategoryModel,tenTL'
        ]);
        
        $TL = CategoryModel::find($id);
        $TL->tenTL = $request->get('tenTL');
        
        $TL->save();
        return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $theLoai = CategoryModel::find($id);
        try{
            $theLoai->delete();
            return redirect(route('category.index'));
        }catch(Exception $e){
            return back()->with('delete', "Xung đột khoá ngoại!");
        }
        
    }
}
