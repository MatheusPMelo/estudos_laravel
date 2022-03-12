<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;
use App\Http\Controllers\MeuControlador;
use App\Http\Controllers\ClienteControlador;


Route::get("produtos", [MeuControlador::class, "produtos"])->name("produtos");
Route::get("nome", [MeuControlador::class, "nome"]) -> name("nome");
Route::get("idade", [MeuControlador::class, "idade"]) -> name("idade");
Route::get("multiplicar/{n1}/{n2}", [MeuControlador::class, "multiplicar"]) -> name("multiplicar");

Route::get('/', function () {
    return view('welcome');
});


Route::resource('clientes', ClienteControlador::class);