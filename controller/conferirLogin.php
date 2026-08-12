<?php
session_start();

include_once("../db/conexao.php");
include_once("../models/usuario.php");

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

$userModel = new Usuario($con);
$usuario = $userModel->verificarLogin($email, $senha);

// Se $usuario contiver os dados (não for null/false), o login é válido
if ($usuario) {
    $_SESSION['usuario_id'] = $usuario['id'];
    $_SESSION['usuario_email'] = $usuario['email'];
    $_SESSION['usuario_nome'] = $usuario['nome'];
    
    header("Location: ../pages/paginaPrincipal.php");
    exit();
} else {
    $_SESSION['error'] = "Dados incorretos";
    header("Location: ../pages/login.php");
    exit();
}