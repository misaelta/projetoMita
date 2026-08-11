<?php

if (isset($_POST["nome"]) && isset($_POST["mensagem"]) ){


$nome = $_POST["nome"];
$mensagem = $_POST["mensagem"];


function mensagemUsuario($nome,$mensagem="bom dia"){
echo "$mensagem $nome";


}
 mensagemUsuario($nome,$mensagem);

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
    <form action="exercicio16.php" method="POST">
<label for="">Digite o seu nome</label>
<input placeholder="insira o nome" name="nome"/>

<label for="">Digite a mensagem</label>
<input placeholder="insira a mensagem" name="mensagem">

<button type="submit">Confirmar</button>


</body>
</html>