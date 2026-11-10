<?php
require "../conexao.php";
require "../funcoes.php";
protegerPagina();

$id = (int)($_GET["id"] ?? 0);
$consulta = $pdo->prepare("SELECT * FROM produtos WHERE id = ?");
$consulta->execute([$id]);
$produto = $consulta->fetch(PDO::FETCH_ASSOC);

if (!$produto) {
    die("Produto não encontrado.");
}

$categorias = $pdo->query("SELECT * FROM categorias ORDER BY nome")->fetchAll(PDO::FETCH_ASSOC);
$erro = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nome"] ?? "");
    $descricao = trim($_POST["descricao"] ?? "");
    $preco = str_replace(",", ".", $_POST["preco"] ?? "0");
    $categoria_id = (int)($_POST["categoria_id"] ?? 0);

    if ($nome === "" || !is_numeric($preco) || (float)$preco < 0 || $categoria_id <= 0) {
        $erro = "Preencha os campos corretamente e escolha uma categoria.";
    } else {
        $sql = "UPDATE produtos
                SET nome = ?, descricao = ?, preco = ?, categoria_id = ?
                WHERE id = ?";
        $atualizar = $pdo->prepare($sql);
        $atualizar->execute([$nome, $descricao, $preco, $categoria_id, $id]);
        header("Location: produtos.php?mensagem=Produto atualizado com sucesso");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar produto</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<main class="formulario">
    <h1>Editar produto</h1>
    <?php if ($erro): ?><p class="erro"><?= h($erro) ?></p><?php endif; ?>
    <form method="POST">
        <label>Nome</label>
        <input type="text" name="nome" value="<?= h($produto["nome"]) ?>" required>

        <label>Descrição</label>
        <textarea name="descricao" rows="4"><?= h($produto["descricao"]) ?></textarea>

        <label>Preço</label>
        <input type="number" name="preco" step="0.01" min="0"
               value="<?= h($produto["preco"]) ?>" required>

        <label>Categoria</label>
        <select name="categoria_id" required>
            <?php foreach ($categorias as $categoria): ?>
                <option value="<?= (int)$categoria["id"] ?>"
                    <?= $categoria["id"] == $produto["categoria_id"] ? "selected" : "" ?>>
                    <?= h($categoria["nome"]) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Salvar alterações</button>
    </form>
    <p><a href="produtos.php">Voltar</a></p>
</main>
</body>
</html>
