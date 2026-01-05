<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\StudioController;
use Illuminate\Support\Facades\Route;

//Ruta normal /generica
Route::get('/', function () {
    return view('index');
});

Route::get('inicio', function () {
    return view('peliculas.index');
});





//Rutas de varios recursos
Route::resource('studio', StudioController::class);
Route::resource('anime',AnimeController::class);
Route::resource('character', CharacterController::class);

