<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentMethodModel;

class AdminPaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PTTT = PaymentMethodModel::orderBy('maPTTT', 'desc')->paginate(5);

        return view('Admin.Receipt.paymentMethod', [
            'PTTT' => $PTTT
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
        $validator = $request->validate([
            'tenPTTT' => 'required|min:3|unique:App\Models\PaymentMethodModel,tenPTTT'
        ]);

        $PTTT = new PaymentMethodModel();
        $PTTT->tenPTTT = $request->get('tenPTTT');
        $PTTT->save();

        return redirect(route('paymentMethod.index'));
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
        $PTTT = PaymentMethodModel::find($id);

        return view('Admin.Receipt.paymentMethodEdit', [
            'PTTT' => $PTTT
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
        $validator = $request->validate([
            'tenPTTT' => 'required|min:3|unique:App\Models\PaymentMethodModel,tenPTTT'
        ]);

        $PTTT = PaymentMethodModel::find($id);
        $PTTT->tenPTTT = $request->Get('tenPTTT');
        $PTTT->save();

        return redirect(route('paymentMethod.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $PTTT = PaymentMethodModel::find($id);
        $PTTT->delete();

        return redirect(route('paymentMethod.index'));
    }
}
