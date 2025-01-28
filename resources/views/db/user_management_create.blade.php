<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>社員の新規登録</h1>
<a href="/">社員管理画面に戻る</a>
    <form action="/db/user_management_store" method="post">
        @csrf
        <p>ユーザー名：<input type="text" name="user_name"></p>
        <p>パスワード：<input type="password" name="password"></p>
        <input type="submit" value="確認" class="btn btn-primary">    
    </form>
    <br>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif    
</body>
</html>