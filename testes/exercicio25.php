<?php

if (isset($_POST["valor1"]) && (isset($_POST["valor2"]))){



$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];




$resultado1 = $valor1 **2;

$resultado2 = $valor2 **2;

$soma = $resultado1 + $resultado2;

echo "O resultado é $soma ";



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
    <form action = "exercicio25.php" method = "POST">
        <label for = "">Digite o numero </label>
        <input placeholder = "Insira o valor" name= "valor1"/>


        <label for = ""> Digite o valor </label>
        <input placeholder = "Insira o valor" name = "valor2"/>

    
        <button type = "submit">Confirmar</button>


</form>
</body>
</html>