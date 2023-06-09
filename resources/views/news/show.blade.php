@extends('layouts.main')
@section('title') Новость с #ID {{ $news->id }} - @parent @stop
@section('content')
    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
    <div class="card-body">
        <p class="card-text">
            <strong>{{ $news->title }}</strong>
            <br>
            {!! $news->description !!} </p>
        <div class="d-flex justify-content-between align-items-center">

            <small class="text-muted"> Автор: {{ $news->author }} <br>
                <strong>Источник: {!! $news->NewsSourceTitle !!}</strong>
            </small>
        </div>
    </div>
@endsection

{{--@push('js')--}}
{{--    <script>--}}
{{--        console.log('hello')--}}
{{--    </script>--}}
{{--@endpush--}}
