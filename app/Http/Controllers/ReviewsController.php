<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;
use Auth;

class ReviewsController extends Controller
{
    // レビュー一覧の表示（書籍詳細ページに埋め込む）
    public function index($bookId)
    {
        $book = Book::findOrFail($bookId);
        $reviews = $book->reviews()->get();
        return view('books.show', compact('book', 'reviews'));
    }
}
