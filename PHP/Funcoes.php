<?php

    //DEFINICAO:
        # type     name  parametro
        function nomeFuncao() { #declaracao de funcao
            //cod da funcao
        }
        nomeFuncao();   #chamada de funcao


    //PARAMETRO DE FUNCAO:
        function param($p1, $p2) {
            echo "$p1 + $p2 = " . $p1 + $p2;    #php 7 dá aviso de erro
            echo "$p1 + $p2 = " . ($p1 + $p2);  #php 8 isso é aceito, use essa
        }

        param(10, 20);


    //foreach na funcao:
        $nomes = ['joao', 'ana', 'carlos'];

        function saudacao($valor) {
            echo "Bom dia, $valor <br>";
        }

        foreach($nomes as $nomes) {
            saudacao($nomes);
        }



    //PARAMETROS OPCIONAIS:
        function multiplicar($n1 = 0, $n2 = 0) {
            //parametros opcionais da funcao devem sempre ser colocadas mais a direita dos parametros
        }

        //Exemplo:
            function func($n1, $n2, $n3, $n4 = 0, $n5 = 0) {

            }



    //NAMED ARGUMENTS EM FUNCTION:
        //vc pode alterar os parametros opcionais da funcao diretamente

        function user($p1, $p2 = 10, $p3 = 50, $p4 = 100) {

        }

        user(500, 200, p3: 0, p4: 25);  #p3 e p4 é a alteracao do parametro opcional da funcao




    /*
    VARIADIC PARAMETERS:      chamar a funcao passando varios argumentos mesmo que existe um numero menor de parametros na funcao
    */
        function outraFuncao($a) {

            $x = func_get_arg(0);
            $y = func_get_arg(1);
            $z = func_get_arg(2);

            echo "$x - $y - $z";

            echo "<br>";

            echo func_num_args();   #avalia quantos argumentos foram passados para a funcao
        }
        outraFuncao(10,20,30,40,50);


        //TAMBEM  PODE SER USADO O SPREAD:
            function minhaFuncao(...$args) {
                //saber os valores que foram passados:
                    foreach($args as $v) {
                        echo "$v <br>";
                    }
            }
            minhaFuncao(10,2,3,4,5,6,7,8,9,10);


    
    //RETORNO DE UMA FUNCAO:
        function falar() {
            $falando = "Estou falando algo";
            return $falando;    #retorna o valor da variavel para a chamada da funcao
        }
        falar();    #aparecerá o valor da variavel falando, ou seja, Estou falando algo pois foi usado o return para retornar a variavel para a chamada da funcao


?>