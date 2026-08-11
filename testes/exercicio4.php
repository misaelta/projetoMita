<?php

if (isset($_POST["numero"])){


$numero = $_POST["numero"];


function ehPar($inteiro){

if ($inteiro % 2 == 0){ 
 $resultado = true; 

}else{
    $resultado = false;
}

    return $resultado;

}
  

$resultado = ehPar ($numero);

if ($resultado == true){
    echo "Par";
}else{
    echo "impar";
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
    
<form action="exercicio4.php" method="POST">

<label for="">Digite o valor</label>
<input placeholder="insira o numero" name="numero"/>


<button type="submit"> Confirmar </button>

</form>

<br>
<br>



</body>
</html>