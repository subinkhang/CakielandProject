<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminListVoucherController extends Controller
{
    public function get_list_voucher()
    {
        $all_voucher = DB::table('voucher')->get();
        return view('admin/adminListVoucher', ['all_voucher' => $all_voucher]);
    }
    public function delete_list_voucher($id)
    {
        DB::table('voucher')->where ('id', $id)->delete();
        Session::put('messagedelete', 'Successfully delete a voucher');
        return Redirect::to('admin-list-voucher');
    }
}
