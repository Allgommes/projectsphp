<?php
#index02.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nome"]) && isset($_POST["anoNascimento"]) && $_POST["nome"] != "" && $_POST["anoNascimento"] != "") {

        $idade = 2025 - $_POST["anoNascimento"];

        echo "Olá " . $_POST["nome"] . " têm " . $idade;
    } else {
        echo "ERRO - Variáveis não existem..";
    }
} else {
    echo "ERRO - Pedido GET inválido..";
}
