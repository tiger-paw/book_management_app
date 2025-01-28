<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メニュー画面</title>
</head>
<body>
    <h1>メニュー</h1>
    @if(isset($userRecord))
        <div>
            ID:{{ $userId }}
            名前:{{ $userName }}
            user_code:{{ $userCode }}
        </div>
    @endif
    <ul>
        @if(!isset($userRecord))
            <li><a href="{{ route('books.index') }}">書籍一覧</a></li>
            <li><a href="/search_books_form">書籍検索</a></li>
        @else
            <li><a href="{{ route('user_management.index') }}">社員管理</li>
            <li><a href="{{ route('book_management.index') }}">書籍管理</a></li>
        @endif
    </ul>
</body>
</html>