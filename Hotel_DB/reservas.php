<?php

$host = "localhost";
$user = "root";   
$pass = "";       
$db   = "HotelDB";

$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM Reservas";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel Reservations</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            padding: 10px;
            border: 1px solid #333;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .cancel-btn {
            color: white;
            background: red;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }
        .cancel-btn:hover {
            background: darkred;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Reservations List</h2>
    <table>
        <tr>
            <th>Client</th>
            <th>Room</th>
            <th>Check-in</th>
            <th>Check-out</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['cliente']}</td>
                        <td>{$row['quarto']}</td>
                        <td>{$row['checkin']}</td>
                        <td>{$row['checkout']}</td>
                        <td>{$row['estado']}</td>
                        <td><a class='cancel-btn' href='cancelar.php?id={$row['id']}'>Cancel</a></td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No reservations found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>
