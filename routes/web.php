<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;

Route::get('/', function () {
    return view('index');
});

Route::get('/',[TopController::class,'index']);