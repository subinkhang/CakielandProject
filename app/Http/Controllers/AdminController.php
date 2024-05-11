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

    public function list_bill()
    {
        return view('admin/adminListBill');
    }
    public function count_data()
    {
        $userCount = DB::table('user')->count();
        $orderCount = DB::table('order')->count();
        $emailCount = DB::table('email_customer')->count();
        $totalMoney = DB::table('order')->where('status', 2)->sum('total_money');
        $formatteduserCount = str_pad($userCount, 2, '0', STR_PAD_LEFT);
        $formattedorderCount = str_pad($orderCount, 2, '0', STR_PAD_LEFT);
        $formattedemailCount = str_pad($emailCount, 2, '0', STR_PAD_LEFT);
        return view('admin.adminDashboard', ['userCount' => $formatteduserCount, 'orderCount' => $formattedorderCount, 'emailCount' => $formattedemailCount, 'totalMoney' => $totalMoney]);
    }
}
