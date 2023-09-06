<?php
    // echo "<pre>";
    //       print_r($_POST);
    //       print_r($_SERVER["REQUEST_METHOD"]);
    // echo "</pre>";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        // Limpando os dados de entrada
        $nome       = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $endereco   = filter_input(INPUT_POST, "endereco", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email      = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $telefone   = filter_input(INPUT_POST, "telefone", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $senha1     = filter_input(INPUT_POST, "senha1", FILTER_SANITIZE_FULL_SPECIAL_CHARS);        
        $nivel      = filter_input(INPUT_POST, "nivel", FILTER_SANITIZE_NUMBER_INT);
        $status     = filter_input(INPUT_POST, "status", FILTER_SANITIZE_NUMBER_INT); 
        $foto       = "sem-foto.jpg";

        // conectar com o banco dados
        require_once("../_conexao/conexao.php");

        try{
            
            // preparação para gravação
            $comandoSQL = $conexao->prepare("INSERT INTO `login` 
                (`nomeLogin`, `enderecoLogin`, `emailLogin`, 
                 `telefoneLogin`, `senhaLogin`, `nivelLogin`, 
                 `statusLogin`, `fotoLogin`)
                VALUES
                (
                    :nome, :endereco, :email, :telefone, :senha1, 
                    :nivel, :status, :foto 
                )" 
            );

            // Gravação dos dados no banco
            $comandoSQL->execute(array(
                ":nome"     => $nome,
                ":endereco" => $endereco,
                ":email"    => $email,
                ":telefone" => $telefone,
                ":senha1"   => password_hash($senha1,PASSWORD_DEFAULT),
                ":nivel"    => $nivel,
                ":status"   => $status,
                ":foto"     => $foto
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