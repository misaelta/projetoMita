<?php

if (isset($_POST["nota1"]) && (isset($_POST["nota2"]) && (isset($_POST["nota3"])))){



$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];


$mediaPonderada = ($nota1 * 2) + ($nota2 * 3) + ($nota3 * 5);

$media = $mediaPonderada / 10;

$resultado = $media;

echo "a sua media é: $resultado";



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
    <form action = "exercicio33.php" method = "POST">
        <label for = "">Digite o valor da nota 1</label>
        <input placeholder = "digite o valor" name= "nota1"/>

        <label for = "">Digite o valor da nota 2 </label>
        <input placeholder = "digite o valor" name= "nota2"/>

        <label for = "">Digite o valor da nota 3</label>
        <input placeholder = "digite o valor" name= "nota3"/>
         
    
        <button type = "submit">Confirmar</button>


</form>
</body>
</html>