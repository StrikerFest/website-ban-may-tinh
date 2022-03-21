<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogStatusModel;

class AdminBlogStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TTBV = BlogStatusModel::orderBy('maTTBV', 'desc')->paginate(5);

        return view('Admin.Status.Blog.index', [
            "TTBV" => $TTBV,
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
            'tenTTBV' => 'required|min:3|unique:App\Models\BlogStatusModel,tenTTBV'
        ]);
        $TTBV = new BlogStatusModel();
        $TTBV->tenTTBV = $request->get('tenTTBV');

        $TTBV->save();
        return redirect(route('blogStatus.index'));
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
        $TTBV = BlogStatusModel::find($id);
        
        return view('Admin.Status.Blog.edit', [
            "TTBV" => $TTBV,
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
            'tenTTBV' => 'required|min:3|unique:App\Models\BlogStatusModel,tenTTBV'
        ]);
        
        $TTBV = BlogStatusModel::find($id);
        $TTBV->tenTTBV = $request->get('tenTTBV');

        $TTBV->save();
        return redirect(route('blogStatus.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $TTBV = BlogStatusModel::find($id);
        $TTBV->delete();

        return redirect(route('blogStatus.index'));
    }
}
