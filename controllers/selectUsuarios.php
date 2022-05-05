<?php
    include '../db/conexao.php';

    $select = "SELECT * FROM usuario";//seleciona todos os campo da tabela 
    $result = mysqli_query($conn, $select);//faz uma query com o resultado do select
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){        
            echo "Nome: ".$row['nome']."<br>";
            echo "Email: ".$row['email']."<br>";
        } 
    }
?>