<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro :: Livro</title>
    <link rel="stylesheet" href="estilo/estilo.css">

</head>

<body>
    <div class="titulo">
        <h1>CADASTRO DE LIVRO</h1>
    </div>

    <div class="conteudo">
        <form action="cad-livrobd.php" method="POST">
            <div class="atributos">
                <div class="individual">
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" id="titulo">
                </div>

                <div class="individual">
                    <label for="ano">Ano</label>
                    <input type="text" name="ano" id="ano">
                </div>

                <div class="individual">
                    <label for="editora">Editora</label>
                    <input type="text" name="editora" id="editora">
                </div>

                <div class="individual">
                    <label for="sinopse">Sinopse</label>
                    <textarea name="sinopse" id="sinopse"></textarea>
                </div>

                <div class="individual">
                    <label for="genero">Genero</label>
                    <input type="text" name="genero" id="genero">
                </div>

            </div>

            <div class="botao">
                <input type="reset" value="Limpar">
                <input type="submit" value="C A D A S T R A R">
            </div>

        </form>

        <div class="botao2">
            <a href="./view-livro.php">
                <input type="submit" value="Visualizar livros cadastrados">
            </a>
        </div>

    </div>

</body>

</html>