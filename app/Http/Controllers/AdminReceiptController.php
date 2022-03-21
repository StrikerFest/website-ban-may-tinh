<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReceiptModel;
use App\Models\ProductModel;
use App\Models\DetailReceiptModel;
use App\Models\UserModel;
use App\Models\PaymentMethodModel;
use App\Models\ReceiptStatusModel;
use DB;

class AdminReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nguoiDung = UserModel::all();

        $phuongThucThanhToan = PaymentMethodModel::all();

        $tinhTrangHoaDon = ReceiptStatusModel::all();

        $hoaDon = ReceiptModel::join('nguoi_dung', 'nguoi_dung.maND', '=', 'hoa_don.maKH')
            ->join('phuong_thuc_thanh_toan', 'phuong_thuc_thanh_toan.maPTTT', '=', 'hoa_don.maPTTT')
            ->join('tinh_trang_hoa_don', 'tinh_trang_hoa_don.maTTHD', '=', 'hoa_don.maTTHD')
            ->orderBy('hoa_don.maTTHD', 'DESC')
            ->orderBy('ngayTao', 'ASC')
            ->get();
        // dd($hoaDon);
        return view('Admin.Receipt.index', [
            'nguoiDung' => $nguoiDung,
            'phuongThucThanhToan' => $phuongThucThanhToan,
            'tinhTrangHoaDon' => $tinhTrangHoaDon,
            'hoaDon' => $hoaDon,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sanPham = ProductModel::all();

        $hoaDonChiTiet = DB::select("
            SELECT 
                san_pham.tenSP,
                san_pham.giamGia,
                hoa_don_chi_tiet.soLuong,
                hoa_don_chi_tiet.giaSP,
                ((hoa_don_chi_tiet.giaSP - san_pham.giamGia) * hoa_don_chi_tiet.soLuong) AS thanhTien
                FROM hoa_don_chi_tiet
                JOIN san_pham
                ON hoa_don_chi_tiet.maSP = san_pham.maSP
                WHERE hoa_don_chi_tiet.maHD = $id
        ");
        $tongTien = DB::select("
        SELECT
            sum((hoa_don_chi_tiet.giaSP - san_pham.giamGia) * hoa_don_chi_tiet.soLuong) as tong
            FROM hoa_don_chi_tiet
            JOIN san_pham
            ON hoa_don_chi_tiet.maSP = san_pham.maSP
            WHERE hoa_don_chi_tiet.maHD = $id
        ")[0];
        return view('Admin.Receipt.detail', [
            'tongTien' => $tongTien,
            'hoaDonChiTiet' => $hoaDonChiTiet,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
