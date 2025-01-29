<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;

class BooksController extends Controller
{
// 「書籍管理」
    public function create()
    {
        return view('db.book_management_create');
    }

    public function store(Request $req)
    {
        $book = new Book();
        $book->title = $req->book_name;
        $book->author = $req->author_name;
        $book->description = $req->detail_item;
        $book->save();
        $data = [
            'book_name' => $req->book_name,
            'author_name' => $req->author_name,
            'detail_item' => $req->detail_item
        ];
        return view('db.book_management_store',$data);
    }

    public function erase(Requset $req)
    {
        
    }
    
    // 書籍一覧画面
    public function index()
    {
        $books = Book::all(); // すべての書籍を取得
        return view('books.index', compact('books')); // ビューに渡す
    }
    // 書籍詳細画面
    public function show($b_id)
    {
        $book = Book::findOrFail($b_id); // IDで書籍を取得、見つからなければ404エラー
        $reviews = Review::where('b_id', $b_id)->get(); // レビュー情報を取得
        return view('books.show', compact('book','reviews')); // 詳細ビューに渡す
    }
}