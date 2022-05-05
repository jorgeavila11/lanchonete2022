<?php
    session_start();
    include '../db/conexao.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $select = "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) > 0){
        $_SESSION["email"] = $email;
        header('Location: ../views/pedidos.php');
    }else{        
        header('Location: ../home.php');
    }
    



?>