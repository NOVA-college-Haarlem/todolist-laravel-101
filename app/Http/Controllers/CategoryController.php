<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $title = "Categorie Overzicht";
        $categories = Category::all();

        return view('categories.index', compact('categories', 'title'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
