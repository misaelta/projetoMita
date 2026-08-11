<?php

if (isset($_POST["valor"]) && (isset($_POST["porcentagem"]))){


$valor = $_POST["valor"];
$porcentagem = $_POST["porcentagem"];


function aplicarDesconto($valor, $porcentagem){
$porcentagemAjustada = $porcentagem / 100;
$desconto = $valor * $porcentagemAjustada;
$valorFinal = $valor - $desconto;
return $desconto;

}
  
$resultado = aplicarDesconto ($valor, $porcentagem);
echo "o resultado é: $resultado";


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
    
<form action="exercicio9.php" method="POST">

<label for="">Digite o valor desejado</label>
<input placeholder="Digite o valor" name="valor"/>

<label for="">Digite o valor da porcentagem desejada</label>
<input placeholder = "Digite o valor" name="porcentagem"/>


<button type="submit"> Confirmar </button>

</form>

<br>
<br>



</body>
</html>