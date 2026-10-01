<?php
require_once 'banco.php';

$clientes = $db->query("SELECT * FROM cliente ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
$produtos = $db->query("SELECT * FROM produto ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ApeStore - Listagem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <a href="index.php" class="logo">Ape<span>Store</span></a>
        <nav>
            <a href="index.php">Início</a>
            <a href="cliente.php">Clientes</a>
            <a href="produto.php">Produtos</a>
            <a href="listar.php" class="ativo">Listar</a>
        </nav>
    </header>

    <div class="container">

        <div class="card">
            <h2>Clientes Cadastrados (<?= count($clientes) ?>)</h2>

            <?php if (empty($clientes)): ?>
                <p style="color: #888;">Nenhum cliente cadastrado ainda.</p>
            <?php else: ?>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Cidade/UF</th>
                    </tr>
                    <?php foreach ($clientes as $c): ?>
                        <tr>
                            <td><?= htmlspecialchars($c['id']) ?></td>
                            <td><?= htmlspecialchars($c['nome']) ?></td>
                            <td><?= htmlspecialchars($c['email']) ?></td>
                            <td><?= htmlspecialchars($c['telefone']) ?></td>
                            <td><?= htmlspecialchars($c['cidade']) ?>/<?= htmlspecialchars($c['estado']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>

        <div class="card">
            <h2>Produtos Cadastrados (<?= count($produtos) ?>)</h2>

            <?php if (empty($produtos)): ?>
                <p style="color: #888;">Nenhum produto cadastrado ainda.</p>
            <?php else: ?>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Qtd</th>
                        <th>Compra</th>
                        <th>Venda</th>
                        <th>Lucro</th>
                    </tr>
                    <?php foreach ($produtos as $p): 
                        $lucro = $p['valor_venda'] - $p['valor_compra'];
                    ?>
                        <tr>
                            <td><?= htmlspecialchars($p['id']) ?></td>
                            <td><?= htmlspecialchars($p['nome']) ?></td>
                            <td><?= htmlspecialchars($p['quantidade']) ?></td>
                            <td>R$ <?= number_format($p['valor_compra'], 2, ',', '.') ?></td>
                            <td>R$ <?= number_format($p['valor_venda'], 2, ',', '.') ?></td>
                            <td style="color: #4ade80;">R$ <?= number_format($lucro, 2, ',', '.') ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>

    </div>

    <footer>
        <p>Projeto acadêmico — Desenvolvimento de Sistemas</p>
    </footer>

</body>
</html>