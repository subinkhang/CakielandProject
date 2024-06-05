<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
use Carbon\Carbon; // Import Carbon để xử lý ngày tháng

session_start();

class CartController extends Controller
{
    public function index()
    {
        return view('user/cart');
    }
    public function checkVoucher(Request $request)
{
    $code = $request->input('code_voucher');
    $voucher = DB::table('voucher')->where('code_voucher', $code)->first();

    if (!$voucher) {
        return response()->json(['error' => 'This voucher is not available']);
    }

    $currentDate = Carbon::now();

    if ($voucher->number_voucher <= 0 ||
        $currentDate < $voucher->start_voucher ||
        $currentDate > $voucher->end_voucher) {
        return response()->json(['error' => 'This voucher is no longer valid']);
    }

    return response()->json([
        'condition_voucher' => $voucher->condition_voucher,
        'value_voucher' => $voucher->value_voucher
    ]);
}
}
