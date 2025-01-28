<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>レビューの新規投稿フォーム</title>
</head>
<body>
    <h1>レビュー新規投稿</h1>
    <form action="{{ route('reviews.create.confirm', $book->b_id) }}" method="POST">
        @csrf
        <p>書籍名: {{ $book->title }}</p>
        <p>著者名: {{ $book->author }}</p>
        <input style="display: block; width: 80px;" name="rating" required type="number" min="1" max="5" placeholder="点数(1~5)" >
        <textarea name="content" required placeholder="レビュー内容"></textarea>
        <button type="submit">確認</button>
    </form>
</body>
</html>