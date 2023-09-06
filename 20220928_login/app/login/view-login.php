<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar :: Login</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" defer></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" defer ></script>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/grid.css">
</head>
<body>
    <div class="container centralizar-h">
        <h1>LISTA DE USUÁRIOS</h1>
    </div>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>TELEFONE</th>
                    <th>ATU</th>
                    <th>EXC</th>
                </tr>
            </thead>
            <tbody>    
                <?php
                    require_once("./view-loginbd.php");
                    foreach($linhas as $linha)
                    {
                ?>
                <tr>
                    <td><?=$linha["idLogin"];?></td>
                    <td><?=$linha["nomeLogin"];?></td>
                    <td><?=$linha["emailLogin"];?></td>
                    <td><?=$linha["telefoneLogin"];?></td>

                    <td align="center" width=60>
                        <a href="./alt-login.php?id=<?=$linha['idLogin'];?>">
                            <img src="img/editar.png" alt="Editar Registro" width="20">
                        </a>
                    </td>
                    
                    <td align="center" width=60>                        
                        <a href="./exc-login.php?id=<?=$linha['idLogin'];?>">
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

</body>
</html>