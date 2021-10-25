@extends('layouts.main')
@section('title') Авторизация - @parent @stop
@section('content')
    <div class="col">
        <h4>Вход</h4>
        <form action="#" method="">
            <input type="email" placeholder="example@mail.com"><br>
            <input type="password" placeholder="password"><br>
            <input type="checkbox">Запомнить<br>
            <input type="submit" value="login">
        </form>
    </div>
@endsection