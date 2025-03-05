<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController50;

//Route::get('/', function () {
//    return view('welcome');
// });

Route::get('/', [HomeController50::class, 'index']);
Route::get('/contact', [HomeController50::class, 'contact']);
