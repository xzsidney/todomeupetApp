<?php
session_start();

// Função simples para proteger rotas logadas
function requireLogin() {
    if (!isset($_SESSION['usuario_id'])) {
        header("Location: ../login.php");
        exit;
    }
}
?>
