<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍の削除</title>
</head>
<body>
    <h1>書籍の削除</h1>
    <table class="table">
        <tr><th>書籍名</th><th>著者名</th><th>おすすめ度</th></tr>
        @foreach($records as $record)
        <tr>
            <td>{{$record->title}}</td>
            <td>{{$record->author}}</td>
            <td>{{$record->public}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>