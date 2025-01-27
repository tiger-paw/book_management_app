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
    <p><strong>出版年:</strong> {{ $book->published_year }}</p>
    <p><strong>概要:</strong> {{ $book->description }}</p>

    <!-- 書籍一覧に戻るリンク -->
    <a href="{{ route('books.index') }}">書籍一覧に戻る</a>
    <!-- ステージング、コミットするブランチを間違えて履歴が消えたのでやり直すためにコメント -->
</body>
</html>