@extends('layout.layout')


@section('title')
    Lista de peliculas
@endsection

@section('content')
    <h1>Listado de peliculas</h1>
    @forelse ($movies as $movie)
        {{ $movies->title }}
    @empty
        No hay peliculas
    @endforelse
@endsection
