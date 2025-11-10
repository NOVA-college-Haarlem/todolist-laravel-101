<?php

use App\Http\Controllers\PageController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', [PageController::class, 'contact']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/tasks', [TaskController::class, 'index']);


