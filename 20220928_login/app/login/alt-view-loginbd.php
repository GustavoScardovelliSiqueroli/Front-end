<?php
    require_once("../_conexao/conexao.php");

    $id = filter_input(INPUT_GET,"id",FILTER_SANITIZE_NUMBER_INT);

    try{

        $comandoSQL = $conexao->prepare("SELECT * FROM login WHERE idLogin=:id");

        $comandoSQL->bindValue(":id", $id, PDO::PARAM_INT);

        $comandoSQL->execute();

        $linha = $comandoSQL->fetch(PDO::FETCH_ASSOC);

    }catch(PDOException $erro){
        echo("Mensagem de erro: ". $erro->getMessage());
    }