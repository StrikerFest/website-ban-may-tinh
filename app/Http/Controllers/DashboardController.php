<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class DashboardController extends Controller
{
    // Thống kê cơ bản
    public function index(Request $request)
    {
        $thangHienTai = date('m');
        $namHienTai = date('Y');

        //Doanh thu theo tháng
        $doanhThuThang = DB::select("
        SELECT SUM((giaSP - (giaSP * giamGia / 100)) * soLuong) AS doanhThuThang
        FROM hoa_don_chi_tiet
        JOIN hoa_don on hoa_don.maHD = hoa_don_chi_tiet.maHD
        WHERE MONTH(hoa_don.ngayTao) = $thangHienTai AND YEAR(hoa_don.ngayTao) = $namHienTai
        AND hoa_don.maTTHD = 1
        ")[0];
        
        //Doanh thu theo năm
        $doanhThuNam = DB::select("
        SELECT SUM((giaSP - (giaSP * giamGia / 100)) * soLuong) AS doanhThuNam
        FROM hoa_don_chi_tiet
        JOIN hoa_don on hoa_don.maHD = hoa_don_chi_tiet.maHD
        WHERE YEAR(hoa_don.ngayTao) = $namHienTai
        AND hoa_don.maTTHD = 1
        ")[0];

        //Doanh thu theo tháng (dự kiến)
        $doanhThuThangDuKien = DB::select("
        SELECT SUM((giaSP - (giaSP * giamGia / 100)) * soLuong) AS doanhThuThangDuKien
        FROM hoa_don_chi_tiet
        JOIN hoa_don on hoa_don.maHD = hoa_don_chi_tiet.maHD
        WHERE MONTH(hoa_don.ngayTao) = $thangHienTai AND YEAR(hoa_don.ngayTao) = $namHienTai
        AND hoa_don.maTTHD != 3
        ")[0];

        //Số hoá đơn đang chờ duyệt
        $hoaDonChuaDuyet = DB::table('hoa_don')->where('maTTHD', '=', '2')->count();


        //Doanh thu 12 tháng
        $namNhoNhat = date_format(date_create(DB::table('hoa_don')->min('ngayTao')), 'Y');
        $namLonNhat = date('Y');
        $namDuocChon = is_null($request->get('nam')) ? $namLonNhat : $request->get('nam');

        $doanhThu12Thang = [];
        $doanhThuDuKien12Thang = [];
        for($i = 1; $i <= 12; $i++){
            $doanhThuMoiThang = DB::select("
            SELECT IFNULL(SUM((hoa_don_chi_tiet.giaSP - (hoa_don_chi_tiet.giaSP * hoa_don_chi_tiet.giamGia /100))*hoa_don_chi_tiet.soLuong), 0) AS doanhThuThang
            FROM hoa_don_chi_tiet
            JOIN hoa_don ON hoa_don.maHD = hoa_don_chi_tiet.maHD
            WHERE MONTH(hoa_don.ngayTao) = $i
            AND YEAR(hoa_don.ngayTao) = $namDuocChon
            And hoa_don.maTTHD = 1
            ");
            array_push($doanhThu12Thang, $doanhThuMoiThang[0]->doanhThuThang);
            
            $doanhThuDuKienMoiThang = DB::select("
            SELECT IFNULL(SUM((hoa_don_chi_tiet.giaSP - (hoa_don_chi_tiet.giaSP * hoa_don_chi_tiet.giamGia /100))*hoa_don_chi_tiet.soLuong), 0) AS doanhThuDuKienThang
            FROM hoa_don_chi_tiet
            JOIN hoa_don ON hoa_don.maHD = hoa_don_chi_tiet.maHD
            WHERE MONTH(hoa_don.ngayTao) = $i
            AND YEAR(hoa_don.ngayTao) = $namDuocChon
            And hoa_don.maTTHD != 3
            ");
            array_push($doanhThuDuKien12Thang, $doanhThuDuKienMoiThang[0]->doanhThuDuKienThang);
        }
        
        //Danh mục bán chạy
        
        $tenDM = [];
        $ten = DB::table('the_loai')->get('tenTL')->toArray();
        for($i=0; $i<sizeof($ten); $i++){
            array_push($tenDM, $ten[$i]->tenTL);
        }
        $tenDMC = [];
        $ten2 = DB::table('the_loai_con')->get('tenTLC')->toArray();
        for($i=0; $i<sizeof($ten2); $i++){
            array_push($tenDMC, $ten2[$i]->tenTLC);
        }


        $tiLeDM = [];
        $soLuongDM = DB::table('the_loai')->count('maTL');
        $soLuongHDCT = DB::table('hoa_don_chi_tiet')->count('maHDCT');
        for($i = 1; $i <= $soLuongDM; $i++){
            $tiLe = DB::select("
                SELECT COUNT(hoa_don_chi_tiet.maHDCT) AS tiLe FROM hoa_don_chi_tiet 
                JOIN san_pham ON hoa_don_chi_tiet.maSP = san_pham.maSP
                JOIN the_loai_con ON the_loai_con.maTLC = san_pham.maTLC
                JOIN the_loai ON the_loai.maTL = the_loai_con.maTL
                WHERE the_loai.maTL = $i
            ")[0];
            array_push($tiLeDM, ($tiLe->tiLe / $soLuongHDCT * 100));
        }
        $tiLeDMC = [];
        $soLuongDMC = DB::table('the_loai_con')->count('maTLC');
        for($i = 1; $i <= $soLuongDMC; $i++){
            $tiLe = DB::select("
                SELECT COUNT(hoa_don_chi_tiet.maHDCT) AS tiLe FROM hoa_don_chi_tiet 
                JOIN san_pham ON hoa_don_chi_tiet.maSP = san_pham.maSP
                JOIN the_loai_con ON the_loai_con.maTLC = san_pham.maTLC
                JOIN the_loai ON the_loai.maTL = the_loai_con.maTL
                WHERE the_loai_con.maTLC = $i
            ")[0];
            array_push($tiLeDMC, ($tiLe->tiLe / $soLuongHDCT * 100));
        }

        
        $danhMuc = [];
        for($i = 0; $i < $soLuongDM; $i++){
            $danhMuc[] = (object) ['name' => $tenDM[$i], 'y'=> $tiLeDM[$i]];
        }
        $danhMucCon = [];
        for($i = 0; $i < $soLuongDMC; $i++){
            $danhMucCon[] = (object) ['name' => $tenDMC[$i], 'y'=> $tiLeDMC[$i]];
        }
        
        // Nếu có session của admin - Sửa khi đã có session
        if (session()->has('admin')) {

            return view("Admin.Dashboard.index", [
                'doanhThuThang' => $doanhThuThang,
                'doanhThuNam' => $doanhThuNam,
                'doanhThuThangDuKien' => $doanhThuThangDuKien,
                'hoaDonChuaDuyet' => $hoaDonChuaDuyet,
                'doanhThu12Thang' => $doanhThu12Thang,
                'doanhThuDuKien12Thang' => $doanhThuDuKien12Thang,
                'namDuocChon' => $namDuocChon,
                'namNhoNhat' => $namNhoNhat,
                'namLonNhat' => $namLonNhat,
                'danhMuc' => $danhMuc,
                'danhMucCon' => $danhMucCon,
            ]);
        } else {
            return Redirect::route('administrator/login')->with("error", "Không được làm vậy bro");
        }
    }
}
