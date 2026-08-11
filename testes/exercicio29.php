<?php

if (isset($_POST["valor"])){



$valorDoProduto = $_POST["valor"];



$porcentagemDoValor = $valorDoProduto * 0.07;

$resultado1 = $porcentagemDoValor;

echo "o valor do desconto é: $resultado1 <br>";

$valorComOdesconto = $valorDoProduto - $porcentagemDoValor;
$resultado2 = $valorComOdesconto;

echo "o valor com o Desconto é: $resultado2 <br>";

echo "o valor original do produto é: $valorDoProduto";



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
    <form action = "exercicio29.php" method = "POST">
        <label for = "">Digite o valor </label>
        <input placeholder = "Insira o valor" name= "valor"/>

    
        <button type = "submit">Confirmar</button>


</form>
</body>
</html>