@extends('layout.layout')

@section('title')
Eventos
@endsection

@section('content')
    <h1>Mostrara una lista de próximos eventos</h1>
    <ul>

        <li>Próximo partido Alcaraz- Sinner</li>
        
        <li>Próximo partido Barbosa - Nadal</li>
        <li>Próximo partido Sara - Cristina</li>
        <li>Próximos partidos...</li>
    </ul>
        <br>
      <!--Enlaces para modificar y eliminar el evento SOLO LOGUEADO-ADMIN!-->
        <a href="">Modificar Evento</a>
        <a href="">Eliminar eventos</a>
        <br>
        <!--Enlaces para marcar me gusta o borrar el me gusta SOLO LOS LOGUEADOS!-->
        <a href="">Marcar me gusta </a>
        <a href="">Borrar me gusta</a>
@endsection

