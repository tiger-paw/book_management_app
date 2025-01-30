@extends('layouts.app')
@section('title', 'menu')
@section('content')

    {{-- 強制リダイレクト・フラッシュメッセージの表示 --}}
    @if(session('message'))
        <div class="alert alert-warning">
            {{ session('message') }}
        </div>
    @endif

    {{-- バリデーションメッセージ --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(isset($error_message))
        <div class="alert alert-danger">
            {{ $error_message }}
        </div>
    @endif

    {{-- ログインフォーム --}}
    <h1>ログイン</h1>
    <form action="/login" method="POST">
        @csrf
        <label for="u_id">ユーザーID:</label>
        <input type="number" id="u_id" name="u_id" value="{{ old('u_id') }}" required><br><br>
        <label for="password">パスワード:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">ログイン</button>
    </form>

    {{-- フォームここまで --}}
@endsection
