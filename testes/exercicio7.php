
<?php

if (isset($_POST["numero1"]) && (isset($_POST["numero2"]) && (isset($_POST["numero3"])))){


$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$numero3 = $_POST["numero3"];


function numeros($numero1, $numero2, $numero3){

if($numero1 > $numero2 && $numero1 > $numero3){
    return $numero1;
}elseif($numero2 > $numero1 && $numero2 > $numero3){
    return $numero2;
}else{
    return $numero3;
}
}

$resultado = numeros ($numero1, $numero2, $numero3);
echo "o maior numero é : $resultado ";

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
    
<form action="exercicio7.php" method="POST">

<label for="">Digite o numero 1</label>
<input placeholder="informe o numero 1" name="numero1"/>

<label for="">Digite o numero 2</label>
<input placeholder="informe o numero 2" name="numero2"/>

<label for="">Digite o numero 3</label>
<input placeholder="informe o numero 3" name="numero3"/>

<button type="submit"> Confirmar </button>

</form>

<br>
<br>



</body>
</html>