<?php
// index06.php
    
    /*CRUD - CREATE READ UPDATE DELETE */
    
    $HOSTNAME = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DBNAME = "php";

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    //connectar a base de dados
    $conn = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DBNAME);
    //teste de conexao
    if (!$conn) {
        die ("Connection failed: " . mysqli_connect_error());
    }
    else{
        echo "Connected successfully";
    }
/* create - inserir dados na tabela */
    $query = "INSERT INTO tarefa (descricao, dataLimite) VALUES ('Tarefa 1', '2024-12-31')"; //inserir dados na tabela
    if (mysqli_query($conn, $query)) { // if para verificar se a query foi executada com sucesso
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    echo "<br>";
// READ - ler dados na tabela
    $query = "SELECT * FROM tarefa"; //ler dados na tabela
    $result = mysqli_query($conn, $query);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row["id"] . " - Descrição: " . $row["descricao"] . " - Data Limite: " . $row["dataLimite"] . "<br>";
        }
    } else {
        echo "Error reading records: " . mysqli_error($conn);
    }

    // atualizar dados na tabela
    $query = "UPDATE tarefa SET descricao='Tarefa 1 atualizada' WHERE id=1"; //atualizar dados na tabela
    if (mysqli_query($conn, $query)) { // if para verificar se a query foi executada com sucesso
        if (mysqli_affected_rows($conn) > 0) { //verifica se alguma linha foi afetada
            echo "Record updated successfully";
        } else {
            echo "No records were updated.";
        }
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    echo "<br>";
    // deletar dados na tabela
    $query = "DELETE FROM tarefa WHERE id=1"; //deletar dados na tabela
    if (mysqli_query($conn, $query)) { // if para verificar se a query foi executada com sucesso
        if (mysqli_affected_rows($conn) > 0) { //verifica se alguma linha foi afetada
            echo "Record deleted successfully";
        } else {
            echo "No records were deleted.";
        }
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

   

?>