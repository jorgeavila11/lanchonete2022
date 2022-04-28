<?php

    include '../db/conaxao.php';


    $sql = "DELETE FROM pedidos WHERE id = ?";

    if (mysqli_query($conn, $sql)) {
        echo "Deletado com sucesso";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


?>