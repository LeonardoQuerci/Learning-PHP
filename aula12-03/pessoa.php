<?php
    class Pessoa{
        public $nome;
        public $sexo;

        //metodo homonimo de classe não é mais construtor
        //construtor de classe(php só aceita um por classe)
        function __construct($wnome,$wsexo){
            $this->nome=$wnome;
            $this->sexo=$wsexo;
        }
        function __destruct(){
            //echo "<br>No destrutor de Pessoa <br>";
        }
        function display(){
            echo "<br>Nome: ".$this->nome;
            echo "<br>Sexo: ".$this->sexo."<br>";
        }
    }
?>