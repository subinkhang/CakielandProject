<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Exports\ExportUsersData;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Excel as ExcelExcel;

class AdminUserController extends Controller
{
    public function get_list_user()
    {
        // Lấy tất cả người dùng
        $users = DB::table('users')->get();

        return view('admin/adminUser', ['users' => $users]);
    }

    public function export_excel()
    {
        return Excel::download(new ExportUsersData, 'users.xlsx', ExcelExcel::XLSX);
    }
}
