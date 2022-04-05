<?php

namespace App\Http\Controllers;

use App\Models\ProductImageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoneyCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show(Request $request, $id)
    {
        //
        $theLoaiCha1 = $request->get("theLoaiCha");
        if ($theLoaiCha1 != null) {
            # code...
            $request->session()->put('theLoaiCha', $theLoaiCha1);
        }

        $theLoaiCha = $request->session()->get('theLoaiCha');

        // Lấy thể loại
        $listTheLoai = DB::table('the_loai_con')->where('maTL', $theLoaiCha)->get();
        // Lấy hãng
        $listNhaSanXuat = DB::table('nha_san_xuat')->get();
        // Lấy ảnh
        $productImage = ProductImageModel::get();
        // Lấy giỏ hàng
        $cartItems = \Cart::getContent();
        // Lấy sản phẩm
        $priceMin = $request->get("priceMin");
        $priceMax = $request->get("priceMax");
        $priceMin2 = $request->get("priceMin2");
        $priceMax2 = $request->get("priceMax2");
        $check = false;
        if (isset($id)) {
            switch ($id) {
                    // case "duoi5trieu":
                    //     $check = true;
                    //     $priceMin = 0;
                    //     $priceMax = 4999999;
                    //     break;
                case "duoi5trieu":
                    $check = true;
                    $priceRangeMin = 0;
                    $priceRangeMax = 4999999;
                    break;
                case "5trieu-10trieu":
                    $check = true;
                    $priceRangeMin = 5000000;
                    $priceRangeMax = 9999999;
                    break;
                case "10trieu-20trieu":
                    $check = true;
                    $priceRangeMin = 10000000;
                    $priceRangeMax = 19999999;
                    break;
                case "20trieu-30trieu":
                    $check = true;
                    $priceRangeMin = 20000000;
                    $priceRangeMax = 29999999;
                    break;
                case "30trieu-50trieu":
                    $check = true;
                    $priceRangeMin = 30000000;
                    $priceRangeMax = 49999999;
                    break;
                case "tren50trieu":
                    $check = true;
                    $priceRangeMin = 50000000;
                    $priceRangeMax = 10000000000;
                    break;
                case "1":
                    $check = false;
                    break;
            }
        }
        if ($priceMin == null)
            $priceMin = 0;
        if ($priceMax == null)
            $priceMax = 10000000000;
        if ($priceMin2 != null && $priceMax2 == null) {
            $priceMin = $priceMin2;
            $priceMax = 10000000000;
        }
        if ($priceMax2 != null && $priceMin2 == null) {
            $priceMax = $priceMax2;
            $priceMin = 0;
        }
        if ($priceMax2 != null && $priceMin2 != null) {
            $priceMin = $priceMin2;
            $priceMax = $priceMax2;
        }

        if ($priceMin > $priceMax) {
            $priceMin = 0;
            $priceMax = 10000000000;
        }
        if ($check == true) {
            $priceMin = $priceRangeMin;
            $priceMax = $priceRangeMax;
        }
        $request->session()->put('currentPriceMin', $priceMin);
        $request->session()->put('currentPriceMax', $priceMax);

        if ($request->get('nhaSanXuat') == null) {
            if ($request->get('theLoaiCon') == null) {
                $listSanPham = DB::table('san_pham')->join('the_loai_con', 'the_loai_con.maTLC', '=', 'san_pham.maTLC')
                    ->whereBetween('giaSP', [$priceMin, $priceMax])
                    ->where('maTL', $request->get('theLoaiCha'))
                    ->get();
            } else {
                $listSanPham = DB::table('san_pham')->join('the_loai_con', 'the_loai_con.maTLC', '=', 'san_pham.maTLC')
                    ->whereBetween('giaSP', [$priceMin, $priceMax])
                    ->where('maTL', $request->get('theLoaiCha'))
                    ->where('san_pham.maTLC', $request->get('theLoaiCon'))
                    ->get();
            }
        }
        else{
            if ($request->get('theLoaiCon') == null) {
                $listSanPham = DB::table('san_pham')->join('the_loai_con', 'the_loai_con.maTLC', '=', 'san_pham.maTLC')
                    ->whereBetween('giaSP', [$priceMin, $priceMax])
                    ->where('maTL', $request->get('theLoaiCha'))
                    ->where('maNSX', $request->get('nhaSanXuat'))
                    ->get();
            } else {
                $listSanPham = DB::table('san_pham')->join('the_loai_con', 'the_loai_con.maTLC', '=', 'san_pham.maTLC')
                    ->whereBetween('giaSP', [$priceMin, $priceMax])
                    ->where('maTL', $request->get('theLoaiCha'))
                    ->where('san_pham.maTLC', $request->get('theLoaiCon'))
                    ->where('maNSX', $request->get('nhaSanXuat'))
                    ->get();
            }
        }
        $maTLCMin = DB::table('the_loai_con')->selectRaw('min(maTLC) as maTLC')->first();

        $theLoaiChaMoney = $request->get('theLoaiCha');
        $theLoaiConMoney = $request->get('theLoaiCon');
        $nhaSanXuatMoney = $request->get('nhaSanXuat');
        $khoangGia = $id;

        return view('Customer.ProductCategory.showMoney', [
            'cartItems' => $cartItems,
            'listSanPham' => $listSanPham,
            'productImage' => $productImage,
            'listNhaSanXuat' => $listNhaSanXuat,
            'listTheLoai' => $listTheLoai,
            'maTLCMin' => $maTLCMin,
            'theLoaiChaMoney' => $theLoaiChaMoney,
            'khoangGia' => $khoangGia,
            'theLoaiConMoney' => $theLoaiConMoney,
            'nhaSanXuatMoney' => $nhaSanXuatMoney,

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
