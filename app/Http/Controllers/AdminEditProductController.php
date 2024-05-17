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
        $edit_product = DB::table('product')->where('id', $product_id)->get();
        return view('admin/adminEditProduct', ['edit_product' => $edit_product]);
    }
    public function update_product($product_id, Request $request)
    {
        $data = [];
        $data['id'] = $request->id;
        $data['name'] = $request->name;
        $data['fake_price'] = $request->fake_price;
        $data['price'] = $request->price;
        $data['description'] = $request->description;
        $data['description_detail'] = $request->description_detail;
        $data['description_technique'] = $request->description_technique;
        $data['brand'] = $request->brand;
        DB::table('product')->where('id', $product_id)->update($data);
        Session::put('message', 'Product updated successfully');
        return Redirect::to('/admin-list-product');
    }
}
