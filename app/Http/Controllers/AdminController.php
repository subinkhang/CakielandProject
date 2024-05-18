<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function show_dashboard()
    {
        return view('admin/adminDashboard');
    }
    public function count_data()
    {
        $userCount = DB::table('users')->count();
        $orderCount = DB::table('order')->count();
        $emailCount = DB::table('email_customer')->count();
        $totalMoney = DB::table('order')->where('status', 2)->sum('total_money');
        $formatteduserCount = str_pad($userCount, 2, '0', STR_PAD_LEFT);
        $formattedorderCount = str_pad($orderCount, 2, '0', STR_PAD_LEFT);
        $formattedemailCount = str_pad($emailCount, 2, '0', STR_PAD_LEFT);

         // Lấy danh sách các category từ cơ sở dữ liệu
         $categories = DB::table('category')->pluck('name');

         // Lấy dữ liệu từ các bảng
         $data = DB::table('order_detail')
             ->select('order.order_date', 'category.name', DB::raw('SUM(order_detail.quantity) as total_quantity'))
             ->join('product', 'order_detail.product_id', '=', 'product.id')
             ->join('category', 'product.category_id', '=', 'category.id')
             ->join('order', 'order_detail.order_id', '=', 'order.id') // Thêm join với bảng orders
             ->groupBy('order.order_date', 'category.name')
             ->get();
     
         // Format dữ liệu cho biểu đồ
         $formattedData = [];
         foreach ($data as $item) {
             $formattedData[$item->order_date][$item->name] = $item->total_quantity;
         }
     
         // Biến đổi dữ liệu để đảm bảo mỗi ngày có tất cả các category
         // Nếu không có dữ liệu cho một category nào đó trong một ngày, đặt số lượng bằng 0
         foreach ($formattedData as $date => $categoryData) {
             foreach ($categories as $category) {
                 if (!isset($categoryData[$category])) {
                     $formattedData[$date][$category] = 0;
                 }
             }
             // Sắp xếp lại mảng theo tên category
             ksort($formattedData[$date]);
         }
     
         // Chuẩn bị dữ liệu cho biểu đồ
         $finalData = [];
         foreach ($formattedData as $date => $categoryData) {
             $row = ['date' => $date];
             foreach ($categoryData as $quantity) {
                 $row['categories'][] = $quantity;
             }
             $finalData[] = $row;
         }

        
        return view('admin.adminDashboard', ['userCount' => $formatteduserCount,
        'orderCount' => $formattedorderCount, 'emailCount' => $formattedemailCount, 'totalMoney' => $totalMoney,
        'chartData' => json_encode($finalData), 'categories' => $categories]);
    }
}
