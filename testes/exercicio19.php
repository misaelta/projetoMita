<?php

if (isset($_POST["texto"])) {


$letras = $_POST["texto"];



function tamanhoTexto($texto){
$quantidadeDeLetras = strlen($texto);
return $quantidadeDeLetras;

}

 
$resultado = tamanhoTexto($letras);
echo " A Quantidade de Letras é: $resultado";

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
    <form action="exercicio19.php" method="POST">
<label for="">Digite o texto</label>
<input placeholder="insira o texto" name="texto"/>

<button type="submit">Confirmar</button>


</body>
</html>