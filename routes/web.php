<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bienvenida', 'App\Http\Controllers\PruebaController@index');
Route::get('/listar_paltas', 'App\Http\Controllers\PruebaController@listarPaltas');
Route::post('/agregar_algo', 'App\Http\Controllers\PruebaController@agregarAlgo');