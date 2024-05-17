<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('user/account', compact('user'));
    }
    public function update_account($user_id, Request $request)
    {
        $data = [];
        $data['name'] = $request->name;
        $data['phone_number'] = $request->phone;
        $data['date_of_birth'] = $request->dob;
        $data['address'] = $request->description;
        $data['description_detail'] = $request->address;
        DB::table('users')->where('id', $user_id)->update($data);
        Session::put('message', 'Product updated successfully');
        return Redirect::to('/admin-list-product');
    }
}
