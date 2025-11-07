<?php
    $servername = "localhost";
    $username = "root";
    $password = "Senai@118";
    $dbname = "teste_formulario";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

?>