<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\User;

class ProductListController extends Controller
{
    public function index()
    {
        // return view('customer/productList');


        // USE AFTER HAVE DATABASE
        // $data['Products'] = Product::paginate(6);
        // return view('customer/productList', $data);
        
        $data['users'] = User::paginate(2);
        return view('customer/productList', $data);
    }
}
