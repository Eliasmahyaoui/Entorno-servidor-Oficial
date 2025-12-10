@extends('layout.layout')



@section('title')

    formulario

@endsection


@section('content')
<form action="{{route('Spaces.store')}}" method="post">
    @csrf
    
    <label for="spaces">edificio</label>
    <input type="text" id="edificio" name="edificio">
    <br>
     <label for="spaces">piso</label>
    <input type="text" id="piso" name="piso">
    <br>
     <label for="spaces">codEntrada</label>
    <input type="text" id="codEntrada" name="codEntrada">
    <br>

    <input type="submit" value="ENVIAR">

</form>

@endsection

