<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once "usuario.php";
        require_once "veiculo.php";

        $us= new Usuario("Leonardo","Masculino","123456788","Rua aleatoria teste, 170");
        $us->addVeiculo(new Veiculo("1","Ferrari", "s90 spider","2025"));
        $us->addVeiculo(new Veiculo("2","Porsche", "cayenne coupé","2025"));

        $us->display();

    ?>
</body>
</html>