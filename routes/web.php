<?php

use App\Http\Controllers\ToyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('toys', ToyController::class);

Route::get('/page', function(){
    return view('master_page');
});

Route::get('/page', function(){
    return view('components.home');
});

Route::get('/users', [UserController::class, 'users']);
Route::get('/profiles', [UserController::class, 'profiles']);