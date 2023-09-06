<?php

require_once("_conexao/conexao.php");

$id = $_GET['id'];

$comandoSQL = $conexao->prepare("DELETE FROM livros WHERE idLivro=?");
$comandoSQL->execute([$id]);

header('location: view-livro.php');

?>