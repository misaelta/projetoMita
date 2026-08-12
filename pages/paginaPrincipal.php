<?php

session_start();

$nome =$_SESSION['usuario_nome'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1> BEM VINDO! <?= $nome ?> </h1>

</body>
</html>




