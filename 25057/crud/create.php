<?php

include '../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['nome']) && isset($_POST['contato']) && isset($_POST['email'])) {
        $query = "INSERT INTO contato (nome,contato,email) VALUES ('".$_POST['nome']."', '".$_POST['contato']."', '".$_POST['email']."')";  
        // echo var_dump($query);
        
   if (mysqli_query($conn, $query)) {
       echo "Novo contacto criado com sucesso.";
       header("Location: ../index.php");
       die();
   } else {
       echo "Erro: " . mysqli_error($conn);
   }
    echo "<br>";
     } else {
          echo "Todos os campos são obrigatórios.";
     }
} else {
    echo "Método inválido. Por favor, envie o formulário corretamente.";
    exit(); 
}

?>
