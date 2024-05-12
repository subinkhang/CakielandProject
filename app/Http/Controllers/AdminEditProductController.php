<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminEditProductController extends Controller
{
    public function save_product(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'fake_price' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'description_detail' => 'nullable|string',
            'description_technique' => 'nullable|string',
            'brand' => 'nullable|string|max:255',
            'category_id' => 'required|integer',
            'tag' => 'required|string|max:255',
        ]);

        // Prepare the data to be inserted into the database
        $data = [
            'name' => $request->name,
            'fake_price' => $request->fake_price,
            'price' => $request->price,
            'description' => $request->description,
            'description_detail' => $request->description_detail,
            'description_technique' => $request->description_technique,
            'brand' => $request->brand,
            'category_id' => $request->category_id,
            'tag' => $request->tag,
        ];

        // Insert the data into the 'product' table
        DB::table('product')->insert($data);

        // Set a success message in the session
        Session::flash('message', 'Product added successfully');

        // Redirect back to the form page
        return Redirect::to('/admin-add-product');
    }
}
