<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

Route::get('/',[MoviesController::class,'index'])
->name('movies.index');
Route::get('/movies/{movie}',[MoviesController::class,'show'])
->name('movies.show');
Route::view('/welcome', 'welcome');


// Route::view('/','welcome');
// Route::view('/index','index');

