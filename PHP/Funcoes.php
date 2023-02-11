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
            
        }

?>