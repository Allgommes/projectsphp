<?php
 

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['age']) && $_POST['age'] != ''){
        $age = (int) $_POST['age'];

        $age = $_POST['age'];
if ($age < 14) {
    echo "<h1> Não pode tirar a carta nenhuma! </h1>";
}else{
    if( $age >= 14 ){
        echo "<h1> Pode tirar a categoria AM! </h1>";
    }
    if( $age >= 16 ){
        echo "<h1> Pode tirar a categoria A1! </h1>";
    }
    if( $age >= 18 ){
        echo "<h1> Pode tirar a categoria A2! </h1>";
    }
    if( $age >= 24 ){
        echo "<h1> Pode tirar a categoria A! </h1>";
    }
    
}
 }else{
    echo "<h1> Por favor insira a sua idade! </h1>";
 }
 }
 
?>