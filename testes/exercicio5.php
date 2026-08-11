<?php

if (isset($_POST["peso"]) && (isset($_POST["altura"]))){


$peso = $_POST["peso"];
$altura = $_POST["altura"];


function imc($peso, $altura){
$imc = $peso / ($altura * $altura);

return $imc;

}

$resultado = imc ($peso, $altura);

echo "O seu imc é: $resultado";

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
    
<form action="exercicio5.php" method="POST">

<label for="">Digite o seu peso</label>
<input placeholder="insira um peso" name="peso"/>

<label for="">Digite a sua altura</label>
<input placeholder="insira um altura" name="altura"/>

<button type="submit"> Confirmar </button>

</form>

<br>
<br>



</body>
</html>