<?php

    $nome = 'joao';

    switch($nome) {
        case 'joao':
            echo 'joao presente';
            break;

        case 'Thayson':
            echo 'Thayson presente';
            break;

        case 'Augusto':
            echo 'Augusto presente';
            break;

        case 'roberto':
            echo 'roberto presente';
            break;

        default:
            echo 'ninguem presente';
            break;
    }


    //SINTAXE ALTERNATIVA DO IF PARA USAR NO HTML
        if($nome == 'joao'):
            echo 'aqui';

        else:
            echo 'alternativo';
        endif;
        // no switch se usa dps do default o endswicth;
        

    // CONDICIONAL TERNARIO
        $opcao = 0;

        #se acontecer ? faca : senao faca;
        $opcao == 1 ? $nome = "joao" : "Antonio";

        /*
            para usar dentro do html insira-o em uma tag html com a sintaxe <?=   ?>
        */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- DENTRO DO HTML -->
        <?php if(false): ?>

            <div>executar o code 1</div>

        <?php else: ?>

        <?php endif; ?>
</body>
</html>