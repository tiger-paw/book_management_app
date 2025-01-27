<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
});

Route::get('/',[TopController::class,'index']);


// loginページ
Route::get('/login', function() {
    return view('loginForm');
});

Route::post('/login', [AuthController::class, 'login']);

