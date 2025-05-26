<?php

use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/libros/nuevo',
    function(){
        return view('nuevoLibro');
    }
);


Route::get(
    '/api/libros/verTodos',
    [LibroController::class,'verTodos']
);

Route::get(
    '/api/libros/buscar',
    [LibroController::class,'buscar']
);

Route::post(
    'api/libros/nuevo',
    [LibroController::class,'nuevo']
);


