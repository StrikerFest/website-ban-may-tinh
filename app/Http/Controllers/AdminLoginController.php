<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

// Controller quản lý login của admin
class AdminLoginController extends Controller
{
    // Login Admin
    public function login()
    {
        // Nếu có admin trong session
        if (session()->has('admin')) {
            // Quay về dashboard
            return Redirect::route('dashboard');
        }
        // Nếu ko
        else {
            // Quay về login
            return view('login');
        }
    }

    // Xử lý login Admin
    public function loginProcess(Request $request)
    {
        // Sửa thành phần theo db mới
        $email = $request->get('email');
        $password = $request->get('password');
        $validated = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
        ]);

        // khi có session
        if (session()->has('admin')) {
            return Redirect::route('dashboard');
        }
        // khi ko có session
        else {
            try {
                // lấy dữ liệu từ db - Sửa thành phần theo db mới
                $admin = UserModel::where('emailGV', $email)->where('matKhauGV', $password)->firstOrFail();
                // tạo biến session - Sửa thành phần theo db mới
                $request->session()->put('admin', $admin->maGV);
                $request->session()->put('tenAdmin', $admin->tenGV);
                $request->session()->put('chucVu', $admin->chucVu);
                // chuyển sang dashBoard
                return Redirect::route('dashBoard');

                // Khi có lỗi
            } catch (Exception $e) {
                return Redirect::route('administrator/login')->with("error", "Email hoặc mật khẩu của bạn đã sai");
            }
        }
    }

    // Đăng xuất
    public function logout()
    {
        // khi co session
        if (session()->has('admin')) {
            return Redirect::route('administrator/login');
        }
        // khi ko co session
        else {
            return Redirect::route('administrator/login')->with("error", "Không được làm vậy bro");
        }
    }
}
