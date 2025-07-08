<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductdetailController extends Controller
{
    function detail($slug)
    {
        return view('product-detail');
    }
}
