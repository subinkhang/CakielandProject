<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class CheckoutController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('user/checkout', compact('user'));
    }

    public function update(Request $request, $user_id)
    {
        // Nhận dữ liệu từ request
        $data = $request->all();

        // In ra màn hình để kiểm tra data nhận được
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        // dừng lại để kiểm tra dữ liệu
        // die(); // bình luận lại dòng này sau khi kiểm tra

        // Tạo order
        $order = [];
        $order['user_id'] = $user_id;
        $order['fullname'] = $data['name'];
        $order['email'] = auth()->user()->email;
        $order['phone_number'] = $data['phone'];
        $order['address'] = $data['address'];
        $order['order_date'] = date('Y-m-d H:i:s');
        $order['status'] = 2;
        $order['total_money'] = $data['total'];
        // Chèn order và lấy id của order vừa tạo
        $order_id = DB::table('order')->insertGetId($order);

        // Nhận cartData từ data
        $cartData = $data['cartData'];

        // Lấy danh sách sản phẩm từ cartData
        $products = $cartData['products'];

        // Lặp qua các sản phẩm và chèn vào bảng order_detail
        foreach ($products as $product) {
            $orderDetail = [];
            $orderDetail['order_id'] = $order_id; // Sử dụng $order_id thay vì $order['id']
            $orderDetail['product_id'] = $product['id'];
            $orderDetail['price'] = $product['price'];
            $orderDetail['quantity'] = $product['quantity'];
            $orderDetail['total_money'] = $product['price'] * $product['quantity'];
            DB::table('order_detail')->insert($orderDetail);
        }

        return Redirect::to('user/checkout')->with('cartData', $products);
    }
    public function vnpay()
    {
        $vnp_TmnCode = 'P03I39T7'; //Mã website tại VNPAY
        $vnp_HashSecret = 'GC37G6ESGMPYA1AHWNY40DNDGGF8DEGR'; //Chuỗi bí mật
        $vnp_Url = 'http://sandbox.vnpayment.vn/paymentv2/vpcpay.html';
        $vnp_Returnurl = 'http://127.0.0.1:8000/checkout';
        $vnp_TxnRef = '1'; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Thanh toán hóa đơn hàng test';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = 10000 * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = [
            'vnp_Version' => '2.0.0',
            'vnp_TmnCode' => $vnp_TmnCode,
            'vnp_Amount' => $vnp_Amount,
            'vnp_Command' => 'pay',
            'vnp_CreateDate' => date('YmdHis'),
            'vnp_CurrCode' => 'VND',
            'vnp_IpAddr' => $vnp_IpAddr,
            'vnp_Locale' => $vnp_Locale,
            'vnp_OrderInfo' => $vnp_OrderInfo,
            'vnp_OrderType' => $vnp_OrderType,
            'vnp_ReturnUrl' => $vnp_Returnurl,
            'vnp_TxnRef' => $vnp_TxnRef,
        ];

        if (isset($vnp_BankCode) && $vnp_BankCode != '') {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = '';
        $i = 0;
        $hashdata = '';
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . '=' . $value;
            } else {
                $hashdata .= $key . '=' . $value;
                $i = 1;
            }
            $query .= urlencode($key) . '=' . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . '?' . $query;
        if (isset($vnp_HashSecret)) {
            // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        return redirect($vnp_Url);
    }
    public function return(Request $request)
    {
        $url = session('url_prev', '/');
        if ($request->vnp_ResponseCode == '00') {
            $this->apSer->thanhtoanonline(session('cost_id'));
            return redirect($url)->with('success', 'Đã thanh toán phí dịch vụ');
        }
        session()->forget('url_prev');
        return redirect($url)->with('errors', 'Lỗi trong quá trình thanh toán phí dịch vụ');
    }

    // public function vnpay()
    // {
    //     date_default_timezone_set('Asia/Ho_Chi_Minh');
    //     /*
    //      * To change this license header, choose License Headers in Project Properties.
    //      * To change this template file, choose Tools | Templates
    //      * and open the template in the editor.
    //      */

    //     $vnp_TmnCode = 'P03I39T7'; //Mã định danh merchant kết nối (Terminal Id)
    //     $vnp_HashSecret = 'GC37G6ESGMPYA1AHWNY40DNDGGF8DEGR'; //Secret key
    //     $vnp_Url = 'https://sandbox.vnpayment.vn/paymentv2/vpcpay.html';
    //     $vnp_Returnurl = 'http://127.0.0.1:8000/checkout';
    //     $vnp_apiUrl = 'http://sandbox.vnpayment.vn/merchant_webapi/merchant.html';
    //     $apiUrl = 'https://sandbox.vnpayment.vn/merchant_webapi/api/transaction';
    //     //Config input format
    //     //Expire
    //     $startTime = date('YmdHis');
    //     $expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));
    //     $vnp_TxnRef = rand(1, 10000); //Mã giao dịch thanh toán tham chiếu của merchant
    //     $vnp_Amount = 10000 * 100; // Số tiền thanh toán
    //     $vnp_Locale = 'vn'; //Ngôn ngữ chuyển hướng thanh toán
    //     $vnp_BankCode = 'NCB'; //Mã phương thức thanh toán
    //     $vnp_IpAddr = $_SERVER['REMOTE_ADDR']; //IP Khách hàng thanh toán

    //     $inputData = [
    //         'vnp_Version' => '2.1.0',
    //         'vnp_TmnCode' => $vnp_TmnCode,
    //         'vnp_Amount' => $vnp_Amount * 100,
    //         'vnp_Command' => 'pay',
    //         'vnp_CreateDate' => date('YmdHis'),
    //         'vnp_CurrCode' => 'VND',
    //         'vnp_IpAddr' => $vnp_IpAddr,
    //         'vnp_Locale' => $vnp_Locale,
    //         'vnp_OrderInfo' => $vnp_OrderInfo,
    //         'vnp_OrderType' => 'other',
    //         'vnp_ReturnUrl' => $vnp_Returnurl,
    //         'vnp_TxnRef' => $vnp_TxnRef,
    //         'vnp_ExpireDate' => $expire,
    //     ];

    //     if (isset($vnp_BankCode) && $vnp_BankCode != '') {
    //         $inputData['vnp_BankCode'] = $vnp_BankCode;
    //     }

    //     ksort($inputData);
    //     $query = '';
    //     $i = 0;
    //     $hashdata = '';
    //     foreach ($inputData as $key => $value) {
    //         if ($i == 1) {
    //             $hashdata .= '&' . urlencode($key) . '=' . urlencode($value);
    //         } else {
    //             $hashdata .= urlencode($key) . '=' . urlencode($value);
    //             $i = 1;
    //         }
    //         $query .= urlencode($key) . '=' . urlencode($value) . '&';
    //     }

    //     $vnp_Url = $vnp_Url . '?' . $query;
    //     if (isset($vnp_HashSecret)) {
    //         $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret); //
    //         $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
    //     }
    //     header('Location: ' . $vnp_Url);
    //     die();
    // }
}
