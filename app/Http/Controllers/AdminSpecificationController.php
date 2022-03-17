<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpecificationModel;

class AdminSpecificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thongSo = SpecificationModel::orderBy('maTS', 'desc')->paginate(5);

        return view('Admin.Specification.index', [
            'thongSo' => $thongSo,
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
        $thongSo = new SpecificationModel();
        $thongSo->tenTS = $request->get('tenTS');
        $thongSo->save();

        return redirect(route('specification.index'));
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
        $TS = SpecificationModel::find($id);
        
        return view('Admin.Specification.edit', [
            "TS" => $TS,
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
        $TS = SpecificationModel::find($id);
        $TS->tenTS = $request->get('tenTS');

        $TS->save();
        return redirect(route('specification.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thongSo = SpecificationModel::find($id);
        $thongSo->delete();

        return redirect(route('specification.index'));
    }
}
