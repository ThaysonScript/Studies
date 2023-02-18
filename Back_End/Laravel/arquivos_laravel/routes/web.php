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
    return view('contact');
});

Route::get('/estrutura_php_blade', function () {

    # Usando variaveis e dados para serem usados no blade (view):
    $nome = 'Thayson';
    $idade = 20;
    $array = [1, 2, 3, 4, 5];
    $nomes = ['maria', 'joao', 'jose', 'carlos', 'eduardo', 'saulo'];

    return view('estrutura_php_blade',
    [
        'nome' => $nome,
        'idade' => $idade,
        'profiss' => "programador",
        'array' => $array,
        'nomes' => $nomes
    ]);
});

Route::get('/product', function () {

    $busca = request('search');

    return view('product',['busca' => $busca]);
});

#parametros de rotas
Route::get('/product2/{id?}', function ($id = null) {

    return view('product2', ['id' => $id]);
});

/*  AQUI FICA EXEMPLO DE ARQUIVO VIEW QUE RETORNA OUTRA VIEW DE OUTRO ARQUIVO

Route::get('/product', function () {
    return view('contact');
});

*/