<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminListProductController extends Controller
{
    public function get_list_product()
    {
        $all_product = DB::table('product')->get();
        return view('admin/adminListProduct', ['all_product' => $all_product]);
    }
    public function delete_list_product($id)
    {
        DB::table('product')->where ('id', $id)->delete();
        Session::put('messagedelete', 'Successfully delete a product');
        // return view('admin/adminListProduct');
        return Redirect::to('admin-list-product');
    }
}
