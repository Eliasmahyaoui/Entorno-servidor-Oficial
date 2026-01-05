@extends('layout.layout')

@section('content')
    <h1>{{ $anime->title }}</h1>
    <p>Año de lanzamiento: {{ $anime->release_year }}</p>
    <p>Puntuación: {{ $anime->rating }}</p>
    <p>¿Tiene manga?: {{ $anime->has_manga ? 'Sí' : 'No' }}</p>
    <p>Sinopsis: {{ $anime->synopsis }}</p>

    <a href="{{ route('anime.index') }}">Volver a la lista de animes</a>
@endsection

