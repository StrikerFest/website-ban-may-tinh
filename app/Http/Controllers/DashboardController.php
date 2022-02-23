<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    // Thống kê cơ bản
    public function index(Request $request)
    {
        // Nếu có session của admin - Sửa khi đã có session
        if (!session()->has('admin')) {

            return view("Admin.Dashboard.index", []);
        } else {
            return Redirect::route('administrator/login')->with("error", "Không được làm vậy bro");
        }
    }
}
