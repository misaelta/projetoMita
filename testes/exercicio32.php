<?php

if (isset($_POST["valor1"]) && (isset($_POST["valor2"]) && (isset($_POST["valor3"])))){



$baseMaior = $_POST["valor1"];
$baseMenor = $_POST["valor2"];
$altura = $_POST["valor3"];


$area = (($baseMaior + $baseMenor) * $altura ) / 2;

$valorDaArea = $area;

echo "o valor da area do trapezio é: $valorDaArea";



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
    <form action = "exercicio32.php" method = "POST">
        <label for = "">Digite o valor da Base Maior</label>
        <input placeholder = "digite o valor" name= "valor1"/>

        <label for = "">Digite o valor da base menor </label>
        <input placeholder = "digite o valor" name= "valor2"/>

        <label for = "">Digite o valor da altura</label>
        <input placeholder = "digite o valor" name= "valor3"/>
         
    
        <button type = "submit">Confirmar</button>


</form>
</body>
</html>