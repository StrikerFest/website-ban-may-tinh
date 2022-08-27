<?php

namespace App\Http\Controllers;

use App\Models\BannerImageModel;
use App\Models\BlogContentModel;
use App\Models\BlogModel;
use App\Models\ProductCommentModel;
use App\Models\ProductImageModel;
use App\Models\ProductModel;
use App\Models\ProductVoucherModel;
use App\Models\SubCategoryModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Lấy hãng
        $listNhaSanXuat = DB::table('nha_san_xuat')->skip(0)->take(7)->get();

        $listTheLoaiMayTinhBan = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Máy tính bàn')->get();
        $listTheLoaiLaptop = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Laptop')->get();
        $listTheLoaiLinhKien = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Linh kiện')->get();
        $listTheLoaiPhuKien = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Phụ kiện')->get();
        $listTheLoaiManHinh = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Màn hình')->get();

        $listTheLoaiSidenav = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->get();
        $listTheLoaiCha = DB::table('the_loai')->get();

        // Lấy ảnh
        $productImage = DB::table('anh_san_pham')->get();
        $bannerImage =  DB::table('anh_quang_cao')->take(3)->get();
        // // Get all sản phẩm mới thêm vào - là máy tính
        // $computerNew = ProductModel::skip(0)->take(12)->orderBy('maSP')->get();
        // $computerNew1 = ProductModel::skip(0)->take(4)->orderBy('maSP')->get();
        // $computerNew2 = ProductModel::skip(4)->take(4)->orderBy('maSP')->get();
        // $computerNew3 = ProductModel::skip(8)->take(4)->orderBy('maSP')->get();
        // // Laptop gaming
        // $laptopGamingNew1 = ProductModel::join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->where('tenTLC', 'Laptop gaming')->skip(0)->take(4)->get();
        // $laptopGamingNew2 = ProductModel::join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->where('tenTLC', 'Laptop gaming')->skip(4)->take(4)->get();
        // $laptopGamingNew3 = ProductModel::join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->where('tenTLC', 'Laptop gaming')->skip(8)->take(4)->get();
        // // Laptop văn phòng
        // $laptopOfficeNew1 = ProductModel::join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->where('tenTLC', 'Laptop văn phòng')->skip(0)->take(4)->get();
        // $laptopOfficeNew2 = ProductModel::join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->where('tenTLC', 'Laptop văn phòng')->skip(4)->take(4)->get();
        // $laptopOfficeNew3 = ProductModel::join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->where('tenTLC', 'Laptop văn phòng')->skip(8)->take(4)->get();
        // // Máy tính gaming
        // $computerGamingNew1 = ProductModel::join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->where('tenTLC', 'Máy PC gaming')->skip(0)->take(4)->get();
        // $computerGamingNew2 = ProductModel::join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->where('tenTLC', 'Máy PC gaming')->skip(4)->take(4)->get();
        // $computerGamingNew3 = ProductModel::join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->where('tenTLC', 'Máy PC gaming')->skip(8)->take(4)->get();
        // // Máy trạm
        // $computerStationNew1 = ProductModel::join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->where('tenTLC', 'Máy PC trạm')->skip(0)->take(4)->get();
        // $computerStationNew2 = ProductModel::join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->where('tenTLC', 'Máy PC trạm')->skip(4)->take(4)->get();
        // $computerStationNew3 = ProductModel::join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->where('tenTLC', 'Máy PC trạm')->skip(8)->take(4)->get();
        // // Linh kiện
        // $hardwareNew1 = ProductModel::join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->where('tenTLC', 'Card thiết kế đồ họa')->skip(0)->take(4)->get();
        // $hardwareNew2 = ProductModel::join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->where('tenTLC', 'Card thiết kế đồ họa')->skip(4)->take(4)->get();
        // $hardwareNew3 = ProductModel::join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->where('tenTLC', 'Card thiết kế đồ họa')->skip(8)->take(4)->get();

        $sanPham = DB::table('san_pham')->orderBy('maSP')
            ->get();
        $theLoaiCon = SubCategoryModel::take(10)->get();

        $productPromotion = ProductVoucherModel::join('voucher', 'san_pham_voucher.maVoucher', '=', 'voucher.maVoucher')
            ->select('san_pham_voucher.*','voucher.tenVoucher','voucher.giaTri','voucher.soLuong')
            ->get();

        // $reducedMoneyFlat = 0;
        // $reducedMoneyPercent = $sanPham->giamGia;

        // foreach ($productPromotion as $PP) {
        //     if ($PP->kichHoat == 1) {
        //         $ten = $PP->tenVoucher;
        //         if ($PP->giaTri >= 0 && $PP->giaTri <= 100)
        //             $reducedMoneyPercent += $PP->giaTri;
        //         elseif ($PP->giaTri > 100)
        //             $reducedMoneyFlat += $PP->giaTri;
        //     }
        // }

        $cartItems = \Cart::getContent();

        $saleProduct = ProductModel::where('dacBiet', 1)->get();
        // dd($saleProduct);
        return view('Customer.Customer.index', [
            'productImage' => $productImage,
            'saleProduct' => $saleProduct,
            'sanPham' => $sanPham,
            'theLoaiCon' => $theLoaiCon,
            'productPromotion' => $productPromotion,

            // 'computerNew1' => $computerNew1,
            // 'computerNew2' => $computerNew2,
            // 'computerNew3' => $computerNew3,

            // 'computerNew' => $computerNew,

            // 'laptopGamingNew1' => $laptopGamingNew1,
            // 'laptopGamingNew2' => $laptopGamingNew2,
            // 'laptopGamingNew3' => $laptopGamingNew3,

            // 'laptopOfficeNew1' => $laptopOfficeNew1,
            // 'laptopOfficeNew2' => $laptopOfficeNew2,
            // 'laptopOfficeNew3' => $laptopOfficeNew3,

            // 'computerGamingNew1' => $computerGamingNew1,
            // 'computerGamingNew2' => $computerGamingNew2,
            // 'computerGamingNew3' => $computerGamingNew3,

            // 'computerStationNew1' => $computerStationNew1,
            // 'computerStationNew2' => $computerStationNew2,
            // 'computerStationNew3' => $computerStationNew3,

            // 'hardwareNew1' => $hardwareNew1,
            // 'hardwareNew2' => $hardwareNew2,
            // 'hardwareNew3' => $hardwareNew3,

            'cartItems' =>  $cartItems,

            'listNhaSanXuat' =>  $listNhaSanXuat,
            'listTheLoaiLaptop' =>  $listTheLoaiLaptop,
            'listTheLoaiMayTinhBan' =>  $listTheLoaiMayTinhBan,
            'listTheLoaiLinhKien' =>  $listTheLoaiLinhKien,
            'listTheLoaiPhuKien' =>  $listTheLoaiPhuKien,
            'listTheLoaiManHinh' =>  $listTheLoaiManHinh,
            'listTheLoaiCha' =>  $listTheLoaiCha,

            'bannerImage' => $bannerImage,
            'listTheLoaiSidenav' =>  $listTheLoaiSidenav,

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
        //
        // $bannerImage1 =  DB::table('anh_quang_cao')->take(1)->get();
        $productImage = ProductImageModel::get();
        $productComment = ProductCommentModel::where('maBLC', '!=', null)->get();
        $productCommentMain = ProductCommentModel::where('maBLC', null)->get();
        $user = UserModel::get();

        $productImageGetFirst = ProductImageModel::take(1)->where('maSP', $id)->get();
        $productImageSkipFirst = ProductImageModel::skip(1)->take(9)->where('maSP', $id)->get();

        $sanPham = ProductModel::findOrFail($id);
        $cartItems = \Cart::getContent();
        $productPromotion = ProductVoucherModel::join('voucher', 'san_pham_voucher.maVoucher', '=', 'voucher.maVoucher')
            ->where('san_pham_voucher.maSP', $id)
            ->get();
        function get_string_between($string, $start, $end)
        {
            $string = ' ' . $string;
            $ini = strpos($string, $start);
            if ($ini == 0) return '';
            $ini += strlen($start);
            $len = strpos($string, $end, $ini) - $ini;
            return substr($string, $ini, $len);
        }
        $reducedMoneyFlat = 0;
        $reducedMoneyPercent = $sanPham->giamGia;

        foreach ($productPromotion as $PP) {
            if ($PP->kichHoat == 1) {
                $ten = $PP->tenVoucher;
                if ($PP->giaTri >= 0 && $PP->giaTri <= 100)
                    $reducedMoneyPercent += $PP->giaTri;
                elseif ($PP->giaTri > 100)
                    $reducedMoneyFlat += $PP->giaTri;
            }
        }


        $productSpec = DB::table('san_pham_thong_so')->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')->get();

        $computerNew = ProductModel::skip(0)->take(12)->orderBy('maSP')->get();
        $computerNew1 = ProductModel::skip(0)->take(4)->where('maTLC', $sanPham->maTLC)->orderBy('maSP')->get();
        $computerNew2 = ProductModel::skip(4)->take(4)->where('maTLC', $sanPham->maTLC)->orderBy('maSP')->get();
        $computerNew3 = ProductModel::skip(8)->take(4)->where('maTLC', $sanPham->maTLC)->orderBy('maSP')->get();

        $productReview = BlogModel::where('theLoai', 1)
            ->where('maBV', $sanPham->maBV)
            ->get();

        $productReviewDetail = BlogContentModel::where('maBV', $sanPham->maBV)->get();
        // dd($productReview);
        return view('Customer.Product.index', [
            'productImage' => $productImage,
            'productComment' => $productComment,
            'productCommentMain' => $productCommentMain,
            'user' => $user,
            'sanPham' => $sanPham,
            'cartItems' => $cartItems,
            'productPromotion' => $productPromotion,
            'productSpec' => $productSpec,
            'productReview' => $productReview,
            'productReviewDetail' => $productReviewDetail,
            'reducedMoneyFlat' => $reducedMoneyFlat,
            'reducedMoneyPercent' => $reducedMoneyPercent,

            'computerNew1' => $computerNew1,
            'computerNew2' => $computerNew2,
            'computerNew3' => $computerNew3,

            'computerNew' => $computerNew,

            'productImageGetFirst' => $productImageGetFirst,
            'productImageSkipFirst' => $productImageSkipFirst,

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
