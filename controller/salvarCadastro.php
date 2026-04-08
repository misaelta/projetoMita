<?php

session_start();



$nome= $_POST['nome'];
$idade= $_POST['idade'];
$email= $_POST['email'];
$senha= $_POST['senha'];


$dadosUsuario = [
    'nome' => $nome,
    'idade' => $idade,
    'email' => $email,
    'senha' => $senha
];


//$_SESSION['usuarios'][] = $dadosUsuario;


header('Location: ../pages/login.php');
