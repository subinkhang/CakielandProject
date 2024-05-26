<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
session_start();

class AccountController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $avatar = $user->avatar; 
        return view('user/account', compact('user', 'avatar'));
    }
    public function updateAccount(Request $request)
    {
        // if($request->action == 'homepage'){
        $data = [];
        $data['name'] = $request->name;
        $data['phone_number'] = $request->phone;
        $data['date_of_birth'] = $request->dob;
        $data['address'] = $request->address;
        $validatedData = $request->validate([
            'avatar' => 'nullable|image|max:2048',
        ]);
        // DB::table('users')->update($data);
        // return Redirect::to('/account');
        // }

        // $validatedData = $request->validate([
        //     'avatar' => 'nullable|image|max:2048',
        // ]);

        $get_image = $request->file('avatar');
        if ($get_image) {
            $get_image = $request->file('avatar');
            $new_img = time() . '-' . rand(0, 999) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/avatars', $new_img);
            $data['avatar'] = $new_img;
            $avatar = $data['avatar'];
        }
        // dd($data);
        $user = Auth::user();
        DB::table('users')->where('id', $user->id)->update($data);
        return redirect('/account')->with('success', 'Thông tin tài khoản đã được cập nhật thành công.');
    }
}
