<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Simulação</title>
</head>
<body>
    <?php
    $base = rand(0, 100);
    $tentativas = 0;
    $numerosGerados = [];

    do {
        $gerado = rand(0, 100);
        $numerosGerados[] = $gerado;
        $tentativas++;
    } while ($gerado !== $base);

    echo "<h2>Resultado:</h2>";
    echo "<p>Número base (sorteado): <strong>$base</strong></p>";
    echo "<p>Total de números gerados até acertar: <strong>$tentativas</strong></p>";
    echo "<p>Números gerados:</p>";
    echo "<ul>";
    foreach ($numerosGerados as $num) {
        echo "<li>$num</li>";
    }
    echo "</ul>";
    ?>
    <br>
    <a href="3index.php">Tentar novamente</a>
</body>
</html>
