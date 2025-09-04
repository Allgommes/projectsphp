<?php
 
    if( $_SERVER["REQUEST_METHOD"] == "POST" ){
 
        if( isset( $_POST["value"] ) && $_POST["value"] != "" ){
 
            $convertido = $_POST["value"] * 1.17;
 
            echo "O valor em dólar é ".$convertido." $.";
 
        }else{
            echo "Valor inválido para a conversão!";
        }
 
    }else{
        echo "Permission denied..";
        die();
    }
 
?>