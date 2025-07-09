<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    function list($slug)
    {
        return view('cart-list', ['slug' => $slug]);
    }
}
