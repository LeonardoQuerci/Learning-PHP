<?php
    require "conexao.php";
    
    $cpf   = $_POST['cpf'];
    $nome  = $_POST['nome'];
    $nivel = $_POST['nivel'];
    $senha = $_POST['senha'];

    $erros = [];

    if(empty($cpf)){
        $erros[] = "O CPF É OBRIGATÓRIO";
    }
    if(empty($nome)){
        $erros[] = "O NOME É OBRIGATÓRIO";
    }
    if($nivel === ""){
        $erros[] = "O nível é obrigatório!";
    } elseif(!is_numeric($nivel)){
        $erros[] = "O nível deve ser um número!";
    }
    if(empty($senha)){
        $erros[] = "A SENHA É OBRIGATÓRIA";
    }else if(strlen($senha)<4){
        $erros[] = "A SENHA DEVER TER NO MINIMO 4 CARACTERES";
    }

    //SE EXISTIR ERROS 
    if(!empty($erros)){
        foreach($erros as $erro){
            echo "❌ " . $erro . "<br>";
        }
        echo "<br><a href='cadastrar.php'>Voltar</a>";
        exit;
    }


    $stmt = $pdo->prepare("INSERT INTO usuario (cpf, nome, nivel, senha) VALUES (:cpf, :nome, :nivel, :senha)");
    $stmt->execute([
        ":cpf" => $cpf,
        ":nome" => $nome,
        ":nivel" => $nivel,
        ":senha" => $senha
    ]);
    
    echo "✅ Usuário cadastrado com sucesso!";



?>