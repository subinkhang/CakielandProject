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
    public function update(Request $request, $user_id)
    {
        $order = [];
        $order['user_id'] = $user_id;
        $order['fullname'] = $request->name;
        $order['email'] = auth()->user()->email;
        $order['phone_number'] = $request->phone;
        $order['address'] = $request->address;
        $order['order_date'] = date('Y-m-d H:i:s');
        $order['status'] = 2;
        $order['total_money'] = $request->total;
        DB::table('order')->insert($order);

        $images = [];
        // $productId = $request->input('product_id');
        // foreach ($files as $file) {
        //     $newimg = time() . '-' . rand(0, 999) . '.' . $file->getClientOriginalExtension();
        //     $file->move(public_path('backend/upload'), $newimg);
        //     $images[] = $newimg;
        // }

        foreach ($images as $image) {
            DB::table('gallery')->insert([
                'image_product' => $image,
                'product_id' => $product_id,
            ]);
        }

        return Redirect::to('/checkout');
    }
}
