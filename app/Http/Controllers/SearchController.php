<?php

namespace App\Http\Controllers;

use App\Models\ProductImageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Kiểm tra biến search và cho vào session
        $search1 = $request->get('search');
        if ($search1 != null) {
            $request->session()->put('search', $search1);
        } else {
            $request->session()->put('search', "");
        }
        $search = $request->session()->get('search');

        // Lấy thể loại
        $theLoaiCha1 = $request->get("theLoaiCha");

        // Lấy loại
        $loai = $request->get('loai');

        // Nếu lấy thể loại lần đầu thành công - Cho vào session
        if ($theLoaiCha1 != null) {
            # code...
            $request->session()->put('theLoaiCha', $theLoaiCha1);
        }

        $theLoaiCha = $request->session()->get('theLoaiCha');

        $listTheLoai = DB::table('the_loai_con')->where('maTL', $theLoaiCha)->get();
        // Lấy hãng
        $listNhaSanXuat = DB::table('nha_san_xuat')->get();
        // Lấy ảnh
        $productImage = ProductImageModel::get();
        // Lấy giỏ hàng
        $cartItems = \Cart::getContent();

        // Lấy dữ liệu mới từ filter
        $productBrand = $request->get('nhaSanXuat');
        $theLoaiConCate = $request->get('theLoaiCon');

        // PRICE MIN là giá được điền trong trường điền
        // PRICE MIN 2 là giá được định trước
        // Lấy sản phẩm
        $priceMin = $request->get("priceMin");
        $priceMax = $request->get("priceMax");
        $priceMin2 = $request->get("priceMin2");
        $priceMax2 = $request->get("priceMax2");

        // // Nếu giá min không được nhập
        // if ($priceMin == null)
        //     $priceMin = 0;

        // // Nếu giá max không được nhập
        // if ($priceMax == null)
        //     $priceMax = 10000000000;

        // Nếu giá min định trước được trọn mà giá max ko được chọn
        if ($priceMin2 != null && $priceMax2 == null) {
            $priceMin = $priceMin2;
            $priceMax = 10000000000;
        }

        // Nếu giá max định trước được trọn mà giá min ko được chọn
        if ($priceMax2 != null && $priceMin2 == null) {
            $priceMax = $priceMax2;
            $priceMin = 0;
        }

        // Nếu giá min và max định trước được chọn
        if ($priceMax2 != null && $priceMin2 != null) {
            $priceMin = $priceMin2;
            $priceMax = $priceMax2;
        }

        // Nếu giá min lớn hơn giá max
        if ($priceMin > $priceMax) {
            $priceMin = 0;
            $priceMax = 10000000000;
        }

        // Cho vào session
        $request->session()->put('currentPriceMin', $priceMin);
        $request->session()->put('currentPriceMax', $priceMax);


        function get_string_between($string, $start, $end)
        {
            $string = ' ' . $string;
            $ini = strpos($string, $start);
            if ($ini == 0) return '';
            $ini += strlen($start);
            $len = strpos($string, $end, $ini) - $ini;
            return substr($string, $ini, $len);
        }



        $listSanPham = DB::table('san_pham')
            ->join('the_loai_con', 'the_loai_con.maTLC', '=', 'san_pham.maTLC')
            // Nhà sản xuất
            ->where(function ($query) use ($productBrand) {
                if ($productBrand != null)
                    $query->where('maNSX', $productBrand);
            })
            // Thể loại con
            ->where(function ($query) use ($theLoaiConCate) {
                if ($theLoaiConCate != null)
                    $query->where('san_pham.maTLC', $theLoaiConCate);
            })
            // Giá sản phẩm
            ->where(function ($query) use ($priceMin, $priceMax) {
                if ($priceMin != null && $priceMax != null)
                    $query->whereBetween('giaSP', [$priceMin, $priceMax]);
                elseif ($priceMin == null && $priceMax != null)
                    $query->whereBetween('giaSP', [0, $priceMax]);
                elseif ($priceMin != null && $priceMax == null)
                    $query->where('giaSP', '>', $priceMin);
                else
                    $query->where('giaSP', '>', 0);
            })
            // Thể loại cha
            ->where(function ($query) use ($theLoaiCha1) {
                if ($theLoaiCha1 != null)
                    $query->where('maTL', $theLoaiCha1);
            })
            ->where(function ($query) use ($search) {
                if ($search !== "")
                    $query->where('tenSP', 'like', '%' . $search . '%');
                else
                    $query->where('tenSP', 'like', '%%');
            })
            ->get();

        // Kiểm tra nếu không có session thể loại con ( bấm từ ngoài vào hoặc chưa chọn bên trong trang vật phẩm)
        $theLoaiChaCate = $request->get('theLoaiCha');
        // $theLoaiConCate = $request->get('theLoaiCon');
        $nhaSanXuatCate = $request->get('nhaSanXuat');

        // // Kiểm tra cho vào session thể loại con
        // $theLoaiNhaSanXuat1 = $request->get('theLoaiNhaSanXuat');
        // if ($theLoaiNhaSanXuat1 != null) {
        //     # code...
        //     $request->session()->put('theLoaiNhaSanXuat', $theLoaiNhaSanXuat1);
        // }
        // $theLoaiNhaSanXuat = $request->session()->get('theLoaiNhaSanXuat');

        // // dd($theLoaiCha);
        // $listTheLoai = DB::table('the_loai_con')->get();

        // // Lấy hãng
        // $listNhaSanXuat = DB::table('nha_san_xuat')->get();
        // // Lấy ảnh
        // $productImage = ProductImageModel::get();
        // // Lấy giỏ hàng
        // $cartItems = \Cart::getContent();
        // // Lấy sản phẩm
        // $priceMinInput = $request->get("priceMin");
        // $priceMaxInput = $request->get("priceMax");


        // $priceMin2 = $request->get("priceMin2");
        // $priceMax2 = $request->get("priceMax2");

        // if ($priceMinInput == null) {
        //     // $priceMin = 0;
        //     $priceMin = session()->get('currentPriceMin');
        //     if ($priceMin == null)
        //         $priceMin = 0;
        // } else
        //     $priceMin = $priceMinInput;
        // if ($priceMaxInput == null) {
        //     // $priceMax = 10000000000;
        //     $priceMax = session()->get('currentPriceMax');
        //     if ($priceMax == null)
        //         $priceMax = 10000000000;
        // } else
        //     $priceMax = $priceMaxInput;
        // if ($priceMin2 != null && $priceMax2 == null) {
        //     $priceMin = $priceMin2;
        //     $priceMax = 10000000000;
        // }
        // if ($priceMax2 != null && $priceMin2 == null) {
        //     $priceMax = $priceMax2;
        //     $priceMin = 0;
        // }
        // if ($priceMax2 != null && $priceMin2 != null) {
        //     $priceMin = $priceMin2;
        //     $priceMax = $priceMax2;
        // }

        // if ($priceMin > $priceMax) {
        //     $priceMin = 0;
        //     $priceMax = 10000000000;
        // }
        // $request->session()->put('currentPriceMin', $priceMin);
        // $request->session()->put('currentPriceMax', $priceMax);

        // $priceMin = session()->get('currentPriceMin');
        // $priceMax = session()->get('currentPriceMax');

        // Kiểm tra nếu không có session thể loại con ( bấm từ ngoài vào hoặc chưa chọn bên trong trang vật phẩm)
        // if ($theLoaiNhaSanXuat1 != null)
        // $listSanPham = DB::table('san_pham')->where('maNSX', $id)->where('maTLC', $theLoaiNhaSanXuat)->whereBetween('giaSP', [$priceMin, $priceMax])->get();
        //     $listSanPham = DB::table('san_pham')->where('maTLC', $theLoaiNhaSanXuat)->where('tenSP', 'like', '%' . $search . '%')->whereBetween('giaSP', [$priceMin, $priceMax])->get();
        // else
        // $listSanPham = DB::table('san_pham')->where('maNSX', $id)->whereBetween('giaSP', [$priceMin, $priceMax])->get();
        // $listSanPham = DB::table('san_pham')->where('tenSP', 'like', '%' . $search . '%')->whereBetween('giaSP', [$priceMin, $priceMax])->get();

        // return view('Customer.ProductCategory.showSearch', [
        return view('Customer.ProductCategory.show', [
            'cartItems' => $cartItems,
            'listSanPham' => $listSanPham,
            'productImage' => $productImage,
            'listNhaSanXuat' => $listNhaSanXuat,
            'listTheLoai' => $listTheLoai,
            'theLoaiChaCate' => $theLoaiChaCate,
            'theLoaiConCate' => $theLoaiConCate,
            'nhaSanXuatCate' => $nhaSanXuatCate,

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
    public function show(Request $request, $id)
    {
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
