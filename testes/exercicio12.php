<?php


if (isset($_POST["numero"])){


$numero = $_POST["numero"];


function calcularDobro($numero){
    $multiplicacao = $numero * 2;
return $multiplicacao;

}

$resultado = calcularDobro($numero);
echo "O Dobro do valor é: $resultado";

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

<form action = "exercicio12.php" method="POST">


<label>Coloque o numero</label>
<input placeholder = "Digite o numero" name="numero" />

<button type="submit">Confirmar</button>

</form>

    
</body>
</html>