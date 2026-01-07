<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\SubjectsController;
use Illuminate\Support\Facades\Route;


//Controlador de varias  acciones
Route::get('/', [indexController::class, 'index']);

Route::get('cookies', [LegalController::class,'cookies'])->name('cookies');
Route::get('privacy', [LegalController::class,'privacy'])->name('privacy');


//Controlador de tipo recurso
Route::resource('subjects', SubjectsController::class)->except('edit','update');


