<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メニュー画面</title>
</head>
<body>
    <h1>メニュー</h1>
    <ul>
        <li><a href="{{ route('books.index') }}">書籍一覧</a></li>
        <li>書籍検索</li>
        <li>社員管理</li>
        <li>書籍管理</li>
    </ul>
</body>
</html>