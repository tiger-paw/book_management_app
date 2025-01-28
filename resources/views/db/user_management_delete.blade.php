<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データベース処理</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
</head>
<body>
<h1>以下のデータを削除しました</h1>
    <table class="table">
        <tr>
            <th>社員番号</th>
            <th>社員名</th>
            <th>部署ID</th>
            <th>社員コード</th>

        </tr>
        <tr>
            <td>{{ $u_id }}</td> 
            <td>{{ $user_name }}</td>
            <td>{{ $d_id }}</td>
            <td>{{ $user_code }}</td>
        </tr>
    </table>
    <br>
    <a href="/">社員管理画面に戻る</a>

</body>
</html>
</body>
</html>