<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManufacturerModel;

class AdminManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchName = $request->get('searchName');

        $nhaSanXuat = ManufacturerModel::where('tenNSX', 'like', "%$searchName%")
        ->orderBy('maNSX', 'desc')
        ->paginate(5)
        ->appends(['searchName' => $searchName]);

        return view('Admin.Manufacturer.index', [
            "nhaSanXuat" => $nhaSanXuat,
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
        $validate = $request->validate([
            'tenNSX' => 'required|min:1|unique:App\Models\ManufacturerModel, tenNSX',
        ]);

        $nhaSanXuat = new ManufacturerModel();
        $nhaSanXuat->tenNSX = $request->get('tenNSX');
        $nhaSanXuat->save();

        return redirect(route('manufacturer.index'));
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
        $NSX = ManufacturerModel::find($id);
        
        return view('Admin.Manufacturer.edit', [
            "NSX" => $NSX,
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
        $validate = $request->validate([
            'tenNSX' => 'required|min:1|unique:App\Models\ManufacturerModel, tenNSX',
        ]);

        $NSX = ManufacturerModel::find($id);
        $NSX->tenNSX = $request->get('tenNSX');

        $NSX->save();
        return redirect(route('manufacturer.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nhaSanXuat = ManufacturerModel::find($id);
        $nhaSanXuat->delete();

        return redirect(route('manufacturer.index'));
    }
}
