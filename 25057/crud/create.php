<?php

include '../connection.php';

$query = "INSERT INTO contato (nome,contato,email) VALUES ('Joao Maria', '242145451', 'joao.maria@mail.com')";

if (mysqli_query($conn, $query)) {
    echo "Novo contacto criado com sucesso.";
} else {
    echo "Erro: " . mysqli_error($conn);
}

echo "<br>";

?>
