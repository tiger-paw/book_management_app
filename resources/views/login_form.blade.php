<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <h1>ログイン</h1>
    <form action="/login" method="post">
        @csrf
        <div>
            <p>ID<input type="number" name="u_id" required></p>
            <p>パスワード<input type="password" name="password" required></p>
            <input type="submit" value="ログイン">
        </div>
    </form>

    {{-- 開発用メモ（本番では削除します） --}}
    <br><br>
    <h4 style="color: green">
        --------開発用メモ（本番前に削除）----------
    </h4>
    <h5 style="color: blue">トップページからログインにリダイレクトされます</h5>
    <h3 style="color: red;">id=1 → 一般<br>  id=2 → 総務</h3>
    <h3 style="color: red;">password: "password"</h3>
    {{-- 開発用ここまで 削除 --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
