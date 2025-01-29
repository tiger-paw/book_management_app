@extends('layouts.app')
@section('title', '新規投稿内容確認')
@section('content')

    <h1>レビューの新規投稿内容確認</h1>
    <div class="border p-3 mb-3 rounded">
        <p>書籍名：<br>{{ $book->title }}</p>
        <p>評価：<br>{{ $data['rating'] }}</p>
        <p>レビュー内容：<br>{{ $data['comment'] }}</p>
    </div>
    <form action="{{ route('reviews.store', $book->b_id) }}" method="POST">
        @csrf
        <input type="hidden" name="comment" value="{{ $data['comment'] }}">
        <input type="hidden" name="rating" value="{{ $data['rating'] }}">
        <div class="d-flex gap-2">
        <input type="submit" value="投稿" class="btn btn-primary">
        <a href="{{ route('reviews.create', $book->b_id) }}" class="btn btn-secondary">戻る</a>
        </div>
    </form>

@endsection