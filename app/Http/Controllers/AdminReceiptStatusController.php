<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReceiptStatusModel;


class AdminReceiptStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TTHD = ReceiptStatusModel::orderBy('maTTHD', 'desc')->paginate(5);

        return view('Admin.Status.Receipt.index', [
            "TTHD" => $TTHD,
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
        $TTHD = new ReceiptStatusModel();
        $TTHD->tenTTHD = $request->get('tenTTHD');
        $TTHD->save();

        return redirect(route('receiptStatus.index'));
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
        $TTHD = ReceiptStatusModel::find($id);
        
        return view('Admin.Status.Receipt.edit', [
            "TTHD" => $TTHD,
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
        $TTHD = ReceiptStatusModel::find($id);
        $TTHD->tenTTHD = $request->get('tenTTHD');

        $TTHD->save();
        return redirect(route('receiptStatus.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $TTHD = ReceiptStatusModel::find($id);
        $TTHD->delete();

        return redirect(route('receiptStatus.index'));
    }
}
