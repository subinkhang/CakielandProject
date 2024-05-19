<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class ProductController extends Controller
{
    public function add_product()
    {
        return view('admin/adminAddProduct');
    }

    // public function user_list_product()
    // {
    //     $list_product = DB::table('product')->get();
    //     $manager_product = view('user/productList')->with('list_product', $list_product);
    //     return view('user/productList')->with('list_product', $list_product);
    // }

    public function list_product()
    {
        return view('admin/adminListProduct');
    }
    public function save_product(Request $request)
    {
        // $testdata = DB::table('product')
        // ->join('sub_category', 'sub_category.id', '=', 'product.sub_caterogy_id')
        // ->get();

        //     $images = array();
        //     if ($files = $request->file('gal')) {
        //         $productId = $request->input('product_id');
        //         foreach ($files as $file) {
        //             $newimg = time() . '-' . rand(0, 999) . '.' . $file->getClientOriginalExtension();
        //             $file->move(public_path('backend/upload'), $newimg);
        //             $images[] = $newimg;
        //         }

        //         foreach ($images as $image) {
        //             DB::table('gallery')->insert([
        //             'image_product' => $image,
        //             'product_id' => $productId
        //         ]);

        //     }
        // }

        $data = [];
        // $data['id'] = $request->id;

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
        // if ($request->has('color')) {
        //     $data['color'] = implode(',', $request->color);
        // }
        if ($get_image) {
            $new_img = time() . '-' . rand(0, 999) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/backend/upload/', $new_img);
            $data['thumbnail'] = $new_img;
        }
        // $data['category_id'] = $request->category_id;
        // $data['thumbnail'] = $request->thumbnail;
        // $data['color'] = $request->color;
        // $data['deleted'] = $request->deleted;
        // $data['sum'] = $request->sum;
        // $data['sub_caterogy_id'] = $request->sub_caterogy_id;
        $product_id = DB::table('product')->insertGetId($data);

        if ($files = $request->file('gal')) {
            $images = [];
            $productId = $request->input('product_id');
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
        $colors = $request->input('color');
        foreach ($colors as $color) {
            DB::table('product_detail')->insert([
                'color' => $color,
                'product_id' => $product_id,
            ]);
        }

        Session::put('message', 'Product added successfully');
        return Redirect::to('/admin-add-product');
    }
}
