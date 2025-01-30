@extends('layouts.app')
@section('title', '書籍詳細')
@section('content')
    <!-- 戻るリンク -->
    <div class="d-flex justify-content-end gap-2">
        <a href="{{ route('books.index') }}" class="btn btn-secondary">書籍一覧に戻る</a>
        <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
    </div>
    <h1>{{ $book->title }} の書籍詳細</h1>
    <p><strong>著者：</strong> {{ $book->author }}</p>
    <div style="word-wrap: break-word; white-space: pre-wrap;">
        <p><strong>説明：</strong> {{ $book->description }}</p>
    </div>
    <p><strong>出版日：</strong> {{ $book->published_date }}</p>
    <p><strong>ISBN：</strong> {{ $book->ISBN }}</p>
    @if($image_url)
        <img src="{{ $image_url }}" alt="{{ $book->title }}の表紙" class="img-fluid">
    @else
        <p>"{{ $book->title }}"の表紙画像は取得できませんでした。</p>
    @endif
    <br>
    <br>
    <!-- レビューの新規投稿フォーム -->
    <a href="{{ route('reviews.create', $book->b_id) }}" class="btn btn-primary">レビューを投稿する</a>
    <hr>
    <h2>レビューの一覧</h2>
    @if($reviews->isEmpty())
        <p>レビューはまだありません。</p>
    @else
        <ul>
            @foreach($reviews as $review)
                <div class="border p-3 mb-3 rounded">
                    <p>投稿者名： {{ $review->user->u_name }}</p>
                    <p>
                        評価: {{ $review->rating }} / 5
                        <span style="margin-left: 1rem; color: goldenrod;">
                            @for($i = 0; $i < $review->rating; ++$i)
                            ★
                            @endfor
                            @for($i = 0; $i < (5 - $review->rating); ++$i)
                            ☆
                            @endfor
                        </span>
                    </p>
                    <div style="word-wrap: break-word; white-space: pre-wrap;">
                        <p>コメント: {{ $review->comment }}</p>
                    </div>
                    <!-- 投稿者のみに表示 -->
                    @if ($review->u_id == session("userId")) <!-- loginの実装完了後要修正 -->
                        <!-- レビュー編集リンク：投稿者のみ表示 -->
                        <a href="{{ route('reviews.edit', ['bookId' => $book->b_id, 'reviewId' => $review->r_id]) }}" class="btn btn-primary">編集</a>
                        <!-- レビュー削除リンク：投稿者のみ表示 -->
                        <a href="{{ route('reviews.erase', ['bookId' => $book->b_id, 'reviewId' => $review->r_id]) }}" class="btn btn-danger">削除</a>
                    @endif
                </div>
            @endforeach
        </ul>
    </div>
    @endif
@endsection
