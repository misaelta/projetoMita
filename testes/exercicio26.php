<?php

if (isset($_POST["velocidade"])){



$valorEmms = $_POST["velocidade"];





$calculo = $valorEmms * 3.6;

$resultado = $calculo;


echo "O resultado é $resultado Km/h ";



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
    <form action = "exercicio26.php" method = "POST">
        <label for = "">Digite o numero </label>
        <input placeholder = "Insira o valor" name= "velocidade"/>


    
        <button type = "submit">Confirmar</button>


</form>
</body>
</html>