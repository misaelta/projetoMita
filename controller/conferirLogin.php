<?php

session_start();
isset($_SESSION['usuarios']) ? $usuarios = $_SESSION['usuarios'] : $usuario = null;

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