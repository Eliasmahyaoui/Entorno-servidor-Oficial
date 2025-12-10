<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\SpaceController;
use Illuminate\Support\Facades\Route;



//RUTA DE TIPO RECURSO
Route::resource('spaces', SpaceController::class);
Route::resource('clients', ClientsController::class);




