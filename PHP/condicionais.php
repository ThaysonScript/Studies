<?php

    $nome = 'joao';

    //ESTRUTURA SIMPLES
    if($nome == 'joao') {
        echo 'joao foi aceito!';
    }


    //ESTRUTURA COMPLETA
    if($nome == 'joao') {
        echo 'joao foi aceito!';
    } else {
        echo 'nao foi aceito!';
    }



    //ESTRUTURA DE MULTIPLA ESCOLHAS
    if($nome == 'ribeiro' && $idade == 20){
        echo 'aceito';
    } elseif($nome == 'qualquer' || $idade == 18) {
        echo 'aceitado';
    } elseif($idade >= 25) {
        echo 'idade maior que 25';
    } else {
        echo 'nada foi aceito';
    }

    //ESTRUTURA ANINHADA
    if($idade == 20) {
        if($nome == 'joao') {
            echo 'joao tem 20 anos';
        } elseif($nome == 'Thayson' || $nome == 'joao' && $idade != 20) {
            echo 'tudo aceito';
        }
    }

?>