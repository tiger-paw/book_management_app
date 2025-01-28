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

    // レビュー新規投稿フォーム表示
    public function create($bookId)
    {
        $book = Book::findOrFail($bookId);
        return view('reviews.create.index', compact('book'));
    }

    // 投稿内容の確認ページ
    public function confirm(Request $request, $bookId)
    {
        $book = Book::findOrFail($bookId);
        $data = $request->all();
        return view('reviews.create.confirm', compact('book', 'data'));
    }

    // レビュー保存処理
    public function store(Request $request, $bookId)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        Review::create([
            'book_id' => $bookId,
            'user_id' => Auth::id(),
            'content' => $request->content,
        ]);

        return redirect()->route('reviews.create.complete', $bookId);
    }

    // 投稿完了ページ表示
    public function complete()
    {
        return view('reviews.complete');
    }

    // レビュー削除確認ページ
    public function confirmDelete($id)
    {
        $review = Review::findOrFail($id);
        // 削除権限がない場合はエラーメッセージを表示
        if ($review->user_id !== Auth::id()) {
            return redirect()->route('books.show', $review->book_id)->with('error', '削除権限がありません');
        }
        // 削除確認ページを表示
        return view('reviews.confirm-delete', compact('review'));
    }

    // レビュー削除処理
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        if ($review->user_id === Auth::id()) {
            $review->delete();
        }
        return redirect()->back()->with('message', 'レビューを削除しました');
    }

    // 削除完了ページ表示
    public function deleteComplete()
    {
        return view('reviews.delete-complete');
    }
    
    // レビュー編集フォーム表示
    public function edit($id)
    {
        $review = Review::findOrFail($id);
        // 編集権限がない場合はエラーメッセージを表示
        if ($review->user_id !== Auth::id()) {
            return redirect()->route('books.show', $review->book_id)->with('error', '編集権限がありません');
        }
        // 編集フォームを表示
        return view('reviews.edit', compact('review'));
    }

    // 編集内容の確認ページ
    public function confirmUpdate(Request $request, $id)
    {
        $review = Review::findOrFail($id);
        // 編集権限がない場合はエラーメッセージを表示
        if ($review->user_id !== Auth::id()) {
            return redirect()->route('books.show', $review->book_id)->with('error', '編集権限がありません');
        }

        $data = $request->all();
        // 編集内容の確認ページを表示
        return view('reviews.confirm-update', compact('review', 'data'));
    }

    // レビュー更新処理
    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);
        // 編集権限がない場合はエラーメッセージを表示
        if ($review->user_id !== Auth::id()) {
            return redirect()->route('books.show', $review->book_id)->with('error', '編集権限がありません');
        }

        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $review->update(['content' => $request->content]);
        // 更新完了ページにリダイレクト
        return redirect()->route('reviews.updateComplete');
    }

    // 更新完了ページ表示
    public function updateComplete()
    {
        return view('reviews.update-complete');
    }    
}
