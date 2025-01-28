<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新規投稿内容確認</title>
</head>
<body>
    <h1>レビューの新規投稿内容確認</h1>
    <p>書籍名: {{ $book->title }}</p>
    <p>評価： {{ $data['rating'] }}</p>
    <p>レビュー内容: {{ $data['comment'] }}</p>
    <form action="{{ route('reviews.store', $book->b_id) }}" method="POST">
        @csrf
        <input type="hidden" name="comment" value="{{ $data['comment'] }}">
        <input type="hidden" name="rating" value="{{ $data['rating'] }}">
        <button type="submit">投稿</button>
    </form>
    <a href="{{ route('reviews.create', $book->b_id) }}">レビューの新規投稿に戻る</a>
</body>
</html>