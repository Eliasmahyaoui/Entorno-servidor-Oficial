@extends('layout.layout')

@section('content')
 <form action="{{ route('products.update') }}" method="post">
        @csrf
        @method('put')

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name">

        <label for="brand">Marca:</label>
        <input type="text" id="brand" name="brand">

        <label for="description">Descripcion</label>
        <input type="text" id="description" name="description">

        <label for="price">Precio</label>
        <input type="text" id="price" name="price">

        <label for="stock">Stock</label>
        <input type="text" id="stock" name="stock">

        <label for="disponible">Disponible</label>
        <input type="text" id="disponible" name="disponible">

        <label for="image">Imagen</label>
        <input type="text" id="image" name="image">

        <input type="submit" value="Guardar producto">


    </form>

@endsection
