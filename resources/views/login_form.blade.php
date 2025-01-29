@extends('layouts.app')
@section('title', 'menu')
@section('content')

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
@endsection
