<!DOCTYPE html>
<html>
<head>
    <title>Gerador de Tabuada</title>
</head>
<body>
    <h1>Gerador de Tabuada</h1>
    <form method="post" action="">
        <label for="number">Selecione um número:</label>
        <select name="number" id="number">
            <?php
            // Gerar opções do 1 ao 10
            for ($i = 1; $i <= 10; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select>
        <input type="submit" value="Gerar Tabuada">
    </form>

    <?php
    // Verificar se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obter o número selecionado pelo usuário
        $selectedNumber = $_POST["number"];

        // Exibir a tabuada
        echo "<h2>Tabuada do $selectedNumber</h2>";
        echo "<table>";
        for ($i = 0; $i <= 10; $i++) {
            $result = $selectedNumber * $i;
            echo "<tr><td>$selectedNumber x $i</td><td>=</td><td>$result</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>