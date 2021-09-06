@extends("layouts.app")
@section("title","DC - Comics")
@section("content")

    <div class="container">

        <div class="card">

            @foreach($comics as $comic)
            
            <h3>{{ $comic['title'] }}</h3>
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" title="{{ $comic['title'] }}">
            
            @endforeach
        </div>
    </div>
@endsection