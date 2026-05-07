<?php
    $hostname="localhost";
    $username="LeonardoAprendendo";
    $password="12345";
    $dbname="P1CSD";
    $usertable="alunos";
    $keyId=$_POST['id'];

    $conn=mysqli_connect($hostname,$username,$password);
    mysqli_select_db($conn,$dbname);
    $query="DELETE FROM $usertable WHERE id=$keyId";
    $result=mysqli_query($conn,$query);
    echo $result ? "DELETADO":"ERRO NA EXCLUSÃO";

?>