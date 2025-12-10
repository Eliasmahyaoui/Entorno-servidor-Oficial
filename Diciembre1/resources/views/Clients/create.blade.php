
@extends('layout.layout')



@section('title')

    formulario

@endsection


@section('content')
<form action="{{route('Clients.store')}}" method="post">
    @csrf

    <label for="clientes">dni</label>
    <input type="text" id="dni" name="dni">
    <br>
     <label for="clientes">nombre</label>
    <input type="text" id="nombre" name="nombre">
    <br>
     <label for="clientes">email</label>
    <input type="text" id="email" name="email">
    <br>
     <label for="clientes">apellido1</label>
    <input type="text" id="apellido1" name="apellido1">
    <br>
     <label for="clientes">apellido2</label>
    <input type="text" id="apellido2" name="apellido2">

    <input type="submit" value="ENVIAR">

</form>



@endsection

