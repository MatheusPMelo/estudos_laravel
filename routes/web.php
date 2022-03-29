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
use App\Http\Controllers\PagesControllers;
use Illuminate\Routing\Route as RoutingRoute;

Route::resource('clientes', ClienteControlador::class);

//Route::get('/',[PagesControllers::class, 'home'])->name('home');