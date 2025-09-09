<?php
    
    include 'connection.php'; // caso não esteja na mesma pasta utilizar ../ para voltar uma pasta
    // UPDATE - atualizar dados na tabela
    $query = "UPDATE ID SET ID=' ' WHERE id=1";
    if (mysqli_query($conn, $query)) {
        echo "Registo atualizado com sucesso (contato): " . mysqli_affected_rows($conn);
    } else {
        echo "Erro ao atualizar registo (contato): " . mysqli_error($conn);
    }
echo "<br>";

?>