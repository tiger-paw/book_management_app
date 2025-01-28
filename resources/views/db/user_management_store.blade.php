<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社員の新規登録</title>

</head>
<body>
    <h1>以下のデータを登録しました</h1>
    <table class="table">
        <tr>
            <th>社員名</th>
            <th>パスワード</th>
            <th>部門ID</th>
            <th>社員コード</th>


        </tr>
        <tr>
            <td>{{ $u_name }}</td>           
            <td>{{ $password }}</td>
            <td>{{ $d_id }}</td>
            <td>{{ $user_code }}</td>
        </tr>
    </table>
    <br>
    <a href="{{ route('user_management.index') }}">社員管理画面に戻る</a>

</body>
</html>