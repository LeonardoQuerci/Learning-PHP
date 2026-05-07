<?php
    require "conexao.php";

    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $erros = [];

    if(empty($cpf)){
        $erros[] = "O CPF é obrigatório!";
    }

    if(empty($senha)){
        $erros[] = "A senha é obrigatória!";
    }

    if(!empty($erros)){
        foreach($erros as $erro){
            echo "❌ " . $erro . "<br>";
        }
        echo "<br><a href='login.php'>Voltar</a>";
        exit;
    }

    $stmt = $pdo->prepare("SELECT * FROM usuario WHERE cpf = :cpf");
    $stmt->execute([
        ":cpf" => "$cpf"
    ]);
    $usuario = $stmt->fetch();

    if($usuario && password_verify($senha, $usuario['senha'])){
        session_start();

        $_SESSION['cpf'] = $usuario['cpf'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['nivel'] = $usuario['nivel'];

        header("Location: listar.php");
        exit;
    }else {
        echo "❌ CPF ou senha incorretos!";
        echo "<br><a href='login.php'>Voltar</a>";
    }

?>