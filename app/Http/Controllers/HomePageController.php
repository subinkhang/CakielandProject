<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomepageController extends Controller
{
    public function index() {
        return view('homepage');
    }

    public function save_email(Request $request){
        $data = array();
        $data['email'] = $request->email;
    
        // Kiểm tra xem địa chỉ email có hợp lệ không
        $emailPattern = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';
        if (!preg_match($emailPattern, $data['email'])) {
            // Nếu không hợp lệ, bạn có thể trả về một thông báo lỗi hoặc làm bất cứ điều gì phù hợp với ứng dụng của bạn.
            // Ví dụ: return Redirect::back()->withErrors(['email' => 'Email is not valid']);
            // Hoặc: return response()->json(['error' => 'Email is not valid'], 400);
        } else {
            // Nếu hợp lệ, lưu vào cơ sở dữ liệu
            DB::table('email_customer')->insert($data);
        }
    
        return Redirect::to('/');
    }
    public function getAllProducts()
    {
        // Lấy ra 8 sản phẩm có lượt bán nhiều nhất
        $top_products = DB::table('order_detail')
                        ->select('product_id', DB::raw('SUM(quantity) as total_quantity'))
                        ->groupBy('product_id')
                        ->orderByDesc('total_quantity')
                        ->take(4)
                        ->get();

        // Lấy thông tin chi tiết của các sản phẩm
        $product_ids = $top_products->pluck('product_id')->toArray();
        $all_product = DB::table('product')->whereIn('id', $product_ids)->get();

        // Truyền danh sách sản phẩm vào view
        return view('homepage', ['all_product' => $all_product]);
    }
}