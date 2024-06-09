<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Exports\ExportBillData;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Excel as ExcelExcel;
session_start();

class AdminListBillController extends Controller
{
    public function get_list_orders()
    {
        // Lấy tất cả đơn hàng cùng với chi tiết đơn hàng và tên sản phẩm
        $all_orders = DB::table('order')->join('order_detail', 'order.id', '=', 'order_detail.order_id')->join('product', 'order_detail.product_id', '=', 'product.id')->select('order.id as order_id', 'order.user_id', 'order.total_money', 'order.order_date', 'order.status', 'product.name as product_name')->get();

        // Nhóm các sản phẩm theo đơn hàng
        $grouped_orders = $all_orders->groupBy('order_id');

        return view('admin/adminListBill', ['grouped_orders' => $grouped_orders]);
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
    
    public function export_excel()
    {
        return Excel::download(new ExportBillData, 'bills.xlsx', ExcelExcel::XLSX);
    }
}
