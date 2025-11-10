<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = ['prive', 'werk', ];
        return view('categories.index', compact('categories'));
    }
}
