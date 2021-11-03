@extends('layouts.admin')

@section('title') Добавить новость -  @parent @stop

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Новая запись</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>

    {{--    <h2>Section title</h2>--}}
    <div class="table-responsive">
        @include('inc.message')
        <form method="post" action="{{ route('admin.news.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Название</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="author">Автор</label>
                <input type="text" class="form-control" name="author" id="author" value="{{ old('author') }}">
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" name="description" id="description">{!! old('description') !!}</textarea>
            </div>
            <br>
            <button class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection
