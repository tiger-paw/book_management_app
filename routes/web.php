<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\AuthController; // ログイン認証用に新たに追加で作成したコントローラ
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ReviewsController;

// ここで返されるビューは resources/views/index.blade.php
Route::get('/', function () {
    return view('index');
})->name('index');

// メニュー画面
Route::get('/',[TopController::class,'index'])->name('index');

// 書籍の一覧
Route::get('/books',[BooksController::class,'index'])->name('books.index');

//　書籍の詳細
Route::get('/books/{id}',[BooksController::class,'show'])->name('books.show');

// 書籍詳細にレビュー一覧を表示
Route::get('/books/{bookId}/reviews', [ReviewsController::class, 'index'])->name('books.show');

// レビュー新規投稿関連
Route::get('/books/{bookId}/reviews/create', [ReviewsController::class, 'create'])->name('reviews.create');
Route::post('/books/{bookId}/reviews/confirm', [ReviewsController::class, 'confirm'])->name('reviews.create.confirm');
Route::post('/books/{bookId}/reviews/store', [ReviewsController::class, 'store'])->name('reviews.create.store');
Route::get('/books/{bookId}/reviews/complete', [ReviewsController::class, 'complete'])->name('reviews.create.complete');

// レビュー更新関連
Route::get('/reviews/{review}/edit', [ReviewsController::class, 'edit'])->name('reviews.edit');
Route::post('/reviews/{review}/confirm', [ReviewsController::class, 'confirmUpdate'])->name('reviews.confirmUpdate');
Route::put('/reviews/{review}', [ReviewsController::class, 'update'])->name('reviews.update');
Route::get('/reviews/update-complete', [ReviewsController::class, 'updateComplete'])->name('reviews.updateComplete');

// レビュー削除関連
Route::get('/reviews/{review}/confirm-delete', [ReviewsController::class, 'confirmDelete'])->name('reviews.confirmDelete');
Route::delete('/reviews/{review}', [ReviewsController::class, 'destroy'])->name('reviews.destroy');
Route::get('/reviews/delete-complete', [ReviewsController::class, 'deleteComplete'])->name('reviews.deleteComplete');

// loginフォームページへ遷移する
Route::get('/login', function() {
    return view('loginForm');
});

// loginフォームからPOST
Route::post('/login', [AuthController::class, 'login']);
