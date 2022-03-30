<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
        $validate = $request->validate([
            'newName' => 'required|min:3',
            'newEmail' => 'required|email:rfc,dns|unique:App\Models\UserModel,emailND',
            'newAddress' => 'required|min:3',
            'newPassword' => 'required|min:3',
        ]);

        $customer = new UserModel();
        // Lấy các thông tin từ
        $customer->tenND = $request->get('newName');
        $customer->emailND = $request->get('newEmail');
        $customer->diaChiND = $request->get('newAddress');
        $customer->matKhauND = Hash::make($request->get('newPassword'));
        $customer->maCV = DB::table('chuc_vu')->where('tenCV', 'Khách hàng')->first()->maCV;
        // dd($customer->maCV);
        $customer->save();

        // Quay về danh sách Admin
        return Redirect::route('login');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
