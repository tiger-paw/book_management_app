<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    // 書籍一覧画面
    public function index()
    {
        $books = Book::all(); // すべての書籍を取得
        return view('books.index', compact('books')); // ビューに渡す
    }
    // 書籍詳細画面
    public function show($id)
    {
        $book = Book::findOrFail($id); // IDで書籍を取得、見つからなければ404エラー
        return view('books.show', compact('book')); // 詳細ビューに渡す
    }
}
