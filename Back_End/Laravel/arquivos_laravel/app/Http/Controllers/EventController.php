<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    #pegando os dados da rota /estrutura_php_blade
    public function index() {

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

    }

    public function create() {
        return view('events.create');
    }
}
