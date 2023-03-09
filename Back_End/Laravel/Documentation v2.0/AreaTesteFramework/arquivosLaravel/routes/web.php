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

/* ROTA BASICA

    Route::get('/', function () {
        return view('welcome');
    });

*/


/*  ROTA INDO PARA UM CONTROLLER

use App\Http\Controllers\UserController;
 
Route::get('/user', [UserController::class, 'index']);

*/

/*  TIPOS DE ROTAS/METODOS

    Route::get($uri, $callback);
    Route::post($uri, $callback);
    Route::put($uri, $callback);
    Route::patch($uri, $callback);
    Route::delete($uri, $callback);
    Route::options($uri, $callback);

*/


/*
    ESPECIFICAR OS TIPOS DE ROTAS QUE PODEM SER USADAS PARA PASSAR INFORMACOES
    Route::match(['get', 'post'], '/', function () {
        // ...
    });
    
    PODE PASSAR QUALQUER TIPO DE ROTA/METODO
    Route::any('/', function () {
        // ...
    });
*/

/*  INJECAO DE DEPENDENCIA

    use Illuminate\Http\Request;
 
    Route::get('/users', function (Request $request) {
        // ...
    });

*/

/*  PEDIDO ACEITO DE ROTA EM FORMULARIO HTML

    <form method="POST" action="/profile">
        @csrf
        ...
    </form>

*/

/*  ROTAS DE REDIRECIONAMENTO

    Route::redirect('/here', '/there');


    POR PADRAO, CODIGO DE STATUS = 302

    CODIGO PERSONALIZADO:
        Route::redirect('/here', '/there', 301); TERCEIRO PARAMETRO

    OU:
        Route::permanentRedirect('/here', '/there'); METODO

*/

/*  ROTA QUE RETORNA DIRETAMENTE UMA VIEW

    Route::view('/welcome', 'welcome');
 
    Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

*/

