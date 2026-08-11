<?php
include_once("../db/conexao.php");

class Usuario {
    private $db;

    public function __construct($conexao) {
        $this->db = $conexao;
    }

    public function pegarUsuario() {
        return $this->db->query("SELECT * FROM usuarios");
    }

    public function verificarLogin($email, $senha) {
        // Uso de Prepared Statement contra SQL Injection
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $result = $stmt->get_result();

        // Retorna um array com os dados do usuário se encontrado, ou null se não encontrar
        return $result->fetch_assoc();
    }
}