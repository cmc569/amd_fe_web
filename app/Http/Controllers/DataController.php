<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    //

    public function dashboard()
    {
        return view('admin.dashboard');
    }


    public function info()
    {
        return view('admin.userInfo');
    }
}
