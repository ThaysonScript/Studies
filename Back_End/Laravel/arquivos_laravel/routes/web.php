<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/estrutura_php_blade', function () {

    # Usando variaveis e dados para serem usados no blade (view):
    $nome = 'Thayson';
    $idade = 20;

    return view('estrutura_php_blade', ['nome' => $nome, 'idade' => $idade, 'profiss' => "programador"]);
});

/*  AQUI FICA EXEMPLO DE ARQUIVO VIEW QUE RETORNA OUTRA VIEW DE OUTRO ARQUIVO

Route::get('/product', function () {
    return view('contact');
});

*/