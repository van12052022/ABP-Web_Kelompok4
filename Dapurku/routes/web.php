<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landing');
});

#auth
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

#konten
Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');



