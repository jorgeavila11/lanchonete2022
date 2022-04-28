<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="form-group col-md-4">
        <label for="inputPedido">Nome do Pedido</label>
        <select id="inputPedido" class="form-control">
            <option selected>Escolher...</option>
            <option>01 - Hamburger </option>
            <option>02 - Bauru </option>
            <option>03 - DuploCheedar </option>
            <option>04 - DuploBacon </option>
        </select>
    </div>
    <div class="form-group col-md-2">
        <label for="inputPreco">Preço</label>
        <input type="text" class="form-control" id="inputPreco">
    </div>
    <div class="form-group col-md-2">
        <label for="inputMesa">Mesa</label>
        <select id="inputMesa" class="form-control">
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
        <textarea class="form-control" id="inputTextarea" rows="5"></textarea>
    </div>

</body>

</html>