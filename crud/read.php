<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $modelo = $_POST["modelo"];
    $ano = $_POST["ano"];

    if ($modelo == "" || $ano == "" || $ano <= 0) {
        echo "Preencha os campos corretamente.<br>";
    } else {
        $sqlInsert = "INSERT INTO Carros (modelo, ano) VALUES ('$modelo', $ano)";
        if ($conn->query($sqlInsert) === TRUE) {
            echo "<br>Carro inserido com sucesso!<br>";

            // 7. Mostrar último registro inserido
            $ultimo_id = $conn->insert_id;
            $sqlSelect = "SELECT * FROM Carros WHERE id = $ultimo_id";
            $resultado = $conn->query($sqlSelect);
            $carro = $resultado->fetch_assoc();
            echo "<br>ID: ".$carro['id']." Modelo: ".$carro['modelo']." Ano: ".$carro['ano']."<br>";
        } else {
            echo "Erro ao inserir: " . $conn->error . "<br>";
        }
    }
}




    echo "<h3>Carros cadastrados</h3>";
    $sqlAll = "SELECT * FROM Carros";
    $result = $conn->query($sqlAll);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr><th>ID</th><th>Modelo</th><th>Ano</th><th>Ações</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["modelo"]."</td>
                    <td>".$row["ano"]."</td>
                    <td class='acoes'>
                        <a href='update.php?id=" . $row["id"] . "'>Editar</a>
                        <a href='delete.php?id=" . $row["id"] . "'>Excluir</a>
                    </td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum carro cadastrado.<br>";
    }
    echo "<h3>Carros ordenados pelo ano</h3>";
    $sqlOrder = "SELECT * FROM Carros ORDER BY ano";
    $resOrder = $conn->query($sqlOrder);
    if ($resOrder->num_rows > 0) {
        echo "<table border='1'>
                <tr><th>ID</th><th>Modelo</th><th>Ano</th></tr>";
        while ($row = $resOrder->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["modelo"]."</td>
                    <td>".$row["ano"]."</td>
                </tr>";
        }
        echo "</table>";
    }

?>