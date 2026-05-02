<?php
// register.php
session_start();
require_once 'includes/db.php';

$erro = '';
$sucesso = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';
    $telefone = $_POST['telefone'] ?? '';

    // Validar se e-mail já existe
    $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
    $stmt->execute(['email' => $email]);
    if ($stmt->fetch()) {
        $erro = 'Este e-mail já está cadastrado.';
    } else {
        // Inserir novo usuário
        $hash = password_hash($senha, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha, telefone) VALUES (:nome, :email, :senha, :telefone)");
        if ($stmt->execute(['nome' => $nome, 'email' => $email, 'senha' => $hash, 'telefone' => $telefone])) {
            $sucesso = 'Cadastro realizado com sucesso! Faça login para continuar.';
        } else {
            $erro = 'Ocorreu um erro ao cadastrar. Tente novamente.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Cadastro - TodoMeuPet</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { primary: "#006b5f", "primary-container": "#14b8a6", surface: "#f8f9ff", "on-surface": "#0b1c30" }
                }
            }
        }
    </script>
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-surface text-on-surface min-h-screen flex items-center justify-center p-4">

    <div class="max-w-md w-full bg-white rounded-3xl shadow-xl p-8 border border-slate-100">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-teal-600 tracking-tight mb-2">Criar Conta</h1>
            <p class="text-slate-500">Junte-se à comunidade TodoMeuPet.</p>
        </div>

        <?php if($erro): ?>
            <div class="bg-red-50 text-red-600 p-4 rounded-lg mb-6 text-sm text-center">
                <?= htmlspecialchars($erro) ?>
            </div>
        <?php endif; ?>

        <?php if($sucesso): ?>
            <div class="bg-green-50 text-green-700 p-4 rounded-lg mb-6 text-sm text-center font-medium">
                <?= htmlspecialchars($sucesso) ?>
                <br><br>
                <a href="login.php" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 inline-block">Fazer Login</a>
            </div>
        <?php else: ?>

            <form method="POST" action="register.php" class="space-y-4">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Nome Completo</label>
                    <input type="text" name="nome" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all" placeholder="Seu nome">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">E-mail</label>
                    <input type="email" name="email" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all" placeholder="seu@email.com">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Telefone (Opcional)</label>
                    <input type="tel" name="telefone" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all" placeholder="(11) 99999-9999">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Senha</label>
                    <input type="password" name="senha" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all" placeholder="••••••••">
                </div>

                <button type="submit" class="w-full py-3.5 mt-2 bg-primary-container text-white rounded-xl font-bold text-lg hover:bg-teal-600 shadow-lg shadow-teal-500/20 transition-all active:scale-95">
                    Cadastrar
                </button>
            </form>

        <?php endif; ?>

        <p class="text-center text-slate-500 text-sm mt-8">
            Já tem uma conta? <a href="login.php" class="text-primary font-bold hover:underline">Faça Login</a>
        </p>
    </div>

</body>
</html>
