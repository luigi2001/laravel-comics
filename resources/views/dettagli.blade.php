@extends('layout.app');

@section('titolo','dettaglio contenuto');


@section('content')
<div class="dettaglio">
    <img src="{{ $comic('thumb') }}" alt="">
    <h1></h1>
    <p></p>
    <h3></h3>
</div>
@endsection