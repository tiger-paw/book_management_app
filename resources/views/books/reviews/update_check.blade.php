<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>レビューの編集内容確認</title>
</head>
<body>
    <h1>レビュー編集確認</h1>
    <p>新しい内容:</p>
    <p>{{ $data['comment'] }}</p>
    <form action="{{ route('reviews.update', ['bookId' => $book->b_id, 'reviewId' => $review->r_id]) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="content" value="{{ $data['comment'] }}">
        <button type="submit">更新</button>
    </form>
    <a href="{{ route('reviews.edit', $review->id) }}">戻る</a>
</body>
</html>