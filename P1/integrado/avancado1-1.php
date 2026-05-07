<?php
    require_once "avancado1.php";

    class Turma {
        public $alunos=array();
        function carregarAlunos (){
            $hostname="localhost";
            $username="LeonardoAprendendo";
            $password="12345";
            $dbname="P1CSD";
            $usertable="alunos";

            $conn=mysqli_connect($hostname,$username,$password);
            mysqli_select_db($conn,$dbname);
            $query="SELECT * FROM $usertable";
            $result=mysqli_query($conn,$query);
            if($result){
                while($row=mysqli_fetch_array($result)){
                    $a= new Aluno($row['id'],$row['nome'],$row['cpf'],$row['email']);
                    array_push($this->alunos,$a);
                }
            }
        }

        function exibir(){
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>NOME</th><th>CPF</th><th>EMAIL</th></tr>";
            $i=0;
            while($i<count($this->alunos)){
                $a=$this->alunos[$i];
                echo "<tr><td>$a->id</td><td>$a->nome</td><td>$a->cpf</td><td>$a->email</td></tr>";
                $i++;
            }
            echo "</table>";
        }
    }
?>