<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar :: Livros</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" defer></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" defer></script>
    <link rel="stylesheet" href="estilo/estilo.css">

</head>

<body>
    <div class="titulo">
        <h1>LISTA DE LIVROS</h1>
    </div>

    <div class="tabela">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>TITULO</th>
                    <th>ANO</th>
                    <th>EDITORA</th>
                    <th>SINOPSE</th>
                    <th>GENERO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("./view-livrobd.php");
                foreach ($linhas as $linha) {
                ?>
                    <tr>
                        <td><?= $linha["idLivro"]; ?></td>
                        <td><?= $linha["tituloLivro"]; ?></td>
                        <td><?= $linha["anoLivro"]; ?></td>
                        <td><?= $linha["editoraLivro"]; ?></td>
                        <td><?= $linha["sinopseLivro"]; ?></td>
                        <td><?= $linha["generoLivro"]; ?></td>

                        <td align="center" width=60>
                            <a href="./alt-livro.php?id=<?= $linha['idLivro']; ?>">
                                <img src="img/editar.png" alt="Editar Registro" width="20">
                            </a>
                        </td>

                        <td align="center" width=60>
                            <a href="./exc-livro.php?id=<?= $linha['idLivro']; ?>">
                                <img src="img/excluir.png" alt="Excluir Registro" width="20">
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>

                <!--
                <tr>
                    <td>1</td>
                    <td>Fatec</td>
                    <td>Fatec@fatec</td>
                    <td>18 3625 9917</td>
                    <td><ion-icon name="create-outline"></ion-icon></td>
                    <td><ion-icon name="trash-outline"></ion-icon></td>
                </tr>
                -->
            </tbody>
        </table>


    </div>

    <div class="botao2">
        <a href="./cad-livro.php">
            <input type="submit" value="Cadastrar novo livro">
        </a>

    </div>


</body>

</html>