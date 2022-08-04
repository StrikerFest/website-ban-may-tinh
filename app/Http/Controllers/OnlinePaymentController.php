<?php

namespace App\Http\Controllers;

use App\Mail\DemoEmail;
use App\Models\DetailReceiptModel;
use App\Models\ReceiptModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class OnlinePaymentController extends Controller
{
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
                if ($resultCode !== '0') {
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
                    $hoaDon->maTTHD = 2;
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
}
