<?php

    $valores = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $nomes = array('joao', 'ana', 'carlos');

    $valores = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $nomes = ['joao', 'ana', 'carlos'];

    # adicionar elemento ao array
    $valores[] = 1000;
    # ou
    array_push($valores, 5000);

    echo $valores[11] . "<br>";
    echo $nomes[1];



    // ARRAYS ASSOCIATIVOS:     parecido com objetos_js ou dicionarios python
    $dados1 = [
        'a' => 20,
        'b' => 30,
        'c' => 40,
        'd' => 50
    ];

    $daods2 = [
        'nome' => 'joao',
        'email' => 'joao@gmail.com',
        'nacionalidade' => 'portugal',
        'telefone' => '9999999999'
    ];

    echo '<br>';
    echo $dados1['a'];

    // ARRAYS MISTOS TEM A MESMA ESTRUTURA DO ARRAY ASSOCIATIVO MISTURANDO STRING COM NUMEROS


    // ARRAYS MULTIDIMENSIONAIS
    $dados3 = [
        [10, 20, 30, 40],
        [100, 200, 300, 400],
        [1000, 2000, 3000, 4000]
    ];

    echo '<br>';
    echo $dados3[1][3];  #array 2, indice com valor 400

    // ARRAYS MULTIDIMENSIONAIS ASSOCIATIVOS
    $cidades = [
        'portugal' => ['lisboa', 'porto', 'coimbra'],
        'brasil' => ['brasilia', 'sao paulo', 'rio de janeiro'],
        'espanha' => ['madrid', 'barcelona', 'servilha']
    ];

    echo '<br>';
    echo $cidades['brasil'][1];

?>