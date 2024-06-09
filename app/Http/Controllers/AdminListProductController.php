<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Exports\ExportProductData;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Excel as ExcelExcel;
session_start();

class AdminListProductController extends Controller
{
    public function get_list_product()
    {
        $all_product = DB::table('product')->get();
        return view('admin/adminListProduct', ['all_product' => $all_product]);
    }
    // public function delete_list_product($id)
    // {
    //     DB::table('product')->where ('id', $id)->delete();
    //     Session::put('messagedelete', 'Successfully delete a product');
    //     // return view('admin/adminListProduct');
    //     return Redirect::to('admin-list-product');
    // }
    public function delete_list_product($id)
    {
        // Sử dụng transaction để đảm bảo tính toàn vẹn dữ liệu
        DB::transaction(function () use ($id) {
            // Xóa các bản ghi liên quan trong bảng product_detail
            DB::table('product_detail')->where('product_id', $id)->delete();

            // Xóa các bản ghi liên quan trong bảng gallery
            DB::table('gallery')->where('product_id', $id)->delete();

            // Xóa các bản ghi liên quan trong bảng order
            DB::table('order_detail')->where('product_id', $id)->delete();

            // Xóa các bản ghi liên quan trong bảng post
            DB::table('posts')->where('product_id', $id)->delete();

            // Xóa sản phẩm trong bảng product
            DB::table('product')->where('id', $id)->delete();
        });

        // Đặt thông báo xóa thành công
        Session::put('messagedelete', 'Successfully deleted the product');

        // Điều hướng về trang danh sách sản phẩm
        return Redirect::to('admin-list-product');
    }

    public function export_excel()
    {
        return Excel::download(new ExportProductData(), 'products.xlsx', ExcelExcel::XLSX);
    }
}
