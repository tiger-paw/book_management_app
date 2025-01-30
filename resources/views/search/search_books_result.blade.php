@extends('layouts.app')
@section('title', '書籍検索結果')
@section('content')
    <div class="d-flex justify-content-end gap-2">
        <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
        <a href="/search_books_form" class="btn btn-secondary">検索ページに戻る</a>
    </div>
    <br>
    <h1>検索結果 - {{ $count }}件</h1>
    <p>キーワード[{{ $book_keyword }}]</p>
    <table class="table">
        <tr>
            <th>書籍</th>
            <th>著者名</th>
            {{-- <th>出版日</th> --}}
        </tr>
        @foreach($records as $record)
        <tr>
            <td><a href="{{ route('books.show', ['id' => $record->b_id]) }}">{{ $record->title }}</a></td>
            <td>{{ $record->author }}</td>
            {{-- <td>{{ $record->published_date }}</td> --}}
        </tr>
        @endforeach
    </table>
    <br>
    <hr>
    <!-- {{ $records->links() }} -->
    {{ $records->appends(Request::only('post_keyword'))->links() }}
@endsection