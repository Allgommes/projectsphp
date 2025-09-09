<?php
    include 'connection.php'; //incluir ficheiro de conexao
    if($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['id'])){
        
    // apagar dados na tabela 
    $query = "DELETE FROM contato WHERE id=" . $_GET['id']; 
    if (mysqli_query($conn, $query)) {
        if (mysqli_affected_rows($conn) > 0)
            header("Location: index.php");
            exit();
        echo "Registo apagado com sucesso" . mysqli_affected_rows($conn);
    } else {
        echo "Erro ao apagar registo: " . mysqli_error($conn);
    }
}else{
    die("Acesso negado");
}

?>