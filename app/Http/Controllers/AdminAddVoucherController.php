<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class AdminAddVoucherController extends Controller
{
    public function add_voucher()
    {
        return view('admin/adminAddVoucher');
    }

    // public function list_product()
    // {
    //     return view('admin/adminListProduct');
    // }
    public function insert_coupon_code(Request $request)
    {
        $data = $request->all();
        $coupon = new Coupon;
        $coupon->name_voucher = $data['name_voucher'];
        $coupon->code_voucher = $data['code_voucher'];
        $coupon->number_voucher = $data['number_voucher'];
        $coupon->condition_voucher = $data['condition_voucher'];
        $coupon->value_voucher = $data['value_voucher'];
        $coupon->save();
        Session::put('message','Discount code added successfully');
        return Redirect::to('admin-add-voucher');
    }
}
