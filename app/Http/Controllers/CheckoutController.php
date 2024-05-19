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
}
