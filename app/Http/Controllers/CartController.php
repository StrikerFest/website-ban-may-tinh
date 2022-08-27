<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    // Cart list
    public function cartList(Request $request)
    {
        $request->session()->put('loginError', true);
        // if (!session()->has('khachHang')) {
        //     return Redirect::route('product.index')->with("error", "Mời khách hàng đăng nhập trước");
        // }
        session()->forget('loginError');
        $listTheLoaiMayTinhBan = DB::table(
            'the_loai_con'
        )->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Máy tính bàn')->get();
        $listTheLoaiLaptop = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Laptop')->get();
        $listTheLoaiLinhKien = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Linh kiện')->get();
        $listTheLoaiPhuKien = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Phụ kiện')->get();
        $listTheLoaiManHinh = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Màn hình')->get();
        $listTheLoaiSidenav = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->get();

        $listTheLoaiCha = DB::table('the_loai')->get();
        $listNhaSanXuat = DB::table(
            'nha_san_xuat'
        )->skip(0)->take(7)->get();
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('Customer.Customer.cart', [
            'cartItems' =>  $cartItems,
            'listNhaSanXuat' =>  $listNhaSanXuat,
            'listTheLoaiCha' =>  $listTheLoaiCha,
            'listTheLoaiLaptop' =>  $listTheLoaiLaptop,
            'listTheLoaiMayTinhBan' =>  $listTheLoaiMayTinhBan,
            'listTheLoaiLinhKien' =>  $listTheLoaiLinhKien,
            'listTheLoaiPhuKien' =>  $listTheLoaiPhuKien,
            'listTheLoaiManHinh' =>  $listTheLoaiManHinh,
            'listTheLoaiSidenav' =>  $listTheLoaiSidenav,
        ]);
    }

    // store
    public function addToCart(Request $request)
    {
        // if (!session()->has('khachHang')) {
        //     return Redirect::route('product.index')->with("error", "Mời khách hàng đăng nhập trước");
        // }
        $quantity = $request->quantity;
        if ($request->quantity <= 0) {
            $quantity = 1;
        }

        if ($request->noVoucher == null)
            \Cart::add([
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $quantity,
                'attributes' => array(
                    'image' => $request->image,
                    'reduceFlat' => $request->reduceFlat,
                    'reducePercent' => $request->reducePercent,
                    'itemId' => $request->id,
                )
            ]);
        else
            \Cart::add([
                'id' => $request->id . 'NV',
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $quantity,
                'attributes' => array(
                    'image' => $request->image,
                    'reduceFlat' => $request->reduceFlat,
                    'reducePercent' => $request->reducePercent,
                    'itemId' => $request->id,
                )
            ]);
        session()->flash('success', 'Sản phẩm thêm vào giỏ hàng thành công !');

        return redirect(url()->previous() . '#collapsePoint')->with("cartAddSuccess", "Thêm vào giỏ hàng thành công");
    }

    public function addToCartPCB(Request $request)
    {

        $emptyCartCheck = 1;
        // CPU
        $quantity = $request->PCBCartSoLuongCPU;

        if ($request->PCBCartSoLuongCPU <= 0 || $request->PCBCartSoLuongCPU > 9) {
            $quantity = 1;
        }
        $sanPham = DB::table('san_pham')->where('maSP', $request->PCBCartMaCPU)->first();
        if ($sanPham !== null) {
            $emptyCartCheck = 0;
            \Cart::add([
                'id' => $sanPham->maSP,
                'name' => $sanPham->tenSP,
                'price' => $sanPham->giaSP,
                'quantity' => $quantity,
                'attributes' => array(
                    'image' => $request->PCBCartAnhCPU,
                )
            ]);
        }
        // BMC
        $quantity = $request->PCBCartSoLuongBMC;

        if ($request->PCBCartSoLuongBMC <= 0 || $request->PCBCartSoLuongBMC > 9) {
            $quantity = 1;
        }
        $sanPham = DB::table('san_pham')->where('maSP', $request->PCBCartMaBMC)->first();
        if ($sanPham !== null) {
            $emptyCartCheck = 0;
            \Cart::add([
                'id' => $sanPham->maSP,
                'name' => $sanPham->tenSP,
                'price' => $sanPham->giaSP,
                'quantity' => $quantity,
                'attributes' => array(
                    'image' => $request->PCBCartAnhBMC,
                )
            ]);
        }
        // RAM
        $quantity = $request->PCBCartSoLuongRAM;

        if ($request->PCBCartSoLuongRAM <= 0 || $request->PCBCartSoLuongRAM > 9) {
            $quantity = 1;
        }
        $sanPham = DB::table('san_pham')->where('maSP', $request->PCBCartMaRAM)->first();
        if ($sanPham !== null) {
            $emptyCartCheck = 0;
            \Cart::add([
                'id' => $sanPham->maSP,
                'name' => $sanPham->tenSP,
                'price' => $sanPham->giaSP,
                'quantity' => $quantity,
                'attributes' => array(
                    'image' => $request->PCBCartAnhRAM,
                )
            ]);
        }
        // HDD
        $quantity = $request->PCBCartSoLuongHDD;

        if ($request->PCBCartSoLuongHDD <= 0 || $request->PCBCartSoLuongHDD > 9) {
            $quantity = 1;
        }
        $sanPham = DB::table('san_pham')->where('maSP', $request->PCBCartMaHDD)->first();
        if ($sanPham !== null) {
            $emptyCartCheck = 0;
            \Cart::add([
                'id' => $sanPham->maSP,
                'name' => $sanPham->tenSP,
                'price' => $sanPham->giaSP,
                'quantity' => $quantity,
                'attributes' => array(
                    'image' => $request->PCBCartAnhHDD,
                )
            ]);
        }
        // SSD
        $quantity = $request->PCBCartSoLuongSSD;

        if ($request->PCBCartSoLuongSSD <= 0 || $request->PCBCartSoLuongSSD > 9) {
            $quantity = 1;
        }
        $sanPham = DB::table('san_pham')->where('maSP', $request->PCBCartMaSSD)->first();
        if ($sanPham !== null) {
            $emptyCartCheck = 0;
            \Cart::add([
                'id' => $sanPham->maSP,
                'name' => $sanPham->tenSP,
                'price' => $sanPham->giaSP,
                'quantity' => $quantity,
                'attributes' => array(
                    'image' => $request->PCBCartAnhSSD,
                )
            ]);
        }
        // VGA
        $quantity = $request->PCBCartSoLuongVGA;

        if ($request->PCBCartSoLuongVGA <= 0 || $request->PCBCartSoLuongVGA > 9) {
            $quantity = 1;
        }
        $sanPham = DB::table('san_pham')->where('maSP', $request->PCBCartMaVGA)->first();
        if ($sanPham !== null) {
            $emptyCartCheck = 0;
            \Cart::add([
                'id' => $sanPham->maSP,
                'name' => $sanPham->tenSP,
                'price' => $sanPham->giaSP,
                'quantity' => $quantity,
                'attributes' => array(
                    'image' => $request->PCBCartAnhVGA,
                )
            ]);
        }
        // PSU
        $quantity = $request->PCBCartSoLuongPSU;

        if ($request->PCBCartSoLuongPSU <= 0 || $request->PCBCartSoLuongPSU > 9) {
            $quantity = 1;
        }
        $sanPham = DB::table('san_pham')->where('maSP', $request->PCBCartMaPSU)->first();
        if ($sanPham !== null) {
            $emptyCartCheck = 0;
            \Cart::add([
                'id' => $sanPham->maSP,
                'name' => $sanPham->tenSP,
                'price' => $sanPham->giaSP,
                'quantity' => $quantity,
                'attributes' => array(
                    'image' => $request->PCBCartAnhPSU,
                )
            ]);
        }
        // Case
        $quantity = $request->PCBCartSoLuongCase;

        if ($request->PCBCartSoLuongCase <= 0 || $request->PCBCartSoLuongCase > 9) {
            $quantity = 1;
        }
        $sanPham = DB::table('san_pham')->where('maSP', $request->PCBCartMaCase)->first();
        if ($sanPham !== null) {
            $emptyCartCheck = 0;
            \Cart::add([
                'id' => $sanPham->maSP,
                'name' => $sanPham->tenSP,
                'price' => $sanPham->giaSP,
                'quantity' => $quantity,
                'attributes' => array(
                    'image' => $request->PCBCartAnhCase,
                )
            ]);
        }
        // MH
        $quantity = $request->PCBCartSoLuongMH;

        if ($request->PCBCartSoLuongMH <= 0 || $request->PCBCartSoLuongMH > 9) {
            $quantity = 1;
        }
        $sanPham = DB::table('san_pham')->where('maSP', $request->PCBCartMaMH)->first();
        if ($sanPham !== null) {
            $emptyCartCheck = 0;
            \Cart::add([
                'id' => $sanPham->maSP,
                'name' => $sanPham->tenSP,
                'price' => $sanPham->giaSP,
                'quantity' => $quantity,
                'attributes' => array(
                    'image' => $request->PCBCartAnhMH,
                )
            ]);
        }
        // Mouse
        $quantity = $request->PCBCartSoLuongMouse;

        if ($request->PCBCartSoLuongMouse <= 0 || $request->PCBCartSoLuongMouse > 9) {
            $quantity = 1;
        }
        $sanPham = DB::table('san_pham')->where('maSP', $request->PCBCartMaMouse)->first();
        if ($sanPham !== null) {
            $emptyCartCheck = 0;
            \Cart::add([
                'id' => $sanPham->maSP,
                'name' => $sanPham->tenSP,
                'price' => $sanPham->giaSP,
                'quantity' => $quantity,
                'attributes' => array(
                    'image' => $request->PCBCartAnhMouse,
                )
            ]);
        }
        // BP
        $quantity = $request->PCBCartSoLuongBP;

        if ($request->PCBCartSoLuongBP <= 0 || $request->PCBCartSoLuongBP > 9) {
            $quantity = 1;
        }
        $sanPham = DB::table('san_pham')->where('maSP', $request->PCBCartMaBP)->first();
        if ($sanPham !== null) {
            $emptyCartCheck = 0;
            \Cart::add([
                'id' => $sanPham->maSP,
                'name' => $sanPham->tenSP,
                'price' => $sanPham->giaSP,
                'quantity' => $quantity,
                'attributes' => array(
                    'image' => $request->PCBCartAnhBP,
                )
            ]);
        }
        // Fan
        $quantity = $request->PCBCartSoLuongFan;

        if ($request->PCBCartSoLuongFan <= 0 || $request->PCBCartSoLuongFan > 9) {
            $quantity = 1;
        }
        $sanPham = DB::table('san_pham')->where('maSP', $request->PCBCartMaFan)->first();
        if ($sanPham !== null) {
            $emptyCartCheck = 0;
            \Cart::add([
                'id' => $sanPham->maSP,
                'name' => $sanPham->tenSP,
                'price' => $sanPham->giaSP,
                'quantity' => $quantity,
                'attributes' => array(
                    'image' => $request->PCBCartAnhFan,
                )
            ]);
        }
        // TNK
        $quantity = $request->PCBCartSoLuongTNK;

        if ($request->PCBCartSoLuongTNK <= 0 || $request->PCBCartSoLuongTNK > 9) {
            $quantity = 1;
        }
        $sanPham = DB::table('san_pham')->where('maSP', $request->PCBCartMaTNK)->first();
        if ($sanPham !== null) {
            $emptyCartCheck = 0;
            \Cart::add([
                'id' => $sanPham->maSP,
                'name' => $sanPham->tenSP,
                'price' => $sanPham->giaSP,
                'quantity' => $quantity,
                'attributes' => array(
                    'image' => $request->PCBCartAnhTNK,
                )
            ]);
        }
        // TNN
        $quantity = $request->PCBCartSoLuongTNN;

        if ($request->PCBCartSoLuongTNN <= 0 || $request->PCBCartSoLuongTNN > 9) {
            $quantity = 1;
        }
        $sanPham = DB::table('san_pham')->where('maSP', $request->PCBCartMaTNN)->first();
        if ($sanPham !== null) {
            $emptyCartCheck = 0;
            \Cart::add([
                'id' => $sanPham->maSP,
                'name' => $sanPham->tenSP,
                'price' => $sanPham->giaSP,
                'quantity' => $quantity,
                'attributes' => array(
                    'image' => $request->PCBCartAnhTNN,
                )
            ]);
        }

        // L
        $quantity = $request->PCBCartSoLuongL;

        if ($request->PCBCartSoLuongL <= 0 || $request->PCBCartSoLuongL > 9) {
            $quantity = 1;
        }
        $sanPham = DB::table('san_pham')->where('maSP', $request->PCBCartMaL)->first();
        if ($sanPham !== null) {
            $emptyCartCheck = 0;

            \Cart::add([
                'id' => $sanPham->maSP,
                'name' => $sanPham->tenSP,
                'price' => $sanPham->giaSP,
                'quantity' => $quantity,
                'attributes' => array(
                    'image' => $request->PCBCartAnhL,
                )
            ]);
        }
        // - L

        // session()->flash('success', 'Sản phẩm thêm vào giỏ hàng thành công !');
        if ($emptyCartCheck == 0)
            return redirect(url()->previous() . '#collapsePoint')->with("cartAddSuccess", "Thêm vào giỏ hàng thành công");
        else
            return redirect(url()->previous() . '#collapsePoint')->with("cartAddSuccess", "Không có vật phẩm thêm vào giỏ hàng");
    }

    public function goToCart(Request $request)
    {
        // if (!session()->has('khachHang')) {
        //     return Redirect::route('product.index')->with("error", "Mời khách hàng đăng nhập trước");
        // }
        $quantity = $request->quantity;
        if ($request->quantity <= 0) {
            $quantity = 1;
        }
        if ($request->noVoucher == null)
            \Cart::add([
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $quantity,
                'attributes' => array(
                    'image' => $request->image,
                    'reduceFlat' => $request->reduceFlat,
                    'reducePercent' => $request->reducePercent,
                    'itemId' => $request->id,
                )
            ]);
        else
            \Cart::add([
                'id' => $request->id . 'NV',
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $quantity,
                'attributes' => array(
                    'image' => $request->image,
                    'reduceFlat' => $request->reduceFlat,
                    'reducePercent' => $request->reducePercent,
                    'itemId' => $request->id,
                )
            ]);
        session()->flash('success', 'Sản phẩm thêm vào giỏ hàng thành công !');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        // if (!session()->has('khachHang')) {
        //     return Redirect::route('product.index')->with("error", "Mời khách hàng đăng nhập trước");
        // }
        $quantity = $request->quantity;
        if ($request->quantity <= 0) {
            $quantity = 1;
        }
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $quantity
                ],
            ]
        );

        session()->flash('success', 'Số lượng sản phẩm cập nhật thành công !');
        $res = [$request->id, $request->quantity];
        // return redirect()->route('cart.list');
        return response()->json($res);
    }

    public function removeCart(Request $request)
    {
        // if (!session()->has('khachHang')) {
        //     return Redirect::route('product.index')->with("error", "Mời khách hàng đăng nhập trước");
        // }
        \Cart::remove($request->id);
        session()->flash('success', 'Sản phẩm được loại bỏ thành công !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        // if (!session()->has('khachHang')) {
        //     return Redirect::route('product.index')->with("error", "Mời khách hàng đăng nhập trước");
        // }
        \Cart::clear();

        session()->flash('success', 'Tất cả sản phẩm đã được loại bỏ thành công !');

        return redirect()->route('cart.list');
    }
}
