<?php
require_once 'banco.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: produto.php');
    exit;
}

$nome         = trim($_POST['nome']         ?? '');
$quantidade   = (int) ($_POST['quantidade'] ?? 0);
$valor_compra = (float) ($_POST['valor_compra'] ?? 0);
$valor_venda  = (float) ($_POST['valor_venda']  ?? 0);

if (empty($nome)) {
    $_SESSION['erro_produto'] = 'Informe o nome do produto.';
    header('Location: produto.php');
    exit;
}

if ($quantidade < 0) {
    $_SESSION['erro_produto'] = 'A quantidade não pode ser negativa.';
    header('Location: produto.php');
    exit;
}

if ($valor_compra < 0 || $valor_venda < 0) {
    $_SESSION['erro_produto'] = 'Os valores não podem ser negativos.';
    header('Location: produto.php');
    exit;
}

if ($valor_venda < $valor_compra) {
    $_SESSION['erro_produto'] = 'O valor de venda não pode ser menor que o valor de compra.';
    header('Location: produto.php');
    exit;
}

try {
    $stmt = $db->prepare("
        INSERT INTO produto (nome, quantidade, valor_compra, valor_venda)
        VALUES (:nome, :quantidade, :valor_compra, :valor_venda)
    ");
    $stmt->execute([
        ':nome'         => $nome,
        ':quantidade'   => $quantidade,
        ':valor_compra' => $valor_compra,
        ':valor_venda'  => $valor_venda,
    ]);

    $_SESSION['sucesso_produto'] = 'Produto cadastrado com sucesso!';
    header('Location: produto.php');
    exit;

} catch (PDOException $e) {
    $_SESSION['erro_produto'] = 'Erro ao cadastrar produto: ' . $e->getMessage();
    header('Location: produto.php');
    exit;
}
?>