<?php
    require "conexao.php";
    
    $cpf   = $_POST['cpf'];
    $nome  = $_POST['nome'];
    $nivel = $_POST['nivel'];
    $senha = $_POST['senha'];

    // Array que vai guardar os erros encontrados
    $erros = [];

    // Validação do nome
    if(empty($nome)){
        $erros[] = "O nome é obrigatório!";
    }

    // Validação do nível
    if($nivel === ""){
        $erros[] = "O nível é obrigatório!";
    } elseif(!is_numeric($nivel)){
        $erros[] = "O nível deve ser um número!";   
    }

    // Validação da senha
    if(empty($senha)){
        $erros[] = "A senha é obrigatória!";
    } elseif(strlen($senha) < 4){
        $erros[] = "A senha deve ter no mínimo 4 caracteres!";
    }

    // Se tiver erros, mostra e para tudo
    if(!empty($erros)){
        foreach($erros as $erro){
            echo "❌ " . $erro . "<br>";
        }
        echo "<br><a href='editar.php?cpf=$cpf'>Voltar</a>";
        exit;
    }

    $stmt = $pdo->prepare("UPDATE usuario SET cpf = :cpf, nome = :nome, nivel = :nivel, senha = :senha WHERE cpf = :cpf");
    $stmt->execute([
        ":cpf" => "$cpf",
        ":nome" => "$nome",
        ":nivel" => "$nivel",
        ":senha" => "$senha"
    ]);
    echo "✅ Usuário atualizado com sucesso!";
    echo "<br><a href='listar.php'>Voltar para a lista</a>";

?>