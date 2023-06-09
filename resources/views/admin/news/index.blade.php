@extends('layouts.admin')

@section('title') Список новостей -  @parent @stop

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Новости</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.news.create') }}" class="btn btn-sm btn-outline-secondary">Добавить новую</a>
            </div>
        </div>
    </div>

{{--    <h2>Section title</h2>--}}
    <div class="table-responsive">
        @include('inc.message')
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Заголовок</th>
                <th scope="col">Автор</th>
                <th scope="col">Дата добавления</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse($newsList as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->title }}</td>
                    <td>{{ $value->author }}</td>
                    <td>{{ now()->format('d-m-Y H:i') }}</td>
                    <td><a href="{{ route('news.show', ['id'=>$value->id]) }}">view</a> | <a href="">edit</a> | <a href="javascript:;" style="color: red">del</a></td>
                </tr>
                @empty
                    <tr>
                        <td colspan="5">Записей нет</td>
                    </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
