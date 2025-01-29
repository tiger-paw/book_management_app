<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthController; // ログイン認証用に新たに追加で作成したコントローラ
use App\Http\Controllers\ToggleRedirectController; // 開発者向け機能用に追加たコントローラ
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ReviewsController;

// メニュー画面を表示
// 「社員管理」

//社員管理画面ホーム
Route::get('/user_management', function () {
    return view('user_management_index');
})->name('user_management.index');

//社員一覧表示
Route::get('/db/user_management_index', [UsersController::class, 'index']);

//社員新規登録
Route::get('/db/user_management_create', [UsersController::class, 'create']);
Route::post('/db/user_management_create_check', [UsersController::class, 'create_check']);
Route::post('/db/user_management_store', [UsersController::class, 'store']);

//社員削除
Route::get('/db/user_management_erase', [UsersController::class, 'erase']);
Route::post('/db/user_management_erase', [UsersController::class, 'erase']);
Route::post('/db/user_management_delete', [UsersController::class, 'delete']);


// -----------------------------------------------

// ここで返されるビューは resources/views/index.blade.php
Route::get('/', function () {
    return view('index');
})->name('index');

// メニュー画面
Route::get('/', [TopController::class, 'index'])->name('index');

// 書籍の一覧
Route::get('/books', [BooksController::class, 'index'])->name('books.index');

// 書籍の詳細
Route::get('/books/{id}', [BooksController::class, 'show'])->name('books.show');

// 書籍詳細にレビュー一覧を表示
Route::get('/books/{bookId}/reviews', [ReviewsController::class, 'index'])->name('reviews.show');

// レビュー新規投稿関連
Route::get('/books/{bookId}/reviews/create', [ReviewsController::class, 'create'])->name('reviews.create');
Route::post('/books/{bookId}/reviews/create_check', [ReviewsController::class, 'createCheck'])->name('reviews.create.check');
Route::post('/books/{bookId}/reviews/store', [ReviewsController::class, 'store'])->name('reviews.store');

// レビュー編集フォームの表示：編集対象のレビューを取得し、編集フォームを表示
Route::get('/books/{bookId}/reviews/{reviewId}/edit', [ReviewsController::class, 'edit'])->name('reviews.edit');
// 編集内容確認ページの表示：レビュー編集フォームのデータを取得し、確認画面を表示
Route::post('/books/{bookId}/reviews/{reviewId}/update_check', [ReviewsController::class, 'updateCheck'])->name('reviews.update.check');
// 編集完了ページの表示：データベースに更新内容を保存し、完了メッセージを表示
Route::put('/books/{bookId}/reviews/{reviewId}/update', [ReviewsController::class, 'update'])->name('reviews.update');

// レビュー削除確認ページの表示：
Route::get('/books/{bookId}/reviews/{reviewId}/erase', [ReviewsController::class, 'erase'])->name('reviews.erase');
// レビュー削除処理
Route::delete('/books/{bookId}/reviews/{reviewId}/destroy', [ReviewsController::class, 'destroy'])->name('reviews.destroy');
// レビュー削除完了ページの表示：
Route::get('/books/{bookId}/reviews/delete', [ReviewsController::class, 'delete'])->name('reviews.delete');

// -----------------------------------------------

// -----------------------------------------------
// 「書籍管理」
Route::get('/book_management_index', function () {
    return view('book_management_index');
})->name('book_management.index');

Route::get('db/book_management_create', [BooksController::class, 'create']);
Route::post('db/book_management_store', [BooksController::class, 'store']);

Route::get('db/book_management_erase', [BooksController::class, 'erase']);
Route::post('/db/book_management_erase', [BooksController::class, 'erase']);
Route::post('/db/book_management_delete', [BooksController::class, 'delete']);


// -----------------------------------------
// loginフォームページへ遷移する
Route::get('/login', function () {
    return view('login_form');
});
// loginフォームからPOST
Route::post('/login', [AuthController::class, 'login']);

// 強制リダイレクトを無効化（開発者向け設定）
Route::post('/toggle-redirect', [ToggleRedirectController::class, 'toggle']);

// 「書籍検索」-------------------------------
Route::get('/search_books_form', function () {
    return view('search.search_books_form');
});
// 書籍検索
Route::get('/search_books_result', [BooksController::class, 'search']);
