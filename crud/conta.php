<?php

$sqlCount = "SELECT COUNT(*) AS total FROM Carros";
$resCount = $conn->query($sqlCount);
$linhaCount = $resCount->fetch_assoc();
echo "<br>Total de carros: " . $linhaCount['total'] . "<br><br>";
// 17. Fechar conexão
$conn->close();

?>