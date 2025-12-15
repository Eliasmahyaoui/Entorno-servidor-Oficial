@extends('layout.layout')

@section('title')
    titulo
@endsection

@section('content')
    @foreach ($characters as $character)
        <div>
            <a href="{{ route('rickmorty.character', ['character' => $character->id]) }}">{{ $character->name }}</a>
            <br>
            <img src="{{ $character->image }}"alt="Imagen">
            <br>
        </div>
    @endforeach
@endsection
