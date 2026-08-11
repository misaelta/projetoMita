<?php
include_once("../db/conexao.php");
session_start();

$nome= $_POST['nome'];
$idade= $_POST['idade'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$confirmarSenha= $_POST['confirmarSenha'];
$data_criado= time();


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



$con->query(" INSERT INTO usuarios(nome,idade,email,senha,data_criado) VALUES('$nome','$idade','$email','$senha','$data_criado')");
header('location: ../pages/login.php');