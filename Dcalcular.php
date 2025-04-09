<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <?php
    $palpite = $_POST['palpite'];
    $sorteado = $_POST['sorteado'];
    $tentativas = $_POST['tentativas'];

    echo "<h2>Seu palpite: $palpite</h2>";

    if ($palpite == $sorteado) {
        echo "<h3>🎉 Parabéns! Você acertou!</h3>";
        echo "<p>Número sorteado: <strong>$sorteado</strong></p>";
        echo "<p>Total de tentativas: <strong>$tentativas</strong></p>";
        echo '<br><a href="index.php">Jogar novamente</a>';
    } else {
        $tentativas++;
        $dica = ($palpite < $sorteado) ? "maior" : "menor";

        echo "<p>Errou! O número é <strong>$dica</strong> que $palpite.</p>";

        // Novo formulário para continuar tentando
        echo '
        <form action="calcular.php" method="post">
            <label>Digite outro palpite:</label><br>
            <input type="number" name="palpite" required><br><br>

            <input type="hidden" name="sorteado" value="' . $sorteado . '">
            <input type="hidden" name="tentativas" value="' . $tentativas . '">

            <input type="submit" value="Tentar Novamente">
        </form>';
    }
    ?>
</body>
</html>
