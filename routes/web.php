<?php

use App\Http\Controllers\ClienteControlador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesControllers;

Route::resource('clientes', ClienteControlador::class);

Route::get('departamentos', [PagesControllers::class, 'departamentos'])  
    -> name('departamentos');
    
Route::get('produtos', [PagesControllers::class, 'produtos'])
    -> name('produtos');