<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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

    public function erase(Request $req)
    {
        
    }

    // OpenBD API を使って ISBN から表紙画像を取得
    public function getBookCover($isbn)
    {
        $response = Http::get("https://api.openbd.jp/v1/get", [
            'isbn' => $isbn
        ]);

        $data = $response->json();

        // 画像URLがあれば取得、なければ null を返す
        return $data[0]['summary']['cover'] ?? null;
    }

    // 書籍一覧画面
    public function index()
    {
        $books = Book::paginate(10); // 1ページに10件ずつ書籍を表示
        return view('books.index', compact('books')); // ビューに渡す
    }

    // 書籍詳細画面
    public function show($b_id)
    {
        $book = Book::findOrFail($b_id); // IDで書籍を取得、見つからなければ404エラー
        $image_url = $this->getBookCover($book->ISBN); // OpenBD API から表紙画像を取得
        $reviews = Review::where('b_id', $b_id)->get(); // レビュー情報を取得
        return view('books.show', compact('book','reviews','image_url')); // 詳細ビューに渡す
    }
}