<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductStatusModel;
use Exception;

class AdminProductStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TTSP = ProductStatusModel::orderBy('maTTSP', 'desc')->paginate(5);

        return view('Admin.Status.Product.index', [
            "TTSP" => $TTSP,
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
            'tenTTSP' => 'required|min:3|unique:App\Models\ProductStatusModel,tenTTSP',
        ]);

        $TTSP = new ProductStatusModel();
        $TTSP->tenTTSP = $request->get('tenTTSP');

        $TTSP->save();
        return redirect(route('productStatus.index'));
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
        $TTSP = ProductStatusModel::find($id);
        
        return view('Admin.Status.Product.edit', [
            "TTSP" => $TTSP,
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
            'tenTTSP' => 'required|min:3|unique:App\Models\ProductStatusModel,tenTTSP',
        ]);
        
        $TTSP = ProductStatusModel::find($id);
        $TTSP->tenTTSP = $request->get('tenTTSP');

        $TTSP->save();
        return redirect(route('productStatus.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $TTSP = ProductStatusModel::find($id);
        try{
            $TTSP->delete();
            return redirect(route('productStatus.index'));
        }catch(Exception $e){
            return back()->with('delete', "Xung đột khoá ngoại!");
        }
    }
}
