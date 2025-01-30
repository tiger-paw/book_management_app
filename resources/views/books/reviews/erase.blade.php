@extends('layouts.app')
@section('title', 'レビューの削除確認')
@section('content')
    <!-- 戻るリンク -->
    <div class="d-flex justify-content-end gap-2">
        <a href="{{ route('books.index') }}" class="btn btn-secondary">書籍一覧に戻る</a>
        <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
    </div>
    <br>
    <!-- 削除確認ページ -->
    <h1>レビュー削除確認</h1>
    <p>本当にこのレビューを削除しますか？</p>
    <div class="border p-3 mb-3 rounded">
    <p>書籍名：<br>{{ $review->book->title }}</p>
    <p>評価：<br>{{ $review->rating }}</p>
    <p>レビュー内容：<br>{{ $review->comment }}</p>
    </div>
    <!-- 削除処理フォーム -->
    <form action="/books/{{ $bookId }}/reviews/{{ $review->r_id }}/destroy" method="POST">
    {{-- 以下のURLだと、Http始まりになる　上記のURLだと、/books始まりになる　前者でないとエラー --}}
    {{-- <form action="{{ route('reviews.destroy', ['bookId' => $bookId, 'reviewId' => $review->r_id]) }}" method="POST" > --}}
        @csrf
        @method('DELETE')
        <input type="submit" value="削除" class="btn btn-danger">
        <a href="{{ route('books.show', ['id' => $bookId]) }}" class="btn btn-secondary">戻る</a>
    </form>
@endsection
