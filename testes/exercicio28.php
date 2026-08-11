<?php

if (isset($_POST["valor"])){



$valor = $_POST["valor"];



$porcentagemDoValor = $valor * 0.09;

$resultado = $porcentagemDoValor;


echo "9% do valor incluído é: $resultado";



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
    <form action = "exercicio28.php" method = "POST">
        <label for = "">Digite o valor </label>
        <input placeholder = "Insira o valor" name= "valor"/>

    
        <button type = "submit">Confirmar</button>


</form>
</body>
</html>