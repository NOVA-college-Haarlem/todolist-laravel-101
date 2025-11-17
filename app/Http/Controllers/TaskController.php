<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $title = "Takenoverzicht";
        $tasks = Task::all();

        return view('tasks.index', compact('tasks' , 'title'));
    }
}
