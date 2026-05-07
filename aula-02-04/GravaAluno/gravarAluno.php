<?php
    $hostname="localhost";
    $username="Leonardo";
    $password="12345";
    $dbname="meuDB";
    $usertable="aluno";

    $key_name=$_POST['name'];
    $key_id=$_POST['id'];
    $key_email=$_POST['email'];
    $key_cpf=$_POST['cpf'];
    
    $conn=mysqli_connect($hostname,$username,$password) or die ("Unable to connect to database");
    mysqli_select_db($conn,$dbname);
    echo "<h1>Inserindo dados do aluno com ID = $key_id ";
    $query= "INSERT INTO $usertable VALUES ('$key_id','$key_name','$key_cpf','$key_email')";
    $result= mysqli_query($conn,$query);
    if ($result){
        echo "ok";
    }else{
        echo "Não houve Resultados";
    }

?>