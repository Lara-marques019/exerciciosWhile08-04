<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Jogo do Número da Sorte</title>
</head>
<body>
    <h2>Jogo do Número da Sorte</h2>

    <?php
    // Gera o número da sorte e inicia tentativas
    $numeroSorteado = rand(0, 100);
    $tentativas = 1;
    ?>

    <form action="Dcalcular.php" method="post">
        <label>Digite seu palpite (0 a 100):</label><br>
        <input type="number" name="palpite" required><br><br>

        <input type="hidden" name="sorteado" value="<?= $numeroSorteado ?>">
        <input type="hidden" name="tentativas" value="<?= $tentativas ?>">

        <input type="submit" value="Enviar Palpite">
    </form>
</body>
</html>
