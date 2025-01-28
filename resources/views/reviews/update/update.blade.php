<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>レビューの編集完了</title>
</head>
<body>
    <h1>レビュー更新完了</h1>
    <p>レビューの更新が完了しました。</p>
    <a href="{{ route('books.show', $review->book_id) }}">書籍詳細へ戻る</a>
</body>
</html>