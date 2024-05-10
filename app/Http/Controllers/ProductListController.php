<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;

session_start();

class ProductListController extends Controller
{
    public function getAllProducts()
    {
        $all_product = DB::table('product')->get();
        return view('user/productList', ['all_product' => $all_product]);
    }

    public function getPagedProducts()
    {
        $data['list_product'] = Product::paginate(9);
        $all_product = DB::table('product')->get();
        return view('user/productList', ['list_product' => $data['list_product'], 'all_product' => $all_product]);
    }
    
}
