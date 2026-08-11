<?php

if (isset($_POST["valor1"]) && (isset($_POST["valor2"]) && (isset($_POST["valor3"])))){



$comprimento = $_POST["valor1"];
$largura = $_POST["valor2"];
$altura = $_POST["valor3"];




$volumeDaCaixa = $comprimento * $largura * $altura;

$resultado = $volumeDaCaixa;


echo "o valor do volume da caixa é: $resultado";



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
    <form action = "exercicio30.php" method = "POST">
        <label for = "">Digite o valor do comprimento </label>
        <input placeholder = "comprimento" name= "valor1"/>

         <label for = "">Digite o valor da largura</label>
        <input placeholder = "largura" name= "valor2"/>

         <label for = "">Digite o valor da altura </label>
        <input placeholder = "altura" name= "valor3"/>
    
        <button type = "submit">Confirmar</button>


</form>
</body>
</html>