<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar :: Livro</title>
    <link rel="stylesheet" href="estilo/estilo.css">

</head>

<body>
    <div class="titulo">
        <h1>ATUALIZAR LIVRO</h1>
    </div>

    <div class="conteudo">
        <div class="atributos">
            <form action="alt-livrobd.php" method="POST">

                <?php
                require_once("./alt-view-livro.php");
                ?>

                <input type="hidden" name="id" value="<?= $_GET['id']; ?>">

                <div class="individual">
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" id="titulo" value="<?= $linha['tituloLivro']; ?>">
                </div>

                <div class="individual">
                    <label for="ano">Ano</label>
                    <input type="text" name="ano" id="ano" value="<?= $linha['anoLivro']; ?>">
                </div>


                <div class="individual">
                    <label for="editora">Editora</label>
                    <input type="text" name="editora" id="editora" value="<?= $linha['editoraLivro']; ?>">
                </div>

                <div class="individual">
                    <label for="sinopse">Sinopse</label>
                    <textarea type="text" name="sinopse" id="sinopse" value="<?= $linha['sinopseLivro']; ?>"></textarea>
                </div>



                <div class="individual">
                    <label for="genero">Genero</label>
                    <input type="text" name="genero" id="genero" value="<?= $linha['generoLivro']; ?>">
                </div>


        </div>
        <div class="botao">

            <input type="submit" value="A T U A L I Z A R">
        </div>

        </form>


        <div class="botao">
            <a href="./view-livro.php">
                <input type="submit" value="Voltar">
            </a>
        </div>

    </div>

</body>

</html>