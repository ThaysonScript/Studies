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


use App\Http\Controllers\EventController; #importando o controller
Route::get('/estrutura_php_blade', [EventController::Class, 'index']); #essa rota foi passada para o controller, para a index

Route::get('/events/create', [EventController::Class, 'create']);

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