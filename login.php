<?php
// login.php
session_start();
require_once 'includes/db.php';

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Simulação didática simples (em produção usar password_hash e password_verify)
    // Para simplificar, sem PDO prepare completo apenas para exibir a tela
    // Mas vamos usar prepare por boas práticas
    $stmt = $pdo->prepare("SELECT id, nome, senha FROM usuarios WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $usuario = $stmt->fetch();

    if ($usuario && password_verify($senha, $usuario['senha'])) {
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];
        header('Location: app/dashboard.php');
        exit;
    } else {
        $erro = 'E-mail ou senha inválidos.';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login - TodoMeuPet</title>
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
            <h1 class="text-3xl font-bold text-teal-600 tracking-tight mb-2">TodoMeuPet</h1>
            <p class="text-slate-500">Bem-vindo de volta! Acesse a área do tutor.</p>
        </div>

        <?php if($erro): ?>
            <div class="bg-red-50 text-red-600 p-4 rounded-lg mb-6 text-sm text-center">
                <?= htmlspecialchars($erro) ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="login.php" class="space-y-5">
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">E-mail</label>
                <input type="email" name="email" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all" placeholder="seu@email.com">
            </div>
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">Senha</label>
                <input type="password" name="senha" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all" placeholder="••••••••">
            </div>
            
            <div class="flex justify-between items-center text-sm">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" class="rounded text-primary focus:ring-primary/20">
                    <span class="text-slate-600">Lembrar de mim</span>
                </label>
                <a href="#" class="text-primary hover:underline font-medium">Esqueceu a senha?</a>
            </div>

            <button type="submit" class="w-full py-3.5 bg-primary-container text-white rounded-xl font-bold text-lg hover:bg-teal-600 shadow-lg shadow-teal-500/20 transition-all active:scale-95">
                Entrar
            </button>
        </form>

        <p class="text-center text-slate-500 text-sm mt-8">
            Ainda não tem uma conta? <a href="register.php" class="text-primary font-bold hover:underline">Cadastre-se</a>
        </p>
    </div>

</body>
</html>
