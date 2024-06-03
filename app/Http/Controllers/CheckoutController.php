<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Psy\Readline\Hoa\Console;

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
        $order['payment_method'] = $data['payment_method'];
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
    

    public function vnpay(Request $request){
    $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    $vnp_Returnurl = "http://127.0.0.1:8000/checkout";
    $vnp_TmnCode = "P03I39T7";//Mã website tại VNPAY 
    $vnp_HashSecret = "GC37G6ESGMPYA1AHWNY40DNDGGF8DEGR"; //Chuỗi bí mật
    $vnp_Amount=50000*100;
    $vnp_TxnRef = '129'; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
    $vnp_OrderInfo = 'Thanh toán đơn hàng TEST';
    $vnp_OrderType = 'billpayment';
    
    // $vnp_Amount = $request->total * 24000 * 100;
    $vnp_Locale = 'vn';
    $vnp_BankCode = 'NCB';
    $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
    $inputData = array(
        "vnp_Version" => "2.1.0",
        "vnp_TmnCode" => $vnp_TmnCode,
        "vnp_Amount" => $vnp_Amount,
        "vnp_Command" => "pay",
        "vnp_CreateDate" => date('YmdHis'),
        "vnp_CurrCode" => "VND",
        "vnp_IpAddr" => $vnp_IpAddr,
        "vnp_Locale" => $vnp_Locale,
        "vnp_OrderInfo" => $vnp_OrderInfo,
        "vnp_OrderType" => $vnp_OrderType,
        "vnp_ReturnUrl" => $vnp_Returnurl,
        "vnp_TxnRef" => $vnp_TxnRef,
    );
    
    if (isset($vnp_BankCode) && $vnp_BankCode != "") {
        $inputData['vnp_BankCode'] = $vnp_BankCode;
    }
    if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
        $inputData['vnp_Bill_State'] = $vnp_Bill_State;
    }
    ksort($inputData);
    $query = "";
    $i = 0;
    $hashdata = "";
    foreach ($inputData as $key => $value) {
        if ($i == 1) {
            $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
        } else {
            $hashdata .= urlencode($key) . "=" . urlencode($value);
            $i = 1;
        }
        $query .= urlencode($key) . "=" . urlencode($value) . '&';
    }
    
    $vnp_Url = $vnp_Url . "?" . $query;
    if (isset($vnp_HashSecret)) {
        $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
        $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
    }
    $returnData = array('code' => '00'
        , 'message' => 'success'
        , 'data' => $vnp_Url);
        if (isset($_POST['redirect'])) {
            // header('Location: ' . $vnp_Url);
            // die();
            $user_id = auth()->user()->id;
            $this->update($request, $user_id);
            return redirect('/checkout')->with('success', 'Payment success');
        } else {
            echo json_encode($returnData);
        }
    }
}
