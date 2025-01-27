<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\BooksController;

// メニュー画面を表示
// ここで返されるビューは resources/views/index.blade.php
Route::get('/', function () {
    return view('index');
})->name('index');

// メニュー画面
Route::get('/',[TopController::class,'index'])->name('index');
// 書籍の一覧
Route::get('/books',[BooksController::class,'index'])->name('books.index');
// 書籍の詳細ページ
Route::get('/books/{id}', [BooksController::class, 'show'])->name('books.show');
