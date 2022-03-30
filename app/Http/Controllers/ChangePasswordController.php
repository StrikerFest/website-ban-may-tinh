<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ChangePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        dd('index');
        return Redirect::route('product.index');
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
        $request->validate([
            'current_password' => ["required"],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        if (Hash::check($request->get("current_password"), session()->get('matKhau'))) {
            $KH = UserModel::find(session()->get('khachHang'));
            $KH->matKhauND = Hash::make($request->get("new_password"));
            $KH->save();
        } else
            dd("NO");
        // UserModel::find(session()->get('khachHang'))->update(['matKhauND' => Hash::make($request->new_password)]);


        return Redirect::route('product.index');
    }

    /**e
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
