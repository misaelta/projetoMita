<?php

if (isset($_POST["idade"])){


$idade = $_POST["idade"];


function ehMaiorDeIdade($idade){
if ($idade >= 18){
$resultado = true;


}else{
    $resultado = false;

}
return $resultado;
}

$resultado = ehMaiorDeIdade($idade);
if ($resultado == true){
echo "é maior de idade";
}else{
    echo "é menor de idade";
}



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
    <form action="exercicio14.php" method="POST">
<label for="">Digite a idade</label>
<input placeholder="insira a idade" name="idade"/>

<button type="submit">Confirmar</button>


</body>
</html>