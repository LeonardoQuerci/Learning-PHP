<?php
    $host = "localhost";
    $dbname = "aprendendopod";
    $user = "usuario";
    $senha = "1234";

    try{
        // Ativa o modo de erros para facilitar o desenvolvimento
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$user,$senha);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Retorna arrays com nome das colunas por padrão
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        die("❌ Erro na conexão: " . $e->getMessage());
    }
?>