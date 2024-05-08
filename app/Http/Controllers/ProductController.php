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
        $data = array();
        // $data['id'] = $request->id;
        $data['name'] = $request->name;
        $data['fake_price'] = $request->fake_price;
        $data['price'] = $request->price;
        $data['description'] = $request->description;
        $data['description_detail'] = $request->description_detail;
        $data['description_technique'] = $request->description_technique;
        $data['brand'] = $request->brand;
        // $data['category_id'] = $request->category_id;
        // $data['thumbnail'] = $request->thumbnail;
        // $data['color'] = $request->color;
        // $data['deleted'] = $request->deleted;
        // $data['sum'] = $request->sum;
        // $data['sub_caterogy_id'] = $request->sub_caterogy_id;
        

        DB::table('product')->insert($data);
        Session::put('message', 'Product added successfully');
        return Redirect::to('/admin-add-product');
    }
}
