<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Notas</title>
</head>
<body>
    <h1>Informe um valor em dinheiro</h1>
    <form action="1calcular.php" method="post">
        <label> Valor (em reais):</label><br>
        <input type="number" name="valor" min="0" required><br><br>

        <input type="submit" value="Calcular Notas">
    </form>
</body>
</html>
