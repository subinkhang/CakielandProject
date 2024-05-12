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
    public function myorders_detail()
    {

        $data = DB::table('order_detail')
            ->select('order_detail.price', 'order_detail.quantity', 'order_detail.total_money', 'order.status', 'product.name','product.thumbnail')
            ->join('product', 'order_detail.product_id', '=', 'product.id')
            ->join('order', 'order_detail.order_id', '=', 'order.id') // Thêm join với bảng orders
            // ->groupBy('order.order_date', 'category.name')
            ->get();
        return view('user/myOrders', ['data'=>$data]);
    }
}

