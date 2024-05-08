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
    public function myorders()
    {
        $myorders = DB::table('order_detail')->get();
        $all_products = DB::table('product')->get();
        $myorders_status = DB::table('order')->get();
        return view('user/myOrders', ['myorders' => $myorders, 'all_products'=>$all_products, 'myorders_status' => $myorders_status]);
    }
}
