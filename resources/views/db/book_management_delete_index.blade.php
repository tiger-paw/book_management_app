<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍管理</title>
</head>
<body>
    <h1>全件表示</h1>
    <a href="/db/book_management_erase">書籍管理画面に戻る</a>
    <table class="table">
        <tr>
            <th>書籍ID</th>
            <th>書籍名</th>
            <th>著者名</th>
        </tr>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->b_id }}</td>
            <td>{{ $record->title }}</td>
            <td>{{ $record->author }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>