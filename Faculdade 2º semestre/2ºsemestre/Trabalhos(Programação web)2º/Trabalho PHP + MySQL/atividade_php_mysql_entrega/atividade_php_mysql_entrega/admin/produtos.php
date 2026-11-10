<?php
require "../conexao.php";
require "../funcoes.php";
protegerPagina();

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
    <title>Gerenciar produtos</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<header class="topo">
    <h1>Painel administrativo</h1>
    <nav>
        <a href="produtos.php">Produtos</a>
        <a href="novo.php">Cadastrar produto</a>
        <a href="../index.php">Ver página pública</a>
        <a href="../logout.php">Sair</a>
    </nav>
</header>
<main class="container">
    <h2>Produtos cadastrados</h2>
    <p>Olá, <?= h($_SESSION["usuario_nome"]) ?>!</p>
    <p><a class="botao" href="novo.php">+ Novo produto</a></p>

    <?php if (isset($_GET["mensagem"])): ?>
        <p class="sucesso"><?= h($_GET["mensagem"]) ?></p>
    <?php endif; ?>

    <div class="tabela-responsiva">
    <table>
        <tr><th>Nome</th><th>Categoria</th><th>Preço</th><th>Ações</th></tr>
        <?php foreach ($produtos as $produto): ?>
        <tr>
            <td><?= h($produto["nome"]) ?></td>
            <td><?= h($produto["categoria_nome"]) ?></td>
            <td>R$ <?= number_format($produto["preco"], 2, ",", ".") ?></td>
            <td class="acoes">
                <a href="editar.php?id=<?= (int)$produto["id"] ?>">Editar</a>
                <a href="excluir.php?id=<?= (int)$produto["id"] ?>"
                   onclick="return confirm('Deseja realmente excluir este produto?')">Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
</main>
</body>
</html>
