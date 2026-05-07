<?php
    session_start();

    if(empty($_SESSION['cpf'])){
        header("Location: login.php");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listar Usuários</title>
</head>
<body>
    <p>
        Bem vindo, <?php echo $_SESSION['nome'];?>
        <a href="logout.php">Sair</a>
    </p>

    <h2>Usuários Cadastrados</h2>

    <a href="cadastrar.php">+ Cadastrar novo usuário</a>

    <br><br>

    <table border="1" cellpadding="8">
        <tr>
            <th>CPF</th>
            <th>Nome</th>
            <th>Nível</th>
            <th>Ações</th>
        </tr>

        <?php
            require "conexao.php";

            $stmt = $pdo->query("SELECT * FROM usuario");
            $usuarios = $stmt->fetchAll();

            foreach($usuarios as $usuario){
                echo "<tr>";
                echo "<td>" . $usuario['cpf']   . "</td>";
                echo "<td>" . $usuario['nome']  . "</td>";
                echo "<td>" . $usuario['nivel'] . "</td>"; 
                echo "<td>";
                echo "<a href='editar.php?cpf=" . $usuario['cpf'] . "'>Editar</a> | ";
                echo "<a href='deletar.php?cpf=" . $usuario['cpf'] . "' onclick='return confirm(\"Tem certeza que deseja deletar?\")'>Deletar</a>";
                echo "</td>";
            }
        ?>

    </table>

</body>
</html>