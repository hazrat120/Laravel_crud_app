<?php

use App\Http\Controllers\CitizenController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StudentController;
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

// Route::get('/student', [UserController::class, 'students']);
Route::get('/student', [StudentController::class, 'studentshow']);

Route::get('/client', [ClientController::class, 'index']);

Route::get('/citizen', [CitizenController::class, 'pasportshow']);

Route::get('/post', [UserController::class, 'postshow']);

Route::get('/product', [OrderController::class, 'ordershow']);	