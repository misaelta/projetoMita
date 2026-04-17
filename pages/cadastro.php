<?php

session_start();


isset($_SESSION['error_senha']) ? $error = $_SESSION['error_senha'] : $error=null;
isset($_SESSION['error_email']) ? $error_email = $_SESSION['error_email'] : $error_email=null;


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action= "../controller/salvarCadastro.php" method="POST">

<label for="">nome</label>
<input name="nome" />
<br>
<br>
<label for="">idade</label>
<input name="idade"/>
<br>
<br>
<label for="">email</label>
<input name="email"/>

<label style="color:red;"><?=$error_email?></label>
<br>
<br>
<label for="">senha</label>
<input name="senha" type="password"/>
<br>
<br>
<label for="">confirmar senha</label>
<input name="confirmarSenha"/>

<label style="color:red;"><?= $error ?></label>
<br>
<br>


<button type="submit">Confirmar</button>


</form>

<br>
<br>
<a href="../index.php"> Voltar </a>


</body>
</html>

<?php

unset($_SESSION['error_senha']);
unset($_SESSION['error_email']);


?>
