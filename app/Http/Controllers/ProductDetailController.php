<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Post;
use App\Models\Product;

session_start();

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
// Chạy được
// class ProductDetailController extends Controller
// {
//     public function product_detail($product_id)
// {
//     // Get product details from product table
//     $product_detail = DB::table('product')
//                         ->where('product.id', $product_id)
//                         ->get();

//     if ($product_detail->isEmpty()) {
//         return redirect()->route('home')->with('error', 'Product not found');
//     }
    
//     $gallery_images = DB::table('gallery')
//                         ->where('gallery.product_id', $product_id)
//                         ->orderBy('id')
//                         ->get();

//     // Fetch all color mappings
//     $color_mapping = [
//         1 => 'Black',
//         2 => 'Yellow',
//         3 => 'Pink',
//         4 => 'Gray',
//         5 => 'Blue',
//         6 => 'Green'
//     ];

//     $product_color = DB::table('product')
//                         ->join('product_detail', 'product_detail.product_id', '=', 'product.id')
//                         ->where('product.id', $product_id)
//                         ->get();

//     $colors = $product_color->map(function ($item) use ($color_mapping) {
//         return $color_mapping[$item->color] ?? 'Unknown';
//     });

//     $related_products = DB::table('product')
//                           ->where('category_id', $product_detail->first()->category_id)
//                           ->where('id', '!=', $product_id)
//                           ->take(4)
//                           ->get();

//     return view('user/productDetail', [
//         'product_detail' => $product_detail,
//         'product_color' => $product_color,
//         'related_products' => $related_products,
//         'colors' => $colors,
//         'gallery_images' => $gallery_images,
//     ]);
// }
// }
//end

//Mới
class ProductDetailController extends Controller
{
    public function product_detail($product_id)
    {
        
        if (!DB::table('posts')->where('product_id', $product_id)->exists()) {
            DB::table('posts')->insert([
                'product_id' => $product_id,
            ]);
        }
        // Get product details from product table
        $product_detail = DB::table('product')
                            ->where('product.id', $product_id)
                            ->get();

        if ($product_detail->isEmpty()) {
            return redirect()->route('home')->with('error', 'Product not found');
        }

        // Get images from gallery table
        $gallery_images = DB::table('gallery')
                            ->where('gallery.product_id', $product_id)
                            ->orderBy('id')
                            ->get();

        // Map colors
        $color_mapping = [
            1 => 'Black',
            2 => 'Yellow',
            3 => 'Pink',
            4 => 'Gray',
            5 => 'Blue',
            6 => 'Green'
        ];

        $product_color = DB::table('product')
                            ->join('product_detail', 'product_detail.product_id', '=', 'product.id')
                            ->where('product.id', $product_id)
                            ->get();

        $colors = $product_color->map(function ($item) use ($color_mapping) {
            return $color_mapping[$item->color] ?? 'Unknown';
        });

        // Get related products
        $related_products = DB::table('product')
                              ->where('category_id', $product_detail->first()->category_id)
                              ->where('id', '!=', $product_id)
                              ->take(4)
                              ->get();

        // Posts
        $post = Post::where('product_id', $product_id)->get();

        $product_name = DB::table('product')
                            ->where('product.id', $product_id)
                            ->select('product.name')
                            ->get();

        return view('user/productDetail', compact(
            'product_detail', 
            'product_color', 
            'related_products', 
            'colors', 
            'gallery_images', 
            'product_name', 
            'post'
        ));
    }
}

//end
