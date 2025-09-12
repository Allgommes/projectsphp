<?php
include '../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cliente = mysqli_real_escape_string($conn, $_POST['cliente']);
    $quarto = intval($_POST['quarto']);
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    
    // Validar datas
    if ($checkin >= $checkout) {
        header("Location: ../index.php?message=Erro: A data de check-out deve ser posterior à data de check-in.");
        exit();
    }
    
    $query = "INSERT INTO Reservas (cliente, quarto, checkin, checkout) VALUES ('$cliente', $quarto, '$checkin', '$checkout')";
    
    if (mysqli_query($conn, $query)) {
        header("Location: ../index.php?message=Nova reserva criada com sucesso.");
    } else {
        header("Location: ../index.php?message=Erro ao criar reserva: " . urlencode(mysqli_error($conn)));
    }
    exit();
} else {
    header("Location: ../index.php");
    exit();
}
?>