<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\AuthController; // ログイン認証用に新たに追加で作成したコントローラ
use App\Http\Controllers\BooksController;

// ここで返されるビューは resources/views/index.blade.php
Route::get('/', function () {
    return view('index');
})->name('index');

// メニュー画面
Route::get('/',[TopController::class,'index'])->name('index');

// 書籍の一覧
Route::get('/books',[BooksController::class,'index'])->name('books.index');
Route::get('/books/{id}',[BooksController::class,'show'])->name('books.show');


// loginフォームページへ遷移する
Route::get('/login', function() {
    return view('loginForm');
});

// 「書籍管理」
Route::get('/',[TopController::class,'index']);

Route::get('db/book_create',[BooksController::class,'create']);
Route::post('db/book_create',[BooksController::class,'store']);
Route::get('db/book_cancel',[BooksController::class,'cancel']);

// loginフォームからPOST
Route::post('/login', [AuthController::class, 'login']);

