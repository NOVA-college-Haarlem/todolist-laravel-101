<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

use function Symfony\Component\String\s;

class TaskController extends Controller
{
    public function index()
    {
        $title = "Takenoverzicht";
        $tasks = Task::all();

        return view('tasks.index', compact('tasks' , 'title'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'due_date' => 'required'
            ]
        );

        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->due_date = $request->due_date;
        $task->is_completed = $request->completed ? false : true;
        $task->user_id = 1; //tijdelijke user_id, later aanpassen naar ingelogde gebruiker
        $task->category_id = 1; //tijdelijke category_id, later aanpassen naar gekozen categorie
        $task->save(); //hiermee slaan we de taak op in de database
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);

        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id) //twee argumenten
    {
        $task = Task::findOrFail($id);
        $task->title = $request->title;
        $task->description = $request->description;
        $task->due_date = $request->due_date;
        $task->is_completed = $request->completed ? false : true;
        $task->user_id = 1; //tijdelijke user_id, later aanpassen naar ingelogde gebruiker
        $task->category_id = 1; //tijdelijke category_id, later aanpassen naar gekozen categorie
        $task->save(); //hiermee slaan we de taak op in de database


        return redirect()->route('tasks.index');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index');
    }
    
}
