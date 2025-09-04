<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperatura</title>
</head>
<body>
    <!-- Formulário para entrada de temperatura em Celsius -->
     <form action="conversortemperatura.php" method="POST">
        <label for="celsius">Temperatura (°C):</label>
        <input type="number" step="any" name="celsius" id="celsius" required>
        <input type="submit" value="Converter">
    </form>
</body>
</html>