<?php
require_once 'banco.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ALIM - Início</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <a href="index.php" class="logo">
            <img src="image.png" alt="ALIM" class="logo-img">
            <span class="logo-texto">AL<span>IM</span></span>
        </a>
        <nav>
            <a href="index.php" class="ativo">Início</a>
            <a href="cliente.php">Clientes</a>
            <a href="produto.php">Produtos</a>
        </nav>
    </header>

    <div class="container">

        <div class="hero">

            <!-- COLUNA ESQUERDA -->
            <div class="hero-texto">

                <div class="rotator">
                    <span class="fixo">Sua loja</span>
                    <span class="rotativo">
                        <span>simples</span>
                        <span>rápida</span>
                        <span>moderna</span>
                        <span>inteligente</span>
                        <span>no controle</span>
                    </span>
                </div>

                <h1 class="glitch" data-text="Bem-vindo à ALIM.">
                    Bem-vindo à <span style="color:var(--vermelho);">ALIM.</span>
                </h1>

                <p class="decode">
                    <span style="--i:0;">C</span><span style="--i:1;">a</span><span style="--i:2;">d</span><span style="--i:3;">a</span><span style="--i:4;">s</span><span style="--i:5;">t</span><span style="--i:6;">r</span><span style="--i:7;">e</span>
                    <span style="--i:8;"> </span>
                    <span style="--i:9;">c</span><span style="--i:10;">l</span><span style="--i:11;">i</span><span style="--i:12;">e</span><span style="--i:13;">n</span><span style="--i:14;">t</span><span style="--i:15;">e</span><span style="--i:16;">s</span><span style="--i:17;">,</span>
                    <span style="--i:18;"> </span>
                    <span style="--i:19;">p</span><span style="--i:20;">r</span><span style="--i:21;">o</span><span style="--i:22;">d</span><span style="--i:23;">u</span><span style="--i:24;">t</span><span style="--i:25;">o</span><span style="--i:26;">s</span>
                    <span style="--i:27;"> </span>
                    <span style="--i:28;">e</span>
                    <span style="--i:29;"> </span>
                    <span style="--i:30;">v</span><span style="--i:31;">i</span><span style="--i:32;">s</span><span style="--i:33;">u</span><span style="--i:34;">a</span><span style="--i:35;">l</span><span style="--i:36;">i</span><span style="--i:37;">z</span><span style="--i:38;">e</span>
                    <span style="--i:39;"> </span>
                    <span style="--i:40;">t</span><span style="--i:41;">u</span><span style="--i:42;">d</span><span style="--i:43;">o</span>
                    <span style="--i:44;"> </span>
                    <span style="--i:45;">e</span><span style="--i:46;">m</span>
                    <span style="--i:47;"> </span>
                    <span style="--i:48;">u</span><span style="--i:49;">m</span>
                    <span style="--i:50;"> </span>
                    <span style="--i:51;">s</span><span style="--i:52;">ó</span>
                    <span style="--i:53;"> </span>
                    <span style="--i:54;">l</span><span style="--i:55;">u</span><span style="--i:56;">g</span><span style="--i:57;">a</span><span style="--i:58;">r</span><span style="--i:59;">.</span>
                </p>

                <!-- AÇÕES -->
                <div class="grid-acoes">
                    <a href="cliente.php" class="card-acao">
                        <h3>Cadastrar Cliente</h3>
                        <p>Registre novos clientes com nome, e-mail, telefone e endereço completo.</p>
                    </a>

                    <a href="produto.php" class="card-acao">
                        <h3>Cadastrar Produto</h3>
                        <p>Adicione produtos com quantidade em estoque, valor de compra e valor de venda.</p>
                    </a>
                </div>

            </div>

            <!-- COLUNA DIREITA - 4 COLUNAS DE LETRAS -->
            <div class="hero-letras">

                <div class="letra-coluna">
                    <span class="letra-caindo">A</span>
                    <div class="letra-linha"></div>
                    <span class="letra-palavra">Automação</span>
                </div>

                <div class="letra-coluna">
                    <span class="letra-caindo">L</span>
                    <div class="letra-linha"></div>
                    <span class="letra-palavra">Logística</span>
                </div>

                <div class="letra-coluna">
                    <span class="letra-caindo">I</span>
                    <div class="letra-linha"></div>
                    <span class="letra-palavra">Inteligente</span>
                </div>

                <div class="letra-coluna">
                    <span class="letra-caindo">M</span>
                    <div class="letra-linha"></div>
                    <span class="letra-palavra">Mercadorias</span>
                </div>

            </div>

        </div>

    </div>

    <footer>
        <p>Projeto acadêmico — Desenvolvimento de Sistemas</p>
    </footer>

</body>
</html>