<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍一覧</title>
</head>
<body>
    <h1>書籍一覧</h1>
    @if($books->isEmpty()) <!-- 書籍がなければ -->
        <p>書籍はありません。</p>
    @else
        <ul>
            @foreach($books as $book)
                <li>{{ $book->title }} - {{ $book->author }}</li>
            @endforeach
        </ul>
    @endif
    <!-- 書籍一覧に戻るリンク -->
    <a href="{{ route('index') }}">メニューに戻る</a>
    <!-- 他のメニュー項目も必要に応じて追加 -->
    <!-- ステージング、コミットするブランチを間違えて履歴が消えたのでやり直すためにコメント -->
</body>
</html>