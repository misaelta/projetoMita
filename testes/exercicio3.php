<?php

if (isset($_POST["real"])){


$real = $_POST["real"];


function converterDolar($valor){
 $valorConvertido = $valor / 5;
    
    return $valorConvertido;

}
  

$resultado = converterDolar ($real);

echo " O valor em Dolar é: $resultado ";

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
    
<form action="exercicio3.php" method="POST">

<label for="">Digite o valor em Real</label>
<input placeholder="insira o numero" name="real"/>


<button type="submit"> Confirmar </button>

</form>

<br>
<br>



</body>
</html>