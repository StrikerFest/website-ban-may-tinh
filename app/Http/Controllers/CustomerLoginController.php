<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

// Controller quản lý login của khách hàng
class CustomerLoginController extends Controller
{
    // Login khách hàng - Sửa khi có db
    public function login()
    {
        // Nếu có session
        if (session()->has('sinhVien')) {
            // return Redirect::route('sinhVien/noiQuy');
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
        if (session()->has('sinhVien')) {
            // return Redirect::route('sinhVien/noiQuy');
        }
        // khi không có session - Sửa khi có db
        else {
            try {
                $user = UserModel::where('emailSV', $email)->where('matKhauSV', $password)->firstOrFail();

                $request->session()->put('sinhVien', $user->maSV);
                $request->session()->put('tenSinhVien', $user->tenSV);


                // return Redirect::route('sinhVien/noiQuy');
            }
            // Nếu có lỗi - Báo email hoặc mật khẩu sai
            catch (Exception $e) {
                return Redirect::route('login')->with("error", "Email hoặc mật khẩu của bạn đã sai");
            }
        }
    }

    // Đăng xuất
    public function logout()
    {
        // Nếu có session
        if (session()->has('sinhVien')) {
            session()->pull('sinhVien');
            return Redirect::route('login');
        }
        // Nếu không có session
        else {
            return Redirect::route('login')->with("error", "Đăng nhập trước bro");
        }
    }
}
