<?php
// Configurações do Banco de Dados
$host = '127.0.0.1'; // ou localhost
$db   = 'todomeupet_db';
$user = 'root'; // ajuste conforme seu ambiente
$pass = ''; // ajuste conforme seu ambiente
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Mostra os erros do banco
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Traz os dados como Array Associativo
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // Para um projeto real, é melhor não exibir o erro cru na tela por segurança.
    // Mas para fins didáticos, mostrar o erro ajuda os alunos a depurarem.
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
?>
