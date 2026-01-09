
@extends('layout.layout')

@section('content')
    @foreach ($animes as $anime )
        <a href="{{route('Anime.show',$anime->id)}}">{{$anime->title}}</a>
        {{$anime->title}}
        {{$anime->release_year}}
        {{$anime->rating}}
        {{$anime->has_manga}}
    @endforeach

@endsection
