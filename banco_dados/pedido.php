<?php
    include("conexao.php"); // Arquivo PHP referente ao banco de dados
    if (isset ($_POST['bt_nome'])){
        // Início do campo de variáveis
        $nome = $_POST['bt_nome'];
        $endereco = $_POST['bt_endereco'];
        $telefone = $_POST['bt_telefone'];
        $pedido = $_POST['bt_pedido'];
        // Fim do campo de variáveis
        $mysqli -> query("INSERT INTO pedido (nome, endereco, telefone, pedido) values ('$nome', '$endereco', '$telefone', '$pedido')") or
        die ($mysqli->error);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Pedidos</title>
</head>

<body>
    <div class="container">
        <h1>Tela de Pedidos do Buteco do Nunes</h1>
        <form action="" method = "post">
            <div class="mb-3">
                <label for="">Nome:</label>
                <input type="text" class="form-control" name = "bt_nome">
            </div>
            <div class="mb-3">
                <label for="">Endereço:</label>
                <input type="text" class="form-control" name = "bt_endereco">
            </div>
            <div class="mb-3">
                <label for="">Telefone:</label>
                <input type="text" class="form-control" name = "bt_telefone">
            </div>
            <div class="mb-3">
                <label for="">Seu pedido:</label>
                <input type="text" class="form-control" name = "bt_pedido">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-success" value="Realizar pedido">
                <a class="btn btn-danger" href="index.php">Cancelar</a>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>