<?php
require_once 'banco.php';
session_start();

$sucesso = $_SESSION['sucesso_cliente'] ?? '';
$erro    = $_SESSION['erro_cliente']    ?? '';
unset($_SESSION['sucesso_cliente'], $_SESSION['erro_cliente']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ALIM - Cadastrar Cliente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <a href="index.php" class="logo">AL<span>IM</span></a>
        <nav>
            <a href="index.php">Início</a>
            <a href="cliente.php" class="ativo">Clientes</a>
            <a href="produto.php">Produtos</a>
        </nav>
    </header>

    <div class="container">

        <div class="card">
            <h2>Cadastro de Cliente</h2>

            <?php if (!empty($sucesso)): ?>
                <div class="mensagem-sucesso"><?= htmlspecialchars($sucesso) ?></div>
            <?php endif; ?>

            <?php if (!empty($erro)): ?>
                <div class="mensagem-erro"><?= htmlspecialchars($erro) ?></div>
            <?php endif; ?>

            <form method="POST" action="dados_cliente.php">

                <div class="campo">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome" placeholder="Ex: João da Silva" required>
                </div>

                <div class="campo">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="joao@email.com" required>
                </div>

                <div class="campo">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" placeholder="(11) 99999-9999" required>
                </div>

                <div class="campo">
                    <label for="rua">Rua</label>
                    <input type="text" id="rua" name="rua" required>
                </div>

                <div class="campo">
                    <label for="numero">Número</label>
                    <input type="text" id="numero" name="numero" required>
                </div>

                <div class="campo">
                    <label for="complemento">Complemento</label>
                    <input type="text" id="complemento" name="complemento">
                </div>

                <div class="campo">
                    <label for="bairro">Bairro</label>
                    <input type="text" id="bairro" name="bairro" required>
                </div>

                <div class="campo">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade" required>
                </div>

                <div class="campo">
                    <label for="estado">Estado</label>
                    <input type="text" id="estado" name="estado" maxlength="2" placeholder="SP" required>
                </div>

                <button type="submit" class="botao">Cadastrar Cliente</button>
            </form>
        </div>

    </div>

    <footer>
        <p>Projeto acadêmico — Desenvolvimento de Sistemas</p>
    </footer>

</body>
</html>