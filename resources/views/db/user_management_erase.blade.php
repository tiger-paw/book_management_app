<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>データの削除</h1>
    <a href="{{ route('user_management.index') }}">社員管理画面に戻る</a>

    @if(isset($record))
    <form action="/db/user_management_delete" method="post">
            @csrf
            社員番号<input type="text" name="u_id" value="{{ $record ->u_id }}" readonly><br>
            社員名<input type="text" name="u_name" value="{{ $record ->u_name }}" readonly><br>
            部署ID<input type="text" name="d_id" value="{{ $record ->d_id }}" readonly><br>
            社員コード<input type="text" name="user_code" value="{{ $record ->user_code }}" readonly><br>

            <input type="submit" value="削除"><br>
            <a href="/db/user_management_erase">社員削除画面に戻る</a>
        </form>
    @else
        <form action="/db/user_management_erase" method="post">
        @csrf  
        社員番号<input type="number" name="id" required>
            <input type="submit" value="確認">
        </form>
    @endif
</body>
</html>