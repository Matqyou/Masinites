<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategory1()
    {
        return view('categories.category1'); // Create a view for this category
    }

    public function showCategory2()
    {
        return view('categories.category2'); // Create a view for this category
    }

    public function showCategory3()
    {
        return view('categories.category3'); // Create a view for this category
    }
}
