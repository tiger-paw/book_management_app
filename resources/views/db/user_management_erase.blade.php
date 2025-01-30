<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社員削除</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
</head>
<body>
    <h1>データの削除</h1>
    <a href="{{ route('user_management.index') }}">社員管理画面に戻る</a>
    @if(isset($record))
    <form action="/db/user_management_delete" method="post">
            @csrf
            <p>以下のデータを削除します　よろしいですか？</p>
            社員番号:<input type="text" name="u_id" value="{{ $record ->u_id }}" readonly><br>
            社員名:<input type="text" name="u_name" value="{{ $record ->u_name }}" readonly><br>
            部署ID:<input type="text" name="d_id" value="{{ $record ->d_id }}" readonly><br>
            社員コード:<input type="text" name="user_code" value="{{ $record ->user_code }}" readonly><br>

            <input type="submit" value="削除"><br>
            <a href="/db/user_management_erase">社員削除画面に戻る</a>
        </form>
    @else
        <form action="/db/user_management_erase" method="post">
        @csrf  
        社員番号:<input type="number" name="u_id" required>
            <input type="submit" value="確認" class="btn btn-primary">
        </form>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
    crossorigin="anonymous"></script>
</body>
</html>