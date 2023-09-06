<?php
    require_once("../_conexao/conexao.php");

    try{

        $comandoSQL = "SELECT * FROM login";
        $selecionados = $conexao->query($comandoSQL);
        $linhas = $selecionados->FetchAll();

    }catch(PDOException $erro){
        echo("Mensagem de erro: " .$erro->getMessage());
    }