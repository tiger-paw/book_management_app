<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '書籍管理アプリ')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="/" class="navbar-brand">書籍管理アプリ</a>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="bg-dark text-light text-center py-3 mt-5">
        <p>&copy; 2025 書籍管理アプリ</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
