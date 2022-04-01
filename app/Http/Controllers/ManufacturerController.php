<?php

namespace App\Http\Controllers;

use App\Models\ProductImageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManufacturerController extends Controller
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

        // Kiểm tra cho vào session thể loại cha
        $theLoaiCha1 = $request->get("theLoaiCha");
        if ($theLoaiCha1 != null) {
            # code...
            $request->session()->put('theLoaiCha', $theLoaiCha1);
        }
        $theLoaiCha = $request->session()->get('theLoaiCha');

        // Kiểm tra cho vào session thể loại con
        $theLoaiNhaSanXuat1 = $request->get('theLoaiNhaSanXuat');
        if ($theLoaiNhaSanXuat1 != null) {
            # code...
            $request->session()->put('theLoaiNhaSanXuat', $theLoaiNhaSanXuat1);
        }
        $theLoaiNhaSanXuat = $request->session()->get('theLoaiNhaSanXuat');

        // dd($theLoaiCha);
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

        $priceMin = session()->get('currentPriceMin');
        $priceMax = session()->get('currentPriceMax');

        // Kiểm tra nếu không có session thể loại con ( bấm từ ngoài vào hoặc chưa chọn bên trong trang vật phẩm)
        if ($theLoaiNhaSanXuat1 == null)
            $listSanPham = DB::table('san_pham')->where('maNSX', $id)->whereBetween('giaSP', [$priceMin, $priceMax])->get();
        else
            $listSanPham = DB::table('san_pham')->where('maNSX', $id)->where('maTLC', $theLoaiNhaSanXuat)->whereBetween('giaSP', [$priceMin, $priceMax])->get();

        // Lấy hãng hiện tại
        $tenNhaSanXuat = DB::table('nha_san_xuat')->where('maNSX', $id)->first();
        $request->session()->put('currentManufacturer', $tenNhaSanXuat->maNSX);
        $request->session()->put('currentManufacturerName', $tenNhaSanXuat->tenNSX);

        return view('Customer.Brand.show', [
            'cartItems' => $cartItems,
            'listSanPham' => $listSanPham,
            'productImage' => $productImage,
            'listNhaSanXuat' => $listNhaSanXuat,
            'listTheLoai' => $listTheLoai,

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
