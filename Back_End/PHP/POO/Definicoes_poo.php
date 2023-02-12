<?php

    // class é o objeto/esqueleto/modelo que será criado
    class Fruit {

        //propriedades/componentes/variaveis
        public $name;
        public $color;

        //metodos/acoes/funcoes
        function set_name($name) {

            // O THIS REFERE-SE AO PROPRIO COMPONENTE EM QUESTAO
            $this -> name = $name;
        }

        function get_name() {
            return $this -> name;
        }

        function set_color($color) {
            $this -> color = $color;
        }

        function get_color() {
            return $this -> color;
        }

    }

    //criar nova instancia da classe/clonar esqueleto
    $apple = new Fruit();

    $apple -> set_name('Apple');
    $apple -> set_color('Red');

    //---------------------------------------------------

    $banana = new Fruit();

    $banana -> set_name('Banana');
    $banana -> set_color("Yellow");

    echo $apple -> get_name();
    echo $apple -> get_color();

    echo "<br>";

    echo $banana -> get_name();
    echo $banana -> get_color();


    // O THIS PODE SER COLOCADO DENTRO DO METODO DA CLASSE OU PODE SER REFERENCIADO DIRETAMENTE FORA DA CLASSE
    /*
        $apple = new Fruit();
        $apple->name = "Apple";

        echo $apple->name;
    */

    // USANDO O INSTANCEOF VC PODE SABER SE UM OBJETO PERTENCE A DETERMINADA CLASSE/ESQUELETO/MODELO retornando valor booleano
    $kiwi = new Fruit();
    var_dump($kiwi instanceof Fruit);

?>