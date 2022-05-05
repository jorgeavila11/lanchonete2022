<?php
    include '../db/conexao.php';

    $nome = $_POST['nome']; 
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if (mysqli_query($conn, $sql)) {
        echo "Usuario cadastrado com sucesso!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>