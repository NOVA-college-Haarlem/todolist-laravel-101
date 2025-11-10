<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $title = "Over mij";
        $description = "Ik ben een Laravel Developer";

        return view('about', compact('title', 'description'));
    }

    public function contact()
    {
        return view('contact');
    }
}
