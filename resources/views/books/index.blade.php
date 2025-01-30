@extends('layouts.app')
@section('title', '書籍一覧')
@section('content')
    <!-- 戻るリンク -->
    <div class="d-flex justify-content-end">
        <a href="{{ route('index') }}" class="btn btn-secondary">メニューに戻る</a>
    </div>
    <h1>書籍一覧</h1>
    <table class="table text-center">
        @if ($books->isEmpty()) <!-- 書籍がなければ -->
            <p>書籍はありません。</p>
        @else
            <tr>
                <th>書籍名</th>
                <th>著者名</th>
                <th colspan="2">平均評価</th>
            </tr>
            @foreach ($books as $book)
                <tr>
                    <!-- 書籍名をクリックすると詳細ページに遷移 -->
                    <td><a href="{{ route('books.show', ['id' => $book->b_id]) }}">{{ $book->title }}</a></td>
                    <td>{{ $book->author }}</td>
                    <td>
                        {{ $book->reviews_avg_rating == 0 ? '未評価' : number_format($book->reviews_avg_rating, 1) }}
                    </td>
                    <td>
                        <span style="margin-left: 1rem; color: goldenrod;">
                            @for ($i = 0; $i < floor($book->reviews_avg_rating); ++$i)
                                ★
                            @endfor
                            @for ($i = 0; $i < 5 - floor($book->reviews_avg_rating); ++$i)
                                ☆
                            @endfor
                        </span>
                    </td>
                </tr>
            @endforeach
            <!-- ページネーションリンク -->
    </table>
    {{ $books->links() }}

    {{-- bootstrapページネート無効化 --}}
    {{-- <div class="d-flex justify-content-center">
            {{ $books->links('pagination::simple-bootstrap-5') }}
        </div> --}}
    @endif
@endsection
