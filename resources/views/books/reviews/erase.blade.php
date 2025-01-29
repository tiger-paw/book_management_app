<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>レビューの削除確認</title>
</head>
<body>
    <!-- 削除確認ページ -->
    <h1>レビュー削除確認</h1>
    <p>本当にこのレビューを削除しますか？</p>
    <p>{{ $review->comment }}</p>
    <!-- 削除処理フォーム -->
    <form action="{{ route('reviews.destroy', ['review' => $review->r_id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">削除</button>
    </form>
    <!-- キャンセル -->
    <a href="{{ route('books.show', ['bookId' => $review->book_id]) }}">キャンセル</a>
</body>
</html>
