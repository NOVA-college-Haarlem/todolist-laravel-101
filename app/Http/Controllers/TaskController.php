<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $title = "Takenoverzicht";
        $tasks = ["Boodschappen doen", "Kamer opruimen"];

        return view('tasks.index', compact('tasks' , 'title'));
    }
}
