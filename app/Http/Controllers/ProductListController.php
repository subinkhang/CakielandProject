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
    public function getAllProducts(Request $request)
    {
        $sort = $request->input('sort', 'none');
        $query = DB::table('product');

        switch ($sort) {
            case 'tang_dan':
                $query->orderBy('price');
                break;
            case 'giam_dan':
                $query->orderBy('price', 'desc');
                break;
            case 'az':
                $query->orderBy('name');
                break;
            case 'za':
                $query->orderBy('name', 'desc');
                break;
        }

        $all_product = $query->get();
        return view('user/productList', ['all_product' => $all_product]);
    }

    public function getPagedProducts(Request $request)
    {
        $sort = $request->input('sort', 'none');
        $query = Product::query();

        switch ($sort) {
            case 'tang_dan':
                $query->orderBy('price');
                break;
            case 'giam_dan':
                $query->orderBy('price', 'desc');
                break;
            case 'az':
                $query->orderBy('name');
                break;
            case 'za':
                $query->orderBy('name', 'desc');
                break;
        }

        $data['list_product'] = $query->paginate(9);
        $all_product = DB::table('product')->get();  // Consider optimizing this if only used for display.
        return view('user/productList', ['list_product' => $data['list_product'], 'all_product' => $all_product]);
    }
}
