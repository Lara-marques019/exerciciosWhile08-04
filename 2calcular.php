<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <?php
    if (isset($_POST['numero'])) {
        $numero = intval($_POST['numero']);
        $contador = 0;

        echo "<h2>Processo de subtração:</h2>";

        while ($numero > 0) {
            $aleatorio = rand(1, 10);
            $numero -= $aleatorio;
            $contador++;
            echo "Tentativa $contador: Subtraindo $aleatorio → Valor atual: $numero<br>";
        }

        echo "<h3>O processo foi executado $contador vezes até o número ser igual ou menor que zero.</h3>";
    } else {
        echo "<p>Nenhum número foi enviado.</p>";
    }
    ?>
    <br>
    <a href="2index.php">Voltar</a>
</body>
</html>
