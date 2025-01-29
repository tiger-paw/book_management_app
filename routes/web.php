<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthController; // ログイン認証用に新たに追加で作成したコントローラ
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ReviewsController;

// メニュー画面を表示
// 「社員管理」

Route::get('/user_management',function(){
    return view('user_management_index');
})->name('user_management.index');


Route::get('/db/user_management_index',[UsersController::class,'index']);

Route::get('/db/user_management_create',[UsersController::class,'create']);
Route::post('/db/user_management_store',[UsersController::class,'store']);

Route::get('/db/user_management_erase',[UsersController::class,'erase']);
Route::post('/db/user_management_erase',[UsersController::class,'erase']);
Route::post('/db/user_management_delete',[UsersController::class,'delete']);

// 「書籍管理」

// -----------------------------------------------

// ここで返されるビューは resources/views/index.blade.php
Route::get('/', function () {
    return view('index');
})->name('index');

// メニュー画面
Route::get('/',[TopController::class,'index'])->name('index');

// 書籍の一覧
Route::get('/books',[BooksController::class,'index'])->name('books.index');

// 書籍の詳細
Route::get('/books/{id}',[BooksController::class,'show'])->name('books.show');

// 書籍詳細にレビュー一覧を表示
Route::get('/books/{bookId}/reviews', [ReviewsController::class, 'index'])->name('books.show');

// レビュー新規投稿関連
Route::get('/books/{bookId}/reviews/create', [ReviewsController::class, 'create'])->name('reviews.create');
Route::post('/books/{bookId}/reviews/create_check', [ReviewsController::class, 'createCheck'])->name('reviews.create.check');
Route::post('/books/{bookId}/reviews/store', [ReviewsController::class, 'store'])->name('reviews.store');

// レビュー編集関連
// レビュー編集フォームの表示：編集対象のレビューを取得し、編集フォームを表示
Route::get('/books/{bookId}/reviews/{reviewId}/edit', [ReviewsController::class, 'edit'])->name('reviews.edit');
// 編集内容確認ページの表示：レビュー編集フォームのデータを取得し、確認画面を表示
Route::post('/books/{bookId}/reviews/{reviewId}/update_check', [ReviewsController::class, 'updateCheck'])->name('reviews.update.check');
// 編集完了ページの表示：データベースに更新内容を保存し、完了メッセージを表示
Route::post('/books/{bookId}/reviews/{reviewId}/update', [ReviewsController::class, 'update'])->name('reviews.update');


// レビュー削除関連

// -----------------------------------------------

// loginフォームページへ遷移する
Route::get('/login', function() {
    return view('loginForm');
});

// -----------------------------------------------
// 「書籍管理」
Route::get('/book_management_index', function () {
    return view('book_management_index');
});

Route::get('db/book_management_create',[BooksController::class,'create']);
Route::post('db/book_management_store',[BooksController::class,'store']);

Route::get('db/book_management_erase',[BooksController::class,'erase']);

// loginフォームからPOST
Route::post('/login', [AuthController::class, 'login']);


