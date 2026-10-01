<?php
require_once 'banco.php';
session_start();

$sucesso = $_SESSION['sucesso_produto'] ?? '';
$erro    = $_SESSION['erro_produto']    ?? '';
unset($_SESSION['sucesso_produto'], $_SESSION['erro_produto']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ALIM - Cadastrar Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <a href="index.php" class="logo">AL<span>IM</span></a>
        <nav>
            <a href="index.php">Início</a>
            <a href="cliente.php">Clientes</a>
            <a href="produto.php" class="ativo">Produtos</a>
        </nav>
    </header>

    <div class="container">

        <div class="card">
            <h2>Cadastro de Produto</h2>

            <?php if (!empty($sucesso)): ?>
                <div class="mensagem-sucesso"><?= htmlspecialchars($sucesso) ?></div>
            <?php endif; ?>

            <?php if (!empty($erro)): ?>
                <div class="mensagem-erro"><?= htmlspecialchars($erro) ?></div>
            <?php endif; ?>

            <form method="POST" action="dados_produto.php">

                <div class="campo">
                    <label for="nome">Nome do Produto</label>
                    <input type="text" id="nome" name="nome" placeholder="Ex: Camiseta Oversized" required>
                </div>

                <div class="campo">
                    <label for="quantidade">Quantidade em Estoque</label>
                    <input type="number" id="quantidade" name="quantidade" min="0" required>
                </div>

                <div class="campo">
                    <label for="valor_compra">Valor de Compra (R$)</label>
                    <input type="number" id="valor_compra" name="valor_compra" step="0.01" min="0" required>
                </div>

                <div class="campo">
                    <label for="valor_venda">Valor de Venda (R$)</label>
                    <input type="number" id="valor_venda" name="valor_venda" step="0.01" min="0" required>
                </div>

                <button type="submit" class="botao">Cadastrar Produto</button>
            </form>
        </div>

    </div>

    <footer>
        <p>Projeto acadêmico — Desenvolvimento de Sistemas</p>
    </footer>

</body>
</html>