@extends('layouts.main')
@section('content')

    <div class="col" style="width: 100%">
        <div class="card shadow-sm">
            <div class="card-body">
                <h4>Новости из категории  {{ $categoryID }}.</h4>
                @foreach ($newsList as $news)
                    <div>
                        <h5>
                            <a href="{{ route('news.show', ['id'=>$news['id']]) }}">
                                {{ $news['title'] }}
                            </a>
                        </h5>
                        <p>Автор: {{ $news['author'] }}</p>
                        <p>{{ $news['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection