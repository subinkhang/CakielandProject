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
    // public function insert_coupon_code(Request $request)
    // {
    //     $data = [];
    //     $data['name_voucher'] = $request->name_voucher;
    //     $data['code_voucher'] = $request->code_voucher;
    //     $data['number_voucher'] = $request->number_voucher;
    //     $data['condition_voucher'] = $request->condition_voucher;
    //     $data['value_voucher'] = $request->value_voucher;
    //     // $data->save();
    //     Session::put('message','Discount code added successfully');
    //     return Redirect::to('admin-add-voucher');
    // }
    // public function insert_coupon_code(Request $request)
    // {
    //     $data = [];
    //     $data['name_voucher'] = $request->name_voucher;
    //     $data['code_voucher'] = $request->code_voucher;
    //     $data['number_voucher'] = $request->number_voucher;
    //     $data['condition_voucher'] = $request->condition_voucher;
    //     $data['value_voucher'] = $request->value_voucher;
    //     $data['start_voucher'] = $request->start_voucher;
    //     $data['end_voucher'] = $request->end_voucher;
    
    //     // Assuming you have a model named Voucher for the vouchers table
    //     // Voucher::create($data);
    
    //     Session::put('message', 'Discount code added successfully');
    //     return Redirect::to('admin-add-voucher');
    // }
    public function insert_coupon_code(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name_voucher' => 'required|string|max:255',
            'code_voucher' => 'required|string|max:255',
            'number_voucher' => 'required|integer',
            'condition_voucher' => 'required|integer',
            'value_voucher' => 'required|numeric',
            'start_voucher' => 'required|date',
            'end_voucher' => 'required|date',
        ]);

        // Prepare the data array
        $data = [
            'name_voucher' => $request->name_voucher,
            'code_voucher' => $request->code_voucher,
            'number_voucher' => $request->number_voucher,
            'condition_voucher' => $request->condition_voucher,
            'value_voucher' => $request->value_voucher,
            'start_voucher' => $request->start_voucher,
            'end_voucher' => $request->end_voucher,
        ];

        // Insert data into the database
        DB::table('voucher')->insert($data);

        // Set success message and redirect
        Session::put('message', 'Discount code added successfully');
        return Redirect::to('admin-add-voucher');
    }
    


}
