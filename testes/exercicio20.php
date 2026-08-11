<?php

if (isset($_POST["lista"])){ 

$lista = explode(",",$_POST["lista"]) ;



function somarLista($listaNumero){
$soma = array_sum($listaNumero);
return $soma;


}

$resultado = somarLista($lista);
echo "O resultado da Soma de Numeros é: $resultado";

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
    <form action="exercicio20.php" method= "POST" >
        <label for = "">Digite o valor </label>
        <input placeholder = "insira o numero" name="lista" />

        <button type= "submit"> confirmar </button>

</form>  
</body>
</html>