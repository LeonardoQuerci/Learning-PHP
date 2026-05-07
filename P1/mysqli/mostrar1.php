
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $hostname="localhost";
        $username="LeonardoAprendendo";
        $dbname="P1CSD";
        $password="12345";
        $usertable="alunos";

        $conn=mysqli_connect($hostname,$username,$password) or die ("Erro");
        mysqli_select_db($conn,$dbname);
        $query="SELECT * FROM $usertable";
        $result=mysqli_query($conn,$query);
        if($result){
            while($row=mysqli_fetch_array($result)){
                $id = $row['id'];
                $nome = $row['nome'];
                $cpf = $row['cpf'];
                $email = $row['email'];
                echo "ID: $id | Nome: $nome | CPF: $cpf | Email: $email <br>";
            }
        }
    }

?>