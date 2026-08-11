<?php

if (isset($_POST["largura"]) && isset($_POST["altura"]) ){


$largura = $_POST["largura"];
$altura = $_POST["altura"];


function calcularArea($largura,$altura){
$areaTotal = $largura * $altura;

return $areaTotal;

}

$resultado = calcularArea($largura,$altura);
echo "a area total é $resultado";

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
    <form action="exercicio15.php" method="POST">
<label for="">Digite a largura</label>
<input placeholder="insira a largura" name="largura"/>

<label for="">Digite a altura</label>
<input placeholder="insira a altura" name="altura">

<button type="submit">Confirmar</button>


</body>
</html>