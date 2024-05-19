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
        $get_image = $request->file('img');
        if ($get_image) {
            $new_img = time() . '-' . rand(0, 999) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/assets/avatar/', $new_img);
            $data['avatar'] = $new_img;
        }
        dd($data);
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
public function update_avatar(Request $request)
    {
        // $validatedData = $request->validate([
        //     'avatar' => 'nullable|image|max:2048',
        // ]);

        // $get_image = $request->file('img');
        // if ($get_image) {
        //     $avatar = $request->file('img');
        //     $avatarPath = $avatar->store('avatars', 'public');
        //     $user = auth()->user();
        //     $user->update(['avatar' => $avatarPath]);
        //     return redirect('/account')->with('success', 'Avatar đã được cập nhật thành công.');
        // } else {
        //     return redirect('/account')->with('error', 'Không có file ảnh nào được tải lên.');
        // }

        // $get_image = $request->file('img');
        // if ($get_image) {
        //     $get_image = $request->file('img');
        //     $new_img = time() . '-' . rand(0, 999) . '.' . $get_image->getClientOriginalExtension();
        //     $get_image->move('public/backend/upload/', $new_img);
        //     $data['thumbnail'] = $new_img;
        // }

        $get_image = $request->file('img');
        if ($get_image) {
            $get_image = $request->file('img');
            $new_img = time() . '-' . rand(0, 999) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/backend/upload/', $new_img);
            $data['avatar'] = $new_img;
        }

        $data = [];
        // $data['id'] = $request->id;

        // $data['name'] = $request->name;
        // $data['fake_price'] = $request->fake_price;
        // $data['price'] = $request->price;
        // $data['description'] = $request->description;
        // $data['description_detail'] = $request->description_detail;
        // $data['description_technique'] = $request->description_technique;
        // $data['brand'] = $request->brand;
        $get_image = $request->file('avatar');
        // $data['category_id'] = $request->cate;
        // $data['sub_category_id'] = $request->tag;
        // if ($request->has('color')) {
        //     $data['color'] = implode(',', $request->color);
        // }

        if ($get_image) {
            $get_image = $request->file('avatar');
            $new_img = time() . '-' . rand(0, 999) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/backend/upload/', $new_img);
            $data['avatar'] = $new_img;
        }
        // $data['category_id'] = $request->category_id;
        // $data['thumbnail'] = $request->thumbnail;
        // $data['color'] = $request->color;
        // $data['deleted'] = $request->deleted;
        // $data['sum'] = $request->sum;
        // $data['sub_caterogy_id'] = $request->sub_caterogy_id;
        DB::table('users')->insertGetId($data);
    }
}