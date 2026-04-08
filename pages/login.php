<?php
session_start();

isset($_SESSION['usuarios']) ? $usuarios = $_SESSION['usuarios'] : $usuario = null;

isset($_SESSION['error']) ? $error = $_SESSION['error'] : $error = null;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="../controller/conferirLogin.php" method="POST">

<label for="">Email</label>
<input placeholder="email" name="email"/>


<label for="">Senha</label>
<input type="password" placeholder="senha" name="senha"/>
<label style="color:red;"><?= $error ?></label>

<button type="submit"> Confirmar</button>

</form>



<a href="../index.php"> Voltar </a>


</body>
</html>