@extends('layouts.main')
@section('title') Категории новостей - @parent @stop
@section('content')
    <div class="col">
    <h4>Категории новостей:</h4>
    @foreach ($categoriesList as $item => $category)
        <a href="{{ route('news.fromCategory', ['CategoryId'=>$category->id]) }}">
            {{ $category->title }}
        </a><br>
    @endforeach
    </div>
@endsection
