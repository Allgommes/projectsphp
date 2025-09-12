<?php

include 'config.php';

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

   
    $sql = "DELETE FROM Reservas WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: reservas.php");
        exit();
    } else {
        echo "Error deleting reservation: " . $conn->error;
    }
} else {
    echo "Invalid reservation ID.";
}

$conn->close();
?>
