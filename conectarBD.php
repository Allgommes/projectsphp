<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "northwind";

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    //connectar a base de dados
    $conn = mysqli_connect("localhost", "root", "", "northwind");
    //teste de conexao
    if (!$conn) {
        echo "You are connected";
    }
    else{
        echo "Could not connected";
    }

   
?>