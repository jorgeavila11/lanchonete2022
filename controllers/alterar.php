<?php
    include '../db/conexao.php';

    $sql = "UPDATE usuarios SET nome ='?', email = '?', senha= '?' WHERE id= ?";

    if ($conn->query($sql) === TRUE) {
        echo "Atualizado com sucesso";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>