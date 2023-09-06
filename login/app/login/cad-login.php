<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro :: Login</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <link rel="stylesheet" href="../css/grid.css">
</head>
<body>
    <div class="container centralizar-h">
        <h1>CADASTRO DE USUÁRIO</h1>
    </div>

    <div class="container">
        <form action="cad-loginbd.php" method="POST">
            <div class="row">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>

            <div class="row">
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco">
            </div>

            <div class="row-flex">
                <div class="row">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="row">
                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" id="telefone">
                </div>
            </div>

            <div class="row-flex">
                <div class="row">
                    <label for="senha1">Senha</label>
                    <input type="password" name="senha1" id="senha1">
                </div>
                <div class="row">
                    <label for="senha2">Confirmar senha</label>
                    <input type="password" name="senha2" id="senha2">
                </div>
            </div>

            <div class="row-flex">
                <div class="row">
                    <label for="nivel">Nível</label>
                    <select name="nivel" id="nivel">
                        <option value="1">Usuário</option>
                        <option value="2">Administrador</option>
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
                <input type="reset" value="Limpar">
                <input type="submit" value="C A D A S T R A R">
            </div>
        </form>
    </div>

</body>
</html>