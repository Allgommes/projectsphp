<?php
    /* if statement - executes some code if one condition is true

    if...else statement - executes some code if a condition is true and another code if that condition is false

    if...elseif...else statement - executes different codes for more than two conditions

    switch statement - selects one of many blocks of code to be executed
    
    for...- */

    /* estruturas condicionais if */

    $value = (int) readline("Digite um valor?");
    if($value > 10){
        echo "O valor digitado é maior que 10.\n";
    }
    
/*
    if (5 < 4) {
        echo "Hello";
    }
    echo ", my name is Linus"
   
    */

    /* if else */
    if($value >= 0 && $value <= 10){
        echo "o && (E) retorna true se ambos os operandos forem true.\n";
    }
    else{
        echo "O valor não está entre 0 e 10.\n";
    }

    /* if elseif else exemplo pratico */



?>