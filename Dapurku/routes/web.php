<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;

Route::get('/laravel', function () {
    return view('welcome');
});

//Landing page
Route::get('/',[HomeController::class,'Home']);

//Authintikasi
Route::get('/login',[SessionController::class,'masuk']);
