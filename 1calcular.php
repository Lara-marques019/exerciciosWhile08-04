<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado das Notas</title>
</head>
<body>
    <?php
    if (isset($_POST['valor'])) {
        $valor = intval($_POST['valor']);
        $notas = [100, 50, 20, 10, 5, 2, 1];

        echo "<h2>Notas para R$ $valor,00:</h2>";

        foreach ($notas as $nota) {
            $quantidade = intdiv($valor, $nota);
            $valor %= $nota;

            if ($quantidade > 0) {
                echo "$quantidade nota(s) de R$ $nota,00<br>";
            }
        }
    } else {
        echo "<p>Nenhum valor foi enviado.</p>";
    }
    ?>
    <br>
    <a href="1index.php">Voltar</a>
</body>
</html>
