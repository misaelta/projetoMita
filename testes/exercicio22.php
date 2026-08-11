<?php

if (isset($_POST["variavel1"]) && (isset($_POST["variavel2"]) && (isset($_POST["variavel3"])))){

$val1 = $_POST["variavel1"];
$val2 = $_POST["variavel2"];
$val3 = $_POST["variavel3"];


$soma = $val1 + $val2 + $val3;

$media = $soma / 3;

echo "O resultado da média é: $media";


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
    
<form action ="exercicio22.php" method = "POST">
    <label for = ""> Digite o valor 1 </label>
    <input placeholder = "Insira o valor 1" name = "variavel1"/>




     <label for = ""> Digite o valor 2 </label>
    <input placeholder = "Insira o valor 2" name = "variavel2"/>




     <label for = ""> Digite o valor 3 </label>
    <input placeholder = "Insira o valor 3" name = "variavel3"/>


    <button type="submit" > Confirmar </button>


</form>



</body>
</html>