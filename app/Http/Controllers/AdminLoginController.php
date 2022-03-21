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
            return view('Admin.adminLogin');
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
                // $admin = UserModel::where('emailND', $email)->where('matKhauND', $password)->firstOrFail();
                $admin = UserModel::join('chuc_vu_quyen_han', 'nguoi_dung.maCV', '=', 'chuc_vu_quyen_han.maCV')
                    ->join('quyen_han', 'chuc_vu_quyen_han.maQH', '=', 'quyen_han.maQH')
                    ->where('emailND', $email)->where('matKhauND', $password)
                    // ->where(function($query){
                    //     $query->where('quyen_han.maQH', '=', '7')->orWhere('quyen_han.maQH', '<', '6');
                    // })
                    ->where('quyen_han.maQH', '!=', '6')
                    ->firstOrFail();
                // tạo biến session - Sửa thành phần theo db mới
                $request->session()->put('admin', $admin->maND);
                $request->session()->put('tenAdmin', $admin->tenND);
                $request->session()->put('chucVu', $admin->maCV);
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
            session()->pull('admin');

            return Redirect::route('administrator/login');
        }
        // khi ko co session
        else {
            return Redirect::route('administrator/login')->with("error", "Không được làm vậy bro");
        }
    }
}
