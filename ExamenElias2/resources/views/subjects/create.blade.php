@extends('layout.layout')

@section('content')
    <form action="{{ route('subjects.store') }}" method="post">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="cod">Codigo:</label>
        <input type="text" id="cod" name="cod">
        <br>
        <label for="cicle">Ciclo:</label>
        <input type="text" id="cicle" name="cicle">
        <br>
        <label for="curse">Curso:</label>
        <input type="text" id="curse" name="curse">
        <br>
        <input type="submit" value="Guardar asignatura">

        @if ($errors->any())
            Hay errores en el formulario: <br>
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        @endif

    </form>


@endsection
