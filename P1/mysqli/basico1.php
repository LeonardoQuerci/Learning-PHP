<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $hostname="localhost";
        $username="LeonardoAprendendo";
        $password="12345";
        $dbname="P1CSD";
        $usertable="alunos";
        $idpost=$_POST['id'];
        $nomepost=$_POST['nome'];
        $cpfpost=$_POST['cpf'];
        $emailpost=$_POST['email'];

        $conn=mysqli_connect($hostname,$username,$password) or die ("Não foi possivel efetuar a conexão");
        mysqli_select_db($conn,$dbname) or die ("Não foi possivel se conectar com esse BD");
        $query= "INSERT INTO $usertable VALUES ('$idpost','$nomepost','$cpfpost','$emailpost')";
        $result=mysqli_query($conn,$query);
        if($result){
            echo "Gravado com sucesso";
        }else{
            echo "Algo aconteceu, tente novamente";
        }
    }
?>