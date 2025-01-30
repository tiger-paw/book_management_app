@extends('layouts.app')
@section('title', 'レビューの編集内容確認')
@section('content')
    <!-- 戻るリンク -->
    <div class="d-flex justify-content-end gap-2">
        <a href="{{ route('books.index') }}" class="btn btn-secondary">書籍一覧に戻る</a>
        <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
    </div>
    <br>
    <h1>レビュー編集確認</h1>
    <div class="border p-3 mb-3 rounded">
        <p>書籍名：<br>{{ $book->title }}</p>
        <p>評価：<br>{{ $data['rating'] }}</p>
        <p>レビュー内容：<br>{{ $data['comment'] }}</p>
    </div>
    <form action="/books/{{ $book->b_id }}/reviews/{{ $review->r_id }}/update" method="POST">
    {{-- 以下のURLだと、Http始まりになる　上記のURLだと、/books始まりになる　前者でないとエラー --}}
    {{-- <form action="{{ route('reviews.update', ['bookId' => $book->b_id, 'reviewId' => $review->r_id]) }}" method="POST"> --}}
        @csrf
        @method('PUT')
        <input type="hidden" name="comment" value="{{ $data['comment'] }}">
        <input type="hidden" name="rating" value="{{ $data['rating'] }}">
        <br>
        <div class="d-flex gap-2">
            <input type="submit" value="更新" class="btn btn-primary">
            <a href="{{ route('reviews.edit', ['bookId' => $book->b_id, 'reviewId' => $review->r_id]) }}" class="btn btn-secondary">戻る</a>
        </div>
    </form>
@endsection