<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpecificationModel;
use Exception;

class AdminSpecificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchName = $request->get('searchName');

        $thongSo = SpecificationModel::where('tenTS', 'like', "%$searchName%")
        ->orderBy('maTS', 'desc')
        ->paginate(5)
        ->appends(['searchName' => $searchName]);

        return view('Admin.Specification.index', [
            'thongSo' => $thongSo,
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
            'tenTS' => 'required|min:3|unique:App\Models\SpecificationModel,tenTS'
        ]);

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
        $validated = $request->validate([
            'tenTS' => 'required|min:3|unique:App\Models\SpecificationModel,tenTS'
        ]);

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
        try{
            $thongSo->delete();
            return redirect(route('specification.index'));
        }catch(Exception $e){
            return back()->with('delete', "Xung đột khoá ngoại!");
        }
    }
}
