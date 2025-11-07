<?php
    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        echo '
        <form method="POST">
            <h1>Formulário</h1><br><br>
            <input type="text" name="modelo" placeholder="Modelo"><br><br>
            <input type="number" name="ano" placeholder="Ano"><br><br>
            <input type="submit" class="button" value="Enviar">
        </form>
        ';
    }

?>