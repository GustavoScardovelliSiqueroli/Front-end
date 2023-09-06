<?php
    // echo "<pre>";
    //       print_r($_POST);
    //       print_r($_SERVER["REQUEST_METHOD"]);
    // echo "</pre>";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        // Limpando os dados de entrada
        $titulo       = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $ano   = filter_input(INPUT_POST, "ano", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $editora      = filter_input(INPUT_POST, "editora", FILTER_SANITIZE_EMAIL);
        $sinopse   = filter_input(INPUT_POST, "sinopse", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $genero     = filter_input(INPUT_POST, "genero", FILTER_SANITIZE_FULL_SPECIAL_CHARS);        


        // conectar com o banco dados
        require_once("_conexao/conexao.php");

        try{
            
            // preparação para gravação
            $comandoSQL = $conexao->prepare("INSERT INTO `livros` 
                (`tituloLivro`, `anoLivro`, `editoraLivro`, 
                 `sinopseLivro`, `generoLivro`)
                VALUES
                (
                    :titulo, :ano, :editora, :sinopse, :genero
                )" 
            );

            // Gravação dos dados no banco
            $comandoSQL->execute(array(
                ":titulo"     => $titulo,
                ":ano" => $ano,
                ":editora"    => $editora,
                ":sinopse" => $sinopse,
                ":genero"   => $genero
            ));

            // Verificar se a gravação dos dados foram feitas
            if($comandoSQL->rowCount() > 0){
                echo("Dados inseridos com sucesso!");
            }
            else{
                echo("Erro na gravação dos dados!");
            }

        }catch(PDOException $erro){
            // Usado em mode de desenvolvimento
            echo "ERRO: ".$erro->getCode()."<br>";
            echo "MENSAGEM: ".$erro->getMessage()."<br>";
        }



    }else{
        echo "Procure o administrador do APP.";
    }