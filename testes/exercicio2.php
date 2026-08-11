<?php

if (isset($_POST["numero1"]) && (isset($_POST["numero2"]))){


$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];

function somar($numero1, $numero2){
 $soma = $numero1 + $numero2;
    
    return $soma;

}
  

$total = somar ($numero1, $numero2);

echo " Olá! a soma dos numeros é: $total ";

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
    
<form action="exercicio2.php" method="POST">

<label for="">Digite Numero1</label>
<input placeholder="insira o numero" name="numero1"/>

<label for="">Digite Numero2</label>
<input placeholder="insira o numero" name="numero2"/>


<button type="submit"> Confirmar </button>

</form>

<br>
<br>



</body>
</html>