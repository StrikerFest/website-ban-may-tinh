<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductStatusModel;

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
        $TTSP->delete();

        return redirect(route('productStatus.index'));
    }
}
