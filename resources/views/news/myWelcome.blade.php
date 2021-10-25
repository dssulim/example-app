@extends('layouts.main')
@section('title') Главная - @parent @stop

@section('content')
<div class="col">
    <h1>Приветсвуем на сайте новостей</h1>

    <a href="{{ route('news.add') }}">Предложить новость</a>
</div>
@endsection