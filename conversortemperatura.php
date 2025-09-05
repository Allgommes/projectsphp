<?php
#index04.php
    // Verifica se o formulário foi submetido
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Obtém o valor em Celsius do formulário
        $celsius = isset($_POST['celsius']) ? (float)$_POST['celsius'] : null;
            
        // Realiza a conversão para Fahrenheit
        if ($celsius !== null) {
            $fahrenheit = ($celsius * 9/5) + 32;
            // Exibe o resultado formatado
            echo "<h2>{$celsius} &deg;C = " . number_format($fahrenheit, 2) . " &deg;F</h2>";
        }
        // realiza a conversao para celsius
        if ($fahrenheit !== null) {
            $celsius = ($fahrenheit - 32) * 5/9;
            echo "<h2>{$fahrenheit} &deg;F = " . number_format($celsius, 2) . " &deg;C</h2>";
        }
    }

?>

