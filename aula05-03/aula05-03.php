<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 05-03</title>
    <script>
        alert("JavaScript")
    </script>
</head>
<body>
	<h2>Teste de Formulário + PHP</h2>
    <form action="testform1.php" method="post">
        <label for="name">Nome</label>
        <input type="text" name="nome" request>
        <input type="submit">
    </form>
    <?php
        echo "<p>Escrito pelo PHP</p>";
    ?>
      
</body>
</html>

