<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Voucher;
use Illuminate\Support\Facades\Log;

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
        $data = $request->all();
        Log::info('Update method called with data: ', $data); // Ghi log dữ liệu đầu vào

        $cartData = $data['cartData'];
        
        $order = [];
        $order['user_id'] = $user_id;
        $order['fullname'] = $data['name'];
        $order['email'] = auth()->user()->email;
        $order['phone_number'] = $data['phone'];
        $order['address'] = $data['address'];
        $order['order_date'] = date('Y-m-d H:i:s');
        $order['status'] = 2;
        $order['total_money'] = $cartData['total'];
        
        $order_id = DB::table('order')->insertGetId($order);
        Log::info('Order created with ID: ', ['order_id' => $order_id]); // Ghi log ID của order vừa tạo
        
        $products = $cartData['products'];
        
        foreach ($products as $product) {
            $orderDetail = [];
            $orderDetail['order_id'] = $order_id;
            $orderDetail['product_id'] = $product['id'];
            $orderDetail['price'] = $product['price'];
            $orderDetail['quantity'] = $product['quantity'];
            $orderDetail['total_money'] = $product['price'] * $product['quantity'];
            DB::table('order_detail')->insert($orderDetail);
            Log::info('Order detail inserted: ', $orderDetail); // Ghi log chi tiết order được chèn vào
        }
        
        session()->forget('tempData');
        
        return Redirect::to('user/checkout')->with('cartData', $products);
    }

    public function vnpay(Request $request)
    {
        $data = $request->all();
        Log::info('VNPay method called with data: ', $data); // Ghi log dữ liệu đầu vào
        
        $cartData = $data['cartData'];
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000/vnpay-return";
        $vnp_TmnCode = "P03I39T7";
        $vnp_HashSecret = "GC37G6ESGMPYA1AHWNY40DNDGGF8DEGR";
        
        // Sử dụng uniqid() để tạo vnp_TxnRef duy nhất
        $vnp_TxnRef = uniqid();
        $vnp_OrderInfo = 'Thanh toán đơn hàng TEST';
        $vnp_OrderType = 'billpayment';

        $vnp_Amount = $cartData['total'] * 24000 * 100;
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
        Log::info('VNPay URL generated: ', ['url' => $vnp_Url]); // Ghi log URL VNPay

        if (isset($_POST['redirect'])) {
            return response()->json($returnData);
        } else {
            echo json_encode($returnData);
        }
    }

    public function saveTempData(Request $request)
    {
        $tempData = $request->all();
        session(['tempData' => $tempData]);

        // Lưu một giá trị kiểm tra vào session
        session(['test' => 'test_value']);

        // Kiểm tra session ID
        $sessionId = session()->getId();
        Log::info('Session ID on save: ', ['session_id' => $sessionId]);

        // Kiểm tra xem tempData đã được lưu trong session hay chưa
        $tempDataFromSession = session('tempData');
        $testValueFromSession = session('test');

        if ($tempDataFromSession) {
            Log::info('Temp data successfully saved in session: ', $tempDataFromSession); // Ghi log dữ liệu tạm thời lưu vào session
        } else {
            Log::error('Failed to save temp data in session.');
        }

        if ($testValueFromSession) {
            Log::info('Test value successfully saved in session: ', ['test' => $testValueFromSession]); // Ghi log giá trị kiểm tra lưu vào session
        } else {
            Log::error('Failed to save test value in session.');
        }

        return response()->json(['success' => true]);
    }

    public function vnpayReturn(Request $request)
    {
        Log::info('VNPay return called with response: ', $request->all()); // Ghi log dữ liệu trả về từ VNPay

        // Kiểm tra session ID
        $sessionId = session()->getId();
        Log::info('Session ID on return: ', ['session_id' => $sessionId]);

        if ($request->vnp_ResponseCode == '00') {
            Log::info('$request->vnp_ResponseCode: ', $request->all()); // Ghi log dữ liệu trả về từ VNPay
            $tempData = session('tempData');
            Log::info('Temp data from session: ', is_array($tempData) ? $tempData : [$tempData]); // Ghi log dữ liệu tạm thời từ session

            if (!empty($tempData)) {
                if (!is_array($tempData)) {
                    $tempData = json_decode(json_encode($tempData), true); // Chuyển đổi thành mảng nếu cần
                }
                $request->merge($tempData);
                Log::info('Merging tempData into request: ', $tempData); // Ghi log dữ liệu tạm thời sau khi merge vào request

                try {
                    $this->update($request, auth()->user()->id);
                    Log::info('Update method called successfully'); // Ghi log sau khi gọi phương thức update
                } catch (\Exception $e) {
                    Log::error('Error in update method: ', ['error' => $e->getMessage()]); // Ghi log lỗi nếu phương thức update gặp lỗi
                    return redirect('/checkout')->with('popup', 'Payment Complete but data update failed');
                }

                $cartData = $tempData['cartData'];
                $discountPrice = $cartData['discountPrice'];
                $codevoucher = $cartData['codevoucher'];

                if ($discountPrice > 0) {
                    $voucher = Voucher::where('code_voucher', $codevoucher)->first();
                    if ($voucher) {
                        $voucher->number_voucher -= 1;
                        $voucher->save();
                        Log::info('Voucher updated: ', ['voucher' => $voucher]); // Ghi log thông tin voucher được cập nhật
                    } else {
                        Log::warning('Voucher not found: ', ['code_voucher' => $codevoucher]); // Ghi log nếu không tìm thấy voucher
                    }
                }
            } else {
                Log::error('Temp data not found in session'); // Ghi log nếu không tìm thấy dữ liệu tạm thời trong session
                return redirect('/checkout')->with('popup', 'Payment Complete but temp data not found');
            }

            return redirect('/checkout')->with('popup', 'Payment Complete');
        } else {
            Log::error('VNPay payment failed with response: ', $request->all()); // Ghi log nếu thanh toán VNPay thất bại
            return redirect('/checkout')->with('popup', 'Payment Failed');
        }
    }

}
