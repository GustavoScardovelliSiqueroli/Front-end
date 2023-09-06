<?php
    $_dns = "mysql:host=localhost;dbname=trabalho4sem";
    $_user = "root";
    $_pass = "";

    try{
        // ok
        $conexao = new PDO($_dns, $_user, $_pass);
        //echo "Conectado com sucesso!";

    }catch(PDOException $erro){
        // Usado em mode de desenvolvimento
        echo "ERRO: ".$erro->getCode()."<br>";
        echo "MENSAGEM: ".$erro->getMessage()."<br>";
    }

    function limpaPost($dados){
        $dados = trim($dados);
        $dados = stripslashes($dados);
        $dados = htmlspecialchars($dados);
        return $dados;
    }