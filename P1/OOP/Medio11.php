<?php
    require_once "Medio1.php";

    class Funcionario extends Pessoa{
        public $cargo;
        public $salario;

        function __construct($wnome,$widade,$wcargo,$wsalario)
        {
            parent::__construct($wnome,$widade);
            $this->cargo=$wcargo;
            $this->salario=$wsalario;
        }
    }
?>