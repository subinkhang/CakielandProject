<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {   
        return view('user/checkout');
    }
    public function edit($user_id){
        $edit_user = DB::table('user')->where('id',$user_id)->get();
        return view('user/checkout', ['edit_user' => $edit_user]);
    }
    public function update_product($user_id, Request $request){
        $data = array();
        $data['id'] = $request->id;
        $data['fullname'] = $request->name;
        $data['phone_number'] = $request->phone;
        $data['address'] = $request->address;
        DB::table('user')->where('id',$user_id)->update($data);
        // Session::put('message', 'Product updated successfully');
        return Redirect::to('/user/checkout');
    }
}
