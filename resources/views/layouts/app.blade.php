<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '書籍管理アプリ')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .container {
            flex-grow: 1;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="/" class="navbar-brand">書籍管理アプリ</a>
            <div class="ml-auto d-flex align-items-center">
                @if (isset($userId) && isset($userName))
                    <span class="text-light mr-3">ID: {{ $userId }}</span>
                    <span class="text-light mr-3">{{ $userName }}</span>
                @endif
                <a href="/login" class="btn btn-outline-light">ログイン</a>
                {{-- ログインしていればログアウトリンクを表示し、していなければログアウトを表示しない --}}
                @if (isset($userId) && isset($userName))
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-light">ログアウト</button>
                </form>
                @endif
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center">
        <div>
            @yield('content')
        </div>
    </div>

    <footer class="bg-dark text-light text-center py-3 mt-5">
        <p>&copy; 2025 書籍管理アプリ</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
