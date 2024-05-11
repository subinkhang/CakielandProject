<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminListBillController extends Controller
{
    public function get_list_orders()
    {
        $all_orders = DB::table('order')->get();
        return view('admin/adminListBill', ['all_orders' => $all_orders]);
    }
    // public function updateOrderStatus($orderId, $status)
    // {
    //     DB::table('orders')
    //         ->where('id', $orderId)
    //         ->update(['status' => $status]);

    //     return response()->json('Status updated successfully');
    // }

    public function cancelOrderStatus($id)
    {
        DB::table('order')
            ->where('id', $id)
            ->update(['status' => 0]);
        Session::put('message', 'Order status cancel successfully');
        return Redirect::to('admin-list-bill');
    }

    public function completeOrderStatus($id)
    {
        DB::table('order')
            ->where('id', $id)
            ->update(['status' => 1]);
        Session::put('message', 'Order status updated successfully');
        return Redirect::to('admin-list-bill');
    }

    public function deliveryOrderStatus($id)
    {
        DB::table('order')
            ->where('id', $id)
            ->update(['status' => 2]);
        Session::put('message', 'Order status delivery successfully');
        return Redirect::to('admin-list-bill');
    }
}
