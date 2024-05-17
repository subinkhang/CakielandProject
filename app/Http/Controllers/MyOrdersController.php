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
    // public function index()
    // {
    //     return view('user/myOrders');
    // }
    // public function myorders()
    // {
    //     $myorders = DB::table('order_detail')->get();
    //     $all_products = DB::table('product')->get();
    //     $myorders_status = DB::table('order')->get();
    //     return view('user/myOrders', ['myorders' => $myorders, 'all_products'=>$all_products, 'myorders_status' => $myorders_status]);
    // }
    // public function myorders_detail()
    // {

    //     $data = DB::table('order_detail')
    //         // ->select('order_detail.product_id','order_detail.price', 'order_detail.quantity', 'order_detail.total_money', 'order.status', 'product.name','product.thumbnail')
    //         ->join('product', 'order_detail.product_id', '=', 'product.id')
    //         ->join('order', 'order_detail.order_id', '=', 'order.id') // Thêm join với bảng orders
    //         // ->groupBy('order.order_date', 'category.name')
    //         ->get();

    //     $product_list = DB::table('product')
    //     ->get();
    //     // $product_id = $data->distinct()->pluck('product_id');
    //     // $data['product_id'] = $product_id;
    //     $order_detail = [];
    //     foreach ($data as $order) {
    //         // Lấy hình ảnh thumbnail từ cột BLOB và thêm vào mảng thumbnails
    //         $order_detail[] = $order->product_id;
    //     }
    //     return view('user/myOrders', ['data'=>$data, 'order_detail'=>$order_detail, 'product_list'=>$product_list]);
    // }
    // public function myorder_detail()
    // {
    //     $orders = DB::table('order_detail')
    //         ->select('order.id as order_id', 'order_detail.product_id') // Get order ID and product ID
    //         ->join('product', 'order_detail.product_id', '=', 'product.id')
    //         ->join('order', 'order_detail.order_id', '=', 'order.id')
    //         ->groupBy('order.id') // Group results by order ID
    //         ->get();

    //     $orderProductIds = [];
    //     foreach ($orders as $order) {
    //         $orderProductIds[$order->order_id] = []; // Initialize an empty array for each order ID
    //         $orderProductIds[$order->order_id][] = $order->product_id; // Add product ID to the corresponding order ID array
    //     }

    //     return view('user/myOrders', compact('orders', 'orderProductIds'));
    // }
    // public function showCategory(Request $request,$category_id){
    //     $sort = $request->input('sort', 'none');

    //     $cate=DB::table('category')->orderby('id','desc')->get();
    //     $sub_cate=DB::table('sub_category')->orderby('id','desc')->get();

    //     $query = Product::query();
    //     $query->select('product.name', 'product.fake_price', 'product.price','product.thumbnail','product.color', 'product.description','product.description_detail','product.description_technique','product.brand','product.created_at','product.updated_at','product.category_id','product.deleted','product.sub_category_id')
    //     ->join('category','category.id', '=', 'product.category_id')
    //     ->where('product.category_id',$category_id)->get();


    //     switch ($sort) {
    //         case 'tang_dan':
    //             $query->orderBy('price');
    //             break;
    //         case 'giam_dan':
    //             $query->orderBy('price', 'desc');
    //             break;
    //         case 'az':
    //             $query->orderBy('name');
    //             break;
    //         case 'za':
    //             $query->orderBy('name', 'desc');
    //             break;
    //     }

    //     $new_query = Product::query();
    //     $new_query->select('brand');
    //     $new_query->join('category','category.id', '=', 'product.category_id')
    //     ->where('product.category_id',$category_id);
    //     $brands = $new_query->distinct()->pluck('brand');

    //     // Truyền dữ liệu thương hiệu vào view
    //     $data['brands'] = $brands;

    //     $data['list_product'] = $query->paginate(9);
    //     $all_product = DB::table('product')->get();  // Consider optimizing this if only used for display.
    //     return view('user/productList', ['list_product' => $data['list_product'], 'all_product' => $all_product, 
    //     'category'=>$cate, 'sub_category'=>$sub_cate, 'brands' => $data['brands']]);
    // }
    // public function myorders_detail()
    // {
    //     $data = DB::table('order_detail')
    //         ->select('order_detail.product_id', 'order_detail.price', 'order_detail.quantity', 'order_detail.total_money', 'order.status', 'product.name', 'product.thumbnail')
    //         ->join('product', 'order_detail.product_id', '=', 'product.id')
    //         ->join('order', 'order_detail.order_id', '=', 'order.id')
    //         ->get();

    //     $product_list = DB::table('product')
    //         ->get();

    //     $order_detail = [];
    //     $statuses = [
    //         0 => 'CANCELLED',
    //         1 => 'COMPLETED',
    //         2 => 'DELIVERING',
    //     ];

    //     foreach ($data as $order) {
    //         $order_detail[] = [
    //             'product_id' => $order->product_id,
    //             'price' => $order->price,
    //             'quantity' => $order->quantity,
    //             'total_money' => $order->total_money,
    //             'status' => $statuses[$order->status] ?? 'Unknown', // Handle unknown statuses gracefully
    //             'product_name' => $order->name,
    //             'product_thumbnail' => $order->thumbnail,
    //         ];
    //     }

    //     return view('user/myOrders', [
    //         'data' => $order_detail, // Pass the enhanced order_detail array
    //         'product_list' => $product_list,
    //     ]);
    // }

    public function myorders_detail()
{
    $data = DB::table('order_detail')
        ->select('order_detail.order_id', 'order_detail.product_id', 'order_detail.price', 'order_detail.quantity', 'order_detail.total_money', 'order.status', 'product.name', 'product.thumbnail')
        ->join('product', 'order_detail.product_id', '=', 'product.id')
        ->join('order', 'order_detail.order_id', '=', 'order.id')
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
    $groupedOrders = $data->groupBy('order_id');

    foreach ($groupedOrders as $orderId => $orderItems) {
        $orderDetail = [
            'order_id' => $orderId,
            'status' => $statuses[$orderItems->first()->status] ?? 'Unknown',
            'total_price' => $orderItems->sum('total_money'),
            'items' => [],
        ];

        foreach ($orderItems as $item) {
            $orderDetail['items'][] = [
                'product_id' => $item->product_id,
                'price' => $item->price,
                'quantity' => $item->quantity,
                'total_money' => $item->total_money,
                'status' => $statuses[$item->status] ?? 'Unknown',
                'product_name' => $item->name,
                'product_thumbnail' => $item->thumbnail,
            ];
        }

        $order_detail[] = $orderDetail;
    }

    return view('user/myOrders', [
        'data' => $order_detail,
        'product_list' => $product_list,
    ]);
}

}

