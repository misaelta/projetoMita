<?php

if (isset($_POST["nome"]) && (isset($_POST["saudacao"]))){


$nome = $_POST["nome"];
$saudacao = $_POST["saudacao"];


function mensagem($nome, $saudacao="bom dia"){
echo "$nome $saudacao" ;

}

mensagem ($nome);
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
    
<form action="exercicio6.php" method="POST">

<label for="">Digite seu nome</label>
<input placeholder="informe seu nome" name="nome"/>

<label for="">Digite uma saudacao</label>
<input placeholder="sua saudacao" name="saudacao"/>

<button type="submit"> Confirmar </button>

</form>

<br>
<br>



</body>
</html>