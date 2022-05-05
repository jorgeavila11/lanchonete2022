<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <?php session_start();
        ini_set('display_errors', 0 );
        if (!$_SESSION["email"]) {
            echo "";
        } else {
            echo "<h3> Usuario:" . $_SESSION["email"] . "</h3>";
        }

    ?>

    <form action="../controllers/inserirPedidos.php" method="post">
        <div class="form-group col-md-4">
            <label for="inputPedido">Nome do Pedido</label>
            <select id="inputPedido" name="pedido" class="form-control">
                <option selected>Escolher...</option>
                <option> Hamburger </option>
                <option> Bauru </option>
                <option> DuploCheedar </option>
                <option> DuploBacon </option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="inputPreco">Preço</label>
            <input type="text" name="preco" class="form-control" id="inputPreco">
        </div>
        <div class="form-group col-md-2">
            <label for="inputMesa">Mesa</label>
            <select id="inputMesa" name="mesa" class="form-control">
                <option selected>Escolher...</option>
                <option>01 </option>
                <option>02 </option>
                <option>03 </option>
                <option>04 </option>
                <option>05 </option>
                <option>06 </option>
                <option>07 </option>
            </select>
        </div>

        <div class="form-group col-md-4">
            <label for="inputTextarea">Observações</label>
            <textarea class="form-control" name="observacao" id="inputTextarea" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Inserir</button>
    </form>

</body>

</html>