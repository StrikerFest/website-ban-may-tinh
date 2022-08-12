<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PCBuilderController extends Controller
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
    public function create(Request $request)
    {
        //
        $receiver = $request->get('PCBModal');

        // session()->flush();
        // dd($receiver);
        // dd(session()->get('modal'));
        $cartItems = \Cart::getContent();
        $listTheLoaiCha = DB::table('the_loai')->get();
        $listNhaSanXuat = DB::table('nha_san_xuat')->skip(0)->take(7)->get();
        $listTheLoaiMayTinhBan = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Máy tính bàn')->get();
        $listTheLoaiLaptop = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Laptop')->get();
        $listTheLoaiLinhKien = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Linh kiện')->get();
        $listTheLoaiPhuKien = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Phụ kiện')->get();
        $listTheLoaiManHinh = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Màn hình')->get();
        $PCBTheLoai = session()->has('PCBTheLoai') ? session()->get('PCBTheLoai') : '';

        // if ($receiver == "VGA") {
        //     $PCBTheLoai = "Card thiết kế đồ họa";
        //     // session()->put('modal', 1);
        //     // session()->put('modalClose', 0);
        // } else if ($receiver == "LaptopGaming") {
        //     $PCBTheLoai = "Laptop gaming";
        //     // session()->put('modal', 1);
        //     // session()->put('modalClose', 0);
        // }
        // Btn press send data
        if ($receiver !== "") {
            // When close btn pressed
            if (session()->get('modalClose') == 1) {
                // Reset data
                $receiver = "";
                // Close use of close btn
                session()->put('modalClose', 0);
                // Close use of modal
                session()->put('modal', 0);
                // dd("here");
            } else {
                session()->put('modal', 1);
            }
        }
        $receiver = "";
        // die();
        // dd(session()->get("modal"));
        $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', $PCBTheLoai)->get();
        $productImage = DB::table('anh_san_pham')->get();

        return view('Customer.PCBuilder.pcbuilder', [
            'listTheLoaiCha' =>  $listTheLoaiCha,
            'cartItems' =>  $cartItems,
            'listTheLoaiLaptop' =>  $listTheLoaiLaptop,
            'listTheLoaiMayTinhBan' =>  $listTheLoaiMayTinhBan,
            'listTheLoaiLinhKien' =>  $listTheLoaiLinhKien,
            'listTheLoaiPhuKien' =>  $listTheLoaiPhuKien,
            'listTheLoaiManHinh' =>  $listTheLoaiManHinh,
            'listNhaSanXuat' =>  $listNhaSanXuat,
            'listSanPhamModal' =>  $listSanPhamModal,
            'PCBTheLoai' =>  $PCBTheLoai,
            'productImage' =>  $productImage,

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
        $receiverItemId = $request->get("PCBMa");
        if ($request->has("PCBMa")) {
            $item = DB::table('san_pham')->where('maSP', '=', $receiverItemId)->first();
            session()->put('PCBEmpty', 0);
        } else {
            $item = DB::table('san_pham')->first();
            session()->put('PCBEmpty', 1);
        }

        // echo "<br>Modal head" . session()->get('modal');
        // echo "<br>Modal close head" . session()->get('modalClose');
        $receiver = $request->get('PCBModal');
        // echo "<br>Received start" . $receiver;
        // session()->flush();
        // dd($receiver);
        // dd(session()->get('modal'));
        $cartItems = \Cart::getContent();
        $listTheLoaiCha = DB::table('the_loai')->get();
        $listNhaSanXuat = DB::table('nha_san_xuat')->skip(0)->take(7)->get();
        $listTheLoaiMayTinhBan = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Máy tính bàn')->get();
        $listTheLoaiLaptop = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Laptop')->get();
        $listTheLoaiLinhKien = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Linh kiện')->get();
        $listTheLoaiPhuKien = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Phụ kiện')->get();
        $listTheLoaiManHinh = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Màn hình')->get();
        $PCBTheLoai = "";

        switch ($receiver) {
            case "VGA":
                $PCBTheLoai = "Card thiết kế đồ họa";
                session()->put('PCBTheLoai', $PCBTheLoai);
                break;
            case "LaptopGaming":
                $PCBTheLoai = "Laptop gaming";
                session()->put('PCBTheLoai', $PCBTheLoai);
                break;
        }


        $soLuongVGA = $request->get('PCBSoLuongVGA');
        if ($soLuongVGA !== 1 && $soLuongVGA !== null) {
            session()->put('PCBSoLuongVGA', $soLuongVGA);
            // return response()->json(['success' => 'Data is successfully added']);
        }

        $soLuongL = $request->get('PCBSoLuongL');
        if ($soLuongL !== 1 && $soLuongL !== null) {
            session()->put('PCBSoLuongL', $soLuongL);
            // return response()->json(['ajaxSoLuongL' => session()->get('PCBSoLuongL')]);
        }


        if (session()->get('PCBTheLoai') == 'Card thiết kế đồ họa') {
            if (session()->get('PCBEmpty') !== 1) {
                session()->put('PCBTenVGA', $item->tenSP);
                session()->put('PCBMaVGA', $item->maSP);
                session()->put('PCBGiaVGA', $item->giaSP);
                session()->put('PCBBaoHanhVGA', "1 năm");
                session()->put('PCBTinhTrangVGA', "Còn hàng");
            }
        } else if (session()->get('PCBTheLoai') == 'Laptop gaming') {
            if (session()->get('PCBEmpty') !== 1) {
                session()->put('PCBTenL', $item->tenSP);
                session()->put('PCBMaL', $item->maSP);
                session()->put('PCBGiaL', $item->giaSP);
                session()->put('PCBBaoHanhL', "1 năm");
                session()->put('PCBTinhTrangL', "Còn hàng");
            }
        }

        if ($request->PCBDeleteVGA == 1) {
            session()->forget('PCBTenVGA');
            session()->forget('PCBMaVGA');
            session()->forget('PCBGiaVGA');
            session()->forget('PCBBaoHanhVGA');
            session()->forget('PCBTinhTrangVGA');
        } elseif ($request->PCBDeleteL == 1) {
            session()->forget('PCBTenL');
            session()->forget('PCBMaL');
            session()->forget('PCBGiaL');
            session()->forget('PCBBaoHanhL');
            session()->forget('PCBTinhTrangL');
        }




        // Btn press send data
        if ($receiver !== "") {
            // When close btn pressed
            if (session()->get('modalClose') == 1) {
                // Reset data
                $receiver = "";
                // Close use of close btn
                session()->put('modalClose', 0);
                // Close use of modal
                session()->put('modal', 0);
                // dd("here");
                echo "<br>Reached";
            } else {
                session()->put('modal', 1);
            }
        }
        echo "<br>Received end" . $receiver;

        echo "<br>Modal end" . session()->get('modal');
        echo "<br>Modal close end" . session()->get('modalClose');
        $receiver = "";
        echo "<br>request end" . $request->get('PCBModal');
        // die();
        // dd(session()->get("modal"));
        $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', $PCBTheLoai)->get();
        // return view('Customer.PCBuilder.pcbuilder', [
        return redirect()->route('PCBuilderCustomer.create', [
            'listTheLoaiCha' =>  $listTheLoaiCha,
            'cartItems' =>  $cartItems,
            'listTheLoaiLaptop' =>  $listTheLoaiLaptop,
            'listTheLoaiMayTinhBan' =>  $listTheLoaiMayTinhBan,
            'listTheLoaiLinhKien' =>  $listTheLoaiLinhKien,
            'listTheLoaiPhuKien' =>  $listTheLoaiPhuKien,
            'listTheLoaiManHinh' =>  $listTheLoaiManHinh,
            'listNhaSanXuat' =>  $listNhaSanXuat,
            'listSanPhamModal' =>  $listSanPhamModal,
            // 'PCBTheLoai' =>  $PCBTheLoai,

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
