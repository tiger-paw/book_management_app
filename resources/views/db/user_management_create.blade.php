<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>社員の新規登録</h1>
    <form action="/db/user_management_store" method="post">
        @csrf
        <div class="mb-3">
            <label for="user_name" class="form_label">社員名</label>
            <input type="text" class="form-control" name="user_name" id="user_name" value="{{ old('user_name')}}" >
                
        </div>
        <div class="mb-3">
            <label for="posted_item" class="form_label">パスワード</label>
            <input type="text" name="password" id="password">
        </div>
        <input type="submit" value="登録" class="btn btn-primary">    
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