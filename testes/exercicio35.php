<?php

if (isset($_POST["valor1"]) && (isset($_POST["valor1"]))){



$km = $_POST["valor1"];
$litros = $_POST["valor2"];



$consumoMedio = $km / $litros;

$resultado = $consumoMedio;


echo "o consumo medio do veículo é $resultado litro/km";


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
    <form action = "exercicio35.php" method = "POST">
        <label for = "">Digite o valor do km</label>
        <input placeholder = "digite o valor" name= "valor1"/>

        <label for = "">Digite o valor do litro</label>
        <input placeholder = "digite o valor" name= "valor2"/>
    
        <button type = "submit">Confirmar</button>


</form>
</body>
</html>