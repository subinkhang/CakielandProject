<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Voucher;

session_start();

class CheckoutController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('user/checkout', compact('user'));
    }


public function update(Request $request, $user_id) {
        // Nhận dữ liệu từ request
        $data = $request->all();
    
        // In ra màn hình để kiểm tra data nhận được
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        // dừng lại để kiểm tra dữ liệu
        // die(); // bình luận lại dòng này sau khi kiểm tra
        $cartData = $data['cartData'];
        // Tạo order
        $order = [];
        $order['user_id'] = $user_id;
        $order['fullname'] = $data['name'];
        $order['email'] = auth()->user()->email;
        $order['phone_number'] = $data['phone'];
        $order['address'] = $data['address'];
        $order['order_date'] = date('Y-m-d H:i:s');
        $order['status'] = 2;
        $order['total_money'] = $cartData['total'];
        // Chèn order và lấy id của order vừa tạo
        $order_id = DB::table('order')->insertGetId($order);
    
        // Nhận cartData từ data
        $cartData = $data['cartData'];
    
        // Lấy danh sách sản phẩm từ cartData
        $products = $cartData['products'];
    
        // Lặp qua các sản phẩm và chèn vào bảng order_detail
        foreach ($products as $product) {
            $orderDetail = [];
            $orderDetail['order_id'] = $order_id;
            $orderDetail['product_id'] = $product['id'];
            $orderDetail['price'] = $product['price'];
            $orderDetail['quantity'] = $product['quantity'];
            $orderDetail['total_money'] = $product['price'] * $product['quantity'];
            DB::table('order_detail')->insert($orderDetail);
        }
    
        // Xóa dữ liệu tạm thời sau khi đã xử lý
        session()->forget('tempData');
    
        return Redirect::to('user/checkout')->with('cartData', $products);
    }

    public function vnpay(Request $request) {
        $data = $request->all();
        $cartData = $data['cartData'];
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000/vnpay-return"; // Thay đổi URL này
        $vnp_TmnCode = "P03I39T7";
        $vnp_HashSecret = "GC37G6ESGMPYA1AHWNY40DNDGGF8DEGR";
        // Lấy mã đơn hàng có giá trị lớn nhất từ bảng order
    $maxOrderId = DB::table('order')->max('id');
    // Tăng giá trị đó lên 1 để làm mã đơn hàng mới
    $vnp_TxnRef = $maxOrderId + 1;
        $vnp_OrderInfo = 'Thanh toán đơn hàng TEST';
        $vnp_OrderType = 'billpayment';

        $vnp_Amount =  $cartData['total']*24000 *100 ; // Lưu ý: Total đã tính theo đơn vị nhỏ nhất (VND)
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
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00', 'message' => 'success', 'data' => $vnp_Url);
        if (isset($_POST['redirect'])) {
            return response()->json($returnData);
        } else {
            echo json_encode($returnData);
        }
    }
    public function vnpayReturn(Request $request) {
        // Kiểm tra kết quả trả về từ VNPay
        if ($request->vnp_ResponseCode == '00') {
            // Lấy dữ liệu tạm thời từ session
            $tempData = session('tempData');
            if ($tempData) {
                $request->merge($tempData); // Thêm dữ liệu tạm thời vào request
                $this->update($request, auth()->user()->id); // Gọi phương thức update để cập nhật database
                
                // Lấy discountPrice từ dữ liệu nhận được sau khi thanh toán
                $cartData = $tempData['cartData'];
                $discountPrice = $cartData['discountPrice'];
                $codevoucher = $cartData['codevoucher'];
    
                // Kiểm tra xem discountPrice có lớn hơn 0 không
                if ($discountPrice > 0) {
                    // Giảm đi 1 đơn vị của cột 'number_voucher' trong bảng 'voucher'
                    // Lưu ý: Điều này cần được thực hiện dựa trên mã voucher đã sử dụng,
                    // bạn cần lấy mã voucher từ dữ liệu cartData hoặc từ địa chỉ email/người dùng...
                    // Dưới đây là một ví dụ giả sử mã voucher được lưu trong session là 'voucher_code'
    
                    // Kiểm tra xem mã voucher tồn tại trong database không
                    $voucher = Voucher::where('code_voucher', $codevoucher)->first();

                    if ($voucher) {
                        // Giảm số lượng voucher nếu discountPrice > 0
                        $voucher->number_voucher -= 1;
                        $voucher->save();
                    }
                }
            }
            // Hiển thị popup "Payment Complete"
            return redirect('/checkout')->with('popup', 'Payment Complete');
        } else {
            // Xử lý khi thanh toán không thành công
            return redirect('/checkout')->with('popup', 'Payment Failed');
        }
    }
    public function saveTempData(Request $request) {
        // Lưu tạm dữ liệu vào session
        session(['tempData' => $request->all()]);
        return response()->json(['success' => true]);
    }
}
