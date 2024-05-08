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
    // public function index()
    // {
    //     return view('admin/admin_login');
    // }

    public function get_list_product()
    {
        $all_product = DB::table('product')->get();
        return view('admin/adminListProduct', ['all_product' => $all_product]);
    }
}
