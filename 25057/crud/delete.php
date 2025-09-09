<?php 

include "../connection.php";

if( $_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])){

    $query = "DELETE FROM contato WHERE id=".$_GET["id"];

    if( mysqli_query($conn, $query) ) {
        //Verificar affected rows
        if (mysqli_affected_rows($conn) > 0) {
            header("Location: ../index.php");
            exit();
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