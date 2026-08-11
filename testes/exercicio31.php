<?php

if (isset($_POST["valor"])){



$valor = $_POST["valor"];


$desconto = $valor * 0.27;

$valorComOdesconto = $valor - $desconto;

echo "o valor do desconto: $valorComOdesconto";



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
    <form action = "exercicio31.php" method = "POST">
        <label for = "">Digite o valor </label>
        <input placeholder = "digite o valor" name= "valor"/>

         
    
        <button type = "submit">Confirmar</button>


</form>
</body>
</html>