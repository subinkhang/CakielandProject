<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class MyOrdersController extends Controller
{ 

    public function myorders_detail()
{
    $userId = null;
    if (auth()->check()) {
        $userId = auth()->user()->id;
    } else {
    // Xử lý cho trường hợp người dùng chưa đăng nhập
    // Ví dụ: chuyển hướng đến trang đăng nhập hoặc trả về một thông báo lỗi
    return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để xem đơn hàng.');
    }

$data = DB::table('order_detail')
    ->select('order_detail.order_id', 'order_detail.product_id', 'order_detail.price', 'order_detail.quantity', 'order_detail.total_money', 'order.status', 'product.name', 'product.thumbnail')
    ->join('product', 'order_detail.product_id', '=', 'product.id')
    ->join('order', 'order_detail.order_id', '=', 'order.id')
    ->where('order.user_id', $userId) // Thêm điều kiện lọc theo user_id
    ->get();

$product_list = DB::table('product')
    ->get();

$order_detail = [];
$statuses = [
    0 => 'CANCELLED',
    1 => 'COMPLETED',
    2 => 'DELIVERING',
];

// Group order details by order_id
$orders = [];

    foreach ($data as $item) {
        $orderId = $item->order_id;
        $productId = $item->product_id;
        $price = $item->price;
        $quantity = $item->quantity;
        $totalMoney = $item->total_money;
        $status = $statuses[$item->status] ?? 'Unknown';
        $productName = $item->name;
        $productThumbnail = $item->thumbnail;

        if (!isset($orders[$orderId])) {
            $orders[$orderId] = [
                'order_id' => $orderId,
                'status' => $status,
                'total_price' => $totalMoney,
                'items' => [],
            ];
        }

        $orders[$orderId]['items'][] = [
            'product_id' => $productId,
            'price' => $price,
            'quantity' => $quantity,
            'total_money' => $totalMoney,
            'status' => $status,
            'product_name' => $productName,
            'product_thumbnail' => $productThumbnail,
        ];
    }

    return view('user/myOrders', [
        'data' => array_values($orders),
        'product_list' => $product_list,
        'userId' => $userId,
    ]);
}

}

