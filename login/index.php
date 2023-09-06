<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="refresh" content="5; url='./app/login/cad-login.php'">
    
    <title>Login de Acesso</title>
    <link rel="stylesheet" href="./app/css/grid.css">
    <link rel="stylesheet" href="./app/css/formulario.css">
    <link rel="stylesheet" href="./app/css/estilo.css">
    <style>
        form{
            padding: 30px;
        }

        .login{
            width: 400px;
            margin: 0 auto;  
            background-color: #f3f3f3;  
            border-radius: 3px;                  
        }

        .login h1{
            font-family: 'Times New Roman', Times, serif;
            font-size: 40px;
            font-style: italic;
            margin-top: 20px;
            font-weight: 100;
        }
        
        /* espaçamento entre os objetos */
        .espaco-v{ height: 10px; }
        .espaco-h{ width: 10px; }

        /*alinhamento dos objetos*/
        .centralizar-v{ display: flex; align-items: center;}
        .centralizar-h{ display: flex; justify-content: center;}

        .conteudo{
            display: flex;
            height: 100vh;
            align-items: center;  
        }
    </style>
</head>
<body>
    <div class="conteudo">
        <div class="login">            
            <h1 class="centralizar-h" 
                style="background-color: red; color: white">
                Redirecionando...
            </h1>
            <h1 class="centralizar-h">Sistema de Login</h1>
            <form action="#" method="POST">
                <div class="row">
                    <label for="email">EMAIL</label>
                    <input type="email" name="email" id="email">
                </div>

                <div class="espaco-v"></div>
                
                <div class="row">
                    <label for="senha">SENHA</label>
                    <input type="text" name="senha" id="senha">
                </div>
                
                <div class="espaco-v"></div>
                
                <div class="row-flex centralizar-h">
                    <input type="reset" value="Limpar">
                    <div class="espaco-h"></div>
                    <input type="submit" value="L O G A R">
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>