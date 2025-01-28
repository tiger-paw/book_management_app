<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>データの削除</h1>
    @if(isset($record))
        <form action="/user_management_db/delete" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $record ->id }}" readonly><br>
            社員番号 {{ $record ->id }}<br>
            社員名<input type="text" name="user_name" value="{{ $record ->user_name }}" readonly><br>
            投稿記事<textarea name="posted_item" readonly>{{ $record ->posted_item }}</textarea><br>
            <input type="submit" value="削除">
            <a href="/user_management_db/erase">社員削除画面に戻る</a>
        </form>
    @else
        <form action="/user_management_db/erase" method="post">
        @csrf  
        投稿番号<input type="number" name="id" required>
            <input type="submit" value="データ表示">
        </form>
    @endif
</body>
</html>