<?php
    
    include 'connection.php'; //incluir ficheiro de conexao
    $query = "INSERT INTO contato (nome, contato, email) VALUES ('Alvaro', 'telemovel', 'teste@sapo.pt')"; //inserir dados na tabela
    if (mysqli_query($conn, $query)) { // if para verificar se a query foi executada com sucesso
        echo "Conexão realizada com sucesso" . mysqli_affected_rows($conn);
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    echo "<br>";
?>