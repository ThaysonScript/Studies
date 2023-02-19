<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

#importando o Model
use App\Models\Event;

class EventController extends Controller
{
    #pegando os dados da rota /estrutura_php_blade
    public function index() {

    /*
    Usando variaveis e dados para serem usados no blade (view):

    $nome = 'Thayson';
    $idade = 20;
    $array = [1, 2, 3, 4, 5];
    $nomes = ['maria', 'joao', 'jose', 'carlos', 'eduardo', 'saulo'];
    */

    $events = Event::all(); #chamar todos os eventos/metodos do model

    return view('welcome',
    [
        /*  COLOQUE A VIEW PARA: estrutura_php_blade PARA USAR ESSA ESTRUTURA
        'nome' => $nome,
        'idade' => $idade,
        'profiss' => "programador",
        'array' => $array,
        'nomes' => $nomes
        */

        'events' => $events #enviando todos os dados do banco de dados para os eventos do model e dele para o controller e para a view / (html home da pagina)
    ]);

    }

    public function create() {
        return view('events.create');
    }
}
