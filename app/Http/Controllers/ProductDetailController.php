<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index()
    {
        return view('user/productDetail');
    }
}
