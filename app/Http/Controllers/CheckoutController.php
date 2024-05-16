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
        return view('user/checkout');
    }
    // public function edit(){
    //     $edit_user = DB::table('user')->where('id',$user_id)->get();
    //     return view('user/checkout');
    // }
    public function update($user_id, Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['phone_number'] = $request->phone;
        $data['address'] = $request->address;
        DB::table('users')->where('id',$user_id)->update($data);
        // Session::put('message', 'Product updated successfully');
        // return Redirect::to('/user/checkout');
    // $data = [
    //     'fullname' => $request->input('name'),
    //     'phone_number' => $request->input('phone'),
    //     'address' => $request->input('address'),
    // ];

    // DB::table('users')->where('id', $user_id)->update($data);

    // return Redirect::to('/checkout');
    }
}
