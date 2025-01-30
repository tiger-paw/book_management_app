<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍削除完了画面</title>
</head>
<body>
    <h1>以下の書籍を削除しました</h1>
    <table class="table">
        <tr><th>書籍名</th><th>著者名</th></tr>
        <tr>
            <td>{{ $b_title}}</td> 
            <td>{{ $b_author }}</td>
        </tr>
    </table>
    <br>
    <a href="{{ route('book_management.index') }}">書籍管理画面に戻る</a>
</body>
</html>