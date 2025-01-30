<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍の削除</title>
</head>
<body>
    <h1>書籍の削除</h1>  
    @if(isset($record))
        <form action="/db/book_management_delete" method="post">
            @csrf
            <input type="hidden" name="b_id" value="{{ $record ->b_id }}" readonly><br>
            書籍番号{{$record ->b_id}}<br>
            書籍名<input type="text" name="b_title" value="{{ $record ->title }}" readonly><br>
            著者名<input type="text" name="b_author" value="{{ $record ->author }}" readonly><br>

            <input type="submit" value="削除"><br>
            <a href="/book_management_index">書籍削除画面に戻る</a>
        </form>
    @else
        <p>書籍一覧から削除したい書籍の番号を選択してください</p>
        <ul>
            <li><a href="/db/book_management_delete_index">書籍一覧表示</a></li>
        </ul>
        <form action="/db/book_management_erase" method="post">
        @csrf  
        書籍番号<input type="number" name="b_id" required>
            <input type="submit" value="確認">
        </form>
        <a href="/book_management_index">書籍削除画面に戻る</a>
    @endif
</body>
</html>