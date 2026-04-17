<?php

$servername="localhost";
$username="root";
$password="";
$dbname="projeto_mita";




$con= new mysqli($servername,$username,$password,$dbname);


if($con->connect_error){
    die("Conexao falhou");
}


$usuarios = $con->query("select * from usuario  where 1");


foreach($usuarios as $user){

echo "<br>";
echo $user['idade'];
echo "<br>";

}