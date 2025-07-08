<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function detail($slug, $id)
    {
        echo $slug, $id;
        return view('category');
    }
}
