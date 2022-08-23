<?php

namespace App\Http\Controllers;

use App\Mail\DemoEmail;
use App\Models\DetailReceiptModel;
use App\Models\ProductImageModel;
use App\Models\ReceiptModel;
use App\Models\UserModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

use function PHPUnit\Framework\isEmpty;

class ReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // if (!session()->has('khachHang')) {
        //     return Redirect::route('product.index')->with("error", "Mời khách hàng đăng nhập trước");
        // }
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

        $listHoaDon = DB::table('hoa_don')->where('maKH', session()->get('khachHang'))->orderBy('maHD', 'DESC')->get();

        $listPTTT = DB::table('phuong_thuc_thanh_toan')->get();
        $listTTHD = DB::table('tinh_trang_hoa_don')->get();

        return view('Customer.Receipt.list', [
            'cartItems' =>  $cartItems,
            'listNhaSanXuat' =>  $listNhaSanXuat,
            'listTheLoaiCha' =>  $listTheLoaiCha,
            'listTheLoaiLaptop' =>  $listTheLoaiLaptop,
            'listTheLoaiMayTinhBan' =>  $listTheLoaiMayTinhBan,
            'listTheLoaiLinhKien' =>  $listTheLoaiLinhKien,
            'listTheLoaiPhuKien' =>  $listTheLoaiPhuKien,
            'listTheLoaiManHinh' =>  $listTheLoaiManHinh,
            'listTheLoaiSidenav' =>  $listTheLoaiSidenav,

            'listHoaDon' =>  $listHoaDon,
            'listPTTT' =>  $listPTTT,
            'listTTHD' =>  $listTTHD,
        ]);
    }

    // MOMO
    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)
            )
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }

    public function momoPay(Request $request)
    {
        $tongTien = $request->get('tongTien');

        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán qua MoMo";
        $amount = $tongTien;
        $orderId = time() . "";
        $redirectUrl = "http://localhost:8000/onlinePayment/process";
        $ipnUrl = "http://localhost:8000/onlinePayment/process";
        $extraData = "";

        $requestId = time() . "";
        // $requestType = "captureWallet";//Thanh toán bằng mã qr
        $requestType = "payWithATM"; //Thanh toán bằng thẻ atm
        //before sign HMAC SHA256 signature
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);
        $data = array(
            'partnerCode' => $partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        );
        $result = $this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);  // decode json
        // dd($jsonResult);
        if(!isset($jsonResult['payUrl'])){
            return back()->with('moneyLimit', $jsonResult['message']);
        }else{
            return redirect()->to($jsonResult['payUrl']);
        }
        // $returned_val = $jsonResult['payUrl'];
        // return redirect()->to($returned_val);
        // return Redirect($this->$jsonResult['payUrl']);
    }

    public function process(Request $request)
    {
        // dd($request);
        $response = array();
        try {
            $partnerCode = $request->get("partnerCode");
            $accessKey = 'klm05TvNBzhg7h7j';
            $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
            $orderId = $request->get("orderId");
            $requestId = $request->get("requestId");
            $amount = $request->get("amount");
            $orderInfo = $request->get("orderInfo");
            $orderType = $request->get("orderType");
            $transId = $request->get("transId");
            $resultCode = $request->get("resultCode");
            $message = $request->get("message");
            $payType = $request->get("payType");
            $responseTime = $request->get("responseTime");
            $extraData = $request->get("extraData");
            $m2signature = $request->get("signature"); //MoMo signature

            //Checksum
            $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&message=" . $message . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo .
                "&orderType=" . $orderType . "&partnerCode=" . $partnerCode . "&payType=" . $payType . "&requestId=" . $requestId . "&responseTime=" . $responseTime .
                "&resultCode=" . $resultCode . "&transId=" . $transId;

            $partnerSignature = hash_hmac("sha256", $rawHash, 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa');

            if ($m2signature == $partnerSignature) {
                if ($resultCode == '0') {
                    //Giao dịch thành công
                    // \Cart::clear();
                    if (session()->has('khachHang')) {
                        $id = session()->get('khachHang');
                    } else {

                        if (session()->get('vangLai') == 1) {
                            # code...
                            $temp = DB::table('nguoi_dung')->where('emailND', session()->get('emailDat'))->first();
                            if (is_null($temp) == true) {
                                $customerNew = new UserModel();
                                $customerNew->tenND = session()->get('tenKhachHangDat');
                                $customerNew->emailND = session()->get('emailDat');
                                $customerNew->soDienThoai =  session()->get('soDienThoaiDat');
                                $customerNew->diaChiND =  session()->get('diaChiDat');
                                // $customerNew->matKhauND = Hash::make($request->get('newPassword'));
                                $customerNew->matKhauND = "";
                                $customerNew->maCV = DB::table('chuc_vu')->where('tenCV', 'Khách hàng')->first()->maCV;
                                $customerNew->save();
                                $temp = DB::table('nguoi_dung')->where('emailND', session()->get('emailDat'))->first();
                                $id = $temp->maND;
                            } else {
                                $id = $temp->maND;
                            }
                        }
                        // Lấy id khách sau khi tạo

                    }

                    $hoaDon = new ReceiptModel();
                    $hoaDon->maKH = $id;
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $hoaDon->ngayTao =  date("Y/m/d H:i:s");
                    $hoaDon->diaChi =  session()->get('diaChiDat');
                    $hoaDon->soDienThoai = session()->get('soDienThoaiDat');
                    $hoaDon->maPTTT = 2;
                    $hoaDon->maTTHD = 1;
                    $hoaDon->save();

                    $sumPrice = number_format(\Cart::getTotal());
                    $maHoaDonMoiNhat = DB::table('hoa_don')->max('maHD');

                    $cartItems = \Cart::getContent();

                    foreach ($cartItems as $cart) {
                        $hoaDonChiTiet = new DetailReceiptModel();

                        $SP = DB::table('san_pham')->where('maSP', $cart->id)->first();
                        $giaSP = $SP->giaSP;
                        $hoaDonChiTiet->maHD = $maHoaDonMoiNhat;
                        $hoaDonChiTiet->maSP = $cart->id;
                        $hoaDonChiTiet->soLuong = $cart->quantity;
                        $hoaDonChiTiet->giaSP = $giaSP;
                        $hoaDonChiTiet->giamGia = $SP->giamGia;
                        $hoaDonChiTiet->save();
                    }

                    $objDemo = new \stdClass();
                    $objDemo->demo_one = 'Thanh toán bằng ví Momo';
                    $objDemo->demo_two = $sumPrice . " VND";
                    $objDemo->idReceipt = $maHoaDonMoiNhat;
                    $objDemo->sender = 'BKCOM';
                    $objDemo->receiver = session()->get('tenKhachHang');
                    Mail::to(session()->get('emailDat'))->send(new DemoEmail($objDemo));
                    session()->put('maillingSession', 0);
                    \Cart::clear();
                    // if (session()->get('maillingSession') == 1) {

                    // }
                    return view('Customer.Receipt.success', [
                        'cartItems' => $cartItems,
                    ]);
                } else if ($resultCode == '1006') {
                    //Khách huỷ giao dịch
                    $cartItems = \Cart::getContent();
                    $listNguoiDung = DB::table('nguoi_dung')->where('maND', session()->get('khachHang'))->get();

                    return redirect()->route('receiptCustomer.create')->with('momoCancel', 'Thanh toán đã bị huỷ');
                } else {
                    return redirect()->route('product.index')->with('unknownError', 'Đã xảy ra lỗi');
                }
            }
        } catch (Exception $e) {
            echo $response['message'] = $e;
        }
    }
    // Hết MOMO

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // if (!session()->has('khachHang')) {
        //     return Redirect::route('product.index')->with("error", "Mời khách hàng đăng nhập trước");
        // }
        $cartItems = \Cart::getContent();
        $listNguoiDung = DB::table('nguoi_dung')->where('maND', session()->get('khachHang'))->get();
        // echo $listNguoiDung;
        // echo session()->has('khachHang');
        // die();
        return view('Customer.Receipt.index', [
            'cartItems'  => $cartItems,
            'listNguoiDung' =>  $listNguoiDung,
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
        // if (!session()->has('khachHang')) {
        //     return Redirect::route('product.index')->with("error", "Mời khách hàng đăng nhập trước");
        // }
        // $validate = $request->validate(
        //     [
        //         'receiptName' => 'required|min:3',
        //         'receiptAddress' => 'required|min:3',
        //         'receiptEmail' => 'required|email:rfc,dns',
        //         'receiptPhone' => 'required|min:9|max:13',
        //     ],
        //     [
        //         'receiptName.required' => 'Bạn cần nhập tên của bạn vào',
        //         'receiptName.min' => 'Tên bạn nhập quá ngắn ( Tối thiểu 3 ký tự )',
        //         'receiptAddress.required' => 'Bạn cần nhập địa chỉ của bạn vào',
        //         'receiptAddress.min' => 'Địa chỉ bạn nhập quá ngắn ( Tối thiểu 3 ký tự )',
        //         'receiptEmail.required' => 'Bạn cần nhập email của bạn vào',
        //         'receiptEmail.email' => 'Định dạng email sai',
        //         'receiptPhone.required' => 'Bạn cần nhập số điện thoại của bạn vào',
        //         'receiptPhone.min' => 'Số điện thoại bạn nhập quá ngắn ( Tối thiểu 9 ký tự )',
        //         'receiptPhone.max' => 'Số điện thoại bạn nhập quá dài ( Tối đa 13 ký tự )',
        //     ]
        // );
        try {
            $payMethodCOD = $request->get('COD');
            $payMethodMomo = $request->get('momo');
            if (session()->has("maillingSession") == 1)
                session()->put("maillingSession", 0);
            else
                session()->put("maillingSession", 1);
            $cartItems = \Cart::getContent();

            if ($payMethodCOD == 'COD') {
                // Thêm vào hóa đơn
                $request->session()->put("tenKhachHangDat", $request->receiptName);
                $request->session()->put("soDienThoaiDat", $request->receiptPhone);
                $request->session()->put("emailDat", $request->receiptEmail);
                $request->session()->put("diaChiDat", $request->receiptAddress);
                // Nếu là khách hàng đã đăng ký
                if (session()->has('khachHang')) {
                    $id = session()->get('khachHang');
                }
                // Nếu là khách vãng lai
                else {

                    if ($request->get('isNotRegister') == 1) {
                        # code...
                        $temp = DB::table('nguoi_dung')->where('emailND', $request->get('receiptEmail'))->first();
                        if (is_null($temp) == true) {
                            $customerNew = new UserModel();
                            $customerNew->tenND = $request->get('receiptName');
                            $customerNew->emailND = $request->get('receiptEmail');
                            $customerNew->soDienThoai = $request->get('receiptPhone');
                            $customerNew->diaChiND = $request->get('receiptAddress');
                            // $customerNew->matKhauND = Hash::make($request->get('newPassword'));
                            $customerNew->matKhauND = "";
                            $customerNew->maCV = DB::table('chuc_vu')->where('tenCV', 'Khách hàng')->first()->maCV;
                            $customerNew->save();
                            $temp = DB::table('nguoi_dung')->where('emailND', $request->get('receiptEmail'))->first();
                            $id = $temp->maND;
                        } else {
                            $id = $temp->maND;
                        }
                    }
                    // Lấy id khách sau khi tạo

                }
                $hoaDon = new ReceiptModel();

                $hoaDon->maKH = $id;
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $hoaDon->ngayTao =  date("Y/m/d H:i:s");
                $hoaDon->diaChi =  $request->receiptAddress;
                $hoaDon->soDienThoai = $request->get('receiptPhone');
                // if ($request->paymentMethod == "COD") {
                $hoaDon->maPTTT = 1;
                // } else if ($request->paymentMethod == "online") {
                //     $hoaDon->maPTTT = 2;
                // }

                $hoaDon->maTTHD = 1;
                // dd($hoaDon);
                $hoaDon->save();

                $sumPrice = number_format(\Cart::getTotal());
                // Thêm vào hóa đơn chi tiết
                $maHoaDonMoiNhat = DB::table('hoa_don')->max('maHD');

                $cartItems = \Cart::getContent();
                foreach ($cartItems as $cart) {
                    $hoaDonChiTiet = new DetailReceiptModel();

                    $SP = DB::table('san_pham')->where('maSP', $cart->id)->first();
                    $giaSP = $SP->giaSP;
                    $hoaDonChiTiet->maHD = $maHoaDonMoiNhat;
                    $hoaDonChiTiet->maSP = $cart->id;
                    $hoaDonChiTiet->soLuong = $cart->quantity;
                    $hoaDonChiTiet->giaSP = $giaSP;
                    $hoaDonChiTiet->giamGia = $SP->giamGia;
                    // echo $hoaDon;
                    // echo "<br>-------<br>";
                    // echo "<br>MA HD: ";
                    // echo $maHoaDonMoiNhat;
                    // echo "<br>MA SP: ";
                    // echo $cart->id;
                    // echo "<br>quantity: ";
                    // echo $cart->quantity;
                    // echo "<br>GIA: ";
                    // echo $SP->giaSP;
                    // echo "<br>GIAM GIA: ";
                    // echo $SP->giamGia;
                    // echo "<br>------------------<br>";
                    $hoaDonChiTiet->save();

                    // Có thể sẽ lỗi ở đây nếu đặt nhiều
                }
                $objDemo = new \stdClass();
                // if ($request->paymentMethod == "COD") {
                $objDemo->demo_one = 'Thanh toán tận nhà';
                // } else {
                //     $objDemo->demo_one = 'Chuyển khoản';
                // }
                $objDemo->demo_two = $sumPrice . " VND";
                $objDemo->idReceipt = $maHoaDonMoiNhat;
                $objDemo->sender = 'BKCOM';
                $objDemo->receiver = session()->get('tenKhachHang');
                // $request->session()->put('cartObject');

                if (session()->get('maillingSession') == 1) {
                    Mail::to(session()->get('emailDat'))->send(new DemoEmail($objDemo));
                    session()->put('maillingSession', 0);
                    \Cart::clear();
                }
            }
            if ($payMethodMomo == "momo") {
                session()->put("vangLai", $request->get("isNotRegister"));
                // dd(session()->get('vangLai'));
                // Thêm vào hóa đơn
                $request->session()->put("tenKhachHangDat", $request->receiptName);
                $request->session()->put("soDienThoaiDat", $request->receiptPhone);
                $request->session()->put("emailDat", $request->receiptEmail);
                $request->session()->put("diaChiDat", $request->receiptAddress);
                $opc = new OnlinePaymentController();
                $request->idKhachHang = session()->get('khachHang');
                // $request->
                return $this->momoPay($request);
                // return redirect()->action('OnlinePaymentController@momoPay');
                dd("Đang lỗi chưa sửa, quay về 1");

                // Cắt ở đây


                // // Nếu là khách hàng đã đăng ký
                // if (session()->has('khachHang')) {
                //     $id = session()->get('khachHang');
                // }
                // // Nếu là khách vãng lai (tam thoi ko cho su dung)
                // else {
                //     dd("Đang lỗi chưa sửa, quay về");
                //     if ($request->get('isNotRegister') == 1) {
                //         # code...
                //         $temp = DB::table('nguoi_dung')->where('emailND', $request->get('receiptEmail'))->first();
                //         if (is_null($temp) == true) {
                //             $customerNew = new UserModel();
                //             $customerNew->tenND = $request->get('receiptName');
                //             $customerNew->emailND = $request->get('receiptEmail');
                //             $customerNew->soDienThoai = $request->get('receiptPhone');
                //             $customerNew->diaChiND = $request->get('receiptAddress');
                //             // $customerNew->matKhauND = Hash::make($request->get('newPassword'));
                //             $customerNew->matKhauND = "";
                //             $customerNew->maCV = DB::table('chuc_vu')->where('tenCV', 'Khách hàng')->first()->maCV;
                //             $customerNew->save();
                //             $temp = DB::table('nguoi_dung')->where('emailND', $request->get('receiptEmail'))->first();
                //             $id = $temp->maND;
                //         } else {
                //             $id = $temp->maND;
                //         }
                //     }
                //     // Lấy id khách sau khi tạo

                // }
                // $hoaDon = new ReceiptModel();

                // $hoaDon->maKH = $id;
                // date_default_timezone_set('Asia/Ho_Chi_Minh');
                // $hoaDon->ngayTao =  date("Y/m/d H:i:s");
                // $hoaDon->diaChi =  $request->receiptAddress;
                // $hoaDon->soDienThoai = $request->get('receiptPhone');
                // // if ($request->paymentMethod == "COD") {
                // //     $hoaDon->maPTTT = 1;
                // // } else if ($request->paymentMethod == "online") {
                // $hoaDon->maPTTT = 2;
                // // }

                // $hoaDon->maTTHD = 1;
                // // dd($hoaDon);
                // $hoaDon->save();

                // $sumPrice = number_format(\Cart::getTotal());
                // // Thêm vào hóa đơn chi tiết
                // $maHoaDonMoiNhat = DB::table('hoa_don')->max('maHD');

                // $cartItems = \Cart::getContent();
                // foreach ($cartItems as $cart) {
                //     $hoaDonChiTiet = new DetailReceiptModel();

                //     $SP = DB::table('san_pham')->where('maSP', $cart->id)->first();
                //     $giaSP = $SP->giaSP;
                //     $hoaDonChiTiet->maHD = $maHoaDonMoiNhat;
                //     $hoaDonChiTiet->maSP = $cart->id;
                //     $hoaDonChiTiet->soLuong = $cart->quantity;
                //     $hoaDonChiTiet->giaSP = $giaSP;
                //     $hoaDonChiTiet->giamGia = $SP->giamGia;
                //     // echo $hoaDon;
                //     // echo "<br>-------<br>";
                //     // echo "<br>MA HD: ";
                //     // echo $maHoaDonMoiNhat;
                //     // echo "<br>MA SP: ";
                //     // echo $cart->id;
                //     // echo "<br>quantity: ";
                //     // echo $cart->quantity;
                //     // echo "<br>GIA: ";
                //     // echo $SP->giaSP;
                //     // echo "<br>GIAM GIA: ";
                //     // echo $SP->giamGia;
                //     // echo "<br>------------------<br>";
                //     $hoaDonChiTiet->save();

                //     // Có thể sẽ lỗi ở đây nếu đặt nhiều
                // }
                // $objDemo = new \stdClass();
                // // if ($request->paymentMethod == "COD") {
                // //     $objDemo->demo_one = 'Thanh toán tận nhà';
                // // } else {
                // $objDemo->demo_one = 'Chuyển khoản';
                // // }
                // $objDemo->demo_two = $sumPrice . " VND";
                // $objDemo->idReceipt = $maHoaDonMoiNhat;
                // $objDemo->sender = 'BKCOM';
                // $objDemo->receiver = session()->get('tenKhachHang');
                // // $request->session()->put('cartObject');

                // if (session()->get('maillingSession') == 1) {
                //     Mail::to(session()->get('emailDat'))->send(new DemoEmail($objDemo));
                //     session()->put('maillingSession', 0);
                //     \Cart::clear();
                // }
            }
            return view('Customer.Receipt.success', [
                'cartItems' => $cartItems,
            ]);
        }
        // Nếu có lỗi - Báo email hoặc mật khẩu sai
        catch (Exception $e) {
            echo "error receipt repcontrol";
            die();
            return Redirect::back()->with("receiptError", "Thông tin đặt có lỗi");
        }
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
        if (!session()->has('khachHang')) {
            return Redirect::route('product.index')->with("error", "Mời khách hàng đăng nhập trước");
        }
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

        $listHoaDon = DB::table('hoa_don')->where('maKH', session()->get('khachHang'))->get();
        if (sizeof($listHoaDon) != 0) {
            $listHoaDonCT = DB::table('hoa_don_chi_tiet')->where('maHD', $id)->get();
        } else
            $listHoaDonCT = [];

        $listAnh = ProductImageModel::get();
        $listSanPham = DB::table('san_pham')->get();

        $hoaDon = DB::table('hoa_don')->where('maHD', $id)->first();

        return view('Customer.Receipt.show', [
            'cartItems' =>  $cartItems,
            'listNhaSanXuat' =>  $listNhaSanXuat,
            'listTheLoaiCha' =>  $listTheLoaiCha,
            'listTheLoaiLaptop' =>  $listTheLoaiLaptop,
            'listTheLoaiMayTinhBan' =>  $listTheLoaiMayTinhBan,
            'listTheLoaiLinhKien' =>  $listTheLoaiLinhKien,
            'listTheLoaiPhuKien' =>  $listTheLoaiPhuKien,
            'listTheLoaiManHinh' =>  $listTheLoaiManHinh,
            'listTheLoaiSidenav' =>  $listTheLoaiSidenav,

            'listHoaDonCT' =>  $listHoaDonCT,
            'listAnh' =>  $listAnh,
            'listSanPham' =>  $listSanPham,
            'hoaDon' =>  $hoaDon,
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
