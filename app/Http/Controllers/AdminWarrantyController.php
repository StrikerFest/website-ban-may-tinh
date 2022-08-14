<?php

namespace App\Http\Controllers;
use App\Models\WarrantyModel;

use Illuminate\Http\Request;
use Exception;

class AdminWarrantyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baoHanh = WarrantyModel::orderBy('maBH', 'DESC')->get();

        return view('Admin.Warranty.index', [
            'baoHanh' => $baoHanh,
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
            'tenBH' => 'required|unique:App\Models\WarrantyModel,tenBH',
            'giaTri' => 'numeric|required|min:0|unique:App\Models\WarrantyModel,giaTri',
        ]);

        $baoHanh = new WarrantyModel();
        $baoHanh->tenBH = $request->get('tenBH');
        $baoHanh->giaTri = $request->get('giaTri');
        $baoHanh->save();

        return redirect()->route('warranty.index');
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
        $baoHanh = WarrantyModel::find($id);
        
        return view('Admin.Warranty.edit', [
            'baoHanh' => $baoHanh,
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
            'tenBH' => 'required|unique:App\Models\WarrantyModel,tenBH,'.$id,
            'giaTri' => 'required|numeric|min:0|unique:App\Models\WarrantyModel,giaTri,'.$id,
        ]);

        $baoHanh = WarrantyModel::find($id);
        $baoHanh->tenBH = $request->get('tenBH');
        $baoHanh->giaTri = $request->get('giaTri');
        $baoHanh->save();

        return redirect()->route('warranty.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        // try{
        //     $baoHanh = WarrantyModel::find($id);
        //     $baoHanh->delete();
        // }catch(Exception $e){
        //     return back()->with('delete',' Xung đột khoá ngoại');
        // }
        // return redirect()->route('warranty.index');
    }
}
