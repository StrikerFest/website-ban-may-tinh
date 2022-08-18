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
        // //Doanh thu theo tháng
        $doanhThuThang = DB::select("
        SELECT SUM(Tong) as Tong FROM
            (
            SELECT
                IF(
                    maTLV=1,
                    (giaSP-(giaSP*giamGia/100)-giaTri)*hoa_don_chi_tiet.soLuong,
                    IF(
                        maTLV=2,
                        (giaSP-(giaSP*giamGia/100)-(giaSP*giaTri/100))*hoa_don_chi_tiet.soLuong,
                        giaSP-(giaSP*giamGia/100)*hoa_don_chi_tiet.soLuong
                    )
                )AS Tong
                FROM hoa_don_chi_tiet
                JOIN hoa_don on hoa_don.maHD = hoa_don_chi_tiet.maHD
                LEFT JOIN voucher ON voucher.maVoucher = hoa_don_chi_tiet.maVoucher
                WHERE MONTH(hoa_don.ngayTao) = $thangHienTai AND YEAR(hoa_don.ngayTao) = $namHienTai
                AND hoa_don.maTTHD = 5
            ) as X;
        ")[0]->Tong;
        // dd($doanhThuThang);

        // //Doanh thu theo năm
        $doanhThuNam = DB::select("
        SELECT SUM(Tong) as Tong FROM
            (
            SELECT
                IF(
                    maTLV=1,
                    (giaSP-(giaSP*giamGia/100)-giaTri)*hoa_don_chi_tiet.soLuong,
                    IF(
                        maTLV=2,
                        (giaSP-(giaSP*giamGia/100)-(giaSP*giaTri/100))*hoa_don_chi_tiet.soLuong,
                        giaSP-(giaSP*giamGia/100)*hoa_don_chi_tiet.soLuong
                    )
                )AS Tong
                FROM hoa_don_chi_tiet
                JOIN hoa_don on hoa_don.maHD = hoa_don_chi_tiet.maHD
                LEFT JOIN voucher ON voucher.maVoucher = hoa_don_chi_tiet.maVoucher
                WHERE YEAR(hoa_don.ngayTao) = $namHienTai
                AND hoa_don.maTTHD = 5
            ) as X;
        ")[0]->Tong;
        // dd($doanhThuNam);

        //Tiền lãi theo tháng
        $tienLaiThang = DB::select("
        SELECT SUM(tienLai) AS tienLaiThang FROM
            (SELECT
            IF(
                maTLV=1,
                (giaSP-(giaSP*giamGia/100)-giaTri)-giaNhap,
                IF(
                    maTLV=2,
                    (giaSP-(giaSP*giamGia/100)-(giaSP*giaTri/100))-giaNhap,
                    (giaSP-(giaSP*giamGia/100))-giaNhap
                )
            ) AS tienLai
            FROM serial
            JOIN nhap_kho ON nhap_kho.maNK = serial.maNK
            JOIN nhap_kho_chi_tiet ON nhap_kho_chi_tiet.maNK = nhap_kho.maNK
            JOIN hoa_don_chi_tiet ON serial.maHDCT = hoa_don_chi_tiet.maHDCT
            JOIN hoa_don ON hoa_don_chi_tiet.maHD = hoa_don_chi_tiet.maHD
            LEFT JOIN voucher on hoa_don_chi_tiet.maVoucher = voucher.maVoucher
            WHERE serial.maHDCT IS NOT NULL
            AND MONTH(hoa_don.ngayTao) = $thangHienTai AND YEAR(hoa_don.ngayTao) = $namHienTai
            AND hoa_don.maTTHD = 5
            GROUP BY serial.maSerial
            ORDER BY `serial`.`maHDCT` DESC) AS X;
        ")[0]->tienLaiThang;
        
        //Tiền lãi theo năm
        $tienLaiNam = DB::select("
        SELECT SUM(tienLai) AS tienLaiNam FROM
            (SELECT
            IF(
                maTLV=1,
                (giaSP-(giaSP*giamGia/100)-giaTri)-giaNhap,
                IF(
                    maTLV=2,
                    (giaSP-(giaSP*giamGia/100)-(giaSP*giaTri/100))-giaNhap,
                    (giaSP-(giaSP*giamGia/100))-giaNhap
                )
            ) AS tienLai
            FROM serial
            JOIN nhap_kho ON nhap_kho.maNK = serial.maNK
            JOIN nhap_kho_chi_tiet ON nhap_kho_chi_tiet.maNK = nhap_kho.maNK
            JOIN hoa_don_chi_tiet ON serial.maHDCT = hoa_don_chi_tiet.maHDCT
            JOIN hoa_don ON hoa_don_chi_tiet.maHD = hoa_don_chi_tiet.maHD
            LEFT JOIN voucher on hoa_don_chi_tiet.maVoucher = voucher.maVoucher
            WHERE serial.maHDCT IS NOT NULL
            AND YEAR(hoa_don.ngayTao) = $namHienTai
            AND hoa_don.maTTHD = 5
            GROUP BY serial.maSerial
            ORDER BY `serial`.`maHDCT` DESC) AS X;
        ")[0]->tienLaiNam;

        //Số lượng voucher được áp dụng
        $soLuongVoucherApDung = DB::table('hoa_don_chi_tiet')
            ->join('hoa_don', 'hoa_don.maHD', '=', 'hoa_don_chi_tiet.maHD')
            ->whereNotNull('maVoucher')
            ->where('hoa_don.maTTHD', '!=', 2)
            ->sum('soLuong');
        // dd($soLuongVoucherApDung);
        
        //Số tiền giảm giá từ voucher
        $soTienGiamVoucher = DB::select("
        SELECT SUM(tong) AS tienVoucherGiam FROM
            (SELECT
            IF(
                maTLV=1,
                giaTri*hoa_don_chi_tiet.soLuong,
                IF(
                    maTLV=2,
                    (giaSP*giaTri/100)*hoa_don_chi_tiet.soLuong,
                    0
                )
            ) AS tong
            FROM hoa_don_chi_tiet
            JOIN hoa_don ON hoa_don.maHD = hoa_don_chi_tiet.maHD
            JOIN voucher ON voucher.maVoucher = hoa_don_chi_tiet.maVoucher
            WHERE hoa_don.maTTHD !=2) AS X;
        ")[0]->tienVoucherGiam;
        // dd($soTienGiamVoucher);

        //Số tặng phẩm được tặng
        $soLuongTangPham = DB::table('hoa_don_chi_tiet')
            ->join('voucher', 'voucher.maVoucher', '=', 'hoa_don_chi_tiet.maVoucher')
            ->join('hoa_don', 'hoa_don.maHD', '=', 'hoa_don_chi_tiet.maHD')
            ->where('maTLV', 3)
            ->where('hoa_don.maTTHD', '!=', 2)
            ->sum('hoa_don_chi_tiet.soLuong');
        // dd($soLuongTangPham);
        
        //Tổng giá trị của tặng phẩm
        $giaTriTangPham = DB::table('hoa_don_chi_tiet')
            ->join('voucher', 'voucher.maVoucher', '=', 'hoa_don_chi_tiet.maVoucher')
            ->join('hoa_don', 'hoa_don.maHD', '=', 'hoa_don_chi_tiet.maHD')
            ->where('maTLV', 3)
            ->where('hoa_don.maTTHD', '!=', 2)
            ->sum(DB::raw('giaTri*hoa_don_chi_tiet.soLuong'));
        // dd($giaTriTangPham);

        //Doanh thu theo tháng (dự kiến)
        // $doanhThuThangDuKien = DB::select("
        // SELECT SUM((giaSP - (giaSP * giamGia / 100)) * soLuong) AS doanhThuThangDuKien
        // FROM hoa_don_chi_tiet
        // JOIN hoa_don on hoa_don.maHD = hoa_don_chi_tiet.maHD
        // WHERE MONTH(hoa_don.ngayTao) = $thangHienTai AND YEAR(hoa_don.ngayTao) = $namHienTai
        // AND hoa_don.maTTHD != 2
        // ")[0];

        //Doanh thu theo năm (dự kiến)
        // $doanhThuNamDuKien = DB::select("
        // SELECT SUM((giaSP - (giaSP * giamGia / 100)) * soLuong) AS doanhThuNamDuKien
        // FROM hoa_don_chi_tiet
        // JOIN hoa_don on hoa_don.maHD = hoa_don_chi_tiet.maHD
        // WHERE YEAR(hoa_don.ngayTao) = $namHienTai
        // AND hoa_don.maTTHD != 2
        // ")[0];

        //Tổng số sản phẩm đã nhập trong tháng
        $tongSanPhamNhapThang = DB::table('nhap_kho_chi_tiet')
            ->join('nhap_kho', 'nhap_kho.maNK', '=', 'nhap_kho_chi_tiet.maNK')
            ->whereMonth('ngayNhap', '=', $thangHienTai)
            ->whereYear('ngayNhap', '=', $namHienTai)
            ->sum('soLuong');

        //Tổng số sản phẩm đã nhập trong năm
        $tongSanPhamNhapNam = DB::table('nhap_kho_chi_tiet')
            ->join('nhap_kho', 'nhap_kho.maNK', '=', 'nhap_kho_chi_tiet.maNK')
            ->whereYear('ngayNhap', '=', $namHienTai)
            ->sum('soLuong');
        
        //Tổng tiền nhập hàng trong tháng
        $tongTienNhapThang = DB::table('nhap_kho_chi_tiet')
            ->selectRaw('sum(soLuong * giaNhap) as tong')
            ->join('nhap_kho', 'nhap_kho.maNK', '=', 'nhap_kho_chi_tiet.maNK')
            ->whereMonth('ngayNhap', '=', $thangHienTai)
            ->whereYear('ngayNhap', '=', $namHienTai)
            ->get()[0]->tong;

        //Tổng tiền nhập hàng trong năm
        $tongTienNhapNam = DB::table('nhap_kho_chi_tiet')
            ->selectRaw('sum(soLuong * giaNhap) as tong')
            ->join('nhap_kho', 'nhap_kho.maNK', '=', 'nhap_kho_chi_tiet.maNK')
            ->whereYear('ngayNhap', '=', $namHienTai)
            ->get()[0]->tong;
        
        //Tổng số hoá đơn đang chờ duyệt
        $hoaDonChuaDuyet = DB::table('hoa_don')->where('maTTHD', '=', '1')->count();
        
        //Tổng số hoá đơn đang chờ lấy hàng
        $hoaDonChoLayHang = DB::table('hoa_don')->where('maTTHD', '=', '3')->count();
        
        //Tổng số hoá đơn đang giao hàng
        $hoaDonDangGiao = DB::table('hoa_don')->where('maTTHD', '=', '4')->count();
        
        //Tổng số hoá đơn đã giao
        $hoaDonDaGiao = DB::table('hoa_don')->where('maTTHD', '=', '5')->count();
        
        //Tổng số hoá đơn đã huỷ
        $tongHoaDonHuy = DB::table('hoa_don')->where('maTTHD', '=', '2')->count();

        //Tổng số hoá đơn trong tháng
        $tongHoaDonThang = DB::table('hoa_don')
        ->whereMonth('ngayTao', '=', $thangHienTai)
        ->whereYear('ngayTao', '=', $namHienTai)
        ->count();

        //Tổng số lượng sản phẩm bán ra trong tháng
        $tongSanPhamThang = DB::table('hoa_don_chi_tiet')
            ->join('hoa_don', 'hoa_don.maHD', '=', 'hoa_don_chi_tiet.maHD')
            ->whereMonth('ngayTao', '=', $thangHienTai)
            ->whereYear('ngayTao', '=', $namHienTai)
            ->where('maTTHD', '=', 5)
            ->sum('soLuong');
        
        //Tổng số lượng sản phẩm bán ra trong năm
        $tongSanPhamNam = DB::table('hoa_don_chi_tiet')
            ->join('hoa_don', 'hoa_don.maHD', '=', 'hoa_don_chi_tiet.maHD')
            ->whereYear('ngayTao', '=', $namHienTai)
            ->where('maTTHD', '=', 5)
            ->sum('soLuong');


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
            And hoa_don.maTTHD = 5
            ");
            array_push($doanhThu12Thang, $doanhThuMoiThang[0]->doanhThuThang);
            
            $doanhThuDuKienMoiThang = DB::select("
            SELECT IFNULL(SUM((hoa_don_chi_tiet.giaSP - (hoa_don_chi_tiet.giaSP * hoa_don_chi_tiet.giamGia /100))*hoa_don_chi_tiet.soLuong), 0) AS doanhThuDuKienThang
            FROM hoa_don_chi_tiet
            JOIN hoa_don ON hoa_don.maHD = hoa_don_chi_tiet.maHD
            WHERE MONTH(hoa_don.ngayTao) = $i
            AND YEAR(hoa_don.ngayTao) = $namDuocChon
            And hoa_don.maTTHD != 2
            ");
            array_push($doanhThuDuKien12Thang, $doanhThuDuKienMoiThang[0]->doanhThuDuKienThang);
        }
        
        //Danh mục đã bán
        $tenDM = [];
        $ten = DB::table('the_loai')->orderBy('maTL')->get('tenTL')->toArray();
        for($i=0; $i<sizeof($ten); $i++){
            array_push($tenDM, $ten[$i]->tenTL);
        }
        $maDM = [];
        $ma = DB::table('the_loai')->get('maTL')->toArray();
        for($i=0; $i<sizeof($ma); $i++){
            array_push($maDM, $ma[$i]->maTL);
        }
        $tenDMC = [];
        $ten2 = DB::table('the_loai_con')->orderBy('maTLC')->get('tenTLC')->toArray();
        for($i=0; $i<sizeof($ten2); $i++){
            array_push($tenDMC, $ten2[$i]->tenTLC);
        }
        $maDMC = [];
        $ma2 = DB::table('the_loai_con')->get('maTL')->toArray();
        for($i=0; $i<sizeof($ma2); $i++){
            array_push($maDMC, $ma2[$i]->maTL);
        }

        $tiLeDM = [];
        $soLuongDM = DB::table('the_loai')->count('maTL');
        $soLuongSanPham = DB::table('hoa_don_chi_tiet')
            ->join('hoa_don', 'hoa_don.maHD', '=', 'hoa_don_chi_tiet.maHD')
            ->where('hoa_don.maTTHD', '=', '5')
            ->sum('soLuong');
        for($i = 1; $i <= $soLuongDM; $i++){
            $tiLe = DB::select("
                SELECT SUM(hoa_don_chi_tiet.soLuong) AS tiLe FROM hoa_don_chi_tiet 
                JOIN hoa_don ON hoa_don.maHD = hoa_don_chi_tiet.maHD
                JOIN san_pham ON hoa_don_chi_tiet.maSP = san_pham.maSP
                JOIN the_loai_con ON the_loai_con.maTLC = san_pham.maTLC
                JOIN the_loai ON the_loai.maTL = the_loai_con.maTL
                WHERE the_loai.maTL = $i
                AND hoa_don.maTTHD = 5
            ")[0];
            if($soLuongSanPham == 0){
                array_push($tiLeDM, 0);
            }else{
                array_push($tiLeDM, ($tiLe->tiLe / $soLuongSanPham * 100));
            }
        }
        $tiLeDMC = [];
        $soLuongDMC = DB::table('the_loai_con')->count('maTLC');
        for($i = 1; $i <= $soLuongDMC; $i++){
            $tiLe = DB::select("
                SELECT SUM(hoa_don_chi_tiet.soLuong) AS tiLe FROM hoa_don_chi_tiet
                JOIN hoa_don ON hoa_don.maHD = hoa_don_chi_tiet.maHD
                JOIN san_pham ON hoa_don_chi_tiet.maSP = san_pham.maSP
                JOIN the_loai_con ON the_loai_con.maTLC = san_pham.maTLC
                JOIN the_loai ON the_loai.maTL = the_loai_con.maTL
                WHERE the_loai_con.maTLC = $i
                AND hoa_don.maTTHD = 5
            ")[0];
            if($soLuongSanPham == 0){
                array_push($tiLeDMC, 0);
            }else{
                array_push($tiLeDMC, ($tiLe->tiLe / $soLuongSanPham * 100));
            }
        }

        $danhMuc = [];
        for($i = 0; $i < $soLuongDM; $i++){
            $danhMuc[] = (object) ['maDM' => $maDM[$i], 'name' => $tenDM[$i], 'y'=> $tiLeDM[$i]];
        }
        $danhMucCon = [];
        for($i = 0; $i < $soLuongDMC; $i++){
            $danhMucCon[] = (object) ['maDM' => $maDMC[$i], 'name' => $tenDMC[$i], 'y'=> $tiLeDMC[$i]];
        }

        $listDanhMucCon = DB::table('the_loai_con')->where('tenTLC', 'not like', '%Tặng phẩm%')->get();
        $listNamTheoHoaDon = DB::select("
            SELECT DISTINCT YEAR(ngayTao) AS nam FROM hoa_don ORDER BY nam DESC
        ");
        
        // Nếu có session của admin - Sửa khi đã có session
        if (session()->has('admin')) {

            return view("Admin.Dashboard.index", [
                'doanhThuThang' => $doanhThuThang,
                'doanhThuNam' => $doanhThuNam,
                'tienLaiThang' => $tienLaiThang,
                'tienLaiNam' => $tienLaiNam,
                'soLuongVoucherApDung' => $soLuongVoucherApDung,
                'soTienGiamVoucher' => $soTienGiamVoucher,
                'soLuongTangPham' => $soLuongTangPham,
                'giaTriTangPham' => $giaTriTangPham,
                // 'doanhThuThangDuKien' => $doanhThuThangDuKien,
                // 'doanhThuNamDuKien' => $doanhThuNamDuKien,
                'tongSanPhamNhapThang' => $tongSanPhamNhapThang,
                'tongSanPhamNhapNam' => $tongSanPhamNhapNam,
                'tongTienNhapThang' => $tongTienNhapThang,
                'tongTienNhapNam' => $tongTienNhapNam,
                'hoaDonChuaDuyet' => $hoaDonChuaDuyet,
                'hoaDonChoLayHang' => $hoaDonChoLayHang,
                'hoaDonDangGiao' => $hoaDonDangGiao,
                'hoaDonDaGiao' => $hoaDonDaGiao,
                'tongHoaDonThang' => $tongHoaDonThang,
                'tongSanPhamThang' => $tongSanPhamThang,
                'tongSanPhamNam' => $tongSanPhamNam,
                'tongHoaDonHuy' => $tongHoaDonHuy,
                'danhMuc' => $danhMuc,
                'danhMucCon' => $danhMucCon,
                'listDanhMucCon' => $listDanhMucCon,
                'listNamTheoHoaDon' => $listNamTheoHoaDon,
            ]);
        } else {
            return Redirect::route('administrator/login')->with("error", "Không được làm vậy bro");
        }
    }

    //Top 5 sản phẩm bán chạy theo danh mục con
    public function danhMucCon($maDMC){
        $ten5SP = [];
        $soLuong5SP = [];
        $top5SanPham = DB::select("
            SELECT SUM(hoa_don_chi_tiet.soLuong) AS soLuong, san_pham.tenSP, the_loai_con.tenTLC
            FROM san_pham
            JOIN the_loai_con ON the_loai_con.maTLC = san_pham.maTLC
            JOIN hoa_don_chi_tiet ON hoa_don_chi_tiet.maSP = san_pham.maSP
            JOIN hoa_don ON hoa_don.maHD = hoa_don_chi_tiet.maHD
            WHERE hoa_don.maTTHD = 5
            AND the_loai_con.maTLC = $maDMC
            GROUP BY san_pham.maSP
            ORDER BY soLuong DESC, san_pham.maSP ASC
            LIMIT 5
        ");
        for($i = 0; $i < sizeof($top5SanPham); $i++){
            array_push($ten5SP, $top5SanPham[$i]->tenSP);
            array_push($soLuong5SP, (int)$top5SanPham[$i]->soLuong);
        }
        
        return response()->json([
            'ten5SP' => $ten5SP,
            'soLuong5SP' => $soLuong5SP,
        ]);
    }

    //Doanh thu 12 tháng
    public function doanhThu12Thang($nam){
        $doanhThu12Thang = [];
        $doanhThuDuKien12Thang = [];
        for($i = 1; $i <= 12; $i++){
            $doanhThuMoiThang = DB::select("
            SELECT IFNULL(SUM(Tong), 0) as Tong FROM
                (
                SELECT
                    IF(
                        maTLV=1,
                        (giaSP-(giaSP*giamGia/100)-giaTri)*hoa_don_chi_tiet.soLuong,
                        IF(
                            maTLV=2,
                            (giaSP-(giaSP*giamGia/100)-(giaSP*giaTri/100))*hoa_don_chi_tiet.soLuong,
                            (giaSP-(giaSP*giamGia/100))*hoa_don_chi_tiet.soLuong
                        )
                    )AS Tong
                    FROM hoa_don_chi_tiet
                    JOIN hoa_don on hoa_don.maHD = hoa_don_chi_tiet.maHD
                    LEFT JOIN voucher ON voucher.maVoucher = hoa_don_chi_tiet.maVoucher
                    WHERE MONTH(hoa_don.ngayTao) = $i AND YEAR(hoa_don.ngayTao) = $nam
                    AND hoa_don.maTTHD = 5
                ) as X;
            ")[0]->Tong;

            array_push($doanhThu12Thang, $doanhThuMoiThang);

            $doanhThuDuKienMoiThang = DB::select("
            SELECT IFNULL(SUM(Tong), 0) as Tong FROM
                (
                SELECT
                    IF(
                        maTLV=1,
                        (giaSP-(giaSP*giamGia/100)-giaTri)*hoa_don_chi_tiet.soLuong,
                        IF(
                            maTLV=2,
                            (giaSP-(giaSP*giamGia/100)-(giaSP*giaTri/100))*hoa_don_chi_tiet.soLuong,
                            (giaSP-(giaSP*giamGia/100))*hoa_don_chi_tiet.soLuong
                        )
                    )AS Tong
                    FROM hoa_don_chi_tiet
                    JOIN hoa_don on hoa_don.maHD = hoa_don_chi_tiet.maHD
                    LEFT JOIN voucher ON voucher.maVoucher = hoa_don_chi_tiet.maVoucher
                    WHERE MONTH(hoa_don.ngayTao) = $i AND YEAR(hoa_don.ngayTao) = $nam
                    AND hoa_don.maTTHD != 2
                ) as X;
            ")[0]->Tong;

            array_push($doanhThuDuKien12Thang, $doanhThuDuKienMoiThang);
        }

        return response()->json([
            'doanhThu12Thang' => $doanhThu12Thang,
            'doanhThuDuKien12Thang' => $doanhThuDuKien12Thang,
        ]);
    }
}
