<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->title }} の詳細</title>
</head>
<body>
    <h1>{{ $book->title }} の詳細</h1>
    <p><strong>著者:</strong> {{ $book->author }}</p>
    <p><strong>説明:</strong> {{ $book->description }}</p>
    <p><strong>出版日:</strong> {{ $book->published_date }}</p>
    <p><strong>ISBN:</strong> {{ $book->ISBN }}</p>
    <p><strong>画像URL:</strong> <img src="{{ $book->image_url }}" alt="{{ $book->title }}"></p>

    <h2>レビュー一覧</h2>
    @foreach ($reviews as $review)
    <p>{{ $review->content }}</p>
    @if(Auth::id() === $review->user_id)
        <a href="{{ route('reviews.edit', $review->r_id) }}">更新</a>
        <a href="{{ route('reviews.confirmDelete', $review->r_id) }}">削除</a>
    @endif
    @endforeach

    <a href="{{ route('reviews.create', $book->b_id) }}">レビューを書く</a>

    <!-- 戻るリンク -->
    <a href="{{ route('books.index') }}">書籍一覧に戻る</a>
    <br>
    <a href="{{ route('index') }}">メニューに戻る</a>
    <!-- リモートリポジトリにプッシュができていなかったのでコメント -->
</body>
</html>