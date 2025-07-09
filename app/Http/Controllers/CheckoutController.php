<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    function checkout($slug)
    {
        return view('checkout', ['slug' => $slug]);
    }
}
