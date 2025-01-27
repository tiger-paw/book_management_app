<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>レビュー投稿内容確認</title>
</head>
<body>
    <h1>レビュー確認</h1>
    <p>書籍名: {{ $book->title }}</p>
    <p>レビュー内容: {{ $data['content'] }}</p>
    <form action="{{ route('reviews.create.store', $book->b_id) }}" method="POST">
        @csrf
        <input type="hidden" name="content" value="{{ $data['content'] }}">
        <button type="submit">投稿</button>
    </form>
    <a href="{{ route('reviews.create', $book->b_id) }}">戻る</a>
</body>
</html>