<?php
    require_once("_conexao/conexao.php");

    try{

        $comandoSQL = "SELECT * FROM livros";

        $selecionados = $conexao->query($comandoSQL);

        $linhas = $selecionados->fetchAll(PDO::FETCH_ASSOC);        

    }catch(PDOException $erro){
        echo("Mensagem de erro: ".$erro->getMessage());
    }