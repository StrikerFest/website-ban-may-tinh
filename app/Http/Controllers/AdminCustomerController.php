<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class AdminCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $khachHang = UserModel::join('chuc_vu_quyen_han', 'nguoi_dung.maCV', '=', 'chuc_vu_quyen_han.maCV')
            ->join('quyen_han', 'chuc_vu_quyen_han.maQH', '=', 'quyen_han.maQH')
            ->where('tenQH', 'Là khách hàng')
            ->orderBy('maND', 'desc')
            ->paginate(5);

        return view('Admin.Customer.index', [
            "khachHang" => $khachHang,
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
        return view('Admin.Customer.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new UserModel();
        $customer->tenND = $request->get('name');
        $customer->emailND = $request->get('email');
        $customer->matKhauND = $request->get('password');
        $matKhau2 = $request->get('password2');
        $customer->maCV = $request->get('maCV');

        if($customer->matKhauND != $matKhau2){
            return back()->with("matKhau", "Nhập lại mật khẩu không trùng khớp");
        }
        $customer->save();
        return redirect(route('customer.index'));
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
        $khachHang = UserModel::find($id);
        
        return view('Admin.Customer.edit', [
            "khachHang" => $khachHang,
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
        $khachHang = UserModel::find($id);
        $khachHang->tenND = $request->get('name');
        $khachHang->emailND = $request->get('email');
        $khachHang->matKhauND = $request->get('password');
        $matKhau2 = $request->get('password2');
        $khachHang->maCV = $request->get('maCV');

        if($khachHang->matKhauND != $matKhau2){
            return back()->with("matKhau", "Nhập lại mật khẩu không trùng khớp");
        }
        $khachHang->save();
        return redirect(route('customer.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = UserModel::find($id);
        $customer->delete();

        return redirect(route('customer.index'));
    }
}
