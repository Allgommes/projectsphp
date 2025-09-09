<?php

    $HOSTNAME = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DBNAME = "agenda";

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); //ativar erros do mysqli

    //connectar a base de dados
    $conn = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DBNAME);


?>
