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
// {
//     // Lấy chi tiết sản phẩm hiện tại từ bảng product
//     $product_detail = DB::table('product')->where('id', $product_id)->first();

//     // Lấy category_id của sản phẩm hiện tại
//     $category_id = $product_detail->category_id;

//     // Lấy danh sách các sản phẩm liên quan từ cùng một category
//     $related_products = DB::table('product')
//         ->where('category_id', $category_id)
//         ->where('id', '!=', $product_id) // Loại bỏ sản phẩm hiện tại khỏi danh sách liên quan
//         ->get();

//     // Trả về view với dữ liệu sản phẩm chi tiết và danh sách sản phẩm liên quan
//     return view('user/productDetail', ['product_detail' => $product_detail, 'related_products' => $related_products]);
// }


// }
class ProductDetailController extends Controller
{
    public function product_detail($product_id)
    {
        // Lấy thông tin sản phẩm từ bảng product và product_detail
        $product_detail = DB::table('product')
        ->where('product.id', $product_id)
                        ->get();
        $product_color = DB::table('product')
                            ->join('product_detail', 'product_detail.product_id', '=', 'product.id')
                            ->where('product.id', $product_id)
                            ->get();

        //Lấy sản phẩm cùng category_id
        $related_products = DB::table('product')
                                    ->where('category_id', $product_detail->first()->category_id)
                                    ->where('id', '!=', $product_id) // Loại bỏ sản phẩm hiện tại
                                    ->take(4) // Lấy tối đa 4 sản phẩm
                                    ->get();

        return view('user/productDetail', [
            'product_detail' => $product_detail,
            'product_color' => $product_color,
            'related_products' => $related_products
        ]);
    }
}