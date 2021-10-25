@extends('layouts.main')
@section('title') Добавить новость - @parent @stop
@section('content')

    <form action="#" method="#">
        Title: <br>
        <input type="text" style="width: 654px"><br><br>
        Detailed content of the article: <br>
        <textarea name="Detail" id="#" cols="90" rows="10"></textarea><br>
        Description: <br>
        <textarea name="Description" id="#" cols="90" rows="3"></textarea><br>
        <input type="submit">
    </form>
@endsection