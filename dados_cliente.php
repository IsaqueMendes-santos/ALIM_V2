<?php
require_once 'banco.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: cliente.php');
    exit;
}

$nome        = trim($_POST['nome']        ?? '');
$email       = trim($_POST['email']       ?? '');
$telefone    = trim($_POST['telefone']    ?? '');
$rua         = trim($_POST['rua']         ?? '');
$numero      = trim($_POST['numero']      ?? '');
$complemento = trim($_POST['complemento'] ?? '');
$bairro      = trim($_POST['bairro']      ?? '');
$cidade      = trim($_POST['cidade']      ?? '');
$estado      = strtoupper(trim($_POST['estado'] ?? ''));

if (empty($nome) || empty($email) || empty($telefone) || empty($rua) || empty($numero) || empty($bairro) || empty($cidade) || empty($estado)) {
    $_SESSION['erro_cliente'] = 'Preencha todos os campos obrigatórios.';
    header('Location: cliente.php');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['erro_cliente'] = 'Informe um e-mail válido.';
    header('Location: cliente.php');
    exit;
}

if (strlen($estado) !== 2) {
    $_SESSION['erro_cliente'] = 'O estado deve ter 2 letras.';
    header('Location: cliente.php');
    exit;
}

try {
    $stmt = $db->prepare("
        INSERT INTO cliente (nome, email, telefone, rua, numero, complemento, bairro, cidade, estado)
        VALUES (:nome, :email, :telefone, :rua, :numero, :complemento, :bairro, :cidade, :estado)
    ");
    $stmt->execute([
        ':nome'        => $nome,
        ':email'       => $email,
        ':telefone'    => $telefone,
        ':rua'         => $rua,
        ':numero'      => $numero,
        ':complemento' => $complemento,
        ':bairro'      => $bairro,
        ':cidade'      => $cidade,
        ':estado'      => $estado,
    ]);

    $_SESSION['sucesso_cliente'] = 'Cliente cadastrado com sucesso!';
    header('Location: cliente.php');
    exit;

} catch (PDOException $e) {
    $_SESSION['erro_cliente'] = 'Erro ao cadastrar cliente: ' . $e->getMessage();
    header('Location: cliente.php');
    exit;
}
?>