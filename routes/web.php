<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', [PageController::class, 'contact']);

Route::get('/about', [PageController::class, 'about']);


