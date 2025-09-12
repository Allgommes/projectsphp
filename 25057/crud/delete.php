<?php 

include "../connection.php";

if( $_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])){  //verificar se o id existe posso apagar
    //apagar o contacto com o id especificado

    $query = "DELETE FROM contato WHERE id=".$_GET["id"];

    if( mysqli_query($conn, $query) ) { // verificar se a query foi executada com sucesso
        //Verificar affected rows
        if (mysqli_affected_rows($conn) > 0) {
            header("Location: ../index.php"); // header para redirecionar
            exit(); // sair do script
        } else {
            echo "Nenhuma contacto encontrado com o ID especificado.";
        }
    } else {
        echo "Erro: " . mysqli_error($conn);
    }
    echo "<br>";

}else{
    echo "<h1>Operação falhou</h1>";
}

?>