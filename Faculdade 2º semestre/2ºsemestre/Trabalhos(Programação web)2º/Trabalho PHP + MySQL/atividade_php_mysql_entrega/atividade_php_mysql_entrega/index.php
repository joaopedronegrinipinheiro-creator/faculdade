<?php
require "conexao.php";
require "funcoes.php";

$sql = "SELECT produtos.*, categorias.nome AS categoria_nome
        FROM produtos
        INNER JOIN categorias ON produtos.categoria_id = categorias.id
        ORDER BY produtos.id DESC";
$produtos = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<header class="topo">
    <h1>Minha Loja</h1>
    <nav>
        <a href="index.php">Produtos</a>
        <a href="login.php">Entrar</a>
    </nav>
</header>

<main class="container">
    <h2>Produtos cadastrados</h2>

    <?php if (count($produtos) === 0): ?>
        <p class="aviso">Nenhum produto cadastrado ainda.</p>
    <?php else: ?>
        <section class="grade">
            <?php foreach ($produtos as $produto): ?>
                <article class="card">
                    <h3><?= h($produto["nome"]) ?></h3>
                    <p><?= nl2br(h($produto["descricao"])) ?></p>
                    <p><strong>Categoria:</strong> <?= h($produto["categoria_nome"]) ?></p>
                    <p class="preco">R$ <?= number_format($produto["preco"], 2, ",", ".") ?></p>
                </article>
            <?php endforeach; ?>
        </section>
    <?php endif; ?>
</main>
</body>
</html>
