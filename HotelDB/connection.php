<?php
    $HOSTNAME = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DBNAME = "HotelDB";

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); //ativar erros do mysqli

    //connectar a base de dados
    $conn = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DBNAME);

    if (!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    }
?>