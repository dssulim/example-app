@extends('layouts.main')
@section('title') Новость с #ID {{ $id }} - @parent @stop
@section('content')
    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
    <div class="card-body">
        <p class="card-text">
            Новость с #ID {{ $id }}
            <strong>{{ $news['title'] }}</strong>
            <br>
            {!! $news['description'] !!} </p>
        <div class="d-flex justify-content-between align-items-center">

            <small class="text-muted">{{ $news['author'] }}</small>
        </div>
    </div>
@endsection

{{--@push('js')--}}
{{--    <script>--}}
{{--        console.log('hello')--}}
{{--    </script>--}}
{{--@endpush--}}