<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="exemplo_get.php" method = "get">
            Nome: <input type="text" name = "nome"><br>
            Email: <input type="email" name = "e-mail"><br>
            <input type="submit">
        </form> 
        
        <?php
         if (isset ($_GET['nome']) && isset ($_GET['e-mail'])){
            $nome = $_GET['nome'];
            $email = $_GET['e-mail'];
            echo "Olá, $nome! Seu endereço de e-mail é $email";
         }
        ?>
    </body>
</html>