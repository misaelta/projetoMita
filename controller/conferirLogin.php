<?php
include_once("../db/conexao.php");
include_once("../models/usuario.php");

session_start();

$usuarios =pegarUsuario(); ;
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