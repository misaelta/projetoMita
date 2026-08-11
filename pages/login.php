<?php
session_start();

$usuarios = $_SESSION['usuarios'] ?? null;
$error = $_SESSION['error'] ?? null;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            padding: 2.5rem;
            width: 100%;
            max-width: 420px;
        }

        .form-control:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 0.25rem rgba(99, 102, 241, 0.25);
        }

        .btn-primary {
            background-color: #4f46e5;
            border: none;
            padding: 0.75rem;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #4338ca;
            transform: translateY(-1px);
        }

        .input-group-text {
            background-color: #f8fafc;
            border-right: none;
        }

        .form-control {
            border-left: none;
        }

        .brand-icon {
            font-size: 2.5rem;
            color: #4f46e5;
        }
    </style>
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="login-card">
            
            <!-- Cabeçalho -->
            <div class="text-center mb-4">
                <div class="brand-icon mb-2">
                    <i class="bi bi-shield-lock-fill"></i>
                </div>
                <h4 class="fw-bold text-dark">Bem-vindo de volta</h4>
                <p class="text-muted small">Insira suas credenciais para acessar</p>
            </div>

            <!-- Formulário -->
            <form action="../controller/conferirLogin.php" method="POST">
                
                <!-- Campo E-mail -->
                <div class="mb-3">
                    <label for="email" class="form-label small fw-semibold text-secondary">E-mail</label>
                    <div class="input-group">
                        <span class="input-group-text text-muted" id="basic-addon1">
                            <i class="bi bi-envelope"></i>
                        </span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="seu@email.com" required>
                    </div>
                </div>

                <!-- Campo Senha -->
                <div class="mb-3">
                    <label for="senha" class="form-label small fw-semibold text-secondary">Senha</label>
                    <div class="input-group">
                        <span class="input-group-text text-muted">
                            <i class="bi bi-key"></i>
                        </span>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="••••••••" required>
                    </div>
                </div>

                <!-- Exibição de Erro -->
                <?php if ($error): ?>
                    <div class="alert alert-danger d-flex align-items-center gap-2 py-2 small" role="alert">
                        <i class="bi bi-exclamation-triangle-fill flex-shrink-0"></i>
                        <div><?= htmlspecialchars($error) ?></div>
                    </div>
                <?php endif; ?>

                <!-- Botão de Envio -->
                <button type="submit" class="btn btn-primary w-100 mt-2 mb-3">
                    Confirmar <i class="bi bi-arrow-right ms-1"></i>
                </button>
            </form>

            <!-- Link Voltar -->
            <div class="text-center mt-3 pt-2 border-top">
                <a href="../index.php" class="text-decoration-none small text-muted hover-underline">
                    <i class="bi bi-arrow-left me-1"></i> Voltar ao início
                </a>
            </div>

        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>