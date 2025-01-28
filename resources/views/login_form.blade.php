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
    <form action="/login" method="POST">
        @csrf
        <label for="u_id">ユーザーID:</label>
        <input type="number" id="u_id" name="u_id" required><br><br>
        <label for="password">パスワード:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">ログイン</button>
    </form>

    {{-- 開発用メモ（本番では削除します） --}}
    <br><br><br><br><br>
    <h4 style="color: green">
        --------開発用メモ----------
    </h4>
    <p style="color: blue">未ログインでは、トップページからログインにリダイレクトされます</p>
    <p style="color: blue">ログインを行うか、強制リダイレクトを無効化してから各ページにアクセスできます</p>
    <h5 style="color: rgb(9, 77, 94);">id=1 → 一般<br> id=2 → 総務</h5>
    <h5 style="color: rgb(9, 77, 94);"">パス: password</h5>
    --------------------------------------------
    <h2 style="color: orange">開発者向け設定</h2>
    <p>現在の強制リダイレクト状態:
        @if(session('redirect_disabled', false))
            <strong>無効化</strong>
        @else
            <strong>有効</strong>
        @endif
    </p>
    <form action="/toggle-redirect" method="POST">
        @csrf
        <input type="hidden" name="redirect_disabled" value="1">
        <button type="submit">強制リダイレクト無効化: ON</button>
    </form>
    <form action="/toggle-redirect" method="POST">
        @csrf
        <input type="hidden" name="redirect_disabled" value="0">
        <button type="submit">強制リダイレクト無効化: OFF</button>
    </form>
    <p>
        <a href="/books">書籍一覧</a>
        <a href="/">メニュー</a>
        <a href="/book_management_index">書籍管理</a>
        <a href="/user_management">社員管理</a>
    </p>
    --------------------------------------------
    {{-- 開発用ここまで 削除 --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
