<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $hostname="localhost";
        $username="LeonardoAprendendo";
        $password="12345";
        $dbname="P1CSD";
        $usertable="alunos";
        $keyId=$_POST['id'];
        $keyEmail=$_POST['email'];

        $conn=mysqli_connect($hostname,$username,$password);
        mysqli_select_db($conn,$dbname);
        $query="UPDATE $usertable SET email='$keyEmail' WHERE id=$keyId ";
        $result=mysqli_query($conn,$query);
        echo $result ? "ATUALIZADO":"ERRO NO UPDATE";
    }

?>