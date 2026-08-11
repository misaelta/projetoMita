<?php

if (isset($_POST["valor1"])){



$valor = $_POST["valor1"];




$resultado1 = $valor * 0.05;

echo "5% de $valor é: $resultado1";

echo "<br>";

$resultado2 = $valor * 0.50;

echo "50% de $valor é: $resultado2";



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
    <form action = "exercicio24.php" method = "POST">
        <label for = "">Digite o numero </label>
        <input placeholder = "Insira o valor" name= "valor1"/>

        

        <button type = "submit">Confirmar</button>


</form>
</body>
</html>