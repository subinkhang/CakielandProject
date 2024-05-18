<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

// class ProductDetailController extends Controller
// {
//     public function product_detail($product_id)
//     {
//         $product_detail = DB::table('product')->where('id',$product_id)->get();
//         return view('user/productDetail', ['product_detail' => $product_detail]);
//     }
// }
class ProductDetailController extends Controller
{
    public function product_detail($product_id)
    {
        $product_detail = DB::table('product')
        ->join('product_detail', 'product_detail.pro_id', '=', 'product.id')
        ->where('product.id', $product_id)
        ->get();

        return view('user/productDetail', ['product_detail' => $product_detail]);
    }
}
