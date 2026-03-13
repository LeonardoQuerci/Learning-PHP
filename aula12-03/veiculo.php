<?php
    class Veiculo{
        public $tipo;//1-moto,2-carro,3-caminonete
        public $modelo;
        public $marca;
        public $ano;

        function __construct($tipo,$marca,$modelo,$ano){
            $this->tipo=$tipo;
            $this->marca=$marca;
            $this->modelo=$modelo;
            $this->ano=$ano;
        }
        function __destruct(){
            //echo "<br>No destrutor de Pessoa <br>";
        }
        function display(){
            echo "\n<tr>";
            echo "<td>".$this->tipo."</td>";
            echo "<td>".$this->marca."</td>";
            echo "<td>".$this->modelo."</td>";
            echo "<td>".$this->ano."</td>";
            echo "</tr>";
        }
    }
?>