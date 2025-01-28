<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>レビューの削除確認</title>
</head>
<body>
    <h1>レビュー削除確認</h1>
    <p>本当にこのレビューを削除しますか？</p>
    <p>{{ $review->content }}</p>
    <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">削除</button>
    </form>
    <a href="{{ route('books.show', $review->book_id) }}">キャンセル</a>
</body>
</html>