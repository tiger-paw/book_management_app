<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
</head>
<body>
<h1>社員の新規登録</h1>
<a href="{{ route('user_management.index') }}">社員管理画面に戻る</a>
    
    <form action="/db/user_management_create_store" method="post">
        @csrf
        <p>社員名：<input type="text" name="u_name" class="navbar-brand mb-0 h1"required></p>
        <p>パスワード：<input type="password" name="password" required></p>
        <p>部署ID：<input type="number" name="d_id" required></p>
        <p>社員コード：<input type="text" name="user_code" required></p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
    crossorigin="anonymous"></script>
</body>
</html>