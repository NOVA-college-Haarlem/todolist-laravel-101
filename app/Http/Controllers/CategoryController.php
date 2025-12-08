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
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id); //query: SELECT * FROM categories WHERE id = $id
        return view('categories.edit', compact('category'));
    }

    public function update($id , Request $request)
    {
        //valideer de data;
        $request->validate(
            [
                'name' => 'required'
            ]
        );


        $category = Category::findOrFail($id);
        $category->name = $request->name;
        // $category->description = $request->description;
        $category->save();

        return redirect()->route('categories.index');

    }


}
