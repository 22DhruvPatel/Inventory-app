<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/manage', [ItemController::class, 'index']);



Route::get('/search', [ItemController::class, 'searchPage']);