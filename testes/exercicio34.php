<?php

if (isset($_POST["valor"])){



$valor = $_POST["valor"];



$juros = $valor * 0.16;

$valorDoProduto = $valor + $juros;

$parcelas = $valorDoProduto / 10;


echo "o valor total da compra é $valorDoProduto e o valor das parcelas é $parcelas em 10 vezes";



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
    <form action = "exercicio34.php" method = "POST">
        <label for = "">Digite o valor</label>
        <input placeholder = "digite o valor" name= "valor"/>

        
    
        <button type = "submit">Confirmar</button>


</form>
</body>
</html>