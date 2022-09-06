<?php

namespace App\Http\Controllers;

use App\Models\ProductVoucherModel;
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
        $receiver = $request->get('PCBModal');
        // dd($receiver);
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

        $modalStatus = session()->get('modalStatus');
        if ($modalStatus == null)
            $modalStatus = 0;
        // // Btn press send data
        // if ($receiver !== null) {
        //     // When close btn pressed
        //     if (session()->get('modalClose') == 1) {
        //         // Reset data
        //         $receiver = null;
        //         // Close use of close btn
        //         session()->put('modalClose', 0);
        //         // Close use of modal
        //         session()->put('modal', 0);
        //         // dd("here");
        //     } else {
        //         session()->put('modal', 1);
        //     }
        // }
        $receiver = null;

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
                        ->where('giaTri', session()->get('PCBSocketBMC'));
                // ->get();
                else
                    $listSanPhamModal = DB::table('san_pham')
                        ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                        ->skip(0)->take(7)->where('tenTLC', 'like', 'CPU%')
                        // ->get();
                    ;
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
                        ->skip(0)->take(7)->where('tenTLC', 'like', 'Bo mạch %');
                    // ->get();
                } elseif (session()->has('PCBSocketCPU'))
                    $listSanPhamModal = DB::table('san_pham')
                        ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                        ->join('san_pham_thong_so', 'san_pham.maSP', '=', 'san_pham_thong_so.maSP')
                        ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
                        ->skip(0)->take(7)->where('tenTLC', 'like', 'Bo mạch %')
                        ->where('tenTS', 'Socket')
                        ->where('giaTri', 'like', session()->get('PCBSocketCPU'));
                elseif (session()->get('PCBSizeCase') == 'Mini')
                    $listSanPhamModal = DB::table('san_pham')
                        ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                        ->join('san_pham_thong_so', 'san_pham.maSP', '=', 'san_pham_thong_so.maSP')
                        ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
                        ->skip(0)->take(7)->where('tenTLC', 'like', 'Bo mạch %')
                        ->where('tenTS', 'Kích thước bộ')
                        ->where('giaTri', 'like',  'mini%');
                elseif (session()->get('PCBSizeCase') == 'Mid' || session()->get('PCBSizeCase') == 'Full')
                    $listSanPhamModal = DB::table('san_pham')
                        ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                        ->join('san_pham_thong_so', 'san_pham.maSP', '=', 'san_pham_thong_so.maSP')
                        ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
                        ->skip(0)->take(7)->where('tenTLC', 'like', 'Bo mạch %')
                        ->where('tenTS', 'Kích thước bộ')
                        ->where('giaTri', 'like',  '%%');
                else
                    $listSanPhamModal = DB::table('san_pham')
                        ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                        ->skip(0)->take(7)->where('tenTLC', 'like', 'Bo mạch %');
                break;
            case "RAM":
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'RAM%');
                break;
            case "HDD":
                $listSanPhamModal = DB::table('san_pham')
                    ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                    ->join('san_pham_thong_so', 'san_pham.maSP', '=', 'san_pham_thong_so.maSP')
                    ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
                    ->skip(0)->take(7)->where('tenTLC', 'like', 'Ổ cứng HDD%')
                    ->where('tenTS', 'Kích thước')
                    ->where('giaTri', 'like', '3.5%');
                break;
            case "SSD":
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'Ổ cứng SSD%');
                break;
            case "VGA":
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'Card%');
                break;
            case "PSU":
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'Nguồn%');
                break;
            case "Case":
                if (substr(session()->get('PCBSizeBMC'), 0, 4) == 'mini')
                    $listSanPhamModal = DB::table('san_pham')
                        ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                        ->join('san_pham_thong_so', 'san_pham.maSP', '=', 'san_pham_thong_so.maSP')
                        ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
                        ->skip(0)->take(7)->where('tenTLC', 'like', 'Vỏ case%')
                        ->where('tenTS', 'Kích thước')
                        ->where('giaTri', 'like', 'Mini');

                else

                    $listSanPhamModal = DB::table('san_pham')
                        ->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
                        ->join('san_pham_thong_so', 'san_pham.maSP', '=', 'san_pham_thong_so.maSP')
                        ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
                        ->skip(0)->take(7)->where('tenTLC', 'like', 'Vỏ case%')
                        ->where('tenTS', 'Kích thước')
                        ->where('giaTri', 'not like', 'Mini');
                break;
            case "MH":
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'Màn hình%');
                break;
            case "Mouse":
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'Chuột%');
                break;
            case "BP":
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'Bàn phím%');
                break;
            case "Fan":
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'Quạt làm mát%');
                break;
            case "TNK":
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'Tản nhiệt khí%');
                break;
            case "TNN":
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', 'Tản nhiệt nước%');
                break;
            default:
                $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', 'like', '%%');
                // $listSanPhamModal = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')->skip(0)->take(7)->where('tenTLC', $PCBTheLoai)->get();
                break;
        }
        // Lọc list sản phẩm qua search
        // Các list sản phẩm trên đã bỏ get để gộp xuống dười
        $searchModal = session()->get('searchModal');
        if ($searchModal == null)
            $searchModal = "";
        $listSanPhamModal = $listSanPhamModal
            ->where(function ($query) use ($searchModal) {
                if ($searchModal !== "")
                    $query->where('tenSP', 'like', '%' . $searchModal . '%');
                else
                    $query->where('tenSP', 'like', '%%');
            })
            ->get();
        $productImage = DB::table('anh_san_pham')->get();
        $scrollPos = session()->get('scrollPos');
        if ($scrollPos == null)
            $scrollPos = 0;

        $productPromotion = ProductVoucherModel::join('voucher', 'san_pham_voucher.maVoucher', '=', 'voucher.maVoucher')
            ->select('san_pham_voucher.*', 'voucher.tenVoucher', 'voucher.giaTri', 'voucher.soLuong')
            ->get();

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
            'scrollPos' =>  $scrollPos,
            'modalStatus' =>  $modalStatus,
            'productPromotion' =>  $productPromotion,

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
        // Lấy dữ liệu từ search modal
        $searchModal = $request->get('searchModal');
        session()->put('searchModal', $searchModal);
        // Cho vào session để create lấy dữ liệu

        $scrollPos = $request->get("scrollPos");
        session()->put('scrollPos', $scrollPos);
        // dd();
        $receiverItemId = $request->get("PCBMa");
        if ($request->has("PCBMa")) {
            $item = DB::table('san_pham')->where('maSP', '=', $receiverItemId)->first();
            session()->put('PCBEmpty', 0);
        } else {
            $item = DB::table('san_pham')->first();
            session()->put('PCBEmpty', 1);
        }

        $receiver = $request->get('PCBModal');
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
                    session()->put('PCBGiamGiaCPU', $item->giamGia);
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
                    session()->put('PCBGiamGiaBMC', $item->giamGia);
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
                    session()->put('PCBGiamGiaRAM', $item->giamGia);
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
                    session()->put('PCBGiamGiaHDD', $item->giamGia);
                    session()->put('PCBBaoHanhHDD', "1 năm");
                    session()->put('PCBTinhTrangHDD', "Còn hàng");
                }
                break;
            case 'SSD':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenSSD', $item->tenSP);
                    session()->put('PCBMaSSD', $item->maSP);
                    session()->put('PCBGiaSSD', $item->giaSP);
                    session()->put('PCBGiamGiaSSD', $item->giamGia);
                    session()->put('PCBBaoHanhSSD', "1 năm");
                    session()->put('PCBTinhTrangSSD', "Còn hàng");
                }
                break;
            case 'VGA':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenVGA', $item->tenSP);
                    session()->put('PCBMaVGA', $item->maSP);
                    session()->put('PCBGiaVGA', $item->giaSP);
                    session()->put('PCBGiamGiaVGA', $item->giamGia);
                    session()->put('PCBBaoHanhVGA', "1 năm");
                    session()->put('PCBTinhTrangVGA', "Còn hàng");
                }
                break;
            case 'PSU':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenPSU', $item->tenSP);
                    session()->put('PCBMaPSU', $item->maSP);
                    session()->put('PCBGiaPSU', $item->giaSP);
                    session()->put('PCBGiamGiaPSU', $item->giamGia);
                    session()->put('PCBBaoHanhPSU', "1 năm");
                    session()->put('PCBTinhTrangPSU', "Còn hàng");
                }
                break;
            case 'Case':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenCase', $item->tenSP);
                    session()->put('PCBMaCase', $item->maSP);
                    session()->put('PCBGiaCase', $item->giaSP);
                    session()->put('PCBGiamGiaCase', $item->giamGia);
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
                    session()->put('PCBGiamGiaMH', $item->giamGia);
                    session()->put('PCBBaoHanhMH', "1 năm");
                    session()->put('PCBTinhTrangMH', "Còn hàng");
                }
                break;
            case 'Mouse':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenMouse', $item->tenSP);
                    session()->put('PCBMaMouse', $item->maSP);
                    session()->put('PCBGiaMouse', $item->giaSP);
                    session()->put('PCBGiamGiaMouse', $item->giamGia);
                    session()->put('PCBBaoHanhMouse', "1 năm");
                    session()->put('PCBTinhTrangMouse', "Còn hàng");
                }
                break;
            case 'BP':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenBP', $item->tenSP);
                    session()->put('PCBMaBP', $item->maSP);
                    session()->put('PCBGiaBP', $item->giaSP);
                    session()->put('PCBGiamGiaBP', $item->giamGia);
                    session()->put('PCBBaoHanhBP', "1 năm");
                    session()->put('PCBTinhTrangBP', "Còn hàng");
                }
                break;
            case 'Fan':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenFan', $item->tenSP);
                    session()->put('PCBMaFan', $item->maSP);
                    session()->put('PCBGiaFan', $item->giaSP);
                    session()->put('PCBGiamGiaFan', $item->giamGia);
                    session()->put('PCBBaoHanhFan', "1 năm");
                    session()->put('PCBTinhTrangFan', "Còn hàng");
                }
                break;
            case 'TNK':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenTNK', $item->tenSP);
                    session()->put('PCBMaTNK', $item->maSP);
                    session()->put('PCBGiaTNK', $item->giaSP);
                    session()->put('PCBGiamGiaTNK', $item->giamGia);
                    session()->put('PCBBaoHanhTNK', "1 năm");
                    session()->put('PCBTinhTrangTNK', "Còn hàng");
                }
                break;
            case 'TNN':
                if (session()->get('PCBEmpty') !== 1) {
                    session()->put('PCBTenTNN', $item->tenSP);
                    session()->put('PCBMaTNN', $item->maSP);
                    session()->put('PCBGiaTNN', $item->giaSP);
                    session()->put('PCBGiamGiaTNN', $item->giamGia);
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
                    session()->put('PCBGiamGiaL', $item->giamGia);
                    session()->put('PCBBaoHanhL', "1 năm");
                    session()->put('PCBTinhTrangL', "Còn hàng");
                }
                break;
        }

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
        } elseif ($request->PCBDeleteAll == 1) {
            session()->forget('PCBTenCPU');
            session()->forget('PCBMaCPU');
            session()->forget('PCBGiaCPU');
            session()->forget('PCBBaoHanhCPU');
            session()->forget('PCBTinhTrangCPU');
            session()->forget('PCBSoLuongCPU');
            session()->forget('PCBSocketCPU');
            session()->forget('PCBTenBMC');
            session()->forget('PCBMaBMC');
            session()->forget('PCBGiaBMC');
            session()->forget('PCBBaoHanhBMC');
            session()->forget('PCBTinhTrangBMC');
            session()->forget('PCBSoLuongBMC');
            session()->forget('PCBSocketBMC');
            session()->forget('PCBBusBMC');
            session()->forget('PCBSizeBMC');
            session()->forget('PCBTenRAM');
            session()->forget('PCBMaRAM');
            session()->forget('PCBGiaRAM');
            session()->forget('PCBBaoHanhRAM');
            session()->forget('PCBTinhTrangRAM');
            session()->forget('PCBSoLuongRAM');
            session()->forget('PCBBusRAM');
            session()->forget('PCBTenHDD');
            session()->forget('PCBMaHDD');
            session()->forget('PCBGiaHDD');
            session()->forget('PCBBaoHanhHDD');
            session()->forget('PCBTinhTrangHDD');
            session()->forget('PCBSoLuongHDD');
            session()->forget('PCBTenSSD');
            session()->forget('PCBMaSSD');
            session()->forget('PCBGiaSSD');
            session()->forget('PCBBaoHanhSSD');
            session()->forget('PCBTinhTrangSSD');
            session()->forget('PCBSoLuongSSD');
            session()->forget('PCBTenVGA');
            session()->forget('PCBMaVGA');
            session()->forget('PCBGiaVGA');
            session()->forget('PCBBaoHanhVGA');
            session()->forget('PCBTinhTrangVGA');
            session()->forget('PCBSoLuongVGA');
            session()->forget('PCBTenPSU');
            session()->forget('PCBMaPSU');
            session()->forget('PCBGiaPSU');
            session()->forget('PCBBaoHanhPSU');
            session()->forget('PCBTinhTrangPSU');
            session()->forget('PCBSoLuongPSU');
            session()->forget('PCBTenCase');
            session()->forget('PCBMaCase');
            session()->forget('PCBGiaCase');
            session()->forget('PCBBaoHanhCase');
            session()->forget('PCBTinhTrangCase');
            session()->forget('PCBSoLuongCase');
            session()->forget('PCBSizeCase');
            session()->forget('PCBTenMH');
            session()->forget('PCBMaMH');
            session()->forget('PCBGiaMH');
            session()->forget('PCBBaoHanhMH');
            session()->forget('PCBTinhTrangMH');
            session()->forget('PCBSoLuongMH');
            session()->forget('PCBTenMouse');
            session()->forget('PCBMaMouse');
            session()->forget('PCBGiaMouse');
            session()->forget('PCBBaoHanhMouse');
            session()->forget('PCBTinhTrangMouse');
            session()->forget('PCBSoLuongMouse');
            session()->forget('PCBTenBP');
            session()->forget('PCBMaBP');
            session()->forget('PCBGiaBP');
            session()->forget('PCBBaoHanhBP');
            session()->forget('PCBTinhTrangBP');
            session()->forget('PCBSoLuongBP');
            session()->forget('PCBTenFan');
            session()->forget('PCBMaFan');
            session()->forget('PCBGiaFan');
            session()->forget('PCBBaoHanhFan');
            session()->forget('PCBTinhTrangFan');
            session()->forget('PCBSoLuongFan');
            // session()->forget('PCBSizeFan');
            session()->forget('PCBTenTNK');
            session()->forget('PCBMaTNK');
            session()->forget('PCBGiaTNK');
            session()->forget('PCBBaoHanhTNK');
            session()->forget('PCBTinhTrangTNK');
            session()->forget('PCBSoLuongTNK');
            session()->forget('PCBTenTNN');
            session()->forget('PCBMaTNN');
            session()->forget('PCBGiaTNN');
            session()->forget('PCBBaoHanhTNN');
            session()->forget('PCBTinhTrangTNN');
            session()->forget('PCBSoLuongTNN');
            session()->forget('PCBSocketTNN');
            session()->forget('PCBTenL');
            session()->forget('PCBMaL');
            session()->forget('PCBGiaL');
            session()->forget('PCBBaoHanhL');
            session()->forget('PCBTinhTrangL');
            session()->forget('PCBSoLuongL');
        }


        $modalStatus = $request->get('modalStatus');

        // // Btn press send data
        // if ($modalStatus !== null) {
        //     // When close btn pressed
        //     if ($modalStatus == 1) {
        //         // Reset data
        //         // $receiver = null;
        //         // Close use of close btn
        //         session()->put('modalClose', 0);
        //         // Close use of modal
        //         session()->put('modal', 0);
        //         echo "<br>Reached";
        //     } else {
        //         session()->put('modal', 1);
        //     }
        // }

        session()->put('modalStatus', $modalStatus);

        $receiver = "";
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
