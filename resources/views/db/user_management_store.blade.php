<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社員の新規登録</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
    crossorigin="anonymous"></script>
</body>
</html>