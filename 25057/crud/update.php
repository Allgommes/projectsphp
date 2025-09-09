<?php 

include '../connection.php';

$query = "UPDATE contato SET nome='Joao Silva', contato='987654321', email='joao.silva@example.com' WHERE id=1";

    if( mysqli_query($conn, $query) ) {
        if ( mysqli_affected_rows($conn) > 0 ) {
        echo "Contacto atualizado com sucesso.";
        } else {
            echo "Nenhuma Contacto encontrado com o ID especificado.";
        }
    } else {
        echo "Erro: " . mysqli_error($conn);
    }
    echo "<br>";
?>