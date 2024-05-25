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
        // $edit_product = DB::table('product')->join('product_detail', 'product.id', '=', 'product_detail.product_id')->join('gallery', 'product.id', '=', 'gallery.product_id')->where('product.id', $product_id)->select('product.*', 'product_detail.color as color', 'gallery.image_product as gallery')->get();
        $edit_product = DB::table('product')->join('product_detail', 'product.id', '=', 'product_detail.product_id')->where('product.id', $product_id)->select('product.*', 'product_detail.color as color')->get();
        $gallery_images = DB::table('gallery')->where('product_id', $product_id)->pluck('image_product');
        return view('admin/adminEditProduct', ['edit_product' => $edit_product, 'gallery_images' => $gallery_images]);
    }
    public function update_product($product_id, Request $request)
    {
        $data = [];
        $data['name'] = $request->name;
        $data['fake_price'] = $request->fake_price;
        $data['price'] = $request->price;
        $data['description'] = $request->description;
        $data['description_detail'] = $request->description_detail;
        $data['description_technique'] = $request->description_technique;
        $data['brand'] = $request->brand;
        $data['category_id'] = $request->cate;
        $data['sub_category_id'] = $request->tag;
        $colors = $request->input('color', []);
        // $data['thumbnail'] = $request->img;
        $get_image = $request->file('img');
        if ($get_image) {
            $new_img = time() . '-' . rand(0, 999) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/backend/upload/', $new_img);
            $data['thumbnail'] = $new_img;
        }

        DB::table('gallery')->where('product_id', $product_id)->delete();

        if ($files = $request->file('gall')) {
            foreach ($files as $file) {
                $newimg = time() . '-' . rand(0, 999) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('backend/upload'), $newimg);
                $images[] = $newimg;
            }

            foreach ($images as $image) {
                DB::table('gallery')->insert([
                    'image_product' => $image,
                    'product_id' => $product_id,
                ]);
            }
        }
        // Xóa các màu đã tồn tại trong bảng product_detail
        DB::table('product_detail')->where('product_id', $product_id)->delete();

        foreach ($colors as $color) {
            DB::table('product_detail')->insert([
                'product_id' => $product_id,
                'color' => $color,
            ]);
        }

        DB::table('product')->where('id', $product_id)->update($data);
        Session::put('message', 'Product updated successfully');
        return Redirect::to('/admin-list-product');
    }
}
