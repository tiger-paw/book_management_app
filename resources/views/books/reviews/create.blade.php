@extends('layouts.app')
@section('title', 'レビューの新規投稿')
@section('content')
    <!-- 戻るリンク -->
    <div class="d-flex justify-content-end gap-2">
        <a href="{{ route('books.index') }}" class="btn btn-secondary">書籍一覧に戻る</a>
        <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
    </div>
    <h1>レビューの新規投稿</h1>
    <form action="{{ route('reviews.create.check', $bookId) }}" method="post">
        @csrf
        <br>
        <label for="rating" class="form-label">評価：</label>
        @for ($i = 1; $i <= 5; $i++)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" id="rating{{ $i }}" value="{{ $i }}" required>
                <label class="form-check-label" for="rating{{ $i }}">{{ $i }}</label>
            </div>
        @endfor
        <br>
        <label for="comment" class="form-label">コメント</label>
        <textarea class="form-control" name="comment" id="comment" required></textarea>
        <br>
        <div class="d-flex gap-2">
            <input type="submit" value="確認" class="btn btn-primary">
            <a href="{{ route('books.show', ['id' => $bookId]) }}" class="btn btn-secondary">戻る</a>
        </div>
    </form>

@endsection