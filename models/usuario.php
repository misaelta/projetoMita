<?php
include_once("../db/conexao.php");


class Usuario{

private $db;


public function __construct (PDO $conexao){

$this->db=$conexao;

    }



function pegarUsuario($con){

$usuarios = $con->query("select * from usuarios  where 1");

return $usuarios;
}

}


