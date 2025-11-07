<?php
    include 'conexao.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM carros where id=$id";

        if ($conn->query($sql) === TRUE) {
            header("Location: index.php");
        } else {
            echo "Erro: " . $conn->error;
        }
    }

?>