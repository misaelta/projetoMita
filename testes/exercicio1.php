<?php

if (isset($_POST["nome"])){

$nome1 = $_POST["nome"];

function saudar($nome){
    return $nome;


}
$saudacao = saudar($nome1);

echo "Olá $saudacao! Seja bem Vindo.";
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
    
<form action="exercicio1.php" method="POST">

<label for="">Nome</label>
<input placeholder="insira o nome" name="nome"/>


<button type="submit"> Confirmar </button>

</form>

<br>
<br>


</body>
</html>