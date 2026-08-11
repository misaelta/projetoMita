<?php

if (isset($_POST["celsius"])) {


$temperatura = $_POST["celsius"];



function celsiusParaFahrenheit($celsius){
$fahrenheit =  ($celsius * 9/5) + 32;
return $fahrenheit;

}

 
$resultado = celsiusParaFahrenheit($temperatura);
echo " o resultado em Fahrenheit é: $resultado";

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
    <form action="exercicio18.php" method="POST">
<label for="">Digite a temperatura em Celsius</label>
<input placeholder="insira o numero" name="celsius"/>

<button type="submit">Confirmar</button>


</body>
</html>