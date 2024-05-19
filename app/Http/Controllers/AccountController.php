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

  $validatedData = $request->validate([
        'avatar' => 'nullable|image|max:2048',
    ]);

    if ($request->hasFile('avatar')) {
        $avatar = $request->file('avatar');
        $avatarPath = $avatar->store('public/avatars');

        $data = [
            'name' => $request->name,
            'phone_number' => $request->phone,
            'date_of_birth' => $request->dob,
            'address' => $request->address,
            'avatar' => $avatarPath,
        ];
    } else {
        $data = [
            'name' => $request->name,
            'phone_number' => $request->phone,
            'date_of_birth' => $request->dob,
            'address' => $request->address,
        ];
    }

    $user = auth()->user();
    $user->update($data);

    return redirect('/account')->with('success', 'Thông tin tài khoản đã được cập nhật thành công.');
    
}
}