<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;


//Controlador tipo recurso
Route::resource('products', ProductsController::class);



