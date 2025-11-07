<?php
    include 'conexao.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM carros WHERE id=$id";
        $result = $conn->query($sql);
        $modelo = $result->fetch_assoc();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $modelo = $_POST['modelo'];
        $ano = $_POST['ano'];
        $sql = "UPDATE carros SET modelo='$modelo', ano='$ano'
        WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            header("Location: index.php");
        } else {
            echo "Erro: " . $conn->error;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Usuário</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <form action="" method="POST" class="form2">
        <h1>Atualizar</h1>
        <input type="text" name="modelo" placeholder="Modelo" required>
        <input type="number" name="ano" placeholder="Ano" required>
        <input type="submit" value="Atualizar" class="button">
    </form>
    <a href="index.php" class="cancelar">Cancelar</a><br>
</body>
</html>