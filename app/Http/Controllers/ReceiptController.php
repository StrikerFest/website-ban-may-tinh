<?php

namespace App\Http\Controllers;

use App\Models\DetailReceiptModel;
use App\Models\ProductImageModel;
use App\Models\ReceiptModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (!session()->has('khachHang')) {
            return Redirect::route('product.index')->with("error", "Mời khách hàng đăng nhập trước");
        }
        $listTheLoaiMayTinhBan = DB::table(
            'the_loai_con'
        )->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Máy tính bàn')->get();
        $listTheLoaiLaptop = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Laptop')->get();
        $listTheLoaiLinhKien = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Linh kiện')->get();
        $listTheLoaiPhuKien = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Phụ kiện')->get();
        $listTheLoaiManHinh = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Màn hình')->get();

        $listTheLoaiCha = DB::table('the_loai')->get();
        $listNhaSanXuat = DB::table(
            'nha_san_xuat'
        )->skip(0)->take(7)->get();
        $cartItems = \Cart::getContent();

        $listHoaDon = DB::table('hoa_don')->where('maKH', session()->get('khachHang'))->get();

        $listPTTT = DB::table('phuong_thuc_thanh_toan')->get();
        $listTTHD = DB::table('tinh_trang_hoa_don')->get();

        return view('Customer.Receipt.list', [
            'cartItems' =>  $cartItems,
            'listNhaSanXuat' =>  $listNhaSanXuat,
            'listTheLoaiCha' =>  $listTheLoaiCha,
            'listTheLoaiLaptop' =>  $listTheLoaiLaptop,
            'listTheLoaiMayTinhBan' =>  $listTheLoaiMayTinhBan,
            'listTheLoaiLinhKien' =>  $listTheLoaiLinhKien,
            'listTheLoaiPhuKien' =>  $listTheLoaiPhuKien,
            'listTheLoaiManHinh' =>  $listTheLoaiManHinh,

            'listHoaDon' =>  $listHoaDon,
            'listPTTT' =>  $listPTTT,
            'listTTHD' =>  $listTTHD,
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
        if (!session()->has('khachHang')) {
            return Redirect::route('product.index')->with("error", "Mời khách hàng đăng nhập trước");
        }
        $cartItems = \Cart::getContent();
        $listNguoiDung =
            DB::table('nguoi_dung')->where('maND', session()->get('khachHang'))->get();
        // echo $listNguoiDung;
        // echo session()->has('khachHang');
        // die();
        return view('Customer.Receipt.index', [
            'cartItems'  => $cartItems,
            'listNguoiDung' =>  $listNguoiDung,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!session()->has('khachHang')) {
            return Redirect::route('product.index')->with("error", "Mời khách hàng đăng nhập trước");
        }
        // Thêm vào hóa đơn

        $id = session()->get('khachHang');
        $hoaDon = new ReceiptModel();

        $hoaDon->maKH = $id;
        $hoaDon->ngayTao =  date("Y/m/d");
        $hoaDon->diaChi =  $request->receiptAddress;
        $hoaDon->soDienThoai = $request->get('receiptPhone');
        if ($request->paymentMethod == "COD") {
            $hoaDon->maPTTT = 1;
        } else if ($request->paymentMethod == "online") {
            $hoaDon->maPTTT = 2;
        }


        $hoaDon->maTTHD = 2;

        $hoaDon->save();

        // Thêm vào hóa đơn chi tiết
        $maHoaDonMoiNhat = DB::table('hoa_don')->max('maHD');

        $cartItems = \Cart::getContent();
        foreach ($cartItems as $cart) {
            $hoaDonChiTiet = new DetailReceiptModel();

            $SP = DB::table('san_pham')->where('maSP', $cart->id)->first();
            $giaSP = $SP->giaSP;
            $hoaDonChiTiet->maHD = $maHoaDonMoiNhat;
            $hoaDonChiTiet->maSP = $cart->id;
            $hoaDonChiTiet->soLuong = $cart->quantity;
            $hoaDonChiTiet->giaSP = $giaSP;
            $hoaDonChiTiet->giamGia = $SP->giamGia;
            // echo $hoaDon;
            // echo "<br>-------<br>";
            // echo "<br>MA HD: ";
            // echo $maHoaDonMoiNhat;
            // echo "<br>MA SP: ";
            // echo $cart->id;
            // echo "<br>quantity: ";
            // echo $cart->quantity;
            // echo "<br>GIA: ";
            // echo $SP->giaSP;
            // echo "<br>GIAM GIA: ";
            // echo $SP->giamGia;
            // echo "<br>------------------<br>";
            $hoaDonChiTiet->save();
            \Cart::clear();
        }
        // die();
        return view('Customer.Receipt.success', [
            'cartItems' => $cartItems,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if (!session()->has('khachHang')) {
            return Redirect::route('product.index')->with("error", "Mời khách hàng đăng nhập trước");
        }
        $listTheLoaiMayTinhBan = DB::table(
            'the_loai_con'
        )->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Máy tính bàn')->get();
        $listTheLoaiLaptop = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Laptop')->get();
        $listTheLoaiLinhKien = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Linh kiện')->get();
        $listTheLoaiPhuKien = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Phụ kiện')->get();
        $listTheLoaiManHinh = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Màn hình')->get();

        $listTheLoaiCha = DB::table('the_loai')->get();
        $listNhaSanXuat = DB::table(
            'nha_san_xuat'
        )->skip(0)->take(7)->get();
        $cartItems = \Cart::getContent();

        $listHoaDon = DB::table('hoa_don')->where('maKH', session()->get('khachHang'))->get();
        if (sizeof($listHoaDon) != 0) {
            $listHoaDonCT = DB::table('hoa_don_chi_tiet')->where('maHD', $id)->get();
        } else
            $listHoaDonCT = [];

        $listAnh = ProductImageModel::get();
        $listSanPham = DB::table('san_pham')->get();

        return view('Customer.Receipt.show', [
            'cartItems' =>  $cartItems,
            'listNhaSanXuat' =>  $listNhaSanXuat,
            'listTheLoaiCha' =>  $listTheLoaiCha,
            'listTheLoaiLaptop' =>  $listTheLoaiLaptop,
            'listTheLoaiMayTinhBan' =>  $listTheLoaiMayTinhBan,
            'listTheLoaiLinhKien' =>  $listTheLoaiLinhKien,
            'listTheLoaiPhuKien' =>  $listTheLoaiPhuKien,
            'listTheLoaiManHinh' =>  $listTheLoaiManHinh,

            'listHoaDonCT' =>  $listHoaDonCT,
            'listAnh' =>  $listAnh,
            'listSanPham' =>  $listSanPham,
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
