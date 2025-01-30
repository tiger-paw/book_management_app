
@extends('layouts.app')
@section('title', '社員管理')
@section('content')
<div class="d-flex justify-content-end">
        <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
</div>
<h1>社員管理画面</h1>
    <p>行いたい処理を選択してください</p>
    <nav aria-label="breadcrumb">
    <ul class="breadcrumb">
        <a href="/db/user_management_index" class="btn btn-secondary mx-2">全社員の一覧表示</a></li>
        <a href="/db/user_management_create" class="btn btn-secondary mx-2">社員の新規登録</a></li>
        <a href="/db/user_management_erase" class="btn btn-outline-danger mx-2">社員の削除</a></><br>
    </ul>

@endsection
