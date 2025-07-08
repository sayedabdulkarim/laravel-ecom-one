<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    function detail($slug)
    {
        return view('subcategory');
    }
}
