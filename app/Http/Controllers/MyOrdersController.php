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
        return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để xem đơn hàng.');
    }

    $data = DB::table('order_detail')
        ->select('order_detail.order_id', 'order_detail.product_id', 'order_detail.price', 'order_detail.quantity', 'order_detail.total_money', 'order.status', 'product.name', 'product.thumbnail',DB::raw('DATE(order.order_date) as order_date'))
        ->join('product', 'order_detail.product_id', '=', 'product.id')
        ->join('order', 'order_detail.order_id', '=', 'order.id')
        ->where('order.user_id', $userId)
        ->get();

    $product_list = DB::table('product')->get();
    $statuses = [
        0 => 'CANCELLED',
        1 => 'COMPLETED',
        2 => 'DELIVERING',
    ];

    $orders = [];
    foreach ($data->groupBy('status') as $status => $orderItems) {
        $orders[$status] = [];
        $orders = [];

foreach ($data as $item) {
    $orderId = $item->order_id;
    $productId = $item->product_id;
    $price = $item->price;
    $quantity = $item->quantity;
    $totalPrice = $price * $quantity;
    $productName = $item->name;
    $productThumbnail = $item->thumbnail;
    $status = $item->status;
    $orderDate = $item->order_date;
    if (!isset($orders[$orderId])) {
        $orders[$orderId] = [
            'order_id' => $orderId,
            'total_price' => 0,
            'status' => $status,
            'order_date' => $orderDate,
            'items' => [],
        ];
    }

    $orders[$orderId]['items'][] = [
        'product_id' => $productId,
        'price' => $price,
        'quantity' => $quantity,
        'product_name' => $productName,
        'product_thumbnail' => $productThumbnail,
    ];
    $orders[$orderId]['total_price'] += $totalPrice;
}
    }

    return view('user/myOrders', [
        'orders' => $orders,
        'product_list' => $product_list,
        'userId' => $userId,
        'statuses' => $statuses,
    ]);
}

}

