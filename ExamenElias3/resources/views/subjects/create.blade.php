@extends('layout.layout')

@section('content')
    <form action="{{route('subjects.store') }}" method="post">
        @csrf
        <label for="name"></label>
        <input type="text" id="name" name="name">
        <br>
        <label for="cod"></label>
        <input type="text" id="cod" name="cod">
        <br>
        <label for="cicle"></label>
        <input type="text" id="cicle" name="cicle">
        <br>
        <label for="course"></label>
        <input type="text" id="course" name="course">
        <br>
        <input type="submit" value="Guardar">

        @if ($errors->any())
            Hay errores en el formulario <br>
            @foreach ($errors->all() as $error )
                {{$error}} <br>
            @endforeach

        @endif
    </form>
@endsection
