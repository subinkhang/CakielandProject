<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PaginationController extends Controller
{
    public function index()
    {
        $data['users'] = User::paginate(2);
        return view('user/Pagination', $data);
    }
}
