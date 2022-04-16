<?php

namespace App\Http\Controllers;

use App\Models\ProductImageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
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
        // if (!session()->has('khachHang')) {
        //     return Redirect::route('product.index')->with("error", "Mời khách hàng đăng nhập trước");
        // }
        // Lấy thể loại
        $theLoaiCha1 = $request->get("theLoaiCha");
        if ($theLoaiCha1 != null) {
            # code...
            $request->session()->put('theLoaiCha', $theLoaiCha1);
        }

        $theLoaiCha = $request->session()->get('theLoaiCha');

        // $maTheLoaiCha = DB::table('the_loai_con')->where('maTLC', $id)->first();
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
        $request->session()->put('currentPriceMin', $priceMin);
        $request->session()->put('currentPriceMax', $priceMax);

        // $listSanPham = DB::table('san_pham')->where('maTLC', $id)->whereBetween('giaSP', [$priceMin, $priceMax])->get();

        // // Lấy thể loại hiện tại
        // $tenTheLoai = DB::table('the_loai_con')->where('maTLC', $id)->first();
        // $request->session()->put('currentCategory', $tenTheLoai->maTLC);
        // $request->session()->put('currentCategoryName', $tenTheLoai->tenTLC);
        $theLoaiConCate = $request->get('theLoaiCon');

        if ($id != "null") {
            $theLoaiConCate = $id;
        }

        if ( $request->get('nhaSanXuat') == null) {
            if ($theLoaiConCate == null) {
                $listSanPham = DB::table('san_pham')->join('the_loai_con', 'the_loai_con.maTLC', '=', 'san_pham.maTLC')
                    ->whereBetween('giaSP', [$priceMin, $priceMax])
                    ->where('maTL', $request->get('theLoaiCha'))
                    ->get();
            } else {
                $listSanPham = DB::table('san_pham')->join('the_loai_con', 'the_loai_con.maTLC', '=', 'san_pham.maTLC')
                    ->whereBetween('giaSP', [$priceMin, $priceMax])
                    ->where('maTL', $request->get('theLoaiCha'))
                    ->where('san_pham.maTLC', $theLoaiConCate)
                    ->get();
            }
        } else {
            if ($theLoaiConCate == null) {
                $listSanPham = DB::table('san_pham')->join('the_loai_con', 'the_loai_con.maTLC', '=', 'san_pham.maTLC')
                    ->whereBetween('giaSP', [$priceMin, $priceMax])
                    ->where('maTL', $request->get('theLoaiCha'))
                    ->where('maNSX',  $request->get('nhaSanXuat'))
                    ->get();
            } else {
                $listSanPham = DB::table('san_pham')->join('the_loai_con', 'the_loai_con.maTLC', '=', 'san_pham.maTLC')
                    ->whereBetween('giaSP', [$priceMin, $priceMax])
                    ->where('maTL', $request->get('theLoaiCha'))
                    ->where('san_pham.maTLC', $theLoaiConCate)
                    ->where('maNSX',  $request->get('nhaSanXuat'))
                    ->get();
            }
        }
        $maTLCMin = DB::table('the_loai_con')->selectRaw('min(maTLC) as maTLC')->first();

        // Kiểm tra nếu không có session thể loại con ( bấm từ ngoài vào hoặc chưa chọn bên trong trang vật phẩm)
        $theLoaiChaCate = $request->get('theLoaiCha');
        // $theLoaiConCate = $request->get('theLoaiCon');
        $nhaSanXuatCate = $request->get('nhaSanXuat');

        return view('Customer.ProductCategory.show', [
            'cartItems' => $cartItems,
            'listSanPham' => $listSanPham,
            'productImage' => $productImage,
            'listNhaSanXuat' => $listNhaSanXuat,
            'listTheLoai' => $listTheLoai,

            'maTLCMin' => $maTLCMin,
            'theLoaiChaCate' => $theLoaiChaCate,
            'theLoaiConCate' => $theLoaiConCate,
            'nhaSanXuatCate' => $nhaSanXuatCate,

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
