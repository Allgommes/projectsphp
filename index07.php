<?php 

/*criação de uma agenda de contactos 

Tarefa 2 - Agenda de Contactos

Base de Dados mysql:
Criar uma base de dados com o nome: agenda.
Criar uma tabela chamada contacto com os seguintes campos:
id (chave primária, auto-incremento)
nome (texto)
contacto (texto ou número)
email (texto)
*/

    $HOSTNAME = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DBNAME = "agenda";

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    //connectar a base de dados
    $conn = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DBNAME);
    //teste de conexao
    if (!$conn) {
        die ("Conecção falhou: " . mysqli_connect_error());
    }
    else{
        echo "Conectado com sucesso";
    }
    echo "<br>";
/* create - inserir dados na tabela */
    $query = "INSERT INTO contato (nome, contato, email) VALUES ('Alvaro', 'Portugal', 'teste@sapo.pt')"; //inserir dados na tabela
    if (mysqli_query($conn, $query)) { // if para verificar se a query foi executada com sucesso
        echo "Conexão realizada com sucesso";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    echo "<br>";
// READ - ler dados na tabela
    $query = "SELECT * FROM contato"; 
    $result = mysqli_query($conn, $query);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row["id"] . " - Nome:" . $row["nome"] . " - Contato: " . $row["contato"] . "- email:" .$row["email"]. "<br>";
        }
    } else {
        echo "Erro ao ler registos: " . mysqli_error($conn);
    }
    echo "<br>";
    // UPDATE - atualizar dados na tabela
    
    $query = "UPDATE contato SET nome='PHP CODE' WHERE id=5";
    if (mysqli_query($conn, $query)) {
        echo "Registo atualizado com sucesso (nome)";
    } else {
        echo "Erro ao atualizar o registo (nome): " . mysqli_error($conn);
    }
echo "<br>";
    $query = "UPDATE contato SET email='estafuncionar@yahoo.com' WHERE id=10";
    if (mysqli_query($conn, $query)) {
        echo "Registo atualizado com sucesso (email)";
    } else {
        echo "Erro ao atualizar o registo (email): " . mysqli_error($conn);
    }
echo "<br>";
    $query = "UPDATE contato SET contato='Estados Unidos' WHERE id=12";
    if (mysqli_query($conn, $query)) {
        echo "Registo atualizado com sucesso (contato): " . mysqli_affected_rows($conn);
    } else {
        echo "Erro ao atualizar registo (contato): " . mysqli_error($conn);
    }
echo "<br>";
    // apagar dados na tabela
    $query = "DELETE FROM contato WHERE id=10";
    if (mysqli_query($conn, $query)) {
        echo "Registo apagado com sucesso";
    } else {
        echo "Erro ao apagar registo: " . mysqli_error($conn);
    }
?>