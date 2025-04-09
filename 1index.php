<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contador de Notas</title>
</head>
<body>
    <h2>Digite um valor em dinheiro</h2>
    <form action="1calcular.php" method="post">
        <label for="valor">Valor (R$):</label>
        <input type="number" name="valor" id="valor" min="0" step="1" required>
        <br><br>
        <input type="submit" value="Calcular Notas">
    </form>
</body>
</html>

