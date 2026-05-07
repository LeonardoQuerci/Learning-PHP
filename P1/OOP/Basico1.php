<?php
    class Produto{
        public $nome;
        public $preco;
        public $estoque;

        function __construct($wnome,$wpreco,$westoque)
        {
            $this->nome=$wnome;
            $this->preco=$wpreco;
            $this->estoque=$westoque;
        }
        function exibir(){
            echo "Nome: ". $this->nome."<br>";
            echo "Preço: ". $this->preco."<br>";
            echo "Estoque: ". $this->estoque."<br>";
        }

    }
    $p1= new Produto("Arroz",5000,4);
    $p2= new Produto("Uva",10,12);
    $p3= new Produto("Feijao",110000,7);
    $produtos=[$p1,$p2,$p3];
    
    foreach ($produtos as $produto){
        $produto->exibir();
        echo "<hr>";
    }

    //descobrir o maior 
    $maior=$p1;
    foreach($produtos as $produto){
        if ($produto->preco>$maior->preco){
            $maior=$produto;
        }
    }
    echo "O maior preco é o do(a) ". $maior->nome;
?>