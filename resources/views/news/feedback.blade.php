@extends('layouts.main')
@section('title') Обратная связь - @parent @stop
@section('content')

    <div class="col" style="width: 100%">
        <h1>Оставить отзыв</h1>
        @include('inc.message')
        <form action="#" method="post">
            @csrf
            <label for="username">Имя<b style="color: red">*</b></label><br>
            <input type="text" placeholder="Ваше имя" name="username" id="username" value="{{ old('username') }}"><br>

            <label for="description">Ваш отзыв<b style="color: red">*</b></label><br>
            <textarea name="description" cols="100" rows="2" id="description">{!! old('description') !!}</textarea><br>

            <button>Сохранить</button>
        </form>
        <br>
        <div class="card shadow-sm">
            <div class="card-body">
                <h4>Отзывы пользователей.</h4>
                @if(!is_null($feedbackList))
                    @foreach ($feedbackList as $key => $value)
                        <div>
                            <h5>
                                {{ $key }}
                            </h5>
                            <p>{{ $value }}</p>
                        </div>
                    @endforeach
                @else <p>Записей нет</p>
                @endif
            </div>
        </div>
    </div>

@endsection