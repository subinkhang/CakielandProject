<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/admin_login');
    }

    public function show_dashboard()
    {
        return view('admin/adminDashboard');
    }

    public function add_product()
    {
        return view('admin/adminAddProduct');
    }

    public function list_product()
    {
        return view('admin/adminListProduct');
    }

    public function list_bill()
    {
        return view('admin/adminListBill');
    }
}
