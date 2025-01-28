<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>レビュー編集フォーム</title>
</head>
<body>
    <h1>レビュー編集</h1>
    <form action="{{ route('reviews.confirmUpdate', $review->id) }}" method="POST">
        @csrf
        <p>書籍名: {{ $review->book->title }}</p>
        <textarea name="content">{{ $review->content }}</textarea>
        <button type="submit">確認</button>
    </form>
    <a href="{{ route('books.show', $review->book_id) }}">戻る</a>
</body>
</html>