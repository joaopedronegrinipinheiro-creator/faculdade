<?php
require "../conexao.php";
require "../funcoes.php";
protegerPagina();

$id = (int)($_GET["id"] ?? 0);
$consulta = $pdo->prepare("DELETE FROM produtos WHERE id = ?");
$consulta->execute([$id]);

header("Location: produtos.php?mensagem=Produto excluído");
exit;
?>
