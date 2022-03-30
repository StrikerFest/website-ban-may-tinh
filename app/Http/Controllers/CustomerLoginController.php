<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

// Controller quản lý login của khách hàng
class CustomerLoginController extends Controller
{
    // Login khách hàng - Sửa khi có db
    public function login()
    {
        // Nếu có session
        if (session()->has('khachHang')) {
            return Redirect::route('product.index');
        }
        // Nếu không có session, quay lại đăng nhập
        else {
            return view('Customer.customerLogin');
        }
    }

    // Xử lý login khách hàng - SỬa khi có khách hàng
    public function loginProcess(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        $validated = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
        ]);
        // khi có session - Sửa khi có db
        if (session()->has('khachHang')) {

            return Redirect::route('product.index');
        }
        // khi không có session - Sửa khi có db
        else {
            try {
                $user = UserModel::where('emailND', $email)->first();
                if (Hash::check($password, $user->matKhauND)) {
                    $request->session()->put('khachHang', $user->maND);
                    $request->session()->put('tenKhachHang', $user->tenND);
                    $request->session()->put('matKhau', $user->matKhauND);
                    return Redirect::route('product.index');
                } else {
                    return Redirect::route('login')->with("error", "Email hoặc mật khẩu của bạn đã sai");
                }
            }
            // Nếu có lỗi - Báo email hoặc mật khẩu sai
            catch (Exception $e) {
                return Redirect::route('login')->with("error", "Đã có lỗi");
            }
        }
    }

    // Đăng xuất
    public function logout()
    {
        // Nếu có session
        if (session()->has('khachHang')) {
            session()->pull('khachHang');
            return Redirect::route('login');
        }
        // Nếu không có session
        else {
            return Redirect::route('login')->with("error", "Đăng nhập trước bro");
        }
    }
}
