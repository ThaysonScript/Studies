<?php

    //WHILE:
        $i = 0;
        while($i <= 10) {
            echo $i;
            $i++;
        }
        echo "<hr>";

    //DO WHILE:
        $n = 0;
        do {
            echo $n;
            $n++;

        } while($n <= 5);
        echo "<hr>";

    //FOR:
        for($inicio = 0; $inicio <= 10; $inicio++){
            echo $inicio;
        }
        echo "<hr>";

        //OUTRAS MANEIRAS DE REPRESENTAR O FOR:
            $i = 1;
            for(; $i <= 10;) {
                echo $i++ . '<br>';
            }
            echo "<hr>";

        //------------------------------------------------

            for($contador = 1, $x = 10; $contador <= 10; $contador++, $x--) {
                echo "contador: $contador , x: $x";
            }
            echo "<hr>";

        //------------------------------------------------

            $array = ['joao', 'ana', 'carlos'];
            for($cont = 0; $cont <= sizeof($array); $cont++) {
                echo $array[$cont] . '<br>';
            }
            echo "<hr>";


    //FOREACH (pega o valor de um array):
            $nomes = ['joao', 'ana', 'carlos'];
            foreach($nomes as $nomes) {
                echo $nomes . "<br>";
            }
            echo "<hr>";


            //como pegar tbm o indice:
                $capitais = [
                    'portugal' => 'lisboa',
                    'brasil' => 'brasilia',
                    'espanha' => 'madrid'
                ];

                foreach($capitais as $key => $value) {
                    echo "para a chave do pais: $key o valor da capital é: $value";
                }
                echo "<hr>";


    //BREAK, CONTINUE, GOTO:
            //Break     =>      interrompe um laço

            //Continue  =>      reinicia um laço

            //Goto      =>      sai do loop e executa uma linha especifica
                //Exemplo:
                    for($i = 0; $i <= 20; $i++) {
                        if($i == 10) {
                            goto teste;  #sai do loop
                        }
                        echo $i . '<br>';
                    }

                    echo 'fim de loop'; # ignorado


                    teste: # goto é executado aqui
                    echo 'AQUI!';
    

?>