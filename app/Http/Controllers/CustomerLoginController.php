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
            return Redirect::route('product.index');
        }
    }

    // Xử lý login khách hàng - SỬa khi có khách hàng
    public function loginProcess(Request $request)
    {

        // khi có session - Sửa khi có db
        if (session()->has('khachHang')) {

            return Redirect::route('product.index');
        }
        // khi không có session - Sửa khi có db
        else {
            $email = $request->get('email');
            $password = $request->get('password');
            $validated = $request->validate(
                [
                    'email' => 'required|email:rfc,dns',
                    'password' => 'required',
                ],
                [
                    'email.required' => 'Mời quý khách nhập email của mình',
                    'password.required' => 'Mời quý khách nhập mật khẩu của mình'
                ]
            );

            try {
                $user = UserModel::where('emailND', $email)->first();
                if (Hash::check($password, $user->matKhauND)) {
                    $request->session()->put('khachHang', $user->maND);
                    $request->session()->put('tenKhachHang', $user->tenND);
                    $request->session()->put('matKhau', $user->matKhauND);
                    $request->session()->put('soDienThoai', $user->soDienThoai);
                    $request->session()->put('email', $user->emailND);
                    $request->session()->put('diaChi', $user->diaChi);

                    $rememberPassword = $request->get('rememberPassword');
                    if ($rememberPassword == "on"){
                        $request->session()->put('nhoTaiKhoan',$user->emailND);
                        $request->session()->put('nhoMatKhau', $password);
                        $request->session()->put('checkNho', true);
                    }
                    else if ($rememberPassword == null) {
                        // dd("It's null");
                        $request->session()->forget('nhoTaiKhoan');
                        $request->session()->forget('nhoMatKhau');
                        $request->session()->forget('checkNho',false);

                    }

                    return Redirect::route('product.index');
                } else {
                    return Redirect::route('product.index')->with("error", "Email hoặc mật khẩu của bạn đã sai");
                }
            }
            // Nếu có lỗi - Báo email hoặc mật khẩu sai
            catch (Exception $e) {
                return Redirect::route('product.index')->with("error", "Email hoặc mật khẩu của bạn đã sai hoặc không tồn tại");
            }
        }
    }

    // Đăng xuất
    public function logout()
    {
        // Nếu có session
        if (session()->has('khachHang')) {
            session()->pull('khachHang');
            \Cart::clear();
            return Redirect::route('product.index');
            // return Redirect::route('login');
        }
        // Nếu không có session
        else {
            return Redirect::route('product.index')->with(
                "error",
                "Mời quý khách đăng nhập"
            );
            // return Redirect::route('login')->with("error", "Mời quý khách đăng nhập");
        }
    }
}
