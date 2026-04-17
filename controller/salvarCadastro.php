<?php

session_start();

$nome= $_POST['nome'];
$idade= $_POST['idade'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$confirmarSenha= $_POST['confirmarSenha'];
$usuarios=$_SESSION['usuarios'];

if($senha != $confirmarSenha){ 
    $_SESSION['error_senha']="senha não confere";
    header("location: ../pages/cadastro.php");

    exit();
}
   
foreach ($usuarios as $usuario) {

if($usuario['email']==$email ){
    
    $_SESSION['error_email']="Esse email já existe";
    header("location: ../pages/cadastro.php");

    exit();
}

}



$dadosUsuario = [
    'nome' => $nome,
    'idade' => $idade,
    'email' => $email,
    'senha' => $senha
];


$_SESSION['usuarios'][] = $dadosUsuario;
header('location: ../pages/login.php');