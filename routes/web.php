<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/', function () { return view('home'); });
Route::get('/about', function () { return view('about'); });


Route::get('/manage', [ItemController::class, 'index']);
Route::post('/manage', [ItemController::class, 'store']);
Route::put('/manage/{item}', [ItemController::class, 'update']);
Route::delete('/manage/{item}', [ItemController::class, 'destroy']);


Route::get('/search', [ItemController::class, 'searchPage']);