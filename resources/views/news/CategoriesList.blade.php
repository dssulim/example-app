@extends('layouts.main')
@section('title') Категории новостей - @parent @stop
@section('content')
    <div class="col">
    <h4>Категории новостей:</h4>
    @foreach ($categoriesList as $item)
        <a href="{{ route('news.fromCategory', ['CategoryId'=>$item['id']]) }}">
            {{ $item['name'] }}
        </a><br>
    @endforeach
    </div>
@endsection
