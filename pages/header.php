<?php
session_start();
$nome = $_SESSION['usuario_nome'] ?? null;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hortifruti Felix</title>
    <!-- Fonte moderna e limpa -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --verde-principal: #2e7d32;
            --verde-escuro: #1b5e20;
            --verde-claro: #e8f5e9;
            --verde-hover: #4caf50;
            --texto-escuro: #2c3e50;
            --fundo: #f9fbf9;
            --sombra: 0 4px 6px rgba(0,0,0,0.08);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--fundo);
            color: var(--texto-escuro);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Topbar / Boas-vindas */
        #user-bar {
            background-color: var(--verde-escuro);
            color: white;
            padding: 8px 5%;
            font-size: 0.85rem;
            text-align: right;
        }

        /* Banner Principal */
        #banner {
            background: linear-gradient(135deg, var(--verde-principal), var(--verde-escuro));
            color: white;
            text-align: center;
            padding: 40px 20px;
            box-shadow: var(--sombra);
        }

        #banner h1 {
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: 1px;
        }

        /* Container Principal */
        #div_principal {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
            width: 100%;
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* Menu de Navegação / Categorias */
        #menu {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
        }

        #menu div a {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-color: white;
            color: var(--verde-principal);
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 12px;
            border: 2px solid var(--verde-claro);
            box-shadow: var(--sombra);
            transition: all 0.3s ease;
        }

        #menu div a:hover {
            background-color: var(--verde-principal);
            color: white;
            transform: translateY(-3px);
        }

        /* Ações Rápidas (Carrinho e Login) */
        #carrinho {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-top: 10px;
        }

        #carrinho div a {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s ease;
        }

        #carrinho_final a {
            background-color: var(--verde-principal);
            color: white;
        }

        #carrinho_final a:hover {
            background-color: var(--verde-escuro);
        }

        #login a {
            background-color: var(--verde-claro);
            color: var(--verde-escuro);
        }

        #login a:hover {
            background-color: #c8e6c9;
        }

        /* Rodapé */
        footer {
            background-color: var(--texto-escuro);
            color: white;
            padding: 30px 20px;
            margin-top: 40px;
        }

        #contatos {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 15px;
            text-align: center;
        }

        #contatos p {
            font-size: 0.95rem;
            opacity: 0.9;
        }

        /* Ajustes para Celular */
        @media (max-width: 600px) {
            #banner h1 {
                font-size: 1.4rem;
            }

            #carrinho {
                flex-direction: column;
            }

            #carrinho div a {
                text-align: center;
                width: 100%;
            }

            #contatos {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

    <!-- Bar de Usuário Logado -->
    <?php if (!empty($nome)): ?>
        <div id="user-bar">
            Olá, <strong><?php echo htmlspecialchars($nome); ?></strong>!
        </div>
    <?php endif; ?>

    <!-- Banner -->
    <header id="banner"> 
        <h1>HORTIFRUTI FELIX</h1>
        <p style="font-size: 0.9rem; margin-top: 5px; opacity: 0.9;">Produtos frescos direto para a sua mesa</p>
    </header>

    <!-- Conteúdo Principal -->
    <main id="div_principal"> 

        <!-- Seção de Ações Rápidas (Carrinho e Login) -->
        <div id="carrinho">
            <div id="carrinho_final">
                <a href="#">🛒 Meu Carrinho</a>
            </div>

            <div id="login">
                <a href="login.php"><?php echo !empty($nome) ? 'Minha Conta' : 'Entrar / Cadastrar'; ?></a>
            </div>
        </div>

        <!-- Categorias -->
        <nav id="menu">
            <div id="frutas">
                <a href="#">🍎 Frutas</a>
            </div>

            <div id="verduras">
                <a href="#">🥬 Verduras</a>
            </div>

            <div id="legumes">   
                <a href="#">🥕 Legumes</a>
            </div>
        </nav>

    </main>