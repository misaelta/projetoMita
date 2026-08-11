<?php

if (isset($_POST["numero1"]) && (isset($_POST["numero2"]))){



$num1 = $_POST["numero1"];
$num2 = $_POST["numero2"];



$resultado = $num1 + $num2;

$multiplicacao = $resultado * $num1;

echo "O resultado final é: $multiplicacao";




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
    <form action = "exercicio21.php" method = "POST">
        <label for = "">Digite o numero 1 </label>
        <input placeholder = "Insira o numero" name= "numero1"/>

        <label for = "">Digite o numero 2 </label>
        <input placeholder = "Insira o numero" name= "numero2"/>


        <button type = "submit">Confirmar</button>


</form>
</body>
</html>