<?php

if (isset($_POST["altura"]) && (isset($_POST["peso"]))){



$altura = $_POST["altura"];
$peso = $_POST["peso"];



$imc = $peso / $altura;

$resultado = $imc;


echo "O valor de seu IMC é $resultado";



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
    <form action = "exercicio27.php" method = "POST">
        <label for = "">Digite o seu peso </label>
        <input placeholder = "Insira o valor" name= "peso"/>

        <label for = "">Disgite sua altura</label>
        <input placeholder = "Insira o valor" name = "altura"/>

    
        <button type = "submit">Confirmar</button>


</form>
</body>
</html>