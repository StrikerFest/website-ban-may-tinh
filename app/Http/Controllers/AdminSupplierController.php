<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SupplierModel;
use Exception;

class AdminSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchName = $request->get('searchName');

        $nhaPhanPhoi = SupplierModel::where('tenNPP', 'like', "%$searchName%")
            ->orderBy('maNPP', 'desc')
            ->paginate(5);
        return view('Admin.Supplier.index', [
            "nhaPhanPhoi" => $nhaPhanPhoi,
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
            'tenNPP' => 'required|min:3|unique:App\Models\SupplierModel,tenNPP',
            'diaChiNPP' => 'required|min:3',
            'soDienThoai' => 'required',
        ]);

        $NPP = new SupplierModel();
        $NPP->tenNPP = $request->get('tenNPP');
        $NPP->diaChiNPP = $request->get('diaChiNPP');
        $NPP->soDienThoai = $request->get('soDienThoai');
        $NPP->save();

        return redirect(route('supplier.index'));
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
        $nhaPhanPhoi = SupplierModel::find($id);

        return view('Admin.Supplier.edit', [
            'nhaPhanPhoi' => $nhaPhanPhoi,
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
            'tenNPP' => 'required|min:3|unique:App\Models\SupplierModel,tenNPP,'.$id,
            'diaChiNPP' => 'required|min:3',
            'soDienThoai' => 'required',
        ]);

        $NPP = SupplierModel::find($id);
        $NPP->tenNPP = $request->get('tenNPP');
        $NPP->diaChiNPP = $request->get('diaChiNPP');
        $NPP->soDienThoai = $request->get('soDienThoai');
        $NPP->save();

        return redirect(route('supplier.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $NPP = SupplierModel::find($id);
        try{
            $NPP->delete();
            return redirect(route('supplier.index'));
        }catch(Exception $e){
            return back()->with('delete', "Xung đột khoá ngoại!");
        }
    }
}
