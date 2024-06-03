<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminListProductController extends Controller
{
    public function get_list_product()
    {
        $all_product = DB::table('product')->get();
        return view('admin/adminListProduct', ['all_product' => $all_product]);
    }

    public function delete_list_product($id)
    {
        // Xóa các bản ghi liên quan trong bảng gallery trước
        DB::table('gallery')->where('product_id', $id)->delete();
        
        // Xóa các bản ghi liên quan trong bảng product_detail trước
        DB::table('product_detail')->where('product_id', $id)->delete();
        
        // Sau đó xóa bản ghi trong bảng product
        DB::table('product')->where('id', $id)->delete();

        // Đặt thông báo xóa thành công
        Session::put('messagedelete', 'Successfully deleted the product');
        
        // Chuyển hướng lại trang danh sách sản phẩm
        return Redirect::to('admin-list-product');
    }
}
