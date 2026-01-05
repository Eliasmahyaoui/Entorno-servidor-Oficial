@extends('layout.layout')


@section('title')

@endsection

@section('content')

@foreach ($animes as $anime )
    <h3><a href="{{route('anime.show', $anime->id)}}">{{$anime ->title}}</a></h3>
    <h3>{{$anime ->release_year}}</h3>
    <h3>{{$anime ->raiting}}</h3>
    <h3>{{$anime ->has_manga}}</h3>
@endforeach

@endsection
