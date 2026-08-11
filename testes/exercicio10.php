<?php


$lista = [10, 20, 30, 40, 10];


function listaNumeros($lista){
    $somaTotal = 0;
foreach($lista as $numero){
    $somaTotal = $numero + $somaTotal;
}
return $somaTotal;
}
  
$resultado = listaNumeros ($lista);
echo "o resultado é: $resultado";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="exercicio10.php" method="POST">

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