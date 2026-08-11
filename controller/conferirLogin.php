<?php

include_once("../db/conexao.php");

session_start();

$usuarios = [];
$email =$_POST['email'];
$senha =$_POST['senha'];

foreach ($usuarios as $usuario) {

if($usuario['email']==$email && $usuario['senha']==strval($senha) ){
    header("location: ../pages/paginaPrincipal.php");
}else{
    $_SESSION['error']="Dados incorretos";
    header("location: ../pages/login.php");
}

}