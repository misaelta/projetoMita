<?php

$servername="localhost";
$username="root";
$password="";
$dbname="projeto_mita";




$con= new mysqli($servername,$username,$password,$dbname);


if($con->connect_error){
    die("Conexao falhou");
}




