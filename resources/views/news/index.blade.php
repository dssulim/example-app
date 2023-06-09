@extends('layouts.main')
@section('title') Все новости - @parent @stop
@section('content')

    @forelse ($newsList as $item => $news)
        <div>
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">

                            <div>
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                                <p class="card-text">
                                    <strong>{{ $news->title }}</strong><br>
                                    {!! $news->description !!}
                                </p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('news.show', ['id'=>$news->id]) }}" class="btn btn-sm btn-outline-secondary">Смотреть подробнее</a>
                                </div>
                                <small class="text-muted">Автор: {!! $news->author !!} <br>{{ now()->format('d-m-Y H:i') }}</small>
                            </div>
                        <a href="{{ route('news.fromCategory', ['CategoryId'=>$news->category_id]) }}">
                            <p class="card-text">Категория: {{ $news->CategoryTitle }}</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @empty <h3>Записей нет</h3>
    @endforelse

@endsection

