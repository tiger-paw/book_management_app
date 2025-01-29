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
    {{-- ナビゲーションバー --}}
    <nav class="navbar navbar-dark bg-dark">{{-- 以下をコピペ使用 https://getbootstrap.jp/docs/4.2/components/navbar/#color-schemes　を使用 --}}
        <a class="navbar-brand" href="#">Navbar</a> {{-- 以下をコピペ使用 https://getbootstrap.jp/docs/4.2/components/navbar/#toggler --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    {{-- ナビゲーションバー ここまで --}}


    {{--  --}}
    <h1>ログイン</h1>
    <form action="/login" method="POST">
        @csrf
        <label for="u_id">ユーザーID:</label>
        <input type="number" id="u_id" name="u_id" required><br><br>
        <label for="password">パスワード:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">ログイン</button>
    </form>

    {{-- フォームここまで --}}


    {{-- bootstrap 確認用 --}}
    {{--   https://getbootstrap.jp/docs/5.3/forms/layout/#%E6%B0%B4%E5%B9%B3%E3%81%AA%E3%83%95%E3%82%A9%E3%83%BC%E3%83%A0 --}}
    <br>
    <p>---------------------------</p>
    Bootstrapレイアウト確認用<br>
    <form>
        <div class="row mb-3">
            <label for="u_id" class="col-sm-2 col-form-label">ユーザーID</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="u_id" id="inputEmail3" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">パスワード</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="inputPassword3" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">ログイン</button>
    </form>
    {{-- ログインボタン --}}



    {{-- bootstrap 確認用ここまで --}}






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
        @if (session('redirect_disabled', false))
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
