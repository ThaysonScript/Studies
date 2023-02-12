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



    //ESCOPO DE VARIAVEIS:
        #No caso de parametros de funcao, o parametro so existe dentro da funcao, externamente ela nao pode ser usada

        # Se criar uma variavel dentro de uma funcao, somente lá que ela sera usada

        # se criar uma variavel fora de uma funcao e definir o seu valor, mesmo que vc tente trocar o valor da variavel dentro de uma funcao, ela nao sera alterada
        
        # Para isso temos o global:
        #vc vai poder trocar o valor da variavel global dentro de uma funcao:
        $a = 10;

        function troc() {
            global $a;
            $a = 20;
        }
        troc();

        echo "<p>$a</p>";

        # Tem um metodo melhor para ser trocado o valor de uma variavel dentro de uma funcao:
        $b = 100;

        function funcao2() {
            $GLOBALS['b'] = 200;    # Define como um array e transforma a variavel como global
        }
        funcao2();

        echo "<p>$b</p>";


    
    //FUNCOES ANONIMAS:
        $func = function() {
            echo "Aqui é uma funcao anonima que se deve usar um ponto e virgula como ao inicializar uma variavel com qualquer valor";
        };  # deve-se usar o ponto e virgula em funcoes anonimas php

        $func();    # chamada da funcao anonima


        //Com parametro:
        $falar = function($valor) {
            echo "eu estou $valor";
        };
        $falar("falando isso...");


        //Com parametro e retorno:
        $falar = function($valor) {
            return "eu estou $valor";
        };
        echo $falar("falando isso...");


        //Funcao que é executada em outra funcao
        $func1 = function($valor1) {
            return "uma string: $valor1";

        };

        function falar2($func1) {
            echo $func1;
        };

        falar2($func1());




    //FUNCOES CLOSURE E ARROW FUNCTION:
        #funcoes normais que podem pegar variaveis globais para serem usadas dentro do seu escopo:

        #global variaveis
        $x = 20;
        $y = 30;

        #funcao anonima
        //variavel          funcao(param)  uso de variavel globais
        $myclosureFunction = function($z) use($x, $y) {
            echo "$z - $x - $z";
            $y += 1000; #mesmo se alterar a global, isso só serve para o escopo da funcao, fora da funcao o escopo usado e referenciado é o global
        };


        //ARROW FUNCTIONS:  por padrao pega valores globais para si, nao precisa de return nem chaves
            #definicao:
            $x1 = 20;
            $y1 = 30;
            $z1 = 10;

            # var   arrow function      args
            $funcao1 = fn($a) => "$x1 - $y1 - $z1";

            echo $funcao1(10);



    //FUNCOES GERADORAS:
        #definicao
        $a = 0;
        $b = 1;
        $c = 2;

        function buscarNumero() {
            yield $a;
            yield $b;
            yield $c;
            yield 'carlos';
            yield 'rodrigo';
            yield 'jose';
            yield from ['carlos', 'rodrigo', 'jose'];
        }


?>