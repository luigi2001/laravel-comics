@extends('layout.app');

@section('titolo','comics section');

@section('content')
<main>
    <div class="jambotrom"></div>
    <div class="container">
        <div class="button">
            <h3>current series</h3>
        </div>
        <div class="gallery">
            <div class="card">
                @foreach($comics as $comic)
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <h3><a href="">{{ $comic['title'] }}</a></h3>
                @endforeach
            </div>
        </div>
        <div class="button2">
            <h3>load more</h3>
        </div>
    </div>
</main>
@endsection