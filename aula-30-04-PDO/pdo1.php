<?php
    /*
    $key = $_POST['cpf'];
    $pdo = new PDO("mysql:host=localhost;dbname=aprendendopod", "usuario", "1234");

    $query = "select * from usuario where cpf=$key";
    $queryResult = $pdo->query($query);
    $usuario = $queryResult->fetch(PDO::FETCH_OBJ);
    echo "$usuario->nome <br>";
    echo "$usuario->nivel <br>";
    echo "<hr>";
    */
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $pdo = new PDO("mysql:host=localhost;dbname=aprendendopod", "usuario", "1234");

    // 1. Buscamos o usuário apenas pelo CPF usando Prepared Statements (?)
    $stmt = $pdo->prepare("SELECT * FROM usuario WHERE cpf = ?");
    $stmt->execute([$cpf]);
    $usuario = $stmt->fetch();

    if (!$usuario) {
        echo "CPF NÃO ENCONTRADO";
    } else {
        // 2. Agora verificamos se a senha informada é a mesma do banco de dados
        // Dica: No futuro, use password_verify() para senhas criptografadas!
        if ($usuario['senha'] === $senha) {
            echo "Login realizado com sucesso! Bem-vindo, " . $usuario['nome'];
        } else {
            echo "Senha incorreta";
        }
    }
    echo "<hr>";
?>