<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $hostname="localhost";
        $username="LeonardoAprendendo";
        $password="12345";
        $dbname="P1CSD";
        $usertable="alunos";
        $key=$_POST['id'];
        $conn=mysqli_connect($hostname,$username,$password);
        mysqli_select_db($conn,$dbname);

        $query="SELECT * FROM $usertable WHERE id=$key";
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
    
?>