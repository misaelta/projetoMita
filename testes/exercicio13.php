<?php


if (isset($_POST["hora"])){


$horas = $_POST["hora"];


function converterMinutos($horas){
    $minutos = $horas * 60;
return $minutos;

}

$resultado = converterMinutos($horas);
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

<form action = "exercicio13.php" method="POST">


<label>Coloque a Hora</label>
<input placeholder = "Digite a hora" name="hora" />

<button type="submit">Confirmar</button>

</form>

    
</body>
</html>