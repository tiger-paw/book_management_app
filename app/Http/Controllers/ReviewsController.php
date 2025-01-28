<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;
use Auth;

class ReviewsController extends Controller
{
    // 書籍詳細ページにレビューの一覧を表示
    public function index($bookId)
    {
        // 書籍情報を取得
        $book = Book::findOrFail($bookId);
        // 書籍に関連するレビューを取得
        $reviews = $book->reviews()->get();
        // 書籍詳細ページにレビュー一覧を渡す
        return view('books.show', compact('book', 'reviews'));
    }
}
