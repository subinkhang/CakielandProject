<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class CheckoutController extends Controller
{
    public function index()
    {

        $user = auth()->user();
        return view('user/checkout', compact('user'));
    }
    public function update(Request $request,$user_id)
    {
        $data = [];
        $data['name'] = $request->name;
        $data['address'] = $request->address;
        $data['phone_number'] = $request->phone;
        DB::table('users')->where('id', $user_id)->update($data);
        Session::put('message', 'Product updated successfully');
        return Redirect::to('/admin-list-product');
    }
}
