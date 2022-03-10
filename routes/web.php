<?php

use Illuminate\Support\Facades\Route;

Route::get ('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return "testes";
});

Route::get('/ola/{nome}', function($nome){
    echo 'Olá! ' . $nome;
});

Route::get('/testecomregras/{teste}/{quantidade}', function($teste, $quantidade){
    for($i=0; $i < $quantidade; $i++){
        echo "Olá $teste <br>";
    }
})  -> where('teste','[A-Za-z]+')
    -> where('quantidade', '[0-9]+');

Route::prefix('/app')->group(function(){

    Route::get('/', function(){
        return view('app');
    }) -> name('app');
    Route::get('/user', function(){
        return view('user');
    }) -> name('app.user');
    Route::get('/profile', function () {
        return view('profile');
    }) -> name('app.profile');
});

Route::get('/produtos', function () {
    return view('meusProdutos');
})->name('meusprodutos');

Route::redirect('todosprodutos', 'produtos', 301);