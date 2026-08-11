<?php

if (isset($_POST["numero1"]) && isset($_POST["numero2"]) ){


$num1 = $_POST["numero1"];
$num2 = $_POST["numero2"];


function encontrarMaior($num1,$num2){
if($num1 > $num2){
echo "o maior é: $num1";
}else{ 
    echo "o numero $num2 é o maior";

}

}
 
$resultado = encontrarMaior($num1,$num2);

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
    <form action="exercicio17.php" method="POST">
<label for="">Digite o primeiro numero</label>
<input placeholder="insira o numero" name="numero1"/>

<label for="">Digite o segundo numero</label>
<input placeholder="insira o numero" name="numero2">

<button type="submit">Confirmar</button>


</body>
</html>