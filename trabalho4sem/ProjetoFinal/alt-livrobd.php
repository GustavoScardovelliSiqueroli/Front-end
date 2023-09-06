<?php

require_once '_conexao/conexao.php';

$titulo = limpaPost($_POST['titulo']);
$ano = limpaPost($_POST['ano']);
$editora = limpaPost($_POST['editora']);
$sinopse = limpaPost($_POST['sinopse']);
$genero = limpaPost($_POST['genero']);
$id = limpaPost($_POST['id']);

$sql = $conexao->prepare("UPDATE livros SET tituloLivro=?, anoLivro=?, editoraLivro=?, sinopseLivro=?, generoLivro=? WHERE idLivro=?");
$sql->execute([$titulo,$ano,$editora,$sinopse,$genero,$id]);

header('location: view-livro.php');

?>