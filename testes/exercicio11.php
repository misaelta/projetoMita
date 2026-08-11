<?php


if (isset($_POST["nome"])){


$nome = $_POST["nome"];


function saudar($nome){
echo "Olá, $nome, seja bem-vindo ao PHP!";

}
saudar($nome);

}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action = "exercicio11.php" method="POST">


<label>Coloque o seu nome</label>
<input placeholder = "Digite o nome" name="nome" />

<button type="submit">Confirmar</button>

</form>

    
</body>
</html>

