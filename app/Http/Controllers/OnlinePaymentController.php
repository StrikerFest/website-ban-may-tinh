<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

        return redirect()->to($jsonResult['payUrl']);
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
                    $cartItems = \Cart::getContent();

                    return view('Customer.Receipt.success', [
                        'cartItems' => $cartItems,
                    ]);
                } else if ($resultCode == '1006') {
                    //Khách huỷ giao dịch
                    $cartItems = \Cart::getContent();
                    $listNguoiDung = DB::table('nguoi_dung')->where('maND', session()->get('khachHang'))->get();

                    return redirect()->route('receiptCustomer.create')->with('momoCancel', 'Thanh toán đã bị huỷ');
                }
            } else {
                return redirect()->route('product.index')->with('unknownError', 'Đã xảy ra lỗi');
            }
        } catch (Exception $e) {
            echo $response['message'] = $e;
        }
    }
}
