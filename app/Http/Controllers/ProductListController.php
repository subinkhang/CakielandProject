<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;

session_start();

class ProductListController extends Controller
{
    public function showCategory(Request $request, $category_id)
    {
        $sort = $request->input('sort', 'none');

        $cate = DB::table('category')->orderby('id', 'desc')->get();
        $sub_cate = DB::table('sub_category')->orderby('id', 'desc')->get();

        $query = Product::query();
        $query->select('product.*')
        ->where('product.category_id', $category_id);

        switch ($sort) {
            case 'increase':
                $query->orderByRaw('CAST(price AS DECIMAL(10,2))');
                break;
            case 'decrease':
                $query->orderByRaw('CAST(price AS DECIMAL(10,2)) DESC');
                break;
            case 'az':
                $query->orderBy('name');
                break;
            case 'za':
                $query->orderBy('name', 'desc');
                break;
        }

        $new_query = Product::query();
        $new_query->select('brand');
        $new_query->join('category', 'category.id', '=', 'product.category_id')
            ->where('product.category_id', $category_id)
            ->whereNotNull('product.brand'); // Thêm điều kiện lọc các sản phẩm có brand không null
        $brands = $new_query->distinct()->pluck('brand');

        // Truyền dữ liệu thương hiệu vào view
        $data['brands'] = $brands;

        $data['list_product'] = $query->paginate(9);
        $all_product = DB::table('product')->get();  // Consider optimizing this if only used for display.
        return view('user/productList', ['list_product' => $data['list_product'], 'all_product' => $all_product,
            'category' => $cate, 'sub_category' => $sub_cate, 'brands' => $data['brands']]);
    }

    public function showSubCategory(Request $request, $sub_category_id)
    {
        $sort = $request->input('sort', 'none');
        $cate = DB::table('category')->orderby('id', 'desc')->get();
        $sub_cate = DB::table('sub_category')->orderby('id', 'desc')->get();

        $cate = DB::table('category')->orderby('id', 'desc')->get();
        $sub_cate = DB::table('sub_category')->orderby('id', 'desc')->get();

        $query = Product::query();
        $query->select('product.*')
        ->where('product.sub_category_id', $sub_category_id);

        switch ($sort) {
            case 'increase':
                $query->orderByRaw('CAST(price AS DECIMAL(10,2))');
                break;
            case 'decrease':
                $query->orderByRaw('CAST(price AS DECIMAL(10,2)) DESC');
                break;
            case 'az':
                $query->orderBy('name');
                break;
            case 'za':
                $query->orderBy('name', 'desc');
                break;
        }

        $new_query = Product::query();
        $new_query->select('brand');
        $new_query->join('sub_category', 'sub_category.id', '=', 'product.sub_category_id')
            ->where('product.sub_category_id', $sub_category_id)
            ->whereNotNull('product.brand'); // Thêm điều kiện lọc các sản phẩm có brand không null
        $brands = $new_query->distinct()->pluck('brand');
        // Truyền dữ liệu thương hiệu vào view
        $data['brands'] = $brands;

        $data['list_product'] = $query->paginate(9);
        $all_product = DB::table('product')->get();  // Consider optimizing this if only used for display.
        return view('user/productList', ['list_product' => $data['list_product'], 'all_product' => $all_product, 'category' => $cate,
            'sub_category' => $sub_cate, 'brands' => $data['brands']]);
    }


    public function getPagedProducts(Request $request)
    {
        $cate = DB::table('category')->orderby('id', 'desc')->get();
        $sub_cate = DB::table('sub_category')->orderby('id', 'desc')->get();

        $sort = $request->input('sort', 'none');
        $query = Product::query();

        switch ($sort) {
            case 'increase':
                $query->orderByRaw('CAST(price AS DECIMAL(10,2))');
                break;
            case 'decrease':
                $query->orderByRaw('CAST(price AS DECIMAL(10,2)) DESC');
                break;
            case 'az':
                $query->orderBy('name');
                break;
            case 'za':
                $query->orderBy('name', 'desc');
                break;
        }

        $new_query = Product::query();
        $new_query->select('brand');
        $new_query->whereNotNull('brand'); // Thêm điều kiện lọc các sản phẩm có brand không null
        $brands = $new_query->distinct()->pluck('brand');
        // Truyền dữ liệu thương hiệu vào view
        $data['brands'] = $brands;

        $data['list_product'] = $query->paginate(9);
        $all_product = DB::table('product')->get();
        return view('user/productList', ['list_product' => $data['list_product'], 'all_product' => $all_product,
            'category' => $cate, 'sub_category' => $sub_cate, 'brands' => $data['brands']]);
    }

    public function search(Request $request)
    {
        $keywords = $request->input('keywords_submit', '');

        $cate = DB::table('category')->orderby('id', 'desc')->get();
        $sub_cate = DB::table('sub_category')->orderby('id', 'desc')->get();

        $sort = $request->input('sort', 'none');
        $query = Product::query();

        // Thêm điều kiện tìm kiếm
        if ($keywords) {
            $query->where('name', 'like', '%' . $keywords . '%');
        }

        switch ($sort) {
            case 'increase':
                $query->orderByRaw('CAST(price AS DECIMAL(10,2))');
                break;
            case 'decrease':
                $query->orderByRaw('CAST(price AS DECIMAL(10,2)) DESC');
                break;
            case 'az':
                $query->orderBy('name');
                break;
            case 'za':
                $query->orderBy('name', 'desc');
                break;
        }

        $new_query = Product::query();
        $new_query->select('brand');
        $new_query->whereNotNull('brand'); // Thêm điều kiện lọc các sản phẩm có brand không null
        $brands = $new_query->distinct()->pluck('brand');

        // Truyền dữ liệu thương hiệu vào view
        $data['brands'] = $brands;

        $data['list_product'] = $query->paginate(9);
        $search_product = DB::table('product')
            ->where('name', 'like', '%' . $keywords . '%')
            ->get();

        return view('user/search', [
            'list_product' => $data['list_product'],
            'search_product' => $search_product,
            'category' => $cate,
            'sub_category' => $sub_cate,
            'brands' => $brands
        ]);
    }

    public function searchSort(Request $request)
    {
        $keywords = $request->keywords_submit;

        $sort = $request->input('sort', 'none');
        $query = Product::query();

        switch ($sort) {
            case 'increase':
                $query->orderByRaw('CAST(price AS DECIMAL(10,2))');
                break;
            case 'decrease':
                $query->orderByRaw('CAST(price AS DECIMAL(10,2)) DESC');
                break;
            case 'az':
                $query->orderBy('name');
                break;
            case 'za':
                $query->orderBy('name', 'desc');
                break;
        }

        $data['list_product'] = $query->paginate(9);

        $search_product = DB::table('product')
            ->where('name', 'like', '%' . $keywords . '%')
            ->get();

        return view('user/search', ['list_product' => $data['list_product'], 'search_product' => $search_product]);
    }
}
