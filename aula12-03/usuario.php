<?php
    require_once "pessoa.php";
    require_once "veiculo.php";
    
    class Usuario extends Pessoa{
        public $cpf;
        public $endereco;
        public $veiculos= array();

        function __construct($wnome, $wsexo, $wcpf, $wendereco){
            parent::__construct($wnome,$wsexo);
            $this->cpf=$wcpf;
            $this->endereco=$wendereco;
        }
        function __destruct(){
            //echo "<br>No destrutor de Usuario <br>";
        }
        function display(){
            parent::display();
            echo "CPF = " .$this->cpf."<br>";
            echo "Endereco = ".$this->endereco."<br>";
            $this->mostraVeiculos();
        }
        function addVeiculo($v){
            array_push($this->veiculos, $v);
        }

        function mostraVeiculos(){
            $i=0;
            echo "\n<table border>\n";
            echo "<tr style= 'color:red; font-family: arial; border: 3px solid blue'>";
            echo "<td>Tipo</td>        <td>Marca</td>        <td>Modelo</td>       <td>Ano</td>" ;
            echo "</tr>";
            while($i<count($this->veiculos)){
                $this->veiculos[$i]->display();
                $i++;
            }
            echo "\n</table>\n";
        }
    }
?>