<?php
    $servername = "localhost";
    $database = "lanchonete";
    $username = "root";
    $password = "";
    // Criar conexão
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Verificar conexão
    if (!$conn) {
        die("Conexao falou: " . mysqli_connect_error());
    }
    echo "Conectado com sucesso <br>";
    
?>