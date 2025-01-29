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

    // レビューの新規投稿フォームを表示
    public function create($bookId)
    {
        // レビューの新規投稿フォームに遷移する
        return view('books.reviews.create',compact('bookId'));
    }

    // レビューの新規投稿内容確認ページを表示
    public function createCheck($bookId,Request $req)
    {
        // 書籍情報を取得
        $book = Book::findOrFail($bookId);
        $data=[
            'comment' => $req->comment,
            'rating' => $req->rating,
        ];
        // レビューの新規投稿内容確認ページに遷移する
        return view('books.reviews.create_check',compact('book','data'));
    }

    // レビューを保存し、レビュー新規投稿完了ページを表示
    public function store($bookId, Request $req)
    {
        // レビュー内容を保存
        $review = new Review();
        $review ->b_id = $bookId;
        $review ->comment = $req ->comment;
        $review ->rating = $req ->rating;
        $review ->u_id = 1;
        $review ->save();
        // レビューの新規投稿完了ページに遷移する
        return view('books.reviews.store', compact('bookId')); 
    }

    // レビューの編集フォームを表示
    public function edit($bookId, $reviewId)
    {
        // 書籍情報を取得
        $book = Book::findOrFail($bookId);
        // レビュー情報を取得
        $review = Review::findOrFail($reviewId);
        // レビューの編集フォームに遷移する
        return view('books.reviews.edit', compact('book', 'review'));
    }

    // レビューの編集内容確認ページを表示
    public function updateCheck($bookId, $reviewId, Request $req)
    {
        // 書籍情報を取得
        $book = Book::findOrFail($bookId);
        // レビュー情報を取得
        $review = Review::findOrFail($reviewId);
        // フォームで送信された内容を一時的に保持
        $data = $req->all();
        // レビューの編集内容確認画ページに遷移する
        return view('books.reviews.update_check',compact('book','review','data'));
    }

    // レビューの編集完了ページを表示
    public function update($bookId, $reviewId, Request $req)
    {
        // 書籍情報を取得
        $book = Book::findOrFail($bookId);
        // 更新対象のレビューを取得
        $review = Review::findOrFail($reviewId);
        // レビューを編集内容フォームの内容に更新
        $review->update([
            'comment' => $req->comment,
            'rating' => $req->rating,
        ]);
        // レビューの編集完了ページに遷移する
        return view('books.reviews.update', compact('book', 'review'));
    }

    // レビューの削除確認ページを表示
    public function erase($bookId, $reviewId)
    {
        // 削除対象のレビューを取得：IDに該当するレビューが存在しなければ404エラー
        $review = Review::findOrFail($reviewId);
        // レビューの削除確認ページに遷移する
        return view('books.reviews.delete', compact('bookId', 'review'));
    }

    // レビューの削除処理
    public function destroy($reviewId)
    {
        // 削除対象のレビューを取得：
        $review = Review::findOrFail($reviewId);
        // レビューを削除
        $review->delete();
        // レビュー削除完了ページにリダイレクト
        return redirect()->route('reviews.delete');
    }

    // レビューの削除完了ページを表示
    public function delete()
    {
        // レビューの完了確認ページに遷移する
        return view('books.reviews.delete');
    }
}
