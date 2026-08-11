<?php

if (isset($_POST["frase"])){


$frase = $_POST["frase"];


function frases($frase){
$texto = str_word_count($frase);
return $texto;

}
  
$resultado = frases ($frase);
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
    
<form action="exercicio8.php" method="POST">

<label for="">Escreva a frase</label>
<input placeholder="Digite a frase" name="frase"/>


<button type="submit"> Confirmar </button>

</form>

<br>
<br>



</body>
</html>