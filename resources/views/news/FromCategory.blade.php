@extends('layouts.main')
@section('title') Новости из категории - @parent @stop
@section('content')

    <div class="col" style="width: 100%">
        <div class="card shadow-sm">
            <div class="card-body">
                @isset($newsList[0]->NewsId)
                    <h4>Новости из категории:  {{ $categoryTitle }}.</h4>
                    @foreach($newsList as $item => $news)
                        <div>
                            <h5>
                                <a href="{{ route('news.show', ['id'=>$news->NewsId]) }}">
                                    {{ $news->NewsTitle }}
                                </a>
                            </h5>
                            <p>Автор: {{ $news->NewsAuthor }}</p>
                            <p>{{ $news->NewsDescription }}</p>
                        </div>
{{--                    @empty <h3>В категории <strong>"{{ $categoryTitle }}"</strong> пока нет новостей</h3>--}}
                    @endforeach
                @else <h3>В категории <strong>"{{ $categoryTitle }}"</strong> пока нет новостей</h3>
                @endisset
            </div>
        </div>
    </div>
@endsection
