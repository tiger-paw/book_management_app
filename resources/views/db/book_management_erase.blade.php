<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍の削除</title>
</head>
<body>
    <h1>書籍の削除</h1>
    <a href="{{ route('book_management.index') }}">書籍管理画面に戻る</a>
    @if(isset($record))
    <form action="/db/book_management_delete" method="post">
            @csrf
            書籍名<input type="text" name="b_title" value="{{ $record ->title }}" readonly><br>
            著者名<input type="text" name="b_author" value="{{ $record ->author }}" readonly><br>
            おすすめ度<input type="text" name="b_published" value="{{ $record ->published_date }}" readonly><br>

            <input type="submit" value="削除"><br>
            <a href="/db/book_management_erase">書籍削除画面に戻る</a>
        </form>
    @else
        <form action="/db/book_management_erase" method="post">
        @csrf  
        社員番号<input type="number" name="id" required>
            <input type="submit" value="確認">
        </form>
    @endif
</body>
</html>