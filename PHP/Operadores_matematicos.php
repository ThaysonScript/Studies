<?php

    // Operadores aritmeticos:

    $soma = 1 + 1;  //somar
    $mult = 5 * 5;  //multiplicar
    $potenc = 5 ** 2;   //potencia
    $subt = 10 - 5; //subtrair
    $div = 10 / 2;  //dividir
    $modulo = 10 % 2;   //restante de divisao

    //INCREMENTACAO:
        $n1 = 5;
        $n2 = 10;

        //pos incremento
        $n1++;
        $n2--;

        //pre incremento
        ++$n1;
        --$n2;

        //tradicional incrementacao:
        $n1 = $n1 + 10;
        $n2 = $n2 - 5;

        //rapida incrementacao:
        $n1 += 10;
        $n2 += 50;

        /*
            ++
            --
            +=
            -=
            *=
            /=
            %=
        */


    //OPERADORES DE COMPARACAO:
    /*
    
        =   ATRIBUICAO
        ==  IGUALDADE DE VALORES
        === ESTRITAMENTE IGUAL VALOR E TIPO
        !=  DIFERENTE
        !== ESTRITAMENTE DIFERENTE VALOR E TIPO
        <>  DIFERENTE



        >   MAIOR
        <   MENOR
        >=  MAIOR OU IGUAL
        <=  MENOR OU IGUAL

    */
    

    //OPERADOR SPACESHIT:
        $a = 1 <=> 1;   //se igualdade retorna 0 para a variavel

        $b = 3 <=> 2;   //se o valor da esquerda for maior do que o da direita, entao retorna 1 a variavel

        $c = 2 <=> 3;   //Se direita for mmaior do que o da esquerda, entao retorna -1 a variavel


    //OPERADORES LOGICOS:
    /*

        &&      AND
        ||      OR
        !       NOT
        
    */


    //STRINGS:
    /*
      $a = "Esta e uma string";

      Concatenacao:
        usasse o ponto .
        e tbm o .= semelhante ao incremento

        $string = 'joao' . ' ' . 'ribeiro';

        o .= adiciona mais string a uma variavel igualmente ao incremento

        DIE:
        die();      interrompe a execucao do script
    */


    //HEREDOC E NOWDOC:
    /*
        Usado para passar grandes textos e que ja faz a formatacao, ou seja, pode passar variaveis para dentro da string que vai ser concatenado
    */

?>


<?php
//  PROBLEMAS COM VARIAVEIS E OPERADORES:

//definir a como 100 e apresentar a na tela

$a1 = 100;
echo $a1;
echo "<br>";

// a é 1000 e b é a metade de a, apresentar b na tela

$a2 = 1000;
$b1 = $a2 / 2;
echo $b1;
echo "<br>";

// a é 100 b é 3 vezes o a apresentar na tela o b

$a3 = 100;
$b2 = $a3 * 3;
echo $b2;
echo "<br>"

?>