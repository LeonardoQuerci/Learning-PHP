<?php
    $hostname="localhost";
    $username="Leonardo";
    $password="12345";
    $dbname="meuDB";
    $usertable="aluno";
    $key=$_POST['id'];

    $conn=mysqli_connect($hostname,$username,$password) or die ("Unable to connexto to database !");
    mysqli_select_db($conn, $dbname) or die("Unable to select dbname");
    echo "<h1> Dados do aluno com ID = $key </h1>";

    $query = "SELECT * FROM $usertable where id=$key ";
    $result = mysqli_query($conn,$query);
    if($result){
        while($row = mysqli_fetch_array($result)){
            $id= $row['ID'];
            $nome= $row['Nome'];
            $cpf= $row['CPF'];
            $email= $row['email'];
            echo "ID: ". $id . "<br>Nome: ". $nome . "<br>CPF: " . $cpf . "<br>Email: " . $email . "<br>" ;
        }
    }else{
        echo "Não Houve Resultados";
    }
?>