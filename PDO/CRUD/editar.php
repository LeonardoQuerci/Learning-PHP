<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
</head>
<body>

    <h2>Editar Usuário</h2>

    <?php
        require "conexao.php";

        // Pega o CPF que veio na URL
        $cpf = $_GET['cpf'];

        // Busca os dados desse usuário no banco
        $stmt = $pdo->prepare("SELECT * FROM usuario WHERE cpf = :cpf");
        $stmt->execute([':cpf' => $cpf]);
        $usuario = $stmt->fetch();
    ?>

    <form action="atualizar.php" method="POST">

        <label>CPF:</label>
        <input type="text" name="cpf" value="<?php echo $usuario['cpf']; ?>" readonly><br><br>

        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>"><br><br>

        <label>Nível:</label>
        <input type="number" name="nivel" value="<?php echo $usuario['nivel']; ?>"><br><br>

        <label>Senha:</label>
        <input type="text" name="senha" value="<?php echo $usuario['senha']; ?>"><br><br>

        <button type="submit">Salvar alterações</button>
        <a href="listar.php">Cancelar</a>

    </form>

</body>
</html>