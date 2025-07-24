<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{

    function login()
    {
        return view('admin.login');
    }
    function register()
    {
        return view('admin.register');
    }
    function dashboard()
    {
        return view('admin.dashboard');
    }
}
