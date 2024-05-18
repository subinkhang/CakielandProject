<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AccountController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('user/account', compact('user'));
    }
    public function update_account(Request $request)
    {
        // if($request->action == 'homepage'){
        $data = [];
        $data['name'] = $request->name;
        $data['phone_number'] = $request->phone;
        $data['date_of_birth'] = $request->dob;
        $data['address'] = $request->address;
        DB::table('users')->update($data);
        return Redirect::to('/account');
        // }
    }
}
