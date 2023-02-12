<?php

    // class é o objeto/esqueleto que será criado
    class Fruit {

        //propriedades/componentes/variaveis
        public $name;
        public $color;

        //metodos/acoes/funcoes
        function set_name($name) {
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }

    }

    //criar nova instancia da classe/clonar esqueleto
    $apple = new Fruit();
    $apple->set_name('Apple');

    $banana = new Fruit();
    $banana->set_name('Banana');

    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();

?>