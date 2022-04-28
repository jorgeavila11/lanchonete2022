<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="../controllers/inserirDados.php" method="post">
        <p>Nome: <input type="text" name="nome" id="nome"></p>
        <p>Email: <input type="email" name="email" id="email"></p>
        <p>Senha: <input type="password" name="senha" id="senha"></p>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>