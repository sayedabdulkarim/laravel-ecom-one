<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function register()
    {
        return view('register');
    }

    function register1()
    {
        return view('register1');
    }
}
