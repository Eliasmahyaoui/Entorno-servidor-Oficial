@extends('layout.layout')

@section('title')
    Formulario
@endsection

@section('content')
    <form action="{{ route('animes.update', $anime) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put');
        <br>
        <label for="title">Titulo</label>
        <input type="text" id="title" name="title" value="{{ $anime->title }}">
        <br>
        <br>
        <label for= "release_year">Año</label>
        <input type="text" id="release_year" name="release_year" value="{{ $anime->release_year }}">
        <br>
        <br>
        <label for="episodes">Episodios</label>
        <input type="text" id="episodes" name="episodes" value="{{ $anime->episodes }}">
        <br>
        <br>
        <label for="rating">Rating</label>
        <input type="text" id="rating" name="rating" value="{{ $anime->rating }}">
        <br>
        <br>
        <label for="has_manga">Tiene Manga</label>
        <input type="text" id="has_manga" name="has_manga" value="{{ $anime->has_manga }}">
        <br>
        <br>
        <label for="synopsis">Sinopsis</label>
        <input type="text" id="synopsis" name="synopsis" value="{{ $anime->synopsis }}">
        <br>
        <br>
        <label for="tags">Tags</label>
        <input type="text" id="tags" name="tags" value="{{ $anime->tags }}">
        <br>
        <br>
        <label for="studio_id">Id de studio</label>
        <input type="text" id="studio_id" name="studio_id" value="{{ $anime->studio_id }}">
        <br>
        <br>
        <label for="studio">Estudio</label>


        <select name="studio" id="studio">
            <option value="0">Selecciona un anime</option>
            @foreach ($studios as $studio)
                <option value="{{ $studio->id }}">Value 2</option>
            @endforeach

            <option value="value3">Value 3</option>
        </select>

        <br>
        <input type="file" name="image">
        <br>
        <input type="submit" id="boton" value="ENVIAR">
    </form>
@endsection
