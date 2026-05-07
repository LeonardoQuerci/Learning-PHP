<?php
    require "conexao.php";

    $cpf = $_GET['cpf'];

    $stmt = $pdo->prepare("DELETE FROM usuario WHERE cpf = :cpf");
    $stmt->execute([
        ":cpf" => $cpf
    ]);
    echo "✅ Usuário deletado com sucesso!";
    echo "<br><a href='listar.php'>Voltar para a lista</a>";

?>