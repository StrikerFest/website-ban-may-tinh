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

        // // session()->flush();
        // // dd($receiver);
        // // dd(session()->get('modal'));
        $cartItems = \Cart::getContent();
        $listTheLoaiCha = DB::table('the_loai')->get();
        $listNhaSanXuat = DB::table('nha_san_xuat')->skip(0)->take(7)->get();
        $listTheLoaiMayTinhBan = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Máy tính bàn')->get();
        $listTheLoaiLaptop = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Laptop')->get();
        $listTheLoaiLinhKien = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Linh kiện')->get();
        $listTheLoaiPhuKien = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Phụ kiện')->get();
        $listTheLoaiManHinh = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Màn hình')->get();
        $PCBTheLoai = session()->has('PCBTheLoai') ? session()->get('PCBTheLoai') : '';
        $listTheLoaiSidenav = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->get();

        // // if ($receiver == "VGA") {
        //     // $PCBTheLoai = "Card thiết kế đồ họa";
        //     // session()->put('modal', 1);
        //     // session()->put('modalClose', 0);
        // // } else if ($receiver == "LaptopGaming") {
        //     // $PCBTheLoai = "Laptop gaming";
        //     // session()->put('modal', 1);
        //     // session()->put('modalClose', 0);
        // // }
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
        // // die();
        // // dd(session()->get("modal"));
        // if ($PCBTheLoai == "VGA")
        //     $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'Card game')->where('tenTLC', 'Card thiết kế đồ họa')->where('tenTLC', 'Card đào coin')->get();
        // else
        //     $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', $PCBTheLoai)->get();

        // if ($PCBTheLoai == "VGA")
        //     $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'Card%')->get();
        // else
        //     $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', $PCBTheLoai)->get();
        // dd($PCBTheLoai);
        $listCheckCPU = null;
        $listCheckCase = null;
        switch ($PCBTheLoai) {
            case "CPU":
                if (session()->has('PCBSocketBMC'))
                    $listSanPhamModal = DB::table('san_pham')
                        ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                        ->join('san_pham_thong_so', 'san_pham.maSP', '=', 'san_pham_thong_so.maSP')
                        ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
                        ->skip(0)->take(7)->where('tenTLC', 'like', 'CPU%')
                        ->where('tenTS', 'Socket')
                        ->where('giaTri', session()->get('PCBSocketBMC'))
                        ->get();
                else
                    $listSanPhamModal = DB::table('san_pham')
                        ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                        ->skip(0)->take(7)->where('tenTLC', 'like', 'CPU%')
                        ->get();
                break;
            case "BMC":

                // dd(session()->has('PCBSizeCase'));


                if (session()->has('PCBSocketCPU') && session()->has('PCBSizeCase')) {
                    $listCheckCPU = DB::table('san_pham')
                        ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                        ->join('san_pham_thong_so', 'san_pham.maSP', '=', 'san_pham_thong_so.maSP')
                        ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
                        ->skip(0)->take(7)->where('tenTLC', 'like', 'Bo mạch %')
                        ->where('tenTS', 'Socket')
                        ->where('giaTri', 'like', session()->get('PCBSocketCPU'))
                        ->get('san_pham.maSP');
                    if (session()->get('PCBSizeCase') == 'Mini')
                        $listCheckCase = DB::table('san_pham')
                            ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                            ->join('san_pham_thong_so', 'san_pham.maSP', '=', 'san_pham_thong_so.maSP')
                            ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
                            ->skip(0)->take(7)->where('tenTLC', 'like', 'Bo mạch %')
                            ->where('tenTS', 'Kích thước bộ')
                            ->where('giaTri', 'like',  'mini%')
                            ->get('san_pham.maSP');
                    else
                        $listCheckCase = DB::table('san_pham')
                            ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                            ->join('san_pham_thong_so', 'san_pham.maSP', '=', 'san_pham_thong_so.maSP')
                            ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
                            ->skip(0)->take(7)->where('tenTLC', 'like', 'Bo mạch %')
                            ->where('tenTS', 'Kích thước bộ')
                            ->where('giaTri', 'like',  '%%')
                            ->get('san_pham.maSP');
                    $listSanPhamModal = DB::table('san_pham')
                        ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                        ->skip(0)->take(7)->where('tenTLC', 'like', 'Bo mạch %')
                        ->get();
                    // dd($listCheckCPU);

                    // $listSanPhamModal = DB::table('san_pham')
                    //     ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                    //     ->join('san_pham_thong_so', 'san_pham.maSP', '=', 'san_pham_thong_so.maSP')
                    //     ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
                    //     ->skip(0)->take(7)->where('tenTLC', 'like', 'Bo mạch %')
                    //     ->where(function ($query) {
                    //         $query->where('tenTS', 'Socket')
                    //             ->where('giaTri', 'like', session()->get('PCBSocketCPU'));
                    //     })->orWhere(function ($query) {
                    //         $query->where('tenTS', 'Kích thước bộ')
                    //             ->where('giaTri', 'like',  'mini%');
                    //     })
                    //     // ->where('tenTS', 'Socket')
                    //     // ->where('tenTS', 'Kích thước bộ')
                    //     // ->where('giaTri', 'like', session()->get('PCBSocketCPU'))
                    //     // ->where('giaTri', 'like',  'mini%')
                    //     ->get();
                    // dd($listSanPhamModal);
                } elseif (session()->has('PCBSocketCPU'))
                    $listSanPhamModal = DB::table('san_pham')
                        ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                        ->join('san_pham_thong_so', 'san_pham.maSP', '=', 'san_pham_thong_so.maSP')
                        ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
                        ->skip(0)->take(7)->where('tenTLC', 'like', 'Bo mạch %')
                        ->where('tenTS', 'Socket')
                        ->where('giaTri', 'like', session()->get('PCBSocketCPU'))
                        ->get();
                elseif (session()->get('PCBSizeCase') == 'Mini')
                    $listSanPhamModal = DB::table('san_pham')
                        ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                        ->join('san_pham_thong_so', 'san_pham.maSP', '=', 'san_pham_thong_so.maSP')
                        ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
                        ->skip(0)->take(7)->where('tenTLC', 'like', 'Bo mạch %')
                        ->where('tenTS', 'Kích thước bộ')
                        ->where('giaTri', 'like',  'mini%')
                        ->get();
                elseif (session()->get('PCBSizeCase') == 'Mid' || session()->get('PCBSizeCase') == 'Full')
                    $listSanPhamModal = DB::table('san_pham')
                        ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                        ->join('san_pham_thong_so', 'san_pham.maSP', '=', 'san_pham_thong_so.maSP')
                        ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
                        ->skip(0)->take(7)->where('tenTLC', 'like', 'Bo mạch %')
                        ->where('tenTS', 'Kích thước bộ')
                        ->where('giaTri', 'like',  '%%')
                        ->get();
                else
                    $listSanPhamModal = DB::table('san_pham')
                        ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                        ->skip(0)->take(7)->where('tenTLC', 'like', 'Bo mạch %')
                        ->get();
                break;
            case "RAM":
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'RAM%')->get();
                break;
            case "HDD":
                $listSanPhamModal = DB::table('san_pham')
                    ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                    ->join('san_pham_thong_so', 'san_pham.maSP', '=', 'san_pham_thong_so.maSP')
                    ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
                    ->skip(0)->take(7)->where('tenTLC', 'like', 'Ổ cứng HDD%')
                    ->where('tenTS', 'Kích thước')
                    ->where('giaTri', 'like', '3.5%')
                    ->get();
                break;
            case "SSD":
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'Ổ cứng SSD%')->get();
                break;
            case "VGA":
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'Card%')->get();
                break;
            case "PSU":
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'Nguồn%')->get();
                break;
            case "Case":
                if (substr(session()->get('PCBSizeBMC'), 0, 4) == 'mini')
                    $listSanPhamModal = DB::table('san_pham')
                        ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                        ->join('san_pham_thong_so', 'san_pham.maSP', '=', 'san_pham_thong_so.maSP')
                        ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
                        ->skip(0)->take(7)->where('tenTLC', 'like', 'Vỏ case%')
                        ->where('tenTS', 'Kích thước')
                        ->where('giaTri', 'like', 'Mini')
                        ->get();
                //     // default:
                //     //     // dd(session()->get('PCBSizeBMC'));
                //     //     $listSanPhamModal = DB::table('san_pham')
                //     //         ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                //     //         ->join('san_pham_thong_so', 'san_pham.maSP', '=', 'san_pham_thong_so.maSP')
                //     //         ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
                //     //         ->skip(0)->take(7)->where('tenTLC', 'like', 'Vỏ case%')
                //     //         ->get();
                //     //     break;
                // } else
                // dd(session()->get('PCBSizeBMC'));
                // dd(substr(session()->get('PCBSizeBMC'), 0, 4) == 'mini');
                else
                    // $listSanPhamModal = DB::table('san_pham')
                    //     ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                    //     ->skip(0)->take(7)->where('tenTLC', 'like', 'Vỏ case%')
                    //     ->get();
                    $listSanPhamModal = DB::table('san_pham')
                        ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                        ->join('san_pham_thong_so', 'san_pham.maSP', '=', 'san_pham_thong_so.maSP')
                        ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
                        ->skip(0)->take(7)->where('tenTLC', 'like', 'Vỏ case%')
                        ->where('tenTS', 'Kích thước')
                        ->where('giaTri', 'not like', 'Mini')
                        ->get();
                break;
            case "MH":
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'Màn hình%')->get();
                break;
            case "Mouse":
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'Chuột%')->get();
                break;
            case "BP":
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'Bàn phím%')->get();
                break;
            case "Fan":
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'Quạt làm mát%')->get();
                break;
            case "TNK":
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'Tản nhiệt khí%')->get();
                break;
            case "TNN":
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'Tản nhiệt nước%')->get();
                break;
            default:
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', '%%')->get();
                // $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', $PCBTheLoai)->get();
                break;
        }
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
            'listCheckCPU' =>  $listCheckCPU,
            'listCheckCase' =>  $listCheckCase,
            'listTheLoaiSidenav' =>  $listTheLoaiSidenav,

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

        // // echo "<br>Modal head" . session()->get('modal');
        // // echo "<br>Modal close head" . session()->get('modalClose');
        $receiver = $request->get('PCBModal');
        // // echo "<br>Received start" . $receiver;
        // // session()->flush();
        // // dd($receiver);
        // // dd(session()->get('modal'));
        $cartItems = \Cart::getContent();
        $listTheLoaiCha = DB::table('the_loai')->get();
        $listNhaSanXuat = DB::table('nha_san_xuat')->skip(0)->take(7)->get();
        $listTheLoaiMayTinhBan = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Máy tính bàn')->get();
        $listTheLoaiLaptop = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Laptop')->get();
        $listTheLoaiLinhKien = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Linh kiện')->get();
        $listTheLoaiPhuKien = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Phụ kiện')->get();
        $listTheLoaiManHinh = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->skip(0)->take(7)->where('tenTL', 'Màn hình')->get();
        $PCBTheLoai = "";
        $listTheLoaiSidenav = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->get();

        // Lấy thể loại - Cho thể loại vào session
        switch ($receiver) {
            case "CPU":
                $PCBTheLoai = "CPU";
                session()->put('PCBTheLoai', $PCBTheLoai);
                break;
            case "BMC":
                $PCBTheLoai = "BMC";
                session()->put('PCBTheLoai', $PCBTheLoai);
                break;
            case "RAM":
                $PCBTheLoai = "RAM";
                session()->put('PCBTheLoai', $PCBTheLoai);
                break;
            case "HDD":
                $PCBTheLoai = "HDD";
                session()->put('PCBTheLoai', $PCBTheLoai);
                break;
            case "SSD":
                $PCBTheLoai = "SSD";
                session()->put('PCBTheLoai', $PCBTheLoai);
                break;
            case "VGA":
                $PCBTheLoai = "VGA";
                session()->put('PCBTheLoai', $PCBTheLoai);
                break;
            case "PSU":
                $PCBTheLoai = "PSU";
                session()->put('PCBTheLoai', $PCBTheLoai);
                break;
            case "Case":
                $PCBTheLoai = "Case";
                session()->put('PCBTheLoai', $PCBTheLoai);
                break;
            case "MH":
                $PCBTheLoai = "MH";
                session()->put('PCBTheLoai', $PCBTheLoai);
                break;
            case "Mouse":
                $PCBTheLoai = "Mouse";
                session()->put('PCBTheLoai', $PCBTheLoai);
                break;
            case "BP":
                $PCBTheLoai = "BP";
                session()->put('PCBTheLoai', $PCBTheLoai);
                break;
            case "Fan":
                $PCBTheLoai = "Fan";
                session()->put('PCBTheLoai', $PCBTheLoai);
                break;
            case "TNK":
                $PCBTheLoai = "TNK";
                session()->put('PCBTheLoai', $PCBTheLoai);
                break;
            case "TNN":
                $PCBTheLoai = "TNN";
                session()->put('PCBTheLoai', $PCBTheLoai);
                break;
            case "LaptopGaming":
                $PCBTheLoai = "Laptop gaming";
                session()->put('PCBTheLoai', $PCBTheLoai);
                break;
        }

        // Xử lý số lượng cho AJAX

        // CPU
        $soLuongCPU = $request->get('PCBSoLuongCPU');
        if ($soLuongCPU !== 1 && $soLuongCPU !== null) {
            session()->put('PCBSoLuongCPU', $soLuongCPU);
        }

        // BMC
        $soLuongBMC = $request->get('PCBSoLuongBMC');
        if ($soLuongBMC !== 1 && $soLuongBMC !== null) {
            session()->put('PCBSoLuongBMC', $soLuongBMC);
        }

        // RAM
        $soLuongRAM = $request->get('PCBSoLuongRAM');
        if ($soLuongRAM !== 1 && $soLuongRAM !== null) {
            session()->put('PCBSoLuongRAM', $soLuongRAM);
        }

        // HDD
        $soLuongHDD = $request->get('PCBSoLuongHDD');
        if ($soLuongHDD !== 1 && $soLuongHDD !== null) {
            session()->put('PCBSoLuongHDD', $soLuongHDD);
        }

        // SSD
        $soLuongSSD = $request->get('PCBSoLuongSSD');
        if ($soLuongSSD !== 1 && $soLuongSSD !== null) {
            session()->put('PCBSoLuongSSD', $soLuongSSD);
        }

        // VGA
        $soLuongVGA = $request->get('PCBSoLuongVGA');
        if ($soLuongVGA !== 1 && $soLuongVGA !== null) {
            session()->put('PCBSoLuongVGA', $soLuongVGA);
        }

        // PSU
        $soLuongPSU = $request->get('PCBSoLuongPSU');
        if ($soLuongPSU !== 1 && $soLuongPSU !== null) {
            session()->put('PCBSoLuongPSU', $soLuongPSU);
        }

        // Case
        $soLuongCase = $request->get('PCBSoLuongCase');
        if ($soLuongCase !== 1 && $soLuongCase !== null) {
            session()->put('PCBSoLuongCase', $soLuongCase);
        }

        // MH
        $soLuongMH = $request->get('PCBSoLuongMH');
        if ($soLuongMH !== 1 && $soLuongMH !== null) {
            session()->put('PCBSoLuongMH', $soLuongMH);
        }

        // Mouse
        $soLuongMouse = $request->get('PCBSoLuongMouse');
        if ($soLuongMouse !== 1 && $soLuongMouse !== null) {
            session()->put('PCBSoLuongMouse', $soLuongMouse);
        }

        // BP
        $soLuongBP = $request->get('PCBSoLuongBP');
        if ($soLuongBP !== 1 && $soLuongBP !== null) {
            session()->put('PCBSoLuongBP', $soLuongBP);
        }

        // Fan
        $soLuongFan = $request->get('PCBSoLuongFan');
        if ($soLuongFan !== 1 && $soLuongFan !== null) {
            session()->put('PCBSoLuongFan', $soLuongFan);
        }

        // TNK
        $soLuongTNK = $request->get('PCBSoLuongTNK');
        if ($soLuongTNK !== 1 && $soLuongTNK !== null) {
            session()->put('PCBSoLuongTNK', $soLuongTNK);
        }

        // TNN
        $soLuongTNN = $request->get('PCBSoLuongTNN');
        if ($soLuongTNN !== 1 && $soLuongTNN !== null) {
            session()->put('PCBSoLuongTNN', $soLuongTNN);
        }

        // L
        $soLuongL = $request->get('PCBSoLuongL');
        if ($soLuongL !== 1 && $soLuongL !== null) {
            session()->put('PCBSoLuongL', $soLuongL);
        }

        // // return response()->json(['ajaxSoLuongL' => session()->get('PCBSoLuongL')]);

        // Dựa vào thể loại trong session, cho các giá trị lấy được từ mã SP vào session
        switch (session()->get('PCBTheLoai')) {
            case 'CPU':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenCPU', $item->tenSP);
                    session()->put('PCBMaCPU', $item->maSP);
                    session()->put('PCBGiaCPU', $item->giaSP);
                    session()->put('PCBBaoHanhCPU', "1 năm");
                    session()->put('PCBTinhTrangCPU', "Còn hàng");
                }
                // Validate data
                if (session()->has('PCBMaCPU')) {
                    $socket = DB::table('san_pham_thong_so')->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')->where('maSP', session()->get('PCBMaCPU'))->where('tenTS', 'Socket')->first();
                    session()->put('PCBSocketCPU', $socket->giaTri);
                }
                break;
            case 'BMC':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenBMC', $item->tenSP);
                    session()->put('PCBMaBMC', $item->maSP);
                    session()->put('PCBGiaBMC', $item->giaSP);
                    session()->put('PCBBaoHanhBMC', "1 năm");
                    session()->put('PCBTinhTrangBMC', "Còn hàng");
                }
                // Validate data
                if (session()->has('PCBMaBMC')) {
                    $socket = DB::table('san_pham_thong_so')->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')->where('maSP', session()->get('PCBMaBMC'))->where('tenTS', 'Socket')->first();
                    session()->put('PCBSocketBMC', $socket->giaTri);
                    $bus = DB::table('san_pham_thong_so')->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')->where('maSP', session()->get('PCBMaBMC'))->where('tenTS', 'Bus')->first();
                    session()->put('PCBBusBMC', $bus->giaTri);
                    $size = DB::table('san_pham_thong_so')->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')->where('maSP', session()->get('PCBMaBMC'))->where('tenTS', 'Kích thước bộ')->first();
                    session()->put('PCBSizeBMC', $size->giaTri);
                }
                break;
            case 'RAM':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenRAM', $item->tenSP);
                    session()->put('PCBMaRAM', $item->maSP);
                    session()->put('PCBGiaRAM', $item->giaSP);
                    session()->put('PCBBaoHanhRAM', "1 năm");
                    session()->put('PCBTinhTrangRAM', "Còn hàng");
                    // Validate data
                    if (session()->has('PCBMaRAM')) {
                        $bus = DB::table('san_pham_thong_so')->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')->where('maSP', session()->get('PCBMaRAM'))->where('tenTS', 'Bus')->first();
                        session()->put('PCBBusRAM', $bus->giaTri);
                    }
                }
                break;
            case 'HDD':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenHDD', $item->tenSP);
                    session()->put('PCBMaHDD', $item->maSP);
                    session()->put('PCBGiaHDD', $item->giaSP);
                    session()->put('PCBBaoHanhHDD', "1 năm");
                    session()->put('PCBTinhTrangHDD', "Còn hàng");
                }
                break;
            case 'SSD':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenSSD', $item->tenSP);
                    session()->put('PCBMaSSD', $item->maSP);
                    session()->put('PCBGiaSSD', $item->giaSP);
                    session()->put('PCBBaoHanhSSD', "1 năm");
                    session()->put('PCBTinhTrangSSD', "Còn hàng");
                }
                break;
            case 'VGA':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenVGA', $item->tenSP);
                    session()->put('PCBMaVGA', $item->maSP);
                    session()->put('PCBGiaVGA', $item->giaSP);
                    session()->put('PCBBaoHanhVGA', "1 năm");
                    session()->put('PCBTinhTrangVGA', "Còn hàng");
                }
                break;
            case 'PSU':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenPSU', $item->tenSP);
                    session()->put('PCBMaPSU', $item->maSP);
                    session()->put('PCBGiaPSU', $item->giaSP);
                    session()->put('PCBBaoHanhPSU', "1 năm");
                    session()->put('PCBTinhTrangPSU', "Còn hàng");
                }
                break;
            case 'Case':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenCase', $item->tenSP);
                    session()->put('PCBMaCase', $item->maSP);
                    session()->put('PCBGiaCase', $item->giaSP);
                    session()->put('PCBBaoHanhCase', "1 năm");
                    session()->put('PCBTinhTrangCase', "Còn hàng");
                }
                // Validate data
                if (session()->has('PCBMaCase')) {
                    $size = DB::table('san_pham_thong_so')->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')->where('maSP', session()->get('PCBMaCase'))->where('tenTS', 'Kích thước')->first();
                    session()->put('PCBSizeCase', $size->giaTri);
                }

                break;
            case 'MH':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenMH', $item->tenSP);
                    session()->put('PCBMaMH', $item->maSP);
                    session()->put('PCBGiaMH', $item->giaSP);
                    session()->put('PCBBaoHanhMH', "1 năm");
                    session()->put('PCBTinhTrangMH', "Còn hàng");
                }
                break;
            case 'Mouse':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenMouse', $item->tenSP);
                    session()->put('PCBMaMouse', $item->maSP);
                    session()->put('PCBGiaMouse', $item->giaSP);
                    session()->put('PCBBaoHanhMouse', "1 năm");
                    session()->put('PCBTinhTrangMouse', "Còn hàng");
                }
                break;
            case 'BP':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenBP', $item->tenSP);
                    session()->put('PCBMaBP', $item->maSP);
                    session()->put('PCBGiaBP', $item->giaSP);
                    session()->put('PCBBaoHanhBP', "1 năm");
                    session()->put('PCBTinhTrangBP', "Còn hàng");
                }
                break;
            case 'Fan':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenFan', $item->tenSP);
                    session()->put('PCBMaFan', $item->maSP);
                    session()->put('PCBGiaFan', $item->giaSP);
                    session()->put('PCBBaoHanhFan', "1 năm");
                    session()->put('PCBTinhTrangFan', "Còn hàng");
                }
                // Validate data
                // if (session()->has('PCBMaFan')) {
                //     $size = DB::table('san_pham_thong_so')->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')->where('maSP', session()->get('PCBMaCase'))->where('tenTS', 'Kích thước')->first();
                //     session()->put('PCBSizeFan', $size->giaTri);
                // }
                break;
            case 'TNK':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenTNK', $item->tenSP);
                    session()->put('PCBMaTNK', $item->maSP);
                    session()->put('PCBGiaTNK', $item->giaSP);
                    session()->put('PCBBaoHanhTNK', "1 năm");
                    session()->put('PCBTinhTrangTNK', "Còn hàng");
                }
                break;
            case 'TNN':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenTNN', $item->tenSP);
                    session()->put('PCBMaTNN', $item->maSP);
                    session()->put('PCBGiaTNN', $item->giaSP);
                    session()->put('PCBBaoHanhTNN', "1 năm");
                    session()->put('PCBTinhTrangTNN', "Còn hàng");
                }
                if (session()->has('PCBMaTNN')) {
                    $socket = DB::table('san_pham_thong_so')->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')->where('maSP', session()->get('PCBMaTNN'))->where('tenTS', 'Socket')->first();
                    session()->put('PCBSocketTNN', $socket->giaTri);
                }
                break;
            case 'Laptop gaming':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenL', $item->tenSP);
                    session()->put('PCBMaL', $item->maSP);
                    session()->put('PCBGiaL', $item->giaSP);
                    session()->put('PCBBaoHanhL', "1 năm");
                    session()->put('PCBTinhTrangL', "Còn hàng");
                }
                break;
        }
        //// if (session()->get('PCBTheLoai') == 'VGA') {
        ////     if (session()->get('PCBEmpty') !== 1) {
        ////         session()->put('PCBTenVGA', $item->tenSP);
        ////         session()->put('PCBMaVGA', $item->maSP);
        ////         session()->put('PCBGiaVGA', $item->giaSP);
        ////         session()->put('PCBBaoHanhVGA', "1 năm");
        ////         session()->put('PCBTinhTrangVGA', "Còn hàng");
        ////     }
        //// } else if (session()->get('PCBTheLoai') == 'Laptop gaming') {
        ////     if (session()->get('PCBEmpty') !== 1) {
        ////         session()->put('PCBTenL', $item->tenSP);
        ////         session()->put('PCBMaL', $item->maSP);
        ////         session()->put('PCBGiaL', $item->giaSP);
        ////         session()->put('PCBBaoHanhL', "1 năm");
        ////         session()->put('PCBTinhTrangL', "Còn hàng");
        ////     }
        //// }

        // Xóa - Quên đi session của sản phẩm xóa
        // CPU
        if ($request->PCBDeleteCPU == 1) {
            session()->forget('PCBTenCPU');
            session()->forget('PCBMaCPU');
            session()->forget('PCBGiaCPU');
            session()->forget('PCBBaoHanhCPU');
            session()->forget('PCBTinhTrangCPU');
            session()->forget('PCBSoLuongCPU');
            session()->forget('PCBSocketCPU');
        }
        // BMC
        elseif ($request->PCBDeleteBMC == 1) {
            session()->forget('PCBTenBMC');
            session()->forget('PCBMaBMC');
            session()->forget('PCBGiaBMC');
            session()->forget('PCBBaoHanhBMC');
            session()->forget('PCBTinhTrangBMC');
            session()->forget('PCBSoLuongBMC');
            session()->forget('PCBSocketBMC');
            session()->forget('PCBBusBMC');
            session()->forget('PCBSizeBMC');
        }
        // RAM
        elseif ($request->PCBDeleteRAM == 1) {
            session()->forget('PCBTenRAM');
            session()->forget('PCBMaRAM');
            session()->forget('PCBGiaRAM');
            session()->forget('PCBBaoHanhRAM');
            session()->forget('PCBTinhTrangRAM');
            session()->forget('PCBSoLuongRAM');
            session()->forget('PCBBusRAM');
        }
        // HDD
        elseif ($request->PCBDeleteHDD == 1) {
            session()->forget('PCBTenHDD');
            session()->forget('PCBMaHDD');
            session()->forget('PCBGiaHDD');
            session()->forget('PCBBaoHanhHDD');
            session()->forget('PCBTinhTrangHDD');
            session()->forget('PCBSoLuongHDD');
        }
        // SSD
        elseif ($request->PCBDeleteSSD == 1) {
            session()->forget('PCBTenSSD');
            session()->forget('PCBMaSSD');
            session()->forget('PCBGiaSSD');
            session()->forget('PCBBaoHanhSSD');
            session()->forget('PCBTinhTrangSSD');
            session()->forget('PCBSoLuongSSD');
        }
        // VGA
        elseif ($request->PCBDeleteVGA == 1) {
            session()->forget('PCBTenVGA');
            session()->forget('PCBMaVGA');
            session()->forget('PCBGiaVGA');
            session()->forget('PCBBaoHanhVGA');
            session()->forget('PCBTinhTrangVGA');
            session()->forget('PCBSoLuongVGA');
        }
        // PSU
        elseif ($request->PCBDeletePSU == 1) {
            session()->forget('PCBTenPSU');
            session()->forget('PCBMaPSU');
            session()->forget('PCBGiaPSU');
            session()->forget('PCBBaoHanhPSU');
            session()->forget('PCBTinhTrangPSU');
            session()->forget('PCBSoLuongPSU');
        }
        // Case
        elseif ($request->PCBDeleteCase == 1) {
            session()->forget('PCBTenCase');
            session()->forget('PCBMaCase');
            session()->forget('PCBGiaCase');
            session()->forget('PCBBaoHanhCase');
            session()->forget('PCBTinhTrangCase');
            session()->forget('PCBSoLuongCase');
            session()->forget('PCBSizeCase');
        }
        // MH
        elseif ($request->PCBDeleteMH == 1) {
            session()->forget('PCBTenMH');
            session()->forget('PCBMaMH');
            session()->forget('PCBGiaMH');
            session()->forget('PCBBaoHanhMH');
            session()->forget('PCBTinhTrangMH');
            session()->forget('PCBSoLuongMH');
        }
        // Mouse
        elseif ($request->PCBDeleteMouse == 1) {
            session()->forget('PCBTenMouse');
            session()->forget('PCBMaMouse');
            session()->forget('PCBGiaMouse');
            session()->forget('PCBBaoHanhMouse');
            session()->forget('PCBTinhTrangMouse');
            session()->forget('PCBSoLuongMouse');
        }
        // BP
        elseif ($request->PCBDeleteBP == 1) {
            session()->forget('PCBTenBP');
            session()->forget('PCBMaBP');
            session()->forget('PCBGiaBP');
            session()->forget('PCBBaoHanhBP');
            session()->forget('PCBTinhTrangBP');
            session()->forget('PCBSoLuongBP');
        }
        // Fan
        elseif ($request->PCBDeleteFan == 1) {
            session()->forget('PCBTenFan');
            session()->forget('PCBMaFan');
            session()->forget('PCBGiaFan');
            session()->forget('PCBBaoHanhFan');
            session()->forget('PCBTinhTrangFan');
            session()->forget('PCBSoLuongFan');
            // session()->forget('PCBSizeFan');
        }
        // TNK
        elseif ($request->PCBDeleteTNK == 1) {
            session()->forget('PCBTenTNK');
            session()->forget('PCBMaTNK');
            session()->forget('PCBGiaTNK');
            session()->forget('PCBBaoHanhTNK');
            session()->forget('PCBTinhTrangTNK');
            session()->forget('PCBSoLuongTNK');
        }
        // TNN
        elseif ($request->PCBDeleteTNN == 1) {
            session()->forget('PCBTenTNN');
            session()->forget('PCBMaTNN');
            session()->forget('PCBGiaTNN');
            session()->forget('PCBBaoHanhTNN');
            session()->forget('PCBTinhTrangTNN');
            session()->forget('PCBSoLuongTNN');
            session()->forget('PCBSocketTNN');
        }
        // L
        elseif ($request->PCBDeleteL == 1) {
            session()->forget('PCBTenL');
            session()->forget('PCBMaL');
            session()->forget('PCBGiaL');
            session()->forget('PCBBaoHanhL');
            session()->forget('PCBTinhTrangL');
            session()->forget('PCBSoLuongL');
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
                echo "<br>Reached";
            } else {
                session()->put('modal', 1);
            }
        }

        $receiver = "";
        //// dd($PCBTheLoai);
        //// if ($PCBTheLoai == "VGA") {
        ////     $VGA = DB::table('the_loai_con')->where('tenTLC', 'like', 'Card%')->get();
        ////     echo "<br>" . $VGA;
        ////     // dd($VGA);
        ////     $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->whereJsonContains('tenTLC', $VGA)->get();
        //// } else
        ////     $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', $PCBTheLoai)->get();

        //// return view('Customer.PCBuilder.pcbuilder', [
        return redirect()->route('PCBuilderCustomer.create', [
            'listTheLoaiCha' =>  $listTheLoaiCha,
            'cartItems' =>  $cartItems,
            'listTheLoaiLaptop' =>  $listTheLoaiLaptop,
            'listTheLoaiMayTinhBan' =>  $listTheLoaiMayTinhBan,
            'listTheLoaiLinhKien' =>  $listTheLoaiLinhKien,
            'listTheLoaiPhuKien' =>  $listTheLoaiPhuKien,
            'listTheLoaiManHinh' =>  $listTheLoaiManHinh,
            'listNhaSanXuat' =>  $listNhaSanXuat,
            'listTheLoaiSidenav' =>  $listTheLoaiSidenav,
            // 'listSanPhamModal' =>  $listSanPhamModal,
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
