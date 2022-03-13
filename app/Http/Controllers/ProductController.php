<?php

namespace App\Http\Controllers;

use App\Models\ProductImageModel;
use App\Models\ProductModel;
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
        // Get all từ bảng chức vụ - Chỉ lấy những chức vụ có quyền hạn ( là Admin )
        // $chucVu = DB::table('chuc_vu')->join('chuc_vu_quyen_han', 'chuc_vu.maCV', '=', 'chuc_vu_quyen_han.maCV')
        //     ->join('quyen_han', 'chuc_vu_quyen_han.maQH', '=', 'quyen_han.maQH')->where('tenQH', 'Là Admin')->get();

        // // Lấy bản ghi có chức vụ gồm quyền hạn ( Là Admin )
        // $admin = UserModel::join('chuc_vu_quyen_han', 'nguoi_dung.maCV', '=', 'chuc_vu_quyen_han.maCV')
        //     ->join('quyen_han', 'chuc_vu_quyen_han.maQH', '=', 'quyen_han.maQH')
        //     ->where('tenQH', 'Là Admin')
        //     ->orderBy('maND', 'desc')->get();

        // Get all sản phẩm mới thêm vào - là máy tính
        $productImage = ProductImageModel::get();
        $computerNew = ProductModel::skip(0)->take(12)->orderBy('maSP')->get();
        $computerNew1 = ProductModel::skip(0)->take(4)->orderBy('maSP')->get();
        $computerNew2 = ProductModel::skip(4)->take(4)->orderBy('maSP')->get();
        $computerNew3 = ProductModel::skip(8)->take(4)->orderBy('maSP')->get();

        $laptopNew1 = ProductModel::join('the_loai', 'san_pham.maTL', '=', 'the_loai.maTL')->where('tenTL', 'Laptop gaming')->skip(0)->take(4)->get();
        $laptopNew2 = ProductModel::join('the_loai', 'san_pham.maTL', '=', 'the_loai.maTL')->where('tenTL', 'Laptop gaming')->skip(4)->take(4)->get();
        $laptopNew3 = ProductModel::join('the_loai', 'san_pham.maTL', '=', 'the_loai.maTL')->where('tenTL', 'Laptop gaming')->skip(8)->take(4)->get();


        return view('Customer.Customer.index', [
            'productImage' => $productImage,
            'computerNew1' => $computerNew1,
            'computerNew2' => $computerNew2,
            'computerNew3' => $computerNew3,
            'computerNew' => $computerNew,
            'laptopNew1' => $laptopNew1,
            'laptopNew2' => $laptopNew2,
            'laptopNew3' => $laptopNew3,

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
