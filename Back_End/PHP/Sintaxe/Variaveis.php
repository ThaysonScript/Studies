<?php
    echo 'se usa o <strong> $nomeVariavel; </strong>       para declarar variavel em php';

    $Variavel; //nao iniciada

    $variavel = 100;

    echo $variavel;
    echo "<br>";

    //  Variaveis em php sao caseSensitive, ou seja, nao pode declarar usando numero no inicio, metodo/propriedade interna

    //usando variaveis:
    $n1 = 10;
    $n2 = 20;

    $result = $n1 + $n2; #30
    $result = $n1 + 100; #110
    $result = $n1 * $n2; #200

    $result = 1000 + $n1 + 10 + $n2;

    echo $result;
?>