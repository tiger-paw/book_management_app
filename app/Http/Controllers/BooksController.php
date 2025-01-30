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

    //書籍新規登録
    public function create()
    {
        return view('db.book_management_create');
    }

    //書籍の登録
    public function store(Request $req)
    {
        $book = new Book();
        $book->title = $req->book_name;
        $book->author = $req->author_name;
        $book->description = $req->detail_item;
        $book->published_date = $req->published_date;
        $book->ISBN = $req->isbn;
        $book->save();
        $data = [
            'book_name' => $req->book_name,
            'author_name' => $req->author_name,
            'detail_item' => $req->detail_item,
            'published_date' => $req->published_date,
            'isbn' => $req->isbn,
            'published_date' => $req->published_date
        ];
        return view('db.book_management_store', $data);
    }



    //書籍削除
    public function erase(Request $req)
    {
        if ($req->isMethod('get')) {
            return view('db.book_management_erase');
        } elseif ($req->isMethod('post')) {
            $b_id = $req->b_id;
            $data = [
                'record' => Book::find($b_id)
            ];
            return view('db.book_management_erase', $data);
        } else {
            redirect('db.book_management_erase');
        }
    }

    public function delete(Request $req)
    {
        $books = Book::find($req->b_id);
        $books->delete();
        $data = [
            'b_id' => $req->b_id,
            'b_title' => $req->b_title,
            'b_author' => $req->b_author
        ];
        return view('db.book_management_delete', $data);
    }

    public function delete_index()
    {
        $data = [
            'records' => Book::paginate(10)
        ];
        return view('db.book_management_index', $data);
    }

    // ISBNから表紙画像を取得
    public function getBookCover($isbn)
    {
        // ISBNがセットされていなかったらすぐにnullを返す
        if (!$isbn) {
            return null;
        }
        // OpenBD APIを使用してISBNを検索
        $openbdResponse  = Http::get("https://api.openbd.jp/v1/get", [
            'isbn' => $isbn
        ]);
        // 取得したデータを配列に変換
        $openbdData = $openbdResponse ->json();
        // 画像URLがあれば取得
        if (!empty($openbdData[0]) && $openbdData[0]['summary']['cover']) {
            return $openbdData[0]['summary']['cover'];
        }

        // Google Books APIを使用してISBNを検索
        $googleResponse  = Http::get('https://www.googleapis.com/books/v1/volumes', [
            'q' => 'isbn:' . str_replace('-', '', $isbn),
        ]);
        // 取得したデータを配列に変換
        $googleData = $googleResponse ->json();
        // 画像URLが存在すれば返す
        if (isset($googleData['items'][0]['volumeInfo']['imageLinks']['thumbnail'])) {
            return $googleData['items'][0]['volumeInfo']['imageLinks']['thumbnail'];
        }
        // 両方で画像が見つからなければnullを返す
        return null;
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
        return view('books.show', compact('book', 'reviews', 'image_url')); // 詳細ビューに渡す
    }


    // 書籍検索処理
    public function search(Request $req)
    {
        // $book_keyword = $req->get();
        $book_keyword = $req->book_keyword;

        // $prepareRecords = Book::where('title', 'LIKE', "%$book_keyword%")->orWhere('author', 'LIKE', "%$book_keyword%");
        // $records = $prepareRecords->paginate(10);

        $records = Book::where('title', 'LIKE', "%$book_keyword%")->orWhere('author', 'LIKE', "%$book_keyword%")->paginate(10);

        $count = Book::where('title', 'LIKE', "%$book_keyword%")->orWhere('author', 'LIKE', "%$book_keyword%")->count();

        $records->appends(['book_keyword' => $book_keyword]);

        $count =

            $data = [
                'book_keyword' => $book_keyword,
                'records' => $records,
                'count' => $count,
                // 'count' => $prepareRecords->count(),
            ];

        return view('search.search_books_result', $data);
    }
}
