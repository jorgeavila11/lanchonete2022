<?php

    include '../db/conexao.php';
    
    $pedido = $_POST['pedido'];
    $preco = $_POST['preco'];
    $mesa = $_POST['mesa'];
    $observacao = $_POST['observacao'];

    
    $sql = "INSERT INTO pedido (nome_pedido, preco, mesa, observacao) VALUES ('$pedido', '$preco', '$mesa', '$observacao')";
    if (mysqli_query($conn, $sql)) {
        echo "Pedido cadastrado com sucesso!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


?>