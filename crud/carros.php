<?php
    $sql = "CREATE TABLE IF NOT EXISTS Carros (
        id INT AUTO_INCREMENT PRIMARY KEY,
        modelo VARCHAR(255),
        ano INT
    )";
    $conn->query($sql);

?>