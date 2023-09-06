<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar:: Login</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <link rel="stylesheet" href="../css/grid.css">
</head>
<body>
    <div class="container centralizar-h">
        <h1>ATUALIZAR CADASTRO</h1>
    </div>

    <?php
        require_once("./alt-view-loginbd.php"); 
    
    ?>

    <input type="hidden" name="id" value="<?$_GET['id'];?>">

    <div class="container">
        <form action="alt-loginbd.php" method="POST">
            <div class="row">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?=$linha['nomeLogin'];?>">
            </div>

            <div class="row">
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco" value="<?=$linha['enderecoLogin'];?>">
            </div>

            <div class="row-flex">
                <div class="row">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?=$linha['emailLogin'];?>">
                </div>
                <div class="row">
                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" value="<?=$linha['telefoneLogin'];?>">
                </div>
            </div>

            <div class="row-flex">
                <div class="row">
                    <label for="senha1">Senha</label>
                    <input type="password" name="senha1" id="senha1" value="**********">
                </div>
                <div class="row">
                    <label for="senha2">Confirmar senha</label>
                    <input type="password" name="senha2" id="senha2" value="**********">>
                </div>
            </div>

            <div class="row-flex">
                <div class="row">
                    <label for="nivel">Nível</label>
                    <select name="nivel" id="nivel">
                        <option value="1" <?=$opcao=$linha["nivelLogin"]==1?"selected":"";?>>Usuário</option>
                        <option value="2" <?=$opcao=$linha["nivelLogin"]==2?"selected":"";?>>Administrador</option>
                    </select>
                </div>

                <div class="row">
                    <label for="status">Status</label>
                    <select name="status" id="status">
                        <option value="1">Desativado</option>
                        <option value="2">Ativado</option>
                    </select>
                </div>
            </div>

            <div class="row-flex centralizar-h">
                <input type="reset" value="Voltar">
                <input type="submit" value="A T U A L I Z A R" style="background-color">
            </div>
        </form>
    </div>

</body>
</html>