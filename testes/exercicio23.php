<?php

if (isset($_POST["valor1"])){



$valor = $_POST["valor1"];




$resultado = $valor * 0.15;


echo "15% do $valor é: $resultado";




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
    <form action = "exercicio23.php" method = "POST">
        <label for = "">Digite o numero </label>
        <input placeholder = "Insira o valor" name= "valor1"/>

        

        <button type = "submit">Confirmar</button>


</form>
</body>
</html>