@extends('layout.layout')

@section('content')
    <form action="{{ route('subjects.store') }}" method="post">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name">

        <label for="cod">Codigo:</label>
        <input type="text" id="cod" name="cod">

        <label for="cicle">Ciclo:</label>
        <input type="text" id="cicle" name="cicle">

        <label for="curse">Curso:</label>
        <input type="text" id="curse" name="curse">

        <input type="submit" value="Guardar asignatura">

        @if ($errors->any())
            Hay errores en el formulario: <br>
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        @endif

    </form>


@endsection
