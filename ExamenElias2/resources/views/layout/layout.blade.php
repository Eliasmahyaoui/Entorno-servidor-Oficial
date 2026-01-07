<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <nav>
        <a href="">Principal</a>
        <a href="subjects.index">Ver asignaturas</a>
        <a href="subjects.show">Ver asignaturas 123</a>
        <a href="subjects.create">Añadir asignatura</a>
    </nav>

    @yield('content')

    <footer>
        <a href="cookies">Politica de cookies</a>
        <a href="privacy">Privacidad</a>
    </footer>
</body>

</html>
