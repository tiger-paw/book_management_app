<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->title }} - 書籍詳細</title>
</head>
<body>
    <h1>{{ $book->title }} の書籍詳細</h1>
    <p><strong>著者:</strong> {{ $book->author }}</p>
    <p><strong>説明:</strong> {{ $book->description }}</p>
    <p><strong>出版日:</strong> {{ $book->published_date }}</p>
    <p><strong>ISBN:</strong> {{ $book->ISBN }}</p>
    <p><strong>画像URL:</strong> <img src="{{ $book->image_url }}" alt="{{ $book->title }}"></p>

    <h2>レビュー一覧</h2>
    @if($reviews->isEmpty())
        <p>レビューはまだありません。</p>
    @else
        <ul>
            @foreach($reviews as $review)
                <li>
                    <p>評価: {{ $review->rating }} / 5</p>
                    <p>コメント: {{ $review->comment }}</p>
                </li>
            @endforeach
        </ul>
    @endif

    <!-- レビューの新規投稿フォーム -->
    <a href="{{ route('reviews.create', $book->b_id) }}">レビューを投稿する</a>

    <!-- 戻るリンク -->
    <a href="{{ route('books.index') }}">書籍一覧に戻る</a>
    <br>
    <a href="{{ route('index') }}">メニューに戻る</a>
</body>
</html>