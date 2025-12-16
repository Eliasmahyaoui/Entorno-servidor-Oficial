@extends('layout.layout')

@section('title')
    titulo
@endsection
@section('content')
    <br>
    <!--Mostrar la informacion -->

    <img src="{{ $character['image'] }}" alt="Imagen">
    <br>
    {{ $character['name'] }}
    {{ $character['status'] }}
    {{ $character['species'] }}
    {{ $character['type'] }}
    {{ $character['gender'] }}
@endsection
