<?php 
include '../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = intval($_POST["id"]);
    $cliente = mysqli_real_escape_string($conn, $_POST['cliente']);
    $quarto = intval($_POST['quarto']);
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    
    // Validar datas
    if ($checkin >= $checkout) {
        header("Location: ../index.php?message=Erro: A data de check-out deve ser posterior à data de check-in.");
        exit();
    }
    
    $query = "UPDATE Reservas SET cliente='$cliente', quarto=$quarto, checkin='$checkin', checkout='$checkout' WHERE id=$id";
    
    if (mysqli_query($conn, $query)) {
        if (mysqli_affected_rows($conn) > 0) {
            header("Location: ../index.php?message=Reserva atualizada com sucesso.");
        } else {
            header("Location: ../index.php?message=Nenhuma reserva encontrada com o ID especificado.");
        }
    } else {
        header("Location: ../index.php?message=Erro ao atualizar reserva: " . urlencode(mysqli_error($conn)));
    }
    exit();
} else {
    header("Location: ../index.php");
    exit();
}
?>