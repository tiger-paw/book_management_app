<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;

Route::get('/', function () {
    return view('index');
});

Route::get('/',[TopController::class,'index']);

Route::get('db/book_create',[BooksController::class,'create']);
Route::post('db/book_create',[BooksController::class,'store']);