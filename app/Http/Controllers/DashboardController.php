<?php

namespace App\Http\Controllers;

use App\Models\HinhThucDongModel;
use App\Models\HoaDonModel;
use App\Models\hocBongModel;
use App\Models\SinhVienModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use DateTime;
use DateInterval;

class DashboardController extends Controller
{
    // Thống kê cơ bản
    public function index(Request $request)
    {
        // Nếu có session của admin - Sửa khi đã có session
        if (!session()->has('admin')) {

            return view("Dashboard/index", []);
        } else {
            return Redirect::route('administrator/login')->with("error", "Không được làm vậy bro");
        }
    }
}
