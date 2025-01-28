<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社員管理</title>
</head>
<body>
    <h1>全件表示</h1>
    <a href="{{ route('user_management.index') }}">社員管理画面に戻る</a>
    <table class="table">
        <tr>
            <th>社員番号</th>
            <th>社員名</th>
            <th>部署ID</th>
            <th>社員コード</th>
        </tr>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->u_id }}</td>
            <td>{{ $record->u_name }}</td>
            <td>{{ $record->d_id }}</td>
            <td>{{ $record->user_code }}</td>
            <td><input type="submit" value="削除"></td>
        </tr>
        @endforeach
    </table>
</body>
</html>