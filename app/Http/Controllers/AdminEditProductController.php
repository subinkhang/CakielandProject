<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminEditProductController extends Controller
{
    public function edit_product($product_id)
    {
        $edit_product = DB::table('product')
        ->join('product_detail', 'product.id', '=', 'product_detail.product_id')
        ->where('product.id', $product_id)
        ->select('product.*', 'product_detail.color as color')
        ->get();
        return view('admin/adminEditProduct', ['edit_product' => $edit_product]);
    }
    public function update_product($product_id, Request $request)
    {   $data = DB::table('product')
        ->join('color', 'product.id', '=', 'color.id')
        ->get();
        $data = [];
        $data['name'] = $request->name;
        $data['fake_price'] = $request->fake_price;
        $data['price'] = $request->price;
        $data['description'] = $request->description;
        $data['description_detail'] = $request->description_detail;
        $data['description_technique'] = $request->description_technique;
        $data['brand'] = $request->brand;
        $get_image = $request->file('img');
        $data['category_id'] = $request->cate;
        $data['sub_category_id'] = $request->tag;
        $colors = $request->input('color');
        foreach ($colors as $color) {
            DB::table('product_detail')->where('id', $product_id)->update([
                'color' => $color,
                'product_id' => $product_id,
            ]);
        }
        // if ($get_image) {
        //     $get_image = $request->file('img');
        //     $new_img = time() . '-' . rand(0, 999) . '.' . $get_image->getClientOriginalExtension();
        //     $get_image->move('public/backend/upload/', $new_img);
        //     $data['thumbnail'] = $new_img;
        // }
        // $data['category_id'] = $request->category_id;
        // $data['thumbnail'] = $request->thumbnail;
        // $data['color'] = $request->color;
        // $data['deleted'] = $request->deleted;
        // $data['sum'] = $request->sum;
        // $data['sub_caterogy_id'] = $request->sub_caterogy_id;
        // $product_id = DB::table('product')->insertGetId($data);

        // if ($files = $request->file('gal')) {
        //     $images = [];
        //     $productId = $request->input('product_id');
        //     foreach ($files as $file) {
        //         $newimg = time() . '-' . rand(0, 999) . '.' . $file->getClientOriginalExtension();
        //         $file->move(public_path('backend/upload'), $newimg);
        //         $images[] = $newimg;
        //     }

        //     foreach ($images as $image) {
        //         DB::table('gallery')->where('id', $product_id)->update([
        //             'image_product' => $image,
        //             'product_id' => $product_id,
        //         ]);
        //     }
        // }

        DB::table('product')->where('id', $product_id)->update($data);
        Session::put('message', 'Product updated successfully');
        return Redirect::to('/admin-list-product');

    }
}
