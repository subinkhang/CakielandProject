<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomepageController extends Controller
{
    public function index() {
        return view('homepage');
    }

    public function save_email(Request $request){
        $data=array();
        $data['email']=$request->email;
        DB::table('email_customer')->insert($data);
        return Redirect::to('/');
    }
    public function getAllProducts()
    {
        // Lấy ra 8 sản phẩm có lượt bán nhiều nhất
        $top_products = DB::table('order_detail')
                        ->select('product_id', DB::raw('SUM(quantity) as total_quantity'))
                        ->groupBy('product_id')
                        ->orderByDesc('total_quantity')
                        ->take(4)
                        ->get();

        // Lấy thông tin chi tiết của các sản phẩm
        $product_ids = $top_products->pluck('product_id')->toArray();
        $all_product = DB::table('product')->whereIn('id', $product_ids)->get();

        // Truyền danh sách sản phẩm vào view
        return view('homepage', ['all_product' => $all_product]);
    }
}