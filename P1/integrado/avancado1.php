<?php
    class Aluno{
        public $id;
        public $nome;
        public $cpf;
        public $email;

        function __construct($wid,$wnome,$wcpf,$wemail)
        {
            $this->id=$wid;
            $this->nome=$wnome;
            $this->cpf=$wcpf;
            $this->email=$wemail;
        }
        function salvar(){
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $hostname="localhost";
                $username="LeonardoAprendendo";
                $password="12345";
                $dbname="P1CSD";
                $usertable="alunos";

                $keyId=$this->id;            
                $keyNome=$this->nome;            
                $keyCPF=$this->cpf;            
                $keyEmail=$this->email;
                
                $conn=mysqli_connect($hostname,$username,$password);
                mysqli_select_db($conn,$dbname);
                $query="INSERT INTO $usertable VALUES ('$keyId','$keyNome','$keyCPF','$keyEmail')";
                $result=mysqli_query($conn,$query);
                if($result){
                    echo "<h3>Dados Gravado com Sucesso</h3>";
                }
            }
        }

        static function buscar($keyId){
            $hostname="localhost";
            $username="LeonardoAprendendo";
            $password="12345";
            $dbname="P1CSD";
            $usertable="alunos";

            $conn=mysqli_connect($hostname,$username,$password);
            mysqli_select_db($conn,$dbname);
            $query="SELECT * FROM $usertable WHERE id=$keyId";
            $result=mysqli_query($conn,$query);
            if($result){
                while($row=mysqli_fetch_array($result)){
                    $id=$row['id'];
                    $nome=$row['nome'];
                    $cpf=$row['cpf'];
                    $email=$row['email'];
                    echo "ID: $id | Nome: $nome | CPF: $cpf | Email: $email <br>";
                }
            }
        }
    }

?>