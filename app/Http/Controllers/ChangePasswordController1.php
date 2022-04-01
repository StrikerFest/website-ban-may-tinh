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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('changePassword');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        if (!session()->has('khachHang')) {
            return Redirect::route('product.index')->with("error", "Mời khách hàng đăng nhập trước");
        }
        $request->validate([
            'current_password' => ["required", new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        $messages = [
            'same' => 'The :attribute and :other must match.',
            'size' => 'The :attribute must be exactly :size.',
            'between' => 'The :attribute value :input is not between :min - :max.',
            'in' => 'The :attribute must be one of the following types: :values',
        ];

        UserModel::find(session()->get('khachHang'))->update(['matKhauND' => Hash::make($request->new_password)]);

        dd('Password change successfully.');
        return
            Redirect::route('product.index');
    }
}
