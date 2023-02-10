<?php

    # retornar o tamanho de uma string
    $frase = "Esta frase tem 29 caracteres.";
    $numero_caracteres_string_tamanho = strlen($frase);
    echo $numero_caracteres_string_tamanho;
    echo "<br>";

    # retornar uma sequencia dada de sting
    $sequencia_string_periodo = substr($frase, 0, 4); # resultado: Esta
    echo $sequencia_string_periodo;
    echo "<br>";

    # retornar string em todo formato maiusculo
    $maiusculo_string = strtoupper($frase);
    echo $maiusculo_string;
    echo "<br>";

    # retornar string em todo formato minusculo
    $minusculo_string = strtolower($frase);
    echo $minusculo_string;
    echo "<br>";

    #substituir string por outra string ou elemento de array
    $subst = str_replace('Esta', 'A', $frase);
    echo $subst;
    echo "<br>";

    #verificar a primeira posicao de uma string
    $posicao_string = strpos($frase, 'a');
    echo $posicao_string;
    echo "<br>";


    # consultar o manual de strings do php

    # Ainda há varias funcoes para serem usadas com strings em php 8, como:
        
        #str_contains()     -   contem na string ou nao
        $nome = "Ana Maria Silva Cardoso";
        $contem = str_contains($nome, 'Silva'); # retorna valor booleano
        echo $contem;
        echo "<br>";


        # str_strarts_with()    -   comeca com... na string
        $comecar = str_starts_with($nome, 'Ana');
        echo $comecar;
        echo "<br>";


        #str_ends_with()    -   termina com... na string
        $terminar = str_ends_with($nome, "oso");
        echo $terminar;
        echo "<br>";

?>