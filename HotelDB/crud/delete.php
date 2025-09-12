<?php 
include "../connection.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = intval($_GET["id"]);
    
    // Verificar se a reserva existe e está ativa antes de cancelar
    $check_query = "SELECT estado FROM Reservas WHERE id = $id";
    $check_result = mysqli_query($conn, $check_query);
    
    if ($check_result && mysqli_num_rows($check_result) > 0) {
        $row = mysqli_fetch_assoc($check_result);
        
        if ($row["estado"] == "Ativa") {
            // Atualizar o estado para "Cancelada" em vez de apagar
            $query = "UPDATE Reservas SET estado = 'Cancelada' WHERE id = $id";
            
            if (mysqli_query($conn, $query)) {
                if (mysqli_affected_rows($conn) > 0) {
                    header("Location: ../index.php?message=Reserva cancelada com sucesso.");
                    exit();
                } else {
                    header("Location: ../index.php?message=Nenhuma reserva encontrada com o ID especificado.");
                    exit();
                }
            } else {
                header("Location: ../index.php?message=Erro ao cancelar reserva: " . urlencode(mysqli_error($conn)));
                exit();
            }
        } else {
            header("Location: ../index.php?message=Esta reserva já foi cancelada anteriormente.");
            exit();
        }
    } else {
        header("Location: ../index.php?message=Nenhuma reserva encontrada com o ID especificado.");
        exit();
    }
} else {
    header("Location: ../index.php?message=Operação falhou: ID não especificado.");
    exit();
}
?>