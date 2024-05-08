<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomepageController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function save_email(Request $request){
        $data=array();
        $data['email']=$request->email;
        DB::table('email_customer')->insert($data);
        return Redirect::to('/');
    }
}
