<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    // Login Admin
    public function login()
    {
        if (session()->has('admin')) {
            return Redirect::route('dashboard');
        } else {
            return view('admin_login');
        }
    }

    // Xử lý login Admin
    public function loginProcess(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        $validated = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
        ]);

        // khi có session
        if (session()->has('admin')) {

            return Redirect::route('dashboard');

            // khi ko có session
        } else {
            try {
                // lấy dữ liệu từ db
                $admin = UserModel::where('emailGV', $email)->where('matKhauGV', $password)->firstOrFail();
                // tạo biến session
                $request->session()->put('giaoVu', $admin->maGV);
                $request->session()->put('tenGiaoVu', $admin->tenGV);
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

        if (session()->has('giaoVu')) {
            // khi co session
            session()->pull('giaoVu');
            return Redirect::route('administrator/login');
        } else {
            // khi ko co session
            return Redirect::route('administrator/login')->with("error", "Không được làm vậy bro");
        }
    }
}
